<?php
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\CitasController;
// use App\http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware([])->group(function () {
    // Route::get('/', [HomeController::class, 'redirect'])->name('home');
    Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/mascotas/asignar', [MascotasController::class, 'asignarMascota'])->name('mascotas.asignar');
    Route::post('/mascotas/asignar', [MascotasController::class, 'almacenarAsignacion'])->name('mascotas.almacenarAsignacion');
    Route::get('/citas/create', [CitasController::class, 'create'])->name('citas.create');
    Route::post('/citas', [CitasController::class, 'store'])->name('citas.store');
});

require __DIR__.'/auth.php';

