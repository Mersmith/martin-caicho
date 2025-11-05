<?php

namespace App\Livewire\Admin\Pagina;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Pagina;
use Illuminate\Support\Str;

#[Layout('layouts.admin.layout-admin')]
class PaginaCrearLivewire extends Component
{
    public $content;

    protected function rules()
    {
        return [
            'content' => 'required|string',
        ];
    }

    public function save()
    {
        $this->validate();

        Pagina::create([
            'content' => $this->content,
        ]);

        $this->dispatch('alertaLivewire', "Creado");
    }

    public function render()
    {
        return view('livewire.admin.pagina.pagina-crear-livewire');
    }
}
