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
            [
                'nombre' => 'Soy También - Inicio',
                'tipo' => 'bloque_3',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'boton' => [
                                'link' => '',
                                'icono' => '',
                                'texto' => '',
                                'fondo_color' => '#000000',
                                'texto_color' => '#000000',
                            ],
                            'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                            'titulo' => 'Empresario',
                            'subtitulo' => '',
                            'imagen_seo' => 'Empresario',
                            'descripcion' => '',
                        ],
                        [
                            'id' => 2,
                            'boton' => [
                                'link' => '',
                                'icono' => '',
                                'texto' => '',
                                'fondo_color' => '#000000',
                                'texto_color' => '#000000',
                            ],
                            'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                            'titulo' => 'Escritor',
                            'subtitulo' => '',
                            'imagen_seo' => 'Escritor',
                            'descripcion' => '',
                        ],
                        [
                            'id' => 3,
                            'boton' => [
                                'link' => '',
                                'icono' => '',
                                'texto' => '',
                                'fondo_color' => '#000000',
                                'texto_color' => '#000000',
                            ],
                            'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                            'titulo' => 'Líder',
                            'subtitulo' => '',
                            'imagen_seo' => 'Líder',
                            'descripcion' => '',
                        ],
                    ],
                    'titulo' => 'También <span>soy:</span>',
                    'titulo_descripcion' => 'Soy un vecino del Agustino que combina la experiencia empresarial con una profunda pasión por la comunicación y el desarrollo social. En mi libro, invito a reflexionar sobre nuestra realidad nacional y a construir, desde la acción y la conciencia, un Perú más justo y con oportunidades para todos.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Call to Action - Inicio',
                'tipo' => 'bloque_4',
                'contenido' => [
                    'boton' => [
                        'link' => 'http://127.0.0.1:8000/peru-tierra-de-incautos',
                        'icono' => 'fa-solid fa-book',
                        'texto' => 'Registrate y descarga',
                        'fondo_color' => '#00ac08',
                        'texto_color' => '#ffffff',
                    ],
                    'imagen' => 'assets/imagen/sliders-computadora-1.jpg',
                    'titulo' => 'Descarga mi libro que todo peruano debe leer',
                    'subtitulo' => '“Perú, Tierra de Incautos”, una mirada crítica y constructiva.',
                    'imagen_seo' => '“Perú, Tierra de Incautos”, una mirada crítica y constructiva.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Banner - Nosotros',
                'tipo' => 'bloque_5',
                'contenido' => [
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/sliders-computadora-1.jpg',
                    'titulo' => '¿Quién soy y que pienso?',
                    'subtitulo' => '',
                    'imagen_seo' => '¿Quién soy y que pienso?',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Titulo - Nosotros',
                'tipo' => 'bloque_6',
                'contenido' => [
                    'titulo' => 'La <span>Solución</span> para un Perú con futuro',
                    'subtitulo' => 'Propongo una visión renovadora basada en tres ejes: desarrollo económico inclusivo, fortalecimiento de los valores ciudadanos y modernización de la gestión pública. Desde mi experiencia en el sector privado y la función pública, impulso ideas que buscan unirnos como peruanos para construir un país más justo, productivo y solidario.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Desarrollo - Nosotros',
                'tipo' => 'bloque_2',
                'contenido' => [
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-hand-holding-dollar',
                            'texto' => 'Apoyo a los emprendedores y pequeñas empresas',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-chart-line',
                            'texto' => 'Promoción de la economía regional',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-industry',
                            'texto' => 'Fomento de la producción nacional',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-graduation-cap',
                            'texto' => 'Capacitación técnica y laboral',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-briefcase',
                            'texto' => 'Impulso a la formalización y al empleo digno',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                    ],
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'titulo' => '',
                    'invertir' => false,
                    'subtitulo' => 'Desarrollo económico con rostro humano',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Promuevo un modelo económico que prioriza al emprendedor, al trabajador y a las familias peruanas. Mi propuesta busca generar empleo digno, impulsar la innovación y fortalecer la producción nacional con justicia social.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Gestión - Nosotros',
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
                            'icono' => 'fa-solid fa-handshake',
                            'texto' => 'Promuevo la transparencia en el uso de los recursos públicos',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-laptop-code',
                            'texto' => 'Impulso la digitalización y el gobierno electrónico',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-city',
                            'texto' => 'Fortalezco la gestión de los gobiernos locales',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-chalkboard-user',
                            'texto' => 'Apoyo la capacitación constante de los servidores públicos',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-scale-balanced',
                            'texto' => 'Combato la corrupción con firmeza y compromiso',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                    ],
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'titulo' => '',
                    'invertir' => true,
                    'subtitulo' => 'Gestión pública moderna y transparente',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Desde mi experiencia en el sector público, defiendo una administración eficiente, meritocrática y enfocada en resultados. Busco eliminar la corrupción, digitalizar los procesos del Estado y acercar la gestión a los ciudadanos.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Valores - Nosotros',
                'tipo' => 'bloque_2',
                'contenido' => [
                    'boton' => [
                        'link' => '',
                        'icono' => '',
                        'texto' => '',
                        'fondo_color' => '',
                        'texto_color' => '',
                    ],
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-graduation-cap',
                            'texto' => 'Fomento la educación cívica y moral en todos los niveles',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-user-group',
                            'texto' => 'Impulso programas de liderazgo juvenil',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-heart',
                            'texto' => 'Promuevo una cultura basada en el respeto y la empatía',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 4,
                            'icono' => 'fa-solid fa-first-aid',
                            'texto' => 'Apoyo la formación en primeros auxilios y convivencia ciudadana',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                        [
                            'id' => 5,
                            'icono' => 'fa-solid fa-flag',
                            'texto' => 'Refuerzo la unidad y el orgullo de ser peruanos',
                            'icono_color' => '#00ac08',
                            'texto_color' => '#01274C',
                        ],
                    ],
                    'imagen' => 'http://127.0.0.1:8000/assets/imagen/default.jpg',
                    'titulo' => '',
                    'invertir' => false,
                    'subtitulo' => 'Valores y educación cívica para un nuevo Perú',
                    'imagen_seo' => 'Martín Caicho Autor Peruano',
                    'titulo_descripcion' => '',
                    'subtitulo_descripcion' => 'Estoy convencido de que el cambio real comienza en cada persona. Por eso, promuevo la educación en valores, la participación ciudadana y la formación de líderes comprometidos con el bien común y el respeto mutuo.',
                ],
                'activo' => true,
            ],
            [
                'nombre' => 'Compromiso con el Perú - Nosotros',
                'tipo' => 'bloque_7',
                'contenido' => [
                    'lista' => [
                        [
                            'id' => 1,
                            'icono' => 'fa-solid fa-bullseye',
                            'subtitulo' => 'Misión',
                            'subtitulo_descripcion' => 'Mi misión es inspirar a los peruanos a creer en el cambio a través de la educación, la ética y la acción. Busco promover un liderazgo ciudadano que transforme nuestra realidad desde los valores y el compromiso social.',
                        ],
                        [
                            'id' => 2,
                            'icono' => 'fa-solid fa-eye',
                            'subtitulo' => 'Visión',
                            'subtitulo_descripcion' => 'Sueño con un Perú unido, próspero y transparente, donde el esfuerzo, la innovación y la honestidad sean las bases de nuestro desarrollo.',
                        ],
                        [
                            'id' => 3,
                            'icono' => 'fa-solid fa-handshake',
                            'subtitulo' => 'Valores',
                            'subtitulo_descripcion' => 'Me guío por la honestidad, el trabajo, la justicia social, la empatía y la responsabilidad. Estos principios inspiran cada propuesta y cada acción que realizo por el bienestar de nuestro país.',
                        ],
                    ],
                    'titulo' => 'Estoy <span>comprometido</span> con mi Perú',
                    'titulo_descripcion' => 'Conóceme un poco más.',
                ],
                'activo' => true,
            ],

        ];

        foreach ($secciones as $seccion) {
            Seccion::create($seccion);
        }
    }
}
