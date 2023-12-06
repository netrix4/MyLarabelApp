<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Usuarios;
use App\Models\Mascotas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    // Método para mostrar la vista de creación de citas
    public function create()
    {
        // Lógica para obtener usuarios que no son clientes
        $usuarios = Usuarios::where('TipoDeUsuario', '!=', 'Cliente')->get();
        // Lógica para obtener mascotas (puedes personalizar según tus necesidades)
        $mascotas = Mascotas::all();

        return view('citas.create', compact('usuarios', 'mascotas'));
    }

    // Método para almacenar una nueva cita en la base de datos
    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'hora' => 'required',
            'fecha' => 'required|date',
            'idM' => 'required|exists:mascotas,idM',
            'idU' => 'required|exists:usuarios,IdU',
        ]);

        // Crear y almacenar la nueva cita en la base de datos
        $cita = new Citas([
            'hora' => $request->input('hora'),
            'fecha' => $request->input('fecha'),
            'idM' => $request->input('idM'),
            'idU' => $request->input('idU'),
            // Otros campos según sea necesario
        ]);

        $cita->save();

        // Redirigir a la vista de creación con un mensaje de éxito
        return redirect()->route('citas.create')->with('success', 'Cita creada con éxito');
    }
}
