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
                    <table class="table table-bordered striped hover" id="dataTable" width="100%">
                        <thead>
                            <tr>
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
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
                                    @if ($item->cod == 0.02)
                                        <td>
                                            <0.02 </td>
                                            @else
                                        <td>{{ $item->cod }}</td>
                                    @endif
                                    <td>{{ $item->do }}</td>
                                    @if ($item->sulfat == 2)
                                        <td>
                                            <2 </td>
                                            @else
                                        <td>{{ $item->sulfat }}</td>
                                    @endif
                                    <td>{{ $item->clorida }}</td>

                                    @if ($item->nitrat == 0.3)
                                        <td>
                                            <0.3 </td>
                                            @else
                                        <td>{{ $item->nitrat }}</td>
                                    @endif

                                    @if ($item->nitrit == 0.01)
                                        <td>
                                            <0.01 </td>
                                            @else
                                        <td>{{ $item->nitrit }}</td>
                                    @endif
                                    @if ($item->amoniak == 0.001)
                                        <td>
                                            <0.001 </td>
                                            @else
                                        <td>{{ $item->amoniak }}</td>
                                    @endif
                                    <td>{{ $item->fosfat }}</td>
                                    @if ($item->sianida == 0.002)
                                        <td>
                                            <0.002 </td>
                                            @else
                                        <td>{{ $item->sianida }}</td>
                                    @endif
                                    @if ($item->merkuri == 0.0002)
                                        <td>
                                            <0.0002 </td>
                                            @else
                                        <td>{{ $item->merkuri }}</td>
                                    @endif
                                    <td>{{ $item->besi }}</td>
                                    @if ($item->mangan == 0.1)
                                        <td>
                                            <0.1 </td>
                                            @else
                                        <td>{{ $item->mangan }}</td>
                                    @endif
                                    @if ($item->seng == 0.05)
                                        <td>
                                            <0.05 </td>
                                            @else
                                        <td>{{ $item->seng }}</td>
                                    @endif
                                    @if ($item->kromium == 0.01)
                                        <td>
                                            <0.01 </td>
                                            @else
                                        <td>{{ $item->kromium }}</td>
                                    @endif
                                    <td>{{ $item->detergen }}</td>

                                    @if ($item->fenol == 0.0001)
                                        <td>
                                            <0.0001 </td>
                                            @else
                                        <td>{{ $item->fenol }}</td>
                                    @endif
                                    @if ($item->fecal_coliform == 2)
                                        <td>
                                            <2 </td>
                                            @else
                                        <td>{{ $item->fecal_coliform }}</td>
                                    @endif
                                    <td>{{ $item->total_coliform }}</td>
                                    <td style="z-index=1; background-color:white;">
                                        <a href="{{ route('kelola-hasil.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a data-toggle="modal" class="btn btn-warning"
                                            data-target="#exampleModal_{{ $item->id }}"
                                            data-action="{{ route('kelola-hasil.destroy', $item->id) }}"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_{{ $item->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{ route('kelola-hasil.destroy', $item->id) }}"
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
