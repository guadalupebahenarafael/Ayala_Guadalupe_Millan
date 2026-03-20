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

    <h1>EDITAR COMIDA</h1>
    <form action="{{ route('comidas.update', $comida) }}" method="POST">
         @csrf
        <!-- Indicar método para actualizar un registro -->
        @method('PUT')
        <input value="{{ $comida->Nombre }}" type="text" name="Nombre" placeholder="Nombre" class="form-control">
        <br>
        <input value="{{ $comida->Disponibilidad }}" type="text" name="Disponibilidad" placeholder="Disponibilidad" class="form-control">
        <br>
        <input value="{{ $comida->Precio }}" type="number" name="Precio" placeholder="Precio" class="form-control">
        <br>
        <input value="{{ $comida->Descripcion }}" type="text" name="Descripcion" placeholder="Descripcion" class="form-control">
        <br>
         <select name="Tipo_de_comida" class="form-control">
                <option value="" disabled selected>-- Tipo de Alimento --</option>
                <option value="Individual">Individual</option>
                <option value="Combo">Combo</option>
        </select>
        <br>
        <select name="Categoria" class="form-control">
                <option value="" disabled selected>-- Categoría --</option>
                <option value="Snacks">Snacks</option>
                <option value="Helados">Helados</option>
                <option value="Dulces">Dulces</option>
                <option value="Promocionales">Promocionales</option>
        </select>
        <br>
        <input value="{{ $comida->Stock }}" type="number" name="Stock" placeholder="Stock" class="form-control">
        <br>

        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>

    </form>

    <div>
        <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('comidas.index') }}" class="btn btn-danger">
            <i class="fa-solid fa-rotate-left"></i> Regresar
        </a>
    </div>
    </div>
    
    @endsection
</body>
</html>