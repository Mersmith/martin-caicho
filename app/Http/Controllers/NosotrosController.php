<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        $bloque5_1 = app(SeccionController::class)->getSeccionPorTipo(4, 'bloque_5');
        $bloque6_1 = app(SeccionController::class)->getSeccionPorTipo(6, 'bloque_6');

        //dd($bloque6_1);

        return view('web.nosotros', compact('bloque5_1', 'bloque6_1'));
    }
}
