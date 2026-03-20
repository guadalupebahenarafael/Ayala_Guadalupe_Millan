<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comidas extends Model
{
    //Indicar los campos que si se pueden llenar
    protected $fillable = ['nombre', 'Disponibilidad', 'Precio', 'Descripcion', 'Tipo de comida', 'Categoria', 'Stock'];
}
