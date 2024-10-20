<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles - Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <div class="w-full p-2">
        {{-- Contiene qui SE ha la route di login --}}
        <div
            class="fixed w-full sm:flex bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="p-6 text-right z-10">
                    {{-- Check autenticazione Se Vero --}}
                    <nav>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </nav>
                </div>
            @endif
        </div>
        <div class="flex flex-col pt-10">
            @auth
                <h2> Bentornato {{ Auth::user()->name }}</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti dignissimos ab, id dicta
                    voluptatibus ducimus quia cupiditate rem maiores minus quos nam labore hic earum voluptatum a
                    consequatur aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, pariatur.
                    Exercitationem, excepturi? Molestiae obcaecati illum sint officiis voluptas! Exercitationem, nihil
                    laudantium voluptates sunt vitae harum veniam similique labore in ipsam.
                </p>
            @endauth
        </div>

    </div>
</body>

</html>
