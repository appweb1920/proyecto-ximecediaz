<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Secciones;
use App\Imagenes;
use App\Relacion;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Imagenes::all();
        return view('home')->with('imagenes', $imagenes);
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
    public function store(Request $request)
    {
        //
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

    public function imagen()
    {
        $secciones = Secciones::all();
        return view('imagenes')->with('secciones',$secciones);
    }

    public function guardaImagen(Request $request)
    {
        $secciones = Secciones::all();
        $imagen = $request->file('imagen');
        $nombre = $imagen->getClientOriginalName();
        
        if($imagen->getClientOriginalExtension()!="png"){
            return "no se soporta el archivo";
        }else{
           $path = $request->file('imagen')->storeAs(
            '/public/imgs', $nombre
            ); 
        }
        
        $foto = new Imagenes;
        $foto->titulo = $request->titulo;
        $foto->nombre = $nombre;
        $foto->save();
        $relacion = new relacion;

        $idSecciones = $request->get('categorias');
        $relacion->idSeccion = $secciones->get($idSecciones);
        $relacion->idImagen = $foto->id;
        
        $imagenes = Imagenes::all();
        return view('home')->with('imagenes', $imagenes);
    }
}
