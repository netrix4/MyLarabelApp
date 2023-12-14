
@extends('layouts.app')

@section('content')
    <div class="card-element-wrapper">
        <div class="card-element-header">
            <h2>Información del Cliente</h2>
        </div>
        <div class="card-element-content">

            <h2>Mis Mascotas</h2>
            @if($mascotas->count() > 0)
                <table>
                    <tr>
                        <td><strong>Nombre Mascota</strong></td>
                        <td><strong>Especie</strong></td>
                        <td><strong>Raza</strong></td>
                        <td><strong>Edad</strong></td>
                    </tr>
                    @foreach ($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->especie }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->edad }}</td>
                    </tr>
                    @endforeach
                </table>
            @else
                <p>No tienes mascotas registradas. :(</p>
            @endif
    
            <h2>Mis Citas</h2>
            @if($citas->count() > 0)
                <table>
                    <tr>
                        <td><strong>Nombre Mascota</strong></td>
                        <td><strong>Especie</strong></td>
                        <td><strong>Hora</strong></td>
                        <td><strong>Fecha</strong></td>
                        <td><strong>Descripcion</strong></td>
                    </tr>
                    @foreach ($citas as $cita)
                    <tr>
                        <td>{{ $cita->nombre_mascota }}</td>
                        <td>{{ $cita->especie }}</td>
                        <td>{{ $cita->fecha }}</td>
                        <td>{{ $cita->hora }}</td>
                        <td>{{ $cita->descripcion }}</td>
                    </tr>
                    @endforeach
                </table>
            @else
                <p>No tienes citas registradas.</p>
            @endif
            <form method='GET' action="{{ route('index') }}">
                <button class="button-generic" type="submit">Home</button>
            </form>
        </div>
    </div>
@endsection
