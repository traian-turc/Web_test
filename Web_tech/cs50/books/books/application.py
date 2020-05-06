import os
import requests
import json
from flask import Flask, render_template, request, session, jsonify
from flask_session import Session
from sqlalchemy import create_engine
from sqlalchemy.orm import scoped_session, sessionmaker
app = Flask(__name__)

engine = create_engine(os.getenv("DATABASE_URL"))
db = scoped_session(sessionmaker(bind=engine))
app.config["SESSION_PERMANENT"] = False
app.config["SESSION_TYPE"] = "filesystem"
Session(app)
@app.route("/")
def index():
    books = db.execute("SELECT * FROM books").fetchall()
    return render_template("index.html")

@app.route("/login")
def login():
    """Loghin."""
    return render_template("login.html")

@app.route("/login_v", methods=["POST"])
def login_v():
    """Loghin."""
    username = request.form.get("username")
    psw = request.form.get("psw")
    
    # Make sure the username exists.
    user = db.execute("SELECT * FROM users WHERE username = :username", {"username": username}).fetchone()
    if user is None:
        return render_template("error.html", message="No such user.")
    if user.psw !=psw:
        return render_template("error.html", message="Password mismatch.")
    session["name"]=user.name
    session["user_id"]=user.user_id
    session["log"]=1
    return render_template("success.html", message="login")
@app.route("/logout")
def logout():
    """Logout."""
    session["user_id"]=0
    session["name"]=""
    session["log"]=0
    return render_template("success.html", message="logout")


@app.route("/search")
def search():
    """Search for a book."""
    return render_template("search.html")

@app.route("/search_v", methods=["POST"])
def search_v():
    """Search for a book."""
    isbn = request.form.get("isbn")
    title = request.form.get("title")
    author = request.form.get("author")
    # Make sure the book exists.
    #if db.execute("SELECT * FROM books WHERE isbn = :isbn", {"isbn": isbn}).rowcount == 0:
        #return render_template("error.html", message=" No such book.")
    # Search for books.
    if len(isbn)>0:
        isbn="%"+isbn+"%"
        books=db.execute("SELECT * FROM books WHERE isbn LIKE :isbn", {"isbn": isbn}).fetchone()
        if books is None:
            return render_template("error.html", message="No such isbn.")
        books=db.execute("SELECT * FROM books WHERE isbn LIKE :isbn", {"isbn": isbn})
        return render_template("books.html", books=books)
    if len(title)>0:
        title="%"+title+"%"
        books=db.execute("SELECT * FROM books WHERE title LIKE :title", {"title": title}).fetchone()
        if books is None:
            return render_template("error.html", message="No such title.")
        books=db.execute("SELECT * FROM books WHERE title LIKE :title", {"title": title})
        return render_template("books.html", books=books)
    if len(author)>0:
        author="%"+author+"%"
        books=db.execute("SELECT * FROM books WHERE author LIKE :author", {"author": author}).fetchone()
        if books is None:
            return render_template("error.html", message="No such author.")    
        books=db.execute("SELECT * FROM books WHERE author LIKE :author", {"author": author})    
        return render_template("books.html", books=books)

@app.route("/review/<int:book_id>")
def review(book_id):
    """Review a single Book."""
    return render_template("review.html", id=book_id)

@app.route("/review_v", methods=["POST"])
def review_v():
    """Review a book."""
    # Get form information.
    user_id=session["user_id"]
    name=session["name"]
    review = request.form.get("review")
    try:
        rate = float(request.form.get("rate"))
    except ValueError:
        return render_template("error.html", message="Invalid rate.")
    try:
        book_id = int(request.form.get("book_id"))
    except ValueError:
        return render_template("error.html", message="Invalid book number.")
    # Make sure the book exists.
    if db.execute("SELECT * FROM books WHERE book_id = :book_id", {"book_id": book_id}).rowcount == 0:
        return render_template("error.html", message="No such book with that id.")
    db.execute("INSERT INTO reviews (user_id, book_id, review, rate, name) VALUES (:user_id, :book_id, :review, :rate, :name)",
            {"user_id": user_id, "book_id": book_id, "review": review, "rate": rate, "name": name})
    db.commit()
    return render_template("success.html", message="review this book")
    
@app.route("/books")
def books():
    """Lists all books."""
    books = db.execute("SELECT * FROM books LIMIT 100")
    return render_template("books.html", books=books)

@app.route("/book/<int:book_id>")
def book(book_id):
    """Lists details about a single book."""

    # Make sure book exists.
    book = db.execute("SELECT * FROM books WHERE book_id = :book_id", {"book_id": book_id}).fetchone()
    if book is None:
        return render_template("error.html", message="No such book.")

    # Get all reviews.
    reviews = db.execute("SELECT name, rate, review FROM reviews WHERE book_id = :book_id", {"book_id": book_id}).fetchall()
    return render_template("book.html", book=book, reviews=reviews)
	
@app.route("/register")
def register():
    """Register."""
    return render_template("register.html")

@app.route("/register_v", methods=["POST"])
def register_v():
    """Register a user."""
  
    name = request.form.get("name")
    username = request.form.get("username")
    psw = request.form.get("psw")
    # Make sure the username doesn't exists.
    if db.execute("SELECT * FROM users WHERE username = :username", {"username": username}).rowcount != 0:
        return render_template("error.html", message="Username already esists!")
    db.execute("INSERT INTO users (name, username, psw) VALUES (:name, :username, :psw)",{"name": name, "username": username, "psw": psw})
    db.commit()
    return render_template("success.html", message="add new user")

@app.route("/goodreads/<isbn>")
def goodreads(isbn):
    """Display (if available) the average rating and number of ratings the work has received from Goodreads."""
    params={"key": "PrLHuRJfdlRzIvxhxgOg", "isbns": isbn}
    res = requests.get("https://www.goodreads.com/book/review_counts.json", params)
    if res.status_code != 200:
        raise Exception("ERROR: API request unsuccessful.")
    data=res.json()
    
    """doesn't work"""
    #return data["books"]["isbn"]

    """works"""
    txt = json.dumps(data)
    txt = txt[11:(len(txt)-2)]
    data = json.loads(txt)
    txt= "Isbn: "+data["isbn"]+" Average rating : "+ str(data["average_rating"]) +" Number of ratings : "+ str(data["ratings_count"])
    return render_template("json.html", message=txt)

@app.route("/api/<int:book_id>")
def api(book_id):
    """Return details about a single book."""
    # Make sure flight exists.
    book = db.execute("SELECT * FROM books WHERE book_id = :book_id", {"book_id": book_id}).fetchone()
    if book is None:
        return jsonify({"error": "Invalid flight_id"}), 422
    # Get all reviews.
    nr_r = db.execute(" SELECT COUNT(rate) FROM reviews WHERE book_id = :book_id", {"book_id": book_id}).fetchall()
    av_r = db.execute(" SELECT AVG (rate) FROM reviews WHERE book_id = :book_id", {"book_id": book_id}).fetchall()
    #return book.title+str(nr_r[0])
    return jsonify({"title": book.title, "author": book.author, "year": book.year, "average_score": str(av_r[0][0]), "rate": str(nr_r[0][0])})

@app.route("/view_import")
def view_import():
    """View file import.py"""
    return render_template("view_import.html")

