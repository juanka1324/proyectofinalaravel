@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Categorías</h1>
            <div class="mb-3">
                <a href="{{ route('categories.create') }}" class="btn btn-success">Agregar Categoría</a>
                <a href="{{ route('cars.create') }}" class="btn btn-primary">Añadir nuevo carro</a>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">Descripción: {{ $category->description }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">Ver detalles</a>
                                <div>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta categoría?')">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
