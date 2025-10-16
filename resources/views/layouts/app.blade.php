<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('descripcion')">

    <title>@yield('titulo', 'Candidato')</title>

    <!-- SCRIPTS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- STYLES -->
    @livewireStyles
</head>

<body>

    @include('partials.header')

    <main>
        @yield('contenido')
    </main>

</body>

</html>
