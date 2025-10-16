@php
    use App\Models\Menu;
    $menus = Menu::whereNull('parent_id')->where('estado', true)->orderBy('orden')->get();
@endphp

<header class="web-header">
    <div class="header-container">
        <a href="{{ route('home') }}" class="logo">Candidato</a>

        <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menú">
            ☰
        </button>

        <nav class="nav-menu" id="nav-menu">
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
    document.getElementById('menu-toggle').addEventListener('click', () => {
        document.getElementById('nav-menu').classList.toggle('active');
    });
</script>
