@extends('layouts.template')

@section('title', 'Edit Pelanggan')

@section('headline')
    Edit Pelanggan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Form Edit Pelanggan</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('pelanggan.update', $pelanggans->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $pelanggans->nama }}" required>
            </div>

            <div class="form-group">
                <label for="no_handphone">No Handphone:</label>
                <input type="text" name="no_handphone" class="form-control" value="{{ $pelanggans->no_handphone }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" class="form-control" rows="3" required>{{ $pelanggans->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
