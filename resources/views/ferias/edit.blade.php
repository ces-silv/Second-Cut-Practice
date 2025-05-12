@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Feria</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('ferias.update', $feria) }}" method="POST">
        @csrf
        @method('PUT')
        @include('ferias.form', ['feria' => $feria])
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('ferias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
