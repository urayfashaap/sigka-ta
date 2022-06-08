@extends('layouts.petadata')

@section('content-data')
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Titik Pemantauan</h1>
            </div>

            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered nowrap compact" id="dataTable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Titik</th>
                                    <th>Nama Titik</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Nama Sungai</th>
                                    <th>Kecamatan</th>
                                    <th>Status Mutu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($points as $point)
                                    <tr>
                                        <td>{{ $point->id }}</td>
                                        <td>{{ $point->nama }}</td>
                                        <td>{{ $point->latitude }}</td>
                                        <td>{{ $point->longitude }}</td>
                                        <td>{{ $point->nama_sungai }}</td>
                                        <td>{{ $point->kecamatan }}</td>

                                        @if (isset($point->StatusMutu->id))
                                            <td>{{ $point->StatusMutu->nama_status }}</td>
                                        @else
                                            <td style="color: red;">Data belum tersedia</td>
                                        @endif
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



            <hr class="solid" style="border-top: 3px solid #bbb;">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Hasil Pemantauan</h1>
            </div>

            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered nowrap compact" id="dataTable" width="80%" cellspacing="0">
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
                                    <th>Kromium Heksavalen</th>
                                    <th>Detergen</th>
                                    <th>Fenol</th>
                                    <th>Fecal Coliform</th>
                                    <th>Total Coliform</th>
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
    </header>
