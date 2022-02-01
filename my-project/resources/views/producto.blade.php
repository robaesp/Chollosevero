@extends('plantilla')
@section('body')
<div class="card mb-3">
    <img src="..." class="card-img-top" alt=""{{$cargarChollo->id}}Chollo-chollo-severo.jpg"">
    <div class="card-body">
      <h5 class="card-title">{{$cargarChollo->titulo}}</h5>
      <p class="card-text">{{$cargarChollo->puntuacion }}</p>
      <p class="card-text">{{$cargarChollo->descripcion }}</p>
      <p class="card-text">{{$cargarChollo->categoria }}</p>
      <p class="card-text">{{$cargarChollo->url }}</p>
      <p class="card-text">{{$cargarChollo->precio }}</p>
      <p class="card-text">{{$cargarChollo->precio_descuento }}</p>
      <p class="card-text"><small class="text-muted">{{$cargarChollo->timestamps}}</small></p>
      <a class="btn btn-primary" href="{{route('chollo_editar',$cargarChollo->id)}}" role="button">Editar</a>
      <a class="btn btn-danger" href="{{route('chollo_borrar',$cargarChollo->id)}}" role="button">Borrar</a>
    </div>
  </div>
@endsection