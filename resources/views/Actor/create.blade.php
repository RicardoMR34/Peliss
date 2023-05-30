@extends('layouts.plantillabase')
@section('contenido')
<h2>Crear Registro</h2>

  <form action="/Actor" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre (s)</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('nombre')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
        <input type="text" name="apellPat" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('apellPat')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
        <input type="text" name="apellMat" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('apellMat')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Genero</label>
    <select id="inputState" name="genero" class="form-select">
      <option selected>Femenino</option>
      <option>Masculino</option>
    </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="date" class="form-label">Fecha de Nacimiento</label>
    <div class="col-5">
      <div class="input-group date" id="datepicker">
        <input type="date" name="fechaNac" class="form-control" id="date"/>
        @error('fechaNac')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>
    </div>
    <br>

    <a href="/Actor" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection('contenido')