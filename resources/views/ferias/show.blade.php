@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-semibold text-white mb-6">Detalles de la Feria</h1>

    <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg space-y-4">
        <div>
            <span class="font-semibold">Nombre:</span> {{ $feria->name }}
        </div>
        <div>
            <span class="font-semibold">Fecha:</span> {{ \Carbon\Carbon::parse($feria->date)->format('d/m/Y') }}
        </div>
        <div>
            <span class="font-semibold">Lugar:</span> {{ $feria->place }}
        </div>
        <div>
            <span class="font-semibold">Dirección:</span> {{ $feria->address }}
        </div>
        <div>
            <span class="font-semibold">Descripción:</span><br>
            <p class="mt-1 text-gray-300">{{ $feria->description }}</p>
        </div>

        <div>
            <span class="font-semibold">Emprendedores participantes:</span>
            @if($feria->emprendedores->isEmpty())
                <p class="text-gray-400 mt-1">No hay emprendedores asignados a esta feria.</p>
            @else
                <ul class="mt-2 space-y-2">
                    @foreach($feria->emprendedores as $emprendedor)
                        <li class="bg-gray-800 p-3 rounded-md shadow-sm">
                            {{ $emprendedor->name }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('ferias.index') }}" 
           class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:shadow-xl hover:scale-105 transition duration-300">
            ← Volver al listado
        </a>
    </div>
</div>
@endsection
