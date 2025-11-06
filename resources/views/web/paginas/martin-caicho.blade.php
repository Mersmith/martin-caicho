@extends('layouts.app')

@section('titulo', 'Martin Caicho')

@section('contenido')

@include('partials.bloque-5', ['p_elemento' => $bloque5_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @include('partials.bloque-6', ['p_elemento' => $bloque6_1])

            @include('partials.bloque-2', ['p_elemento' => $bloque2_1])

            @include('partials.bloque-2', ['p_elemento' => $bloque2_2])

            @include('partials.bloque-2', ['p_elemento' => $bloque2_3])

            @include('partials.bloque-7', ['p_elemento' => $bloque7_1])
        </div>
    </div>
</div>

<div class="g_margin_top_70">
    @include('partials.bloque-4', ['p_elemento' => $bloque4_1])
</div>

@endsection