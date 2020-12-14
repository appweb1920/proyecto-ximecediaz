<?php

namespace App\Http\Controllers;

use App\Imagenes;
use Illuminate\Http\Request;
use App\Secciones;
use App\Relacion;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secciones = Secciones::all();
        return view('/categorias')->with('secciones',$secciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session(['link' => url()->previous()]);
        $num = $request->num;
        foreach($request->seccion as $seccion){
           $secciones = new Secciones;
           $secciones->seccion = $seccion;
           $secciones->save();
        }
        return redirect(session('link'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ver($id)
    {
        $seccion = Secciones::find($id);
        $imagenes = array();
        $img = new Imagenes;
        $relacion = Relacion::select("*")->where('idSeccion', $seccion->id)->get();
        
        foreach($relacion as $r){
            $id = $r->idImagen;
            $img = Imagenes::find($id);
            $imagenes[] = $img;
        }
        return view('/resultados')->with('resultados', $imagenes);
    }
}
