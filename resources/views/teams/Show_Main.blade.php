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
        <h2>Detalles del Archivo</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Archivo: {{ $main->archivo }}</h5>
                <p class="card-text">Horario: {{ $main->horario }}</p>
                <p class="card-text">Materia: {{ $main->materia }}</p>
                <p class="card-text">Profesor: {{ $main->profesor }}</p>
                <p class="card-text">Descripción: {{ $main->descripcion }}</p>
            </div>
        </div>
    </div>
</body>
</html>