<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {

        //$pizzas = Pizza::all();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        //$pizzas = Pizza::latest()->get();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();        
        // $pizzas = [
        //     [
        //         "type" => "Hawaiian",
        //         "base" => "Cheesy Crust",
        //         "price" => "$10.99"
        //     ],
        //     [
        //         "type" => "BBQ Chicken",
        //         "base" => "Thin Crust",
        //         "price" => "$11.99"
        //     ]    
        // ];    

        $sizes = ["Small", "Medium", "Large", "Extra Large"] ;
        $types = ["Cheese", "BBQ Chicken", "Hawaiian", "Margarita", "Vegetable", "Volcano"];
        $bases = ["Original Crust", "Pan Crust", "Skinny Crust"];
        $toppings = ["Extra Cheese", "Pepperoni", "Bacon", "Sausage", "Onions", "Green Peppers", "Tomatoes"];
        
        return view("index", [
            "sizes" => $sizes,
            "types" => $types,
            "bases" => $bases,
            "toppings" => $toppings
            ]);
    }
}
