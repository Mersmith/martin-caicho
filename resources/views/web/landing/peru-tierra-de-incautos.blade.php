@extends('layouts.app')

@section('titulo', 'Peru Tierra de Incautos - Martin Caicho')

@section('contenido')

@include('partials.bloque-1', ['p_elemento' => $bloque1_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @include('partials.bloque-2', ['p_elemento' => $bloque2_1])
        </div>
    </div>
</div>


<div class="g_margin_top_70">
    @include('partials.bloque-4', ['p_elemento' => $bloque4_1])
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">

            <div class="landing_grid">
                <!-- INFORMACIÓN -->
                <div class="contacto_info">
                    <img src="{{ $imagen ?? asset('assets/imagen/default.jpg') }}" alt="{{ $alt ?? 'Imagen' }}">
                </div>

                <!-- FORMULARIO -->
                <div class="contacto_formulario" id="formulario-libro">
                    <div class="g_contenedor_columna">
                        @include('partials.encabezado', [
                        'titulo' => 'Regístrate y <span>recibe tu libro</span>',
                        'descripcion' => 'Completa tus datos correctamente y te enviaremos.',
                        ])

                        @if (session('success'))
                        <div class="alert alert-success">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-error">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div>
                                <strong>Por favor corrige los siguientes errores:</strong>
                            </div>
                        </div>
                        @endif

                        <form action="{{ route('landing.libro.enviar') }}" method="POST" class="g_formulario">
                            @csrf

                            <div class="form_grupo">
                                <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}"
                                    required>
                                @error('nombre')
                                <div class="error-text">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form_grupo">
                                <input type="text" name="apellido" placeholder="Apellidos" value="{{ old('apellido') }}"
                                    required>
                                @error('apellido')
                                <div class="error-text">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form_grupo">
                                <input type="email" name="email" placeholder="Correo" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form_grupo">
                                <input type="text" name="telefono" placeholder="Celular" value="{{ old('telefono') }}">
                                @error('telefono')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                        </form>
                    </div>
                </div>
            </div>

            @include('partials.bloque-8', ['p_elemento' => $bloque8_1])
        </div>
    </div>
</div>

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @include('partials.bloque-2', ['p_elemento' => $bloque2_2])
        </div>
    </div>
</div>

<div class="g_margin_top_70">
    @include('partials.bloque-4', ['p_elemento' => $bloque4_2])
</div>
@endsection