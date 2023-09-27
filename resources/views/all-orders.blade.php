<x-admin-layout>
    @if(count($orders) > 0)
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">

                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-white bg-black uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Order Number</th>
                        <th class="px-4 py-3">Customer</th>
                        <th class="px-4 py-3">Total</th>
                        <th class="px-4 py-3">Payment Method</th>
                        <th class="px-4 py-3">Status</th>

                        <th class="px-4 py-3">Biller Name</th>
                        <th class="px-4 py-3">Shipping  Address</th>
                        <th class="px-4 py-3">Billing Address</th>
                        <th class="px-4 py-3">Contact </th>
                        <th class="px-4 py-3">Data of order</th>
                        <td>Order Details</td>

                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($orders as $order)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                                <div>
                                    <p class="font-semibold text-black">{{ $order->order_number }}</p>
                                    <p class="text-xs text-gray-600">{{$order->customer->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{$order->customer->name}}</td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{ $order->total_amount }} LKR</td>

                        <td class="px-4 py-3 text-ms font-semibold border">{{$order->payment->payment_method}}</td>
                        <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{ $order->status }} </span>
                        </td>

                        <td class="px-4 py-3 text-ms font-semibold border">{{ $order->first_name }} {{$order->last_name}}</td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{$order->shipping_address}}</td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{$order->billing_address}}</td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{$order->contact}}</td>



                        <td class="px-4 py-3 text-sm border">{{$order->date_of_order}}</td>
                        <td class="px-4 py-3 text-ms font-semibold border">
                        @foreach($order->orderItems as $item)

                                <p class="text-sm font-medium leading-6 text-gray-900">Product Name: {{$item->product->name}}* {{$item->quantity}}</p>

                                <p class="text-sm font-medium leading-6 text-gray-900"> UNIT PRICE : {{$item->product->unit_price }} LKR </p>

                            @endforeach
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    @endif

 <!--   @if(count($orders) > 0)
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
                            <dt class="text-sm font-medium leading-6 text-gray-900">Customer</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $order->customer->name }}</dd>
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

            @endforeach
        </ul>

    @else
        <p>No orders found.</p>
    @endif
-->
</x-admin-layout>

