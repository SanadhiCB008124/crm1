<x-admin-layout>
<div class="container mx-auto py-8 mt-12">
    <h2 class="text-2xl font-bold mb-6 text-center text-white">Add Category</h2> <!-- Corrected heading text -->

    <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="post" action="{{ route('save-category') }}"> <!-- Corrected action URL -->
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="category_name">Name</label> <!-- Corrected field name -->
            <input type="text" name="category_name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
        </div>

        <br>
        <button type="submit" class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
        <a href="{{ url('category-list') }}" class="ml-2 bg-black text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-amber-600 transition duration-300">Back</a> <!-- Corrected view name -->
    </form>
</div>
</x-admin-layout>
