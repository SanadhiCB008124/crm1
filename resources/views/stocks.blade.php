<x-admin-layout>
<x-slot name="header" >
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center ">
        Stocks
    </h2>
</x-slot>

<div class=" flex w-full px-4 py-2 bg-white lg:w-full">



    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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

                <h4 class="text-2xl font-semibold text-gray-700">{{ $inventoryTurnoverRate }}%</h4>
                <div class="text-gray-500">Inventory Turnover Rate</div>
            </div>
        </div>
        <div class="container mx-auto mt-12 ml-10">










            <div class="grid gap-4 lg:grid-cols-3">

                <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md">
                    <canvas id="stockChart"  width="400" height="200"></canvas>

                </div>

                <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md">
                    <canvas id="inventoryTurnoverChart" width="400" height="200"></canvas>
                </div>



            </div>
        </div>


        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <table class="table-fixed w-full">

                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">No.</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Stocks</th>
                    <th class="px-4 py-2">Image</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->category->category_name}}</td>


                        <td class="border px-4 py-2">
                            @if ($product->stocks < 10)
                                <span class="text-red-500">{{ $product->stocks }}</span>
                                <div class="text-sm text-red-500">Low Stock Alert!</div>
                            @else
                                {{ $product->stocks }}
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('images/'.$product->image) }}" alt="" width="100px" height="100px">
                        </td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('images/'.$product->image) }}" alt="" width="100px" height="100px">


                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stockData = {!! json_encode($products->pluck('stocks')) !!};
        const labels = {!! json_encode($products->pluck('name')) !!};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Stock Levels',
                data: stockData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',

                ],
                borderColor: [
                    'rgb(255, 99, 132)',

                ],
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

        const ctx = document.getElementById('stockChart').getContext('2d');
        new Chart(ctx, config);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const labels = {!! json_encode($products->pluck('name')) !!};
        const inventoryTurnoverData = {!! json_encode($inventoryTurnoverRate) !!};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Inventory Turnover Rate',
                data: inventoryTurnoverData,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        const ctx = document.getElementById('inventoryTurnoverChart').getContext('2d');
        new Chart(ctx, config);
    });
</script>

</x-admin-layout>
