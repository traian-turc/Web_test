import os
import requests
import datetime
from flask_session import Session
from flask import Flask, jsonify, render_template, request, session
from flask_socketio import SocketIO, emit, send
app = Flask(__name__)
app.config["SESSION_PERMANENT"] = False
app.config["SESSION_TYPE"] = "filesystem"
Session(app)
app.config["SECRET_KEY"] = os.getenv("SECRET_KEY")
socketio = SocketIO(app)
""" Default channels"""
chans = {"Sport": 0, "Music": 1, "Travels": 2 , "IT": 3 }
mess_s = [[""],[""],[""],[""]]
@app.route("/")
def index():
    session["chan"]="Music"
    return render_template("set_name.html")
    if session["log"]==0:
        return render_template("set_name.html")
    else:
        msgs = []
        nrc=chans[session["chan"]]
        msgs = mess_s[nrc]
        msgs.sort()
        return render_template("chat.html", msgs=msgs)
    
@app.route("/chat")
def chat():
    msgs = []
    nrc=chans[session["chan"]]
    msgs = mess_s[nrc]
    msgs.sort()
    return render_template("chat.html", msgs=msgs)

@app.route("/help")
def help():
    return render_template("help.html")

@app.route("/set_name")
def set_name():
    """Set  display name"""
    return render_template("set_name.html")

@app.route("/set_name_v", methods=["POST"])
def set_name_v():
    """Set display name"""
    name = request.form.get("name")
    if len(name)>0:
        session["name"]=name
        session["log"]=1
        msgs = []
        nrc=chans[session["chan"]]
        msgs = mess_s[nrc]
        msgs.sort()
        return render_template("chat.html", msgs=msgs)
    else:
        return render_template("error.html", message="Set display name")
    
@app.route("/set_ch")
def set_ch():
    """Set channel"""
    return render_template("set_ch.html", chans=chans)

@app.route("/set_ch_v", methods=["POST"])
def set_ch_v():
    """Set channel."""
    chan = request.form.get("chan")
    session["chan"]=chan
    #session[ch]=1
    msgs = []
    nrc=chans[session["chan"]]
    msgs = mess_s[nrc]
    msgs.sort()
    return render_template("chat.html", msgs=msgs)

@app.route("/add_ch")
def add_ch():
    """ Add channel."""
    return render_template("add_ch.html")

@app.route("/add_ch_v", methods=["POST"])
def add_ch_v():
    """Add channel."""
    name = request.form.get("name")
    if len(name)>0:
        if chans.get(name) == None:
            chans[name] = len(chans)
            mess_s.append([""])
            return render_template("success.html", message=" added the channel")
        else:
            return render_template("error.html", message="Channel exists!")
    else:
        return render_template("error.html", message="adding channel !")
    
@app.route("/logout")
def logout():
    """Logout."""
    session["log"]=0
    return render_template("success.html", message="logout")

@app.route("/ch_name")
def ch_name():
    """Logout."""
    session["log"]=0
    return render_template("set_name.html")

@socketio.on("message")
def handleMesages(msg):
    emit("message", msg, broadcast=True)
    nrc=chans[session["chan"]]
    if len(mess_s[nrc])>9:
       mess_s[nrc].pop(0)
    mess_s[nrc].append(msg)

@app.route("/dele_mes")
def dele_mes():
    """ Delete message"""
    nrc=chans[session["chan"]]
    return render_template("dele_mes.html", mess=mess_s[nrc])

@app.route("/dele_mes_v/<mes>")
def dele_mes_v(mes):
    """Delete message"""
    nrc=chans[session["chan"]]
    mess_s[nrc].remove(mes)
    msgs = mess_s[nrc]
    return render_template("chat.html", msgs=msgs)
