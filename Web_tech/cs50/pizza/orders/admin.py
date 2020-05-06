from django.contrib import admin
from import_export.admin import ImportExportModelAdmin
from .models import Pizza_types, Pizzas, Adds_subs, Subs, Toppings, Pasta, Salads, Dinner_platters, Orders

# Register your models here.
#admin.site.register(Pizza_types)
#admin.site.register(Pizzas)
#admin.site.register(Adds_subs)
#admin.site.register(Subs)
#admin.site.register(Toppings)
#admin.site.register(Pasta)
#admin.site.register(Salads)
#admin.site.register(Dinner_platters)
@admin.register(Pizza_types)
@admin.register(Pizzas)
@admin.register(Adds_subs)
@admin.register(Subs)
@admin.register(Toppings)
@admin.register(Pasta)
@admin.register(Salads)
@admin.register(Dinner_platters)
@admin.register(Orders)
class EmployeeAdmin(ImportExportModelAdmin):
    pass
