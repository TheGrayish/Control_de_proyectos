<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Un Nuevo Archivo</title>
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
