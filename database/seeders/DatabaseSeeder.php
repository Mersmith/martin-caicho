<?php

namespace Database\Seeders;

use App\Models\Candidato;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Imagen;
use App\Models\Mensaje;
use App\Models\Menu;
use App\Models\Noticia;
use App\Models\Pagina;
use App\Models\Slider;use App\Models\User;use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Candidato principal
        $candidato = Candidato::factory()->create([
            'nombre' => 'Juan Pérez',
            'slug' => 'juan-perez',
            'frase' => 'Un nuevo comienzo para todos',
            'partido_politico' => 'Partido Esperanza Nacional',
        ]);

        // Páginas informativas
        //$inicio = Pagina::factory()->create(['titulo' => 'Inicio', 'slug' => 'inicio']);
        $nosotros = Pagina::factory()->create(['titulo' => 'Nosotros', 'slug' => 'nosotros']);
        $contacto = Pagina::factory()->create(['titulo' => 'Contacto', 'slug' => 'contacto']);

        // Menú principal
        //Menu::create(['nombre' => 'Inicio', 'slug' => 'inicio', 'pagina_id' => $inicio->id, 'orden' => 1]);
        Menu::create(['nombre' => 'Inicio', 'slug' => 'inicio', 'url' => '/', 'orden' => 1]);
        Menu::create(['nombre' => 'Nosotros', 'slug' => 'nosotros', 'pagina_id' => $nosotros->id, 'orden' => 2]);
        Menu::create(['nombre' => 'Noticias', 'slug' => 'noticias', 'url' => '/noticias', 'orden' => 3]);
        Menu::create(['nombre' => 'Contacto', 'slug' => 'contacto', 'pagina_id' => $contacto->id, 'orden' => 4]);

        // Noticias
        Noticia::factory(5)->create(['candidato_id' => $candidato->id]);

        // Slider
        Slider::factory(3)->create();

        // Mensajes de prueba
        Mensaje::factory(3)->create();

        // Imagen de prueba del candidato
        Imagen::factory()->create([
            'imagenable_id' => $candidato->id,
            'imagenable_type' => Candidato::class,
        ]);
    }
}
