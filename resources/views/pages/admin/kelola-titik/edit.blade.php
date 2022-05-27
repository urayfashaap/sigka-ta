@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Titik Pemantauan {{ $item->nama }}</h1>
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
                <form action="{{ route('kelola-titik.update', $item->id) }}" class="" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Titik</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama titik pemantauan"
                            value="{{ $item->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude"
                            placeholder="Masukkan nilai latitude dengan format(x,xxxxxx)" value="{{ $item->latitude }}">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" name="longitude"
                            placeholder="Masukkan nilai longitude dengan format(xxx,xxxxxx)"
                            value="{{ $item->longitude }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_sungai">Nama Sungai</label>
                        <input type="text" class="form-control" name="nama_sungai" placeholder="Masukkan nama sungai"
                            value="{{ $item->nama_sungai }}">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan nama kecamatan"
                            value="{{ $item->kecamatan }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah Titik</button>
                    <button class="btn btn-danger btn-block" type="button" name="cancel" value="cancel"
                        onclick="history.go(-1)">Batal</button>
                </form>

            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
