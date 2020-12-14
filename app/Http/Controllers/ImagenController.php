<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Secciones;
use App\Imagenes;
use App\Relacion;
use \Illuminate\Http\Response;
use League\CommonMark\Inline\Element\Strong;

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
        $extension = $imagen->getClientOriginalExtension();

        if($extension != "jpg"){
            return $extension;
        }/*else if($extension != "jpg"){
            return $extension;  
        }*/else{
           $path = $request->file('imagen')->storeAs(
            '/public/imgs', $nombre
            ); 
        }
        
        $foto = new Imagenes;
        $foto->titulo = $request->titulo;
        $foto->extension = $imagen->getClientOriginalExtension();
        $foto->nombre = pathinfo($nombre, PATHINFO_FILENAME);
        $foto->save();
        $relacion = new relacion;

        $idSecciones = $request->categorias;
        $relacion->idSeccion = $idSecciones;
        $relacion->idImagen = $foto->id;
        $relacion->save();

        $imagenes = Imagenes::all();
        return redirect('/')->with('imagenes', $imagenes);
    }

    public function buscaImagen(Request $request)
    {
        $palabra = $request->search;
        $resultados = Imagenes::query()
        ->where('nombre', 'like', "%%  {$palabra} ")
        ->orWhere('nombre', 'like', "%%  {$palabra}")
        ->orWhere('nombre', 'like', "{$palabra} %%")
        ->orWhere('nombre', 'like', "{$palabra}")
        ->orWhere('titulo', 'like', "%%  {$palabra}")
        ->orWhere('titulo', 'like', "{$palabra} %%")
        ->orWhere('titulo', 'like', "{$palabra}")
        ->orWhere('extension', 'like', "%%  {$palabra}")
        ->orWhere('extension', 'like', "{$palabra} %%")
        ->orWhere('extension', 'like', "{$palabra}")
        ->orderBy('created_at', 'desc')
        ->get();
        return view('/resultados')->with('resultados', $resultados);
    }

    public function ver($id)
    {
        // buscar dato
        $imagen = Imagenes::find($id);
        // pasar el dato a la vista
        return view('verImg')->with('imagen',$imagen);
    }

    public function guardar($id)
    {
        $imagen = Imagenes::find($id);
        $filepath = public_path('storage\\imgs\\').$imagen->nombre.".".$imagen->extension;
        return response()->download($filepath);
    }
}
