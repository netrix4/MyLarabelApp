@extends('layouts.app')

@section('content')
    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>Tabla de Usuarios</h2>
        </div>
        <div class='card-element-content'>
            <!-- <table border='1'> -->
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Teléfono</td>
                    <td>Nombre Mascota</td>
                    <td>Dirección</td>
                    <td>Tipo de Usuario</td>
                </tr>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombreU}}</td>
                    <td>{{ $usuario->apapU}}</td>
                    <td>{{ $usuario->apamU}}</td>
                    <td>{{ $usuario->telU}}</td>
                    <td>{{ $usuario->nombreM}}</td>
                    <td>{{ $usuario->direccion}}</td>
                    <td>{{ $usuario->TipoDeUsuario}}</td>
                </tr>
                @endforeach
            </table>
            <form class='option-form' action="{{ route('usuarios.create') }}">
                <button type='submit'>Ir a Agregar Usuario</button>
            </form>
        </div>
    </div>
    
@endsection
