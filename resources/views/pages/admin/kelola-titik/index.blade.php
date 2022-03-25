@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kelola Titik Pemantauan</h1>
            <a href="{{ route('kelola-titik.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fas-plus fa-sm text-white-50"></i> Tambah Titik
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Titik</th>
                                <th>Nama Titik</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Nama Sungai</th>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id_titik }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->latitude }}</td>
                                    <td>{{ $item->longitude }}</td>
                                    <td>{{ $item->nama_sungai }}</tt>
                                    <td>{{ $item->kecamatan }}</tt>
                                    <td>
                                        {{-- <a href="{{ route('kelola-titik.show', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-book-alt"></i>
                                        </a> --}}
                                        <a href="{{ route('kelola-titik.edit', $item->id_titik) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('kelola-titik.destroy', $item->id_titik) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
