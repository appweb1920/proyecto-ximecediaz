@extends('navbar')

@section('contenido')
<div class="imagen d-flex align-items-center">
  <div class="col col-12">
    <div class="row justify-content-center mb-5">
        <div>
          <h1>Lorem ipsum dolor sit amet.</h1>
        </div>
    </div>

    <div class="row justify-content-center">
      <div class="input-group md-form form-sm form-2 pl-0" style="max-width: 80%;">
        <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text bg-danger lighten-3" id="basic-text1">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, illo!</span>
    </div>
  </div>
</div>
@auth
<div class="mx-auto mt-5" style="width: 50%;">
<a class="btn btn-primary btn-lg btn-block" href="/imagen">Agregar imágenes</a>
</div>
@endauth
@endsection