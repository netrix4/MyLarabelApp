<?php
namespace App\Http\Controllers;
use App\Models\Usuarios;
use App\Models\Mascotas;
use App\Models\Citas;

class ConsultaController extends Controller
{
    public function verUsuarios()
    {
        $usuarios = Usuarios::all();
        return view('consultar.usuarios', compact('usuarios'));
    }

    public function verMascotas()
    {
        $mascotas = Mascotas::all();
        return view('consultar.mascotas', compact('mascotas'));
    }

    public function verCitas()
    {
        $citas = Citas::all();
        return view('consultar.citas', compact('citas'));
    }
}
