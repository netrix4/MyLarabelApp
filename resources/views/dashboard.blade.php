<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Bienvenido al Veterimario</h1>

    @guest
        <p>¡Regístrate o inicia sesión para acceder a más funciones!</p>
        <a href="{{ route('register') }}">Registrarse</a>
        <a href="{{ route('login') }}">Iniciar Sesión</a>
    @else
        <p>¡Hola, {{ Auth::user()->name }}!</p>
        <a href="{{ route('mascotas.create') }}">Registrar Mascota</a>
        <a href="{{ route('citas.create') }}">Registrar cita</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
    @endguest
@endsection