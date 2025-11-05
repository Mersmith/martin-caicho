<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seccion;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $secciones = [
            [
                'nombre' => 'Slider Principal - Inicio',
                'tipo' => 'bloque_1',
                'contenido' => [
                    'imagenes' => [
                        [
                            'id' => 1,
                            'link' => '',
                            'imagen_movil' => 'http://127.0.0.1:8000/assets/imagen/sliders-movil-1.jpg',
                            'imagen_computadora' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-1.jpg',
                        ],
                        [
                            'id' => 2,
                            'link' => '',
                            'imagen_movil' => 'http://127.0.0.1:8000/assets/imagen/sliders-movil-2.jpg',
                            'imagen_computadora' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-2.jpg',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Presentación - Inicio',
                'tipo' => 'bloque_2',
                'contenido' => [
                    'boton' => [
                        'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                        'icono' => 'fa-solid fa-book',
                        'texto' => 'Conoce más sobre mi libro',
                        'fondo_color' => '#00ac08',
                        'texto_color' => '#ffffff',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-book-open',
                            'texto' => 'Autor de mi libro “Perú, Tierra de Incautos”',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-lightbulb',
                            'texto' => 'Comparto ideas que inspiran el cambio social y político',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Cuento con experiencia en el sector empresarial y gestión pública',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-microphone',
                            'texto' => 'Expreso mi voz crítica y analítica desde el periodismo independiente',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                    ],
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'titulo' => 'Soy Martín Caicho <span>Autor y Emprendedor Peruano</span>',
                    'invertir' => false,
                    'subtitulo' => 'Soy un <span>pensador</span> comprometido con el futuro del Perú',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => 'Desde El Agustino para el Perú. Empresario, comunicador y apasionado por el desarrollo social. Autor del libro <span>“Perú, Tierra de Incautos”</span>, una mirada crítica y reflexiva sobre nuestra realidad nacional, con el deseo de inspirar un cambio verdadero basado en valores, trabajo y esperanza.',
                    'subtitulo_descripcion' => 'Combino mi experiencia como empresario y en gestión pública con mi vocación por el periodismo y la reflexión social. A través de mi obra, busco despertar conciencia, promover la participación ciudadana y contribuir al cambio que nuestro país necesita.',
                ],
                'activo' => true,
            ],

        ];

        foreach ($secciones as $seccion) {
            Seccion::create($seccion);
        }
    }
}
