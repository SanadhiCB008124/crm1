<x-app-layout>
<div class="h-screen m-2">

    @if(count($orders) > 0)
        <section class="container mx-auto p-6">

            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="text-md font-semibold text-left text-black bg-gray-100  border-b border-gray-600">
                            <th class="px-4 py-3">Order Number</th>
                            <td class="px-4 py-3">Order Details</td>
                            <th class="px-4 py-3">Customer</th>
                            <th class="px-4 py-3">Order Status</th>
                            <th class="px-4 py-3">Total</th>
                            <th class="px-4 py-3">Payment Method</th>
                            <th class="px-4 py-3">Payment Status</th>


                            <th class="px-4 py-3">Biller Name</th>
                            <th class="px-4 py-3">Shipping  Address</th>
                            <th class="px-4 py-3">Billing Address</th>
                            <th class="px-4 py-3">Contact </th>
                            <th class="px-4 py-3">Data of order</th>

                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach($orders as $order)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold text-black">{{ $order->order_number }}</p>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div x-data="{ open: false }" class="mb-3">
                                                    <button
                                                        class="btn btn-primary"
                                                        @click="open = !open"
                                                        :aria-expanded="open ? 'true' : 'false'"
                                                    >Details
                                                    </button>
                                                    <div
                                                        class="absolute right bs b-thin py-3 px-3 border-2 border-black rounded-sm p-block bg-white"
                                                        x-show="open"
                                                        @click.away="open = false"
                                                    >  @foreach($order->orderItems as $item)

                                                            <p class="text-ms font-medium leading-6 text-gray-900">Product Name: {{$item->product->name}}* {{$item->quantity}}</p>

                                                            <p class="text-ms font-medium leading-6 text-gray-900"> UNIT PRICE : {{$item->product->unit_price }} LKR </p>

                                                        @endforeach</div>
                                                </div>

                                            </td>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{$order->customer->name}}</td>
                                <td class="px-4 py-3 text-xs border">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{ $order->status }} </span>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{ $order->total_amount }} LKR</td>

                                <td class="px-4 py-3 text-ms font-semibold border">{{$order->payment->payment_method}}</td>

                                <td class="px-4 py-3 text-xs border">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{ $order->payment_status}} </span>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{ $order->first_name }} {{$order->last_name}}</td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{$order->shipping_address}}</td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{$order->billing_address}}</td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{$order->contact}}</td>



                                <td class="px-4 py-3 text-sm border">{{$order->date_of_order}}</td>

                            </tr>
                            <td class="px-4 py-3 text-sm mb-3">

                            <div  x-data="{ open: false } " class="mt-3">
                                <button  @click="open = ! open">
                                    <a href="{{ route('reorder', ['order_id' => $order->id]) }}" class="btn bg-gray-800 text-white py-2 px-2 rounded-3xl m-4">Buy Again</a>
                                </button>
                                <div id="cart-modal" class="fixed inset-0 flex items-center justify-center z-50" x-show="open" @click.outside="open = false ">
                                    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>
                                    <div class="modal-container bg-white w-96 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
                                        <!-- Add your modal content here -->
                                        <div class="modal-content p-4">
                                            <h2 class="text-lg font-bold">Re ordered successfully !</h2>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    @endif





















<!--





    @if(count($orders) > 0)
        <ul>
            @foreach($orders as $order)
                <div>

                    <h3 class="text-base font-semibold leading-7 text-gray-900">Order Information</h3>

                </div>
                <div class="mt-6 border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Order number</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $order->order_number }}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Order Total</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $order->total_amount }} LKR</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Status</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $order->status }}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Payment Method</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$order->payment->payment_method}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Name</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $order->first_name }} {{$order->last_name}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Shipping Address</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$order->shipping_address}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Billing Address</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$order->billing_address}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Contact</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$order->contact}}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">date of Order</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$order->date_of_order}}</dd>
                        </div>





                        @foreach($order->orderItems as $item)
                            <div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Product Name:</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$item->product->name}}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Product UNIT PRICE :</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$item->product->unit_price }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Quantity:</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $item->quantity}}</dd>
                                </div>



                            </div>
                        @endforeach
                    </dl>
                </div>
                <div  x-data="{ open: false }">
                    <button  @click="open = ! open">
                        <a href="{{ route('reorder', ['order_id' => $order->id]) }}" class="btn btn-primary">Buy Again</a>
                    </button>
                    <div id="cart-modal" class="fixed inset-0 flex items-center justify-center z-50" x-show="open" @click.outside="open = false ">
                        <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>
                        <div class="modal-container bg-white w-96 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">

                            <div class="modal-content p-4">
                                <h2 class="text-lg font-bold">Re ordered sucessfully !</h2>


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
        <hr/>
    @else



            <div class="text-center mb-10">

                <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">No orders ! :(</h1>
                <p class="mt-6 text-base leading-7 text-gray-600">Shop and Order!.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ url('welcome') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continue Shopping</a>

                </div>
            </div>

    @endif
</div>-->
</x-app-layout>
