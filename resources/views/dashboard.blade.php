<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
        
            <div class="flex h-screen">
            <div class="px-4 py-2  bg-black lg:w-1/4 border border-r-amber-100  border-y-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-8 h-8 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <div class="hidden lg:block">
                    <div class="my-2 mb-6">
                        <h1 class="text-2xl font-bold text-white">Admin Dashboard</h1>
                    </div>
                    <ul>
                        <li class="mb-6">
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                    <button type="submit" class="p-1 focus:outline-none">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            class="w-4 h-4">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                </span>
                                <input type="search" name="search"
                                    class="w-full px-4 py-2 pl-12 rounded shadow outline-none  focus:border-amber-100       " placeholder="Search...">
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100 ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                               
                                Stocks
                            </a>
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100  ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                               
                                Customers
                            </a>
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100 ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                              
                                Sales
                            </a>
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100 ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                                
                                Leads
                            </a>
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100 ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                                
                               Analytics
                            </a>
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100 ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                                
                               Reports
                            </a>
                        </li>
                        <li class="mb-2 rounded hover:shadow hover:bg-amber-100 ">
                            <a href="#" class="inline-block w-full h-full px-3 py-2 font-bold text-white hover:text-black">
                                
                               Settings
                            </a>
                        </li>
                       
                        <li >
                        <a href="{{ route('logout') }}" class="block mt-4 lg:inline-block lg:mt-0 text-amber-100 mr-4 px-3 py-2 no-underline hover:underline  sm:block"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                        <li>
                    </ul>
                </div>

            </div>
            <div class="w-full px-4 py-2 bg-black lg:w-full">
                <div class="container mx-auto mt-12">
                    <div class="grid gap-4 lg:grid-cols-3">
                        <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-indigo-600 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div class="mx-4">
                                <h4 class="text-2xl font-semibold text-gray-700">0</h4>
                               
                                <div class="text-gray-500">Total customers</div>
                               
                                <div class="text-black"><a href="{{url ('customer-list')}}">view customer registered</a></div>
                            </div>
                        </div>
                        <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-indigo-600 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            </div>
                            <div class="mx-4">
                                <h4 class="text-2xl font-semibold text-gray-700">0</h4>
                                <div class="text-gray-500">Total Employees</div>
                                <div class="text-black"><a href="{{url ('employee-list')}}">View registered employees</a></div>
                            </div>
                        </div>
                        <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-indigo-600 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            </div>
                            <div class="mx-4">
                                <h4 class="text-2xl font-semibold text-gray-700">0</h4>
                                <div class="text-gray-500">Total Orders</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-indigo-600 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="mx-4">
                                <h4 class="text-2xl font-semibold text-gray-700">$0.00</h4>
                                <div class="text-gray-500">Total Sales</div>
                            </div>
                           
                        </div>
                    </div>
     
                </div>
                  
            </div>
            
      
        </div>
</div>
</body>
</html>