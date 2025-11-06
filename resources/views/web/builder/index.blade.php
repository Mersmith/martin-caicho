@extends('layouts.app')

@section('titulo', $pagina->titulo)

@section('contenido')
<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">

            <h2>{{ $pagina->titulo }}</h2>

            @foreach ($bloques as $bloque)
            @include('partials.' . $bloque["tipo"], ['p_elemento' => $bloque["seccion"]])
            @endforeach
        </div>
    </div>
</div>
@endsection