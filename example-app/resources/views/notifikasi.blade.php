<x-app-layout>
    <x-slot name="header">
        <h1>Notifikasi Pemesanan</h1>
    </x-slot>

    @if ($pemesanans->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Produk</th>
                    <th>Jenis Kain</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <!-- Kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach ($pemesanans as $pemesanan)
                    <tr>
                        <td>{{ $pemesanan->id }}</td>
                        <td>{{ $pemesanan->name }}</td>
                        <td>{{ $pemesanan->jenis_produk }}</td>
                        <td>{{ $pemesanan->jenis_kain }}</td>
                        <td>{{ $pemesanan->total_harga }}</td>
                        <td>{{ $pemesanan->status }}</td>
                        <!-- Kolom lainnya sesuai kebutuhan -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada pemesanan.</p>
    @endif
</x-app-layout>
