@extends('layouts.app')

@section('titulo', 'Martin Caicho')

@section('contenido')

@include('partials.banner', ['p_elemento' => $bloque5_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @include('partials.bloque-4', ['p_elemento' => $bloque6_1])

            @include('partials.bloque-1', ['p_elemento' => $bloque2_1])

            @include('partials.bloque-1', ['p_elemento' => $bloque2_2])

            @include('partials.bloque-1', ['p_elemento' => $bloque2_3])

            @include('partials.bloque-3', ['p_elemento' => $bloque7_1])
        </div>
    </div>
</div>

<div class="g_margin_top_70">
    @include('partials.call-to-action', ['p_elemento' => $bloque4_1])
</div>

@endsection