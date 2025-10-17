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

        $imagenes = $this->getImagenes();

        return view('web.home', compact('candidato', 'sliders', 'noticias', 'imagenes'));
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

    public function getImagenes()
    {
        $consulta_id = 1;

        $titulo = 'Imagenes';

        $data = [
            [
                'id' => 1,
                'titulo' => 'Imagen 1',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
            [
                'id' => 2,
                'titulo' => 'Imagen 2',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
            [
                'id' => 3,
                'titulo' => 'Imagen 3',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
        ];

        return [
            'id' => $consulta_id,
            'titulo' => $titulo,
            'imagenes' => $data,
        ];
    }
}
