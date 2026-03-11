<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <link rel="icon" type="image/png" href="{{ asset("favicon.png") }}"/>
            <title>@yield('title')</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    <body class="flex min-h-screen flex-col font-poppins bg-[#f5f8fa]">
        @include("layouts.header")
        <main class="container mx-auto w-full flex-1 px-4 py-8">
            @yield('content')
        </main>
        @include("layouts.footer")
    </body>
</html>