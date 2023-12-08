@extends('layouts.app') <!-- Ajusta el nombre según tu estructura de layouts -->

@section('content')
    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>Tabla de Mascotas</h2>
        </div>
        <div class='card-element-content'>
            <form class='option-form' action="{{ route('mascotas.asignar') }}">
                <!-- <table border='1'> -->
                <table>
                    <th>
                        <td>Nombre Mascota</td>
                        <td>Especie</td>
                        <td>Raza</td>
                        <td>Edad</td>
                    </th>
                    @foreach ($listaMascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombreM }}</td>
                        <td>{{ $mascota->especie }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->edad }}</td>
                    </tr>
                    @endforeach
                </table><br>
                <button type='submit'>Ir a Agregar Mascota</button>
            </form>
        </div>
    </div>
@endsection