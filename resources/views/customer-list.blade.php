
<x-admin-layout>
<div class="container flex justify-center mx-auto mt-10">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
            <a href="{{ url('add-customer') }}"  class="bg-gray-800 text-white  = px-2 py-2 rounded mt-1"> Register Customer</a>

 <table class="table-auto mt-6 ">
    <thead class="bg-gray-100   text-black ">
       <tr>
                            <th class="px-6 py-2 text-xs ">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs ">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs ">
                                Email
                            </th>
                            <th class="px-6 py-2 text-xs ">
                                Contact
                            </th>
                             <th class="px-6 py-2 text-xs">
                                Address
                              </th>


                            <th class="px-6 py-2 text-xs text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
        </tr>
  </thead>
  <tbody class=" bg-white text-black ">
                @foreach(  $users as $user)

                <tr class="whitespace-nowrap">
                    <td class="px-6 py-4 text-sm border ">{{ $user-> id}}</td>
                    <td class="px-6 py-4 text-sm border ">{{$user -> name}}</td>
                    <td class="px-6 py-4 text-sm border "> {{$user -> email}}</td>
                    <td class="px-6 py-4 text-sm border">{{$user -> contact}}</td>
                    <td class="px-6 py-4 text-sm border "> {{$user -> address}}</td>

                    <td class=" px-6 py-4 text-sm border text-center ">
                       <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded"><a href="{{ url ('edit-customer/'.$user->id)}}" >Update </a></button>
                    </td>
                    <td class="px-6 py-4 text-sm border text-center">
                        <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">
                        <a href="{{ url ('delete-customer/'.$user->id)}}">Delete</a>
                        </button></td>
                </tr>
                @endforeach

 </tbody>
</table>

            </div>
        </div>
    </div>
</div>


</x-admin-layout>>
