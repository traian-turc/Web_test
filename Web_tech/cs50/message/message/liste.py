chans = {"Sport": 0, "Cultura": 1, "IT": 2 }
new_c="Test"
chans[new_c] = len(chans)
print("\nAfisare canale\n")   
for row in chans:
    print(row)

mess_s = [["09:23:21 Sport-Traian: Voi?","09:22:52 Sport-Vlad: Suntem bine","09:22:21 Sport-Traian: Salut! "],
            ["09:23:21 Cultura-Alexandru: Voi?","09:22:52 Cultura-Ionescu: Suntem bine","09:22:21 Cultura-Gabi: Salut voi?"],
            ["09:23:21 IT-Popescu: Voi ce faceti?","09:22:52 IT-Mircea: Suntem bine","09:22:21 IT-Razvan: Salut ce faceti?"]]
print("\n\nAfisare mesaje\n")

for row in mess_s:
    for col in row:
        print(col)
print(f"\nNumar de linii:{len(mess_s)}")  
print("\nAfisare linia Sport\n")

for row in mess_s[chans["Sport"]]:
    print(row)
    
nrc=chans["Sport"]
msg="Sport - Mesaj adaugat"
mess_s[nrc].append(msg)

print("\n\nAfisare mesaje dupa adaugare Sport - Mesaj adaugat \n")

for row in mess_s:
    for col in row:
        print(col)

print("\nAfisare mesaje dupa adaugare linia Test\n")
#b = [""]
mess_s.append([""])
nrc=chans["Test"]
msg="Test - Mesaj adaugat"
mess_s[nrc].append(msg)
for row in mess_s:
    for col in row:
        print(col)
