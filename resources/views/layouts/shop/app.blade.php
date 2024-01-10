<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [x-cloak] { 
            display: none !important;
         }
    </style>
</head>
<body class="bg-slate-100">
    <div class="border-b bg-white">
        @include('layouts.shop.header')

    </div>
    <main class="container mx-auto md:px-4">
        @yield('content')

    </main>
    @livewireScripts
</body>
</html>