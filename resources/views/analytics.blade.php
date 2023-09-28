<x-admin-layout>
    <div class="container mx-auto px-4 sm:px-8 mt-4 ">
        <h3 class="font-bold ">Analytics</h3>

        <div class="container mx-auto mt-12 ml-10">
            <div class="flex flex-row space-x-4 flex-wrap">
                <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md ">
                    <canvas id="registrationCountsChart" style="width: 400px; height: 200px;"></canvas>
                </div>
                <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md">
                    <canvas id="onlineRegistrationsCountsChart" style="width: 400px; height: 200px;"></canvas>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-12 ml-10">
            <div class="flex flex-row space-x-4 flex-wrap">
                <div class="flex items-center px-4 mt-3 py-6 bg-purple-200 rounded-md shadow-md">
                    <canvas id="myChart" style="width: 400px; height: 200px;"></canvas>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-12 ">
            <div class="flex flex-row flex-wrap gap-4">
                <div class=" items-center px-4 py-6  rounded-md shadow-md">
                    <div class="mx-4">
                        <div class="text-gray-500">Average Session Rate  </div>
                        @if ($averageSessionRate)
                            <div class="text-black">{{ $averageSessionRate }} minutes</div>
                        @else
                            <div class="text-black">No data available</div>
                        @endif

                    </div>
                </div>


                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="mx-4">
                        <h4 class="text-gray-500">Abandoned Cart Rate</h4>
                        <div class="text-gray-500"> {{ $abandonedCartRate}}%</div>
                    </div>
                </div>

                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="mx-4">

                        <h4 class="text-gray-500">Total Registration count : </h4>
                        <div class="text-gray-500"> {{$totalRegistrationCount}}</div>
                    </div>
                </div>

                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="mx-4">
                        <h4 class="text-gray-500">Logins per day:</h4>
                        <div class="text-gray-500">{{$loginCountPerDay->count()}}</div>
                    </div>
                </div>
            </div>
        </div>





          <div class="flex flex-col mt-4 space-y-2">
                <div class=" items-center px-4 py-6 bg-white rounded-md shadow-md">

                    <div class="mx-4 w-full">
                        <div class='max-w-md mx-auto'  x-data="{ reportsOpen: false }">
                            <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class='flex items-center px-2 py-3'>
                                    <div class='mx-3'>
                                        <button class="hover:underline">Last 7 days</button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                                 x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                site registrations last 7 days : {{ $registrationsLast7Days }}
                            </div>
                        </div>


                        <div class='max-w-md mx-auto'  x-data="{ reportsOpen: false }">
                            <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class='flex items-center px-2 py-3'>
                                    <div class='mx-3'>
                                        <button class="hover:underline">Last Month</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                                 x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                site registrations Last Month : {{ $registrationsLastMonth }}
                            </div>

                        </div>
                        <div class="text-gray-500 font-bold">Onsite Registration count for today: {{$siteRegistrationCountPerday ->count()}}</div>

                    </div>
                </div>


                <div class=" items-center px-4 py-6 bg-white rounded-md shadow-md">

                    <div class="mx-4 w-full">
                        <div class='max-w-md mx-auto'  x-data="{ reportsOpen: false }">
                            <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class='flex items-center px-2 py-3'>
                                    <div class='mx-3'>
                                        <button class="hover:underline">Last 7 days</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                                 x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                Online registrations 7 days : {{ $OnlineRegistrationsLast7Days }}
                            </div>

                        </div>

                        <div class='max-w-md mx-auto'  x-data="{ reportsOpen: false }">

                            <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class='flex items-center px-2 py-3'>
                                    <div class='mx-3'>
                                        <button class="hover:underline">Last Month</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                                 x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                Online registrations Last Month : {{ $OnlineRegistrationsLastMonth }}
                            </div>

                        </div>

                    </div>
                    <div class="text-gray-500  font-bold">Website Registration count for today : {{$onlineRegistrations ->count()}}</h4>

                    </div></div>

                    <div class="items-center px-4 py-6 bg-white rounded-md shadow-md">

                        <div class="mx-4 w-full">



                            <div class='max-w-md mx-auto'  x-data="{ reportsOpen: false }">

                                <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                    <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </div>
                                    <div class='flex items-center px-2 py-3'>
                                        <div class='mx-3'>
                                            <button class="hover:underline">Last 7 days</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                                     x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                    checkouts  last seven days :{{ $checkoutsLast7Days }}
                                </div>

                            </div>

                            <div class='max-w-md mx-auto'  x-data="{ reportsOpen: false }">

                                <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                    <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </div>
                                    <div class='flex items-center px-2 py-3'>
                                        <div class='mx-3'>
                                            <button class="hover:underline">Last Month</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                                     x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                    last Month: {{$checkoutsLastMonth}} checkouts
                                </div>

                            </div>

                                <div class="text-gray-500 font-bold">Checkouts for Today :{{ $checkoutsToday}}</div>

                        </div>
                    </div>
           </div>

         </div>

    <h1 class="font-bold m-5 mt-10">Product Analytics</h1>


    <div class="flex flex-row">
        <div class=" p-4 rounded-lg ">
            <h2 class="text-2xl font-semibold leading-tight">Most Added-to-Cart Item</h2>
            <div class=" p-4 rounded-lg border border-gray-300 shadow-lg">
                @if(isset($product))
                    <a class="block h-48 overflow-hidden rounded">
                        <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-full  object-cover object-center">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-sm font-medium text-gray-900">{{ $product->name }}</h2>
                        <h2 class="text-sm font-medium text-rose-500">LKR {{ $product->unit_price }}</h2>
                        <h2 class="text-sm font-medium text-gray-900">{{ $product->detail }}</h2>
                        <h2 class="text-sm font-medium text-gray-900">color: {{ $product->color->color}}</h2>
                        <h2 class="text-sm font-medium text-gray-900">SIZE: {{ $product->size->name }}</h2>
                    </div>
                @else
                    <p>No product has been added to the cart yet.</p>
                @endif
            </div>
        </div>


        <div class=" p-4 rounded-lg ">
            <h2 class="text-2xl font-semibold leading-tight">Least Added-to-Cart Item</h2>

            <div class="p-4 rounded-lg border border-gray-300 shadow-lg">
                @if(isset($leastAddedProduct))
                    <a class="block h-48 overflow-hidden rounded">
                        <img src="{{ asset('images/'.$leastAddedProduct->image) }}" alt="{{ $leastAddedProduct->name }}" class="h-full w-full object-cover object-center">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-sm font-medium text-gray-900">{{ $leastAddedProduct->name }}</h2>
                        <h2 class="text-sm font-medium text-rose-500">LKR {{ $leastAddedProduct->unit_price }}</h2>
                        <h2 class="text-sm font-medium text-gray-900">details: {{ $leastAddedProduct->detail }}</h2>
                        <h2 class="text-sm font-medium text-gray-900">color: {{ $leastAddedProduct->color->color}}</h2>
                        <h2 class="text-sm font-medium text-gray-900">SIZE: {{ $leastAddedProduct->size->name }}</h2>
                    </div>
                @else
                    <p>No product has been added to the cart yet.</p>
                @endif
            </div>
        </div>

    </div>
