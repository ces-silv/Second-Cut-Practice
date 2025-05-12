@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-semibold text-white mb-6">Ferias</h1>

    <div class="mb-4">
    <a href="{{ route('ferias.create') }}" 
   class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-semibold px-6 py-3 rounded-lg shadow-lg border-2 border-white transform transition duration-300 hover:scale-105 hover:shadow-xl hover:bg-gradient-to-r hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 hover:border-white focus:outline-none">
    Crear nueva feria
</a>

        @if (session('success'))
            <div class="bg-green-600 text-white px-4 py-3 rounded shadow-md mt-6">
                {{ session('success') }}
            </div>
        @endif

    </div>

    <div class="overflow-x-auto shadow-md rounded-lg bg-black">
        <table class="w-full table-auto text-white">
            <thead class="bg-gray-900 text-white hidden md:table-header-group">
                <tr>
                    <th class="py-3 px-4 md:px-6 text-left">Nombre</th>
                    <th class="py-3 px-4 md:px-6 text-left">Fecha</th>
                    <th class="py-3 px-4 md:px-6 text-left">Lugar</th>
                    <th class="py-3 px-4 md:px-6 text-left">Dirección</th>
                    <th class="py-3 px-4 md:px-6 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ferias as $feria)
                    <tr class="border-b border-gray-700 hover:bg-gray-800 block md:table-row">
                        <!-- Celdas para móvil -->
                        <td class="md:hidden py-3 px-4 block" data-label="Nombre">
                            <div class="font-semibold inline-block w-24">Nombre:</div>
                            {{ $feria->name }}
                        </td>
                        <td class="md:hidden py-3 px-4 block" data-label="Fecha">
                            <div class="font-semibold inline-block w-24">Fecha:</div>
                            {{ \Carbon\Carbon::parse($feria->date)->format('d/m/Y') }}
                        </td>
                        <td class="md:hidden py-3 px-4 block" data-label="Lugar">
                            <div class="font-semibold inline-block w-24">Lugar:</div>
                            {{ $feria->place }}
                        </td>
                        <td class="md:hidden py-3 px-4 block" data-label="Dirección">
                            <div class="font-semibold inline-block w-24">Dirección:</div>
                            {{ $feria->address }}
                        </td>
                        
                        <!-- Celdas para desktop -->
                        <td class="hidden md:table-cell py-3 px-4 md:px-6">{{ $feria->name }}</td>
                        <td class="hidden md:table-cell py-3 px-4 md:px-6">{{ \Carbon\Carbon::parse($feria->date)->format('d/m/Y') }}</td>
                        <td class="hidden md:table-cell py-3 px-4 md:px-6">{{ $feria->place }}</td>
                        <td class="hidden md:table-cell py-3 px-4 md:px-6">{{ $feria->address }}</td>
                        
                        <!-- Acciones (común para ambos) -->
                        <td class="py-3 px-4 md:px-6">
                            <div class="flex flex-wrap gap-2">
                                <a href="{{ route('ferias.show', $feria) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs hover:bg-blue-700">
                                    <i class="bi bi-eye"></i> Ver
                                </a>
                                <a href="{{ route('ferias.edit', $feria) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md text-xs hover:bg-yellow-700">
                                    <i class="bi bi-pencil"></i> Editar
                                </a>
                                <form action="{{ route('ferias.destroy', $feria) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('¿Estás seguro?')" class="bg-red-500 text-white px-3 py-1 rounded-md text-xs hover:bg-red-700">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    @media (max-width: 767px) {
        td[data-label]::before {
            content: attr(data-label);
            font-weight: bold;
            display: inline-block;
            width: 100px;
        }
    }
</style>
@endsection
