<x-admin-layout>

    <div class=" flex w-full px-4 py-2 bg-white lg:w-full">



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="container w-full py-8 " x-data="{ success: {{ session('success') ? 'true' : 'false' }}, error: {{ session('error') ? 'true' : 'false' }}}">
    <div x-show="success" class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('success') }}
    </div>

    <div x-show="error" class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('error') }}
    </div>

    <h2 class="text-2xl font-bold mb-6 text-center text-black ml-10">Add Customer</h2>

    <form  class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="post" action="{{ route('save-Customer') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input type="text" name="name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input type="email" name="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">Contact No:</label>
            <input type="text" name="contact" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
            <input type="text" name="address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
        </div>

        <br>
        <button type="submit"  class="w-full bg-amber-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-amber-600 transition duration-300">Save</button>
        <a href="{{ url('customer-list') }}"  class="w-full bg-black text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-amber-600 transition duration-300">Back</a>
    </form>
</div>
</div>
        </div>

</x-admin-layout>
