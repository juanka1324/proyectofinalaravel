@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Panel de Administración</h1>
            <p>Bienvenido al panel de administración. Aquí puedes gestionar tus recursos y configuraciones.</p>
            <div class="mt-4">
                <a href="{{ route('users.index') }}" class="btn btn-primary mr-2">Usuarios</a>
                <a href="{{ route('categories.index') }}" class="btn btn-primary mr-2">Categorías</a>
                <a href="{{ route('cars.index') }}" class="btn btn-primary">Carros</a>
            </div>
        </div>
    </div>
</div>
@endsection
