@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-3xl px-4 py-6">
    <!-- Título en blanco -->
    <h1 class="text-3xl font-bold text-white mb-6">Editar Feria</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">¡Ups!</strong>
            <span>Hay algunos problemas con tus datos:</span>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ferias.update', $feria) }}" method="POST" class="bg-gray-900 p-6 rounded-lg shadow-lg border border-gray-700">
        @csrf
        @method('PUT')
        @include('ferias.form', ['feria' => $feria])
        
        <div class="mt-6 flex justify-start gap-4">
            <!-- Botón de Guardar -->
            <button type="submit"
                class="bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 transition duration-300">
                Actualizar
            </button>
            
            <!-- Botón de Cancelar -->
            <a href="{{ route('ferias.index') }}"
                class="bg-gray-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:bg-gray-600 transition duration-300">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
