@extends('layouts.app')

@section('titulo', 'Peru Tierra de Incautos - Martin Caicho')

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

                @include('partials.bloque-1', [
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'alt' => 'Servicio de Fumigación',
                    'titulo' => 'Soluciones <span>profesionales</span> para tu tranquilidad',
                    'descripcion' =>
                        'Ofrecemos servicios especializados en fumigación, limpieza y desinfección para hogares y empresas.',
                    'items' => [
                        ['icono' => 'fa-solid fa-bug', 'texto' => 'Control de plagas y fumigación garantizada'],
                        [
                            'icono' => 'fa-solid fa-shield-virus',
                            'texto' => 'Desinfección de ambientes y superficies',
                        ],
                        ['icono' => 'fa-solid fa-broom', 'texto' => 'Limpieza profunda para hogares y empresas'],
                        ['icono' => 'fa-solid fa-pump-soap', 'texto' => 'Sanitización con productos certificados'],
                    ],
                ])
            </div>
        </div>
    </div>

    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'align' => 'center',
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Protege tu hogar y tu negocio',
            'subtitulo' =>
                'Elimina plagas y asegura un ambiente limpio y saludable con nuestros servicios profesionales.',
            'negrita' => '¡Confía en expertos certificados!',
        ])
    </div>

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Fumigación, Desinfección y Limpieza <span>Profesional</span>',
                ])

                @include('partials.bloque-1', [
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'alt' => 'Servicio de Fumigación',
                    'titulo' => 'Soluciones <span>profesionales</span> para tu tranquilidad',
                    'descripcion' =>
                        'Ofrecemos servicios especializados en fumigación, limpieza y desinfección para hogares y empresas.',
                    'items' => [
                        ['icono' => 'fa-solid fa-bug', 'texto' => 'Control de plagas y fumigación garantizada'],
                        [
                            'icono' => 'fa-solid fa-shield-virus',
                            'texto' => 'Desinfección de ambientes y superficies',
                        ],
                        ['icono' => 'fa-solid fa-broom', 'texto' => 'Limpieza profunda para hogares y empresas'],
                        ['icono' => 'fa-solid fa-pump-soap', 'texto' => 'Sanitización con productos certificados'],
                    ],
                ])
            </div>
        </div>
    </div>

    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'align' => 'center',
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Protege tu hogar y tu negocio',
            'subtitulo' =>
                'Elimina plagas y asegura un ambiente limpio y saludable con nuestros servicios profesionales.',
            'negrita' => '¡Confía en expertos certificados!',
        ])
    </div>
@endsection
