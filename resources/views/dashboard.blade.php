<x-admin-layout>
   <div class="flex m-10 px-4 py-2 bg-white ">
        <div class="mx-auto sm:px-6 flex  gap-4 flex-wrap">
        <div id="content" class="bg-white/10 ">
        <h1 class="font-bold py-4 uppercase">Statistics</h1>
        <div class="grid grid-cols-10 gap-4 m-6">
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Users</div>
                        <div class="font-bold text-lg">{{ $customerCount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Orders</div>
                        <div class="font-bold text-lg">{{ $totalOrderCount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Revenue</div>
                        <div class="font-bold text-lg">LKR {{ number_format($totalRevenue, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Cost of Goods</div>
                        <div class="font-bold text-lg">LKR {{ number_format($totalCOGS, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Profit Margin</div>
                        <div class="font-bold text-lg">{{ number_format($profitMargin, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Average Order value</div>
                        <div class="font-bold text-lg">LKR {{ number_format($averageOrderValue, 2) }}</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
         </div>
        <!--
        <div id="24h">
            <h1 class="font-bold py-4 uppercase">Statistics</h1>
            <div id="stats" class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">

                        <div>

                            <x-dashboard-card
                                value="{{ number_format($profitMargin, 2) }}"
                                description="Profit Margin"
                            />
                        </div>
                    </div>
                </div>
                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">
                        <div>
                            <x-dashboard-card
                                value="{{ $customerCount }}"
                                description="Total customers: {{ $customerCount }}"
                            />

                        </div>
                    </div>
                </div>

                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">
                        <div>
                            <x-dashboard-card
                                value="{{ $totalOrderCount }}"
                                description="Total Orders: {{ $totalOrderCount}}"
                            />

                        </div>
                    </div>
                </div>
                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">

                        <div>
                            <x-dashboard-card
                                value="$0.00"
                                description="Total Sales"
                            />

                        </div>
                    </div>
                </div>

                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">

                        <div>
                            <x-dashboard-card
                                value="LKR {{ number_format($totalRevenue, 2) }}"
                                description="Total Revenue"
                            />

                        </div>
                    </div>
                </div>

                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">

                        <div>
                            <x-dashboard-card

                                value="{{ number_format($profitMargin, 2) }}%"
                                description="Profit Margin"
                            />

                        </div>
                    </div>
                </div>

                <div class=" p-6 rounded-lg">
                    <div class="flex flex-row space-x-4 items-center">

                        <div>
                            <x-dashboard-card
                                value="LKR {{ number_format($totalCOGS, 2) }}"
                                description="Total COGS"
                            />

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        </div>
    </div>-->
   </div>
</x-admin-layout>
