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
            @include('partials.bloque-2', ['p_elemento' => $bloque3_1])
        </div>
    </div>
</div>

<div class="g_margin_top_70">
    @include('partials.call-to-action', ['p_elemento' => $bloque4_1])
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