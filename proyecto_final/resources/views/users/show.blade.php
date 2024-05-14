@extends('layouts.base')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
