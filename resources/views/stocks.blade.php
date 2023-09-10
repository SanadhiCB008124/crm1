<x-slot name="header" >
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center ">
        Stocks
    </h2>
</x-slot>

<div class="py-12  bg-white">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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
