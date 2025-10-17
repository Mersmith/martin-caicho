<div class="g_contenedor_columna">
    <div class="g_encabezado">
        <h2>Fumigación, Desinfección, Limpieza y Sanitización</h2>
        <p>
            Te ofrecemos soluciones al alcance de tus manos: fumigación efectiva e integral, servicios preventivos,
            limpieza y desinfección industrial. Con la calidad y confianza que nos caracteriza, también te brindamos el
            mejor catálogo en productos nacionales e importados.
        </p>
    </div>

    <div class="contenedor_2">
        @foreach ($p_elemento['imagenes'] as $item)
            <div class="card">
                <h3>{{ $item['titulo'] }}</h3>

                <img src="{{ $item['imagen'] }}">

                <!--<div class="contenido">
                    <p>ga</p>
                </div>-->
            </div>
        @endforeach
    </div>

</div>
