<?php

namespace Database\Factories;

use App\Models\Candidato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = $this->faker->sentence(6);
        $contenido = $this->faker->sentence(6);
        return [
            'candidato_id' => Candidato::inRandomOrder()->first()?->id,
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'contenido' => $contenido,
            'imagen' => 'https://joselunagalvez.pe/wp-content/uploads/2023/07/Biografia-Jose-Luna-galvez.png.webp',
            'publicado_en' => now(),
            'estado' => true,
            'meta_title' => $titulo,
            'meta_description' => $contenido,
        ];
    }
}
