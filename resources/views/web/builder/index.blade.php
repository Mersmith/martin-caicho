@extends('layouts.app')

@section('titulo', $pagina->titulo ?: '')
@section('descripcion', $pagina->meta_description ?: '')

@section('meta_title', $pagina->meta_titulo ?: '')
@section('meta_description', $pagina->meta_description ?: '')

@section('contenido')
<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @foreach ($bloques as $bloque)
            @include('partials.' . $bloque["tipo"], ['p_elemento' => $bloque["seccion"]])
            @endforeach
        </div>
    </div>
</div>
@endsection