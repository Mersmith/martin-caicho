@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    @include('partials.slider-principal', ['p_elemento' => $sliders])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina">
            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'Soy Martín Caicho <span>Autor y Emprendedor Peruano</span>',
                    'descripcion' => 'Desde El Agustino para el Perú. Empresario, comunicador y apasionado por el desarrollo social. 
                                                                                     Autor del libro <span>“Perú, Tierra de Incautos”</span>, una mirada crítica y reflexiva sobre nuestra realidad nacional,
                                                                                     con el deseo de inspirar un cambio verdadero basado en valores, trabajo y esperanza.',
                ])


                @include('partials.bloque-1', [
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'alt' => 'Martín Caicho Autor Peruano',
                    'titulo' => 'Soy un <span>pensador</span> comprometido con el futuro del Perú',
                    'descripcion' => 'Combino mi experiencia como empresario y en gestión pública con mi vocación por el periodismo y la reflexión social. 
                                                      A través de mi obra, busco despertar conciencia, promover la participación ciudadana y contribuir al cambio que nuestro país necesita.',
                    'items' => [
                        [
                            'icono' => 'fa-solid fa-book-open',
                            'texto' => 'Autor de mi libro “Perú, Tierra de Incautos”',
                        ],
                        [
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Comparto ideas que inspiran el cambio social y político',
                        ],
                        [
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Cuento con experiencia en el sector empresarial y gestión pública',
                        ],
                        [
                            'icono' => 'fa-solid fa-microphone',
                            'texto' => 'Expreso mi voz crítica y analítica desde el periodismo independiente',
                        ],
                    ],
                    'boton_icono' => 'fa-solid fa-book',
                    'boton_link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                    'boton_texto' => 'Conoce más sobre mi libro',
                ])

            </div>

            <div class="g_contenedor_columna">
                @include('partials.encabezado', [
                    'titulo' => 'También <span>soy:</span>',
                    'descripcion' => 'Soy un vecino del Agustino que combina la experiencia empresarial con una profunda pasión por la comunicación y el desarrollo social. 
                                      En mi libro, invito a reflexionar sobre nuestra realidad nacional y a construir, desde la acción y la conciencia, un Perú más justo y con oportunidades para todos.',
                ])

                @include('partials.bloque-2', ['p_elemento' => $imagenes])
            </div>
        </div>
    </div>

    <div class="g_margin_top_70">
        @include('partials.call-to-action', [
            'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
            'titulo' => 'Descarga mi libro que todo peruano debe leer',
            'subtitulo' => '“Perú, Tierra de Incautos”, una mirada crítica y constructiva.',
            'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
            'boton' => 'Registrate y descarga',
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
