from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.models import User
from django.http import HttpResponse, Http404, HttpResponseRedirect
from django.shortcuts import render
from django.urls import reverse
from django.db.models import Sum
from decimal import Decimal
from .models import Pizzas, Pizza_types, Toppings, Subs, Adds_subs, Pasta, Salads, Dinner_platters, Orders

def index(request):
     return HttpResponseRedirect(reverse("menu"))
def home(request):
     return render(request, "orders/home.html")
def log_in(request):
    if not request.user.is_authenticated:
        return render(request, "orders/login.html", {"message": None})
    context = {
        "user": request.user
    }
    return render(request, "orders/user.html", context)

def login_view(request):
    username = request.POST["username"]
    password = request.POST["password"]
    user = authenticate(request, username=username, password=password)
    if user is not None:
        login(request, user)
        return HttpResponseRedirect(reverse("index"))
    else:
        return render(request, "orders/login.html", {"message": "Invalid credentials."})

def logout_view(request):
    logout(request)
    #return render(request, "orders/login.html", {"message": "Logged out."})
    return HttpResponseRedirect(reverse("menu"))

def menu(request):
     user=request.user
     orders=Orders.objects.filter(user=user).filter(placing=0)
     su=0
     for order in orders:
          su=su+order.price*order.quantity
     context = {
          "pizzas": Pizzas.objects.all(),
          "toppings": Toppings.objects.all(),
          "subs": Subs.objects.all(),
          "adds": Adds_subs.objects.all(),
          "pasta": Pasta.objects.all(),
          "salads": Salads.objects.all(),
          "dinners": Dinner_platters.objects.all(),
          "orders": Orders.objects.filter(user=user).filter(placing=0),
          "s": su
     }
     return render(request, "orders/menu.html", context)

def help(request):
    return render(request, "orders/help.html")

def register(request):
    return render(request, "orders/register.html")

def register_v(request):
     fn=request.POST["first_name"]
     ln=request.POST["last_name"]
     un=request.POST["username"]
     em=request.POST["email"]
     ps=request.POST["password"]
     rps=request.POST["passwd"]
     us = User.objects.filter(username=un)
     if ps != rps:
          return render(request, "orders/error.html", {"message": "Password does not match"})
     if us.exists():
          return render(request, "orders/error.html", {"message": "User already exists."})
     if un and em and ps:
          u_created = User.objects.create_user(username=un, email=em, password=ps, first_name=fn, last_name=ln)
          if u_created:
               return render(request, "orders/success.html", {"message": "User was created"})
          else:
               return render(request, "orders/error.html", {"message": "User was retrieved."})
     else:
          return render(request, "orders/error.html", {"message": "Request was empty."})

def order_pizza(request, pizza_id):
     piz = Pizzas.objects.get(pk=pizza_id)
     nr_l=piz.nr_l
     if nr_l==0:
          l1 = False
          l2 = False
          l3 = False
          l4 = False
     if nr_l==1:
          l1 = True
          l2 = False
          l3 = False
          l4 = False
     if nr_l==2:
          l1 = True
          l2 = True
          l3 = False
          l4 = False
     if nr_l==3:
          l1 = True
          l2 = True
          l3 = True
          l4 = False
     if nr_l>3:
          l4 = True
          l1 = False
          l2 = False
          l3 = False
     context = {
          "pizza": Pizzas.objects.get(pk=pizza_id),
          "pizza_id": pizza_id,
          "toppings": Toppings.objects.all(),
          "nr_l": nr_l,
          "l1": l1,
          "l2": l2,
          "l3": l3,
          "l4": l4,
     }    
     return render(request, "orders/order_pizza.html", context)

