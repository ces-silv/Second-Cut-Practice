@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Feria</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('ferias.store') }}" method="POST">
        @csrf
        @include('ferias.form')
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('ferias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
