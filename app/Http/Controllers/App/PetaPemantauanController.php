<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TitikPemantauanModel;

class PetaPemantauanController extends Controller
{
    public function index()
    {
        $items = TitikPemantauanModel::all();

        return view('pages.app.peta', [
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
}
