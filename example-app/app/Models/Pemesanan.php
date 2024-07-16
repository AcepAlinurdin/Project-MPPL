<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'no_hp',
        'jalan',
        'no_rumah',
        'jenis_produk',
        'jenis_kain',
        'ukuran',
        'upload_foto',
        'deskripsi',
        'province',
        'city',
        'kecamatan',
        'kelurahan',
        'bukti',
        'name',
        'total_harga',
    ];
}
