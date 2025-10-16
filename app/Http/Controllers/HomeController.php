<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Noticia;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $candidato = Candidato::first();

        $sliders = $this->getWebSlidersPrincipal();

        //dd($sliders);

        $noticias = Noticia::where('estado', true)->latest()->take(3)->get();

        return view('web.home', compact('candidato', 'sliders', 'noticias'));
    }

    public function getWebSlidersPrincipal()
    {
        $consulta_id = 1;

        $data = Slider::where('estado', true)->orderBy('orden')->get();

        return [
            'id' => $consulta_id,
            'imagenes' => $data,
        ];
    }
}
