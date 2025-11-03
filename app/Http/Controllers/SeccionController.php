<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;

class SeccionController extends Controller
{
    public function getSeccion($id)
    {
        $seccion = Seccion::where('id', $id)
            ->where('tipo', 'bloque_1')
            ->where('activo', true)
            ->first();

        return $seccion;
    }
}
