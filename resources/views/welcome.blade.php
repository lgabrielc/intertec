<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RED INTERTEC</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/site.webmanifest') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav>
        <div class="relative ">
            <img class="object-cover object-center w-full h-96 brightness-75" src="images/fondo.jpeg" alt="">
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
        <img class="absolute top-0 h-24 m-4 rounded-full sm:h-36 md:h-48" src="images/logo.jpeg" alt="">
    </nav>
    <div>
        <div class="relative flex items-center justify-center -top-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4">
                <div
                    class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                    <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                        src="images/servicios/1c.jpeg" alt="">
                    <label class="py-1 text-xl font-bold tracking-tight ">Automatiza tus alertas</label>
                    <p class="text-sm font-medium text-gray-700">Este servicio permite enviar mensajes automatizados y
                        personalizados a través de WhatsApp a tus clientes o usuarios en momentos específicos</p>
                </div>
                <div
                    class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                    <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                        src="images/servicios/2c.jpeg" alt="">
                    <label class="py-1 text-xl font-bold tracking-tight text-gray-900 ">Administración de Redes</label>
                    <p class="text-sm font-medium text-gray-700">Proporcionamos servicios de configuración,
                        mantenimiento y
                        seguridad de redes para garantizar su funcionamiento óptimo y protección contra amenazas
                        externas.
                    </p>
                </div>

                <div
                    class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                    <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                        src="images/servicios/3c.jpeg" alt="">
                    <label class="py-1 text-xl font-bold tracking-tight text-gray-900 ">Software para ISP</label>
                    <p class="text-sm font-medium text-gray-700">Este software ayuda a los proveedores de servicios de
                        internet a administrar y mejorar sus redes para proporcionar servicios de internet confiables y
                        de
                        alta calidad a sus clientes.</p>
                </div>
                <div
                    class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                    <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                        src="images/servicios/4c.jpeg" alt="">
                    <label class="py-1 text-xl font-bold tracking-tight text-gray-900 ">Desarrollo de Software</label>
                    <p class="text-sm font-medium text-gray-700">Ofrecemos servicios de Desarrollo de Software
                        personalizados para mejorar la eficiencia y productividad de nuestros clientes mediante
                        soluciones
                        seguras y fáciles de usar.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{-- <div style="height: 150px; overflow: hidden;" class="relative -top-20">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <linearGradient id="grad1" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                    <stop offset="100%" style="stop-color:rgb(30, 58, 138);stop-opacity:1" />
                </linearGradient>
                <path d="M-1.69,-4.42 C247.17,150.50 247.74,151.48 500.56,5.45 L500.00,150.00 L0.00,150.00 Z"
                fill="url(#grad1)">
                </path>
            </svg>
        </div> --}}

        <div
            class="relative flex flex-col items-center justify-center pt-8 mb-2 text-white bg-sky-900 b-2">
            <label class="text-2xl text-center mb-7" for="">Automatiza tu negocio</label>
            <div class="container grid grid-cols-1 lg:grid-cols-2">
                <div class="w-full p-4 mx-3 rounded-md h-96">
                    <label for="">Administra tu ISP</label>
                    <ul class="px-4 list-disc">
                        <li>Cortes Automaticos de Servicio</li>
                        <li>Envío de alertas automaticas para tus clientes</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus distinctio quaerat
                        reprehenderit voluptatum, blanditiis neque dignissimos esse. Iste neque dolorem a? Aperiam,
                        ducimus accusantium omnis tenetur unde dolor doloribus eos.</p>
                </div>
                <div class="mx-3 bg-white border-2 rounded-md h-96 w-96 border-slate-400">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <i class="fa fa-copy"></i>
        <i class="fa fa-save"></i>
        <i class="fa fa-trash"></i>
        <i class="fa fa-home"></i>
        A
    </div>
    <footer
        class="static bottom-0 w-full p-4 bg-white border shadow md:flex md:items-center md:justify-between md:p-6 bg-gradient-to-r from-sky-800 via-sky-600 to-slate-600">
        <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                class="hover:underline">RED INTERTEC</a>. Todos los derechos reservados.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-white sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Contacto</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Acerca de nosotros</a>
            </li>
        </ul>
    </footer>
</body>
<script>
    const path = document.getElementById('my-path');
    const bbox = path.getBBox();
    const viewBox = `${bbox.x} ${bbox.y} ${bbox.width} ${bbox.height}`;
    path.setAttribute('viewBox', viewBox);
</script>

</html>
