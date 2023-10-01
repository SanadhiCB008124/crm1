<x-admin-layout>
    <a href="{{ route('add-category') }}" class="bg-gray-600 text-white py-1 mb-6 px-3 rounded my-3 mt-1">Add Category</a> <!-- Corrected view name -->

<div class="container flex justify-center mx-auto mt-10">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">

                <table class="table-auto">
                    <thead class="bg-gray-600 text-white divide-y divide-gray-300">
                    <tr>
                        <th class="px-6 py-2 text-xs 0">
                            ID
                        </th>
                        <th class="px-6 py-2 text-xs">
                            Name
                        </th>
                        <th class="px-6 py-2 text-xs ">
                            Edit
                        </th>
                        <th class="px-6 py-2 text-xs ">
                            Delete
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white text-black divide-y divide-gray-300">
                    @foreach($categories as $category) <!-- Corrected variable name -->
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm ">{{ $category->id }}</td>
                        <td class="px-6 py-4 text-sm ">{{ $category->category_name }}</td>
                        <td class=" px-6 py-4 text-sm border text-center ">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded"><a href="{{ route('edit-category', $category->id) }}">Edit</a></button>

                        </td>
                        <td class=" px-6 py-4 text-sm border text-center ">
                            <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded mr-2"><a href="{{ route('delete-category',$category->id) }}">Delete</a></button>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ url('dashboard') }}" class="text-white no-underline hover:underline">Back To Dashboard</a>
</div>
</x-admin-layout>>
