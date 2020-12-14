@extends('navbar')

@section('contenido')
  <div class="imagen d-flex align-items-center">
    <div class="col col-12">
      <div class="row justify-content-center mb-2">
          <div>
            <h1 class="text-white">Imágenes gratis para descargar</h1>
          </div>
      </div>
      <div class="row justify-content-center mb-5">
        <span class="text-center text-light" style="max-width: 50%; ">
        Este banco de imágenes está conformado por más de 200 imágenes libres de derecho de autor, completamente gratuitas y de alta calidad.
      </span>
      </div>
      <form action="/buscaImagen" method="POST">
        @csrf
        <div class="row justify-content-center">
          <div class="input-group md-form form-sm form-2 pl-0" style="max-width: 70%;">
            <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search" name="search">
            <div class="input-group-append">
              <span class="input-group-text bg-danger lighten-3" id="basic-text1">
                <i class="fas fa-search"></i>
              </span>
            </div>
          </div>
        </div>
      </form>

      <div class="row justify-content-center mt-4">
        <span class="text-white">Busca por nombre, categoría, tipo de archivo...</span>
      </div>
    </div>
  </div>
  @auth
  <div class="mx-auto mt-5" style="width: 50%;">
  <a class="btn btn-primary btn-lg btn-block" href="/imagen">Agregar imágenes</a>
  </div>
  @endauth
  <div class="fotos container justify-content-center">
    <div class="row justify-items-center">
    @if(!is_null($imagenes))
      @foreach($imagenes as $i)
        <div class="col-sm-6 col-lg-3 mt-3 mt-md-5"><a href="/verImg/{{$i->id}}"><img src="{{asset('/storage/imgs/'.$i->nombre.'.'.$i->extension) }}" alt="" class="img-fluid"></a></div>
      @endforeach
    @endif
  </div></div></div>
@endsection