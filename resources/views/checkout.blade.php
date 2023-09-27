<x-app-layout>
    <h1 class="mb-10 text-center text-2xl font-bold m-4">Complete your checkput</h1>
    <div class="split-container m-10 mx-auto flex px-6">
        <div class="flex flex-row split-section bg-white justify-center sm:hidden lg:block flex-1">
            <img src="{{ asset('images/delivery.jpg') }}" alt="" class=" w-2/3">
        </div>
        <div class="split-section bg-white flex-1 px-2">
            <div class="pb-12">

                <form method="POST" action="{{ route('orders.place') }}">
                    @csrf
                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First
                                name</label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last
                                name</label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="given-name"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">Special
                                notes</label>
                            <div class="mt-2">
                                <textarea name="notes" id="notes" placeholder=" Any Special Instructions"
                                          class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="shipping_address" class="block text-sm font-medium leading-6 text-gray-900">Shipping
                                address</label>
                            <div class="mt-2">
                                <input name="shipping_address" type="text" id="shipping_address"
                                       class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="billing_address" class="block text-sm font-medium leading-6 text-gray-900">billing
                                address</label>
                            <div class="mt-2">
                                <input name="billing_address" type="text" id="billing_address"
                                       class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact
                                No</label>
                            <div class="mt-2">
                                <input name="contact" id="contact" type="text"
                                       class="block w-full h-5/5 rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="payment_id" class="block text-sm font-medium leading-6 text-gray-900">Select
                                payment method</label>
                            <div class="mt-2 flex space-x-7 mb-10">
                                @foreach ($paymentMethod as $payment)
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="payment_id" value="{{ $payment->id }}"
                                               class="form-radio h-4 w-4 text-indigo-600">
                                        <span class="ml-2">{{ $payment->payment_method }}</span>
                                    </label>
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <div>
                        <div x-data="{ open: false }">
                            <button type="submit" x-on:click="open = ! open"
                                    class="px-4 w-4/5 ml-16 py-2 text-sm bg-black hover:bg-amber-200 hover:text-black text-white">
                                Confirm Order
                            </button>
                            <div x-show="open">
                                <div id="cart-modal" class="fixed inset-0 flex items-center justify-center z-50 ">
                                    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>
                                    <div
                                        class="modal-container bg-white w-180 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">

                                        <div class="flex justify-center modal-content py-4 px-4">
                                            <svg fill="#2ccb2a" height="70px" width="70px" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"
                                                 stroke="#2ccb2a">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M12,1A11,11,0,1,0,23,12,11.013,11.013,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9.011,9.011,0,0,1,12,21ZM17.737,8.824a1,1,0,0,1-.061,1.413l-6,5.5a1,1,0,0,1-1.383-.03l-3-3a1,1,0,0,1,1.415-1.414l2.323,2.323,5.294-4.853A1,1,0,0,1,17.737,8.824Z"></path>
                                                </g>
                                            </svg>
                                            <div>

                                            <h2 class="text-lg font-bold text-green-600 text-center">Your Order has been placed
                                                Successfully !</h2>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>
                            <button class="px-4 w-4/5 ml-16 mt-2 py-2 text-sm bg-red-200 text-black"><a
                                    href="{{ url('welcome{id}') }}">Continue shopping</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="cart-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class="modal-container bg-white w-96 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">

            <div class="modal-content p-4">
                <svg fill="#2ccb2a" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#2ccb2a">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M12,1A11,11,0,1,0,23,12,11.013,11.013,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9.011,9.011,0,0,1,12,21ZM17.737,8.824a1,1,0,0,1-.061,1.413l-6,5.5a1,1,0,0,1-1.383-.03l-3-3a1,1,0,0,1,1.415-1.414l2.323,2.323,5.294-4.853A1,1,0,0,1,17.737,8.824Z"></path>
                    </g>
                </svg>
                <h2 class="text-lg font-bold text-green-600">Your Order has been placed Successfully !</h2>


            </div>
        </div>
    </div>
</x-app-layout>
