<?php
// app/Http/Controllers/CitaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Mascota;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    public function create()
    {
        $activeUsersId = Auth::id();
        $activeUsersPets = Mascota::where('user_id', $activeUsersId)->get();

        // $listOfPets = [];

        // foreach ($activeUsersPets as $pet) {
        //     array_push($listOfPets, strval($pet));
        // }
        // print_r($listOfPets);

        return view('citas.create', compact('activeUsersPets')); 
        // return view('citas.create', compact(["fixtures", "teams", "selections"])); 
        // return view('citas.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_mascota' => 'required|string',
            'especie' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i', 
            'descripcion' => 'nullable|string',
        ]);

        $user = Auth::user();

        if ($user->tipo_usuario === 'Cliente') {
            $cita = Cita::create([
                'user_id' => $user->id,
                'nombre_mascota' => $request->input('nombre_mascota'),
                'especie' => $request->input('especie'),
                'fecha' => $request->input('fecha'),
                'hora' => $request->input('hora'),
                'descripcion' => $request->input('descripcion'),
            ]);
            $cita->save();
            
            
            return redirect()->route('index')->with('success', 'Cita registrada exitosamente.');
        }

        return redirect()->back()->with('error', 'No tienes permisos para registrar citas.');
    }
}

