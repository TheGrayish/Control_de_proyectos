<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos</title>
</head>

    <style>
        body {
            background-color: #151414; /* light gray background */
        }

        h1 {
            color: #fff; /* white text */
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            background-color: #444; /* dark gray background */
            padding: 10px;
            border-bottom: 1px solid #555; /* dark gray border */
            cursor: pointer; /* add pointer cursor style */
        }

        li:hover {
            background-color: #555; /* dark gray hover */
        }

        a {
            color: #fff; /* white text */
            text-decoration: none;
        }

        a:hover {
            color: #ccc; /* light gray hover */
        }

        .btn-success {
            background-color: #666; /* dark gray button */
            border-color: #666;
            color: #fff; /* white text */
        }

        .btn-success:hover {
            background-color: #777; /* dark gray hover */
            border-color: #777;
        }

        .file-name {
            display: inline-block; /* make file name inline-block */
            padding: 5px 10px; /* add some padding */
            background-color: #555; /* add background color */
            margin-right: 10px; /* add margin to the right of the file name */
            border-radius: 5px; /* add border radius */
            transition: background-color 0.3s ease; /* add transition for a better hover effect */
        }

        li:hover .file-name {
            background-color: #555; /* same as the <li> element */
        }
    </style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de Archivos</h1>
                <a href="{{ route('main.create') }}" class="btn btn-success float-right">Agregar Archivo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach($archivos as $archivo)
                        <li>
                            <a href="{{ route('main.show', $archivo->id) }}">
                                <span class="file-name">{{ $archivo->nombre }}</span>
                                <embed src="{{ asset('storage/images/'. $archivo->archivo) }}" type="application/pdf" width="1000" height="500">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>