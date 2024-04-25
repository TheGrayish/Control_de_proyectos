<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Archivo</title>
</head>
<body>
    <div class="container">
        <h2>Detalles del Archivo</h2>
        <div class="card">
            <div class="card-body">
                <embed src="{{ asset('storage/images/' . $main->archivo) }}" type="application/pdf" width="1000" height="1000">
                <p class="card-text">Nombre del Archivo: {{ $main->nombre }}</p>
                <p class="card-text">Horario: {{ $main->horario }}</p>
                <p class="card-text">Materia: {{ $main->materia }}</p>
                <p class="card-text">Profesor: {{ $main->profesor }}</p>
                <p class="card-text">Descripción: {{ $main->descripcion }}</p>
                <div class="mt-3">
                    <a href="{{ route('main.index') }}" class="btn btn-primary">Volver al Listado</a>
                    <a href="{{ route('main.edit', $main->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('main.destroy', $main->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
