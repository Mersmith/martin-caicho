@if (!empty($p_elemento) && !empty($p_elemento->contenido))

@php
$p = $p_elemento->contenido;

$titulo = $p['titulo'];
$subtitulo = $p['subtitulo'];

@endphp

<div class="partials_contenedor_encabezado">
    @if (!empty($titulo))
    <h2>{!! $titulo !!}</h2>
    @endif

    @if (!empty($subtitulo))
    <p>{!! $subtitulo !!}</p>
    @endif
</div>
@endif