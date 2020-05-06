CREATE TABLE books (
	bok_id SERIAL PRIMARY KEY,
    isbn VARCHAR NOT NULL,
    title VARCHAR NOT NULL,
    author VARCHAR NOT NULL,
    year INTEGER NOT NULL
);

CREATE TABLE reviews (
	review_id SERIAL PRIMARY KEY,
    user_id INTEGER NOT NULL,
    book_id INTEGER NOT NULL,
    review VARCHAR NOT NULL,
	rate REAL NOT NULL, 
	name VARCHAR NOT NULL,
);

CREATE TABLE users (
	user_id SERIAL PRIMARY KEY,
    name VARCHAR NOT NULL,
    username VARCHAR NOT NULL,
    psw VARCHAR NOT NULL,
);
