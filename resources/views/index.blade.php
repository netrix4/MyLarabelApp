
@extends('layouts.app')

@section('content')
<div class='card-element-wrapper'>
    @guest
        <div class='card-element-header'>
            <h2>Bienvenidos a Home</h2>
        </div>
        <div class="card-element-content">
            <p>¡Regístrate o inicia sesión para acceder a más funciones!</p>
            <form class="option-form" action="{{ route('register') }}">
                <label for="register">Registrarse</label>
                <button type="submit" id="register" name="register">Registrarse</button>
            </form>
            <form class="option-form" action="{{ route('login') }}">
                <label for="login">Iniciar Sesión</label>
                <button type="submit" id="login" name="login">Iniciar Sesión</button>
            </form>
        </div>
    @else
        <div class='card-element-header'>
            <h2>¡Hola, {{ Auth::user()->name }}!</h2>
        </div>
        <div class="card-element-content">
            @if(Auth::user()->tipo_usuario === 'Cliente')
            <form class="option-form" action="{{ route('mascotas.create') }}">
                <label for="addUsers">Asignar Mascota</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a asignar</button>
            </form>
            <form class="option-form" action="{{ route('citas.create') }}">
                <label for="addUsers">Crear Cita</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a crear</button>
            </form>
            <form class="option-form" action="{{ route('consultas.infoCliente') }}">
                <label for="addUsers">Consultar Mascotas y Citas</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a consultar</button>
            </form>
            @elseif(Auth::user()->tipo_usuario === 'Admin')
            <form class="option-form" action="{{ route('consultas.infoAdmin') }}">
                <label for="addUsers">Consultar Citas</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a consultar</button>
            </form>
            @endif
            <form class="option-form" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" id="logout" name="logout">Cerrar Sesión</button>
            </form>
        </div>
        @endguest
</div>
@endsection