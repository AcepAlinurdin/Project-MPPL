<!-- resources/views/pemesanan/success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informasi Pembayaran</title>
</head>
<body>
    <h1>Informasi Pembayaran</h1>

    <h2>Nama: {{ $pemesanan['name'] }}</h2>
    <h2>Alamat: {{ $pemesanan['kelurahan'] }}, {{ $pemesanan['jalan'] }}, {{ $pemesanan['no_rumah'] }}</h2>
    <h2>Jenis Produk: {{ $pemesanan['jenis_produk'] }}</h2>
    <h2>Jenis Kain: {{ $pemesanan['jenis_kain'] }}</h2>
    <h2>Jumlah Pesanan: {{ $pemesanan['jumlah_produk'] }}</h2>
    <h2>Biaya Pengiriman: <!-- Masukkan biaya pengiriman --></h2>
    <div>
                <label for="total_harga" class="block mb-2 text-sm font-extrabold text-gray-900 dark:text-white">Total Harga</label>
                <input type="text" id="total_harga" name="total_harga" readonly
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

    <p>Masukkan bukti pembayaran</p>
    <input type="file" name="upload_foto">
    <p>Silahkan masukkan bukti pembayaran Anda.</p>
    
    <h1>Data Berhasil Disimpan</h1>
    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <a href="{{ route('pemesanan.create') }}">Kembali ke Formulir</a>


    <script>
        if (jenisProduk && jenisKain && ukuran && jumlahProduk) {
            const totalHarga = (hargaProduk[jenisProduk] + hargaKain[jenisKain] + hargaUkuran[ukuran]) * jumlahProduk;
            totalHargaInput.value = 'Rp. ' + totalHarga.toLocaleString('id-ID');
        } else {
            totalHargaInput.value = '';
        }
    
        </script>
</body>
</html>
