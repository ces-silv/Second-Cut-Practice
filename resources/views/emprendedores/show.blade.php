@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-semibold text-white mb-6">Detalles del Emprendedor</h1>

    <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg space-y-4">
        <div>
            <span class="font-semibold">Nombre:</span> {{ $emprendedore->name }}
        </div>
        <div>
            <span class="font-semibold">Teléfono:</span> {{ $emprendedore->phone_number }}
        </div>
        <div>
            <span class="font-semibold">Producto:</span> {{ $emprendedore->product }}
        </div>

        @if($emprendedore->ferias && $emprendedore->ferias->count() > 0)
            <div>
                <span class="font-semibold">Ferias en las que participa:</span>
                <ul class="mt-2 space-y-2">
                    @foreach($emprendedore->ferias as $feria)
                        <li class="bg-gray-800 p-3 rounded-md shadow-sm">
                            <a href="{{ route('ferias.show', $feria->id) }}" class="text-indigo-400 hover:underline">
                                {{ $feria->name }} – {{ \Carbon\Carbon::parse($feria->date)->format('d/m/Y') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @else
            <p class="text-gray-400">Este emprendedor no está registrado en ninguna feria actualmente.</p>
        @endif
    </div>

    <div class="mt-6">
        <a href="{{ route('emprendedores.index') }}" 
           class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:shadow-xl hover:scale-105 transition duration-300">
            ← Volver al listado
        </a>
    </div>
</div>
@endsection
