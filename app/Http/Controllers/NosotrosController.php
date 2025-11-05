<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque_5');
        $bloque6_1 = app(SeccionController::class)->getSeccionPorTipo(6, 'bloque_6');

        $bloque2_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque_2');
        $bloque2_2 = app(SeccionController::class)->getSeccionPorTipo(2, 'bloque_2');

        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque_4');
        $bloque7_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque_7');

        return view('web.nosotros', compact('bloque5_1', 'bloque6_1', 'bloque2_1', 'bloque2_2', 'bloque4_1', 'bloque7_1'));
    }
}
