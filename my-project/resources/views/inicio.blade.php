@extends('plantilla')
@section('body')
    <div class="row row-cols-1 row-cols-md-2">
        @foreach ($cargarChollos as $chollo)
            <div class="col mb-4">
                <div class="chollo">
                    <img src="..." class="card-img-top" alt="{{$chollo->id}}Chollo-chollo-severo.jpg">
                    <div class="card-body">
                        <h5 class="card-title">{{$chollo->titulo}}</h5>
                        <div class="price">
                            <div class="row">
                              <div class="col">
                                <p>{{$chollo->precio}}</p>
                              </div>
                              <div class="col">
                                <p>{{$chollo->precio_descuento}}</p>
                              </div>
                            </div>
                        <p class="card-text">{{$chollo->descripcion}}</p>
                        <a class="btn btn-primary" href="{{route('chollo_producto',$chollo->id)}}" role="button">Ir al chollo</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
