<div class="w-full max-w-xs">

  <form method="post" action="{{url ('update-customer') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
  @csrf 

<input type="hidden" name="id" value="{{$data->id}}" >
<div>

    <div class="mt-4">
                <label  class="block text-white" for="name" >Name</label>
                <input   type="text"  name="name"  value="{{$data->name}}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
    </div>

    <div class="mt-4">
                <label  class="block text-white" for="email" >email</label>
                <input type="email"  name="email"  value="{{$data->email}}"   class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
     </div>


</div>
   
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
      <a href="{{ url('customer-list') }}" >Back</a>
    </div>
  </form>
  
</div>