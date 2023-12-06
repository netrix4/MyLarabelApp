<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}"></link>
    <title>VeterinMario</title>
</head>
<body>
    <div class='card-element-wrapper'>
        <div class='card-element-header'>
            <h2>BIenvenidos a Home</h2>
        </div>

        <div class="card-element-content">
            <form class="option-form" action="{{ route('usuarios.create') }}">
                <label for="addUsers">Agregar Usuario</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a crear</button>
            </form>
            <form class="option-form" action="{{ route('mascotas.asignar') }}">
                <label for="addUsers">Asignar Mascota</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a asignar</button>
            </form>
            <form class="option-form" action="{{ route('citas.create') }}">
                <label for="addUsers">Crear Cita</label>
                <button type="submit" id="addUsers" name="addUsers">Ir a crear</button>
            </form>
            <!-- <ul>
                <li><a href="{{ route('usuarios.create') }}">Crear Usuario</a></li>
                <li><a href="{{ route('mascotas.asignar') }}">Asignar Mascota</a></li>
                <li><a href="{{ route('citas.create') }}">Crear Cita</a></li>
            </ul> -->
        </div>
    

    </div>
</body>
</html>