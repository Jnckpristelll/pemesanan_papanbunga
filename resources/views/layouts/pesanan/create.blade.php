@extends('layouts.template')

@section('title', 'Tambah Pesanan')

@section('headline')
    Form Tambah Pesanan
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Form Tambah Pesanan</h3>
                        <a href="{{ url('/pesanan') }}" class="btn btn-secondary btn-sm">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{ url('/pesanan/') }}">
                                @csrf

                                {{-- <div class="mb-3">
                                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                                <input type="number" name="pelanggans_id" class="form-control" id="pelanggans_id"
                                    placeholder="Masukkan ID Pelanggan" required>
                            </div> --}}

                                <div class="mb-3">
                                    <label for="pelanggans_id" class="form-label">Pilih Pelanggan</label>
                                    <select name="pelanggans_id" id="pelanggans_id" class="form-select" required>
                                        <option value="">-- Pilih Pelanggan --</option>
                                        @foreach ($pelanggan as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="tgl_pesan" class="form-label">Tanggal Pesan</label>
                                    <input type="date" name="tgl_pesan" class="form-control" id="tgl_pesan" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tgl_pengiriman" class="form-label">Tanggal Pengiriman</label>
                                    <input type="date" name="tgl_pengiriman" class="form-control" id="tgl_pengiriman"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat_pengiriman" class="form-label">Alamat Pengiriman</label>
                                    <textarea name="alamat_pengiriman" class="form-control" id="alamat_pengiriman" rows="3"
                                        placeholder="Masukkan alamat pengiriman" required></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="pending">Pending</option>
                                        <option value="pengiriman gagal">Pengiriman Gagal</option>
                                        <option value="berhasil">Berhasil</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Tambah
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
