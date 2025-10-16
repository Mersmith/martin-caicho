@extends('layouts.app')

@section('titulo', $noticia->titulo)

@section('contenido')
    <h1 class="text-3xl font-bold mb-4">{{ $noticia->titulo }}</h1>
    <img src="{{ $noticia->imagen }}" alt="" class="w-full rounded mb-4">
    <div class="prose max-w-none">
        {!! $noticia->contenido !!}
    </div>
@endsection
