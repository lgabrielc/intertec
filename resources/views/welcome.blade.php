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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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


    <div class="space-y-8 bg-gradient-to-r from-gray-800 to-gray-200">
        <div class="relative space-y-8 bg-gradient-to-r from-slate-800 to-gray-200 -top-10">
            <div class="container p-8 mx-auto text-white rounded-2xl bg-sky-900">
                <div class="text-2xl font-bold text-center uppercase mb-7">Automatiza tus procesos</div>
                <div class="flex flex-col justify-center lg:flex-row ">
                    <div class="w-full px-4 lg:w-1/2 sm:px-8 md:px-12 lg:px-24 xl:px-36 ">
                        <label class="font-bold uppercase">Administra tu ISP</label>
                        <ul class="mt-4 list-disc">
                            <li>Gestión de clientes: El software de administración de ISP permite a los proveedores de
                                servicios de Internet administrar de manera eficiente las cuentas de los clientes,
                                incluyendo la creación y eliminación de cuentas, la gestión de contraseñas y la
                                facturación.
                            </li><br>
                            <li>Los administradores de servicio ISP también pueden administrar los recursos de la red,
                                incluyendo el ancho de banda, el espacio de almacenamiento y el tráfico de datos, para
                                asegurar que se estén utilizando de manera efectiva y eficiente.
                            </li><br>
                            <li>Soporte técnico: Los administradores de servicio ISP también pueden proporcionar soporte
                                técnico a los clientes, lo que mejora la satisfacción del cliente y reduce la carga de
                                trabajo en los departamentos de soporte técnico.
                            </li>
                        </ul>
                    </div>
                    <div
                        class="flex flex-col items-center justify-between w-full mt-8 space-x-0 lg:space-x-20 lg:justify-start lg:w-1/2 lg:flex-row">
                        <div class="flex flex-col ">
                            <i class="fa-solid fa-comments fa-10x"></i>
                            <label class="pt-4 text-center">Envio de alertas automaticos</label>
                        </div>
                        <div class="flex flex-col ">
                            <i class="px-0 fa-solid fa-robot fa-10x lg:px-2 xl:px-4 2xl:px-16"></i>
                            <label class="pt-4 text-center">Cortes de servicio automáticos</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="relative space-y-8 bg-gradient-to-r from-slate-800 to-gray-200 -top-10">
            <div class="container p-8 mx-auto text-white rounded-2xl bg-sky-900">
                <div class="text-2xl font-bold text-center uppercase mb-7">Desarrollo de Software a medida</div>
                <div class="flex flex-col justify-center lg:flex-row ">
                    <div class="w-full px-4 lg:w-1/2 sm:px-8 md:px-12 lg:px-24 xl:px-36 ">
                        <label class="font-bold uppercase">Administra tu ISP</label>
                        <ul class="mt-4 list-disc">
                            <li>Personalización: Un software a medida se adapta completamente a las necesidades
                                específicas
                                de una empresa o usuario, lo que permite obtener una solución personalizada que cubre
                                todas
                                las necesidades y requerimientos específicos de cada caso.
                            </li><br>
                            <li>Eficiencia: Un software a medida se desarrolla con funcionalidades específicas y solo
                                con lo
                                que se necesita, lo que significa que el sistema puede ser más rápido, ágil y eficiente
                                en
                                comparación con los sistemas estándar.
                            </li><br>
                            <li>Escalabilidad: El software a medida puede diseñarse para permitir el crecimiento de una
                                empresa, añadiendo nuevas funcionalidades a medida que se necesitan.
                            </li><br>
                            <li>Control: Al desarrollar un software a medida, el usuario o empresa tiene un mayor
                                control
                                sobre el proceso de desarrollo, el resultado final y la propiedad intelectual.
                            </li><br>
                            <li>Integración: El software a medida se puede diseñar para integrarse perfectamente con
                                otros
                                sistemas y software ya existentes en la empresa, lo que permite una mayor eficiencia y
                                productividad.
                            </li><br>
                            <li>Soporte: Al desarrollar un software a medida, se puede contar con el soporte y
                                mantenimiento
                                constante de un equipo de expertos para garantizar el correcto funcionamiento del
                                sistema.
                            </li><br>
                            <li>Rentabilidad: Aunque el desarrollo de un software a medida puede parecer costoso
                                inicialmente, a largo plazo puede resultar en un ahorro de tiempo y dinero al eliminar
                                la
                                necesidad de sistemas adicionales o costosas personalizaciones en el futuro.
                            </li>
                        </ul>
                    </div>
                    <div
                        class="flex flex-col items-center justify-between w-full mt-8 space-x-0 lg:space-x-20 lg:justify-start lg:w-1/2 lg:flex-row">
                        <div class="flex flex-col ">
                            <i class="fa-solid fa-comments fa-10x"></i>
                            <label class="pt-4 text-center">Envio de alertas automaticos</label>
                        </div>
                        <div class="flex flex-col ">
                            <i class="px-0 fa-solid fa-robot fa-10x lg:px-2 xl:px-4 2xl:px-16"></i>
                            <label class="pt-4 text-center">Cortes de servicio automáticos</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer
        class="static bottom-0 w-full p-2 md:flex md:items-center md:justify-between md:p-6 bg-gradient-to-r from-sky-800 via-sky-600 to-slate-600">
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

</html>
