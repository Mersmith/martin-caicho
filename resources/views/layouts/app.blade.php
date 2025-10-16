<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Candidato')</title>

    <!-- SCRIPTS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- STYLES -->
    @livewireStyles
</head>

<body class="bg-gray-50">

    @include('partials.header')

    <main class="container mx-auto py-6">
        @yield('contenido')
    </main>

</body>

</html>
