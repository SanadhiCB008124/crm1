
<x-admin-layout>
<div class="container flex justify-center mx-auto mt-10">
    <div class="flex flex-col">
        <div class="w-full">

            <div class="flex items-center justify-end mt-4 mb-2">
                <form action="{{ route('customer-search') }}" method="GET" class="flex items-center justify-end mt-4 mb-2">
                    <div class="flex">
                        <input type="text" class=" border-2 rounded-full py-2 px-4 border-black" name="search" placeholder="Search Customers..." value="{{ request('search') }}">
                        <button type="submit" class="flex items-center justify-center px-4 border-l">
                            <svg class="w-6 h-6 text-gray-600" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <div class="border-b border-gray-200 shadow">
            <a href="{{ url('add-customer') }}"  class="bg-gray-800 text-white  = px-2 py-2 rounded mt-1"> Register Customer</a>
                @if (!empty($users))
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
                        <div x-data="{ open: false, toggle() { this.open = ! this.open }, close() { this.open = false }}">
                            <button @click="toggle()" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">Delete</button>

                            <div x-show="open">
                                <div id="cart-modal" class="fixed inset-0 flex items-center justify-center z-50 ">
                                    <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>
                                    <div
                                        class="modal-container bg-white w-180 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">

                                        <div class="flex justify-center modal-content py-4 px-4">
                                            <div>
                                                <p class="mb-2">Are you sure you want to delete this customer?</p>
                                                <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded mr-2">

                                                    <a href="{{ url ('delete-customer/'.$user->id)}}">Delete</a>
                                                </button>
                                                <button @click="close()" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">
                                                    Cancel
                                                </button>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                        </div>
                        </div>

                    </td>
                </tr>
                @endforeach

 </tbody>
</table>

            </div>
        </div>
    </div>
    @endif
</div>


</x-admin-layout>>
