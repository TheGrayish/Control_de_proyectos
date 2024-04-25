<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos</title>
</head>
<body>
    <h1>Listado de Archivos</h1>
    <ul>
        @foreach($archivos as $archivo)
            <li>
                {{ $archivo->nombre }}
                <embed src="{{ asset('storage/images/' . $archivo->archivo) }}" type="application/pdf" width="1000" height="500">
                    <a href="{{ route('main.show', $archivo->id) }}">Ver</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('main.create') }}">Agregar Archivo</a>

</body>
</html>
