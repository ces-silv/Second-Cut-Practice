@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Emprendedor</h1>

    @if ($errors->any())
        <div class="alert alert-danger"><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('emprendedores.store') }}" method="POST">
        @csrf
        @include('emprendedores.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('emprendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
