@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Admin</h1>
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
                <form action="{{ route('kelola-user.store') }}" class="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Admin</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan nama admin"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP admin (16 Digit)"
                            value="{{ old('nip') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan email admin"
                            value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Masukkan password admin"
                            value="{{ old('password') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Tambah Admin</button>
                </form>

            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
