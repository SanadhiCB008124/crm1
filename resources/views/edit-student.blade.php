<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Edit Customer</title>
</head>

<body class="bg-black">
<!--<div>
    <h2>Edit customer</h2>

    <form method="post" action="{{url ('update-customer') }}">
@csrf 

<input type="hidden" name="id" value="{{$data->id}}" >
<div>

           <div class="mt-4">
                <label  class="block text-bg" for="name" >Name</label>
                <input   type="text"  name="name"  value="{{$data->name}}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>


            <div class="mt-4">
                <label  class="block text-bg" for="email" >email</label>
                <input type="email"  name="email"  value="{{$data->email}}"   class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>


    
</div>
<br>
<button type="submit" >
  Update
    </buttom>
<a href="{{ url('customer-list') }}" >Back</a>
</form>




</div>-->

<div class="w-full max-w-xs flex justify-center mx-auto mt-10">

  <form method="post" action="{{url ('update-customer') }}" class="bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">
  <h2 class="text-white">Edit customer</h2>
  @csrf 

<input type="hidden" name="id" value="{{$data->id}}" >
<div >
  
    <div class="mt-4">
                <label  class="block text-white" for="name" >Name</label>
                <input   type="text"  name="name"  value="{{$data->name}}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
    </div>

    <div class="mt-4">
                <label  class="block text-white" for="email" >email</label>
                <input type="email"  name="email"  value="{{$data->email}}"   class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
     </div>


</div>
<br>
   
    <div class="flex items-center justify-around">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Update
      </button>
      
      <a href="{{ url('customer-list') }}" class="text-amber-100 no-underline hover:underline" >Back</a>
   
    </div>
  </form>
  
</div>









</body>
</html>