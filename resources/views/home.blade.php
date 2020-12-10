@extends('navbar')

@section('contenido')
<div class="imagen col col-12">

  <div class="row justify-content-md-center">
      <div>
        <h1>Lorem ipsum dolor sit amet.</h1>
      </div>
  </div>

  <div class="row justify-content-md-center">
    <div class="input-group md-form form-sm form-2 pl-0" style="max-width: 80%;">
      <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <span class="input-group-text bg-danger lighten-3" id="basic-text1">
          <i class="fas fa-search"></i>
        </span>
      </div>
    </div>
  </div>

  <div class="row justify-content-md-center">
    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, illo!</span>
  </div>
</div>

@endsection