@extends('layouts.petadata')

@section('content-peta')

    <header class="masthead">
        <div class="container px-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Hasil Pemantauan</h1>
            </div>
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="map" style="width: 100vw; height: 65vh; justify-content:center;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('includes.maps')
