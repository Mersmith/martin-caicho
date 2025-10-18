<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function libro()
    {
        $sliders = $this->getLandingSliderLibro(1);

        return view('web.landing.libro', compact('sliders'));
    }

    public function enviarLibro(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string|min:5',
            'telefono' => 'nullable|regex:/^[0-9]{9}$/',
            'asunto' => 'nullable|string|max:255',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El nombre debe contener solo texto válido.',
            'nombre.max' => 'El nombre no puede superar los 255 caracteres.',

            'email.required' => 'El campo correo es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',

            'mensaje.required' => 'El campo mensaje es obligatorio.',
            'mensaje.string' => 'El mensaje debe ser un texto válido.',
            'mensaje.min' => 'El mensaje debe tener al menos 5 caracteres.',

            'telefono.regex' => 'El número de teléfono debe tener exactamente 9 dígitos numéricos.',

            'asunto.string' => 'El asunto debe ser un texto válido.',
            'asunto.max' => 'El asunto no puede superar los 255 caracteres.',
        ]);

        Mensaje::create($request->all());

        return back()->with('success', 'Gracias por tu mensaje. ¡Te contactaremos pronto!');
    }

    public function getLandingSliderLibro($id)
    {
        $sliders = Slider::where('id', $id)
            ->where('activo', true)
            ->first();
        if ($sliders) {
            $sliders->imagenes = json_decode($sliders->imagenes, true);
        } else {
            $sliders = null;
        }

        return $sliders;
    }
}
