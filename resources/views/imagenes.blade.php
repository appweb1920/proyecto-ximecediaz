@extends('navbar')

@section('contenido')
    @auth
    <h1>Agregar imágenes</h1>

    <form action="/guardaImagen" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col">
            <div class="row">
                <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg">
            </div>
            <div class="row">
                <input type="submit">
            </div>

            <h2>Categoría</h2>

            <div class="row">
                <div class="col-md-12">
                    @if(!is_null($secciones))
                        @foreach($secciones as $s)
                            <div class="checkbox">
                                <label><input type="checkbox" value="{{$s->id}}">{{$s->seccion}}</label>
                            </div>    
                        @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </form>
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
@endsection