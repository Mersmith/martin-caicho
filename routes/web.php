<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\{
    HomeController,
    PaginaController,
    NoticiaController,
    MensajeController
};

// 🏠 Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');//pagina personalizada

// 📰 Noticias
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');//pagina personalizada
Route::get('/noticias/{slug}', [NoticiaController::class, 'show'])->name('noticias.show');//pagina personalizada

// ✉️ Contacto (formulario)
Route::get('/contacto', [MensajeController::class, 'index'])->name('contacto.index');//pagina personalizada
Route::post('/contacto/enviar', [MensajeController::class, 'enviar'])->name('contacto.enviar');

// 📄 Páginas informativas (Nosotros, Contacto, etc.)
Route::get('/{slug}', [PaginaController::class, 'show'])->name('pagina');

/*Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';*/
