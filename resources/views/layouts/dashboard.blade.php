<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')<!-- plugin datatables -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{!! asset('css/dash.css') !!}">
    
    <title>INICIO</title>
  </head>
  <body>
    <header>
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
  
   <div class="card bg-dark text-white">
    <img src="{{ asset('images/fondo2.jpg') }}" class="Fondo" alt="Fondo1">
    <div class="card-img-overlay">
    <h3 class="title fw-bold">Informacion sobre <Br>tus peliculas favoritas!<br></h3>
    </div>
    </div>
  
   
    <header>
    <main>
        <div class = "row text-white py-5" id ="row-catalogo" >
            <div class ="container text-center">
                <div class="row align-items-start">
                    <div class "row justify-content-center">
                        <h1 class="front fw-bold mt-4">Nuestra informacion</h1>
                        <h5>Contamos con informacion de diferentes categorias, como de directores, actores y generos de peliculas.</h5>

                    </div>
                    <div class = "row align-items-star ">
                        <div class ="col">
                            <img src="{{ asset('images/catalogo.jpg') }}" alt="cartelera">
                            <h4 class="front fw-bold mt-4">PELICULAS</h4>
                            <P>Informacion de peliculas de cualquier categoria</P>

                        </div>
                        <div class ="col">
                            <img src="{{ asset('images/Director.jpg') }}" alt="Direc">
                            <H4 class="front fw-bold mt-4">DIRECTOR</H4>
                            <p>Informacion de distintos directores</p>
                        </div> 
                        <div class ="col">
                            <img src="{{ asset('images/Actores.jpg') }}" alt="Actuacion">
                            <H4 class="front fw-bold mt-4">ACTORES</H4>
                            <p>Informacion de actores que han participado en variedad de peliculas</p>
                        </div>        
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class = "row" id = "row-contacto">
           
            <div class="card bg-dark text-white">
                    <img src="{{ asset('images/correo.jpg') }}" class="Fondo" alt="Fondo2">
                    <div class="card-img-overlay">
                        <div class= "container text-center">
                        <h1>Contacto</h1>
                        <h4>Envianos tu correo para contactarnos!</h4>
                        <div class "input-group">
                             <input class= "from-control" type = "text" placeholder= "Email">
                            <button class = "btn">Enviar</button>
                        </div>

                        </div>
                    </div>
               
            </div>


        </div>
      
        

    
    <main>
    
    <footer>

    <div class = "row text-white">
        <div class="container">
                <div class ="row">
                    <div class="row align-items-start">
                        <div class="col">
                        <h4>NOSOTROS</h4>
                        <P>Instituto tecnologico de Aguascalientes</P>
                        </div>
                        <div class="col">
                        <h4>CREDITOS</h4>
                        <a href="https://www.freepik.com/photos/background">Herramienta (Creditos)</a>
                        </div>
                        <div class="col">
                        <h4>CONTACTANOS</h4>
                            <div class="d-flex">
                             
                                <p>4492918713</p>

                            </div>
                            <div class="d-flex">
                                <span class="material-symbols-outlined">
                                home
                                </span>
                                <p>Rio Lerma 101</p>

                            </div>
                            <div class = "d-flex">
                                <span class="material-symbols-outlined">
                                forward_to_inbox
                                </span>
                                <P>19151658@aguascalientes.tecnm.mx
                                ricardomayorga073@gmail.com</P>

                            </div>


                        </div>

                    </div>
                
            
            </div>

       </div>
    </div>
    </footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('js')<!-- plugin datatables -->
  </body>
</html>