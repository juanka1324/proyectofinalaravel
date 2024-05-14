@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Carros Disponibles</h1>
            <div class="row">
                @foreach($cars as $car)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $car->image ? asset('storage/'.$car->image) : asset('storage/default-image.jpg') }}" class="card-img-top" alt="{{ $car->brand }} {{ $car->model }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->brand }} {{ $car->model }}</h5>
                            <p class="card-text"><strong>Año:</strong> {{ $car->year }}</p>
                            <p class="card-text"><strong>Color:</strong> {{ $car->color }}</p>
                            <p class="card-text"><strong>Precio:</strong> {{ $car->price }}</p>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">Ver detalles</a>
                            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este carro?')">Eliminar</button>
                    </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('cars.create') }}" class="btn btn-success">Agregar nuevo carro</a>
            </div>
        </div>
    </div>
</div>
@endsection
