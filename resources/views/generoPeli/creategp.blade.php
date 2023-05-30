@extends('layouts.plantillabase')
@section('contenido')
<h2>Crear Registro</h2>

  <form action="/GP" method="POST">
    @csrf
    
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Pelicula</label>
    <select id="inputState" name="pelicula" class="form-select">
        @foreach ($peliculas as $pelicula)
            <option value="{{$pelicula->id}}">{{$pelicula->titulo}}</option>  
        @endforeach
    </select>
    </div>

    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Genero</label>
    <select id="inputState" name="genero" class="form-select">
        @foreach ($generos as $genero)
            <option value="{{$genero->id}}">{{$genero->name}}</option>  
        @endforeach
    </select>
    </div>
    
    <br>

    <a href="/GP" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection('contenido')