
<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>employee list</title>
</head>

<body class="bg-black">


<div class="container flex justify-center mx-auto mt-10">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
            <a href="{{ url('add-employee') }}"  class="text-white"> Add </a>
            
 <table class="table-auto ">
    <thead class="bg-black divide-y divide-gray-300">
       <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Email
                            </th>
                           
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
        </tr>
  </thead>
  <tbody class="bg-black divide-y divide-gray-300">
                @foreach(  $data as $cust)
                
                <tr class="whitespace-nowrap">
                    <td class="px-6 py-4 text-sm text-white">{{ $cust-> id}}</td>
                    <td class="px-6 py-4 text-sm text-white">{{$cust -> name}}</td>
                    <td class="px-6 py-4 text-sm text-white"> {{$cust -> email}}</td>
                   
                    <td class="px-6 py-4 text-sm text-amber-500"><a href="{{ url ('edit-employee/'.$cust->email)}}">Edit</a></td>
                    <td class="px-6 py-4 text-sm text-red-600"><a href="{{ url ('delete-employee'.$cust->email)}}">Delete</a></td>
                </tr>
                @endforeach
   
 </tbody>
</table>

            </div>
        </div>
      
        <a href="{{url ('dashboard') }}" class="text-white">back</a>
    </div>
</div>




</body>
</html>