def order_p_v(request):
     try:
          user=request.user
          nr_c=Orders.objects.filter(user=user).filter(main=1).count()
          nr_c=nr_c+1
          pizza_id = int(request.POST["pizza_id"])
          size = int(request.POST["size"])
          quant = int(request.POST["quant"])
          piz = Pizzas.objects.get(pk=pizza_id)
          nm = piz.name
          nr_l = piz.nr_l
          name = "Pizza " + str(piz.pizza_type)+ "  " +nm
          if size==1:
               price = piz.price_small
               name=name+" Small"
          else:
               price = piz.price_large
               name=name+" Large"
          value=quant*price     
     except KeyError:
          return render(request, "orders/error.html", {"message": "No selection."})
     except Pizzas.DoesNotExist:
          return render(request, "orders/error.html", {"message": "No piza."})
     if nr_l == 0:
          f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)                 
          f.save()
          return HttpResponseRedirect(reverse("menu"))
     if nr_l > 0 and nr_l < 4:
          try:
               topping1_id = request.POST["topping1"]
               tp = Toppings.objects.get(pk=topping1_id)
               nm1 = tp.name
               nm1 = " -- topping 1 : " +nm1
          except KeyError:
               return render(request, "orders/error.html", {"message": "No selection topping 1."})
          except Toppings.DoesNotExist:
               return render(request, "orders/error.html", {"message": "No topping."})
     if nr_l > 1 and nr_l < 4:
          try:
               topping2_id = request.POST["topping2"]
               tp = Toppings.objects.get(pk=topping2_id)
               nm2 = tp.name
               nm2 = " -- topping 2 : " +nm2
          except KeyError:
               return render(request, "orders/error.html", {"message": "No selection topping 2."})
          except Toppings.DoesNotExist:
               return render(request, "orders/error.html", {"message": "No topping."})
     if nr_l >2 and nr_l < 4:
          try:
               topping3_id = request.POST["topping3"]
               tp = Toppings.objects.get(pk=topping3_id)
               nm3 = tp.name
               nm3 = " -- topping 3 : " +nm3
          except KeyError:
               return render(request, "orders/error.html", {"message": "No selection topping 3."})
          except Toppings.DoesNotExist:
               return render(request, "orders/error.html", {"message": "No topping."})
     if nr_l > 0 and nr_l < 4:
          f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)
          f.save()
          f = Orders(user=user, name=nm1, quantity = quant, main=0, nr_c=nr_c)
          f.save()
     if nr_l > 1 and nr_l < 4:
          f = Orders(user=user, name=nm2, quantity = quant, main=0, nr_c=nr_c)
          f.save()
     if nr_l > 2 and nr_l < 4:
          f = Orders(user=user, name=nm3, quantity = quant, main=0, nr_c=nr_c)
          f.save()
     if nr_l > 3:
          try:
               tops= Toppings.objects.all()
               i=0
               for tp in tops:
                    id=str(request.POST.get(str(tp.pk)))
                    if id =="1":
                        i=i+1
               if i>nr_l:
                    return render(request, "orders/error.html", {"message": "Too many items selected."})
               if i == 0:
                    return render(request, "orders/error.html", {"message": "No selection."})
               f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)                 
               f.save()
               i=1
               for tp in tops:
                    id=str(request.POST.get(str(tp.pk)))
                    if id =="1":
                         top=Toppings.objects.get(pk=tp.pk)
                         nme=top.name
                         nme=" -- topping "+str(i)+" : "+nme
                         i=i+1
                         f = Orders(user=user, name=nme, main=0, nr_c=nr_c)                 
                         f.save()
          except KeyError:
               return render(request, "orders/error.html", {"message": "No selection."})
          except Salads.DoesNotExist:
               return render(request, "orders/error.html", {"message": "No salads."})
     return HttpResponseRedirect(reverse("menu"))

def order_sub(request, sub_id):
     context = {
          "sub": Subs.objects.get(pk=sub_id),
          "sub_id": sub_id,
          "adds": Subs.objects.filter(nr_a = 1),
     }
     return render(request, "orders/order_sub.html", context)

def order_sb_v(request):
     try:
          user=request.user
          nr_c=Orders.objects.filter(user=user).filter(main=1).count()
          nr_c=nr_c+1
          sub_id = int(request.POST["sub_id"])
          size = int(request.POST["size"])
          ck1 = str(request.POST.get("ck1"))
          ck2 = str(request.POST.get("ck2"))
          ck3 = str(request.POST.get("ck3"))
          ck4 = str(request.POST.get("ck4"))
          quant = request.POST["quant"]
          sb = Subs.objects.get(pk=sub_id)
          add2=Adds_subs.objects.get(pk=2)
          add3=Adds_subs.objects.get(pk=3)
          add4=Adds_subs.objects.get(pk=4)
          add5=Adds_subs.objects.get(pk=5)
          nm = sb.name
          nr_a=sb.nr_a
          name = "Subs " +nm
          if int(size)==1:
               price = sb.price_small
               name=name+" Small"
               p2=add2.price_small
               p3=add3.price_small
               p4=add4.price_small
               p5=add5.price_small
          else:
               price = sb.price_large
               name=name+" Large"
               p2=add2.price_large
               p3=add3.price_large
               p4=add4.price_large
               p5=add5.price_large
          quant =int(request.POST["quant"])
          value=quant*price
     except KeyError:
          return render(request, "orders/error.html", {"message": "No subs selection."})
     except Subs.DoesNotExist:
          return render(request, "orders/error.html", {"message": "No subs."})
     if sub_id is None:
          return render(request, "orders/error.html", {"message": "No subs selection."})
     if size is None:
          return render(request, "orders/error.html", {"message": "No size selection."})
     if nr_a == 0:
          if ck1=="1" or ck2=="1" or ck3=="1":
               return render(request, "orders/error.html", {"message": "No adds on this selection."})
          else:
               if price == 0:
                   return render(request, "orders/error.html", {"message": "No Small Size on this selection."}) 
               f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)
               f.save()
               if ck4=="1":
                    f = Orders(user=user, name="+ Extra Cheese", price=p5, quantity = quant, value = quant*p5, main=0, nr_c=nr_c)                 
                    f.save()
               return HttpResponseRedirect(reverse("menu"))
     else:
          if price == 0:
               return render(request, "orders/error.html", {"message": "No Small Size on this selection."})
          f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)
          f.save()             
          if ck1 == "1":
               f = Orders(user=user, name=add2.name, price=p2, quantity = quant, value = quant*p2, main=0, nr_c=nr_c)                 
               f.save()
          if ck2 == "1":
               f = Orders(user=user, name=add3.name, price=p3, quantity = quant, value = quant*p3, main=0, nr_c=nr_c)                 
               f.save()
          if ck3 == "1":
               f = Orders(user=user, name=add4.name, price=p4, quantity = quant, value = quant*p4, main=0, nr_c=nr_c)                 
               f.save()                  
     if ck4=="1":
          f = Orders(user=user, name="+ Extra Cheese", price=p5, quantity = quant, value = quant*p5, main=0, nr_c=nr_c)                 
          f.save()
     return HttpResponseRedirect(reverse("menu"))

