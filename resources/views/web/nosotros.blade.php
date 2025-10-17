@extends('layouts.app')

@section('titulo', 'Nosotros')

@section('contenido')

    @include('partials.banner', ['imagenUrl' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-1.jpg', 'titulo' => 'Nosotros'])

    <div class="g_centrar_pagina">
        <div class="g_pading_pagina g_gap_pagina g_margin_top_40">


            <div class="g_contenedor_columna">
                <!-- Introducción -->
                <div class="g_encabezado">
                    <h2>Líderes en control de plagas y <span>seguridad ambiental</span> en el Perú</h2>
                    <p>
                        Más de 20 años <strong> protegiendo hogares, empresas e industrias</strong> con servicios de
                        fumigación,
                        desinfección y
                        control integral. Contamos con <strong>especialistas certificados</strong>, equipos de última
                        tecnología
                        y soluciones
                        efectivas para garantizar ambientes seguros y saludables.
                    </p>
                </div>

                <!-- Razones para elegirnos -->
                <div class="razones_section">
                    <div class="g_encabezado">
                        <h2>¿Por qué elegirnos?</h2>
                    </div>

                    <!-- Grid de columnas alternadas -->
                    <div class="grid-columna invertir_movil">
                        <div class="imagen">
                            <img src="http://127.0.0.1:8000/assets/imagen/default.jpg" alt="Especialistas">
                        </div>
                        <div class="texto">
                            <h3>Expertos en seguridad y saneamiento integral</h3>
                            <p>Ofrecemos <strong> soluciones completas para proteger tu hogar, negocio e industria:</strong>
                                instalación de
                                cámaras de seguridad, sistemas contra incendios, venta y recarga de extintores, además de
                                servicios especializados en fumigación, limpieza y saneamiento ambiental. Todo con la
                                confianza
                                de un equipo certificado y comprometido con tu tranquilidad
                            </p>
                        </div>
                    </div>

                    <div class="grid-columna invertir_movil">
                        <div class="texto">
                            <h3>Sinergia en protección y bienestar</h3>
                            <p>Integramos seguridad electrónica, sistemas contra incendios, venta de extintores y servicios
                                de
                                saneamiento ambiental en un solo equipo multidisciplinario. <strong>Una combinación
                                    estratégica
                                    que
                                    garantiza ambientes seguros, saludables y protegidos.</strong></p>
                        </div>
                        <div class="imagen">
                            <img src="http://127.0.0.1:8000/assets/imagen/default.jpg" alt="Especialidades">
                        </div>
                    </div>

                    <div class="grid-columna invertir_movil">
                        <div class="imagen">
                            <img src="http://127.0.0.1:8000/assets/imagen/default.jpg" alt="Productos">
                        </div>
                        <div class="texto">
                            <h3>Seguridad, limpieza y confianza</h3>
                            <p>Implementamos <strong>tecnología certificada y productos de calidad</strong> para garantizar
                                protección,
                                prevención y ambientes seguros.</p>
                            <ul>
                                <li><i class="fa-solid fa-video"></i> Instalación de Cámaras de Seguridad</li>
                                <li><i class="fa-solid fa-bell"></i> Sistemas de Detectores de Alarma contra Incendio</li>
                                <li><i class="fa-solid fa-fire-extinguisher"></i> Sistemas de Red Contra Incendio</li>
                                <li><i class="fa-solid fa-shield-halved"></i> Venta y Recarga de Extintores</li>
                                <li><i class="fa-solid fa-shield-halved"></i> Capacitación de Uso y Manejo de Extintores
                                </li>
                                <li><i class="fa-solid fa-shield-halved"></i> Capacitación de Primeros Auxilios y Evacuación
                                </li>
                                <li><i class="fa-solid fa-leaf"></i> Saneamiento Ambiental</li>
                                <li><i class="fa-solid fa-bug-slash"></i> Fumigación y Limpieza</li>
                                <li><i class="fa-solid fa-bug-slash"></i> Limpieza Gruesa, Fina y Semi fina</li>
                                <li><i class="fa-solid fa-bug-slash"></i> Limpieza de Oficinas</li>
                                <li><i class="fa-solid fa-bug-slash"></i> Lavado de lfombras</li>
                                <li><i class="fa-solid fa-bug-slash"></i> Lavado de Muebles y Colchones</li>
                            </ul>

                        </div>
                    </div>
                </div>

                @include('partials.bloque-3')

            </div>



        </div>
    </div>

    @include('partials.call-to-action')


@endsection
