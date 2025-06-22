@extends('layouts.template')

@section('title', 'pelanggan')

@section('headline')
    Pelanggan
@endsection

@section('content')


@section('form')

<div class="page-header card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Daftar Pelanggan</h2>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary btn-sm">
            + Tambah Pelanggan
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pelanggans as $index => $pelanggans)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pelanggans->nama }}</td>
                            <td>{{ $pelanggans->no_handphone }}</td>
                            <td>{{ $pelanggans->alamat }}</td>
                            <td>
                                <a href="{{ route('pelanggan.edit', $pelanggans->id) }}" class="btn btn-sm btn-warning">
                                    <i class="ti-pencil-alt"></i>
                                </a>
                                <form action="{{ route('pelanggan.destroy', $pelanggans->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger">
                                        <i class="ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data pelanggan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection


