<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TitikPemantauanRequest;
use App\Models\TitikPemantauanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
}
