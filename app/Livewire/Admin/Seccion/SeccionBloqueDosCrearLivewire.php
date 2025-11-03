<?php

namespace App\Livewire\Admin\Seccion;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueDosCrearLivewire extends Component
{
    public $nombre;
    public $imagenes = [];
    public $activo = false;

    protected function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'imagenes.*.id' => 'required|integer',
            'imagenes.*.imagen_computadora' => 'required|string',
            'imagenes.*.imagen_movil' => 'required|string',
            'activo' => 'boolean',
        ];
    }

    protected $validationAttributes = [
        'nombre' => 'nombre',
        'imagenes.*.id' => 'id',
        'imagenes.*.imagen_computadora' => 'imagen computadora',
        'imagenes.*.imagen_movil' => 'imagen móvil',
    ];

    protected $messages = [
        'nombre.required' => 'El :attribute es requerido.',
        'imagenes.*.id.required' => 'El :attribute es requerido.',
        'imagenes.*.imagen_computadora.required' => 'El :attribute es requerido.',
        'imagenes.*.imagen_movil.required' => 'El :attribute es requerido.',
    ];

    public function agregarItem()
    {
        $maxId = collect($this->imagenes)->max('id');
        $nextId = $maxId ? $maxId + 1 : 1;

        $this->imagenes[] = [
            'id' => $nextId,
            'imagen_computadora' => '',
            'imagen_movil' => '',
            'link' => '',
        ];
    }

    public function eliminarItem($index)
    {
        array_splice($this->imagenes, $index, 1);
    }

    public function store()
    {
        $this->validate();

        Seccion::create([
            'nombre' => $this->nombre,
            'tipo' => 'slider',
            'contenido' => [
                'imagenes' => $this->imagenes,
            ],
            'activo' => $this->activo,
        ]);

        $this->reset(['nombre', 'imagenes', 'activo']);

        $this->dispatch('alertaLivewire', 'Creado');
    }

    #[On('handleSliderCrearOn')]
    public function handleSliderCrearOn($item, $position)
    {
        $index = array_search($item, array_column($this->imagenes, 'id'));

        if ($index !== false) {
            $element = array_splice($this->imagenes, $index, 1)[0];
            array_splice($this->imagenes, $position, 0, [$element]);
        }
    }

    public function render()
    {
        return view('livewire.admin.seccion.seccion-bloque-dos-crear-livewire');
    }
}
