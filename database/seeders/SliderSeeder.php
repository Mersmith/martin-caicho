<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Slider
        Slider::factory()->create([
            'imagen_computadora' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-1.jpg',
            'imagen_movil' => 'http://127.0.0.1:8000/assets/imagen/sliders-movil-1.jpg',
        ]);

        Slider::factory()->create([
            'imagen_computadora' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-2.jpg',
            'imagen_movil' => 'http://127.0.0.1:8000/assets/imagen/sliders-movil-2.jpg',
        ]);
    }
}
