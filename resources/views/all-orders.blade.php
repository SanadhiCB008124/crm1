<x-admin-layout>
    <form action="{{ route('orders.filter') }}" method="GET" class="flex items-center space-x-4">
        <!-- Order Number Filter -->
        <div>
            <label for="order_number" class="block text-gray-700">Order Number:</label>
            <input type="text" name="order_number" id="order_number" class="border rounded-md px-2 py-1">
        </div>

        <!-- Status Filter -->
        <div>
            <label for="status" class="block text-gray-700">Status:</label>
            <select name="status" id="status" class="border rounded-md px-2 py-1">
                <option value="">All</option>
                <option value="pending">Pending</option>
                <option value="processing">Processing</option>
                <option value="shipped">Shipped</option>
                <!-- Add more status options as needed -->
            </select>
        </div>

        <!-- Payment Status Filter -->
        <div>
            <label for="payment_status" class="block text-gray-700">Payment Status:</label>
            <select name="payment_status" id="payment_status" class="border rounded-md px-2 py-1">
                <option value="">All</option>
                <option value="unpaid">Unpaid</option>
                <option value="paid">Paid</option>
                <!-- Add more payment status options as needed -->
            </select>
        </div>

        <!-- Date of Order Filter -->
        <div>
            <label for="date_of_order" class="block text-gray-700">Date of Order:</label>
            <input type="date" name="date_of_order" id="date_of_order" class="border rounded-md px-2 py-1">
        </div>

        <!-- Payment Method Filter -->
        <div>
            <label for="payment_id" class="block text-gray-700">Payment Method:</label>
            <select name="payment_id" id="payment_id" class="border rounded-md px-2 py-1">
                <option value="">All Payment Methods</option>
                @foreach ($paymentMethod as $payment)
                    <option value="{{ $payment->id}}">{{ $payment->payment_method}}</option>
                @endforeach

            </select>
        </div>

        <!-- Filter Button -->
        <button type="submit" class="bg-black text-white rounded-full py-2 px-4 border border-black">Filter</button>
    </form>




@if(count($orders) > 0)
    <section class="container mx-auto p-6">
<p>Total Orders : {{$orderCount}}</p>
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

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    @endif

</x-admin-layout>

