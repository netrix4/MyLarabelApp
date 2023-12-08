<?php

namespace App\Http\Controllers;

use App\Models\Mascotas;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function asignarMascota()
    {
        // Lógica para obtener usuarios tipo cliente
        $clientes = Usuarios::where('TipoDeUsuario', 'Cliente')->get();

        return view('mascotas.asignar', compact('clientes'));
    }
    public function getMascotas(){
        $mascotasTable = Mascotas::all();
        // return view('mascotas.asignar', compact('clientes'));
    }
    public function almacenarAsignacion(Request $request)
    {
        $request->validate([
            'cliente' => 'required|exists:usuario,id',
            'nombreM' => 'required|string',
            'especie' => 'required|string',
            'raza' => 'required|string',
            'edad' => 'required|integer',
        ]);

        // Crea una nueva mascota 
        $mascota = new Mascotas([
            'nombreM' => $request->input('nombreM'),
            'especie' => $request->input('especie'),
            'raza' => $request->input('raza'),
            'edad' => $request->input('edad'),
           
        ]);

        // Asigna la mascota al usuario
        $usuario = Usuarios::find($request->input('cliente'));
        $usuario->mascotas()->save($mascota);

        return redirect()->route('mascotas.asignar')->with('success', 'Mascota asignada con éxito');
    }
}
