@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Titik Pemantauan</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('kelola-titik.store') }}" class="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Titik</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama titik pemantauan"
                            value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude"
                            placeholder="Masukkan nilai latitude dengan format(x,xxxxxx)" value="{{ old('latitude') }}">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" name="longitude"
                            placeholder="Masukkan nilai longitude dengan format(xxx,xxxxxx)"
                            value="{{ old('longitude') }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_sungai">Nama Sungai</label>
                        <input type="text" class="form-control" name="nama_sungai" placeholder="Masukkan nama sungai"
                            value="{{ old('nama_sungai') }}">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan nama kecamatan"
                            value="{{ old('kecamatan') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Tambah Titik</button>
                    <button class="btn btn-danger btn-block" type="button" name="cancel" value="cancel"
                        onclick="history.go(-1)">Batal</button>


                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Launch Demo Modal</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Default Bootstrap Modal</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">...</div>
                                <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                        type="button">Save changes</button></div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
