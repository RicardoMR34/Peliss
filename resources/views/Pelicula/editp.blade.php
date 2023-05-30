@extends('layouts.plantillabase')
@section('contenido')
<h2>Actualizar  Registro</h2>

  <form action="/pelicula/{{$pelicula->id}}" method="POST">
  @csrf
  @method('PUT')  
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="text" name="titulo" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off"
        value="{{$pelicula->titulo}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sinopsis</label>
        <input type="text" name="sinopsis" class="form-control" id="exampleInputText1" 
        value="{{$pelicula->sinopsis}}" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Calificacion</label>
        <input type="integer" name="calificacion" class="form-control"
        value="{{$pelicula->calificacion}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Longitud en Minutos</label>
        <input type="integer" name="longitudMinutos" class="form-control"
        value="{{$pelicula->longitudMinutos}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">tipo</label>
    <select id="inputState" name="Tipo" class="form-select" value="{{$pelicula->Tipo}}">
      <option selected>{{$pelicula->Tipo}}</option>
      <option>Pelicula</option>
      <option>Serie</option>
    </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Compania</label>
    <select id="inputState" name="companiaID" class="form-select">
        
        @foreach ($companias as $compania)
            <option value="{{$compania->id}}">{{$compania->name}}</option>  
        @endforeach
    </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="date" class="form-label" >Fecha de Estreno</label>
    <div class="col-5">
      <div class="input-group date" id="datepicker">
        <input type="date" name="anioLanzamiento" class="form-control" id="date" value="{{$pelicula->anioLanzamiento}}"/>
      </div>
    </div>
    </div>
    <br>

    <a href="/pelicula" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  @endsection('contenido')