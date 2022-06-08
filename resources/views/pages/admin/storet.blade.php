@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class=" d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kalkulator STORET</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div id="note-storet">
            </div>
            <div class="container">
                <h5 class="h5 mb-0 text-gray-500 justify-content-between ml-4" style="font-size: 0.8rem">(* merupakan kotak
                    input)</h5>
                <form>
                    <div class="form-row" id="label-calc">
                        <label class=" col-2">Parameter</label>
                        <label class="col">Batas Bawah</label>
                        <label class="col">Batas Atas</label>
                        <label class="col">Maksimum*</label>
                        <label class="col">Score</label>
                        <label class="col">Minimum*</label>
                        <label class="col">Score</label>
                        <label class="col">Rata-rata*</label>
                        <label class="col">Score</label>
                        <label class="col">Jumlah Score</label>
                    </div>
                    @foreach ($baku_mutu as $bm)
                        <div class="form-row">
                            <div class="col-2">
                                <input id="{{ $bm->parameter . '-param' }}" type="text" class="form-control"
                                    placeholder="{{ $bm->parameter }}" readonly>
                            </div>
                            <div class="col">
                                <input id="{{ $bm->parameter . '-bm_min' }}" type="number" class="form-control"
                                    value="{{ $bm->minimum }}" readonly>
                            </div>
                            <div class="col">
                                <input id="{{ $bm->parameter . '-bm_max' }}" type="number" class="form-control"
                                    value="{{ $bm->maksimum }}" readonly>
                            </div>

                            <div class="col">
                                <input id="{{ $bm->parameter . '-max' }}" type="number" class="form-control"
                                    placeholder="max" onfocusout="onFocusOut(this)" oninput="onInputChange(this)">
                            </div>

                            <div class="col">
                                <input id="{{ $bm->parameter . '-score_max' }}" type="number" class="form-control"
                                    value=0 readonly>
                            </div>

                            <div class="col">
                                <input id="{{ $bm->parameter . '-min' }}" type="number" class="form-control"
                                    placeholder="min" onfocusout="onFocusOut(this)" oninput="onInputChange(this)">
                            </div>

                            <div class="col">
                                <input id="{{ $bm->parameter . '-score_min' }}" type="number" class="form-control"
                                    value=0 readonly>
                            </div>


                            <div class="col">
                                <input id="{{ $bm->parameter . '-avg' }}" type="number" class="form-control"
                                    placeholder="avg" onfocusout="onFocusOut(this)" oninput="onInputChange(this)">
                            </div>

                            <div class="col">
                                <input id="{{ $bm->parameter . '-score_avg' }}" type="number" class="form-control"
                                    value=0 readonly>
                            </div>

                            <div class="col">
                                <input id="{{ $bm->parameter . '-jumlah' }}" type="number" class="form-control" value=0
                                    readonly>
                            </div>
                        </div>
                </form>
                @endforeach

                <form>
                    <div class="form-row">
                        <div class="col">
                            <input id="status" type="text" class="form-control" placeholder="status mutu" readonly>
                        </div>
                        <div class="col">
                            <input id="total" type="number" class="form-control" placeholder="total" readonly>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <script>
        function calculateScore(parameter, nilai) {
            const nilaiBase = {
                "max": {
                    "fisika": -2,
                    "kimia": -4,
                    "biologi": -6
                },
                "min": {
                    "fisika": -2,
                    "kimia": -4,
                    "biologi": -6
                },
                "avg": {
                    "fisika": -6,
                    "kimia": -12,
                    "biologi": -18
                },
            };

            // Membagi setiap parameter menjadi Fisika,
            switch (parameter) {
                case 'temperatur':
                    return nilaiBase[nilai]["fisika"];

                case 'tds':
                    return nilaiBase[nilai]["fisika"];

                case 'tss':
                    return nilaiBase[nilai]["fisika"];

                case 'ph':
                    return nilaiBase[nilai]["kimia"];

                case 'bod':
                    return nilaiBase[nilai]["kimia"];

                case 'cod':
                    return nilaiBase[nilai]["kimia"];

                case 'do':
                    return nilaiBase[nilai]["kimia"];

                case 'sulfat':
                    return nilaiBase[nilai]["kimia"];

                case 'clorida':
                    return nilaiBase[nilai]["kimia"];

                case 'nitrat':
                    return nilaiBase[nilai]["kimia"];

                case 'nitrit':
                    return nilaiBase[nilai]["kimia"];

                case 'amoniak':
                    return nilaiBase[nilai]["kimia"];

                case 'sianida':
                    return nilaiBase[nilai]["kimia"];

                case 'merkuri':
                    return nilaiBase[nilai]["kimia"];

                case 'seng':
                    return nilaiBase[nilai]["kimia"];

                case 'kromium':
                    return nilaiBase[nilai]["kimia"];

                case 'detergen':
                    return nilaiBase[nilai]["kimia"];

                case 'fenol':
                    return nilaiBase[nilai]["kimia"];

                case 'fecal_coliform':
                    return nilaiBase[nilai]["biologi"];

                case 'total_coliform':
                    return nilaiBase[nilai]["biologi"];

                default:
                    return 0;
            }
        }

        function onInputChange(object) {
            let elemID = object.id
            let idSplit = elemID.split("-")

            let param = idSplit[0]

            let input_code = idSplit[1]

            let inputVal = parseInt(object.value)
            let baku_min = parseInt(document.getElementById(`${param}-bm_min`).value);
            let baku_max = parseInt(document.getElementById(`${param}-bm_max`).value);

            console.log(inputVal)

            // change score input
            let score = calculateScore(param, input_code)

            if (inputVal >= baku_min && inputVal <= baku_max || isNaN(inputVal)) {
                score = 0;
            }

            const objScoreMax = document.getElementById(`${param}-score_${input_code}`);
            objScoreMax.value = score

            // change score total                    
            const scoreMin = parseInt(document.getElementById(`${param}-score_min`).value)
            const scoreAvg = parseInt(document.getElementById(`${param}-score_avg`).value)
            const scoreMax = parseInt(document.getElementById(`${param}-score_max`).value)

            const totalObj = document.getElementById(`${param}-jumlah`)
            total = scoreAvg + scoreMin + scoreMax

            totalObj.value = total

            // calculate total params

            const bms = {!! json_encode($baku_mutu->toArray(), JSON_HEX_TAG) !!};

            finalTotal = 0;

            bms.forEach(bm => {
                finalTotal += parseInt(document.getElementById(`${bm.parameter}-jumlah`).value)
            });

            document.getElementById(`total`).value = finalTotal

            mutu_air = "Tidak Tercemar";

            console.log(typeof finalTotal)

            if (finalTotal == 0) {
                mutu_air = "Tidak Tercemar";
            } else if (finalTotal >= -10 && finalTotal <= -1) {
                mutu_air = "Tercemar Ringan";
            } else if (finalTotal >= -30 && finalTotal <= -11) {
                mutu_air = "Tercemar Sedang";
            } else if (finalTotal < -30) {
                mutu_air = "Tercemar Berat";
            }

            document.getElementById(`status`).value = mutu_air

        }

        function onFocusOut(object) {
            // let inputVal = parseInt(object.value)
            // if (inputVal > 0) {
            //     return
            // }
            // let elemID = object.id
            // let idSplit = elemID.split("-")

            // let param = idSplit[0]

            // object.value = 0
            // document.getElementById(`${param}-jumlah`).value = 0
        }
    </script>
@endsection
<!-- /.container-fluid -->
