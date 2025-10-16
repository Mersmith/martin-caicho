<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'subtitulo' => $this->faker->sentence(5),
            'imagen_computadora' => $this->faker->imageUrl(1200, 400, 'business', true),
            'imagen_movil' => $this->faker->imageUrl(600, 300, 'business', true), 'enlace' => '#',
            'orden' => $this->faker->numberBetween(0, 10),
            'estado' => true,
        ];
    }
}
