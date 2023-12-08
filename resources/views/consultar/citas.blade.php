@extends('layouts.app')

@section('content')

    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>Tabla de Citas</h2>
        </div>
        <div class='card-element-content'>
            <!-- <table border='1'> -->
            <table>
                <tr>
                    <td>Hora</td>
                    <td>Fecha</td>
                    <td>ID Mascota</td>
                    <td>ID Usuario</td>
                </tr>
                @foreach ($citas as $cita)
                <tr>
                    <td>{{ $cita->hora }}</td>
                    <td>{{ $cita->fecha }}</td>
                    <td>{{ $cita->idM }}</td>
                    <td>{{ $cita->idU }}</td>
                </tr>
                @endforeach
            </table>
            <form class='option-form' action="{{ route('citas.create') }}">
                <button type='submit'>Ir a Agregar Mascota</button>
            </form>
        </div>
    </div>

@endsection
