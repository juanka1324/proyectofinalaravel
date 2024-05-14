@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Crear Nuevo Carro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="brand">Marca</label>
                            <input type="text" name="brand" class="form-control" id="brand" required>
                        </div>

                        <div class="form-group">
                            <label for="model">Modelo</label>
                            <input type="text" name="model" class="form-control" id="model" required>
                        </div>

                        <div class="form-group">
                            <label for="year">Año</label>
                            <input type="number" name="year" class="form-control" id="year" required>
                        </div>

                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" name="color" class="form-control" id="color" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" name="price" class="form-control" id="price" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" name="image" class="form-control" id="image" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Carro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
