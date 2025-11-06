@if (!empty($p_elemento) && !empty($p_elemento->contenido))

@php
$p = $p_elemento->contenido;

$titulo = $p['titulo'];
$titulo_descripcion = $p['titulo_descripcion'];
$lista = $p['lista'] ?? [];
@endphp

@include('partials.encabezado', [
'titulo' => $titulo,
'descripcion' => $titulo_descripcion,
])

@if (!empty($lista) && is_array($lista))
<div class="partials_contenedor_bloque_7">
    @foreach ($lista as $item)
    <div class="card">
        @if (!empty($item['icono']))
        <i class="{{ $item['icono'] }}"></i>
        @endif

        @if (!empty($item['subtitulo']))
        <h2>{!! $item['subtitulo'] !!}</h2>
        @endif

        @if (!empty($item['subtitulo_descripcion']))
        <p>{!! $item['subtitulo_descripcion'] !!}</p>
        @endif
    </div>
    @endforeach
</div>
@endif
@endif