@extends('layouts.master')

@section('content')

<div class="section bg-image flex overflow-hidden h-screen text-gray-800" style="background-image:url('images/main-bg.jpg')">
    <div class="hero bg-gray-200 text-center grid md:grid-cols-2 border w-4/6 m-auto p-8 bg-opacity-90 rounded-lg">
      <img class="icon m-auto rounded-lg" src="images/center.jpg" alt="center image" />
      <div class="text m-auto text-lg md:ml-5 p-5 md:text-left">
        <div class="head text-2xl mb-3 font-serif">All Natural, Hand-crafted Pizzas</div>
        <hr>
        <h3 class="py-3 italic">Create Your Own Pizza</h3>
        <div class="font-bold sans-nunito"><p class="text-sm text-green-800">Pizza Size</p>
          @foreach ($sizes as $size)
            <span>{{ $size }}
            @if(!$loop->last) - 
            @endif
            </span> 
          @endforeach
        </div>
        <div class="font-bold sans-nunito"><p class="text-sm text-green-800">Pizza Type</p>
          @foreach ($types as $type)
            <span>{{ $type }}
            @if(!$loop->last) - 
            @endif
            </span> 
          @endforeach
        </div>
        <div class="mt-4 font-bold sans-nunito"><p class="text-sm text-green-800">Pizza Base</p>
          @foreach ($bases as $base)
            <span>{{ $base }}
            @if(!$loop->last) - 
            @endif
            </span> 
          @endforeach
        </div>
        <div class="mt-4 font-bold sans-nunito"><p class="text-sm text-green-800">Pizza Toppings</p>
          @foreach ($toppings as $topping)
            <span>{{ $topping }}
            @if(!$loop->last) - 
            @endif
            </span> 
          @endforeach
        </div>

        <div class="text-sm font-serif text-gray-500 mt-5">Choose the size you like, and build from there.  It's easy and fun to make your own tasty pizza!
        </div>
        <button class="my-6 bg-transparent hover:text-green-800 py-2 px-4 rounded text-lg text-gray-700 font-bold border border-gray-900">Order Now @ 929-123-5555</button>
      </div>
    </div>
  </div>
  <!-- End of Main -->   

  <p class="text-sm text-red-600 p-2">{{session('message')}}</p>  

  <div class="section py-28 w-full scree border grid md:grid-cols-2 bg-white text-gray-800">
    <div class="subsec flex-none overflow-hidden max-h-96">
      <img class="w-full" src="images/feature.jpg" alt="feature image" />
    </div>
    <div class="subsec my-auto p-8">
      <div class="title font-semibold text-3xl mb-5">Why is Pizza Town Special?</div>
      <div class="desc text-lg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>
    </div>
  </div>
  <!-- End of Feature -->      
          
@endsection