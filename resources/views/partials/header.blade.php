@php
    use App\Models\Menu;
    $menus = Menu::whereNull('parent_id')->where('estado', true)->orderBy('orden')->get();
@endphp

<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4">
        <a href="{{ route('home') }}" class="font-bold text-xl">Candidato</a>

        <nav class="flex space-x-6">
            @foreach ($menus as $menu)
                @if ($menu->pagina)
                    <a href="{{ route('pagina', $menu->pagina->slug) }}"
                        class="hover:text-blue-600">{{ $menu->nombre }}</a>
                @elseif($menu->url)
                    <!-- Existe Menu url, pero no existe página o no esta asignada -->
                    <a href="{{ url($menu->url) }}" class="hover:text-blue-600">GA {{ $menu->nombre }}</a>
                @endif
            @endforeach
        </nav>
    </div>
</header>
