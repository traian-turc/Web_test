from django.db import models

# Create your models here.

class Pizza_types(models.Model):
    name = models.CharField(max_length=64, default="")
    def __str__(self):
        return f"{self.name}"

class Pizzas(models.Model):
    pizza_type = models.ForeignKey(Pizza_types, on_delete=models.CASCADE, default="", related_name="pizza_types")
    nr_l = models.SmallIntegerField(default=0)
    name = models.CharField(max_length=64, default="")
    price_small = models.DecimalField(max_digits=7, decimal_places=2, default=0)
    price_large = models.DecimalField(max_digits=7, decimal_places=2 ,default=0)
    def __str__(self):
        return f"{self.pizza_type}:{self.name}-Small:{self.price_small} $ Large:{self.price_large} $ "

class Adds_subs(models.Model):
    name = models.CharField(max_length=64, default="")
    price_small =models.DecimalField(max_digits=7, decimal_places=2, default=0)
    price_large =models.DecimalField(max_digits=7, decimal_places=2 ,default=0)
    def __str__(self):
        return f"{self.name}-Small:{self.price_small} $  Large:{self.price_large} $ "

class Subs(models.Model):
    nr_a = models.SmallIntegerField(default=0)
    name = models.CharField(max_length=64, default="")
    price_small = models.DecimalField(max_digits=7, decimal_places=2, default=0)
    price_large = models.DecimalField(max_digits=7, decimal_places=2 ,default=0)  
    def __str__(self):
        return f"{self.name}-Small:{self.price_small} $ Large:{self.price_large} $ "

class Toppings(models.Model):
    name = models.CharField(max_length=64, default="")
    def __str__(self):
        return f"{self.name}"

class Pasta(models.Model):
    name = models.CharField(max_length=64, default="")
    price =models.DecimalField(max_digits=7, decimal_places=2, default=0)
    def __str__(self):
        return f"{self.name}-price:{self.price} $ "

class Salads(models.Model):
    name = models.CharField(max_length=64, default="")
    price = models.DecimalField(max_digits=7, decimal_places=2, default=0)
    def __str__(self):
        return f"{self.name}-price:{self.price}"

class Dinner_platters(models.Model):
    name = models.CharField(max_length=64, default="")
    price_small = models.DecimalField(max_digits=7, decimal_places=2, default=0)
    price_large = models.DecimalField(max_digits=7, decimal_places=2 ,default=0)
    def __str__(self):
        return f"{self.name}-Small:{self.price_small} $  Large:{self.price_large} $ "

class Orders(models.Model):
    user = models.CharField(max_length=64, default="")
    nr_c = models.SmallIntegerField(default=0)
    main = models.SmallIntegerField(default=0)
    name = models.CharField(max_length=64, default="")
    price = models.DecimalField(max_digits=7, decimal_places=2, default=0)
    value = models.DecimalField(max_digits=7, decimal_places=2, default=0)
    quantity = models.SmallIntegerField(default=0)
    placing = models.SmallIntegerField(default=0)
    complete = models.SmallIntegerField(default=0)
    def __str__(self):
        return f"{self.user} : {self.name} - Price:{self.price} "
