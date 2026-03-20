<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar comidas</title>
</head>
<body>
     @extends('layouts.app')

    @section('content')

    <h1>EDITAR COMIDA: {{ $comida->nombre }}</h1>
    <form action="" method="POST">
         @csrf
        <!-- Indicar método para actualizar un registro -->
        @method('PUT')
        <input value="{{ $comida->nombre }}" type="text" name="nombre" placeholder="Nombre" class="form-control">
        <br>
        <input value="{{ $comida->Disponibilidad }}" type="text" name="Disponibilidad" placeholder="Disponibilidad" class="form-control">
        <br>
        <input value="{{ $comida->Precio }}" type="number" name="Precio" placeholder="Precio" class="form-control">
        <br>
        <input value="{{ $comida->Descripcion }}" type="text" name="Descripcion" placeholder="Descripcion" class="form-control">
        <br>
        <input value="{{ $comida->Tipo de comida }}" type="text" name="Tipo de comida" placeholder="Tipo de comida" class="form-control">
        <br>
        <input value="{{ $comida->Categoria }}" type="text" name="Categoria" placeholder="Categoria" class="form-control">
        <br>
        <input value="{{ $comida->Stock }}" type="number" name="Stock" placeholder="Stock" class="form-control">
        <br>

        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>

    </form>

    <div>
        <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('comida.index') }}" class="btn btn-danger">
            <i class="fa-solid fa-rotate-left"></i> Regresar
        </a>
    </div>
    </div>
    
    @endsection
</body>
</html>