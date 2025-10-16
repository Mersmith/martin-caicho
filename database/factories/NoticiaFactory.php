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
        return [
            'candidato_id' => Candidato::inRandomOrder()->first()?->id,
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'contenido' => $this->faker->paragraphs(6, true),
            'imagen' => 'https://via.placeholder.com/800x400.png?text=Noticia',
            'publicado_en' => now(),
            'estado' => true,
        ];
    }
}
