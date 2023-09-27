<x-admin-layout>

                <table class="table ">

                    <thead>
                    <tr class="bg-black text-white">
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

            </div>
        </div>



</x-admin-layout>
