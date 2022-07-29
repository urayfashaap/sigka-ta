@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Hasil Pemantauan</h1>
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
                <form action="{{ route('kelola-hasil.store') }}" class="" method="POST">
                    @csrf
                    <div class="tabel-input" style="display:flex; flex-direction:column; justify-content:space-between">
                        <div class="baris" style="display: flex;  justify-content:space-between">
                            <div class="kolom col">
                                <div class="form-group">
                                    <label for="titik_pemantauan">Titik Pemantauan</label>
                                    <select class="form-control" id="titik-option" name="titik_pemantauan">
                                        @foreach ($titik_pemantauan as $titik)
                                            <option value="{{ $titik->id }}">{{ $titik->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="baris" style="display: flex;  justify-content:space-between">
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="tanggal_pemantauan">tanggal</label>
                                    <input type="date" class="form-control" name="tanggal_pemantauan"
                                        placeholder="Masukkan tanggal pemantauan" value="{{ old('tanggal_pemantauan') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="waktu_pemantauan">Waktu Pemantauan</label>
                                    <input type="time" class="form-control" name="waktu_pemantauan"
                                        placeholder="Masukkan waktu pemantauan" value="{{ old('waktu_pemantauan') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="laboratorium">Laboratorium Penguji</label>
                                    <input type="text" class="form-control" name="laboratorium"
                                        placeholder="Masukkan nama laboratorium penguji"
                                        value="{{ old('laboratorium') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="cuaca">Cuaca</label>
                                    <input type="text" class="form-control" name="cuaca"
                                        placeholder="Masukkan cuaca saat pemantauan" value="{{ old('cuaca') }}">
                                </div>
                            </div>
                        </div>
                        <div class="baris" style="display: flex;  justify-content:space-between">
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="temperatur">Temperatur</label>
                                    <input type="text" class="form-control" name="temperatur"
                                        placeholder="Masukkan nilai Temperatur" value="{{ old('temperatur') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="tds">TDS</label>
                                    <input type="text" class="form-control" name="tds"
                                        placeholder="Masukkan nilai TDS" value="{{ old('tds') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="tss">TSS</label>
                                    <input type="text" class="form-control" name="tss"
                                        placeholder="Masukkan nilai TSS" value="{{ old('tss') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="ph">pH</label>
                                    <input type="text" class="form-control" name="ph"
                                        placeholder="Masukkan nilai pH" value="{{ old('ph') }}">
                                </div>
                            </div>
                        </div>
                        <div class="baris" style="display: flex">
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="bod">BOD</label>
                                    <input type="text" class="form-control" name="bod"
                                        placeholder="Masukkan nilai BOD" value="{{ old('bod') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="cod">COD</label>
                                    <input type="text" class="form-control" name="cod"
                                        placeholder="Masukkan nilai COD" value="{{ old('cod') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="do">DO</label>
                                    <input type="text" class="form-control" name="do"
                                        placeholder="Masukkan nilai DO" value="{{ old('do') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="sulfat">Sulfat</label>
                                    <input type="text" class="form-control" name="sulfat"
                                        placeholder="Masukkan nilai Sulfat" value="{{ old('sulfat') }}">
                                </div>
                            </div>
                        </div>
                        <div class="baris" style="display: flex">
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="clorida">Klorida</label>
                                    <input type="text" class="form-control" name="clorida"
                                        placeholder="Masukkan nilai Klorida" value="{{ old('clorida') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="nitrat">Nitrat</label>
                                    <input type="text" class="form-control" name="nitrat"
                                        placeholder="Masukkan nilai Nitrat" value="{{ old('nitrat') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="nitrit">Nitrit</label>
                                    <input type="text" class="form-control" name="nitrit"
                                        placeholder="Masukkan nilai Nitrit" value="{{ old('nitrit') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="amoniak">Amoniak</label>
                                    <input type="text" class="form-control" name="amoniak"
                                        placeholder="Masukkan nilai Amoniak" value="{{ old('amoniak') }}">
                                </div>
                            </div>
                        </div>
                        <div class="baris" style="display: flex">


                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="fosfat">Fosfat</label>
                                    <input type="text" class="form-control" name="fosfat"
                                        placeholder="Masukkan nilai Fosfata" value="{{ old('fosfat') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="sianida">Sianida</label>
                                    <input type="text" class="form-control" name="sianida"
                                        placeholder="Masukkan nilai sianida" value="{{ old('sianida') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="merkuri">Merkuri</label>
                                    <input type="text" class="form-control" name="merkuri"
                                        placeholder="Masukkan nilai Merkuri" value="{{ old('merkuri') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="besi">Besi</label>
                                    <input type="text" class="form-control" name="besi"
                                        placeholder="Masukkan nilai Besi" value="{{ old('besi') }}">
                                </div>
                            </div>

                        </div>
                        <div class="baris" style="display: flex">
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="mangan">Mangan</label>
                                    <input type="text" class="form-control" name="mangan"
                                        placeholder="Masukkan nilai Mangan" value="{{ old('mangan') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="seng">Seng</label>
                                    <input type="text" class="form-control" name="seng"
                                        placeholder="Masukkan nilai Seng" value="{{ old('seng') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="kromium">Kromium Heksavalen</label>
                                    <input type="text" class="form-control" name="kromium"
                                        placeholder="Masukkan nilai Kromium Heksavalen" value="{{ old('kromium') }}">
                                </div>
                            </div>
                            <div class="kolom col-3">
                                <div class="form-group">
                                    <label for="detergen">Detergen</label>
                                    <input type="text" class="form-control" name="detergen"
                                        placeholder="Masukkan nilai Detergen" value="{{ old('detergen') }}">
                                </div>
                            </div>

                        </div>
                        <div class="baris" style="display: flex">
                            <div class="kolom col">
                                <div class="form-group">
                                    <label for="fenol">Fenol</label>
                                    <input type="text" class="form-control" name="fenol"
                                        placeholder="Masukkan nilai Fenol" value="{{ old('fenol') }}">
                                </div>
                            </div>
                            <div class="kolom col">
                                <div class="form-group">
                                    <label for="fecal_coliform">Fecal Coliform</label>
                                    <input type="text" class="form-control" name="fecal_coliform"
                                        placeholder="Masukkan nilai Seng" value="{{ old('fecal_coliform') }}">
                                </div>
                            </div>
                            <div class="kolom col">
                                <div class="form-group">
                                    <label for="total_coliform">Total Coliform</label>
                                    <input type="text" class="form-control" name="total_coliform"
                                        placeholder="Masukkan nilai Total Coliform"
                                        value="{{ old('total_coliform') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="baris" style="display: flex;  justify-content:space-between">
                        <div class="kolom col">
                            <button type="submit" class="btn btn-primary btn-block">Tambah Data Hasil Pemantauan</button>
                        </div>
                        <div class="kolom col">
                            <button class="btn btn-danger btn-block" type="button" name="cancel" value="cancel"
                                onclick="history.go(-1)">Batal</button>
                        </div>
                    </div>


                </form>

            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
