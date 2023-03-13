<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intertec</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/site.webmanifest') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="w-full h-full bg-gray-200">
    <div class="flex flex-no-wrap">
        <!-- Sidebar starts -->
        <div class="absolute hidden w-64 h-screen bg-white shadow lg:relative lg:block">
            <div class="flex items-center w-full h-10 px-6 mt-12 mb-6 ">
                <img class="rounded-2xl" src="{{ asset('images/tulogo.png') }}" alt="Red Intertec">
            </div>
            <ul class="py-6">
                @can('admin.profile')
                    <a href="{{ route('admin.profile') }}"
                        class="{{ Request::is('admin/perfil') ? 'bg-gray-200 text-indigo-700' : '' }} hover:bg-gray-300 block pt-5 pb-4 pl-6 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">

                        <li class="flex items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="7" r="4" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>
                            <span class="ml-2">Perfil</span>
                        </li>

                    </a>
                @endcan
                @can('admin.dashboard')
                    <a href="{{ route('admin.dashboard') }}"
                        class="{{ Request::is('admin/dashboard') ? 'bg-gray-200 text-indigo-700' : '' }} hover:bg-gray-300 block pt-5 pb-4 pl-6 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                        <li class="flex items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <rect x="4" y="4" width="6" height="6" rx="1" />
                                    <rect x="14" y="4" width="6" height="6" rx="1" />
                                    <rect x="4" y="14" width="6" height="6" rx="1" />
                                    <rect x="14" y="14" width="6" height="6" rx="1" />
                                </svg>
                            </div>
                            <span class="ml-2">Dashboard</span>
                        </li>
                    </a>
                @endcan
                @can('admin.users')
                    <a href="{{ route('admin.users') }}"
                        class="{{ Request::is('admin/usuarios') ? 'bg-gray-200 text-indigo-700' : '' }} hover:bg-gray-300 block pt-5 pb-4 pl-6 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                        <li class="flex items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                            </div>
                            <span class="ml-2">Usuarios</span>
                        </li>
                    </a>
                @endcan
                @can('admin.resources')
                    <a href="{{ route('admin.resources') }}"
                        class="{{ Request::is('admin/recursos') ? 'bg-gray-200 text-indigo-700' : '' }} hover:bg-gray-300 block pt-5 pb-4 pl-6 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                        <li class="flex items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 11l2 2l4 -4" />
                                </svg>
                            </div>
                            <span class="ml-2">Recursos</span>
                        </li>
                    </a>
                @endcan
            </ul>
        </div>
        <div class="absolute z-40 w-full h-screen transform -translate-x-full lg:hidden" id="mobile-nav">
            <div class="absolute w-full h-full bg-gray-800 opacity-50 lg:hidden" onclick="sidebarHandler(false)">
            </div>
            <div
                class="absolute z-40 w-64 h-full pb-4 transition duration-150 ease-in-out bg-white shadow sm:relative md:w-96 lg:hidden">
                <div class="flex flex-col justify-between w-full h-full">
                    <div>
                        <div class="flex items-center justify-between px-8">
                            <div class="flex items-center w-full h-8 mt-11 mb-2">
                                <img class="rounded-2xl h-20 md:h-24" src="{{ asset('images/tulogo.png') }}" alt="logo">
                            </div>
                            <button aria-label="close sidebar" id="closeSideBar"
                                class="flex items-center justify-center w-10 h-10 rounded focus:outline-none focus:ring-2 focus:ring-gray-800"
                                onclick="sidebarHandler(false)">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg2.svg"
                                    alt="cross">
                            </button>
                        </div>
                        <ul class="py-6">
                            @can('admin.profile')
                                <a href="{{ route('admin.profile') }}">
                                    <li
                                        class="pt-5 pb-4 pl-6 text-sm leading-3 tracking-normal text-indigo-700 cursor-pointer focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-user" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-base xl:text-base md:text-2xl">Perfil</span>
                                        </div>
                                    </li>
                                </a>
                            @endcan
                            @can('admin.dashboard')
                                <a href="{{ route('admin.dashboard') }}">
                                    <li
                                        class="py-2 pl-6 mt-4 mb-4 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-grid" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <rect x="4" y="4" width="6" height="6"
                                                        rx="1" />
                                                    <rect x="14" y="4" width="6" height="6"
                                                        rx="1" />
                                                    <rect x="4" y="14" width="6" height="6"
                                                        rx="1" />
                                                    <rect x="14" y="14" width="6" height="6"
                                                        rx="1" />
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-base xl:text-base md:text-2xl">Dashboard</span>
                                        </div>
                                    </li>
                                </a>
                            @endcan
                            @can('admin.users')
                                <a href="{{ route('admin.users') }}">
                                    <li
                                        class="py-2 pl-6 mb-4 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-users" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="#2c3e50" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="9" cy="7" r="4" />
                                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-base xl:text-base md:text-2xl">Usuarios</span>
                                        </div>
                                    </li>
                                </a>
                            @endcan
                            @can('admin.resources')
                                <a href="{{ route('admin.resources') }}">
                                    <li
                                        class="py-2 pl-6 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 md:w-8 md:h-8">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-user-check" width="20"
                                                    height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="#2c3e50" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="9" cy="7" r="4" />
                                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                    <path d="M16 11l2 2l4 -4" />
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-base xl:text-base md:text-2xl">Recursos</span>
                                        </div>
                                    </li>
                                </a>
                            @endcan
                        </ul>
                    </div>
                    <div class="w-full">
                        <div class="flex justify-center w-full px-6 mb-4">
                            <div class="relative w-full">
                                <div class="absolute inset-0 w-4 h-4 m-auto ml-4 text-gray-600">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg3.svg"
                                        alt="Search">
                                </div>
                                <input
                                    class="w-full py-2 pl-10 text-sm text-gray-600 placeholder-gray-600 bg-gray-200 rounded focus:outline-none"
                                    type="text" placeholder="Search" />
                            </div>
                        </div>
                        <div class="border-t border-gray-300">
                            <div class="flex items-center justify-between w-full px-6 pt-1">
                                <div class="flex items-center">
                                    <img alt="photo perfil" role="img"
                                        src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                        class="object-cover w-10 h-10 rounded-full" />
                                    <p class="ml-2 text-base leading-4 text-gray-800 md:text-xl">
                                        {{ auth()->user()->name }}</p>
                                </div>
                                <ul class="flex">
                                    <li class="pt-5 pb-3 text-white cursor-pointer">
                                        <a aria-label="open chats" href="javascript:void(0)">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg4.svg"
                                                alt="chats">
                                        </a>
                                    </li>
                                    <li aria-label="open notifications"
                                        class="pt-5 pb-3 pl-3 text-white cursor-pointer">
                                        <a aria-label="open notifications" href="javascript:void(0)">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg5.svg"
                                                alt="notifications">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Mobile responsive sidebar-->
        <!-- Sidebar ends -->
        <div class="w-full">
            <!-- Navigation starts -->
            <nav
                class="relative z-10 flex items-center justify-end h-16 bg-white shadow lg:items-stretch lg:justify-between">
                <div class="hidden w-full pr-6 lg:flex">
                    <div class="items-center hidden w-1/2 h-full pl-6 pr-24 lg:flex">
                        <div class="relative w-full">
                            <div class="absolute inset-0 w-4 h-4 m-auto ml-4 text-gray-600">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg3.svg"
                                    alt="Search">
                            </div>
                            <input
                                class="w-full py-2 pl-12 text-sm text-gray-600 placeholder-gray-600 bg-gray-100 border border-gray-100 rounded focus:outline-none focus:border-indigo-700"
                                type="text" placeholder="Search" />
                        </div>
                    </div>
                    <div class="hidden w-1/2 lg:flex">
                        <div class="flex items-center justify-end w-full pl-8">
                            <div class="flex items-center justify-center w-20 h-full border-l border-r">
                                <button aria-label="open notifications"
                                    class="relative text-gray-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-800">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg5.svg"
                                        alt="notifications">
                                    <div
                                        class="absolute inset-0 w-2 h-2 m-auto mt-1 mr-1 bg-red-400 border border-white rounded-full">
                                    </div>
                                </button>
                            </div>
                            <div
                                class="flex items-center justify-center w-20 h-full mr-4 text-gray-600 border-r cursor-pointer ">
                                <button aria-label="open chats"
                                    class="focus:outline-none focus:ring-2 focus:ring-gray-800">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg4.svg"
                                        alt="chats">
                                </button>
                            </div>
                            <div class="relative flex items-center cursor-pointer" onclick="dropdownHandler(this)">
                                <div class="rounded-full">
                                    <ul
                                        class="absolute left-0 hidden w-full p-2 mt-12 bg-white border-r rounded shadow sm:mt-16">
                                        <li
                                            class="flex items-center justify-between w-full text-gray-600 cursor-pointer hover:text-indigo-700">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-user" width="18"
                                                    height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <circle cx="12" cy="7" r="4" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>
                                                <a href="javascript:void(0)" class="ml-2 text-sm">Mi Perfil</a>
                                            </div>
                                        </li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">
                                                <li
                                                    class="flex items-center justify-between w-full mt-2 text-gray-600 cursor-pointer hover:text-indigo-700">
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-logout" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <path
                                                                d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                                        </svg>
                                                        <span class="ml-2 text-sm">Salir</span>
                                                    </div>
                                                </li>
                                            </button>
                                        </form>
                                    </ul>
                                    <div class="relative">
                                        <img class="object-cover w-10 h-10 rounded-full"
                                            src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                            alt="display avatar" role="img" />
                                        <div
                                            class="absolute inset-0 w-2 h-2 m-auto mb-0 mr-0 bg-green-400 border border-white rounded-full">
                                        </div>
                                    </div>
                                </div>
                                <p class="mx-3 text-sm text-gray-800">{{ auth()->user()->name }}</p>
                                <button aria-label="open profile options"
                                    class="text-gray-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-600">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg6.svg"
                                        alt="down">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button aria-label="Main Menu"
                    class="relative visible mr-8 text-gray-600 lg:hidden focus:outline-none focus:ring-2 focus:ring-gray-600 "
                    onclick="sidebarHandler(true)" id="menu">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg7.svg"
                        alt="toggler">
                </button>
            </nav>
            <!-- Navigation ends -->
            <!-- Remove class [ h-64 ] when adding a card block -->
            <div class="container w-11/12 h-64 px-6 py-10 mx-auto ">
                <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                <div class="w-full h-full rounded">
                    <!-- Place your content here -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </div>

    @stack('modals')
    @livewireScripts
</body>
<script>
    function dropdownHandler(element) {
        let single = element.getElementsByTagName("ul")[0];
        single.classList.toggle("hidden");
    }

    function dropdownHandler(element) {
        let single = element.getElementsByTagName("ul")[0];
        single.classList.toggle("hidden");
    }
    let sideBar = document.getElementById("mobile-nav");
    let menu = document.getElementById("menu");
    let cross = document.getElementById("cross");
    const sidebarHandler = (check) => {
        if (check) {
            sideBar.style.transform = "translateX(0px)";
            menu.classList.add("hidden");
        } else {
            sideBar.style.transform = "translateX(-100%)";
            menu.classList.remove("hidden");
        }
    };

    function dropdownHandler(element) {
        let single = element.getElementsByTagName("ul")[0];
        single.classList.toggle("hidden");
    }
</script>

</html>
