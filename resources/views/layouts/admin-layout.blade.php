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
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">

<div class="min-h-screen bg-white">
    <div class="flex h-screen ">
        <div class="px-4 py-2 text-black bg-white  fixed h-full ">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-8 h-8 text-black lg:hidden" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" id="menu-button">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <div class="hidden lg:block " id="menu">

                <span class="text-black text-sm text-center ">Welcome  {{ Auth::user()->email }} !</span>
                <div class="avatar flex items-center justify-center mt-4">
                    <div class="w-24 rounded-full">
                        <img src="{{asset('images/people.png')}}"  alt="avatar"/>
                    </div>
                </div>


                <div class="my-2 mb-6">
                    <a href="{{ url('/dashboard') }}"><h1 class="text-xl font-bold text-black"> Dashboard</h1></a>

                </div>
                <div>

                </div>
                <ul>
                 <!--   <li class="mb-6">
                        <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                    <button type="submit" class="p-1 focus:outline-none ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                             class="w-4 h-4">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                </span>
                            <input type="search" name="search"
                                   class="w-full px-4 py-2 pl-12 rounded shadow outline-none  focus:border-amber-100       "
                                   placeholder="Search..."/></div>
                    </li>-->
                    <li class="mb-2 rounded hover:shadow hover:bg-black  ">
                        <a href="{{ route('products') }}"
                     class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">Product Management</a>
                    </li>

                    <li class="mb-2 rounded hover:shadow hover:bg-black  ">
                        <a href="{{route('stocks')}}"
                           class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">

                            Stocks
                        </a>
                    </li>
                    <li class="mb-2 rounded hover:shadow hover:bg-black  ">
                        <a href="{{ route('customer-list') }}"
                           class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">Customer Management</a>
                    </li>
                    <li class="mb-2 rounded hover:shadow hover:bg-black  ">
                        <a href="{{route('address-book')}}"
                           class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">

                            Address Book
                        </a>
                    </li>

                    <li class="mb-2 rounded hover:shadow hover:bg-black ">
                        <a href="{{route('all-orders')}}"
                           class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">

                            Purchase history
                        </a>

                    </li>
                    <li class="mb-2 rounded hover:shadow hover:bg-black  ">
                        <a href="{{route ('Analytics')}}"
                           class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">

                            Analytics
                        </a>
                    </li>

                    <li class="mb-2 rounded hover:shadow hover:bg-black ">
                        <a href="{{ route('profile.show') }}"
                           class="inline-block w-full h-full px-3 py-2 font-bold text-black hover:text-white">

                            Profile
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                           class="block mt-4 lg:inline-block lg:mt-0 text-red-600 mr-4 px-3 py-2 no-underline hover:underline  sm:block"
                           @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </a>
                    <li>
                </ul>
            </div>
            <script>


                const button = document.querySelector('#menu-button');
                const menu = document.querySelector('#menu');


                button.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            </script>

        </div>

        <div class="px-4 py-2 lg:ml-[250px]">
            <div class="container mx-auto mt-12">
                {{ $slot }}
            </div>
        </div>

    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
