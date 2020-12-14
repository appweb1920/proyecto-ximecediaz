@extends('navbar2')

@section('contenido')
    <div class="content">
        <h1>Categorías</h1>
        @if(!is_null($secciones))
            <div class="row justify-items-center">
                @foreach($secciones as $s)
                    <div class="col-sm-6 col-lg-3 mt-3 mt-md-5 bg-info text-white">
                        <a href="/verCategoria/{{$s->id}}"><span>{{$s->seccion}}</span></a>
                    </div>    
                @endforeach
            </div>
        @else
            <p>No hay categorías disponibles</p>
        @endif
        
    </div>
@endsection