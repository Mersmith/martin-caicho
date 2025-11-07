<?php

use App\Http\Controllers\FormularioPaginaContactoController;
use App\Http\Controllers\FormularioLandingLibroController;
use App\Http\Controllers\FormularioLibroReclamacionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home'); //pagina personalizada

Route::get('/martin-caicho', [NosotrosController::class, 'index'])->name('nosotros.index'); //pagina personalizada

Route::get('/peru-tierra-de-incautos', [FormularioLandingLibroController::class, 'libro'])->name('landing.libro'); //pagina personalizada
Route::post('/peru-tierra-de-incautos/enviar', [FormularioLandingLibroController::class, 'enviarLibro'])->name('landing.libro.enviar');

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index'); //pagina personalizada
Route::get('/noticias/{slug}', [NoticiaController::class, 'show'])->name('noticias.show'); //pagina personalizada

Route::get('/contacto', [FormularioPaginaContactoController::class, 'index'])->name('contacto.index'); //pagina personalizada
Route::post('/contacto/enviar', [FormularioPaginaContactoController::class, 'enviar'])->name('contacto.enviar');

Route::get('/libro-de-reclamaciones', [FormularioLibroReclamacionController::class, 'index'])->name('reclamaciones.index'); //pagina personalizada
Route::post('/libro-de-reclamaciones/enviar', [FormularioLibroReclamacionController::class, 'enviar'])->name('reclamaciones.enviar');

Route::get('/{slug?}', [PaginaController::class, 'show'])->name('pagina.mostrar');
