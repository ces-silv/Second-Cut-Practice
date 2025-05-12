@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Feria</h1>

    <div class="mb-3"><strong>Nombre:</strong> {{ $feria->name }}</div>
    <div class="mb-3"><strong>Fecha:</strong> {{ $feria->date }}</div>
    <div class="mb-3"><strong>Lugar:</strong> {{ $feria->place }}</div>
    <div class="mb-3"><strong>Dirección:</strong> {{ $feria->address }}</div>
    <div class="mb-3"><strong>Descripción:</strong><br> {{ $feria->description }}</div>

    <div class="mb-3">
        <strong>Emprendedores participantes:</strong>
        @if($feria->emprendedores->isEmpty())
            <p class="text-muted">No hay emprendedores asignados a esta feria.</p>
        @else
            <ul class="list-group">
                @foreach($feria->emprendedores as $emprendedor)
                    <li class="list-group-item">{{ $emprendedor->name }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <a href="{{ route('ferias.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
