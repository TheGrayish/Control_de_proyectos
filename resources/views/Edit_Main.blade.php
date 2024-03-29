<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Editar Archivo</h2>
        <form action="{{ route('main.update', $main->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="archivo">Archivo:</label>
                <input type="text" class="form-control" id="archivo" name="archivo" value="{{ $main->archivo }}" required>
            </div>
            <div class="form-group">
                <label for="horario">Horario:</label>
                <input type="text" class="form-control" id="horario" name="horario" value="{{ $main->horario }}" required>
            </div>
            <div class="form-group">
                <label for="materia">Materia:</label>
                <input type="text" class="form-control" id="materia" name="materia" value="{{ $main->materia }}" required>
            </div>
            <div class="form-group">
                <label for="profesor">Profesor:</label>
                <input type="text" class="form-control" id="profesor" name="profesor" value="{{ $main->profesor }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $main->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

</body>
</html>