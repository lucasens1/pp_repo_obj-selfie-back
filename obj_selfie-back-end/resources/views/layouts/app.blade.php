<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-slate-500">
        <ul class="flex justify-evenly px-6 py-4 text-white">
            <li><a href="#">Tutti i messaggi</a></li>
            <li><a href="#">Da Leggere</a></li>
            <li><a href="#">Logout</a></li>
        </ul>


    </nav>
    <main class="flex">
        @yield('content')
    </main>
</body>

</html>
