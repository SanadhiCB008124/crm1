<DOCTYPE html>
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
        class="flex items-center justify-between flex-wrap bg-black py-4 lg:px-12 shadow border-solid border-t-2 border-black-700">
        <div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
            <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
              <img src="images\light.jpg" class=" h-10 w-18"></img>
            </div>
            <div class="block lg:hidden ">
                <button
                    id="nav"
                    class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
        </div>
    
        <div class="menu w-full  flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8">
            <div class="text-md font-bold text-amber-100 lg:flex-grow">
                <a href="#responsive-header"
                  class="block mt-4 lg:inline-block lg:mt-0 no-underline hover:underline px-4 py-2 rounded mr-2">
                  Home
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 no-underline hover:underline px-4 py-2 rounded  mr-2">
                    Men
                </a>
                <a href="#responsive-header"
                   class=" block mt-4 lg:inline-block lg:mt-0 no-underline hover:underline px-4 py-2 rounded  mr-2">
                    Women
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 no-underline hover:underline px-4 py-2 rounded  mr-2">
                    Kids
                </a>
            </div>
            <!-- This is an example component -->
            <div class="relative mx-auto text-gray-600 lg:block hidden">
                <input
                    class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                         version="1.1" id="Capa_1" x="0px" y="0px"
                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                         xml:space="preserve"
                         width="512px" height="512px">
                <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
              </svg>
                </button>
            </div>
      

        @if (Route::has('login'))
          <div class="block text-md px-4 py-2 rounded text-amber-100 ml-2 font-bold  mt-4  lg:mt-0 ">
           @auth
           <ul class="list-unstyled flex flex-wrap place-content-between">
           <li>
           <a href ="#"class="text-sm text-white ">
           <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 12L8 8C8 5.79086 9.79086 4 12 4V4C14.2091 4 16 5.79086 16 8L16 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path> <path d="M3.69435 12.6678C3.83942 10.9269 3.91196 10.0565 4.48605 9.52824C5.06013 9 5.9336 9 7.68053 9H16.3195C18.0664 9 18.9399 9 19.514 9.52824C20.088 10.0565 20.1606 10.9269 20.3057 12.6678L20.8195 18.8339C20.904 19.8474 20.9462 20.3542 20.6491 20.6771C20.352 21 19.8435 21 18.8264 21H5.1736C4.15655 21 3.64802 21 3.35092 20.6771C3.05382 20.3542 3.09605 19.8474 3.18051 18.8339L3.69435 12.6678Z" stroke="#ffffff" stroke-width="2"></path> </g></svg>
           </a></li>&nbsp
           <li>
           <a href ="#"class="text-sm text-white ">
           <svg fill="#ffffff" height="35px" width="30px" version="1.1" id="XMLID_298_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="favorite"> <path d="M12,23.2l-0.6-0.5C8.7,20.7,0,13.5,0,7.3C0,3.8,2.9,1,6.5,1c2.2,0,4.3,1.1,5.5,2.9l0,0l0,0C13.2,2.1,15.3,1,17.5,1 C21.1,1,24,3.8,24,7.3c0,6.3-8.7,13.4-11.4,15.5L12,23.2z M6.5,2.9C4,2.9,2,4.8,2,7.2c0,4.1,5.1,9.5,10,13.4 c4.9-3.9,10-9.3,10-13.4c0-2.4-2-4.3-4.5-4.3c-1.6,0-3,0.8-3.8,2L12,7.6L10.3,5C9.5,3.7,8.1,2.9,6.5,2.9z"></path> </g> </g></svg>
           </a></li>&nbsp
           <li>
           <a href ="#"class="text-sm text-white ">
           <svg fill="#ffffff"  height="35px" width="30px" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M69.3677,51.0059a30,30,0,1,0-42.7354,0A41.9971,41.9971,0,0,0,0,90a5.9966,5.9966,0,0,0,6,6H90a5.9966,5.9966,0,0,0,6-6A41.9971,41.9971,0,0,0,69.3677,51.0059ZM48,12A18,18,0,1,1,30,30,18.02,18.02,0,0,1,48,12ZM12.5977,84A30.0624,30.0624,0,0,1,42,60H54A30.0624,30.0624,0,0,1,83.4023,84Z"></path></g></svg>
           </a></li>
           &nbsp&nbsp&nbsp
           <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}" class="block mt-4 lg:inline-block lg:mt-0 text-amber-100 mr-4  no-underline hover:underline  sm:block"
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
    
    </nav>

<section class="w-full ">
<img
    src="images/home5.webp"
    class="object-center w-full h-4/5 shadow-lg "
    alt="Homepage image"
  />

  <h1 class="absolute text-5xl text-white font-bold  top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2">
  STEP INTO STYLE</h1>

</section>

<!--men-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Men</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\nike air force 1 high.jpg" alt="Nike air force i high" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nike air force 1 high
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
          
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


     
      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\adidas.webp" alt="Adidas NMD Runner R1" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Adidas NMD Runner R1
              </a>
            </h3>
            
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\enzo2.jpg" alt="Enzo" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
              Enzo
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>

      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\vap.webp" alt="Nike Vapormax" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nike Air Vapormax
              </a>
            </h3>
            
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>

      
    </div>
  </div>
</div>
<!--women-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Women</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\nike air max.webp" alt="Nike air max" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nike Air Max
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


     
      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\puma3.webp" alt="Puma Run XX Nitro WNS" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Puma Run XX Nitro WNS
              </a>
            </h3>
            
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none lg:h-80">
          <img src="images\chasker.webp" alt="adidas chasker boots" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Adidas Chasker Boots
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\nike air force 1.webp" alt="nike air force 1 " class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nike Air Force 1
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>

      
    </div>
  </div>
</div>
<!--top selling-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Top Selling products</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\enzo2.jpg" alt="Enzo" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
              Enzo
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


     
      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\nike air max sc.jpg" alt="Nike Air Max SC" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nike Air Max SC
              </a>
            </h3>
            
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>


      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\adidas.webp" alt="Adidas NMD Runner R1" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Adidas NMD Runner R1
              </a>
            </h3>
            
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>

      <div class="group relative">
        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none  lg:h-80">
          <img src="images\nike air max.webp" alt="Nike air max" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-black">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Nike Air Max
              </a>
            </h3>
           
          </div>
          <p class="text-sm font-medium text-rose-500">$35</p>
        </div>
        <br>
        <button class="bg-white border border-orange-500   font-bold py-2 px-6 rounded">
          <a href="#" class="text-orange-500 hover:text-white no-underline hover:underline">Add to Cart</a>
         </button>
      </div>

      
    </div>
  </div>
</div>












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
