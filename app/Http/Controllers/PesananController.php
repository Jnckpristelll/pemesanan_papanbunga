<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pelanggan;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pesanan = Pesanan::all();
        return view('layouts.pesanan.index', compact('pesanan', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        // return view('layouts.pesanan.create');
         $pelanggan = Pelanggan::all(); // Untuk dropdown pelanggan
        return view('layouts.pesanan.create', compact('pelanggan'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $request->validate([
            'pelanggans_id' => 'required',
            'tgl_pesan' => 'required|date',
            'tgl_pengiriman' => 'required|date|after_or_equal:tgl_pesan',
            'alamat_pengiriman' => 'required|string|max:255',
            'status' => 'required|in:pending,gagal,berhasil',
        ]);

        $pesanan = new Pesanan;
        $pesanan->pelanggans_id = $request->pelanggans_id;
        $pesanan->tgl_pesan = $request->tgl_pesan;
        $pesanan->tgl_pengiriman = $request->tgl_pengiriman;
        $pesanan->alamat_pengiriman = $request->alamat_pengiriman;
        $pesanan->status = $request->status;
        $pesanan->save();


        return redirect('/pesanan')->with('success', 'Pesanan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //form edit
        $pelanggan = Pelanggan::all();
        $pesanan = Pesanan::find($id);
        return view('layouts.pesanan.edit',compact('pesanan','pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Proses update data
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->pelanggans_id = $request->pelanggans_id;
        $pesanan->tgl_pesan = $request->tgl_pesan;
        $pesanan->tgl_pengiriman = $request->tgl_pengiriman;
        $pesanan->alamat_pengiriman = $request->alamat_pengiriman;
        $pesanan->status = $request->status;
        $pesanan->save();

        return redirect('/pesanan')->with('success', 'Data pesanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect('/pesanan')->with('success', 'Data pesanan berhasil dihapus.');
    }
}
