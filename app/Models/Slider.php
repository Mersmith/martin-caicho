<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /** @use HasFactory<\Database\Factories\SliderFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo', 'subtitulo', 'imagen_computadora', 'imagen_movil', 'enlace', 'orden', 'estado',
    ];
}
