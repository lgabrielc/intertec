@extends('adminlte::page')

@section('title', 'Dashboard')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
@section('content')
    @livewire('admin.profile.profile')
@stop
@livewireScripts
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script>
        Livewire.on('alert_success', function(message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: message
            })
        })
    </script>
    <style>
        .checkbox:checked {
            right: 0;
        }

        .checkbox:checked+.toggle-label {
            background-color: #4c51bf;
        }
    </style>
    <script>
        let form = document.getElementById("login");
        form.addEventListener(
            "submit",
            function(event) {
                event.preventDefault();
                let elements = form.elements;
                let payload = {};
                for (let i = 0; i < elements.length; i++) {
                    let item = elements.item(i);
                    switch (item.type) {
                        case "checkbox":
                            payload[item.name] = item.checked;
                            break;
                        case "submit":
                            break;
                        default:
                            payload[item.name] = item.value;
                            break;
                    }
                }
                // Place your API call here to submit your payload.
                console.log("payload", payload);
            },
            true
        );
    </script>
    <script>
        function handleProfilePictureChange(event) {
            const file = event.target.files[0];
        }
    </script>
@stop
