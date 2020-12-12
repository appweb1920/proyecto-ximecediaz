<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Secciones;

class ImagenController extends Controller
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
        $imagen = $request->file('imagen');
        //$nombre = "ejemplo.png";
        
        if($imagen->getClientOriginalExtension()!="png"){
            return "no se soporta el archivo";
        }else{
           $path = $request->file('imagen')->storeAs(
            '/public/imgs', "hola".".".$imagen->getClientOriginalExtension()
            ); 
        }
        

        /*$path = $imagen->path();
        
        $imagen->mover('../public_html/img/', $imagen);
*/

        dd($path);
    }
}
