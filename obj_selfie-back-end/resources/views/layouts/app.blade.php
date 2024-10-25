<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Obiettivo Selfie | Admin Area</title>
    <link
    rel="icon"
    type="image/svg+xml"
    href="{{asset('images/obj_selfie_dark.png')}}"
  />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @php
        $currentPath = request()->path();
    @endphp
    <nav class="bg-slate-700">
        <ul class="flex justify-center items-center gap-6 p-4 text-white">
            <li><a href="{{ route('admin.dashboard') }}"
                    class="{{ $currentPath === 'admin' ? 'italic' : 'opacity-50' }} hover:underline underline-offset-8">Dashboard</a>
            </li>
            <li><a href="{{ route('admin.messages.index') }}"
                    class="{{ $currentPath === 'admin/messages' ? 'italic' : 'opacity-50' }} hover:underline underline-offset-8">Messaggi</a>
            </li>
            {{-- Non posso usare collegamento diretto in quanto route() fa un GET 
            <li><a href="{{ route('logout')}}">Logout</a></li> 
            --}}
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button
                        class="bg-transparent hover:bg-orange-400 text-white font-semibold hover:text-white py-2 px-4 border border-orange-400 hover:border-transparent hover:transition rounded-xl transition"
                        type="submit">Logout</button>
                </form>
            </li>
        </ul>


    </nav>
    <main class="flex flex-col gap-6 items-center mt-10 p-4">
        @yield('content')
    </main>
</body>

</html>
