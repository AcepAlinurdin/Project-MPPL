# E-Commerce Konveksi

## Deskripsi
Proyek ini adalah platform e-commerce berbasis web untuk pemesanan baju konveksi. Pengguna dapat memilih ukuran, jenis baju, dan jenis kain sebelum melakukan pemesanan. Sistem ini memiliki fitur login dengan dua jenis pengguna: pelanggan dan admin. Admin bertanggung jawab untuk mengelola pesanan dan mengonfirmasi apakah pesanan sudah diproses atau belum.

## Teknologi yang Digunakan
- **Framework**: Laravel 9
- **Database**: MySQL (dikelola menggunakan phpMyAdmin)
- **Frontend**: Bootstrap
- **Autentikasi**: Sistem login dengan sesi (Session)
- **Role-based Access**:
  - **User**: Dapat melakukan pemesanan
  - **Admin**: Mengelola pesanan dan melakukan konfirmasi

## Fitur Utama
- Registrasi dan Login untuk pengguna dan admin
- Pemesanan baju dengan berbagai ukuran, jenis baju, dan kain
- Sistem sesi untuk mengelola autentikasi
- Dashboard admin untuk mengelola pesanan
- Konfirmasi status pesanan oleh admin
