<div class="contenedor_call_to_action">
    <img class="imagen" src="{{ asset($imagen) }}" alt="{{ $titulo }}">

    <div class="cuerpo">
        <div class="g_container">
            <h2>{{ $titulo }}</h2>
            <p>{{ $subtitulo }}</p>
            @if (!empty($negrita))
                <p><strong>{{ $negrita }}</strong></p>
            @endif
            @if (!empty($link) && !empty($boton))
                <a class="boton" href="{{ url($link) }}">{{ $boton }}</a>
            @endif
        </div>
    </div>
</div>
