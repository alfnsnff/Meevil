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

                    @include('layouts.navigation')

                    <div class="lg:w-7/12 w-11/12 border-x border-gray-800 relative">

                        @yield('container')

                        {{-- <main>
                            {{ $slot }}
                        </main> --}}

                    </div>

                    <div class="lg:block hidden lg:w-4/12 h-screen" >
                        
                    @include('layouts.sidepane')
                        
                    </div>
                </div>

        </div>
    </body>
</html>
