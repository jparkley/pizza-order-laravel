@extends('layouts.master')
@section('subtitle', 'Order pizza')
@section('content')   
<div class="section flex flex-wrap justify-center h-screen text-gray-800">
    <div class="w-4/12 mt-20 p-5 shadow-lg bg-gray-50 rounded-lg">
        <div class="mb-5 flex">            
            <div class="flex-auto text-3xl text-center font-bold">Order Detail</div>                
        </div>
        <div class="flex flex-auto py-1">
            <span class="font-bold text-green-800">Name: </span>
            <span class="pl-3">{{ $order->name }}</span>
        </div>
        <div class="flex flex-auto py-1">
            <span class="font-bold text-green-800">Size: </span>
            <span class="pl-3">{{ $order->size }}</span>
        </div>
        <div class="flex flex-auto py-1">
            <span class="font-bold text-green-800">Type: </span>
            <span class="pl-3">{{ $order->type }}</span>
        </div>
        <div class="flex flex-auto py-1">
            <span class="font-bold text-green-800">Base: </span>
            <span class="pl-3">{{ $order->base }}</span>
        </div>
        <div class="flex flex-auto py-1">
            <span class="font-bold text-green-800">Toppings: </span>
            <span class="pl-3">
            @if ($order->toppings)
                @foreach($order->toppings as $topping)
                    {{ $topping }}
                    @if(!$loop->last)
                    ,
                    @endif 
                @endforeach
            @endif
            </span>
        </div>
        <div class="flex flex-auto py-1">
            <span class="font-bold text-green-800">Price: </span>
            <span class="pl-3">{{ $order->price }}</span>
        </div>    
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="p-4 flex flex-col rounded-lg">
            @csrf
            @method('DELETE')
            <input type="submit" value="Complete Order" class="p-3 rounded-lg shadow cursor-pointer">
        </form> 
        <div>
            <a href="/" class="text-yellow-800 text-sm font-bold no-underline hover:underline mt-3 ml-2"><-- Back to the Order List</a>
        </div>      
    </div>
</div>    
@endsection