<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sizes = ["Small", "Medium", "Large", "Extra Large"] ;
        $types = ["Cheese", "BBQ Chicken", "Hawaiian", "Margarita", "Vegetable", "Volcano"];
        $bases = ["Original Crust", "Cheesy Crust", "Pan Crust", "Skinny Crust"];
        $toppings = ["Extra Cheese", "Pepperoni", "Bacon", "Sausage", "Onions", "Green Peppers", "Tomatoes", "Mushrooms"];
        
        return view("home", [
            "sizes" => $sizes,
            "types" => $types,
            "bases" => $bases,
            "toppings" => $toppings
            ]);
    }
}
