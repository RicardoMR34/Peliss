@extends('layouts.plantillabase')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js">
@endsection
@section('contenido')
<h1 class="bg-primary text-white text-center">Actores y Peliculas</h1>
    <a href="AP/create" class="btn btn-info my-4">Crear Registro</a> <br>

    <table id="ap" class="table table-bordered table-striped shadow-lg mt-4">

        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Actor</th>
                <th scope="col">Pelicula</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actorpeliculas as $actorpelicula)
                <tr>
                    <td>{{$actorpelicula->id}}</td>
                    <td name="actorID">{{$actorpelicula->actorID}}</td>
                    <td name="peliculaID">{{$actorpelicula->peliculaID}}</td>
                    <td>
                        <form action="{{ route('AP.destroy', [$actorpelicula->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('/AP/'.$actorpelicula->id.'/edit')}}" class="btn btn-success">Consultar</a>
                            <!--<a href="{{url('/AP/'.$actorpelicula->id.'/show')}}" class="btn btn-success">Consultar Nombres</a>-->
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
        $('#ap').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        });
    } );
</script>

@endsection
@endsection