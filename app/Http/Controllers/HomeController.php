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

        $noticias = $this->getNoticias();

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

    public function getNoticias()
    {
        $consulta_id = 1;

        $titulo = 'Noticias';

        $data = Noticia::where('estado', true)->latest()->take(6)->get();

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'posts' => $data,
        ];
    }
}
