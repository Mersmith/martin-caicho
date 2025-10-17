@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="g_contenedor_pagina">

        @include('partials.slider-principal', ['p_elemento' => $sliders])

        <div class="g_centrar_pagina">
            <div class="g_pading_pagina g_gap_pagina g_margin_top_40">

                @include('partials.bloque-1')

                @include('partials.bloque-2', ['p_elemento' => $imagenes])
              
                {{-- Noticias --}}
                @include('partials.slider-post', [
                    'p_elemento' => $noticias,
                ])

            </div>
        </div>
    </div>
@endsection
