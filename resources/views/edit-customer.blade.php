<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        <title>Edit customer</title>
</head>

<body class="bg-black">

<div class="container mx-auto py-8 mt-12" x-data="{ success: {{ session('success') ? 'true' : 'false' }}, error: {{ session('error') ? 'true' : 'false' }}}">
    <div x-show="success" class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('success') }}
    </div>

    <div x-show="error" class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('error') }}
    </div>
<h2 class="text-2xl font-bold mb-6 text-center text-white">Edit Customer</h2>
  <form method="post" action="{{ url('update-customer',['id'=> $user->id]) }}" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" >

  @csrf

<div >

    <div class="mb-4">
                <label  class="block text-gray-700 text-sm font-bold mb-2" for="name" >Name</label>
                <input   type="text"  name="name"  value="{{$user->name}}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
    </div>

    <div class="mb-4">
                <label  class="block text-gray-700 text-sm font-bold mb-2" for="email" >email</label>
                <input type="email"  name="email"  value="{{$user->email}}"   class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
     </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">Contact No:</label>
        <input type="text" name="contact"  value="{{ $user->contact }}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
        <input type="text" name="address" value="{{$user->address}}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
    </div>


</div>
<br>

    <div class="flex items-center justify-around">
      <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Update
      </button>

      <a href="{{ url('customer-list') }}" class="text-black no-underline hover:underline" >Back</a>

    </div>
  </form>

</div>

</body>
</html>

