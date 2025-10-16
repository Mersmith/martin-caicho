<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::where('estado', true)->latest()->paginate(6);
        return view('web.noticias.index', compact('noticias'));
    }

    public function show($slug)
    {
        $noticia = Noticia::where('slug', $slug)->where('estado', true)->firstOrFail();
        return view('web.noticias.show', compact('noticia'));
    }
}
