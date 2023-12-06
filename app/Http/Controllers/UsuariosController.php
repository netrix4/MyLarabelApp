<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\http\Controllers\HomeController;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }

    // Método para almacenar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'nombreU' => 'required|string',
            'apapU' => 'required|string',
            'apamU' => 'required|string',
            'telU' => 'required|string',
            'nombreM' => 'required|string',
            'direccion' => 'required|string',
            'TipoDeUsuario' => 'required|string',
        ]);

        // Crear y almacenar el nuevo usuario en la base de datos
        $usuario = new Usuarios([
            'IdU' =>$request-> input('IdU'),
            'nombreU' => $request->input('nombreU'),
            'apapU' => $request->input('apapU'),
            'apamU' => $request->input('apamU'),
            'telU' => $request->input('telU'),
            'nombreM' => $request->input('nombreM'),
            'direccion' => $request->input('direccion'),
            'TipoDeUsuario' => $request->input('TipoDeUsuario'),
        ]);

        $usuario->save();

        return redirect()->route('usuarios.create')->with('success', 'Usuario creado con éxito');
        // return redirect()->route('/');
    }
}