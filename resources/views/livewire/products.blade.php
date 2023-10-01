
<x-slot name="header" >
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center ">
        POINT Products
    </h2>
</x-slot>

<div class="mt-0 bg-white">
    <div class=" bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route ('category-list')}}" class="bg-gray-600 text-white py-1 mb-6 px-3 rounded my-3 mt-1 ">Categories</a>
        <div class="bg-white flex flex-row overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 mb-2">
            <livewire:colors-manager />
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 mb-2">
            <livewire:size-manager />

        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">


            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

                <div class="flex items-center justify-end mt-4 mb-2">
                    <form action="" method="GET" class="flex items-center justify-end mt-4 mb-2">
                        <div class="flex ">
                            <input type="text" class="border-2 rounded-full py-2 px-4 border-black" name="search" placeholder="Search Products..." value="{{ request('search') }}">
                            <button type="submit" class="flex items-center justify-center px-4">
                                <svg class="w-6 h-6 text-gray-600" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

            <button wire:click="create()" class="bg-gray-600 text-white py-1 mb-6 px-3 rounded my-3 mt-1">Create New Product</button>
            @if($isOpen)
                @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">No.</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">description</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Size</th>
                    <th class="px-4 py-2">Color</th>
                    <th class="px-4 py-2">Stocks</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2 w-60">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->category->category_name}}</td>
                        <td class="border px-4 py-2">{{ $product->detail }}</td>
                        <td class="border px-4 py-2">{{ $product->unit_price }}</td>
                        <td class="border px-4 py-2">{{ $product->size->name }}</td>
                        <td class="border px-4 py-2">{{ $product->color->color}}</td>
                        <td class="border px-4 py-2">{{ $product->stocks }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('images/'.$product->image) }}" alt="" width="100px" height="100px">
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="edit({{ $product->id }})" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded">Edit</button>
                            <button wire:click="delete({{ $product->id }})" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
