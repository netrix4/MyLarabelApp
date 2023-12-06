@extends('layouts.app') 

@section('content')
<<<<<<< HEAD
    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>Agregar Usuario</h2>
        </div>
        
        <!-- <link rel="stylesheet" href="{{ asset('../css/app.css') }}"></link> -->
        <div class='card-element-content'>
            <form class='option-form' method='POST' action="{{ route('usuarios.store') }}">
                @csrf

                <label for="nombreU">Nombre(s):</label>
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
                <!-- <input type="text" name="TipoDeUsuario" id="TipoDeUsuario" required> -->
                <select name="TipoDeUsuario" id="TipoDeUsuario">
                    <option value="cliente">Cliente</option>
                    <option value="veterinario">Veterinario</option>
                </select>
                    <button type='submit' name='submit' id='submit' >Agregar</button>
            </form>
            <form class='option-form' action="{{ route('mascotas.asignar') }}">
                <button type='submit' id='home' name='home'>Agregar Mascota</button>
            </form>
        </div>
    </div>
=======
    <h1>Crear Nuevo Usuario</h1>
    <!-- <link rel="stylesheet" href="../../css/app.css"> -->
    <!-- <link rel="stylesheet" href="app.css"> -->
    
    <!-- Formulario para crear usuarios -->
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf

        <!-- Campos del formulario -->
        <!-- <label for="IdU">Id:</label>
        <input type="text" name="idU" id="IdU" required> -->

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
        <!-- <input type="text" name="TipoDeUsuario" id="TipoDeUsuario" required> -->
        <select name="TipoDeUsuario" id="TipoDeUsuario">
            <option value="cliente">Cliente</option>
            <option value="veterinario">Veterinario</option>
        </select>


        <button class='' type="submit" >Crear Usuario</button>
    </form>
>>>>>>> acab0f0dd97abd14b7e13a24b51c0e4abb39f422
@endsection
