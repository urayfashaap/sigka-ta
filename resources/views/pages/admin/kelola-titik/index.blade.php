@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kelola Titik Pemantauan</h1>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <form class="" action="{{ route('update-storet') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-sm btn-success shadow-sm">
                    <span class="text">Update Status</span>
                </button>
            </form>
            <a href="{{ route('kelola-titik.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fas-plus fa-sm text-white-50"></i> Tambah Titik
            </a>
        </div>


        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered compact" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="z-index=1; background-color:white;">ID Titik</th>
                                <th style="z-index=1; background-color:white;">Nama Titik</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Nama Sungai</th>
                                <th>Kecamatan</th>
                                <th>Status Mutu</th>
                                <th style="z-index=1; background-color:white;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td style="z-index=1; background-color:white;">{{ $item->id }}</td>
                                    <td style="z-index=1; background-color:white;">{{ $item->nama }}</td>
                                    <td>{{ $item->latitude }}</td>
                                    <td>{{ $item->longitude }}</td>
                                    <td>{{ $item->nama_sungai }}</td>
                                    <td>{{ $item->kecamatan }}</td>

                                    @if (isset($item->StatusMutu->id))
                                        <td>{{ $item->StatusMutu->nama_status }}</td>
                                    @else
                                        <td style="color: red;">Data belum tersedia</td>
                                    @endif

                                    <td style="z-index=1; background-color:white;">
                                        <a href="{{ route('kelola-titik.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <!-- Button trigger modal Batal Hapus -->
                                        <a data-toggle="modal" class="btn btn-warning"
                                            data-target="#exampleModal_{{ $item->id }}"
                                            data-action="{{ route('kelola-titik.destroy', $item->id) }}"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal_{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Perhatian !
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus <br>
                                                    Titik Pemantauan <b>{{ $item->nama }}</b> ?
                                                    <br><br> pilih 'Ya' apabila ingin meneruskan
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                    <form action="{{ route('kelola-titik.destroy', $item->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <span class="text">Ya</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
