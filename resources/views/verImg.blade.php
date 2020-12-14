@extends('navbar2')

@section('contenido')

    @if(!is_null($imagen))
        <div class="container mt-4">
        <h1 class="mb-3 text-center">{{$imagen->titulo}}</h1>
        <div class="row">
        <div class="col-6">
            <img src="{{asset('/storage/imgs/'.$imagen->nombre.'.'.$imagen->extension) }}" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <div class="row">
                <h4>Información general</h4>
            </div>
            <div class="row">
                <div class="h6">Nombre de archivo: {{$imagen->nombre}}</div>
            </div>
            <div class="row">
                <p>Extension: {{$imagen->extension}}</p>
            </div>
            <div class="row">
                <a class="btn btn-success" href="/guardarImg/{{$imagen->id}}">Descargar</a>
            </div>
            @auth
            <div class="row mt-5">
                <div class="col"><a href="/editarImg/{{$imagen->id}}" class="btn btn-primary">Editar</a></div>
                <div class="col"><a href="/borrarImg/{{$imagen->id}}" class="btn btn-danger">Eliminar</a></div>
            </div>
            @endauth
         </div>   
        </div></div>
        
    @endif



@endsection