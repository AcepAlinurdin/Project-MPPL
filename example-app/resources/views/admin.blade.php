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
    
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-800 text-black flex-shrink-0">
            <div class="p-4">
                <h2 class="text-2xl font-semibold">Sidebar</h2>
            </div>
            <nav class="mt-4">
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Dashboard</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Profile</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Settings</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Logout</a>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-4">Main Content</h1>
            <p>Acep Alinurdin</p>
        </div>
    </div>

    </body>
</html>

