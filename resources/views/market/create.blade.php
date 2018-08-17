@extends('layouts.app')

@section('title','Crear Producto')

@section('content')
    <form class="form-group" method="POST" action="/producto">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
@endsection