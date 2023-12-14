<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ConsultaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mascotas/create', [MascotaController::class, 'create'])->name('mascotas.create');
    Route::post('/mascotas/store', [MascotaController::class, 'store'])->name('mascotas.store');

    Route::get('/citas/create', [CitaController::class, 'create'])->name('citas.create');
    Route::post('/citas/store', [CitaController::class, 'store'])->name('citas.store');

    Route::get('/consultas/info-cliente', [ConsultaController::class, 'verInfoCliente'])->name('consultas.infoCliente');
    Route::get('/consultas/info-admin', [ConsultaController::class, 'verInfoAdmin'])->name('consultas.infoAdmin');
});

require __DIR__.'/auth.php';

