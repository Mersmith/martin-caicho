@php
    $p = $p_elemento->contenido; // ya viene como array por el cast

    $titulo = $p['titulo'] ?? null;
    $titulo_descripcion = $p['titulo_descripcion'] ?? null;

    $imagen = asset($p['imagen'] ?? 'assets/imagen/default.jpg');
    $imagen_seo = $p['imagen_seo'] ?? 'Imagen del bloque';
    $subtitulo = $p['subtitulo'] ?? '';
    $subtitulo_descripcion = $p['subtitulo_descripcion'] ?? '';
    $lista = $p['lista'] ?? [];
    $boton = $p['boton'] ?? [];

    $boton_icono = $boton['icono'] ?? 'fa-solid fa-link';
    $boton_link = $boton['link'] ?? '#';
    $boton_texto = $boton['texto'] ?? 'Leer más';
    $boton_color = $boton['fondo_color'] ?? '#007bff';
@endphp

@include('partials.encabezado', [
    'titulo' => $titulo,
    'descripcion' => $titulo_descripcion,
])

<section class="bloque_1">
    <div class="bloque_imagen">
        <img src="{{ $imagen }}" alt="{{ $imagen_seo }}">
    </div>

    <div class="bloque_cuerpo">
        <h3>{!! $subtitulo ?: 'Título por defecto' !!}</h3>
        <p>{!! $subtitulo_descripcion ?: 'Texto descriptivo del bloque.' !!}</p>

        @if (!empty($lista) && is_array($lista))
            <ul>
                @foreach ($lista as $item)
                    <li>
                        @if (!empty($item['icono']))
                            <i class="{{ $item['icono'] }}" style="color: {{ $item['icono_color'] ?? '#000' }}"></i>
                        @endif
                        <span style="color: {{ $item['texto_color'] ?? '#000' }}">
                            {{ $item['texto'] ?? '' }}
                        </span>
                    </li>
                @endforeach
            </ul>
        @endif

        @if (!empty($boton_link) && !empty($boton_texto))
            <a href="{{ $boton_link }}" target="_blank" class="btn-whatsapp"
               style="background-color: {{ $boton_color }};">
                <i class="{{ $boton_icono }}"></i> {{ $boton_texto }}
            </a>
        @endif
    </div>
</section>
