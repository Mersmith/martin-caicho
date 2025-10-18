<section class="bloque_2">
    @foreach ($p_elemento['imagenes'] as $item)
        <div class="card">
            <h3>{{ $item['titulo'] }}</h3>

            <img src="{{ $item['imagen'] }}">

            <!--<div class="contenido">
                    <p>ga</p>
                </div>-->
        </div>
    @endforeach
</section>
