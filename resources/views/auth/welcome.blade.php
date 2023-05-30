<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LogIn</title>
        
        <link rel="stylesheet" href="{!! asset('css/estilo.css') !!}">
        <script type="text/javascript" src="{{ asset('js/funciones.js') }}"></script>
    </head>
    <body>
      
    <div class="session">
    <div class="left">
            
    </div>
    
    <form action="{{route('auth.check')}}" method="POST" class="log-in" > 
    @if(Session::get('fail'))
      <div class="alert alert-danger">
        {{Session::get('fail')}}
      </div>
    @endif
    
    @csrf
      <h4>Hola CineAmigo_ <span>Bienvenido</span></h4>
      <p>Inicia Sesion o forma parte de nuestra comunidad y registrate</p>
      <div class="floating-label">
        <input placeholder="Email" type="email" 
        value="{{old('email')}}" name="email" id="email" autocomplete="off">
        <label for="email">Email:</label>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
      </div>
      <div class="floating-label">
        <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
        <label for="password">Password:</label>
        <span class="text-danger">@error('password'){{$message}}@enderror</span>
      </div>
      <div class="botones">
        <a href="/auth/registra"><button type="button">Registrate</button></a>
        <a><button type="submit">Login</button></a>
      </div>
      
    </form>
    </div>

    

</body>
</html>
