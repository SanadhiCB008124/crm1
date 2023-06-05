<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>POINT</title>
    @livewireStyles
</head>
<body>
    
 
<nav
        class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-gray-700
          bg-black
        "
      >
       <div>
          <a href="#">
          <img src="images\light.jpg" class=" h-10 w-18"></img>
          </a>
        </div>
        
       
         <svg
            xmlns="http://www.w3.org/2000/svg"
            id="menu-button"
            class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul
            class="
              pt-4
              text-xl text-amber-100
              no-underline
              font-bold
              md:flex
              md:justify-between 
              md:pt-0"
          >
            <li>
              <a class="md:p-4 py-2 block hover:underline" href="{{url ('welcome')}}"
                >Home</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:underline" href="{{url ('men-products')}}"
                >Men</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:underline" href="{{url ('women-products')}}"
                >Women</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:underline" href="{{url ('top-selling-products')}}"
                >Top Selling</a
              >
            </li>
          
            
          </ul>
          @if (Route::has('login'))
          <div class="block text-md px-4 py-2 rounded text-amber-100 ml-2 font-bold  mt-4  lg:mt-0 ">
           @auth
           <ul class="list-unstyled flex flex-wrap place-content-between space-around">
           <li>
           <a href ="#"class="text-sm text-white  "><!--cart-->
           <svg width="25px" height="35px" viewBox="0 0 24 24" class="mt-2"  fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 12L8 8C8 5.79086 9.79086 4 12 4V4C14.2091 4 16 5.79086 16 8L16 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> <path d="M3.69435 12.6678C3.83942 10.9269 3.91196 10.0565 4.48605 9.52824C5.06013 9 5.9336 9 7.68053 9H16.3195C18.0664 9 18.9399 9 19.514 9.52824C20.088 10.0565 20.1606 10.9269 20.3057 12.6678L20.8195 18.8339C20.904 19.8474 20.9462 20.3542 20.6491 20.6771C20.352 21 19.8435 21 18.8264 21H5.1736C4.15655 21 3.64802 21 3.35092 20.6771C3.05382 20.3542 3.09605 19.8474 3.18051 18.8339L3.69435 12.6678Z" stroke="#ffffff" stroke-width="2"></path> </g></svg>
           </a></li>&nbsp
           <li>
           <a href ="#"class="text-sm text-white "><!--favourites-->
           <svg fill="#ffffff" height="35px" width="20px" class="mt-2" version="1.1" id="XMLID_298_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="favorite"> <path d="M12,23.2l-0.6-0.5C8.7,20.7,0,13.5,0,7.3C0,3.8,2.9,1,6.5,1c2.2,0,4.3,1.1,5.5,2.9l0,0l0,0C13.2,2.1,15.3,1,17.5,1 C21.1,1,24,3.8,24,7.3c0,6.3-8.7,13.4-11.4,15.5L12,23.2z M6.5,2.9C4,2.9,2,4.8,2,7.2c0,4.1,5.1,9.5,10,13.4 c4.9-3.9,10-9.3,10-13.4c0-2.4-2-4.3-4.5-4.3c-1.6,0-3,0.8-3.8,2L12,7.6L10.3,5C9.5,3.7,8.1,2.9,6.5,2.9z"></path> </g> </g></svg>
           </a></li>&nbsp
           <li>
          
           <a href="{{ route('profile.show') }}"  class="text-sm text-white ">  <!--profile-->
           <svg fill="#ffffff"  height="35px" width="20px" class="mt-2" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M69.3677,51.0059a30,30,0,1,0-42.7354,0A41.9971,41.9971,0,0,0,0,90a5.9966,5.9966,0,0,0,6,6H90a5.9966,5.9966,0,0,0,6-6A41.9971,41.9971,0,0,0,69.3677,51.0059ZM48,12A18,18,0,1,1,30,30,18.02,18.02,0,0,1,48,12ZM12.5977,84A30.0624,30.0624,0,0,1,42,60H54A30.0624,30.0624,0,0,1,83.4023,84Z"></path></g></svg>
           </a></li>
          
           

             
           &nbsp&nbsp&nbsp
          
           <form method="POST" action="{{ route('logout') }}" x-data class="mt-4" >
                                @csrf
                                <span class="text-white text-sm">
           Hi  {{ Auth::user()->name }} !
</span>
                                <a href="{{ route('logout') }}" class="block mt-2 lg:inline-block lg:mt-0 text-amber-100 mr-4  no-underline hover:underline  sm:block"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
           </form>
           

        
           @else
                    <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-amber-100 mr-4  no-underline hover:underline ">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block mt-4 lg:inline-block lg:mt-0 text-amber-100 mr-4  no-underline hover:underline ">Register</a>
                    @endif
                @endauth
            </div>
           @endif
        </div>
    </nav>


<section class="text-gray-600 py-6">
    <div class="container mx-auto px-10 py-4">
        <h5 class="text-2xl font-bold text-black">Men</h5>
        <br>
        <div class="-m-4 flex flex-wrap">

            @foreach($menProducts as $product)
            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <a class="relative block h-48 overflow-hidden rounded">
                    <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </a>
                <div class="mt-4">
                    <h2 class="title-font text-lg font-medium text-gray-900">{{ $product->name }}</h2>
                    <h2 class="title-font text-lg font-medium text-rose-500">LKR{{ $product->price }}</h2><br>
                    <div class="flex items-center space-x-1.5 rounded-lg bg-black hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                        </svg>
                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
</body>
</html>
