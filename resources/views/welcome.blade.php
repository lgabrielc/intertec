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
            <div
                class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                    src="images/redes.jpg" alt="">
                <label class="py-1 text-xl font-bold tracking-tight ">Servicio Técnico</label>
                <p class="text-sm font-medium text-gray-700">Ofrecemos reparaciones, mantenimiento y optimización de
                    computadoras y dispositivos móviles para mejorar el rendimiento y solucionar problemas.</p>
            </div>
            <div
                class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                    src="https://fp.liceolapaz.com/wp-content/uploads/2020/05/CS.Informatica3.1.jpg" alt="">
                <label class="py-1 text-xl font-bold tracking-tight text-gray-900 ">Administración de Redes</label>
                <p class="text-sm font-medium text-gray-700">Proporcionamos servicios de configuración, mantenimiento y
                    seguridad de redes para garantizar su funcionamiento óptimo y protección contra amenazas externas.
                </p>
            </div>

            <div
                class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                    src="https://cdn-fljjp.nitrocdn.com/fQnbzylDZXxBRECgMYyQbbqgyDvbiCPj/assets/images/optimized/rev-1f38eeb/wp-content/uploads/2021/01/Soporte-tecnico-1.jpg"
                    alt="">
                <label class="py-1 text-xl font-bold tracking-tight text-gray-900 ">Software para ISP</label>
                <p class="text-sm font-medium text-gray-700">Este software ayuda a los proveedores de servicios de
                    internet a administrar y mejorar sus redes para proporcionar servicios de internet confiables y de
                    alta calidad a sus clientes.</p>
            </div>
            <div
                class="flex flex-col items-center w-64 p-2 mx-2 mb-2 bg-white border-2 rounded-lg shadow-lg md:mx-4 h-80 border-slate-200">
                <img class="object-cover w-64 h-32 border rounded-lg border-x-slate-300"
                    src="https://www.sistemasjvr.com/wp-content/uploads/2016/05/soporte-tecnico-efectivo.jpg"
                    alt="">
                <label class="py-1 text-xl font-bold tracking-tight text-gray-900 ">Desarrollo de Software</label>
                <p class="text-sm font-medium text-gray-700">Ofrecemos servicios de Desarrollo de Software
                    personalizados para mejorar la eficiencia y productividad de nuestros clientes mediante soluciones
                    seguras y fáciles de usar.</p>
            </div>
        </div>
    </div>

</body>

</html>
