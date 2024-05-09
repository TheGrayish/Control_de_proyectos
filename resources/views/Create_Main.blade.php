<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/512/6700/6700085.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Un Nuevo Archivo</title>
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
            max-width: 600px;
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #666666;
            border-radius: 6px;
            box-sizing: border-box;
            background-color: #333333;
            color: #ffffff;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 12px 24px;
            background-color: #555555;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #444444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Subir Un Nuevo Archivo</h2>
        <form action="{{ route('main.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="archivo">Archivo:</label>
                <input type="file" class="form-control" id="archivo" name="archivo" required>
            </div>
            <div class="form-group">
                <label for="horario">Horario:</label>
                <input type="text" class="form-control" id="horario" name="horario" required>
            </div>
            <div class="form-group">
                <label for="materia">Materia:</label>
                <input type="text" class="form-control" id="materia" name="materia" required>
            </div>
            <div class="form-group">
                <label for="profesor">Profesor:</label>
                <input type="text" class="form-control" id="profesor" name="profesor" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
