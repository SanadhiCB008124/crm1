<nav class="bg-black-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="/">
                        <img class="h-8 w-auto" src="{{ asset('images/light.jpg') }}" alt="Your Company">
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <li>
                            <a
                                class="bg-white text-black no-underline hover:underline rounded-md px-3 py-2 text-sm font-medium"
                                href="{{ url('/') }}"
                            >
                                Home
                            </a>
                        </li>
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        @foreach ($categories as $category)
                            <li>
                                <a
                                    class="bg-white text-black no-underline hover:underline rounded-md px-3 py-2 text-ms font-medium"
                                    href="{{ route('products.by.category', ['category_id' => $category->id]) }}"
                                >
                                    {{ ucfirst($category->category_name) }}
                                </a>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>

            <form method="GET" action="{{ route('products.search') }}">
            <div class="pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                       type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                         width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
                </button>
            </div>
            </form>


        @if (Route::has('login'))
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 space-x-2 sm:pr-0">
                    @auth
                        <div x-data="{ open: false }">
                            <button type="button" id="dropdown-button" @click="open = ! open"
                                    class="relative rounded-full bg-white-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View Cart</span>
                                <!-- Cart Icon -->
                                <svg width="25px" height="35px" viewBox="0 0 24 24" class="mt-2" fill="#00000"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M8 12L8 8C8 5.79086 9.79086 4 12 4V4C14.2091 4 16 5.79086 16 8L16 12"
                                              stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                                        <path
                                            d="M3.69435 12.6678C3.83942 10.9269 3.91196 10.0565 4.48605 9.52824C5.06013 9 5.9336 9 7.68053 9H16.3195C18.0664 9 18.9399 9 19.514 9.52824C20.088 10.0565 20.1606 10.9269 20.3057 12.6678L20.8195 18.8339C20.904 19.8474 20.9462 20.3542 20.6491 20.6771C20.352 21 19.8435 21 18.8264 21H5.1736C4.15655 21 3.64802 21 3.35092 20.6771C3.05382 20.3542 3.09605 19.8474 3.18051 18.8339L3.69435 12.6678Z"
                                            stroke="#ffffff" stroke-width="2"></path>
                                    </g>
                                </svg>
                                @php
                                    $cartCount = app('App\Http\Controllers\CartController')->getCartCount();
                                @endphp
                                @if ($cartCount > 0)
                                    <!-- Cart Count -->
                                    <span
                                        class="bg-red-500 text-black rounded-full px-2 py-1 absolute top-0 right-0">{{ $cartCount }}</span>

                                @endif

                            </button>

                            <div x-show="open" @click.outside="open = false">
                                <div class="absolute left-1/2 z-10 mt-5 transform -translate-x-1/2 " id="dropdown-menu">
                                    <div
                                        class="max-w-md overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                                        <div class="p-4">
                                            <div class="group relative flex flex-col gap-y-4 p-4 ">
                                                @if(isset($cartItems))
                                                    <!-- Place your dropdown content here -->
                                                    @if ($cartItems->isEmpty())
                                                        <p class="text-gray-900">your Cart is empty :(</p>
                                                    @else
                                                        @foreach ($cartItems as $item)
                                                            <div class="flex gap-x-6 rounded-lg items-center">
                                                                <div class="w-11 h-11 flex-none">
                                                                    <img
                                                                        src="{{ asset('images/'.$item->product->image) }}"
                                                                        alt="product image"
                                                                        class="w-full h-full object-cover object-center rounded-lg">
                                                                </div>
                                                                <div class="flex-grow">
                                                                    <h2 class="title-font  font-medium text-gray-900">{{ $item->product->name}}</h2>
                                                                    <h2 class="title-font  font-medium text-rose-500">
                                                                        LKR {{$item->product->unit_price}}</h2>
                                                                    <h2 class="title-font font-medium text-gray-900">
                                                                        color: {{ $item->product->color->color}}</h2>

                                                                    <h2 class="title-font font-medium text-gray-900">
                                                                        size: {{ $item->product->size->name}}</h2>
                                                                    <h2 class="title-font font-medium text-gray-900">
                                                                        Quantity: {{ $item->quantity}}</h2>
                                                                </div>
                                                            </div>

                                                        @endforeach
                                                    @endif
                                                @endif
                                                <button class="bg-black text-white rounded-full py-2 px-2 w-full ">
                                                <a href="{{ route('cart', ['id' => auth()->user()->id]) }}">
                                                    View Cart</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button"
                                class="relative rounded-full bg-white-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View Wishlift</span>
                            <a href="#" class="text-sm text-white">
                                <svg fill="#00000" height="35px" width="20px" class="mt-2" version="1.1" id="XMLID_298_"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 24 24" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier"
                                                                                                  stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="favorite">
                                            <path
                                                d="M12,23.2l-0.6-0.5C8.7,20.7,0,13.5,0,7.3C0,3.8,2.9,1,6.5,1c2.2,0,4.3,1.1,5.5,2.9l0,0l0,0C13.2,2.1,15.3,1,17.5,1 C21.1,1,24,3.8,24,7.3c0,6.3-8.7,13.4-11.4,15.5L12,23.2z M6.5,2.9C4,2.9,2,4.8,2,7.2c0,4.1,5.1,9.5,10,13.4 c4.9-3.9,10-9.3,10-13.4c0-2.4-2-4.3-4.5-4.3c-1.6,0-3,0.8-3.8,2L12,7.6L10.3,5C9.5,3.7,8.1,2.9,6.5,2.9z"></path>
                                        </g>
                                    </g></svg>
                            </a>
                        </button>
                        <button type="button"
                                class="relative rounded-full bg-white-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View profile </span>
                            <a
                                href="{{ route('profile.show') }}"
                                class="text-sm text-white relative"
                            >
                                <svg fill="#00000" height="35px" width="20px" class="mt-2" viewBox="0 0 96 96"
                                     xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier"><title></title>
                                        <path
                                            d="M69.3677,51.0059a30,30,0,1,0-42.7354,0A41.9971,41.9971,0,0,0,0,90a5.9966,5.9966,0,0,0,6,6H90a5.9966,5.9966,0,0,0,6-6A41.9971,41.9971,0,0,0,69.3677,51.0059ZM48,12A18,18,0,1,1,30,30,18.02,18.02,0,0,1,48,12ZM12.5977,84A30.0624,30.0624,0,0,1,42,60H54A30.0624,30.0624,0,0,1,83.4023,84Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </button>
                        <button class="m-6">

                            <a href="{{ route('logout') }}" class="block mt-2 lg:inline-block lg:mt-0 text-red-600  no-underline hover:underline  sm:block"
                               @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>

                        </button>

                    @else
                        <a href="{{ route('login') }}"
                           class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>


    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#"   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
               >Dashboard</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>
