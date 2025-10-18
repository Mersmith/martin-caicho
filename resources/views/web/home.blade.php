@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    @include('partials.slider-principal', ['p_elemento' => $sliders])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Fumigación, Desinfección y Limpieza <span>Profesional</span>',
                    'descripcion' => 'Protege tu hogar, empresa o industria con nuestros servicios especializados.
                                                                                      Ofrecemos fumigación efectiva, <span>desinfección certificada</span> y limpieza integral con productos
                                                                                      seguros y de alta calidad. Tu tranquilidad es nuestra prioridad.',
                ])

                @include('partials.bloque-1')
            </div>

            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Fumigación, Desinfección, Limpieza y Sanitización',
                    'descripcion' => 'Te ofrecemos soluciones al alcance de tus manos: fumigación efectiva e integral, servicios preventivos,
                                                                                      limpieza y desinfección industrial. Con la calidad y confianza que nos caracteriza, también te brindamos el
                                                                                      mejor catálogo en productos nacionales e importados.',
                ])

                @include('partials.bloque-2', ['p_elemento' => $imagenes])
            </div>
        </div>
    </div>

    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Protege tu hogar y tu negocio',
            'subtitulo' =>
                'Elimina plagas y asegura un ambiente limpio y saludable con nuestros servicios profesionales.',
            'negrita' => '¡Confía en expertos certificados!',
            'link' => '/contacto',
            'boton' => '¡Cotiza Ahora!',
        ])
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