<!--Most sold Products-->
    <h2 class="text-2xl font-semibold leading-tight">Top 5 Most Sold Products</h2>


    @foreach ($mostSoldProducts as $mostSoldProduct)

    <div class=" p-4 rounded-lg w-1/3">

        <div class="p-4 rounded-lg border border-gray-300 shadow-lg">
                <a class="block h-48 overflow-hidden rounded ">
                    <img src="{{ asset('images/'.$mostSoldProduct->image) }}" alt="{{ $mostSoldProduct->name }}" class="h-full w-full  object-cover object-center">
                </a>
                <div class="mt-4">
                    <h2 class="text-sm font-medium text-gray-900">{{ $mostSoldProduct->name }}</h2>
                    <h2 class="text-sm font-medium text-rose-500">LKR {{ $mostSoldProduct->unit_price }}</h2>
                    <h2 class="text-sm font-medium text-gray-900">details: {{ $mostSoldProduct->detail }}</h2>
                    <h2 class="text-sm font-medium text-gray-900">color: {{ $mostSoldProduct->color}}</h2>
                    <h2 class="text-sm font-medium text-gray-900">SIZE: {{ $mostSoldProduct->size }}</h2>
                </div>

        </div>
    </div>
    @endforeach


    <div class="flex flex-row">
    <div class="container mx-auto px-4 sm:px-8 mt-4">
        <div class="container mx-auto mt-12">
            <div >
                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="p-3 bg-indigo-600 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="mx-4">
                        <div class="text-gray-500">Most Sold Color</div>

                        @if($mostSoldByColor)
                            <p class="text-black">Color:{{ $mostSoldByColor->color}}</p>
                            <p class="text-black">Total Quantity Sold: {{ $mostSoldByColor->total_sold }}</p>
                        @else
                            <p class="text-black">No data available for most sold color.</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4 sm:px-8 mt-4">
        <div class="container mx-auto mt-12">
            <div >
                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="p-3 bg-indigo-600 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="mx-4">
                        <div class="text-gray-500">Most Sold Size</div>

                        @if($mostSoldBySize)
                            <p>Size: {{ $mostSoldBySize->size_name }}</p>
                            <p>Total Quantity Sold: {{ $mostSoldBySize->total_sold }}</p>
                        @else
                            <p>No data available for most sold size.</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4 sm:px-8 mt-4">
        <div class="container mx-auto mt-12">
            <div >
                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="p-3 bg-indigo-600 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="mx-4">
                        <div class="text-gray-500">Most Sold Category</div>
                        @if($mostSoldByCategory)
                            <p>Category: {{ $mostSoldByCategory->category_name }}</p>
                            <p>Total Quantity Sold: {{ $mostSoldByCategory->total_sold }}</p>
                        @else
                            <p>No data available for most sold category.</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Product Hits</h2>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block  shadow rounded-lg overflow-hidden">
                    <table class="w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Date
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Views
                            </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($productViews as $productView)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/3">
                                    <div class="flex items-center">

                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $productView->date }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-black whitespace-no-wrap text-center">
                                        {{ $productView->views_per_day }}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-12 ml-10">
            <div class="flex flex-row space-x-4 flex-wrap">
                <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md ">
                    <canvas id="productHitsChart" style="width: 400px; height: 200px;"></canvas>
                </div>

        </div>



    </div>

    <h2 class="text-2xl font-semibold leading-tight">Top 5 Most Viewed Products</h2>

    <div class="flex flex-row">

        <div class=" p-4 rounded-lg w-full flex flex-row flex-wrap gap-2 ">
            @foreach($mostViewedProduct as $mostViewedProduct)
                <div class=" p-4 rounded-lg border border-gray-300 shadow-lg">
                 <!--   <div>view count:  {{ $mostViewedProduct->views }}</div>-->
                    @if(isset($mostViewedProduct))
                        <a class="block h-48 overflow-hidden rounded">
                            <img src="{{ asset('images/'.$mostViewedProduct->image) }}" alt="{{ $mostViewedProduct->name }}" class="h-full w-full  object-cover object-center">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-sm font-medium text-gray-900">{{ $mostViewedProduct->name }}</h2>
                            <h2 class="text-sm font-medium text-rose-500">LKR {{ $mostViewedProduct->unit_price }}</h2>
                            <h2 class="text-sm font-medium text-gray-900">details: {{ $mostViewedProduct->detail }}</h2>
                            <h2 class="text-sm font-medium text-gray-900">color: {{ $mostViewedProduct->color->color}}</h2>
                            <h2 class="text-sm font-medium text-gray-900">SIZE: {{ $mostViewedProduct->size->name }}</h2>
                        </div>
                    @else
                        <p>No product has been added to the cart yet.</p>
                    @endif
                </div>
            @endforeach

        </div>



    </div>

