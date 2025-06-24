@extends('layouts.template')

@section('title', 'pelanggan')

@section('headline')
    Pelanggan
@endsection

@section('content')


@section('form')

  <div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-10"> <!-- Lebar lebih besar -->
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Daftar Pelanggan</h2>
                    <a href="{{ url('/pelanggan/create') }}" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-user-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Handphone</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pelanggan as $data)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->no_handphone }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>
                                            <a href="/pelanggan/edit/{{ $data->id }}" class="btn btn-info btn-sm" title="Edit">
                                                <i class="fa- fa-pen-to-square"></i>
                                            </a>

                                            <!-- Tombol modal hapus -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>

                                            <!-- Modal Konfirmasi Hapus -->
                                            <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin ingin menghapus data pelanggan atas nama <strong>{{ $data->nama }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ url('/pelanggan' . $data->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Data tidak tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div> <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
