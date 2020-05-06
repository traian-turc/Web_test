import os
import requests
import datetime
import random 
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
chans = {"Alabama": 0, "Massachusetts": 1, "New York": 2 , "Texas": 3 }
mess_s = [[""],[""],[""],[""],[""]]
nrp = 225
def rand_val(v_v,mx):
    f=0
    k = random.randint(0,4)
    if k == 0:
        f = 1
    if k == 1:
        f = 3
    if k == 3:
        f = -3
    if k == 4:
        f = -1
    vl = v_v+f
    if vl > mx:
        vl = 2*mx/3
    if vl < 0:
        vl = mx/3
    return int(vl)
 
for chan in chans:
    nrc = chans[chan]
    t_max=100       # °C degree Celsius
    p_max=150       # kPa
    v_max=120       # km/h
    u_max=360       # degree
    v_t=0
    v_p=0
    v_v=0
    v_u=0
    for i in range(nrp):
        vl_t = rand_val(v_t,t_max)
        v_t = vl_t
        vl_p = rand_val(v_p,p_max)
        v_p = vl_p
        vl_v = rand_val(v_v,v_max)
        v_v = vl_v
        vl_u = rand_val(v_u,u_max)
        v_u = vl_u
        
        msg= str(vl_t) + "," + str(vl_p) + "," + str(vl_v) + "," + str(vl_u) + "," +chan
        mess_s[nrc].append(msg)
        
@app.route("/")
def index():
        #return render_template("error.html", message=mess_s)
        chan = "Massachusetts"
        nrc = chans[chan]
        name = ""
        adm = 0
        msgs = []
        msgs = mess_s[nrc]
        sav_t = ""
        sav_p = ""
        sav_v = ""
        sav_u = ""
        i=0
        for ms in msgs:
            if i > 0:
                val=ms.split(",")
                sav_t = sav_t + val[0] + ","
                sav_p = sav_p + val[1] + ","
                sav_v = sav_v + val[2] + ","
                sav_u = sav_u + val[3] + ","
            i = i + 1
        #msgs.sort()
        return render_template("trending.html", msgs=msgs, sav_t=sav_t, sav_p=sav_p, sav_v=sav_v, sav_u=sav_u, name=name, chan=chan, adm=adm)

    #session["chan"]="Music"
    #return render_template("set_name.html", chans=chans)
 
@app.route("/help")
def help():
    return render_template("help.html")

@app.route("/set_transmit")
def set_transmit():
    """Set the transmitting station"""
    return render_template("set_transmit.html", chans=chans)

@app.route("/set_transmit_v", methods=["POST"])
def set_transmit_v():
    """Set the transmitting station"""
    name = request.form.get("name")
    if name == "t":
        adm = 1 
    else:
        adm = 0
    chan = request.form.get("chan")
    nrc = chans[chan]
    if len(name) > 0:
        #session["name"]=name
        #session["log"]=1
        #session["chan"]=chan
        #session[ch]=1
        #nrc=chans[session["chan"]]
        nrc = chans[chan]
        msgs = mess_s[nrc]
        sav_t = ""
        sav_p = ""
        sav_v = ""
        sav_u = ""
        i=0
        for ms in msgs:
            if i > 0:
                val=ms.split(",")
                sav_t = sav_t + val[0] + ","
                sav_p = sav_p + val[1] + ","
                sav_v = sav_v + val[2] + ","
                sav_u = sav_u + val[3] + ","
            i = i + 1
        #msgs.sort()
        return render_template("trending.html", msgs=msgs, sav_t=sav_t, sav_p=sav_p, sav_v=sav_v, sav_u=sav_u, name=name, chan=chan, adm=adm)
    else:
        return render_template("error.html", message="Set display name")
    
@app.route("/set_station")
def set_station():
    """Set  display name"""
    return render_template("set_station.html", chans=chans)

@app.route("/set_station_v", methods=["POST"])
def set_station_v():
    """Set weather station"""
    chan = request.form.get("chan")
    nrc = chans[chan]
    name = ""
    adm = 0
    #session["chan"]=chan
    #session[ch]=1
    #nrc=chans[session["chan"]]
    msgs = []
    msgs = mess_s[nrc]
    sav_v = ""
    sav_u = ""
    sav_t = ""
    sav_p = ""
    i=0
    for ms in msgs:
        if i > 0:
            val=ms.split(",")
            sav_t = sav_t + val[0] + ","
            sav_p = sav_p + val[1] + ","
            sav_v = sav_v + val[2] + ","
            sav_u = sav_u + val[3] + ","
        i = i + 1
    #msgs.sort()
    return render_template("trending.html", msgs=msgs, sav_t=sav_t, sav_p=sav_p, sav_v=sav_v, sav_u=sav_u, name=name, chan=chan, adm=adm)

@app.route("/add_station")
def add_station():
    """ Add weather station."""
    return render_template("add_station.html")

@app.route("/add_station_v", methods=["POST"])
def add_station_v():
    """Add weather station."""
    name = request.form.get("name")
    if len(name)>0:
        if chans.get(name) == None:
            chans[name] = len(chans)
            mess_s.append([""])
            chan=name
            nrc = chans[chan]
            name = "t"
            adm = 1
            msgs = []
            msgs = mess_s[nrc]
            sav_t = ""
            sav_p = ""
            sav_v = ""
            sav_u = ""
            i=0
            for ms in msgs:
                if i > 0:
                    val=ms.split(",")
                    sav_t = sav_t + val[0] + ","
                    sav_p = sav_p + val[1] + ","
                    sav_v = sav_v + val[2] + ","
                    sav_u = sav_u + val[3] + ","
                i = i + 1
            #return render_template("success.html", message=msgs)
            return render_template("trending.html", msgs=msgs, sav_t=sav_t, sav_p=sav_p, sav_v=sav_v, sav_u=sav_u, name=name, chan=chan, adm=adm)
        else:
            return render_template("error.html", message="Channel exists!")
    else:
        return render_template("error.html", message="adding channel !")

@socketio.on("message")
def handleMesages(msg):
    txt = msg
    x = txt.split(",")
    #nrc = chans[session["chan"]]
    nrc = chans[x[4]]
    if (msg.find("NaN") != -1): 
        msg="0,0,0,0,XX"
    else:
        if len(mess_s[nrc])>nrp:
            mess_s[nrc].pop(0)
            mess_s[nrc].append(msg)    
    emit("message", msg, broadcast=True)


