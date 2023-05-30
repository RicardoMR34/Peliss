@extends('layouts.plantillabase')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js">
@endsection
@section('contenido')
<h1 class="bg-primary text-white text-center">Generos y Peliculas</h1>
    <a href="GP/create" class="btn btn-info my-4">Crear Registro</a> <br>

    <table id="dp" class="table table-bordered table-striped shadow-lg mt-4">

        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Genero</th>
                <th scope="col">Pelicula</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($generopeliculas as $generopelicula)
                <tr>
                    <td>{{$generopelicula->id}}</td>
                    <td name="actorID">{{$generopelicula->generoID}}</td>
                    <td name="peliculaID">{{$generopelicula->peliculaID}}</td>
                    <td>
                        <form action="{{ route('GP.destroy', [$generopelicula->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('/GP/'.$generopelicula->id.'/edit')}}" class="btn btn-success">Consultar</a>
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
        $('#dp').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        });
    } );
</script>

@endsection
@endsection