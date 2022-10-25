<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medida::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedidaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'unidad' => 'required'
        ]);

        return Medida::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function show(Medida $medida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function edit(Medida $medida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedidaRequest  $request
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medida = Medida::find($id);
        $medida->update($request->all());
        return $medida;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Medida::destroy($id);
    }
}
