<!-- resources/views/categories/create.blade.php -->

@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Nueva Categoría</h2>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Categoría</button>
                </form>
            </div>
        </div>
    </div>
@endsection
