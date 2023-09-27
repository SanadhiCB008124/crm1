<x-admin-layout>
   <div class="flex m-10 px-4 py-2 bg-white ">
        <div class="mx-auto sm:px-6 flex  gap-4 flex-wrap">
    <div id="content" class="bg-white/10 ">
        <div id="24h">
            <h1 class="font-bold py-4 uppercase">Statistics</h1>
            <div id="stats" class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
    </div>

</x-admin-layout>
