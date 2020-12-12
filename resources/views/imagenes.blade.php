@extends('navbar')

@section('contenido')
    @auth
    <h1>Agregar imágenes</h1>

    <form action="/guardaImagen" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col">
            <div class="row">
        <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg"></div>
        <div class="row">
        <input type="submit"></div>

        <h2>Categoría</h2>
        <div class="row">
            <div class="col-md-12">

                <select class="mdb-select colorful-select dropdown-primary md-form" multiple searchable="Search here..">
                    <option value="" disabled selected>Escoge la categoría</option>
                    @if(!is_null($secciones))
                        @foreach($secciones as $s)
                            <option value="{{$s->id}}">{{$s->seccion}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        </div>
    </form>


    @endauth
@endsection