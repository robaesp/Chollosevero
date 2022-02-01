@extends('plantilla')
@section('body')
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Crear chollo</h3>
                <div class="card-text">
                    <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                    <form action="{{ route('form_post_crear') }}" method="POST">
                        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

                        <!-- to error: add class "has-danger" -->
                        <div class="form-group">
                            <label for="title">Nombre del chollo</label>
                            <input type="text" class="form-control form-control-sm" name="input_title" id="input_title">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control form-control-sm" name="input_description"
                                id="input_description">
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" class="form-control form-control-sm" name="input_url" id="input_url">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <input type="text" class="form-control form-control-sm" name="input_category"
                                id="input_category">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio normal</label>
                            <input type="number" class="form-control form-control-sm" name="input_price_old"
                                id="input_price_old">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Precio chollo</label>
                            <input type="number" class="form-control form-control-sm" name="input_price_new"
                                id="input_price_new">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Publicar chollo</button>
                        @if (session('mensaje'))
                            <div class="mensaje-nota-creada">
                                {{ session('mensaje') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
