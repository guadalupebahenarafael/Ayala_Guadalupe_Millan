<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Comidas</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <h1>Registro de Comidas</h1>
    <br>

    <form action="" method="POST">
        @csrf 
        <div class="input-group mb-3">
            <input type="text" name="nombre" placeholder="Nombre" class="form-control">
        </div>

        <div class="input-group mb-3">
            <input type="text" name="Disponibilidad" placeholder="Disponibilidad" class="form-control">
        </div>

        <div class="input-group mb-3">
            <input type="number" name="Precio" placeholder="Precio" class="form-control">
        </div>

        <div class="input-group mb-3">
            <input type="text" name="Descripcion" placeholder="Descripcion" class="form-control">
        </div>
        <div class="input-group mb-3">
            <input type="text" name="Tipo de comida" placeholder="Tipo de comida" class="form-control">
        </div>

        <div class="input-group mb-3">
            <input type="text" name="Categoria" placeholder="Categoria" class="form-control">
        </div>

        <div class="input-group mb-3">
            <input type="number" name="Stock" placeholder="Stock" class="form-control">   
        </div>
        
        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>

    </form>

    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('comidas.index') }}" class="btn btn-outline-success">
                <i class="fa-solid fa-eye"></i> Ver Comidas
        </a>
    </div>
    
</body>
</html>