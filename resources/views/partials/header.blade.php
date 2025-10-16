@php
    use App\Models\Menu;
    $menus = Menu::whereNull('parent_id')->where('estado', true)->orderBy('orden')->get();
@endphp

<header class="web-header">
    <div class="web-header-container">
        <a href="{{ route('home') }}" class="logo">Candidato</a>

        <button class="web-menu-toggle" id="web-menu-toggle" aria-label="Abrir menú">
            ☰
        </button>

        <nav class="web-nav-menu" id="web-nav-menu">
            @foreach ($menus as $menu)
                @if ($menu->pagina)
                    <a href="{{ $menu->pagina->slug }}" class="nav-link">
                        {{ $menu->nombre }}
                    </a>
                @elseif($menu->url)
                    <a href="{{ url($menu->url) }}" class="nav-link">{{ $menu->nombre }}</a>
                @endif
            @endforeach
        </nav>
    </div>
</header>

<script>
    // Muestra / oculta menú en móviles
    document.getElementById('web-menu-toggle').addEventListener('click', () => {
        document.getElementById('web-nav-menu').classList.toggle('active');
    });
</script>
