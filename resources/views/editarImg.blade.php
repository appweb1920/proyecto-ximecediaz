@extends('navbar2')

@section('contenido')
@auth
    @if(!is_null($imagen))
        <div class="container">
        <form action="/editarImagen" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{$imagen->id}}">
            <label for="">Título: </label>
            <input type="text" value="{{$imagen->titulo}}" name="titulo">
        <div class="row">
        <div class="col-6">
            <img src="{{asset('/storage/imgs/'.$imagen->nombre.'.'.$imagen->extension) }}" alt="" class="img-fluid">
        </div>
        <div class="col-6">
            <div class="row">
                <label for="">Nombre archivo:</label>    
                <p>{{$imagen->nombre}}</p>
            </div>
            <div class="row">
                <p>Extension: {{$imagen->extension}}</p>
            </div>
            
            <div class="row mt-5">
                <div class="col"><a href="/borrarImg/{{$imagen->id}}" class="btn btn-danger">Eliminar</a></div>
            </div>
            <div class="row">
                <input type="submit">
            </div>
            
         </div>   
        </div></form></div>
        
    @endif
    @endauth
@endsection