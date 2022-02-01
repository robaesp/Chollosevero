@extends('plantilla')
@section('body')
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Editar chollo {{$editarChollo->id}}</h3>
                <div class="card-text">
                    <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                    <form action="{{ route('form_post_editar', $editarChollo->id) }}" method="POST">
                        @method('PUT');
                        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

                        <!-- to error: add class "has-danger" -->
                        <div class="form-group">
                            <label for="title">Nombre del chollo</label>
                            <input type="text" class="form-control form-control-sm" name="input_title" id="input_title" value="{{ $editarChollo -> titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control form-control-sm" name="input_description" value="{{ $editarChollo -> descripcion }}"
                                id="input_description">
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" class="form-control form-control-sm" name="input_url" id="input_url" value="{{ $editarChollo -> url }}">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <input type="text" class="form-control form-control-sm" name="input_category" value="{{ $editarChollo -> categoria }}"
                                id="input_category">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio normal</label>
                            <input type="number" class="form-control form-control-sm" name="input_price_old" value="{{ $editarChollo -> precio }}"
                                id="input_price_old">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Precio chollo</label>
                            <input type="number" class="form-control form-control-sm" name="input_price_new" value="{{ $editarChollo -> precio_descuento }}"
                                id="input_price_new">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Editar chollo</button>
                        @if (session('mensaje'))
                            <div class="mensaje-chollo-editado">
                                {{ session('mensaje') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
