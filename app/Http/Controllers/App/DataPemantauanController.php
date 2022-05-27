<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HasilPemantauanModel;

class DataPemantauanController extends Controller
{
    public function index()
    {
        $items = HasilPemantauanModel::all();


        return view('pages.app.data', [
            'items' => $items
        ]);
    }
}
