<?php

use App\Livewire\Admin\Imagen\ImagenTodoLivewire;

use App\Livewire\Admin\Slider\SliderTodoLivewire;
use App\Livewire\Admin\Slider\SliderCrearLivewire;
use App\Livewire\Admin\Slider\SliderEditarLivewire;

use App\Livewire\Admin\Seccion\SeccionTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueUnoTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueUnoCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueUnoEditarLivewire;

use Illuminate\Support\Facades\Route;

Route::get('/imagen', ImagenTodoLivewire::class)->name('imagen.vista.todo');

Route::get('/slider', SliderTodoLivewire::class)->name('slider.vista.todo');
Route::get('/slider/crear', SliderCrearLivewire::class)->name('slider.vista.crear');
Route::get('/slider/editar/{id}', SliderEditarLivewire::class)->name('slider.vista.editar');

Route::get('/seccion', SeccionTodoLivewire::class)->name('seccion.vista.todo');
Route::get('/seccion/bloque-uno', SeccionBloqueUnoTodoLivewire::class)->name('seccion.bloque-uno.vista.todo');
Route::get('/seccion/bloque-uno/crear', SeccionBloqueUnoCrearLivewire::class)->name('seccion.bloque-uno.vista.crear');
Route::get('/seccion/bloque-uno/editar/{id}', SeccionBloqueUnoEditarLivewire::class)->name('seccion.bloque-uno.vista.editar');
