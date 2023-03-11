<div class="px-8 bg-white">
    <form id="login">
        <div class="bg-white dark:bg-gray-800">
            <div class="container mx-auto bg-white rounded dark:bg-gray-800">
                <div class="py-5 bg-white border-b border-gray-300 xl:w-full dark:border-gray-700 dark:bg-gray-800">
                    <div class="flex items-center w-11/12 mx-auto xl:w-full xl:mx-0">
                        <p class="text-lg font-bold text-gray-800 dark:text-gray-100">Perfil</p>
                        <div class="ml-2 text-gray-600 cursor-pointer dark:text-gray-400">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg" alt="info">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg"
                                alt="info">
                        </div>
                    </div>
                </div>
                <div class="mx-auto">
                    <div class="w-11/12 mx-auto xl:w-full xl:mx-0">
                        <div class="bg-black">
                            <div class="relative h-48 mt-8 rounded">
                                <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form1.jpg" alt=""
                                    class="absolute object-cover w-full h-full rounded shadow" />
                                <div class="absolute top-0 bottom-0 left-0 right-0 bg-black rounded opacity-50"></div>
                                <div
                                    class="absolute right-0 flex items-center px-3 py-2 mt-4 mr-4 rounded cursor-pointer ">
                                    <p class="text-xs text-gray-100">Change Cover Photo</p>
                                    <div class="ml-2 text-gray-100">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg"
                                            alt="Edit">
                                    </div>
                                </div>
                                @if ($imageProfile)
                                    <div class="absolute bottom-0 flex items-center justify-center w-20 h-20 ml-12 -mb-10 bg-center bg-no-repeat bg-cover rounded-full shadow"
                                        onclick="document.getElementById('profile-picture-input').click();">
                                        <img src="{{ $imageProfile->temporaryUrl() }}" alt=""
                                            class="absolute top-0 bottom-0 left-0 right-0 z-0 object-cover w-full h-full rounded-full shadow" />
                                        <div
                                            class="absolute top-0 bottom-0 left-0 right-0 z-0 bg-black rounded-full opacity-50">
                                        </div>
                                        <div
                                            class="z-10 flex flex-col items-center justify-center text-gray-100 cursor-pointer">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg"
                                                alt="Edit">
                                            <p class="text-xs text-gray-100">Edit Picture</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="absolute bottom-0 flex items-center justify-center w-20 h-20 ml-12 -mb-10 bg-center bg-no-repeat bg-cover rounded-full shadow"
                                        onclick="document.getElementById('profile-picture-input').click();">
                                        <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt=""
                                            class="absolute top-0 bottom-0 left-0 right-0 z-0 object-cover w-full h-full rounded-full shadow" />
                                        <div
                                            class="absolute top-0 bottom-0 left-0 right-0 z-0 bg-black rounded-full opacity-50">
                                        </div>
                                        <div
                                            class="z-10 flex flex-col items-center justify-center text-gray-100 cursor-pointer">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg"
                                                alt="Edit">
                                            <p class="text-xs text-gray-100">Edit Picture</p>
                                        </div>
                                    </div>
                                @endif
                                {{-- @if ($imageProfile)
                                        <div
                                            class="z-10 flex flex-col items-center justify-center text-gray-100 cursor-pointer">
                                            <img src="{{ $imageProfile->temporaryUrl() }}" alt="Edit">
                                            <p class="text-xs text-gray-100">Edit Picture</p>
                                        </div>
                                    @else
                                        <div
                                            class="z-10 flex flex-col items-center justify-center text-gray-100 cursor-pointer">
                                            <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                alt="Edit">
                                            <p class="text-xs text-gray-100">Edit Picture</p>
                                        </div>
                                    @endif --}}
                                <input wire:model="imageProfile" type="file" accept=".jpg, .jpeg, .png"
                                    id="profile-picture-input" type="file" style="display:none;"
                                    onchange="handleProfilePictureChange(event)">

                            </div>
                        </div>
                        <div class="flex flex-col w-full mt-16 xl:w-2/6 lg:w-1/2 md:w-1/2">
                            <label for="username"
                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Usuario</label>
                            <input tabindex="0" type="text" id="username" name="username" required
                                class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400"
                                placeholder="@example" />
                        </div>
                        <div class="flex flex-col w-full mt-8 xl:w-3/5 lg:w-1/2 md:w-1/2">
                            <label for="about"
                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Rol</label>

                            <div class="relative">
                                <button
                                    class="flex justify-between w-40 bg-white border rounded cursor-pointer focus:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700"
                                    data-menu>
                                    <p
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 dark:text-gray-400">
                                        Basic Options</p>
                                    <div
                                        class="flex items-center bg-white border-l border-gray-300 rounded-r dark:bg-gray-800 dark:border-gray-700">
                                        <div class="mx-3 text-gray-600 cursor-pointer dark:text-gray-400">
                                            <img class="dark:hidden"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg1.svg"
                                                alt="Dropdown">
                                            <img class="hidden transform rotate-180 dark:hidden"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg1.svg"
                                                alt="Dropdown">
                                            <img class="hidden dark:block"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg1dark.svg"
                                                alt="Dropdown">
                                            <img class="hidden transform rotate-180 dark:block"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg1dark.svg"
                                                alt="Dropdown">
                                        </div>
                                    </div>
                                </button>
                                <ul
                                    class="absolute visible w-48 py-1 mt-2 transition duration-300 bg-white rounded shadow opacity-100 dark:bg-gray-800">
                                    <li tabindex="0"
                                        class="flex items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer focus:outline-none dark:text-gray-400 focus:bg-gray-200 hover:bg-gray-100">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg2.svg"
                                            alt="Interface">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg2dark.svg"
                                            alt="Interface">
                                        <span class="ml-2 font-normal">Interface Settings</span>
                                    </li>
                                    <li tabindex="0"
                                        class="flex items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer focus:outline-none dark:text-gray-400 hover:bg-gray-100 focus:bg-gray-200">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg3.svg"
                                            alt="Color">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg3dark.svg"
                                            alt="Color">
                                        <span class="ml-2 font-normal">Color Theme</span>
                                    </li>
                                    <li tabindex="0"
                                        class="flex items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer focus:outline-none dark:text-gray-400 hover:bg-gray-100 focus:bg-gray-200">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg4.svg"
                                            alt="Wallpaper">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg4dark.svg"
                                            alt="Wallpaper">
                                        <span class="ml-2 font-normal">Wallpaper</span>
                                    </li>
                                    <li>
                                        <hr class="my-1 border-gray-200 dark:border-gray-700" />
                                    </li>
                                    <li tabindex="0"
                                        class="flex items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer focus:outline-none dark:text-gray-400 hover:bg-gray-100 focus:bg-gray-200">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg5.svg"
                                            alt="Notifications">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg5dark.svg"
                                            alt="Notifications">
                                        <span class="ml-2">Notifications</span>
                                    </li>
                                    <li tabindex="0"
                                        class="flex items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer focus:outline-none dark:text-gray-400 hover:bg-gray-100 focus:bg-gray-200">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg6.svg"
                                            alt="Account">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg6dark.svg"
                                            alt="Account">
                                        <span class="ml-2">Account Data</span>
                                    </li>
                                    <li tabindex="0"
                                        class="flex items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer focus:outline-none dark:text-gray-400 hover:bg-gray-100 focus:bg-gray-200">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg7.svg"
                                            alt="sign out">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_dropdown_with_icons-svg7dark.svg"
                                            alt="sign out">
                                        <span class="ml-2">Sign Out</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 mx-auto mt-10 bg-white rounded dark:bg-gray-800">
                <div class="py-5 border-b border-gray-300 xl:w-full dark:border-gray-700">
                    <div class="flex items-center w-11/12 mx-auto xl:w-full xl:mx-0">
                        <p class="text-lg font-bold text-gray-800 dark:text-gray-100">Información Personal</p>
                        <div class="ml-2 text-gray-600 cursor-pointer dark:text-gray-400">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                                alt="info">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg"
                                alt="info">
                        </div>
                    </div>
                </div>
                <div class="pt-4 mx-auto">
                    <div class="container mx-auto">
                        <form class="w-11/12 mx-auto my-6 xl:w-full xl:mx-0">
                            <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                <label for="FirstName"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Nombres</label>
                                <input tabindex="0" type="text" id="FirstName" name="firstName" required
                                    class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400"
                                    placeholder="" />
                            </div>
                            <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                <label for="LastName"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Apellidos</label>
                                <input tabindex="0" type="text" id="LastName" name="lastName" required
                                    class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400"
                                    placeholder="" />
                            </div>
                            <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                <label for="Email"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                                <div class="flex border border-green-400 rounded shadow-sm">
                                    <div tabindex="0"
                                        class="flex items-center px-4 py-3 border-r border-green-400 focus:outline-none dark:text-gray-100">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2.svg"
                                            alt="mail">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2dark.svg"
                                            alt="mail">
                                    </div>
                                    <input tabindex="0" type="text" id="Email" name="email" required
                                        class="w-full py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent rounded focus:outline-none dark:text-gray-400"
                                        placeholder="example@gmail.com" />
                                </div>
                                <div class="flex items-center justify-between pt-1 text-green-700">
                                    <p class="text-xs">Email submission success!</p>
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg3.svg"
                                        alt="success">
                                </div>
                            </div>
                            <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                <label for="StreetAddress"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Dirección</label>
                                <input tabindex="0" type="text" id="StreetAddress" name="streetAddress"
                                    required
                                    class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400"
                                    placeholder="" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="container w-11/12 mx-auto xl:w-full">
                <div class="flex justify-end w-full py-4 bg-white sm:px-0 dark:bg-gray-800">
                    <button role="button" aria-label="cancel form"
                        class="px-6 py-2 mr-4 text-xs text-indigo-600 transition duration-150 ease-in-out bg-gray-200 rounded focus:outline-none hover:bg-gray-300 dark:bg-gray-700 dark:text-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">Cancel</button>
                    <button role="button" aria-label="Save form" wire:click='update_profile'
                        class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none hover:bg-indigo-600"
                        type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
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
    <script>
        let elements = document.querySelectorAll("[data-menu]");
        for (let i = 0; i < elements.length; i++) {
            let main = elements[i];
            main.addEventListener("click", function() {
                let element = main.parentElement.parentElement;
                let andicators = main.querySelectorAll("img");
                let child = element.querySelector("ul");
                if (child.classList.contains("opacity-0")) {
                    child.classList.toggle("invisible");
                    child.classList.toggle("visible");
                    andicators[0].style.display = "block";
                    andicators[1].style.display = "none";
                } else {
                    setTimeout(function() {
                        child.classList.toggle("invisible");
                        child.classList.toggle("visible");
                    }, 300);
                    andicators[0].style.display = "none";
                    andicators[1].style.display = "block";
                }
                child.classList.toggle("opacity-0");
                child.classList.toggle("opacity-100");
            });
        }
    </script>
</div>
