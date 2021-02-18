@extends('layouts.master')

@section('content')    
<div class="section flex flex-wrap justify-center h-screen text-gray-800">
    <div class="w-4/12 mt-20">
        <div class="mb-5 flex">            
            <div class="flex-auto text-3xl text-center font-bold">Enter New Order</div>                
        </div>
        <form action="/orders" method="post" class="shadow-lg p-4 flex flex-col bg-white rounded-lg">
            @csrf
            <label for="name" class="mb-1 font-bold text-green-800">Name: </label>
            <input name="name" id="name" type="text" placeholder="Enter name" class="px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm">
            <label for="size" class="mb-1 font-bold text-green-800">Choose pizza size: </label>
            <select name="size" id="size" class="form-select w-full px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra Large">Extra Large</option>
            </select>            
            <label for="type" class="mb-1 font-bold text-green-800">Choose pizza type: </label>
            <select name="type" id="type" class="form-select w-full px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm">
                <option value="Cheese">Cheese</option>
                <option value="BBQ Chicken">BBQ Chicken</option>
                <option value="Hawaiian">Hawaiian</option>
                <option value="Magarita">Magarita</option>
                <option value="Vegetable">Vegetable</option>
                <option value="Volcano">Volcano</option>
            </select>
            <label for="base" class="mb-1 font-bold text-green-800">Choose pizza base: </label>
            <select name="base" id="base" class="form-select w-full px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm">
                <option value="Original Crust">Original Crust</option>
                <option value="Cheesy Crust">Cheesy Crust</option>
                <option value="Pan Crust">Pan Crust</option>
                <option value="Skinny Crust">Skinny Crust</option>            
            </select>
            <label for="name" class="mb-1 font-bold text-green-800">Price: </label>
            <input name="price" id="price" type="text" placeholder="$" class="px-3 py-2 mb-3 border-2 border-gray-200 rounded-sm">
            <label for="toppings[]" class="mb-1 font-bold text-green-800">Choose pizza toppings: </label>
            <div class="grid grid-cols-3">
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5 text-gray-600" value="Extra Cheese"><span class="ml-2 text-gray-700">Extra Cheese</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Pepperoni"><span class="ml-2 text-gray-700">Pepperoni</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Bacon"><span class="ml-2 text-gray-700">Bacon</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Sausage"><span class="ml-2 text-gray-700">Sausage</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Onions"><span class="ml-2 text-gray-700">Onions</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Green Peppers"><span class="ml-2 text-gray-700">Green Peppers</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Tomatoes"><span class="ml-2 text-gray-700">Tomatoes</span>
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="toppings[]" class="form-checkbox h-5 w-5" value="Mushrooms"><span class="ml-2 text-gray-700">Mushrooms</span>
                </label>
            </div>
            <input type="submit" value="Order" class="my-2 py-2 font-bold cursor-pointer">                
        </form>            
    </div>
</div>
@endsection