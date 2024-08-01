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

<body class="bg-gray-100">
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
                    class="flex items-center p-2 rounded-lg hover:bg-red-700 group {{ request()->routeIs('admin') ? 'bg-white text-black' : 'text-white' }}">
                    <span class="ms-3">Pemesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bukti_pembayaran') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-red-700 group {{ request()->routeIs('bukti_pembayaran') ? 'bg-white text-black' : 'text-white' }}">
                    <span class="flex-1 ms-3 whitespace-nowrap">Bukti Pembayaran</span>
                </a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center p-2 rounded-lg hover:bg-red-700 group {{ request()->routeIs('logout') ? 'bg-white text-black' : 'text-white' }}">
                        <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

    <div class="ml-64 p-4">
        <div class="flex flex-wrap gap-4 mt-7">
            @foreach($pemesanans as $pemesanan)
                <div class="max-w-sm w-52 h-96 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-1/2 w-full h-96 object-cover" src="{{ asset('storage/uploads/' . $pemesanan->upload_foto) }}" alt="{{ $pemesanan->name }}" />
                    </a>
                    <div class="p-5 h-1/2 flex flex-col">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pemesanan->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Jenis Produk: {{ $pemesanan->jenis_produk }}</p>
                        <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Jenis Kain: {{ $pemesanan->jenis_kain }}</p>
                        <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Ukuran: {{ $pemesanan->ukuran }}</p>
                        <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Total Harga: {{ $pemesanan->total_harga }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
