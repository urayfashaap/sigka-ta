@extends('layouts.appdata')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Hasil Pemantauan</h1>

        </div>
        <div class="row">
            <div class="container">
                <div id="map" style="width: 100vw; height: 65vh; justify-content:center;">
                </div>
            </div>
        </div>


        @include('includes.maps')
    @endsection
