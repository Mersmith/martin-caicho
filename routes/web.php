<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\{
    HomeController,
    PaginaController,
    NoticiaController,
    ContactoController
};

// 🏠 Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// 📰 Noticias
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'show'])->name('noticias.show');

// 📄 Páginas informativas (Nosotros, Contacto, etc.)
Route::get('/{slug}', [PaginaController::class, 'show'])->name('pagina');

// ✉️ Contacto (formulario)
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');


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
