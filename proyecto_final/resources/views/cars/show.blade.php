@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $car->brand }} {{ $car->model }}</h2>
                    <p><strong>Año:</strong> {{ $car->year }}</p>
                    <p><strong>Color:</strong> {{ $car->color }}</p>
                    <p><strong>Precio:</strong> {{ $car->price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
