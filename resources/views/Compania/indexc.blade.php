@extends('layouts.plantillabase')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js">
@endsection
@section('contenido')
<h1 class="bg-primary text-white text-center">Casa Productora</h1>
    <a href="compania/create" class="btn btn-info my-4">Crear Registro</a> <br>

    <table id="compania" class="table table-bordered table-striped shadow-lg mt-4">

        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companias as $compania)
                <tr>
                    <td>{{$compania->id}}</td>
                    <td>{{$compania->name}}</td>
                    <td>
                        <form action="{{ route('compania.destroy', [$compania->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('/compania/'.$compania->id.'/edit')}}" class="btn btn-info">Editar</a>
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
        $('#compania').DataTable({
            "lengthMenu":[[8,15,50,-1],[8,15,50,"All"]]
        });
    } );
</script>

@endsection
@endsection