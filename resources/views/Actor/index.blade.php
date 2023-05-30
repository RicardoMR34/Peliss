@extends('layouts.plantillabase')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js">
@endsection
@section('contenido')
<h1 class="bg-primary text-white text-center">Actores</h1>
    <a href="Actor/create" class="btn btn-info my-4">Crear Registro</a> <br>

    <table id="actor" class="table table-bordered table-striped shadow-lg mt-4">

        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">nombre</th>
                <th scope="col">apellPat</th>
                <th scope="col">apellMat</th>
                <th scope="col">fechaNac</th>
                <th scope="col">genero</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actores as $actor)
                <tr>
                    <td>{{$actor->id}}</td>
                    <td>{{$actor->nombre}}</td>
                    <td>{{$actor->apellPat}}</td>
                    <td>{{$actor->apellMat}}</td>
                    <td>{{$actor->fechaNac}}</td>
                    <td>{{$actor->genero}}</td>
                    <td>
                        <form action="{{ route('Actor.destroy', [$actor->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('/Actor/'.$actor->id.'/edit')}}" class="btn btn-info">Editar</a>
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
        $('#actor').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        });
    } );
</script>

@endsection
@endsection
