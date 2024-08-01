<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-center">Pemesanan Anda</h1>
    </x-slot>

    @if ($pemesanans->isNotEmpty())
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b text-center">ID</th>
                    <th class="py-2 px-4 border-b text-center">Nama</th>
                    <th class="py-2 px-4 border-b text-center">Jenis Produk</th>
                    <th class="py-2 px-4 border-b text-center">Jenis Kain</th>
                    <th class="py-2 px-4 border-b text-center">Total Harga</th>
                    <th class="py-2 px-4 border-b text-center">Status</th>
                    <!-- Kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach ($pemesanans as $pemesanan)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">{{ $pemesanan->id }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $pemesanan->name }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $pemesanan->jenis_produk }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $pemesanan->jenis_kain }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $pemesanan->total_harga }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $pemesanan->status }}</td>
                        <!-- Kolom lainnya sesuai kebutuhan -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p class="text-center text-gray-500">Tidak ada pemesanan.</p>
    @endif

</x-app-layout>
