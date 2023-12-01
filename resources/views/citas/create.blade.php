<!-- resources/views/citas/create.blade.php -->

@extends('layouts.app') <!-- Ajusta el nombre según tu estructura de layouts -->

@section('content')
    <h1>Crear Nueva Cita</h1>

    <!-- Formulario para crear citas -->
    <form method="POST" action="{{ route('citas.store') }}">
        @csrf

        <!-- Campos del formulario -->
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" required>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>

        <!-- Lógica para mostrar usuarios y permitir la selección -->
        <label for="idU">Selecciona un Usuario:</label>
        <select name="idU" id="idU">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->IdU }}">{{ $usuario->nombreU }}</option>
            @endforeach
        </select>

        <!-- Lógica para mostrar mascotas y permitir la selección -->
        <label for="idM">Selecciona una Mascota:</label>
        <select name="idM" id="idM">
            @foreach ($mascotas as $mascota)
                <option value="{{ $mascota->idM }}">{{ $mascota->nombreM }}</option>
            @endforeach
        </select>

        <!-- Otros campos según sea necesario -->

        <button type="submit">Crear Cita</button>
    </form>
@endsection
