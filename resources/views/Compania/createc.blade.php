@extends('layouts.plantillabase')
@section('contenido')
<h2>Registrar Casa Productora</h2>

  <form action="/compania" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
        @error('nombre')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    <br>

    <a href="/compania" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection('contenido')