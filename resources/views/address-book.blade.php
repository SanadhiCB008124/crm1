<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Address Book</title>
</head>

<body class="bg-black">

<div class="container flex justify-center mx-auto mt-10">
   <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">

                <table class="table-auto">
                    <thead class="bg-black divide-y divide-gray-300">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            ID
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Name
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Contact
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Address
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Email
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-black divide-y divide-gray-300">
                    @foreach($customers as $customer) <!-- Corrected variable name -->
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-white">{{ $customer->id }}</td>
                        <td class="px-6 py-4 text-sm text-white">{{ $customer->name }}</td>
                        <td class="px-6 py-4 text-sm text-white">{{ $customer->contact }}</td>
                        <td class="px-6 py-4 text-sm text-white">{{ $customer->address }}</td>
                        <td class="px-6 py-4 text-sm text-white">{{ $customer->email }}</td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ url('dashboard') }}" class="text-white no-underline hover:underline">Back To Dashboard</a>
</div>

</body>
</html>
