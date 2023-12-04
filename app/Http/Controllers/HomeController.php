<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Usuarios;
use App\Models\Mascotas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Método para mostrar la vista de creación de citas
    public function redirect()
    {

        return view('citas.create');
    }
        // Redirigir a la vista de creación con un mensaje de éxito
        // return redirect()->route('citas.create')->with('success', 'Cita creada con éxito');
}
