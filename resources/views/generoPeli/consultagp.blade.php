@extends('layouts.plantillabase')
@section('contenido')
<h2 class="my-4">Inspeccionar  Registro</h2>

  <form action="" method="POST">
  @csrf
  @method('PUT')  
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID Pivot</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$generopelicula->id}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Genero</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$generos->name}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pelicula</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$peliculas->titulo}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sinopsis</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$peliculas->sinopsis}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>


    <br>

    <a href="/GP" class="btn btn-secondary">Volver</a>
  </form>
  @endsection('contenido')
    
