<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() 
    {
        $sizes = ["Small", "Medium", "Large", "Extra Large"] ;
        $types = ["Cheese", "BBQ Chicken", "Hawaiian", "Margarita", "Vegetable", "Volcano"];
        $bases = ["Original Crust", "Cheesy Crust", "Pan Crust", "Skinny Crust"];
        $toppings = ["Extra Cheese", "Pepperoni", "Bacon", "Sausage", "Onions", "Green Peppers", "Tomatoes", "Mushrooms"];
        
        return view("index", [
            "sizes" => $sizes,
            "types" => $types,
            "bases" => $bases,
            "toppings" => $toppings
            ]);
    }
}
