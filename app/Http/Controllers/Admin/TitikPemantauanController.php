<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TitikPemantauanRequest;
use App\Models\TitikPemantauanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Continue_;

use function PHPUnit\Framework\isNull;

class TitikPemantauanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->TitikPemantauanModel = new TitikPemantauanModel();
    }

    public function index()
    {
        $items = TitikPemantauanModel::all();

        return view('pages.admin.kelola-titik.index', [
            'items' => $items
        ]);
    }

    public function titik()
    {
        $results = $this->TitikPemantauanModel->allData();
        return json_encode($results);
    }

    public function info($id = '')
    {
        $results = $this->TitikPemantauanModel->getInfo($id);
        return json_encode($results);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kelola-titik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TitikPemantauanRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);

        TitikPemantauanModel::create($data);
        return redirect()->route('kelola-titik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_titik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TitikPemantauanModel::findOrFail($id);

        return view('pages.admin.kelola-titik.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);

        $item = TitikPemantauanModel::findOrFail($id);
        $item->update($data);
        return redirect()->route('kelola-titik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_titik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TitikPemantauanModel::findOrFail($id);
        $item->delete();

        return redirect()->route('kelola-titik.index');
    }

    // Klasifikasi nilai untuk menghitung Indeks Kualitas Air 
    function calculateScore($parameter, $nilai)
    {
        $nilaiBase = array(
            "max" => array(
                "fisika" => -2,
                "kimia" => -4,
                "biologi" => -6
            ),
            "min" => array(
                "fisika" => -2,
                "kimia" => -4,
                "biologi" => -6
            ),
            "avg" => array(
                "fisika" => -6,
                "kimia" => -12,
                "biologi" => -18
            ),
        );

        // Membagi setiap parameter menjadi Fisika,
        switch ($parameter) {
            case 'temperatur':
                return $nilaiBase[$nilai]["fisika"];

            case 'tds':
                return $nilaiBase[$nilai]["fisika"];

            case 'tss':
                return $nilaiBase[$nilai]["fisika"];

            case 'ph':
                return $nilaiBase[$nilai]["kimia"];

            case 'bod':
                return $nilaiBase[$nilai]["kimia"];

            case 'cod':
                return $nilaiBase[$nilai]["kimia"];

            case 'do':
                return $nilaiBase[$nilai]["kimia"];

            case 'sulfat':
                return $nilaiBase[$nilai]["kimia"];

            case 'clorida':
                return $nilaiBase[$nilai]["kimia"];

            case 'nitrat':
                return $nilaiBase[$nilai]["kimia"];

            case 'nitrit':
                return $nilaiBase[$nilai]["kimia"];

            case 'amoniak':
                return $nilaiBase[$nilai]["kimia"];

            case 'sianida':
                return $nilaiBase[$nilai]["kimia"];

            case 'merkuri':
                return $nilaiBase[$nilai]["kimia"];

            case 'seng':
                return $nilaiBase[$nilai]["kimia"];

            case 'kromium':
                return $nilaiBase[$nilai]["kimia"];

            case 'detergen':
                return $nilaiBase[$nilai]["kimia"];

            case 'fenol':
                return $nilaiBase[$nilai]["kimia"];

            case 'fecal_coliform':
                return $nilaiBase[$nilai]["biologi"];

            case 'total_coliform':
                return $nilaiBase[$nilai]["biologi"];

            default:
                return 0;
        }
    }

    public function storet()
    {
        // $id = 1;

        $bm_temp = DB::table('baku_mutu')->select('parameter', 'minimum', 'maksimum')->get();

        $bakuMap = array();

        foreach ($bm_temp as $bm) {
            $val = clone $bm;
            unset($val->parameter);
            $bakuMap[$bm->parameter] = $val;
        }

        $storet = DB::table('hasil_pemantauan')
            ->select(DB::raw(
                'titik_pemantauan,
                count(*) as jumlah,
                max(temperatur) as max_temperatur, min(temperatur) as min_temperatur, avg(temperatur) as avg_temperatur,
                max(tds) as max_tds, min(tds) as min_tds, avg(tds) as avg_tds,            
                max(tss) as max_tss, min(tss) as min_tss, avg(tss) as avg_tss,            
                max(ph) as max_ph, min(ph) as min_ph, avg(ph) as avg_ph,            
                max(bod) as max_bod, min(bod) as min_bod, avg(bod) as avg_bod,            
                max(cod) as max_cod, min(cod) as min_cod, avg(cod) as avg_cod,            
                max(do) as max_do, min(do) as min_do, avg(do) as avg_do,            
                max(sulfat) as max_sulfat, min(sulfat) as min_sulfat, avg(sulfat) as avg_sulfat,            
                max(clorida) as max_clorida, min(clorida) as min_clorida, avg(clorida) as avg_clorida,            
                max(nitrat) as max_nitrat, min(nitrat) as min_nitrat, avg(nitrat) as avg_nitrat,            
                max(nitrit) as max_nitrit, min(nitrit) as min_nitrit, avg(nitrit) as avg_nitrit,            
                max(amoniak) as max_amoniak, min(amoniak) as min_amoniak, avg(amoniak) as avg_amoniak,                       
                max(sianida) as max_sianida, min(sianida) as min_sianida, avg(sianida) as avg_sianida,            
                max(merkuri) as max_merkuri, min(merkuri) as min_merkuri, avg(merkuri) as avg_merkuri,            
                max(seng) as max_seng, min(seng) as min_seng, avg(seng) as avg_seng,            
                max(kromium) as max_kromium, min(kromium) as min_kromium, avg(kromium) as avg_kromium,            
                max(detergen) as max_detergen, min(detergen) as min_detergen, avg(detergen) as avg_detergen,            
                max(fenol) as max_fenol, min(fenol) as min_fenol, avg(fenol) as avg_fenol,            
                max(fecal_coliform) as max_fecal_coliform, min(fecal_coliform) as min_fecal_coliform, avg(fecal_coliform) as avg_fecal_coliform,            
                max(total_coliform) as max_total_coliform, min(total_coliform) as min_total_coliform, avg(total_coliform) as avg_total_coliform'
            ))
            ->whereNotNull("temperatur")
            ->whereNotNull("tds")
            ->whereNotNull("tss")
            ->whereNotNull("ph")
            ->whereNotNull("bod")
            ->whereNotNull("cod")
            ->whereNotNull("do")
            ->whereNotNull("sulfat")
            ->whereNotNull("clorida")
            ->whereNotNull("nitrat")
            ->whereNotNull("nitrit")
            ->whereNotNull("amoniak")
            ->whereNotNull("sianida")
            ->whereNotNull("merkuri")
            // ->whereNotNull("seng")
            // ->whereNotNull("kromium")
            ->whereNotNull("detergen")
            // ->whereNotNull("fenol")
            ->whereNotNull("fecal_coliform")
            ->whereNotNull("total_coliform")
            // ->where("titik_pemantauan", $id)
            ->groupBy('titik_pemantauan')
            ->get();

        $storet = array_filter($storet->toArray(), function ($elem) {
            return $elem->jumlah > 1;
        });

        $out = array();

        foreach ($storet as $tp) {
            $out[$tp->titik_pemantauan] = array(
                "titik_pemantauan" => $tp->titik_pemantauan
            );

            $totalAllParamScore = 0;
            foreach ($bakuMap as $param => $bm) {
                $tpmax = $tp->{'max_' . $param};
                $tpmin = $tp->{'min_' . $param};
                $tpavg = $tp->{'avg_' . $param};

                $maxscore =  $this->calculateScore($param, "max");
                $minscore = $this->calculateScore($param, "min");
                $avgscore = $this->calculateScore($param, "avg");

                if ($bm->maksimum >= $tpmax && $bm->minimum <= $tpmax) {
                    $maxscore = 0;
                }

                if ($bm->maksimum >= $tpmin && $bm->minimum <= $tpmin) {
                    $minscore = 0;
                }

                if ($bm->maksimum >= $tpavg && $bm->minimum <= $tpavg) {
                    $avgscore = 0;
                }

                $total = $maxscore + $minscore + $avgscore;

                $out[$tp->titik_pemantauan]["score_param"][$param] = $total;

                $totalAllParamScore += $total;
            }

            $mutu_air = 1;

            if ($totalAllParamScore == 0) {
                $mutu_air =  1;
            } else if ($totalAllParamScore >= -10  && $totalAllParamScore <= -1) {
                $mutu_air = 2;
            } else if ($totalAllParamScore >= -30  && $totalAllParamScore <= -11) {
                $mutu_air = 3;
            } else if ($totalAllParamScore < -30) {
                $mutu_air = 4;
            }

            $out[$tp->titik_pemantauan]["mutu_air"] = $mutu_air;
        }

        $tps = TitikPemantauanModel::all();
        foreach ($tps as $tp) {
            if (!isset($out[$tp->id])) {
                continue;
            }
            $tp->mutu_air = $out[$tp->id]["mutu_air"];
            $tp->save();
        }

        return redirect()->route('kelola-titik.index');
    }
}
