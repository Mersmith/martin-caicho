<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        $bloque1_1 = app(SeccionController::class)->getSeccionPorTipo(1, 'bloque_1');
        $bloque2_1 = app(SeccionController::class)->getSeccionPorTipo(3, 'bloque_2');
        //dd($bloque2_1);

        $noticias = $this->getNoticias();

        $imagenes = $this->getImagenes();

        return view('web.home', compact('bloque1_1', 'bloque2_1', 'noticias', 'imagenes'));
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
                'titulo' => 'Empresario',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
            [
                'id' => 2,
                'titulo' => 'Escritor',
                'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
            ],
            [
                'id' => 3,
                'titulo' => 'Líder',
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
