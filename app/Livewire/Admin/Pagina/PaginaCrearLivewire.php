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

    protected function rules()
    {
        return [
            'contenido' => 'required|string',
        ];
    }

    public function save()
    {
        $this->validate();

        Pagina::create([
            'contenido' => $this->contenido,
        ]);

        $this->dispatch('alertaLivewire', "Creado");
    }

    public function render()
    {
        return view('livewire.admin.pagina.pagina-crear-livewire');
    }
}
