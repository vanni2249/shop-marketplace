<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logistic</title>
    <style>
        [x-cloak] { 
            display: none !important;
         }
      </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-slate-100">
    
    
    <div class="flex flex-col h-screen justify-between">
        <header class="">
            <div class="border-b bg-white">
                @include('layouts.logistic.header')
            </div>
        </header>

        <main class="mb-auto">
            <div class="px-2">
                @yield('content')

            </div>
        </main>
        <footer class="h-10 bg-blue-500">Footer</footer>
      </div>
    @livewireScripts
</body>
</html>