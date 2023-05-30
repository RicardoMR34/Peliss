@extends('layouts.plantillabase')
@section('contenido')
<h2>Crear Registro</h2>

  <form action="/pelicula" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="text" name="titulo" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('titulo')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sinopsis</label>
        <input type="text" name="sinopsis" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('sinopsis')
          <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Longitud en Minutos</label>
        <input type="text" name="longMinutos" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('longMinutos')
          <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Calificacion</label>
        <input type="number" value="0" name="calificacion" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('calificacion')
          <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Tipo</label>
    <select id="inputState" name="tipo" class="form-select">
      <option selected>Pelicula</option>
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
    <label for="date" class="form-label">Fecha de Estreno</label>
    <div class="col-5">
      <div class="input-group date" id="datepicker">
        <input type="date" name="fechaEstreno" class="form-control" id="date"/>
        @error('fechaEstreno')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>
    </div>
    <br>

    <a href="/pelicula" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection('contenido')