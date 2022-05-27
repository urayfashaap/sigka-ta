@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Hasil Pemantauan {{ $item->TitikPemantauan->nama }}
                {{ $item->tanggal_pemantauan }} </h1>
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
                <form action="{{ route('kelola-hasil.update', $item->id) }}" class="" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="titik_pemantauan">Titik Pemantauan</label>
                        <select class="form-control" id="titik-option" name="titik_pemantauan">
                            @foreach ($titik_pemantauan as $titik)
                                <option value="{{ $titik->id }}">{{ $item->TitikPemantauan->nama }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="titik_pemantauan"
                            placeholder="Masukkan nama titik pemantauan" value="{{ $item->titik_pemantauan }}"> --}}
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pemantauan">tanggal</label>
                        <input type="date" class="form-control" name="tanggal_pemantauan"
                            placeholder="Masukkan tanggal pemantauan" value="{{ $item->tanggal_pemantauan }}">
                    </div>
                    <div class="form-group">
                        <label for="waktu_pemantauan">Waktu Pemantauan</label>
                        <input type="time" class="form-control" name="waktu_pemantauan"
                            placeholder="Masukkan waktu pemantauan" value="{{ $item->waktu_pemantauan }}">
                    </div>
                    <div class="form-group">
                        <label for="laboratorium">Laboratorium Penguji</label>
                        <input type="text" class="form-control" name="laboratorium"
                            placeholder="Masukkan nama laboratorium penguji" value="{{ $item->laboratorium }}">
                    </div>
                    <div class="form-group">
                        <label for="cuaca">Cuaca</label>
                        <input type="text" class="form-control" name="cuaca" placeholder="Masukkan cuaca saat pemantauan"
                            value="{{ $item->cuaca }}">
                    </div>
                    <div class="form-group">
                        <label for="temperatur">Temperatur</label>
                        <input type="text" class="form-control" name="temperatur" placeholder="Masukkan nilai temperatur"
                            value="{{ $item->temperatur }}">
                    </div>
                    <div class="form-group">
                        <label for="tds">TDS</label>
                        <input type="text" class="form-control" name="tds" placeholder="Masukkan nilai TDS"
                            value="{{ $item->tds }}">
                    </div>
                    <div class="form-group">
                        <label for="tss">TSS</label>
                        <input type="text" class="form-control" name="tss" placeholder="Masukkan nilai TSS"
                            value="{{ $item->tss }}">
                    </div>
                    <div class="form-group">
                        <label for="ph">pH</label>
                        <input type="text" class="form-control" name="ph" placeholder="Masukkan nilai pH"
                            value="{{ $item->ph }}">
                    </div>
                    <div class="form-group">
                        <label for="bod">BOD</label>
                        <input type="text" class="form-control" name="bod" placeholder="Masukkan nilai BOD"
                            value="{{ $item->bod }}">
                    </div>
                    <div class="form-group">
                        <label for="cod">COD</label>
                        <input type="text" class="form-control" name="cod" placeholder="Masukkan nilai COD"
                            value="{{ $item->cod }}">
                    </div>
                    <div class="form-group">
                        <label for="do">DO</label>
                        <input type="text" class="form-control" name="do" placeholder="Masukkan nilai DO"
                            value="{{ $item->do }}">
                    </div>
                    <div class="form-group">
                        <label for="sulfat">Sulfat</label>
                        <input type="text" class="form-control" name="sulfat" placeholder="Masukkan nilai Sulfat"
                            value="{{ $item->sulfat }}">
                    </div>
                    <div class="form-group">
                        <label for="clorida">Klorida</label>
                        <input type="text" class="form-control" name="clorida" placeholder="Masukkan nilai Klorida"
                            value="{{ $item->clorida }}">
                    </div>
                    <div class="form-group">
                        <label for="nitrat">Nitrat</label>
                        <input type="text" class="form-control" name="nitrat" placeholder="Masukkan nilai Nitrat"
                            value="{{ $item->nitrat }}">
                    </div>
                    <div class="form-group">
                        <label for="nitrit">Nitrit</label>
                        <input type="text" class="form-control" name="nitrit" placeholder="Masukkan nilai Nitrit"
                            value="{{ $item->nitrit }}">
                    </div>
                    <div class="form-group">
                        <label for="amoniak">Amoniak</label>
                        <input type="text" class="form-control" name="amoniak" placeholder="Masukkan nilai Amoniak"
                            value="{{ $item->amoniak }}">
                    </div>
                    <div class="form-group">
                        <label for="fosfat">Fosfat</label>
                        <input type="text" class="form-control" name="fosfat" placeholder="Masukkan nilai Fosfata"
                            value="{{ $item->fosfat }}">
                    </div>
                    <div class="form-group">
                        <label for="sianida">Sianida</label>
                        <input type="text" class="form-control" name="sianida" placeholder="Masukkan nilai Sianida"
                            value="{{ $item->sianida }}">
                    </div>
                    <div class="form-group">
                        <label for="merkuri">Merkuri</label>
                        <input type="text" class="form-control" name="merkuri" placeholder="Masukkan nilai Merkuri"
                            value="{{ $item->merkuri }}">
                    </div>
                    <div class="form-group">
                        <label for="besi">Besi</label>
                        <input type="text" class="form-control" name="besi" placeholder="Masukkan nilai Besi"
                            value="{{ $item->besi }}">
                    </div>
                    <div class="form-group">
                        <label for="mangan">Mangan</label>
                        <input type="text" class="form-control" name="mangan" placeholder="Masukkan nilai Mangan"
                            value="{{ $item->mangan }}">
                    </div>
                    <div class="form-group">
                        <label for="seng">Seng</label>
                        <input type="text" class="form-control" name="seng" placeholder="Masukkan nilai Seng"
                            value="{{ $item->seng }}">
                    </div>
                    <div class="form-group">
                        <label for="kromium">Kromium Heksavalen</label>
                        <input type="text" class="form-control" name="kromium"
                            placeholder="Masukkan nilai Kromium Heksavalen" value="{{ $item->kromium }}">
                    </div>
                    <div class="form-group">
                        <label for="detergen">Detergen</label>
                        <input type="text" class="form-control" name="detergen" placeholder="Masukkan nilai Detergen"
                            value="{{ $item->detergen }}">
                    </div>
                    <div class="form-group">
                        <label for="fenol">Fenol</label>
                        <input type="text" class="form-control" name="fenol" placeholder="Masukkan nilai Fenol"
                            value="{{ $item->fenol }}">
                    </div>
                    <div class="form-group">
                        <label for="fecal_coliform">Fecal Coliform</label>
                        <input type="text" class="form-control" name="fecal_coliform" placeholder="Masukkan nilai Seng"
                            value="{{ $item->fecal_coliform }}">
                    </div>
                    <div class="form-group">
                        <label for="total_coliform">Total Coliform</label>
                        <input type="text" class="form-control" name="total_coliform"
                            placeholder="Masukkan nilai Total Coliform" value="{{ $item->total_coliform }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah Data Hasil Pemantauan</button>
                    <button class="btn btn-danger btn-block" type="button" name="cancel" value="cancel"
                        onclick="history.go(-1)">Batal</button>
                </form>

            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
