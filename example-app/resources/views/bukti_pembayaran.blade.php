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

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-red-600"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-red-600 text-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->routeIs('admin') ? 'bg-white text-black' : 'text-white hover:bg-red-700' }}">
                    <span class="ms-3">Pemesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bukti_pembayaran') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->routeIs('bukti_pembayaran') ? 'bg-white text-black' : 'text-white hover:bg-red-700' }}">
                    <span class="flex-1 ms-3 whitespace-nowrap">Bukti Pembayaran</span>
                </a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center p-2 rounded-lg group {{ request()->routeIs('logout') ? 'bg-white text-black' : 'text-white hover:bg-red-700' }}">
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<div class="container mx-auto p-4 ml-64 mt-7">
    <div class="flex flex-wrap gap-4">
        @foreach($pemesanans as $pemesanan)
            <div class="w-full h-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 p-4">
                <a href="#">
                    <img class="rounded-t-lg w-full h-96 object-cover" src="{{ asset('storage/bukti/' . $pemesanan->bukti) }}" alt="{{ $pemesanan->name }}" />
                </a>
                <div class="p-2 flex flex-col h-full">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pemesanan->name }}</h5>
                    </a>
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between gap-2">
                            <form action="{{ route('pemesanan.updateStatus', $pemesanan->id) }}" method="POST" class="flex-1">
                                @csrf
                                <input type="hidden" name="status" value="diterima">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tandai Diterima</button>
                            </form>

                            <form action="{{ route('pemesanan.updateStatus', $pemesanan->id) }}" method="POST" class="flex-1">
                                @csrf
                                <input type="hidden" name="status" value="dibatalkan">
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Tandai Dibatalkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>

</html>
