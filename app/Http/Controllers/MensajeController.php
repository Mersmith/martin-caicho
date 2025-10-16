<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajeController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string|min:5',
        ]);

        Mensaje::create($request->all());

        return back()->with('success', 'Gracias por tu mensaje. ¡Te contactaremos pronto!');
    }
}
