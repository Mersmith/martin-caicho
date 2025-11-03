<?php

namespace App\Livewire\Admin\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueUnoCrearLivewire extends Component
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
            'imagenes.*.link' => 'nullable|url',
            'activo' => 'boolean',
        ];
    }

    protected $validationAttributes = [
        'nombre' => 'nombre',
        'imagenes.*.id' => 'id',
        'imagenes.*.imagen_computadora' => 'imagen computadora',
        'imagenes.*.imagen_movil' => 'imagen móvil',
        'imagenes.*.link' => 'link',
    ];

    protected $messages = [
        'nombre.required' => 'El :attribute es requerido.',
        'imagenes.*.id.required' => 'El :attribute es requerido.',
        'imagenes.*.imagen_computadora.required' => 'El :attribute es requerido.',
        'imagenes.*.imagen_movil.required' => 'El :attribute es requerido.',
        'imagenes.*.link.url' => 'El :attribute debe ser válido.',
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
            'tipo' => 'bloque_1',
            'contenido' => [
                'imagenes' => $this->imagenes,
            ],
            'activo' => $this->activo,
        ]);

        $this->reset(['nombre', 'imagenes', 'activo']);

        $this->dispatch('alertaLivewire', 'Creado');

        return redirect()->route('admin.seccion.bloque-uno.vista.todo');
    }

    #[On('handleBloque1CrearOn')]
    public function handleBloque1CrearOn($item, $position)
    {
        $index = array_search($item, array_column($this->imagenes, 'id'));

        if ($index !== false) {
            $element = array_splice($this->imagenes, $index, 1)[0];
            array_splice($this->imagenes, $position, 0, [$element]);
        }
    }

    public function render()
    {
        return view('livewire.admin.seccion.seccion-bloque-uno-crear-livewire');
    }
}
