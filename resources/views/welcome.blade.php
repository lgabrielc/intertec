<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Red Intertec</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .navimage{
            background-image: url('images/redesportada.jpeg');
        }
    </style>
</head>

<body>
    {{-- <figure class="relative w-full transition-all duration-300 cursor-pointer filter ">
        <img class="w-full brightness-50" src="images/redesportada.jpeg" alt="">
        <figcaption class="absolute px-4 text-lg text-white bottom-6">
            <p>Do you want to get notified when a new component is added to Flowbite?</p>
        </figcaption>
    </figure>
    <nav>
    </nav> --}}
    <div class="w-full navimage h-96 brightness-50">
        <div class="backdrop-brightness-0">
            <ul class="flex px-4 py-2 space-x-3 ">
                <li class="p-1 bg-white cursor-pointer" >Link 1</li>
                <li class="p-1 bg-white cursor-pointer" >Link 2</li>
                <li class="p-1 bg-white cursor-pointer" >Link 3</li>
                <li class="p-1 bg-white cursor-pointer" >Link 4</li>
            </ul>
        </div>
    </div>
    Brilla Jacaranda
</body>

</html>
