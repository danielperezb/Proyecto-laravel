<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- <div class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl font-bold">Bienvenido a la página principal</h1>
    </div> -->

    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-2xl font-bold">Bienvenido a la página principal</h1>

        <x-alert type="dark">
            <x-slot name="title">
                titulo de la alerta
            </x-slot>
            contenido variable
        </x-alert>
    </div>
</body>

</html>
