<?php

namespace App\Http\Controllers;

use App\TipoDocumento;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);


        TipoDocumento::create(['nombre'=>$request->nombre]);

        flash()->success('Nuevo tipo!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDocumento $tipoDocumento)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDocumento $tipo_documento)
    {
        return view('tipos.edit',compact('tipo_documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDocumento $tipo_documento)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        TipoDocumento::where('id',$tipo_documento->id)
            ->update(['nombre'=>$request->nombre]);

        flash()->success('Tipo actualizado!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDocumento $tipoDocumento)
    {
        //
    }
}
