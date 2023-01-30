@extends('layouts.PlantillaBase')

@section('contenido')
<form action="/productos" method="POST">
    @csrf
    <div class='mb-3'>
        <label for="" class="form-label title">Nombre</label>
        <input class="form-control text" id="nombre" name="nombre" type="text" tabindex="1">
    </div>
    <div class='mb-3'>
        <label for="" class="form-label title">Unidad</label>
        <input class="form-control text" id="unidad" name="unidad" type="text" tabindex="2">
    </div>
    <div class='mb-3'>
        <label for="" class="form-label title">Precio</label>
        <input class="form-control text" id="precio" name="precio" type="number" tabindex="2">
    </div>
    <div class='mb-3'>
        <label for="" class="form-label title">Descripción</label>
        <input class="form-control text" id="descripcion" name="descripcion" type="text" tabindex="3">
    </div>
    <div class='mb-3'>
        <label for="" class="form-label title">Cantidad</label>
        <input class="form-control text" id="cantidad" name="cantidad" type="text" tabindex="4">
    </div>
    <div class='mb-4'>
        <a href="/productos" class='btn-icon btn-create' tabindex="6">
            <span class="btn-span">CANCELAR</span>
        </a>
        <button type="submit" class='btn-icon btn-create' tabindex="7">
            <span class="btn-span">GUARDAR</span>
        </button>
    </div>
</form>
@endsection