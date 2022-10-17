<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMiembroRequest;
use App\Models\Miembro;
use Illuminate\Http\Request;
use App\Http\Resources\Miembro as MiembroResource;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miembros = Miembro::all();
        return response()->json([
            'estado' => true,
            'miembros' => $miembros
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMiembroRequest $request)
    {
        $miembro = Miembro::create($request->all());

        return response()->json([
            'estado' => true,
            'msg' => "Miembro creado!",
            'miembro' => $miembro
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function show(Miembro $miembro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit(Miembro $miembro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miembro $miembro)
    {
        $miembro->update($request->all());

        return response()->json([
            'estado' => true,
            'msg' => "Miembro actualizado!",
            'miembro' => $miembro
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miembro $miembro)
    {
        $miembro->delete();

        return response()->json([
            'estado' => true,
            'msg' => "Miembro eliminado!",
            'miembro' => $miembro
        ], 200);
    }
}
