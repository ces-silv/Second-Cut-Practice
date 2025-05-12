@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Emprendedor</h1>

    <p><strong>Nombre:</strong> {{ $emprendedore->name }}</p>
    <p><strong>Teléfono:</strong> {{ $emprendedore->phone_number }}</p>
    <p><strong>Producto:</strong> {{ $emprendedore->product }}</p>

    <a href="{{ route('emprendedores.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
