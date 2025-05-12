@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Emprendedor</h1>

    @if ($errors->any())
        <div class="alert alert-danger"><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('emprendedores.update', $emprendedore) }}" method="POST">
        @csrf
        @method('PUT')
        @include('emprendedores.form', ['emprendedore' => $emprendedore])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('emprendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
