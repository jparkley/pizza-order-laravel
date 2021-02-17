<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Ranchers&family=Reggae+One&display=swap" rel="stylesheet">
    <title>Pizza Town</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
  <div class="section font-bold px-20 text-gray-800 fixed w-full top-0 flex bg-gray-200 mb-50">
    <div class="flex my-auto py-3">
      <div class="text-3xl text-green-800 ml-2 my-auto flex-none font-serif"><a href="/" class="no-underline">Pizza Town</a></div>
    </div>
    <div class="ml-auto flex space-x-8 my-auto">          
      <div class="h_btns"><a href="/order/create" class="no-underline">Admin: New Order</a></div>          
    </div>
  </div>
  <!-- End of Top Nav -->
      
  @yield('content')  

  <!-- Footer -->
  <div class="heading_section bg-yellow-500 text-gray-800">
    <div class="footer w-5/6 mx-auto text-center">
      <div class="sub flex-1 p-8">
        <div class="text-2xl mb-3">Contact Us</div>
        <div class="info">
          <div class="name">Pizza Town</div>
          <div class="name text-sm">
            Los Angeles, CA<br>
          </div>
        </div>
      </div>
      <div class="sub flex p-5 w-5/6 mx-auto border-t">
        <div class="cursor-pointer hover:underline items mx-auto">Youtube</div>
        <div class="cursor-pointer hover:underline items mx-auto">Facebook</div>
        <div class="cursor-pointer hover:underline items mx-auto">Instagram</div>            
      </div>
    </div>
  </div>      

</body>
</html>