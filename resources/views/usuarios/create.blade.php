<!-- resources/views/usuarios/create.blade.php -->

@extends('layouts.app') <!-- Ajusta el nombre según tu estructura de layouts -->

@section('content')
    <h1>Crear Nuevo Usuario</h1>

    <!-- Formulario para crear usuarios -->
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf

        <!-- Campos del formulario -->
        <label for="nombreU">Nombre:</label>
        <input type="text" name="nombreU" id="nombreU" required>

        <label for="apapU">Apellido Paterno:</label>
        <input type="text" name="apapU" id="apapU" required>

        <label for="apamU">Apellido Materno:</label>
        <input type="text" name="apamU" id="apamU" required>

        <label for="telU">Teléfono:</label>
        <input type="text" name="telU" id="telU" required>

        <label for="nombreM">Nombre de la Mascota:</label>
        <input type="text" name="nombreM" id="nombreM" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required>

        <label for="TipoDeUsuario">Tipo de Usuario:</label>
        <input type="text" name="TipoDeUsuario" id="TipoDeUsuario" required>

        <!-- Otros campos según sea necesario -->

        <button type="submit">Crear Usuario</button>
    </form>
@endsection
