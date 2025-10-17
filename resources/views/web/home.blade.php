@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    @include('partials.slider-principal', ['p_elemento' => $sliders])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina g_margin_top_40">

            @include('partials.bloque-1')

            @include('partials.bloque-2', ['p_elemento' => $imagenes])

        </div>
    </div>

    @include('partials.call-to-action')

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina g_margin_top_40">

            @include('partials.slider-post', ['p_elemento' => $noticias])
        </div>
    </div>
@endsection
