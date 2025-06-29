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
                            <form method="POST" action="{{ url('/pesanan/') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        placeholder="Masukkan nama" required>
                                </div>

                                <div class="mb-3">
                                    <label for="no_handphone" class="form-label">No Handphone</label>
                                    <input type="text" name="no_handphone" class="form-control" id="no_handphone"
                                        placeholder="08xxxxx" required>
                                </div>

                                <div class="mb-4">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat lengkap"
                                        required></textarea>
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
    @endsection
