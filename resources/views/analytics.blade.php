<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Analytics</title>
</head>
<body>
<div class="container mx-auto px-4 sm:px-8 mt-4">
    <h3 class="font-bold ">Analytics</h3>
    <div class="container mx-auto mt-12">
        <div class="grid gap-4 lg:grid-cols-3">
            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div class="mx-4">


                    <div class="text-gray-500">Average Session Rate  </div>

                    <div class="text-black">{{ number_format($averageSessionRate, 2) }} minutes</div>
                </div>
            </div>

            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mx-4">

                    <div class="text-gray-500">Manual  Registration count :</div>
                    <div class="text-black"> {{$siteRegistrationCountPerday ->count()}}</div>
                </div>
            </div>

            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mx-4">

                    <h4 class="text-gray-500">Online Registration count :</h4>
                    <div class="text-gray-500">  {{$onlineRegistrations ->count()}}</div>
                </div>
            </div>


            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mx-4">

                    <h4 class="text-gray-500">Total Registration count : </h4>
                    <div class="text-gray-500"> {{$totalRegistrationCount}}</div>
                </div>
            </div>

            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mx-4">


                    <h4 class="text-gray-500">Logins per day:</h4>
                    <div class="text-gray-500">{{$loginCountPerDay->count()}}</div>
                </div>
            </div>

            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mx-4">


                    <h4 class="text-gray-500">Checkouts this Month</h4>

                    @if($checkoutsPerMonth->isEmpty())
                        <div class="text-gray-500">No checkouts</div>
                    @else
                        <div class="text-gray-500">{{ $checkoutsPerMonth[0]->count }}</div>
                    @endif
                </div>
            </div>

            <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                <div class="p-3 bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mx-4">
                    <h4 class="text-gray-500">Abandoned Cart Rae</h4>
                    <div class="text-gray-500"> {{ $abandonedCartRate}}%</div>
                </div>
            </div>


        </div>

    </div>

</div>

<div class="container mx-auto mt-12 ml-10">
    <div class="grid gap-4 lg:grid-cols-3">
        <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md ">

            <canvas id="registrationCountsChart" style="width: 400px; height: 200px;"></canvas>
        </div>
        <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md">
            <canvas id="onlineRegistrationsCountsChart" style="width: 400px; height: 200px;"></canvas>

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
</div>

<div class="flex flex-wrap">
    <div class="w-1/2 p-4 rounded-lg ">
        <h2 class="text-2xl font-semibold leading-tight">Most Added-to-Cart Item</h2>
        <div class="w-full p-4 rounded-lg border border-gray-300 shadow-lg">
            @if(isset($product))
                <a class="block h-48 overflow-hidden rounded">
                    <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-2/5 object-cover object-center">
                </a>
                <div class="mt-4">
                    <h2 class="text-lg font-medium text-gray-900">{{ $product->name }}</h2>
                    <h2 class="text-lg font-medium text-rose-500">LKR {{ $product->unit_price }}</h2>
                    <br>
                    <h2 class="text-lg font-medium text-gray-900">{{ $product->detail }}</h2>
                    <h2 class="title-font text-lg font-medium text-gray-900">color: {{ $product->color->color}}</h2>
                    <h2 class="text-lg font-medium text-gray-900">SIZE: {{ $product->size->name }}</h2>
                </div>
            @else
                <p>No product has been added to the cart yet.</p>
            @endif
        </div>
    </div>


    <div class="w-1/2 p-4 rounded-lg ">
<h2 class="text-2xl font-semibold leading-tight">Least Added-to-Cart Item</h2>

<div class="w-full p-4 rounded-lg border border-gray-300 shadow-lg">
    @if(isset($leastAddedProduct))
        <a class="block h-48 overflow-hidden rounded">
            <img src="{{ asset('images/'.$leastAddedProduct->image) }}" alt="{{ $leastAddedProduct->name }}" class="h-full w-2/5 object-cover object-center">
        </a>
        <div class="mt-4">
            <h2 class="text-lg font-medium text-gray-900">{{ $leastAddedProduct->name }}</h2>
            <h2 class="text-lg font-medium text-rose-500">LKR {{ $leastAddedProduct->unit_price }}</h2>
            <br>
            <h2 class="text-lg font-medium text-gray-900">{{ $leastAddedProduct->detail }}</h2>
            <h2 class="title-font text-lg font-medium text-gray-900">color: {{ $leastAddedProduct->color->color}}</h2>
            <h2 class="text-lg font-medium text-gray-900">SIZE: {{ $leastAddedProduct->size->name }}</h2>
        </div>
    @else
        <p>No product has been added to the cart yet.</p>
    @endif
</div>
    </div>

</div>

<div class="container mx-auto px-4 sm:px-8 mt-4">
    <div class="container mx-auto mt-12">
        <div class="grid gap-4 lg:grid-cols-3">
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
                        <p class="text-black">Color ID: {{ $mostSoldByColor->color}}</p>
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
        <div class="grid gap-4 lg:grid-cols-3">
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
        <div class="grid gap-4 lg:grid-cols-3">
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



    <div class="flex flex-wrap">
        <div class="w-1/2 p-4 rounded-lg ">
            <h2 class="text-2xl font-semibold leading-tight">Most Viewed Product</h2>
            <div class="w-full p-4 rounded-lg border border-gray-300 shadow-lg">
<div> view count:  {{ $mostViewedProduct->views }}</div>
                    <a class="block h-48 overflow-hidden rounded">
                        <img src="{{ asset('images/'.$mostViewedProduct->image) }}" alt="{{ $mostViewedProduct->name }}" class="h-full w-2/5 object-cover object-center">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-lg font-medium text-gray-900">{{ $mostViewedProduct->name  }}</h2>
                        <h2 class="text-lg font-medium text-rose-500">LKR {{ $mostViewedProduct->unit_price }}</h2>

                        <h2 class="text-lg font-medium text-gray-500">{{ $mostViewedProduct->detail }}</h2>
                        <h2 class="title-font text-lg font-medium text-gray-500">color: {{ $mostViewedProduct->color->color}}</h2>
                        <h2 class="text-lg font-medium text-gray-500">size: {{ $mostViewedProduct->size->name }}</h2>
                    </div>

            </div>
        </div>


        <div class="w-1/2 p-4 rounded-lg ">
            <h2 class="text-2xl font-semibold leading-tight">Least Viewed Product</h2>

            <div class="w-full p-4 rounded-lg border border-gray-300 shadow-lg">
                <div> view count:  {{ $leastViewedProduct->views }}</div>
                    <a class="block h-48 overflow-hidden rounded">
                        <img src="{{ asset('images/'.$leastViewedProduct->image) }}" alt="{{ $leastViewedProduct->name }}" class="h-full w-2/5 object-cover object-center">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-lg font-medium text-gray-900">{{ $leastViewedProduct->name }}</h2>
                        <h2 class="text-lg font-medium text-rose-500">LKR {{ $leastViewedProduct->unit_price }}</h2>

                        <h2 class=" font-medium text-gray-500">{{ $leastViewedProduct->detail }}</h2>
                        <h2 class="title-font text-lg font-medium text-gray-500">color: {{ $leastViewedProduct->color->color}}</h2>
                        <h2 class="text-lg font-medium text-gray-500">sizeE: {{ $leastViewedProduct->size->name }}</h2>
                    </div>

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


</body>
</html>
