<?php

namespace App\Livewire\Admin\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueUnoEditarLivewire extends Component
{
    public $seccion;

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

    public function mount($id)
    {
        $this->seccion = Seccion::findOrFail($id);
    
        $this->nombre = $this->seccion->nombre;
        $this->activo = $this->seccion->activo;
    
        // Obtener el contenido decodificado (gracias al cast)
        $contenido = $this->seccion->contenido ?? [];
    
        // Si el JSON tiene 'imagenes', las asignamos
        if (isset($contenido['imagenes']) && is_array($contenido['imagenes'])) {
            $this->imagenes = $contenido['imagenes'];
        } else {
            // Si no hay contenido, iniciamos con un item vacío
            $this->imagenes = [
                [
                    'id' => 1,
                    'imagen_computadora' => '',
                    'imagen_movil' => '',
                    'link' => '',
                ],
            ];
        }
    }    

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

        $this->seccion->update([
            'nombre' => $this->nombre,
            'contenido' => [
                'imagenes' => $this->imagenes,
            ],
            'activo' => $this->activo,
        ]);

        //$this->reset(['nombre', 'imagenes', 'activo']);

        $this->dispatch('alertaLivewire', "Actualizado");
    }

    #[On('handleBloque1EditarOn')]
    public function handleBloque1EditarOn($item, $position)
    {
        $index = array_search($item, array_column($this->imagenes, 'id'));

        if ($index !== false) {
            $element = array_splice($this->imagenes, $index, 1)[0];
            array_splice($this->imagenes, $position, 0, [$element]);
        }
    }

    public function render()
    {
        return view('livewire.admin.seccion.seccion-bloque-uno-editar-livewire');
    }
}
