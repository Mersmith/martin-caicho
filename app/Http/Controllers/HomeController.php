<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Slider, Noticia, Candidato};

class HomeController extends Controller
{
    public function index()
    {
        $candidato = Candidato::first();
        $sliders = Slider::where('estado', true)->orderBy('orden')->get();
        $noticias = Noticia::where('estado', true)->latest()->take(3)->get();

        return view('web.home', compact('candidato', 'sliders', 'noticias'));
    }
}
