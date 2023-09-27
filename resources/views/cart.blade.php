<x-app-layout>

    <!-- component -->
    <div class="flex flex-col md:flex-row w-screen h-full px-14 py-7">
     <!--   <a href="{{ route('my-orders') }}" class="btn btn-primary">My Orders</a>-->

        <!-- My Cart -->
        <div class="w-full flex flex-col h-fit gap-4 p-4 ">
            <p class="text-blue-900 text-xl font-extrabold">My cart</p>
            @if ($cartItems->isEmpty())
                <div class="text-center">

                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Cart is Empty ! :(</h1>
                    <p class="mt-6 text-base leading-7 text-gray-600">Shop and fill your cart !.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ url('welcome') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue Shopping</a>

                    </div>
                </div>
            @else
            @foreach ($cartItems as $item)
            <!-- Product -->
            <div class="flex flex-col p-4 text-lg font-semibold shadow-md border rounded-sm">
                <div class="flex flex-col md:flex-row gap-3 justify-between">
                    <!-- Product Information -->

                    <div class="flex flex-row gap-6 items-center">
                        <div class="w-28 h-28">
                            <img class="w-full h-full" src="{{ asset('images/'.$item->product->image) }}">
                        </div>
                        <div class="flex flex-col gap-1">

                            <h2 class="text-lg text-gray-800 font-semibold">{{ $item->product->name}}</h2>
                            <p class="text-sm text-gray-800 font-semibold">Quantity: {{ $item->quantity}}</p>
                            <p class="text-sm text-gray-600 font-semibold">Color: <span class="font-normal">{{ $item->product->color->color}}</span></p>
                            <p class="text-sm text-gray-600 font-semibold">Size: <span class="font-normal">{{ $item->product->size->name}}</span></p>
                        </div>
                    </div>
                    <!-- Price Information -->
                    <div class="self-center text-center">

                        <p class="text-gray-800 font-normal text-xl">LKR {{$item->product->unit_price}}</p>
                    </div>
                    <!-- Remove Product Icon -->
                    <form method="post" action="{{ route('cart.remove', $item->id) }}">
                        @csrf
                        <div class="self-center">
                            <button type="submit">


                                <svg class="" height="24px" width="24px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path d="M400,113.3h-80v-20c0-16.2-13.1-29.3-29.3-29.3h-69.5C205.1,64,192,77.1,192,93.3v20h-80V128h21.1l23.6,290.7   c0,16.2,13.1,29.3,29.3,29.3h141c16.2,0,29.3-13.1,29.3-29.3L379.6,128H400V113.3z M206.6,93.3c0-8.1,6.6-14.7,14.6-14.7h69.5   c8.1,0,14.6,6.6,14.6,14.7v20h-98.7V93.3z M341.6,417.9l0,0.4v0.4c0,8.1-6.6,14.7-14.6,14.7H186c-8.1,0-14.6-6.6-14.6-14.7v-0.4   l0-0.4L147.7,128h217.2L341.6,417.9z"/>
                            <g>
                                <rect height="241" width="14" x="249" y="160"/>
                                <polygon points="320,160 305.4,160 294.7,401 309.3,401"/>
                                <polygon points="206.5,160 192,160 202.7,401 217.3,401"/>
                            </g>
                        </g>
                        </svg>
                            </button>
                        </div>
                    </form>

                </div>
                <!-- Product Quantity -->






                <div class="flex flex-row self-center gap-1">
                    <form method="post" action="{{ route('cart.decrease', $item->id) }}">
                        @csrf

                        <button type="submit" class="w-5 h-5 self-center rounded-full border border-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </button>
                    </form>

                    <input type="text" readonly="readonly" value="{{ $item->quantity}}" class="w-8 h-8 text-center text-gray-900 text-sm outline-none border border-gray-300 rounded-sm">

                    <form method="post" action="{{ route('cart.increase', $item->id) }}">
                        @csrf


                        <button type="submit" class="w-5 h-5 self-center rounded-full border border-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 5v14M5 12h14" />
                            </svg>
                        </button>


                    </form>

                </div>
            </div>
        @endforeach

            @endif
        </div>

        <!-- Purchase Resume -->
        <div class="flex flex-col w-full md:w-2/3 h-fit gap-4 p-4">
            <p class="text-blue-900 text-xl font-extrabold">Purchase Resume</p>
            <div class="flex flex-col p-4 gap-4 text-lg font-semibold shadow-md border rounded-sm">
                <div class="flex flex-row justify-between">
                    <p class="text-gray-600">Subtotal </p>
                    <p class="text-end font-bold">{{ $subtotal }} LKR</p>
                </div>
                <hr class="bg-gray-200 h-0.5">
                <div class="flex flex-row justify-between">
                    <p class="text-gray-600">Shipping Cost</p>
                    <div>
                        <p class="text-end font-bold">{{ $shippingCost }} LKR</p>
                        <p class="text-gray-600 text-sm font-normal">Arrives on Jul 16</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <p class="text-gray-600">Taxes</p>
                    <div>
                        <p class="text-end font-bold">{{ $taxes }} LKR</p>

                    </div>
                </div>
                <hr class="bg-gray-200 h-0.5">
                <div class="flex flex-row justify-between">
                    <p class="text-gray-600">Discount Coupon</p>
                    <a class="text-end font-bold">{{ $discount }} LKR</a>
                </div>
                <hr class="bg-gray-200 h-0.5">
                <div class="flex flex-row justify-between">
                    <p class="text-gray-600">Total</p>
                    <div>
                        <p class="text-end font-bold">{{ $grand_total }} LKR</p>
                    </div>
                </div>
                <div class="flex gap-2">

                    <button class="transition-colors text-sm bg-indigo-600 p-2 rounded-sm w-full text-white text-hover shadow-md">
                        <a href="{{ route('checkout', ['id' => $customerId]) }}" >Go to Checkout</a>

                    </button>
                    <button class="transition-colors text-sm bg-white border border-gray-600 p-2 rounded-sm w-full text-gray-700 text-hover shadow-md">
                        <a href="{{ url('welcome') }}"> Continue Shopping</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--
    <h1>Shopping Cart</h1>


    @if ($cartItems->isEmpty())
        <div class="text-center">

            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Cart is Empty ! :(</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Shop and fill your cart !.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ url('welcome') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue Shopping</a>

            </div>
        </div>
    @else
        <ul class="flex flex-wrap -mx-4">
            @foreach ($cartItems as $item)
                <li class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 mt-3 ml-3">
                    <div class="w-full p-4 rounded-lg border border-gray-300 shadow-lg">
                        <a class="block h-48 overflow-hidden rounded">
                            <img src="{{ asset('images/'.$item->product->image) }}" alt="product image" class="h-full w-full object-cover object-center">

                        </a>
                        <div class="mt-4">

                            <h2 class="title-font text-lg font-medium text-gray-900">{{ $item->product->name}}</h2>
                            <h2 class="title-font text-lg font-medium text-rose-500">LKR {{$item->product->unit_price}}</h2><br>

                            <h2 class="title-font text-lg font-medium text-gray-900">color: {{ $item->product->color->color}}</h2>
                            <h2 class="title-font text-lg font-medium text-gray-900">size: {{ $item->product->size->name}}</h2>
                            <h2 class="title-font text-lg font-medium text-gray-900">Quantity: {{ $item->quantity}}</h2>
                            <form method="post" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                <button type="submit">Remove</button>
                            </form>
                            <form method="post" action="{{ route('cart.decrease', $item->id) }}">
                                @csrf
                                <button type="submit">Decrease Quantity</button>
                            </form>

                            <form method="post" action="{{ route('cart.increase', $item->id) }}">
                                @csrf

                                <button type="submit">Increase Quantity</button>



                            </form>



                        </div>
                    </div>
                </li>


            @endforeach
        </ul>



        <p class="text-black">Taxes: {{ $taxes }} LKR</p>


        <p>Shipping Cost: {{ $shippingCost }} LKR</p>


        <p>Discount: {{ $discount }} LKR</p>


        <p>Sub Total "{{ $subtotal }} LKR</p>


        <p>Grand Total :{{ $grand_total }} LKR</p>
        <br>

        <a href="{{ route('checkout', ['id' => $customerId]) }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Go to Checkout</a>


        <a href="{{ url('welcome') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue Shopping</a>

    @endif-->

</x-app-layout>
