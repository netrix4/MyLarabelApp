@extends('layouts.app')

@section('content')
    <h1>Asignar Mascota a Usuario Tipo Cliente</h1>

    <!-- Formulario para asignar mascotas -->
    <form method="POST" action="{{ route('mascotas.almacenarAsignacion') }}">
        @csrf

        <!-- Lógica para mostrar usuarios tipo cliente y permitir la selección -->
        <label for="cliente">Selecciona un Usuario Tipo Cliente:</label>
        <select name="cliente" id="cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombreU }}</option>
            @endforeach
        </select>

        <!-- Campos de la mascota -->
        <label for="nombreM">Nombre de la Mascota:</label>
        <input type="text" name="nombreM" id="nombreM" required>

        <label for="especie">Especie:</label>
        <input type="text" name="especie" id="especie" required>

        <label for="raza">Raza:</label>
        <input type="text" name="raza" id="raza" required>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>

        <!-- Agrega más campos según tus necesidades -->

        <button type="submit">Asignar Mascota</button>
    </form>
@endsection
