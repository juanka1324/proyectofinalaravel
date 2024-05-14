<!-- resources/views/categories/show.blade.php -->

@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>{{ $category->name }}</h1>
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Nombre:</strong> {{ $category->name }}</p>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
@endsection
