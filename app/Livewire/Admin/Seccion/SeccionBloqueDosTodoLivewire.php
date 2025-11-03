<?php

namespace App\Livewire\Admin\Seccion;

use App\Models\Seccion;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.layout-admin')]
class SeccionBloqueDosTodoLivewire extends Component
{
    public function render()
    {
        $secciones = Seccion::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.seccion.seccion-bloque-dos-todo-livewire', [
            'secciones' => $secciones,
        ]);
    }
}
