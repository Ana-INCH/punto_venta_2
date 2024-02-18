<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Añadir esta línea

class Producto extends Model
{
    use SoftDeletes;
    protected $fillable = ['nombre', 'descripcion', 'precio_unitario', 'imagen', 'estatus', 'existencia'];


    protected $dates = ['deleted_at'];
}

