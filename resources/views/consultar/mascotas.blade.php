@extends('layouts.app')

@section('content')
    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>Tabla de Mascotas</h2>
        </div>
        <div class='card-element-content'>
            <!-- <table border='1'> -->
            <table>
                <tr>
                    <td>Nombre Mascota</td>
                    <td>Especie</td>
                    <td>Raza</td>
                    <td>Edad</td>
                </tr>
                @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombreM }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->edad }}</td>
                </tr>
                @endforeach
            </table>
            <form class='option-form' action="{{ route('mascotas.asignar') }}">
                <button type='submit'>Ir a Agregar Mascota</button>
            </form>
        </div>
    </div>
@endsection
