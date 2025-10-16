@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <h1 class="text-3xl font-bold mb-6">Bienvenido a la página de {{ $candidato->nombre }}</h1>

    {{-- Slider --}}
    <div class="mb-8">
        @foreach($sliders as $slider)
            <div class="mb-4">
                <img src="{{ $slider->imagen }}" alt="{{ $slider->titulo }}" class="w-full rounded-lg">
                <h2 class="text-xl mt-2">{{ $slider->titulo }}</h2>
            </div>
        @endforeach
    </div>

    {{-- Noticias --}}
    <h2 class="text-2xl font-semibold mb-4">Últimas noticias</h2>
    <div class="grid md:grid-cols-3 gap-4">
        @foreach($noticias as $noticia)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ $noticia->imagen }}" alt="" class="rounded mb-2">
                <h3 class="font-semibold text-lg">{{ $noticia->titulo }}</h3>
                <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($noticia->contenido), 100) }}</p>
                <a href="{{ route('noticias.show', $noticia->slug) }}" class="text-blue-600 text-sm">Leer más</a>
            </div>
        @endforeach
    </div>
@endsection
