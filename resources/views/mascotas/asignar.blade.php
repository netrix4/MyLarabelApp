@extends('layouts.app')

@section('content')
    <!-- Formulario para asignar mascotas -->
    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>Asignar Mascota a Cliente</h2>
        </div>
        
        <!-- <link rel="stylesheet" href="{{ asset('../css/app.css') }}"></link> -->
        <div class='card-element-content'>
            <form class='option-form' method="POST" action="{{ route('mascotas.almacenarAsignacion') }}">
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

                <button type="submit">Asignar Mascota</button>
            </form>
            <form class='option-form' action="{{ route('usuarios.create') }}">
                <button type='submit' id='home' name='home'>Agregar Usuario</button>
            </form>
        </div>
    </div>
@endsection


