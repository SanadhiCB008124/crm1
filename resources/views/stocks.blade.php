
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

<x-slot name="header" >
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center ">
        Stocks
    </h2>
</x-slot>

<div class="py-12  bg-white">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto mt-12 ml-10">
            <div class="grid gap-4 lg:grid-cols-3">

                <div class="flex items-center px-4 py-6 bg-purple-200 rounded-md shadow-md">
                    <canvas id="stockChart"  width="400" height="200"></canvas>

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


                        <td class="border px-4 py-2">{{ $product->stocks }}</td>
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

</body>
</html>
