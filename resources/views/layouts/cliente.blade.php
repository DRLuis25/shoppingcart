<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous"/>

</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ml-auto">
        <a class="navbar-brand" href="{{route('welcome')}}">ISO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('welcome') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('welcome')}}">Inicio </a>
            </li>
            <li class="nav-item {{ Request::is('listarproductos') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('listarproductos')}}">Productos </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Administrador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('review')}}">Carrito</a>
            </li>
            @auth
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <span class="d-none d-md-inline">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- Menu Footer-->
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="{{route('ordenes')}}">Mis ordenes</a>
                    <a href="#" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>               
            </li>
            @else
            <li>
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('registro') }}">Registrarse</a>
            </li>
            @endif
          </ul>
        </div>

    </nav>
<div class="">    
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>
</div>
 <!-- Main Footer -->
 <footer style="">
    <strong>Copyright &copy; 2014-2020 <a href="">Local</a>.</strong> All rights
    reserved.
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
<style>
body {
  min-height: 100vh;
  position: relative;
  margin: 0;
  padding-bottom: 25px; //height of the footer
  box-sizing: border-box;
}
footer {
  position: absolute;
  bottom: 0;
  height: 25px;
}

</style>