    <div class="px-8 bg-white">
        <br>
        <x-banner />
        <div class="bg-white ">
            <div class="container px-4 mx-auto bg-white rounded ">
                <div class="py-5 bg-white border-b border-gray-300 xl:w-full ">
                    <div class="flex items-center w-11/12 mx-auto xl:w-full xl:mx-0">
                        <p class="text-lg font-bold text-gray-800 ">Perfil</p>
                        <div class="ml-2 text-gray-600 ">
                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                                alt="info">
                            <img class="hidden "
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg"
                                alt="info">
                        </div>
                    </div>
                </div>
                <div class="w-11/12 mx-auto my-3 cursor-pointer xl:w-full xl:mx-0">
                    @if ($imageProfile)
                        <div class="absolute flex items-center justify-center w-20 h-20 ml-12 -mb-10 bg-center bg-no-repeat bg-cover rounded-full shadow "
                            onclick="document.getElementById('profile-picture-input').click();">
                            <img src="{{ $imageProfile->temporaryUrl() }}" alt=""
                                class="absolute top-0 bottom-0 left-0 right-0 z-0 object-cover w-full h-full rounded-full shadow" />
                            <div class="absolute top-0 bottom-0 left-0 right-0 z-0 bg-black rounded-full opacity-50">
                            </div>
                            <div class="z-10 flex flex-col items-center justify-center text-gray-100 ">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg"
                                    alt="Edit">
                                <p class="text-xs text-gray-100">Editar Foto</p>
                            </div>
                        </div>
                    @else
                        <div class="absolute flex items-center justify-center w-20 h-20 ml-12 -mb-10 bg-center bg-no-repeat bg-cover rounded-full shadow "
                            onclick="document.getElementById('profile-picture-input').click();">
                            <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt=""
                                class="absolute top-0 bottom-0 left-0 right-0 z-0 object-cover w-full h-full rounded-full shadow" />
                            <div class="absolute top-0 bottom-0 left-0 right-0 z-0 bg-black rounded-full opacity-50">
                            </div>
                            <div class="z-10 flex flex-col items-center justify-center text-gray-100 ">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg"
                                    alt="Edit">
                                <p class="text-xs text-gray-100">Editar Foto</p>
                            </div>
                        </div>
                    @endif
                    <input wire:model="imageProfile" type="file" accept=".jpg, .jpeg, .png"
                        id="profile-picture-input" type="file" style="display:none;"
                        onchange="handleProfilePictureChange(event)">
                </div>
                <div class="w-11/12 mx-auto my-1 xl:w-full xl:mx-0">
                    <div class="flex flex-col w-full mt-28 xl:w-2/6 lg:w-1/2 md:w-1/2">
                        <label for="usuario" class="pb-1 text-sm font-bold text-gray-800 ">Email</label>
                        <input tabindex="0" type="text" id="usuario" name="usuario"
                            class="py-2 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm focus:outline-none focus:border-indigo-700 "
                            wire:model='email' placeholder="ejemplo@hotmai.com" />
                        @error('email')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col w-full mt-5 xl:w-2/6 lg:w-1/2 md:w-1/2">
                        <label for="usuario" class="pb-1 text-sm font-bold text-gray-800 ">Password</label>
                        <input tabindex="0" type="password" id="usuario" name="usuario"
                            class="py-2 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm focus:outline-none focus:border-indigo-700 "
                            wire:model='password' />
                        @error('password')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-4 mx-auto  bg-white rounded ">
            <div class="pt-4 border-b border-gray-300 xl:w-full ">
                <div class="flex items-center w-11/12 mx-auto xl:w-full xl:mx-0">
                    <p class="text-lg font-bold text-gray-800 ">Información Personal</p>
                    <div class="ml-2 text-gray-600 ">
                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                            alt="info">
                        <img class="hidden "
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                    </div>
                </div>
            </div>
            <div class="pt-4 mx-auto">
                <div class="container mx-auto">
                    <div class="w-11/12 mx-auto my-2 xl:w-full xl:mx-0">
                        <div class="flex flex-col mb-2 xl:w-1/4 lg:w-1/2 md:w-1/2">
                            <label for="FirstName" class="pb-1 text-sm font-bold text-gray-800 ">Nombres</label>
                            <input tabindex="0" type="text" id="FirstName" name="firstName"
                                class="py-2 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm focus:outline-none focus:border-indigo-700 "
                                value="{{ $nombre }}" disabled />
                        </div>
                        <div class="flex flex-col mb-2 xl:w-1/4 lg:w-1/2 md:w-1/2">
                            <label for="LastName" class="pb-1 text-sm font-bold text-gray-800 ">Apellidos</label>
                            <input tabindex="0" type="text" id="LastName" name="lastName"
                                class="py-2 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm focus:outline-none focus:border-indigo-700 "
                                value="{{ $apellido }}" disabled />
                        </div>

                        <div class="flex flex-col mb-3 xl:w-1/4 lg:w-1/2 md:w-1/2">
                            <label for="StreetAddress" class="pb-1 text-sm font-bold text-gray-800 ">Dirección</label>
                            <input tabindex="0" type="text" id="StreetAddress" name="streetAddress"
                                class="py-2 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm focus:outline-none focus:border-indigo-700 "
                                wire:model='direccion' />
                            @error('direccion')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container w-11/12 mx-auto xl:w-full">
            <div class="flex justify-end w-full py-4 bg-white sm:px-0 ">
                <button role="button" aria-label="Save form" wire:click='update_profile'
                    class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none hover:bg-indigo-600"
                    type="submit">Guardar</button>
            </div>
        </div>

    </div>
    <style>
        .checkbox:checked {
            /* Apply class right-0*/
            right: 0;
        }

        .checkbox:checked+.toggle-label {
            /* Apply class bg-indigo-700 */
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
            // Aquí puedes hacer lo que quieras con el archivo seleccionado, como mostrar una vista previa o subirlo al servidor
        }
    </script>
    </div>
