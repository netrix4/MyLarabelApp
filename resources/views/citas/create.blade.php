@extends('layouts.app')

@section('content')
    <div class="card-element-wrapper">
        <div class="card-element-header">
            <h2>Crear Nueva Cita</h2>
        </div>

        <div class="card-element-content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form class='option-form' method='POST' action="{{ route('citas.store') }}">
                @csrf
                <label for="nombre_mascota">Nombre de la Mascota</label>
                <!-- <input type="text" name="nombre_mascota" id="nombre_mascota" class="form-control" required> -->

                <select name="nombre_mascota" id="nombre_mascota" required>
                @foreach ($activeUsersPets as $pet)
                    <option value="{{ $pet->nombre }}"> {{ $pet->nombre }}</option>
                @endforeach
                </select>

                <label for="especie">Especie</label>
                <!-- <label for="especie">$activeUsersPets</label> -->
                <input type="text" name="especie" id="especie" class="form-control" required>
                
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" required>

                <label for="hora">Hora:</label>
                <input type="time" name="hora" id="hora" required>

                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>

                <button type="submit">Crear Cita</button>
            </form>
            <form method='GET' action="{{ route('index') }}">
                <button class="button-generic" type="submit">Home</button>
            </form>
        </div>
    </div>
@endsection
