<DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>POINT</title>
        @livewireStyles
</head>
<body >

 
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
              <a class="md:p-4 py-2 block hover:underline" href="#"
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
    <script>
      
    
    const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});
</script>  


<section class="w-full ">

<img
    src="images/homee.webp"
    class="object-center w-full h-4/5 shadow-lg "
    alt="Homepage image"
  />

 

</section>


<div class="flex items-center justify-center mt-6">
    <div class="flex border-2 rounded border-black">
        <input type="text" class="px-4 py-2 w-80" placeholder="Search for products...">
        <button class="flex items-center justify-center px-4 border-l">
            <svg class="w-6 h-6 text-gray-600 " fill="black" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
            </svg>
        </button>
    </div>
</div><br>
<div class="relative overflow-hidden bg-white">
  <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
    <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
      <div class="sm:max-w-lg">
        <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Fall Collection</h1>
        <p class="mt-4 text-xl text-gray-500">Check out our latest collections and shop your heart out</p>
      </div>
      <div>
        <div class="mt-10">
          <!-- Decorative image grid -->
          <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
              <div class="flex items-center space-x-6 lg:space-x-8">
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                    <img src="images\login2.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="images\img2.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="images\home2.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="images\img.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="images\home.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="images\home3.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="images\img3.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="inline-block rounded-md border border-transparent bg-black px-8 py-3 text-center font-medium text-white hover:text-amber-100">Shop Collection</a>
        </div>
      </div>
    </div>
  </div>
</div>


<section class=" text-gray-600 py-6">
    <div class="container mx-auto px-10 py-4 ">
      <h5 class="text-2xl font-bold text-black ">Men</h5>
      <br>
      <div class="-m-4 flex flex-wrap">



        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\puma3.webp" alt="Puma Run XX Nitro WNS" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Puma Run XX Nitro WNS</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm ">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\vap.webp" alt="Nike Vapormax" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Nike Vapormax</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\nike air force 1 high.jpg" alt="Nike air force i high" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Nike Air Force 1 High</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\enzo2.jpg" alt="Enzo" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Enzo</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</section>
<!--women-->
<section class=" text-gray-600 py-6 ">
    <div class="container mx-auto px-10 py-4 ">
      <h5 class="text-2xl font-bold text-black "> Women</h5>
      <br>
      <div class="-m-4 flex flex-wrap">



        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\nike air max.webp" alt="Nike air max" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Nike Air Max</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\chasker.webp" alt="adidas chasker boots" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Adidas Chasker Boots</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\nike air force 1.webp" alt="Nike air force i high" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Nike Air Force 1</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\nike air max sc.jpg" alt="Nike Air Max SC" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Nike Air Max SC</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100  w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!--top sellers-->
<section class=" text-gray-600 py-6 ">
    <div class="container mx-auto px-10 py-4 ">
      <h5 class="text-2xl font-bold text-black "> Top Selling</h5>
      <br>
      <div class="-m-4 flex flex-wrap">



        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\nike air force 1 high.jpg" alt="Nike air force i high" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Nike Air Force 1 High</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\adidas NMD Runner R1.jpg" alt="adidas NMD Runner R1" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">adidas NMD Runner R1</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100  w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\enzo2.jpg" alt="Enzo" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Enzo</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
          <img src="images\chasker.webp" alt="adidas chasker boots" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </a>
          <div class="mt-4">
          
            <h2 class="title-font text-lg font-medium text-gray-900">Adidas Chasker Boots</h2>
            <h2 class="title-font text-lg font-medium text-rose-500">$35.00</h2><br>
            <div class="flex items-center space-x-1.5 rounded-lg bg-black  hover:bg-amber-100 hover:text-black px-4 py-1.5 text-white duration-100 w-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>

              <button class="text-sm">Add to cart</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>












<footer class="relative bg-black pt-8 pb-6 flex">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4 ml-auto">
            <br>
            <ul class="list-unstyled flex flex-wrap  place-content-around ">
              <li>
                <a href="#">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg></a>
              </li>
             

              <li>
                <a href="#">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg></a>
              </li>
              

              <li>
                <a href="#">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg></a>
              </li>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <span class="block uppercase text-white text-sm font-semibold mb-2">Company</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-white hover:text-amber-100 font-semibold block pb-2 text-sm" href="#">About</a>
              </li>
              <li>
                <a class="text-white hover:text-amber-100 font-semibold block pb-2 text-sm" href="#">Privacy Policy</a>
              </li>
              <li>
                <a class="text-white hover:text-amber-100 font-semibold block pb-2 text-sm" href="#">Terms &amp; Conditions</a>
              </li>
              <li>
                <a class="text-white hover:text-amber-100 font-semibold block pb-2 text-sm" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</footer>
</body>
</html>
