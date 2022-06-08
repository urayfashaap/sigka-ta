<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoretController extends Controller
{
    public function index(Request $request)
    {

        $bakuMutu = DB::table('baku_mutu')
            ->select(DB::raw(
                "*"
            ))
            ->get();

        return view('pages.admin.storet', [
            "baku_mutu" => $bakuMutu
        ]);
    }
}
