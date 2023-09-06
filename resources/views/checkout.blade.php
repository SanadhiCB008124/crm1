<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1 class="mb-10 text-center text-2xl font-bold m-4">Complete your order</h1>
<div class="split-container bg-gray-300 m-10 mx-auto flex">
    <div class="split-section bg-white hidden lg:block flex-1">
        <img src="images/delivery.jpg" alt="" class="object-fit h-full">
    </div>
    <div class="split-section bg-white flex-1 px-2">
        <div class="pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Delivery Information</h2>
            <form method="POST" action="{{ route('orders.place') }}">
                @csrf
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                        <div class="mt-2">
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                        <div class="mt-2">
                            <input type="text" name="last_name" id="last_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">Special notes</label>
                        <div class="mt-2">
                            <textarea name="notes" id="notes" placeholder=" Any Special Instructions" class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="shipping_address" class="block text-sm font-medium leading-6 text-gray-900">Shipping address</label>
                        <div class="mt-2">
                            <input name="shipping_address" type="text" id="shipping_address"  class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="billing_address" class="block text-sm font-medium leading-6 text-gray-900">billing address</label>
                        <div class="mt-2">
                            <input name="billing_address" type="text" id="billing_address"  class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                        </div>
                    </div>


                    <div class="col-span-full">
                        <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact No</label>
                        <div class="mt-2">
                            <input name="contact" id="contact" type="text" class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="payment_id" class="block text-sm font-medium leading-6 text-gray-900">Select payment method</label>
                        <div class="mt-2">
                            @foreach ($paymentMethod as $payment)
                                <label class="inline-flex items-center">
                                    <input type="radio" name="payment_id" value="{{ $payment->id }}" class="form-radio h-4 w-4 text-indigo-600">
                                    <span class="ml-2">{{ $payment->payment_method }}</span>
                                </label>
                            @endforeach

                        </div>
                    </div>

                </div>
                <div>
                    <button type="submit" class="px-4 w-4/5 ml-16 py-2 text-sm bg-black hover:bg-amber-200 hover:text-black text-white">Confirm Order</button>
                    <button class="px-4 w-4/5 ml-16 mt-2 py-2 text-sm bg-red-200 text-black"><a href="{{ url('welcome{id}') }}">Continue shopping</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
