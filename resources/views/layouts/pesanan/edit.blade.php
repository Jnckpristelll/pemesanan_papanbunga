@extends('layouts.template')

@section('title', 'Edit Pesanan')

@section('headline')
    Edit Data Pesanan
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Edit Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/pesanan/' . $pesanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- ID Pelanggan --}}
                            <div class="mb-3">
                                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                                <input type="number" name="id_pelanggan" id="id_pelanggan" class="form-control"
                                    value="{{ $pesanan->id_pelanggan }}" required>
                            </div>

                            {{-- Tanggal Pesan --}}
                            <div class="mb-3">
                                <label for="tgl_pesan" class="form-label">Tanggal Pesan</label>
                                <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan"
                                    value="{{ $pesanan->tgl_pesan }}" required>
                            </div>

                            {{-- Tanggal Pengiriman --}}
                            <div class="mb-3">
                                <label for="tgl_pengiriman" class="form-label">Tanggal Pengiriman</label>
                                <input type="date" class="form-control" id="tgl_pengiriman" name="tgl_pengiriman"
                                    value="{{ $pesanan->tgl_pengiriman }}" required>
                            </div>

                            {{-- Alamat Pengiriman --}}
                            <div class="mb-3">
                                <label for="alamat_pengiriman" class="form-label">Alamat Pengiriman</label>
                                <textarea class="form-control" id="alamat_pengiriman" name="alamat_pengiriman" rows="3" required>{{ $pesanan->alamat_pengiriman }}</textarea>
                            </div>

                            {{-- Status (Enum) --}}
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    @foreach (['pending', 'pengiriman gagal', 'berhasil'] as $status)
                                        <option value="{{ $status }}"
                                            {{ $pesanan->status === $status ? 'selected' : '' }}>
                                            {{ ucfirst($status) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tombol --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/pesanan') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
