@extends('layouts.template')

@section('title', 'Tambah Produk')

@section('headline')
    Form Tambah Produk
@endsection

@section('content')

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Form Tambah Produk</h3>
                        <a href="{{ url('/produk') }}" class="btn btn-secondary btn-sm">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/produk/') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- <!-- NAMA (ENUM) -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <select name="nama" class="form-select" id="nama" required>
                                <option value="">-- Pilih Nama Produk --</option>
                                <option value="Sunat Rasul">Sunat Rasul</option>
                                <option value="Pernikahan">Pernikahan</option>
                                <option value="Duka Cita">Duka Cita</option>
                                <option value="Ucapan Selamat">Ucapan Selamat</option>
                            </select>
                        </div> --}}
                            {{-- Nama Produk (enum) --}}
                            <div class="mb-4">
                                <label for="nama" class="form-label fw-semibold">Nama Produk</label>
                                <select name="nama" id="nama"
                                    class="form-select rounded-pill shadow-sm px-3 py-2 border border-primary" required>
                                    <option value="" disabled selected>-- Pilih Nama Produk --</option>
                                    @foreach (['Sunat Rasul', 'Pernikahan', 'Duka Cita', 'Ucapan Selamat'] as $nama)
                                        <option value="{{ $nama }}" {{ old('nama') == $nama ? 'selected' : '' }}>
                                            {{ ucfirst($nama) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- DESKRIPSI -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Masukkan Tulisan Ucapan"
                                    required></textarea>
                            </div>

                            <!-- HARGA -->
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga"
                                    placeholder="Masukkan harga" required>
                            </div>

                            {{-- Ukuran (enum) --}}
                            <div class="mb-4">
                                <label for="ukuran" class="form-label fw-semibold">Ukuran</label>
                                <select name="ukuran" id="ukuran"
                                    class="form-select rounded-pill shadow-sm px-3 py-2 border border-primary" required>
                                    <option value="" disabled selected>-- Pilih Ukuran --</option>
                                    @foreach (['kecil', 'sedang', 'besar'] as $ukuran)
                                        <option value="{{ $ukuran }}"
                                            {{ old('ukuran') == $ukuran ? 'selected' : '' }}>
                                            {{ ucfirst($ukuran) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- TOMBOL SIMPAN -->
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus me-1"></i> Tambah Produk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
