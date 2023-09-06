<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js"></script>
    <title>Dynamic Product Page</title>
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
            <img src="images\light.jpg" class=" h-10 w-18" alt="image"/>
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
                <a class="md:p-4 py-2 block hover:underline" href="{{ url('welcome') }}"
                >Home</a
                >
            </li>


            @foreach ($categories as $category)
                <li>
                    <a class="md:p-4 py-2 block hover:underline" href="{{ route('products.by.category', ['category_id' => $category->id]) }}">
                        {{ ucfirst($category->category_name) }}
                    </a>
                </li>
            @endforeach

        </ul>
        @if (Route::has('login'))
            <div class="block text-md px-4 py-2 rounded text-amber-100 ml-2 font-bold  mt-4  lg:mt-0 ">
                @auth
                    <ul class="list-unstyled flex flex-wrap place-content-between space-around">
                        <li>
                            <a href="{{ route('cart', ['id' => auth()->user()->id]) }}" class="text-sm text-white">
                                <!--cart-->
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
<div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
    <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
        <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
    </div>
    <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
        <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
    </div>
    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
        <p class="text-sm leading-6 text-gray-900">
            <strong class="font-semibold">Sale </strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Join us in Denver from June 7 – 9 to see what’s coming next.
        </p>
        <a href="#" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register now <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div class="flex flex-1 justify-end">
        <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
            <span class="sr-only">Dismiss</span>
            <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
        </button>
    </div>
</div>

<!--<h1>Products in {{ $category->category_name }} Category</h1>-->

<ul class="flex flex-wrap -mx-4">
    @foreach($products as $product)
        <li class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 mt-3 ml-3">
            <!-- Product Card HTML -->
            <div class="w-full p-4 rounded-lg border border-gray-300 shadow-lg">
                <a class="block h-48 overflow-hidden rounded">
                    <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                </a>
                <div class="mt-4">
                    <h2 class="text-lg font-medium text-gray-900">{{ $product->name }}</h2>
                    <h2 class="text-lg font-medium text-rose-500">LKR {{ $product->unit_price }}</h2>
                    <br>
                    <h2 class="text-lg font-medium text-gray-900">{{ $product->detail }}</h2>
                    <h2 class="text-lg font-medium text-gray-900">COLOR: {{ $product->color }}</h2>
                    <h2 class="text-lg font-medium text-gray-900">SIZE: {{ $product->size }}</h2>
                    <div class="flex items-center space-x-1.5 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <form method="post" action="{{ route('cart.add', ['productSlug' => $product->slug]) }}">
                            @csrf
                            <button type="submit" class="text-white bg-black rounded-lg px-4 py-1.5 hover:bg-gray-800 transition duration-200">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Product Card HTML -->
        </li>
    @endforeach
</ul>

</body>
</html>
