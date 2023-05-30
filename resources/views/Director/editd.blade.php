@extends('layouts.plantillabase')
@section('contenido')
<h2>Actualizar  Registro</h2>

  <form action="/Director/{{$director->id}}" method="POST">
  @csrf
  @method('PUT')  
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre (s)</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off"
        value="{{$director->nombre}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
        <input type="text" name="apellPat" class="form-control" id="exampleInputText1" 
        value="{{$director->apellPat}}" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
        <input type="text" name="apellMat" class="form-control"
        value="{{$director->apellMat}}" id="exampleInputText1" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Genero</label>
    <select id="inputState" name="genero" class="form-select" value="{{$director->genero}}">
      <option selected>{{$director->genero}}</option>
      <option>Femenino</option>
      <option>Masculino</option>
    </select>
    </div>
    <div class="col-md-4 mb-3">
    <label for="date" class="form-label" >Fecha de Nacimiento</label>
    <div class="col-5">
      <div class="input-group date" id="datepicker">
        <input type="date" name="fechaNac" class="form-control" id="date" value="{{$director->fechaNac}}"/>
      </div>
    </div>
    </div>
    <br>

    <a href="/Director" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection('contenido')