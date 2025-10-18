<section class="bloque_1">
    <!-- Imagen -->
    <div class="bloque_imagen">
        <img src="{{ $imagen ?? asset('assets/imagen/default.jpg') }}" alt="{{ $alt ?? 'Imagen' }}">
    </div>

    <!-- Contenido -->
    <div class="bloque_cuerpo">
        <h3>{!! $titulo ?? 'Título por defecto' !!}</h3>
        <p>{!! $descripcion ?? 'Texto descriptivo del bloque.' !!}</p>

        @if (!empty($items) && is_array($items))
            <ul>
                @foreach ($items as $item)
                    <li>
                        @if (!empty($item['icono']))
                            <i class="{{ $item['icono'] }}"></i>
                        @endif
                        {{ $item['texto'] ?? '' }}
                    </li>
                @endforeach
            </ul>
        @endif

        @if (!empty($boton_link) && !empty($boton_texto))
            <a href="{{ $boton_link }}" target="_blank" class="btn-whatsapp">
                <i class="{{ $boton_icono ?? 'fa-brands fa-whatsapp' }}"></i> {{ $boton_texto }}
            </a>
        @endif
    </div>
</section>
