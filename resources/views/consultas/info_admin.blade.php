
@extends('layouts.app')

@section('content')
    <div class="card-element-wrapper">
        <div class="card-element-header">
            <h2>Información del Cliente</h2>
        </div>
        <div class="card-element-content">
            

            <h3>Todas las Citas</h3>
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
                <p>No hay citas registradas.</p>
            @endif

            <h3>Todos los Usuarios</h3>
            @if($usuarios->count() > 0)
                <table>
                    <tr>
                        <td><strong>Nombre</strong></td>
                        <td><strong>Apellido Paterno</strong></td>
                        <td><strong>email</strong></td>
                        <td><strong>Tipo De Usuario</strong></td>
                    </tr>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->apellido_paterno }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->tipo_usuario }}</td>
                    </tr>
                    @endforeach
                </table>

            @else
                <p>No hay usuarios registrados.</p>
            @endif

            <h3>Todas las Mascotas</h3>
            @if($mascotas->count() > 0)
                <table>
                    <tr>
                        <td><strong>Nombre Mascota</strong></td>
                        <td><strong>Especie</strong></td>
                        <td><strong>Raza</strong></td>
                        <td><strong>Edad</strong></td>
                        <td><strong>Propietario</strong></td>
                    </tr>
                    @foreach($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->especie }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->edad }}</td>
                        <td>{{ $mascota->user->name }}</td>
                    </tr>
                    @endforeach
                </ul>
            @else
                <p>No hay mascotas registradas.</p>
            @endif

            <form method='GET' action="{{ route('index') }}">
                <button class="button-generic" type="submit">Home</button>
            </form>

        </div>
    </div>
@endsection
