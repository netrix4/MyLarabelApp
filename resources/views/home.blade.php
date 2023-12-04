<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hola, bienvenido</h1>

    <ul>
        <li><a href="{{ route('usuarios.create') }}">Crear Usuario</a></li>
        <li><a href="{{ route('mascotas.asignar') }}">Asignar Mascota</a></li>
        <li><a href="{{ route('citas.create') }}">Crear Cita</a></li>
    </ul>
</body>
</html>