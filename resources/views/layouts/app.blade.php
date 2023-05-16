<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/a55c595307.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" style="background-color: #0D1117">
        <div class="min-h-screen" >
            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}
                <div class="max-w-[1400px] flex mx-auto" >

                    {{-- <div class="lg:w-4/12 w-[60px] h-[100vh] max-w-[350px] lg:px-4 lg:mx-auto relative"> --}}
                        @include('layouts.navigation')
                    {{-- </div> --}}

                    <div class="lg:w-7/12 w-11/12 border-x border-gray-800 relative">
                            {{-- <main>
                                {{ $slot }}
                            </main> --}}

                            @yield('container')
                    </div>

                    <div class="lg:block hidden lg:w-4/12 h-screen" >
                        <div class="fixed px-3" >
                            <div class="w-full mt-3 lg:flex items-center hidden">
                                <input class="appearance-none w-full border-0 p-3 rounded bg-[#161B22] text-gray-100 placeholder-gray-500 leading-tight focus:ring-0" type="text" placeholder="Search Here" >
                            </div>

                            <div class="w-full max-w-md my-4 p-4 rounded shadow sm:p-8 dark:bg-[#161B22] dark:border-gray-700">
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">Ucup</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">Maklimahbiadab</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">tai</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">triokekalahan</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">gelutkita</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">kacausih</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">udahbng</a>
                                    <a href="#" class="bg-amber-500 text-white text-xs font-medium px-3 py-0.5 rounded-full dark:bg-amber-500 dark:white">kelas</a>
                            </div>
                            
                            <div class="w-full max-w-md my-4 p-4 rounded shadow sm:p-8 dark:bg-[#161B22] dark:border-gray-700">
                                <div class="flex items-center justify-between mb-4">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Top Leaderboards</h5>
                                    {{-- <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                        View all
                                    </a> --}}
                                </div>
                                <div class="flow-root">
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Neil Sims
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        {{--  --}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Bonnie image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Bonnie Green
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        {{--  --}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Michael image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Michael Gough
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        {{--  --}}
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        {{-- Third Column --}}

                    </div>
                </div>

        </div>
    </body>
</html>
