@php
    use App\Models\Menu;
    $menus = Menu::whereNull('parent_id')->where('estado', true)->orderBy('orden')->get();
@endphp

<header class="web_header">
    <div class="web_header_cuerpo">
        <a href="{{ route('home') }}" class="logo">Candidato</a>

        <button class="web_menu_toggle" id="web_menu_toggle" aria-label="Abrir menú">
            ☰
        </button>

        <nav class="web_nav_menu" id="web_nav_menu">
            @foreach ($menus as $menu)
                @if ($menu->pagina)
                    <a href="{{ $menu->pagina->slug }}" class="nav_link">
                        {{ $menu->nombre }}
                    </a>
                @elseif($menu->url)
                    <a href="{{ url($menu->url) }}" class="nav_link">{{ $menu->nombre }}</a>
                @endif
            @endforeach
        </nav>
    </div>
</header>

<script>
    // Muestra / oculta menú en móviles
    document.getElementById('web_menu_toggle').addEventListener('click', () => {
        document.getElementById('web_nav_menu').classList.toggle('active');
    });
</script>
