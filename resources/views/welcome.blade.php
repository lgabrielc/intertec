<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red - Intertec</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .navimage {
            background-image: url('images/redesportada.jpeg');
        }
    </style>
</head>

<body>
    <div class="relative ">
        <img class="object-cover object-center w-full h-96 brightness-75" src="images/fondo.jpg" alt="">
        <div class="absolute top-0 right-0 m-6">
            <ul class="flex space-x-5">
                <li
                    class="p-1 px-2 font-mono text-xl text-white rounded cursor-pointer hover:border-indigo-500 hover:bg-slate-400">
                    Contacto</li>
                <li
                    class="p-1 px-2 font-mono text-xl text-white rounded cursor-pointer hover:border-indigo-500 hover:bg-slate-400">
                    Información</li>
            </ul>
        </div>
        <div
            class="absolute top-0 bottom-0 left-0 right-0 flex justify-center m-auto text-2xl font-bold text-white uppercase h-max">
            Nuestros Servicios</div>
    </div>
    <div class="flex items-center justify-center">
        <div class="relative grid grid-cols-2 -my-20 md:grid-cols-4 ">
            <div class="flex flex-col w-64 p-2 mx-2 mb-2 bg-white border-2 shadow-lg md:mx-4 h-80 border-slate-200">
                <img src="images/redes.jpg" alt="">
                <p>Servicio Técnico</p>
            </div>
            <div class="flex flex-col w-64 p-2 mx-2 mb-2 bg-white border-2 shadow-lg md:mx-4 h-80 border-slate-200">
                <img src="images/redes.jpg" alt="">
                <p>Administración de Redes</p>
            </div>

            <div class="flex flex-col w-64 p-2 mx-2 mb-2 bg-white border-2 shadow-lg md:mx-4 h-80 border-slate-200">
                <img src="images/redes.jpg" alt="">
                <p>Soporte 24/7</p>
            </div>
            <div class="flex flex-col w-64 p-2 mx-2 mb-2 bg-white border-2 shadow-lg md:mx-4 h-80 border-slate-200">
                <img src="images/redes.jpg" alt="">
                <p>Soporte 24/7</p>
            </div>
        </div>
    </div>

</body>

</html>
