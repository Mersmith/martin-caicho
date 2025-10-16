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
            'imagen' => 'https://via.placeholder.com/1200x500.png?text=Slider',
            'enlace' => '#',
            'orden' => $this->faker->numberBetween(0, 10),
            'estado' => true,
        ];
    }
}
