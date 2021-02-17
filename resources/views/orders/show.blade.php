@extends('layouts.master')
@section('subtitle', 'Order pizza')
@section('content')    
    <div class="rounded bg-gray-light w-64 p-2">
        <div class="flex justify-between py-1">
            <h2 class="text-sm font-bold">Ordered by: {{ $pizza->name }}</h2>
        </div>       
        <div class="text-sm mt-2">
            <div class="bg-white p-2 rounded mt-1 border-b border-gray">{{ $pizza->type }}</div>
        </div>
        <div class="text-sm mt-2">
            <div class="bg-white p-2 rounded mt-1 border-b border-gray">{{ $pizza->base }}</div>
        </div>
        <div class="text-sm mt-2">
            <div class="bg-white p-2 rounded mt-1 border-b border-gray">${{ $pizza->price }}</div>
        </div>
    </div>
    <a href="/" class="text-yellow-800 text-sm font-bold no-underline hover:underline mt-3 ml-2"><-- Back to the Pizza List</a>
@endsection
