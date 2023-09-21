<x-app-layout>
    <h1>Shopping Cart</h1>
    <a href="{{ route('my-orders') }}" class="btn btn-primary">My Orders</a>




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


        <!-- Display Taxes -->
        <p class="text-black">Taxes: {{ $taxes }} LKR</p>

        <!-- Display Shipping Cost -->
        <p>Shipping Cost: {{ $shippingCost }} LKR</p>

        <!-- Display Discount -->
        <p>Discount: {{ $discount }} LKR</p>

        <!-- Display Total -->
        <p>Sub Total "{{ $subtotal }} LKR</p>

        <!-- Display Total -->
        <p>Grand Total :{{ $grand_total }} LKR</p>
        <br>

        <a href="{{ route('checkout', ['id' => $customerId]) }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Go to Checkout</a>


        <a href="{{ url('welcome') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue Shopping</a>

    @endif

</x-app-layout>
