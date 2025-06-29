@extends('layouts.template')

@section('title', 'Edit Produk')

@section('headline')
    Edit Data Produk
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Edit Produk</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/produk/' . $produk->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Nama (Enum) --}}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Produk</label>
                                <select name="nama" id="nama" class="form-select" required>
                                    <option value="" disabled>-- Pilih Nama Produk --</option>
                                    @foreach (['Sunat Rasul', 'Pernikahan', 'Duka Cita', 'Ucapan Selamat'] as $nama)
                                        <option value="{{ $nama }}"
                                            {{ $produk->nama == $nama ? 'selected' : '' }}>
                                            {{ ucfirst($nama) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Deskripsi --}}
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $produk->deskripsi }}</textarea>
                            </div>

                            {{-- Harga --}}
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga"
                                    value="{{ $produk->harga }}" min="0" required>
                            </div>

                            {{-- Ukuran (Enum) --}}
                            <div class="mb-3">
                                <label for="ukuran" class="form-label">Ukuran</label>
                                <select class="form-select" id="ukuran" name="ukuran" required>
                                    <option disabled selected>Pilih Ukuran</option>
                                    @foreach (['kecil', 'sedang', 'besar'] as $ukuran)
                                        <option value="{{ $ukuran }}"
                                            {{ $produk->ukuran === $ukuran ? 'selected' : '' }}>
                                            {{ ucfirst($ukuran) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/produk') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
