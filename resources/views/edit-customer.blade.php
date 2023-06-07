<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Edit customer</title>
</head>

<body class="bg-black">

<div class="container mx-auto py-8 mt-12">
<h2 class="text-2xl font-bold mb-6 text-center text-white">Edit Customer</h2>
  <form method="post" action="{{url ('update-customer') }}" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" >
  
  @csrf 

<input type="hidden" name="id" value="{{$data->id}}" >
<div >
  
    <div class="mb-4">
                <label  class="block text-gray-700 text-sm font-bold mb-2" for="name" >Name</label>
                <input   type="text"  name="name"  value="{{$data->name}}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
    </div>

    <div class="mb-4">
                <label  class="block text-gray-700 text-sm font-bold mb-2" for="email" >email</label>
                <input type="email"  name="email"  value="{{$data->email}}"   class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
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

