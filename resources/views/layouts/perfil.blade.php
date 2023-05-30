<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')<!-- plugin datatables -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DASHBOARD</title>
  </head>
  <body>

  <ul class="nav nav-tabs justify-content-center nav-fill">

    <li class="nav-item">
        <a class="navbar-brand logo" href="/layouts/dashboard" ><img src="{{ asset('images/images.png') }}" 
        style="width: 30px; height: 30px;" 
        alt="Inicio"> PAGINA PRINCIPAL</a>
    </li>

    <li class="nav-item dropdown">
        <a class="navbar-brand dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{ asset('images/config.jpg') }}" 
        style="width: 30px; height: 30px;" 
        alt="Inicio"> TABLAS</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">...</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/compania">Companias</a></li>
            <li><a class="dropdown-item" href="/pelicula">Peliculas</a></li>
            <li><a class="dropdown-item" href="/Actor">Actores</a></li>
            <li><a class="dropdown-item" href="/Director">Directores</a></li>
            <li><a class="dropdown-item" href="/Genero">Generos</a></li>
            <li><a class="dropdown-item" href="/AP">Actores y sus Peliculas</a></li>
            <li><a class="dropdown-item" href="/DP">Directores y sus Peliculas</a></li>
            <li><a class="dropdown-item" href="/GP">Generos y Peliculas</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="navbar-brand logo" href="/layouts/perfil" ><img src="{{ asset('images/user.jpg') }}" 
        style="width: 30px; height: 30px;" 
        alt="Inicio"> USUARIO</a>
    </li>

    <li class="nav-item">
    <a class="navbar-brand" href="/layouts/dashboard"></a>
    </li>

    <li class="nav-item">
    <a class="navbar-brand" href="/layouts/dashboard"></a>
    </li>

    <li class="nav-item">
    <a class="navbar-brand" href="/layouts/dashboard"></a>
    </li>

    <li class="nav-item">
    <a class="navbar-brand" href="/layouts/dashboard"></a>
    </li>

    <li class="nav-item">
    <a class="navbar-brand" href="/layouts/dashboard"></a>
    </li>

    <li class="nav-item">
        <a class="navbar-brand logo" href="{{route('auth.logout')}}" ><img src="{{ asset('images/logout.png') }}" 
        style="width: 25px; height: 25px;" 
        alt="Inicio"> Salir</a>
    </li>

</ul>


    <h1 class="bg-secondary text-white text-center">Perfil</h1>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Email</th>
                         
                    </thead>
                    <tbody>
                        <td>
                            {{$LoggedUser['nombre']}}
                        </td>
                        <td>
                            {{$LoggedUser['email']}}
                        </td>
                        
                    </tbody>
                </table>
            </div>
        </div>
        @yield('contenidoT')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('js')<!-- plugin datatables -->
  </body>
</html>