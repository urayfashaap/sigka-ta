<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TitikPemantauanModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = TitikPemantauanModel::all();
        return view('pages.admin.dashboard', [
            'items' => $items
        ]);
    }
}
