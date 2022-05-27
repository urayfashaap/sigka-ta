@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kelola Data Hasil Pemantauan</h1>
            <a href="{{ route('kelola-hasil.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fas-plus fa-sm text-white-50"></i> Tambah Hasil Pemantauan
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>ID</th>
                                <th>Nama Titik</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Laboratorium</th>
                                <th>Cuaca</th>
                                <th>Temperatur</th>
                                <th>TDS</th>
                                <th>TSS</th>
                                <th>pH</th>
                                <th>BOD</th>
                                <th>COD</th>
                                <th>DO</th>
                                <th>Sulfat</th>
                                <th>Clorida</th>
                                <th>Nitrat</th>
                                <th>Nitrit</th>
                                <th>Amoniak</th>
                                <th>Fosfat</th>
                                <th>Sianida</th>
                                <th>Merkuri</th>
                                <th>Besi</th>
                                <th>Mangan</th>
                                <th>Seng</th>
                                <th>Kromium</th>
                                <th>Detergen</th>
                                <th>Fenol</th>
                                <th>Fecal Coliform</th>
                                <th>Total Coliform</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>
                                        <a href="{{ route('kelola-hasil.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Perhatian !</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus <br>
                                                        Data Pemantauan Titik <b>{{ $item->TitikPemantauan->nama }}</b>
                                                        <br>
                                                        pada tanggal <b>{{ $item->tanggal_pemantauan }} ?</b>
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
                                        @csrf
                                        @method('delete')
                                        </form>
                                    </td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->TitikPemantauan->nama }}</td>
                                    <td>{{ $item->tanggal_pemantauan }}</td>
                                    <td>{{ $item->waktu_pemantauan }}</td>
                                    <td>{{ $item->laboratorium }}</td>
                                    <td>{{ $item->cuaca }}</td>
                                    <td>{{ $item->temperatur }}</td>
                                    <td>{{ $item->tds }}</td>
                                    <td>{{ $item->tss }}</td>
                                    <td>{{ $item->ph }}</td>
                                    <td>{{ $item->bod }}</td>
                                    <td>{{ $item->cod }}</td>
                                    <td>{{ $item->do }}</td>
                                    <td>{{ $item->sulfat }}</td>
                                    <td>{{ $item->clorida }}</td>
                                    <td>{{ $item->nitrat }}</td>
                                    <td>{{ $item->nitrit }}</td>
                                    <td>{{ $item->amoniak }}</td>
                                    <td>{{ $item->fosfat }}</td>
                                    <td>{{ $item->sianida }}</td>
                                    <td>{{ $item->merkuri }}</td>
                                    <td>{{ $item->besi }}</td>
                                    <td>{{ $item->mangan }}</td>
                                    <td>{{ $item->seng }}</td>
                                    <td>{{ $item->kromium }}</td>
                                    <td>{{ $item->detergen }}</td>
                                    <td>{{ $item->fenol }}</td>
                                    <td>{{ $item->fecal_coliform }}</td>
                                    <td>{{ $item->total_coliform }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="29" class="text-center">
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
