<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Añadir esta línea

class Producto extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'descripcion', 'precio_unitario', 'imagen', 'estatus', 'existencia'];
    protected $dates = ['deleted_at'];
    public $incrementing = false; // Indicar que no es una clave primaria autoincremental
}


