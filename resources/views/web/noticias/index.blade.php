@extends('layouts.app')

@section('titulo', 'Noticias')

@section('contenido')
    <h1 class="text-3xl font-bold mb-6">Noticias</h1>

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

    <div class="mt-6">
        {{ $noticias->links() }}
    </div>
@endsection
