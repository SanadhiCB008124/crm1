<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Analytics</title>
</head>
<body>
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Matches Schedule</h2>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Home
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Res.
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Res.
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Away
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                    <img class="w-full h-full rounded-full"
                                         src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                         alt="" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Team 1
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap text-center">0</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap text-center">
                                3
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                            <div class="flex items-center float-right">
                                <div class="mr-3">
                                    <p class="text-gray-900 whitespace-no-wrap text-right">
                                        Team 2
                                    </p>
                                </div>
                                <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                    <img class="w-full h-full rounded-full"
                                         src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                         alt="" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                    <img class="w-full h-full rounded-full"
                                         src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                         alt="" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap"> Average Session Rate: {{ number_format($averageSessionRate, 2) }} minutes
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap text-center">0</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap text-center">
                           Registration count per day: {{$siteRegistrationCountPerday ->count()}}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                            <div class="flex items-center float-right">
                                <div class="mr-3">

                                    <p class="text-gray-900 whitespace-no-wrap text-right">
                                        Logins per day:    {{$loginCountPerDay->count()}}
                                    </p>

                                </div>
                                <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                    <img class="w-full h-full rounded-full"
                                         src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                         alt="" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto px-4 sm:px-8">
    <!-- Add your analytics content here -->
    <h2 class="text-2xl font-semibold leading-tight">Most Added-to-Cart Item</h2>
    @if(isset($product))
        <div class="py-4">
            <div class="flex items-center">
                <div class="flex-shrink-0 w-10 h-10">
                    <img class="w-full h-full rounded-full" src="{{ asset('images/'.$product->image) }}" alt="" />
                </div>
                <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $product->name }}</p>
                </div>
            </div>
        </div>
    @else
        <p>No product has been added to the cart yet.</p>
    @endif
</div>
<div class="container mx-auto px-4 sm:px-8">
<h2 class="text-2xl font-semibold leading-tight">Least Added-to-Cart Item</h2>
@if(isset($leastAddedProduct))
    <div class="py-4">
        <div class="flex items-center">
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-full h-full rounded-full" src="{{ asset('images/'.$leastAddedProduct->image) }}" alt="" />
            </div>
            <div class="ml-3">
                <p class="text-gray-900 whitespace-no-wrap">{{ $leastAddedProduct->name }}</p>
            </div>

        </div>
    </div>
@else
    <p>No product has been added to the cart yet.</p>
    @endif
</div>
<div>
    <h2>Most Sold Color</h2>
    @if($mostSoldByColor)
        <p>Color ID: {{ $mostSoldByColor->color}}</p>
        <p>Total Quantity Sold: {{ $mostSoldByColor->total_sold }}</p>
    @else
        <p>No data available for most sold color.</p>
    @endif
</div>
<div>
    <h2>Most Sold Size</h2>
    @if($mostSoldBySize)
        <p>Size: {{ $mostSoldBySize->size_name }}</p>
        <p>Total Quantity Sold: {{ $mostSoldBySize->total_sold }}</p>
    @else
        <p>No data available for most sold size.</p>
    @endif
</div>

<div>
    <h2>Most Sold Category</h2>
    @if($mostSoldByCategory)
        <p>Category: {{ $mostSoldByCategory->category_name }}</p>
        <p>Total Quantity Sold: {{ $mostSoldByCategory->total_sold }}</p>
    @else
        <p>No data available for most sold category.</p>
    @endif
</div>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Total Revenue</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">LKR {{ number_format($totalRevenue, 2) }}</dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Total COGS</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">LKR {{ number_format($totalCOGS, 2) }}</dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Profit Margin</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ number_format($profitMargin, 2) }}%</dd>
            </div>
        </dl>
    </div>
</div>
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Checkouts Per day</dt>

                @if($checkoutsPerDay->isEmpty())
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">No checkouts</dd>
                @else
                    @foreach($checkoutsPerDay as $checkout)
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            {{ $checkout->count }}
                        </dd>
                    @endforeach
                @endif
            </div>

            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Checkouts Per Month</dt>

                @if($checkoutsPerMonth->isEmpty())
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">No checkouts</dd>
                @else
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $checkoutsPerMonth[0]->count }}</dd>
                @endif
            </div>


        </dl>
    </div>
</div>

</body>
</html>
