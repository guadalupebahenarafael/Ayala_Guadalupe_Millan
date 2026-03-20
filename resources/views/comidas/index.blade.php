<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver comidas</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <h1>Comidas</h1>

    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('comidas.create') }}" class="btn btn-success me-3">
        <i class="fa-solid fa-plus"></i> Nuevas comidas
        </a>
        <form action="{{ route('cerrar') }}" method="POST">
            @csrf

            <button class="btn btn-danger me-3">Cerrar sesión</button>
        </form>
        @if(auth()->user()->is_admin)
            <a href="{{ route('admin-dashboard') }}" class="btn btn-secondary">
                Panel Admin
            </a>
        @endif
    </div>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Disponibilidad</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Tipo de comida</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($comidas as $comida)
            <tr>
                <td>{{ $comida->id }}</td>
                <td>{{ $comida->nombre }}</td>
                <td>{{ $comida->Disponibilidad }}</td>
                <td>{{ $comida->Precio }}</td>
                <td>{{ $comida->Descripcion }}</td>
                <td>{{ $comida->Tipo_de_comida }}</td>
                <td>{{ $comida->Categoria }}</td>
                <td>{{ $comida->Stock }}</td>
                <td>
                    <a href="{{ route('comidas.edit', $comida) }}" >
                        <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>  
                    </a>
                    <form action="{{ route('comidas.destroy', $comida) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                            <button 
                                class="btn btn-danger"
                                onclick="return confirm('¿Eliminar el registro?')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
    @endsection
    
</body>
</html>