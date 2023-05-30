<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrate!</title>
        <link rel="stylesheet" href="{!! asset('css/registro.css') !!}">
        <script type="text/javascript" src="{{ asset('js/funciones.js') }}"></script>
    </head>
    <body>

        <div class="container">

            <div class="left">
                
            </div>

            <form action="{{route('auth.save')}}" class="Registro" method="POST" autocomplete="off">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif
                @csrf
                
                <h4>CREA UNA <span>NUEVA</span> CUENTA</h4>
                <div class="floating-label">
                    <input placeholder="Nombre" type="text" name="nombre" id="nombre" 
                    value="{{old('nombre')}}" autocomplete="off">
                    <label for="nombre">Nombre:</label>
                    <span class="text-danger">@error('nombre'){{$message}}@enderror</span>
                </div>
                <div class="floating-label">
                    <input placeholder="Apellido" type="text" name="apellido" id="apellido" 
                    value="{{old('apellido')}}" autocomplete="off">
                    <label for="apellido">Apellido:</label>
                    <span class="text-danger">@error('apellido'){{$message}}@enderror</span>
                </div>
                <div class="floating-label">
                    <input placeholder="Email" type="email" name="email" id="email" 
                    value="{{old('email')}}" autocomplete="off">
                    <label for="password">Email:</label>
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="floating-label">
                    <input placeholder="Clave" type="password" name="password" id="password" autocomplete="off">
                    <label for="password">Password:</label>
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>

                <div class="card">
                    <button type="text" class="btn">Enviar!</button> 
                    <a href="/auth/welcome"><button type="button" class="btn">Regresar</button></a>
                </div>

            </form>

        </div>             

    </body>
</html>