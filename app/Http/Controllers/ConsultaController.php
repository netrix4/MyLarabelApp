<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mascota;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;

class ConsultaController extends Controller
{
    public function verInfoCliente()
    {
        $user = Auth::user();

        if ($user->tipo_usuario === 'Cliente') {
            $mascotas = $user->mascotas;
            $citas = $user->citas;

            return view('consultas.info_cliente', compact('user', 'mascotas', 'citas'));
        }

        return redirect()->route('index')->with('error', 'No tienes permisos para acceder a esta información.');
    }

    public function verInfoAdmin()
    {
        $user = Auth::user();

        if ($user->tipo_usuario === 'Admin') {
            $mascotas = Mascota::all();
            $citas = Cita::all();
            $usuarios = User::all();

            return view('consultas.info_admin', compact('mascotas', 'citas', 'usuarios'));
        }

        return redirect()->route('index')->with('error', 'No tienes permisos para acceder a esta información.');
    }
    
    public function volverIndex()
    {
        return redirect()->route('index');
    }
}
