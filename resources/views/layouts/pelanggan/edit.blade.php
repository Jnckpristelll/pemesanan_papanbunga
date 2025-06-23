@extends('layouts.template')

@section('title', 'Edit Pelanggan')

@section('headline')
    Edit Pelanggan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data</div>

                <div class="card-body">
                    <form method="post" action="layouts/pelanggan/{{$pelanggan->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIDN</label>
                            <input type="text" value="{{$pelanggan->nama}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                            <input type="text" name="no_handphone" value="{{$pelanggan->no_handphone}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="alamat" value="{{$pelanggan->alamat}}" name="alamat" class="form-control" id="exampleInputPassword1">
                        </div>


                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
