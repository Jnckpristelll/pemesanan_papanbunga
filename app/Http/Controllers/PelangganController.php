<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggans;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggans = Pelanggans::all(); // Ambil semua data dari model Pelanggan
    return view('layouts.pelanggan.index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nama' => 'required|string|max:255',
        'no_handphone' => 'required|string|max:20',
        'alamat' => 'required|string',
    ]);

    Pelanggans::create([
        'nama' => $request->nama,
        'no_handphone' => $request->no_handphone,
        'alamat' => $request->alamat,
    ]);

    return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil disimpan!');
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
        $pelanggans = Pelanggans::findOrFail($id);
    return view('layouts.pelanggan.edit', compact('pelanggans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nama' => 'required',
        'no_handphone' => 'required',
        'alamat' => 'required',
    ]);

    $pelanggans = Pelanggans::findOrFail($id);
    $pelanggans->update($request->all());

    return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggans = Pelanggans::findOrFail($id);
    $pelanggans->delete();

    return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
    }
}
