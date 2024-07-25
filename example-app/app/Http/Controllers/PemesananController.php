<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

    public function index2()
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            // Mendapatkan ID pengguna yang sedang login
            $userId = Auth::id();
            
            // Mengambil data pemesanan yang berkaitan dengan pengguna yang sedang login
            $pemesanans = Pemesanan::where('user_id', $userId)
                                    ->whereNotNull('total_harga')
                                    ->get();
                                   
            return view('notifikasi', compact('pemesanans'));
        }
    
        // Jika pengguna belum login, arahkan ke halaman login
        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
    }
    
    public function Pembayaran()
    {
        // Menampilkan daftar pemesanan
        $pemesanans = Pemesanan::all();
        return view('bukti_pembayaran', compact('pemesanans'));
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
            'no_hp' => 'required|string',
            'user_id' => 'required|exists:users,id',
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
        ]);
    
        // Ambil user_id dari sesi autentikasi
        $userId = Auth::id();
    
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            
            // Validasi lainnya sesuai kebutuhan
        ]);
        if ($request->hasFile('upload_foto')) {
            $file = $request->file('upload_foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public'); // Simpan file di direktori public/uploads
        } else {
            $fileName = null;
        }
    
        // Buat pemesanan baru
        $pemesanan = new Pemesanan();
        $pemesanan->user_id = $request->input('user_id');
        $pemesanan->no_hp = $request->input('no_hp');
        $pemesanan->jalan = $request->input('jalan');
        $pemesanan->no_hp = $request->input('no_hp');
        $pemesanan->no_rumah = $request->input('no_rumah');
        $pemesanan->jenis_produk = $request->input('jenis_produk');
        $pemesanan->jenis_kain = $request->input('jenis_kain');
        $pemesanan->ukuran = $request->input('ukuran');
        $pemesanan->upload_foto = $fileName;
        $pemesanan->deskripsi = $request->input('deskripsi');
        $pemesanan->province = $request->input('province');
        $pemesanan->city = $request->input('city');
        $pemesanan->kecamatan = $request->input('kecamatan');
        $pemesanan->kelurahan = $request->input('kelurahan');
        $pemesanan->name = $request->input('name');
        $pemesanan->total_harga = $request->input('total_harga');
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('bukti', $filename, 'public');
            $pemesanan->bukti = $filename;
        }
        // Set field lainnya
        $pemesanan->save();
    
        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil dibuat');

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
            'user_id' => $userId, // Menggunakan user_id dari sesi
        ]);
    
        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil dibuat');
    }
    
    

    public function show($id)
    {
        // Menampilkan detail pemesanan
        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            return redirect()->route('pemesanan.index')->with('error', 'Pemesanan tidak ditemukan!');
        }
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


public function updateStatus(Request $request, $id)
    
{
    // Validasi status
    $request->validate([
        'status' => 'required|string'
    ]);

    // Temukan pemesanan berdasarkan ID
    $pemesanan = Pemesanan::find($id);
    if ($pemesanan) {
        // Update status pemesanan
        $pemesanan->status = $request->input('status'); // 'diterima' atau 'dibatalkan'
        $pemesanan->save();

        return redirect()->back()->with('status', 'Status berhasil diperbarui!');
    }

    return redirect()->back()->with('error', 'Pemesanan tidak ditemukan!');
}
    
}