<?php

namespace App\Livewire\Admin\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueTresTodoLivewire extends Component
{
    public function render()
    {
        $secciones = Seccion::where('tipo', 'bloque-3')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.seccion.seccion-bloque-tres-todo-livewire', [
            'secciones' => $secciones,
        ]);
    }
}
