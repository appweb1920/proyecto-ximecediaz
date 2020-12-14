@extends('navbar')

@section('contenido')
    @auth
    <div class="container mt-4">
        <h1 class="mb-4">Agregar imágenes</h1>

        <form action="/guardaImagen" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col">
                <div class="row">
                    <div class="col">
                    <label for="nombre">Título de la imagen:</label>
                    <input class="ml-3" type="text" name="titulo" id=""></div>
                </div>
                <div class="row mt-4">
                    <div class="col"><label for="imagen" class="mr-3">Archivo de imagen: </label>
                    <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg"></div>
                </div>

                <h2 class="mb-4 mt-4">Categoría</h2>

                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <select name="categorias" class="form-control" id="sel1">
                        @if(!is_null($secciones))
                            @foreach($secciones as $s)
                                <div class="checkbox">
                                    <option value="{{$s->id}}" name="categorias[]">{{$s->seccion}}</option>
                                </div>    
                            @endforeach
                        @endif
                        </select>
                    </div>
                    <div class="col-md-3">
                        <form action="/agregaSecciones" method="POST">
                        @csrf
                        <div>
                            <div class="row"><h5 class="mb-3">Añadir nuevas secciones:</h5></div>
                            <div class="row">
                                <a href="javascript:void(0);" class="add_boton"><i class="fas fa-plus-circle fa-3x text-danger"></i></a>
                                <button type="submit" class="btn btn-success ml-4">Agregar</button>
                            </div>
                                
                            <div class="inputs"></div>
                            <input type="hidden" class="num" name="num" value="">
                        </div>
                        </form>
                        @include('scripts.add-button')
                    </div>
                </div>
                
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-lg">Añadir imagen</button>
                </div>

            </div>
        </form>
    </div>

    
    @endauth
@endsection