<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::orderBy('name', 'desc')->get();         
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
        $order->type = request('type');
        $order->base = request('base');
        $order->price = request('price');
        $order->save();
        return redirect('/orders')->with('message', 'New order created.');
    }

}
