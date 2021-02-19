@extends('layouts.master')

@section('subtitle', 'Enter new order')
@section('content')
<div class="section flex flex-wrap justify-center h-screen text-gray-800">
    <div class="w-8/12 mt-20">
        <div class="mb-5 flex">            
            <div class="flex-auto text-3xl text-center font-bold">Current Orders</div>
            <div class="flex-none mt-2 pr-2 font-bold text-green-800"><a href="{{ route('orders.create') }}">Enter New Order</a></div>
        </div>        
        <div class="w-full shadow bg-yellow-100">
            <table class="w-full table-auto">
                <tr>
                    <th class="p-3 font-bold uppercase bg-yellow-300 text-gray-600 border border-gray-500 hidden lg:table-cell">Name</th>
                    <th class="p-3 font-bold uppercase bg-yellow-300 text-gray-600 border border-gray-500 hidden lg:table-cell">Size</th>
                    <th class="p-3 font-bold uppercase bg-yellow-300 text-gray-600 border border-gray-500 hidden lg:table-cell">Type</th>
                    <th class="p-3 font-bold uppercase bg-yellow-300 text-gray-600 border border-gray-500 hidden lg:table-cell">Base</th>                    
                    <th class="p-3 font-bold uppercase bg-yellow-300 text-gray-600 border border-gray-500 hidden lg:table-cell">Toppings</th>
                    <th class="p-3 font-bold uppercase bg-yellow-300 text-gray-600 border border-gray-500 hidden lg:table-cell">Price</th>
                </tr>                
                @foreach ($orders as $order)
                    <tr class="text-sm  hover:bg-gray-100">
                        <td class="p-3 text-center whitespace-no-wrap">
                            <p class="text-gray-900 font-bold"><a href="{{ route('orders.show', $order->id) }}">{{$order->name}}</a></p>
                        </td>
                        <td class="text-center whitespace-no-wrap">{{ $order->size }}</td>
                        <td class="text-center whitespace-no-wrap">{{ $order->type }}</td>
                        <td class="text-center whitespace-no-wrap">{{ $order->base }}</td>
                        <td class="text-center whitespace-no-wrap">
                        @if ($order->toppings)
                            @foreach($order->toppings as $topping)
                                {{ $topping }}
                                @if(!$loop->last)
                                ,
                                @endif 
                            @endforeach
                        @endif
                        </td>
                        <td class="text-center whitespace-no-wrap">${{ $order->price }}</td>
                    </tr>
                @endforeach                
            </table>
            <div class="text-md text-center font-bold text-red-700 p-2">{{session('message')}}</div>
        </div>        
    </div>
</div>
@endsection