<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{
    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string',
            'especie' => 'required|string',
            'raza' => 'nullable|string',
            'edad' => 'nullable|integer',
        ]);

        $user = Auth::user();

        if ($user->tipo_usuario === 'Cliente') {
            $mascota = Mascota::create([
                'nombre' => $request->input('nombre'),
                'especie' => $request->input('especie'),
                'raza' => $request->input('raza'),
                'edad' => $request->input('edad'),
                'user_id' => $user->id
            ]);
            $mascota->save();
            $user->mascotas()->save($mascota);

            return redirect()->route('index')->with('success', 'Mascota registrada exitosamente.');
        }
        return redirect()->back()->with('error', 'No tienes permisos para registrar mascotas.');
    }
}
