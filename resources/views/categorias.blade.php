@extends('navbar2')

@section('contenido')
    <div class="content">
        <h1>Categorías</h1>
        @auth
            <form action="/agregaSecciones" method="POST">
                @csrf
                <div>
                    <a href="javascript:void(0);" class="add_boton"><i class="fas fa-plus-circle fa-3x text-danger"></i></a>
                        <div class="inputs"></div></div>
                    <input type="hidden" class="num" name="num" value="">
                <input type="submit">
            </form>
            @include('scripts.add-button')
        @endauth
        
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