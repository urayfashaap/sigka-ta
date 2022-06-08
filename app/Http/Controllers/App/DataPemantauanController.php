<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HasilPemantauanModel;
use App\Models\TitikPemantauanModel;

class DataPemantauanController extends Controller
{
    public function index()
    {
        $items = HasilPemantauanModel::all();
        $points = TitikPemantauanModel::all();


        return view('pages.app.data', [
            'items' => $items,
            'points' => $points,
        ]);
    }
}
