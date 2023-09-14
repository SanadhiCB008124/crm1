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
    <h3 class="font-bold ">Analytics</h3>
    <div class="py-8 grid grid-rows-3">
        <div class="max-w-sm rounded overflow-hidden shadow-lg m-2">

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Average Session Rate:</div>
                <p class="text-gray-900 whitespace-no-wrap">  {{ number_format($averageSessionRate, 2) }} minutes

            </div>

        </div>


        <div class="max-w-sm rounded overflow-hidden shadow-lg m-2">

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Manual  Registration count per day: </div>
              {{$siteRegistrationCountPerday ->count()}}
            </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg m-2">

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Online Registration count : </div>
                {{$onlineRegistrations ->count()}}
            </div>

        </div>

        <div class="max-w-sm rounded overflow-hidden shadow-lg m-2">

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"> Logins per day: </div>
                  {{$loginCountPerDay->count()}}
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
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">     {{$checkoutsPerDay->count()}}</dd>
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
    <div>
        <h2>Least Viewed Product</h2>
        @if ($leastViewed)
            <p>Product Name: {{ $leastViewed->name }}</p>
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-full h-full rounded-full" src="{{ asset('images/'.$leastViewed->image) }}" alt="" />
            </div>
            <p>Size: {{ $leastViewed->size->name }}</p>
            <p>Color: {{ $leastViewed->color->color }}</p>

            <p>View Count: {{ $leastViewedCount }}</p>
        @else
            <p>No products found.</p>
        @endif
    </div><br>

    <div>
        <h2>Most Viewed Product</h2>
        @if ($mostViewed)
            <p>Product Name: {{ $mostViewed->name }}</p>
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-full h-full rounded-full" src="{{ asset('images/'.$mostViewed->image) }}" alt="" />
            </div>
            <p>Size: {{ $mostViewed->size->name }}</p>
            <p>Color: {{ $mostViewed->color->color }}</p>
            <p>View Count: {{ $mostViewedCount }}</p>
        @else
            <p>No products found.</p>
        @endif
    </div>
    <div>
        <h2>Page views per day :</h2>
      {{$pageViewsPerDay->count()}}
    </div>


</div>

</body>
</html>
