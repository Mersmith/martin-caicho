@extends('layouts.app')

@section('titulo', 'Martin Caicho')

@section('contenido')

@include('partials.banner', ['p_elemento' => $bloque5_1])

<div class="g_centrar_pagina">
    <div class="g_pading_pagina g_gap_pagina">
        <div class="g_contenedor_columna">
            @include('partials.bloque-4', ['p_elemento' => $bloque6_1])

            @include('partials.bloque-1', ['p_elemento' => $bloque2_1])

            @include('partials.bloque-1', ['p_elemento' => $bloque2_2])

            @include('partials.bloque-4', ['p_elemento' => $bloque6_1])

            @include('partials.bloque-3', [
            'cards' => [
            [
            'icono' => 'fa-solid fa-bullseye',
            'titulo' => 'Misión',
            'descripcion' => 'Mi misión es inspirar a los peruanos a creer en el cambio a través de la educación, la
            ética y la acción.
            Busco promover un liderazgo ciudadano que transforme nuestra realidad desde los valores y el compromiso
            social.',
            ],
            [
            'icono' => 'fa-solid fa-eye',
            'titulo' => 'Visión',
            'descripcion' =>
            'Sueño con un Perú unido, próspero y transparente, donde el esfuerzo, la innovación y la honestidad sean las
            bases de nuestro desarrollo.',
            ],
            [
            'icono' => 'fa-solid fa-handshake',
            'titulo' => 'Valores',
            'descripcion' => 'Me guío por la honestidad, el trabajo, la justicia social, la empatía y la
            responsabilidad.
            Estos principios inspiran cada propuesta y cada acción que realizo por el bienestar de nuestro país.',
            ],
            ],
            ])
        </div>
    </div>
</div>

<div class="g_margin_top_70">
    @include('partials.call-to-action', ['p_elemento' => $bloque4_1])
</div>

@endsection