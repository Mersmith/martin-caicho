<header class="web_header">
    <div class="web_header_cuerpo">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('assets/imagen/logo.png') }}" alt="Logo">
        </a>

        <button class="web_menu_toggle" id="web_menu_toggle" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="web_nav_menu" id="web_nav_menu">
            @foreach ($menus as $menu)
                @if ($menu->pagina)
                    <a href="{{ url($menu->pagina->slug) }}" class="nav_link">
                        {{ $menu->nombre }}
                    </a>
                @elseif($menu->url)
                    <a href="{{ url($menu->url) }}" class="nav_link">{{ $menu->nombre }}</a>
                @endif
            @endforeach
        </nav>
    </div>
</header>
