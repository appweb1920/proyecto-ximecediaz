<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/fa97ce5990.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <!-- or -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

    <script src="/path/to/masonry.pkgd.min.js"></script>


    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <a class="navbar-brand" href="#" style="height: 60px;"><img class="logo" src="{{ URL::to('/assets/img/LogoTransparente.png') }}" style="max-height: 70%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categorias">Categorías</a>
      </li>
    </ul>
  </div>
  @auth
  <ul class="navbar-nav ml-auto mr-5">
    <li class="nav-item mr-3"><i class="fas fa-user fa-2x"></i></li>
    <li class="nav-item dropdown">
    
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Cerrar sesión') }}
        </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
      </div>
    </li>
  </ul>
  @endauth
  @guest
  <button type="button" class="btn btn-light">Donar al autor</button>
  @endguest
</nav>

@yield('contenido')

<footer class="page-footer font-small blue mt-4">
  <div class="footer-copyright text-center pt-3 pb-3">
    <div class="row">
      <div class="col">
        <span>Desarrollado por Ximena Cervantes</span>
      </div>
      <div class="row position-absolute m-3">
        <div class="col-4">
          <a href="https://www.facebook.com/ximecediazIG/">
            <i class="fab fa-facebook"></i>
          </a>
        </div>
        <div class="col-4">
          <a href="https://www.instagram.com/ximecediaz/">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <div class="col-4">
          <a href="https://www.behance.net/ximenadaz">
            <i class="fab fa-behance"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>

</html>