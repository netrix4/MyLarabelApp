<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('usuarios.create');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/mascotas/asignar', [MascotaController::class, 'asignarMascota'])->name('mascotas.asignar');
    Route::post('/mascotas/asignar', [MascotaController::class, 'almacenarAsignacion'])->name('mascotas.almacenarAsignacion');
    Route::get('/citas/create', [CitasController::class, 'create'])->name('citas.create');
    Route::post('/citas', [CitasController::class, 'store'])->name('citas.store');

});

require __DIR__.'/auth.php';

