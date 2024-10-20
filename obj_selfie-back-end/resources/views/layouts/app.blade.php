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
    <body class="">
        <div class="bg-slate-500">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat esse, qui ducimus quidem commodi sequi consectetur autem eum numquam, optio dolore! Officia, et accusamus impedit voluptatum ipsam alias minima aliquam.
           Commodi quae velit, expedita voluptas optio doloribus non quas alias ipsum facilis et exercitationem inventore consequatur at eos modi officia ex in esse qui magnam? Nihil deleniti sit facere fugiat.
           Laudantium harum eaque nulla, illum possimus animi soluta quidem doloremque tenetur dolores earum, numquam velit quos, voluptates magni. Accusamus cumque nobis praesentium aspernatur, labore voluptatem illum facere vero quidem nostrum.
           Architecto quas id aliquam in, vitae ipsam inventore, soluta tenetur ea quod placeat quisquam veniam? Atque pariatur earum aliquid nam? Tenetur eligendi ex, provident molestias eveniet doloremque officia. Cupiditate, delectus?
           Dolore aut officiis maiores repudiandae dolores eum? Minima quo placeat suscipit similique animi. Quod commodi repellat ad quidem cupiditate modi saepe dolore doloribus repudiandae voluptas esse, illo vero, rerum tenetur?
           Vel laudantium voluptatem a eligendi quibusdam voluptate veniam voluptas. Doloribus deserunt recusandae perspiciatis tempora debitis minus in, dolor eveniet quae consequatur quo vero similique aspernatur, voluptatum enim officiis magni quod?
            
           @yield('content')

           
        </div>
    </body>
</html>
