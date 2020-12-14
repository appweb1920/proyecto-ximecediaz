@extends('navbar2')

@section('contenido')
    <div class="container justify-content-center mt-5">
        <h1 class="text-center">Categorías</h1>
        @auth
            <div class="m-3">
            <form action="/agregaSecciones" method="POST">
                @csrf
                <div>
                    <div class="row"><h5 class="mb-3">Añadir nuevas secciones:</h5></div>
                    <div class="row">
                        <a href="javascript:void(0);" class="add_boton"><i class="fas fa-plus-circle fa-3x text-danger"></i></a>
                        <button type="submit" class="btn btn-success ml-4">Agregar</button>
                    </div>
                        
                        <div class="inputs"></div></div>
                    <input type="hidden" class="num" name="num" value="">
                
            </form></div>
            @include('scripts.add-button')
        @endauth
        
        @if(!is_null($secciones))
            <div class="row justify-items-center">
                @foreach($secciones as $s)
                    <a href="/verCategoria/{{$s->id}}" class="card text-white bg-info m-3" style="width: 30%;text-decoration: none;">
                    <div class="card-body">
                    <div class="card-title">
                        <h4 class="text-white text-center">{{$s->seccion}}</h4>
                    </div></div></a>   
                @endforeach
            </div>
        @else
            <p>No hay categorías disponibles</p>
        @endif
        
    </div>
@endsection