<x-app-layout>
    <section class="w-full ">
        <img
            src="images/shoeee.jpg"
            class="object-center w-full h-4/5 shadow-lg "
            alt="Homepage image"
        />
    </section>

    <div class="container mx-auto mt-10">
        @if(request()->has('search'))
            <h2 class="text-2xl font-semibold mb-4">Search Results for: "{{ request('search') }}"</h2>
            <ul class="flex flex-wrap -mx-4">
                @foreach($products as $product)
                    <li class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 mt-3 ml-3">
                        <!-- Product Card HTML -->
                        <!-- ... Your product card code here ... -->
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-xl"></p>
        @endif
    </div>

    <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Fall Collection</h1>
                    <p class="mt-4 text-xl text-gray-500">Check out our latest collections and shop your heart out</p>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div aria-hidden="true"
                             class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img src="images\login2.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="images\img2.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="images\home2.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="images\img.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="images\home.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="images\home3.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="images\img3.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                           class="inline-block rounded-md border border-transparent bg-black px-8 py-3 text-center font-medium text-white hover:text-amber-100">Shop
                            Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <h2 class="text-2xl font-bold text-gray-900">More to Explore</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="images\model1.jpg"
                                 alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                 class="h-full w-full object-cover object-center">
                        </div>

                        <button
                            class="py-2 px-4 mt-2 rounded-full bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 shadow-lg transform hover:scale-105 transition-transform duration-300">
                            Womens
                        </button>
                    </div>
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="images\model2.jpg"
                                 alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                 class="h-full w-full object-cover object-center">
                        </div>

                        <button
                            class="py-2 px-4 mt-2 rounded-full bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 shadow-lg transform hover:scale-105 transition-transform duration-300">
                            Sports
                        </button>
                    </div>
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="images\model4.jpg" alt="Collection of four insulated travel bottles on wooden shelf."
                                 class="h-full w-full object-cover object-center">
                        </div>


                        <button
                            class="py-2 px-4 mt-2 rounded-full bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 shadow-lg transform hover:scale-105 transition-transform duration-300">
                            Mens
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
