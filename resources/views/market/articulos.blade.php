@extends('layouts.app')

@section('title','Lista de Articulos')

@section('content')
<h1 class="text-center">
    Listado de Articulos
</h1>
<div class="container">
    <div class="row">
@foreach($Articulos as $articulo)
            <div class="col-sm">

            <div class="card">
    <div class="card-header">
        {{$articulo->nombre}}
    </div>
    <div class="card-body">
        @if ($articulo->imagen)
            <img src="images/{{$articulo->imagen}}" width="200px" height="200px">
        @endif
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/producto/{{$articulo->id}}" class="btn btn-primary">Go somewhere</a>
    </div>
            </div>
            </div>
    @endforeach
    </div>
</div>
@endsection