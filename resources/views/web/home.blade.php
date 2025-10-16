@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="g_contenedor_pagina">

        @include('partials.slider-principal', ['p_elemento' => $sliders])

        <div class="g_centrar_pagina">
            <div class="g_pading_pagina g_gap_pagina g_margin_top_40">

                {{-- Noticias --}}
                <h2 class="text-2xl font-semibold mb-4">Últimas noticias</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    @foreach ($noticias as $noticia)
                        <div class="bg-white p-4 rounded shadow">
                            <img src="{{ $noticia->imagen }}" alt="" class="rounded mb-2">
                            <h3 class="font-semibold text-lg">{{ $noticia->titulo }}</h3>
                            <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($noticia->contenido), 100) }}</p>
                            <a href="{{ route('noticias.show', $noticia->slug) }}" class="text-blue-600 text-sm">Leer
                                más</a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