def order_dinner(request, dinner_id):
     context = {
          "dinner" : Dinner_platters.objects.get(pk=dinner_id),
          "dinner_id": dinner_id,
     }
     return render(request, "orders/order_dinner.html", context)

def order_d_v(request):
     try:
          user=request.user
          nr_c=Orders.objects.filter(user=user).filter(main=1).count()
          nr_c=nr_c+1
          dinner_id = int(request.POST["dinner_id"])
          size = request.POST["size"]
          quant = request.POST["quant"]
          din = Dinner_platters.objects.get(pk=dinner_id)
          nm = din.name
          name = "Dinner_pl " +nm
          if int(size)==1:
               price = din.price_small
               name=name+" Small"
          else:
               price = din.price_large
               name=name+" Large"
          quant =int(request.POST["quant"])
          value=quant*price
     except KeyError:
          return render(request, "orders/error.html", {"message": "No selection."})
     except Dinner_platters.DoesNotExist:
          return render(request, "orders/error.html", {"message": "No dinner."})
     f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)                 
     f.save()
     return HttpResponseRedirect(reverse("menu"))

def order_salad(request, salad_id):
     context = {
          "salad": Salads.objects.get(pk=salad_id),
          "salad_id": salad_id,
     }
     return render(request, "orders/order_salad.html", context)

def order_s_v(request):
     try:
          user=request.user
          nr_c=Orders.objects.filter(user=user).filter(main=1).count()
          nr_c=nr_c+1
          salad_id = int(request.POST["salad_id"])
          quant = request.POST["quant"]
          sal = Salads.objects.get(pk=salad_id)
          nm = sal.name
          name = "Salad " +nm
          price = sal.price
          quant =int(request.POST["quant"])
          value=quant*price
     except Salads.DoesNotExist:
          return render(request, "orders/error.html", {"message": "No salads."})
     f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)                 
     f.save()
     return HttpResponseRedirect(reverse("menu"))

def order_pasta(request, pasta_id):
     context = {
          "pasta": Pasta.objects.get(pk=pasta_id),
          "pasta_id": pasta_id,
     }
     return render(request, "orders/order_pasta.html", context)

def order_ps_v(request):
     try:
          user=request.user
          nr_c=Orders.objects.filter(user=user).filter(main=1).count()
          nr_c=nr_c+1
          pasta_id = int(request.POST["pasta_id"])
          quant = request.POST["quant"]
          pas = Pasta.objects.get(pk=pasta_id)
          nm = pas.name
          name = "Pasta " +nm
          price = pas.price
          quant =int(request.POST["quant"])
          value=quant*price
     except Salads.DoesNotExist:
          return render(request, "orders/error.html", {"message": "No pasta."})
     f = Orders(user=user, name=name, price=price, quantity = quant, value = value, main=1, nr_c=nr_c)                 
     f.save()
     return HttpResponseRedirect(reverse("menu"))

def view_order(request):
     user=request.user
     context = {
          "orders": Orders.objects.filter(placing=1),
     }
     return render(request, "orders/view_order.html", context)
def complete_order(request,order_id):
     try:
          ordr = Orders.objects.get(pk=order_id)
     except Orders.DoesNotExist:
          raise Http404("Order does not exist.")
     #Orders.objects.filter(id=order_id).delete()
     Orders.objects.filter(user=ordr.user).filter(nr_c=ordr.nr_c).delete()
     return HttpResponseRedirect(reverse("view_order"))

def d_order(request):
     user=request.user
     Orders.objects.filter(user=user).filter(placing=0).delete()
     return HttpResponseRedirect(reverse("menu"))

def place_order(request):
     user=request.user
     orders=Orders.objects.filter(user=user).filter(placing=0)
     su=0
     for order in orders:
          su=su+order.price*order.quantity
     context = {
         "orders": Orders.objects.filter(user=user).filter(placing=0),
         "s": su
     }
     return render(request, "orders/place_order.html", context)

def place_order_v(request):
     user=request.user
     Orders.objects.filter(user=user).filter(placing=0).update(placing=1)
     return HttpResponseRedirect(reverse("menu"))

