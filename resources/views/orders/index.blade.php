@extends('layouts.master')

@section('subtitle', 'Enter new order')
@section('content')
<div class="section flex flex-wrap justify-center h-screen text-gray-800">
    <div class="w-6/12 pl-4">
        <p class="text-2xl text-center font-bold px-5 py-2 mt-20 mb-5">Current Orders</p>
        <div class="w-full shadow bg-yellow-100">
            <table class="w-full">
                <tbody>
                @foreach ($orders as $order)
                    <tr class="text-sm py-2">
                        <td class="pl-5 pr-3 whitespace-no-wrap">
                            <div class="text-gray-900 font-bold">{{$order->name}}</div>
                        </td>
                        <td class="px-2 py-2 whitespace-no-wrap">
                            <div class="text-yellow-700 font-medium">{{ $order->type }} - {{ $order->base }} - ${{ $order->price }}</div>
                        </td>
                    </tr>
                @endforeach
                    <tr><td><p class="text-sm text-red-600 p-2">{{session('message')}}</p>   </td></tr>
                
                </tbody>
            </table>
        </div>        
    </div>
    </div>

@endsection
