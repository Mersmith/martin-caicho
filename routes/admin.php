<?php

use App\Livewire\Admin\Imagen\ImagenTodoLivewire;

use App\Livewire\Admin\Slider\{
    SliderTodoLivewire,
    SliderCrearLivewire,
    SliderEditarLivewire
};

use App\Livewire\Admin\Seccion\{
    SeccionTodoLivewire,
    SeccionBloqueUnoTodoLivewire,
    SeccionBloqueUnoCrearLivewire,
    SeccionBloqueUnoEditarLivewire,
    SeccionBloqueDosTodoLivewire,
    SeccionBloqueDosCrearLivewire,
    SeccionBloqueDosEditarLivewire,
    SeccionBloqueTresTodoLivewire,
    SeccionBloqueTresCrearLivewire,
    SeccionBloqueTresEditarLivewire,
    SeccionBloqueCuatroTodoLivewire,
    SeccionBloqueCuatroCrearLivewire,
    SeccionBloqueCuatroEditarLivewire,
    SeccionBloqueCincoTodoLivewire,
    SeccionBloqueCincoCrearLivewire,
    SeccionBloqueCincoEditarLivewire,
    SeccionBloqueSeisTodoLivewire,
    SeccionBloqueSeisCrearLivewire,
    SeccionBloqueSeisEditarLivewire,
    SeccionBloqueSieteTodoLivewire,
    SeccionBloqueSieteCrearLivewire,
    SeccionBloqueSieteEditarLivewire,
};
use Illuminate\Support\Facades\Route;

Route::get('/imagen', ImagenTodoLivewire::class)->name('imagen.vista.todo');

Route::prefix('slider')->name('slider.vista.')->group(function () {
    Route::get('/', SliderTodoLivewire::class)->name('todo');
    Route::get('/crear', SliderCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', SliderEditarLivewire::class)->name('editar');
});

Route::prefix('seccion')->name('seccion.')->group(function () {
    Route::get('/', SeccionTodoLivewire::class)->name('vista.todo');
    Route::get('/bloque-uno', SeccionBloqueUnoTodoLivewire::class)->name('bloque-uno.vista.todo');
    Route::get('/bloque-uno/crear', SeccionBloqueUnoCrearLivewire::class)->name('bloque-uno.vista.crear');
    Route::get('/bloque-uno/editar/{id}', SeccionBloqueUnoEditarLivewire::class)->name('bloque-uno.vista.editar');
    Route::get('/bloque-dos', SeccionBloqueDosTodoLivewire::class)->name('bloque-dos.vista.todo');
    Route::get('/bloque-dos/crear', SeccionBloqueDosCrearLivewire::class)->name('bloque-dos.vista.crear');
    Route::get('/bloque-dos/editar/{id}', SeccionBloqueDosEditarLivewire::class)->name('bloque-dos.vista.editar');
    Route::get('/bloque-tres', SeccionBloqueTresTodoLivewire::class)->name('bloque-tres.vista.todo');
    Route::get('/bloque-tres/crear', SeccionBloqueTresCrearLivewire::class)->name('bloque-tres.vista.crear');
    Route::get('/bloque-tres/editar/{id}', SeccionBloqueTresEditarLivewire::class)->name('bloque-tres.vista.editar');
    Route::get('/bloque-cuatro', SeccionBloqueCuatroTodoLivewire::class)->name('bloque-cuatro.vista.todo');
    Route::get('/bloque-cuatro/crear', SeccionBloqueCuatroCrearLivewire::class)->name('bloque-cuatro.vista.crear');
    Route::get('/bloque-cuatro/editar/{id}', SeccionBloqueCuatroEditarLivewire::class)->name('bloque-cuatro.vista.editar');
    Route::get('/bloque-cinco', SeccionBloqueCincoTodoLivewire::class)->name('bloque-cinco.vista.todo');
    Route::get('/bloque-cinco/crear', SeccionBloqueCincoCrearLivewire::class)->name('bloque-cinco.vista.crear');
    Route::get('/bloque-cinco/editar/{id}', SeccionBloqueCincoEditarLivewire::class)->name('bloque-cinco.vista.editar');
    Route::get('/bloque-seis', SeccionBloqueSeisTodoLivewire::class)->name('bloque-seis.vista.todo');
    Route::get('/bloque-seis/crear', SeccionBloqueSeisCrearLivewire::class)->name('bloque-seis.vista.crear');
    Route::get('/bloque-seis/editar/{id}', SeccionBloqueSeisEditarLivewire::class)->name('bloque-seis.vista.editar');
    Route::get('/bloque-siete', SeccionBloqueSieteTodoLivewire::class)->name('bloque-siete.vista.todo');
    Route::get('/bloque-siete/crear', SeccionBloqueSieteCrearLivewire::class)->name('bloque-siete.vista.crear');
    Route::get('/bloque-siete/editar/{id}', SeccionBloqueSieteEditarLivewire::class)->name('bloque-siete.vista.editar');
});
