@extends('layouts.template')

@section('title', 'Tambah Pelanggan')

@section('headline')
    Form Tambah Pelanggan
@endsection

@section('content')
@endsection

@section('tambah')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Form Input Pelanggan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" name="no_handphone" class="form-control" placeholder="08xxxxx" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
