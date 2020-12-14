@extends('navbar2')

@section('contenido')
@auth
    @if(!is_null($imagen))
        <div class="container mt-4">
        <form action="/editarImagen" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{$imagen->id}}">
            <div class="row justify-content-center mb-3">
            <label for="" class="h1 mb-3 text-center mr-3">Título: </label>
            <input type="text" class="h2 text-center" value="{{$imagen->titulo}}" name="titulo"></div>
        <div class="row">
        <div class="col-6">
            <img src="{{asset('/storage/imgs/'.$imagen->nombre.'.'.$imagen->extension) }}" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col">
                <h4>Información general</h4></div>
                <div class="col"><button type="submit" class="btn btn-success ml-4">Modificar</button></div>
            </div>
            <div class="row">
                <div class="col"><div class="h6">Nombre de archivo: {{$imagen->nombre}}</div></div>
            </div>
            <div class="row">
                <div class="col"><p>Extension: {{$imagen->extension}}</p></div>
            </div>
            <div class="row mt-5">
                <div class="col"><a href="/borrarImg/{{$imagen->id}}" class="btn btn-danger">Eliminar</a></div>
            </div>
            
            
         </div>   
        </div></form></div>
        
    @endif
    @endauth
@endsection