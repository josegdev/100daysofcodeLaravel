@extends('layouts.app')

@section('title','Crear Producto')

@section('content')
    <form class="form-group" method="POST" action="/producto" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
@endsection