<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $orders = Order::orderBy('created_at', 'desc')->get();         
        return view('orders.index', ['orders'=>$orders]);
    }

    public function show($id) {
        $order = Order::findOrFail($id);
        return view('orders.show', ['order' => $order]);
    }

    public function create() {
        return view('orders.create');
    }

    public function store() {
        $order = new Order;
        $order->name = request('name');
        $order->size = request('size');
        $order->type = request('type');
        $order->base = request('base');
        $order->price = request('price');
        $order->toppings = request('toppings');
        
        $order->save();
        return redirect('/orders')->with('message', 'New order created successfully.');
    }

    public function destroy($id) {        
        $order = Order::findOrFail($id);
        if ($order) {
            $order->delete();
        }
        return redirect('/orders');
    }
}
