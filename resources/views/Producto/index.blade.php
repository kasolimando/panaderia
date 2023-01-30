@extends('layouts.PlantillaBase')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bulma.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bulma.min.css" rel="stylesheet">

@endsection

@section('contenido')

    <a href="productos/create" class="btn-icon btn-create">
        <span class="btn-span">CREAR</span>
    </a>
    <div class="div-table">
        <table id="productos" class="table is-striped responsive nowrap shadow-lg is-hoverable" style="width:100%">
        <thead>
            <tr class="head">
                <th class="text" scope='col'>Nombre</th>
                <th class="text" scope='col'>Precio</th>
                <th class="text" scope='col'>Descripción</th>
                <th class="text" scope='col'>Cantidad</th>
                <th class="text" scope='col'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>
                        <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
                            <a href="/" class="btn-icon btn-create">
                                <span class="btn-span">EDITAR</span>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-icon btn-create">
                                <span class="btn-span">ELIMINAR</span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bulma.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bulma.min.js"></script>
<script>
$(document).ready(function () {
    $('#productos').DataTable();
});
</script> 
@endsection
