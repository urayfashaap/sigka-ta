<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HasilPemantauanRequest;
use App\Models\HasilPemantauanModel;
use App\Models\TitikPemantauanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class HasilPemantauanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = HasilPemantauanModel::all();

        return view('pages.admin.kelola-hasil.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titik_pemantauan = TitikPemantauanModel::all();
        return view('pages.admin.kelola-hasil.create', compact('titik_pemantauan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(HasilPemantauanRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);

        HasilPemantauanModel::create($data);
        return redirect()->route('kelola-hasil.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id_Hasil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_Hasil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = HasilPemantauanModel::findOrFail($id);
        $titik_pemantauan = TitikPemantauanModel::all();
        return view('pages.admin.kelola-hasil.edit', compact('titik_pemantauan'),  [
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

        $item = HasilPemantauanModel::findOrFail($id);
        $item->update($data);
        return redirect()->route('kelola-hasil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_Hasil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HasilPemantauanModel::findOrFail($id);
        $item->delete();

        return redirect()->route('kelola-hasil.index');
    }
}
