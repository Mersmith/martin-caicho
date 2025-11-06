<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFormulario extends Model
{
    /** @use HasFactory<\Database\Factories\TipoFormularioFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'activo',
    ];

    public function formularioPaginaContacto()
    {
        return $this->hasMany(FormularioPaginaContacto::class);
    }

    public function formularioLibroReclamacion()
    {
        return $this->hasMany(FormularioLibroReclamacion::class);
    }

    public function formularioLandingLibro()
    {
        return $this->hasMany(FormularioLandingLibro::class);
    }
}
