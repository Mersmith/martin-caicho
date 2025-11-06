<?php

namespace App\Livewire\Admin\Pagina;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Pagina;
use Illuminate\Support\Str;

#[Layout('layouts.admin.layout-admin')]
class PaginaCrearLivewire extends Component
{
    public $contenido;

    public $titulo;
    public $slug;
    public $meta_imagen;
    public $activo = 0;

    protected function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'slug' => 'required|unique:paginas,slug',
            'contenido' => 'nullable|string',
            'meta_imagen' => 'nullable|string|max:255',
            'activo' => 'required|boolean',
        ];
    }

    public function updatedTitulo($value)
    {
        $this->slug = Str::slug($value);
    }

    public function store()
    {
        $this->validate();

        Pagina::create([
            'titulo' => $this->titulo,
            'slug' => $this->slug,
            'contenido' => $this->contenido,
            'meta_imagen' => $this->meta_imagen,
            'activo' => $this->activo,
        ]);

        $this->dispatch('alertaLivewire', "Creado");
    }

    public function render()
    {
        return view('livewire.admin.pagina.pagina-crear-livewire');
    }
}
