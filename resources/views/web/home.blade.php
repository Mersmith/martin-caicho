@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

@include('partials.slider-principal', ['p_elemento' => $bloque1_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">           
            @include('partials.bloque-1', ['p_elemento' => $bloque2_1])
        </div>

        <div class="g_contenedor_columna">
            @include('partials.encabezado', [
            'titulo' => 'También <span>soy:</span>',
            'descripcion' => 'Soy un vecino del Agustino que combina la experiencia empresarial con una profunda pasión
            por la comunicación y el desarrollo social.
            En mi libro, invito a reflexionar sobre nuestra realidad nacional y a construir, desde la acción y la
            conciencia, un Perú más justo y con oportunidades para todos.',
            ])

            @include('partials.bloque-2', ['p_elemento' => $imagenes])
        </div>
    </div>
</div>

<div class="g_margin_top_70">
    @include('partials.call-to-action', [
    'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
    'titulo' => 'Descarga mi libro que todo peruano debe leer',
    'subtitulo' => '“Perú, Tierra de Incautos”, una mirada crítica y constructiva.',
    'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
    'boton' => 'Registrate y descarga',
    ])
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @include('partials.titulo', [
            'p_contenido' => 'Noticias',
            'p_alineacion' => 'left',
            ])

            @include('partials.slider-post', ['p_elemento' => $noticias])
        </div>
    </div>
</div>
@endsection