<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .button-container {
            display: flex;
            justify-content: space-between; /* Espacio entre los botones */
            width: 100%; /* Ancho completo del contenedor */
        }

        .custom-button {
            position: relative;
            width: 500px;
            border: none;
            background: #e74c3c; /* Cambiar el color de fondo */
            color: #fff; /* Cambiar el color del texto */
            padding: 1em;
            font-weight: bold;
            text-transform: uppercase;
            transition: 0.2s;
            border-radius: 5px;
            opacity: 0.8;
            letter-spacing: 1px;
            box-shadow: #c0392b 0px 7px 2px, #000 0px 8px 5px;
            text-align: center;
        }

        .custom-button:hover {
            opacity: 1;
        }

        .custom-button:active {
            top: 4px;
            box-shadow: #c0392b 0px 3px 2px,#000 0px 3px 5px;
        }
    </style>

    <div class="button-container">
        <a href="http://localhost:8000" class="custom-button" id="btn-home">Home Page</a>
        <a href="/main" class="custom-button" id="btn-archivos">Archivos</a>
    </div>
</x-app-layout>
