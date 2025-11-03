<?php

namespace App\Livewire\Admin\Seccion;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Seccion;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueDosCrearLivewire extends Component
{
    public $nombre;

    public $titulo;
    public $titulo_descripcion;

    public $imagen;
    public $imagen_seo;

    public $subtitulo;
    public $subtitulo_descripcion;

    public $lista = [];

    public $boton = [
        'icono' => '',
        'fondo_color' => '#000000',
        'texto' => '',
        'texto_color' => '#000000',
        'link' => '',
    ];

    public $activo = 0;

    protected function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'titulo' => 'nullable|string|max:255',
            'titulo_descripcion' => 'nullable|string',
            'imagen' => 'nullable|string',
            'imagen_seo' => 'nullable|string',
            'subtitulo' => 'nullable|string|max:255',
            'subtitulo_descripcion' => 'nullable|string',
            'lista.*.id' => 'required|integer',
            'boton.icono' => 'nullable|string',
            'boton.fondo_color' => 'nullable|string',
            'boton.texto' => 'nullable|string',
            'boton.texto_color' => 'nullable|string',
            'boton.link' => 'nullable|string',
            'activo' => 'boolean',
        ];
    }

    protected $messages = [
        'nombre.required' => 'El nombre es obligatorio.',
        'lista.*.id.required' => 'El ID del item es obligatorio.',
        'lista.*.icono.required' => 'El icono es obligatorio.',
        'lista.*.texto.required' => 'El texto es obligatorio.',
    ];

    public function agregarItem()
    {
        $maxId = collect($this->lista)->max('id');
        $nextId = $maxId ? $maxId + 1 : 1;

        $this->lista[] = [
            'id' => $nextId,
            'icono' => '',
            'icono_color' => '#000000',
            'texto' => '',
            'texto_color' => '#000000',
        ];
    }

    public function eliminarItem($index)
    {
        array_splice($this->lista, $index, 1);
    }

    public function store()
    {
        $this->validate();

        Seccion::create([
            'nombre' => $this->nombre,
            'tipo' => 'bloque_2',
            'contenido' => [
                'titulo' => $this->titulo,
                'titulo_descripcion' => $this->titulo_descripcion,
                'imagen' => $this->imagen,
                'imagen_seo' => $this->imagen_seo,
                'subtitulo' => $this->subtitulo,
                'subtitulo_descripcion' => $this->subtitulo_descripcion,
                'lista' => $this->lista,
                'boton' => $this->boton,
            ],
            'activo' => $this->activo,
        ]);

        $this->reset(['nombre', 'titulo', 'titulo_descripcion', 'imagen', 'imagen_seo', 'subtitulo', 'subtitulo_descripcion', 'lista', 'boton', 'activo']);

        $this->dispatch('alertaLivewire', 'Creado');
    }

    #[On('handleBloque2CrearOn')]
    public function handleBloque2CrearOn($item, $position)
    {
        $index = array_search($item, array_column($this->lista, 'id'));

        if ($index !== false) {
            $element = array_splice($this->lista, $index, 1)[0];
            array_splice($this->lista, $position, 0, [$element]);
        }
    }

    public function render()
    {
        return view('livewire.admin.seccion.seccion-bloque-dos-crear-livewire');
    }
}