<div class="flex flex-row">
        <div class=" p-4 rounded-lg w-1/3">
            <h2 class="text-2xl font-semibold leading-tight">Least Viewed product</h2>

            <div class="p-4 rounded-lg border border-gray-300 shadow-lg">
                <div>view count:  {{ $leastViewedProduct->views }}</div>
                @if(isset($leastViewedProduct))
                    <a class="block h-48 overflow-hidden rounded">
                        <img src="{{ asset('images/'.$leastViewedProduct->image) }}" alt="{{ $leastViewedProduct->name }}" class="h-full w-full object-cover object-center">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-sm font-medium text-gray-900">{{ $leastViewedProduct->name }}</h2>
                        <h2 class="text-sm font-medium text-rose-500">LKR {{ $leastViewedProduct->unit_price }}</h2>
                        <h2 class="text-sm font-medium text-gray-900">details :{{ $leastViewedProduct->detail }}</h2>
                        <h2 class="text-sm font-medium text-gray-900">color: {{ $leastViewedProduct->color->color}}</h2>
                        <h2 class="text-sm font-medium text-gray-900">SIZE: {{ $leastViewedProduct->size->name }}</h2>
                    </div>
                @else
                    <p>No product have been viewed yet.</p>
                @endif
            </div>
        </div>

    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const registrationCountsData = {!! json_encode($siteRegistrationCountPerday) !!};

            const labels = registrationCountsData.map(entry => entry.date);
            const counts = registrationCountsData.map(entry => entry.registration_count);

            const data = {
                labels: labels,
                datasets: [{
                    label: 'Site Registration Counts',
                    data: counts,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor:  'rgb(153, 102, 255)',
                    borderWidth: 1,



                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    maintainAspectRatio: false, // Add this option to disable aspect ratio scaling
                    responsive: false, // Add this option to disable responsiveness
                },

            };

            const ctx = document.getElementById('registrationCountsChart').getContext('2d');
            new Chart(ctx, config);
        });


    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const onlineRegistrationsCounts = {!! json_encode($onlineRegistrations) !!};

            const labels = onlineRegistrationsCounts.map(entry => entry.date);
            const counts = onlineRegistrationsCounts.map(entry => entry.registration_count);

            const data = {
                labels: labels,
                datasets: [{
                    label: 'Online Registration Counts',
                    data: counts,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgb(153, 102, 255)',
                    borderWidth: 1,
                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    maintainAspectRatio: false, // Add this option to disable aspect ratio scaling
                    responsive: false, // Add this option to disable responsiveness
                },
            };

            const ctx = document.getElementById('onlineRegistrationsCountsChart').getContext('2d'); // Use the new id here
            new Chart(ctx, config);
        });
    </script>



    <script>
        // Embed the PHP variable as a JavaScript variable
        const averageSessionRateData = {{ $averageSessionRate ?? 'null' }};

        // Check if the averageSessionRateData is not null
        if (averageSessionRateData !== null) {
            // Get the canvas element
            const ctx = document.getElementById('myChart').getContext('2d');

            // Create the chart
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5', 'Label 6', 'Label 7'],
                    datasets: [{
                        label: 'Average Session Rate',
                        data: [averageSessionRateData, averageSessionRateData, averageSessionRateData, averageSessionRateData, averageSessionRateData, averageSessionRateData, averageSessionRateData], // Replace with your data
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
        <script>
            const labels = {!! json_encode($productViews->pluck('date')) !!};
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Product Views per Day',
                    data: {!! json_encode($productViews->pluck('views_per_day')) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgb(75, 192, 192)',
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const ctx = document.getElementById('productHitsChart').getContext('2d');
            new Chart(ctx, config);
        </script>



</x-admin-layout>




