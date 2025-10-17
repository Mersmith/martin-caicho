@if (!empty($p_elemento) && $p_elemento['posts']->isNotEmpty())

    <div class="g_card_panel">
        @include('partials.titulo', [
            'p_contenido' => $p_elemento['titulo'],
            'p_alineacion' => 'left',
        ])

        <div class="partials_contenedor_slider_post">
            <!-- Swiper -->
            <div class="swiper SwiperSliderPost-{{ $p_elemento['id'] }}">
                <div class="swiper-wrapper">
                    @foreach ($p_elemento['posts'] as $post)
                        <div class="swiper-slide">
                            <a href="{{ route('noticias.show', $post->slug) }}">
                                <div class="post_imagen_contenedor">
                                    <img src="{{ $post->imagen }}">
                                    <p class="titulo">{{ $post->titulo }}</p>
                                    <p class="fecha">{{ $post->created_at->format('d M Y') }}</p>
                                    <p class="descripcion">{{ $post->contenido }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            var swiper = new Swiper('.SwiperSliderPost-{{ $p_elemento['id'] }}', {
                slidesPerView: 3.5, // 👈 muestra 3 completos + un poco del siguiente
                spaceBetween: 10, // espacio entre slides
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                loop: true,
                grabCursor: true,

                breakpoints: {
                    1024: {
                        slidesPerView: 3.5,
                        spaceBetween: 15,
                    },
                    768: {
                        slidesPerView: 2.5,
                        spaceBetween: 10,
                    },
                    0: {
                        slidesPerView: 1.2,
                        spaceBetween: 5,
                    }
                }
            });
        </script>
    </div>
@endif
