<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(5, 'bloque_5');
        $bloque6_1 = app(SeccionController::class)->getSeccionPorTipo(6, 'bloque_6');

        $bloque2_1 = app(SeccionController::class)->getSeccionPorTipo(7, 'bloque_2');
        $bloque2_2 = app(SeccionController::class)->getSeccionPorTipo(8, 'bloque_2');
        $bloque2_3 = app(SeccionController::class)->getSeccionPorTipo(9, 'bloque_2');

        $bloque7_1 = app(SeccionController::class)->getSeccionPorTipo(10, 'bloque_7');
        $bloque4_1 = app(SeccionController::class)->getSeccionPorTipo(11, 'bloque_4');

        return view('web.nosotros', compact('bloque5_1', 'bloque6_1', 'bloque2_1', 'bloque2_2', 'bloque2_3', 'bloque4_1', 'bloque7_1'));
    }
}
