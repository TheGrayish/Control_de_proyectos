<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos</title>
</head>

<style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f6f8fa;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgb(57, 56, 56);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        margin-top: 20px;
    }

    h1 {
        color: #333;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }
    .add-file-button {
        position: fixed;
        top: 20px;
        right: 20px;
    }

    .add-file-button {
        background-color: #2ea44f;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
    }

    .add-file-button:hover {
        background-color: #393e3a;
    }

</style>




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

    <a class="add-file-button" href="{{ route('main.create') }}">Agregar Archivo</a>


</body>
</html>
