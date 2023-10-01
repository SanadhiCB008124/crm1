<x-app-layout>
    <div class="h-screen">
    <div class=" flex flex-row justify-end mr-10 mt-5">
    <form action="{{ route('products.filter') }}" method="GET">
        <!-- Category filter -->
        <select name="category_id" class="bg-white  py-2 px-2 m-2 border border-black border-2" >
            <option value="">All Categories</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $category->category_name }}</option>
            @endforeach
        </select>

        <!-- Color filter -->
        <select name="color_id"  class="bg-white py-2 px-2 m-2 border border-black border-2" >
            <option value="">All Colors</option>
            @foreach ($colors as $color)
                <option value="{{ $color->id }}">{{ $color->color }}</option>
            @endforeach
        </select>

        <!-- Size filter -->
        <select name="size_id"  class="bg-white  py-2 px-2 m-2 border border-black border-2" >
            <option value="">All Sizes</option>
            @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->name }}</option>
            @endforeach
        </select>

        <button type="submit"  class="bg-white text-black hover:text-white hover:bg-black py-2 px-2 m-2 border-black border-2" >Filter</button>
    </form>
    </div>
@if(count($products) > 0)
    <div class="flex flex-wrap m-10">
        @foreach($products as $product)


            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 mt-3 ml-3">
                <a href="{{ route('product-description', ['productSlug' => $product->slug]) }}">
                <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-gray-200 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium  text-black">{{ $product->name }}</h2>
                        <p class="mb-2 text-base  text-black">{{ $product->detail }}</p>
                        <div class="flex items-center">
                            <span style="background-color: {{ $product->color->color }};   display: inline-block; width: 20px; height: 20px; border-radius: 50%; font-size: medium; margin-right: 10px;"></span>
                            {{ $product->color->color}}
                            <p class="ml-auto text-base font-medium text-black">{{ $product->size->name }}</p>
                        </div>
                        <p class="mr-2 text-lg font-semibold  text-black">LKR {{ $product->unit_price }}</p>


                        <div class="flex flex-row mt-4">
                          <!--  <a href="{{ route('product-description', ['productSlug' => $product->slug]) }}">View Details</a>-->

                            <form method="post" action="{{ route('cart.add', ['productSlug' => $product->slug]) }}"  class="w-full">
                                @csrf
                                <div x-data="{ open: false }">
                                    <button type="submit"   @click="open = ! open" class=" flex flex-row justify-center  gap-8 text-white bg-black rounded-lg w-full px-4 py-4 hover:bg-gray-800 transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="24" width="24" >
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                        </svg>

                                        Add to Cart</button>

                                    <div id="cart-modal" class="fixed inset-0 flex items-center justify-center z-50" x-show="open" @click.outside="open = false ">
                                        <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>
                                        <div class="modal-container bg-white w-96 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
                                            <!-- Add your modal content here -->
                                            <div class="modal-content p-4">
                                                <h2 class="text-lg font-bold">Product Added to Cart</h2>
                                                <p>Your selected product has been added to the cart.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>


                        </div>

                    </div>

                </div></a>

            </div>
        @endforeach
    </div>
      @else
    <p class="text-black ml-10">No products found.</p>
    @endif
    </div>
</x-app-layout>
