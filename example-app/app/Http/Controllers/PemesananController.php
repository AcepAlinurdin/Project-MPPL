<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Province;


class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Placeholder for index method if needed
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('pemesanan', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'phone' => 'required|string',
                'jalan' => 'required|string',
                'no_rumah' => 'required|string',
                'jenis_produk' => 'required|string',
                'jenis_kain' => 'required|string',
                'ukuran' => 'required|string',
                'upload_foto' => 'required|file|mimes:jpg,png',
                'deskripsi' => 'required|string',
                'province' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'kecamatan' => 'required|string|max:255',
                'kelurahan' => 'required|string|max:255',
            ]);

            $filePath = $request->file('upload_foto')->store('uploads', 'public');

            $pemesanan = new Pemesanan();
            $pemesanan->no_hp = $validatedData['phone'];
            $pemesanan->jalan = $validatedData['jalan'];
            $pemesanan->no_rumah = $validatedData['no_rumah'];
            $pemesanan->jenis_produk = $validatedData['jenis_produk'];
            $pemesanan->jenis_kain = $validatedData['jenis_kain'];
            $pemesanan->ukuran = $validatedData['ukuran'];
            $pemesanan->upload_foto = $filePath;
            $pemesanan->deskripsi = $validatedData['deskripsi'];
            $pemesanan->province = $validatedData['province'];
            $pemesanan->city = $validatedData['city'];
            $pemesanan->kecamatan = $validatedData['kecamatan'];
            $pemesanan->kelurahan = $validatedData['kelurahan'];

$pemesanan->save();

            $pemesanan->save();

            return redirect()->route('pemesanan.create')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        };
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Placeholder for show method if needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Placeholder for edit method if needed
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Placeholder for update method if needed
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
