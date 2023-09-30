<x-admin-layout>

    <div class="flex items-center justify-end mt-4 mb-2">
        <form action="{{ route('customer-search') }}" method="GET" class="flex items-center justify-end mt-4 mb-2">
            <div class="flex ">
                <input type="text" class="border-2 rounded-full py-2 px-4 border-black" name="search" placeholder="Search Customers..." value="{{ request('search') }}">
                <button type="submit" class="flex items-center justify-center px-4 border-l">
                    <svg class="w-6 h-6 text-gray-600" fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>

                <table class="table ">

                    <thead>
                    <tr class="bg-gray-100  text-black">
                        <th class="px-4 py-2 ">No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">email</th>
                        <th class="px-4 py-2">Address</th>
                        <th class="px-4 py-2">Number</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="border px-10 py-2">{{ $user->id }}</td>
                            <td class="border px-10 py-2">{{ $user->name }}</td>
                            <td class="border px-10 py-2">{{ $user->email }}</td>
                            <td class="border px-10 py-2">{{ $user->address }}</td>
                            <td class="border px-10 py-2">{{ $user->contact }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>



</x-admin-layout>
