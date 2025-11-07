<header class="web_header">
    <div class="web_header_cuerpo">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('assets/imagen/logo.png') }}" alt="Logo">
        </a>

        <button class="web_menu_toggle" id="web_menu_toggle" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="web_nav_menu" id="web_nav_menu">
            <ul class="menu_principal">
                @foreach ($menus as $menu)
                    <li class="menu_item {{ $menu->children->count() ? 'tiene_hijos' : '' }}">
                        @if ($menu->children->count())
                            <button type="button" class="nav_link toggle_submenu">
                                {{ $menu->nombre }}
                                <i class="fa-solid fa-chevron-down icono_flecha"></i>
                            </button>
                            <ul class="submenu">
                                @foreach ($menu->children as $child)
                                    <li>
                                        <a href="{{ $child->url ? url($child->url) : '#' }}">{{ $child->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <a href="{{ $menu->url ? url($menu->url) : '#' }}" class="nav_link">
                                {{ $menu->nombre }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<script>
    // Toggle menú móvil
    document.getElementById('web_menu_toggle').addEventListener('click', () => {
        document.getElementById('web_nav_menu').classList.toggle('active');
    });

    // Toggle submenús
    document.querySelectorAll('.toggle_submenu').forEach(btn => {
        btn.addEventListener('click', () => {
            const parent = btn.closest('.menu_item');
            parent.classList.toggle('submenu_abierto');
        });
    });
</script>
