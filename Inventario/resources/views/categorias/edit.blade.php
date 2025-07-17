@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Categoria</h1>

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $categoria->nombre }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
