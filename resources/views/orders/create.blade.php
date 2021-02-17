@extends('layouts.master')

@section('content')
    <div class="container mx-auto flex flex-col items-center">
        <h2>Add a new pizza order</h2>
        <form action="/pizzas" method="post" class="shadow-lg w-80 p-4 flex flex-col bg-white rounded-lg">
        @csrf
            <label for="name">Name: </label>
            <input name="name" id="name" type="text" placeholder="Enter name" class="mb-3 py-3 px-4 border border-gray-400">
            <label for="type">Choose pizza type: </label>
            <select name="type" id="type" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-400 rounded-md">
                <option value="Hawaiian">Hawaiian</option>
                <option value="Magarita">Magarita</option>
                <option value="Veg Supreme">Veg Supreme</option>
                <option value="Volcano">Volcano</option>
            </select>
            <label for="base">Choose pizza base: </label>
            <select name="base" id="base" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-400 rounded-md">
                <option value="Cheesy Crust">Cheesy Crust</option>
                <option value="Garlic Crust">Garlic Crust</option>
                <option value="Thin & Crisp">Thin & Crisp</option>
                <option value="Thick">Thick</option>
            </select>
            <label for="name">Name: </label>
            <input name="price" id="price" type="text" placeholder="Price" class="mb-3 py-3 px-4 border border-gray-400">

            <input type="submit" value="Order Pizza" class="mt-3">
            
        </form>

    </div>
    
    

    
@endsection
