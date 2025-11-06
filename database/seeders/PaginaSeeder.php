<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pagina;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paginas = [
            [
                'tipo' => 'personalizado',
                'titulo' => 'Inicio',
                'slug' => '/',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Martin Caicho',
                'slug' => 'martin-caicho',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 6,
                            'tipo' => 'bloque-6',
                        ],
                        [
                            'id' => 2,
                            'seccion_id' => 7,
                            'tipo' => 'bloque-2',
                        ],
                        [
                            'id' => 3,
                            'seccion_id' => 8,
                            'tipo' => 'bloque-2',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Noticias',
                'slug' => 'noticias',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Noticias - Item',
                'slug' => 'noticias/',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Contacto',
                'slug' => 'contacto',
                'contenido' => [],
                'activo' => true,
            ],
            [
                'tipo' => 'personalizado',
                'titulo' => 'Perú Tierra de Incautos',
                'slug' => 'peru-tierra-de-incautos',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 12,
                            'tipo' => 'bloque-1',
                        ],
                        [
                            'id' => 2,
                            'seccion_id' => 13,
                            'tipo' => 'bloque-2',
                        ],
                        [
                            'id' => 3,
                            'seccion_id' => 15,
                            'tipo' => 'bloque-8',
                        ],
                    ],
                ],
                'activo' => true,
            ],
            [
                'tipo' => 'secciones',
                'titulo' => 'Terminos y Condiciones',
                'slug' => 'terminos-y-condiciones',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'seccion_id' => 12,
                            'tipo' => 'bloque-1',
                        ],
                        [
                            'id' => 2,
                            'seccion_id' => 13,
                            'tipo' => 'bloque-2',
                        ],
                        [
                            'id' => 3,
                            'seccion_id' => 15,
                            'tipo' => 'bloque-8',
                        ],
                    ],
                ],
                'activo' => true,
            ],
        ];

        foreach ($paginas as $pagina) {
            Pagina::create($pagina);
        }
    }
}
