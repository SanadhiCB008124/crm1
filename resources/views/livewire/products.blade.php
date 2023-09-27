

<div class="py-12  bg-black">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white py-1 mb-6 px-3 rounded my-3 mt-1">Create New Product</button>
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
