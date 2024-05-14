@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Editar Carro</h1>
            <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="brand">Marca</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}" required>
                </div>
                <div class="form-group">
                    <label for="model">Modelo</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}" required>
                </div>
                <div class="form-group">
                    <label for="year">Año</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}" required>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{ $car->color }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $car->price }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <small class="form-text text-muted">Deja este campo vacío si no deseas cambiar la imagen.</small>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
