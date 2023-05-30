@extends('layouts.plantillabase')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js">
@endsection
@section('contenido')
<h1 class="bg-primary text-white text-center">Peliculas</h1>
    <a href="pelicula/create" class="btn btn-info my-4">Crear Registro</a> <br>

    <table id="pelicula" class="table table-bordered table-striped shadow-lg mt-4">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha Lanzamiento</th>
                <th>Duracion Minutos</th>
                <th>Calificacion</th>
                <th>Sinopsis</th>
                <th>Formato</th>
                <th>Compania</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peliculas as $pelicula)
            <tr>
                <td>{{$pelicula->id}}</td>
                <td>{{$pelicula->titulo}}</td>
                <td>{{$pelicula->anioLanzamiento}}</td>
                <td>{{$pelicula->longitudMinutos}}</td>
                <td>{{$pelicula->calificacion}}</td>
                <td>{{$pelicula->sinopsis}}</td>
                <td>{{$pelicula->Tipo}}</td>
                <td>{{$pelicula->Companias->name ??'none'}}</td>
                <td>
                    <form class="text-align-center" action="{{ route('pelicula.destroy', [$pelicula->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/pelicula/'.$pelicula->id.'/edit')}}" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#pelicula').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        });
    } );
</script>

@endsection
@endsection