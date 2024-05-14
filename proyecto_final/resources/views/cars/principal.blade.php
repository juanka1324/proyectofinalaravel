@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Carros Disponibles</h1>
            @foreach($categories as $category)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ $category->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse($category->cars as $car)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-8">
                                <a href="{{ route('cars.show', $car->id) }}">{{ $car->brand }} {{ $car->model }}</a>
                            </div>
                            <div class="col-md-4">
                                <span class="float-right">{{ $car->price }}</span>
                            </div>
                        </div>
                    </li>
                    @empty
                    <li class="list-group-item">No hay carros disponibles en esta categoría.</li>
                    @endforelse
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <p>¿Quieres administrar tu cuenta?</p>
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Iniciar sesión</a>
        </div>
    </div>
</div>
@endsection
