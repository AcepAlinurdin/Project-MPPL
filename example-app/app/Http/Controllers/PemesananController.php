<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\User;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        // Menampilkan daftar pemesanan
        $pemesanans = Pemesanan::all();
        return view('admin', compact('pemesanans'));
    }
    

    public function create()
    {
        // Menampilkan form pemesanan
        return view('pemesanan');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'no_hp' => 'required',
            'province' => 'required',
            'city' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jalan' => 'required',
            'no_rumah' => 'required',
            'jenis_produk' => 'required',
            'jenis_kain' => 'required',
            'ukuran' => 'required',
            'jumlah_produk' => 'required|integer',
            'deskripsi' => 'nullable',
            'total_harga' => 'required',
            'upload_foto' => 'nullable|file',
            'bukti' => 'nullable|file',
            'user_id' => 'required|exists:users,id'
        ]);

        // Ambil user berdasarkan user_id
        $user = User::find($request->user_id);

        // Simpan data ke tabel pemesanan
        Pemesanan::create([
            'no_hp' => $request->no_hp,
            'province' => $request->province,
            'city' => $request->city,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'jalan' => $request->jalan,
            'no_rumah' => $request->no_rumah,
            'jenis_produk' => $request->jenis_produk,
            'jenis_kain' => $request->jenis_kain,
            'ukuran' => $request->ukuran,
            'jumlah_produk' => $request->jumlah_produk,
            'deskripsi' => $request->deskripsi,
            'total_harga' => $request->total_harga,
            'upload_foto' => $request->file('upload_foto') ? $request->file('upload_foto')->store('uploads', 'public') : null,
            'bukti' => $request->file('bukti') ? $request->file('bukti')->store('uploads', 'public') : null,
            'user_id' => $request->user_id,
            'name' => $user->name // Simpan nama user
        ]);

        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil dibuat');
    }

    public function show($id)
    {
        // Menampilkan detail pemesanan
        $pemesanan = Pemesanan::find($id);
        return view('pemesanan.show', compact('pemesanan'));
    }

    public function edit($id)
    {
        // Menampilkan form edit pemesanan
        $pemesanan = Pemesanan::find($id);
        return view('pemesanan.edit', compact('pemesanan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'no_hp' => 'required',
            'province' => 'required',
            'city' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jalan' => 'required',
            'no_rumah' => 'required',
            'jenis_produk' => 'required',
            'jenis_kain' => 'required',
            'ukuran' => 'required',
            'jumlah_produk' => 'required|integer',
            'deskripsi' => 'nullable',
            'total_harga' => 'required',
            'upload_foto' => 'nullable|file',
            'bukti' => 'nullable|file'
        ]);

        // Ambil data pemesanan yang akan diupdate
        $pemesanan = Pemesanan::find($id);

        // Update data pemesanan
        $pemesanan->update([
            'np_hp' => $request->no_hp,
            'province' => $request->province,
            'city' => $request->city,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'jalan' => $request->jalan,
            'no_rumah' => $request->no_rumah,
            'jenis_produk' => $request->jenis_produk,
            'jenis_kain' => $request->jenis_kain,
            'ukuran' => $request->ukuran,
            'jumlah_produk' => $request->jumlah_produk,
            'deskripsi' => $request->deskripsi,
            'total_harga' => $request->total_harga,
            'upload_foto' => $request->file('upload_foto') ? $request->file('upload_foto')->store('uploads') : $pemesanan->upload_foto,
            'bukti' => $request->file('bukti') ? $request->file('bukti')->store('uploads') : $pemesanan->bukti
        ]);

        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil diupdate');
    }

    public function destroy($id)
    {
        // Hapus pemesanan
        Pemesanan::destroy($id);
        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil dihapus');
    }
}
