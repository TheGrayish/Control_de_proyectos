<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Archivo</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1/1755.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            background-image: linear-gradient(135deg, #000000 0%, #333333 100%);
            background-size: cover;
            background-attachment: fixed;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #222222;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        h2 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .card {
            background-color: #333333;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 20px;
            margin-bottom: 20px;
            text-align: left;
        }

        .card-body {
            color: #ffffff;
        }

        .card-text {
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #555555;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #444444;
        }

        .btn-warning {
            background-color: #777777;
            color: #fff;
            border: none;
        }

        .btn-warning:hover {
            background-color: #666666;
        }

        .btn-danger {
            background-color: #990000;
            color: #fff;
            border: none;
        }

        .btn-danger:hover {
            background-color: #770000;
        }

        embed {
            width: 100%;
            height: 800px; /* Ajusta la altura según tu preferencia */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalles del Archivo</h2>
        <div class="card">
            <div class="card-body">
                <embed src="{{ asset('storage/images/' . $main->archivo) }}" type="application/pdf">
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