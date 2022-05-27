@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Admin {{ $item->nama }}</h1>
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
                <form action="{{ route('kelola-user.update', $item->id) }}" class="" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Admin</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan nama admin"
                            value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" name="latitude"
                            placeholder="Masukkan NIP admin (18 digit)" value="{{ $item->nip }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan email admin"
                            value="{{ $item->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="nama_sungai"
                            placeholder="Masukkan password admin (min: 6 digit)" value="{{ $item->password }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah Data Admin</button>
                </form>

            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
