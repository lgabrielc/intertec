<div>
    <div class="relative container mx-auto -top-8">
        <form class=" bg-sky-800 shadow-md rounded-2xl px-8 pt-6 pb-8 mb-4 mx-52">
            <label class="text-center block text-white font-bold text-2xl mb-6" for="nombre">CONTACTANOS </label>
            <div class="mb-4 bg-slate-100 p-4 rounded-lg mx-24">
                <label class="block text-gray-700 font-bold mb-2" wire:model="nombre">
                    Nombre completo
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nombre" type="text" placeholder="Ingrese su nombre completo">
            </div>
            <div class="mb-4 bg-slate-100 p-4 rounded-lg mx-24">
                <div>
                    <label class="block text-gray-700 font-bold mb-2" wire:model="correo">
                        Correo electrónico
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="correo" type="email" placeholder="Ingrese su correo electrónico">

                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2" wire:model="correo">
                        Telefono
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="correo" type="email" placeholder="+51 984786532">

                </div>
            </div>
            <div class="mb-4 bg-slate-100 p-4 rounded-lg mx-24">
                <label class="block text-gray-700 font-bold mb-2" wire:model="mensaje">
                    Mensaje
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="mensaje" placeholder="Ingrese su mensaje"></textarea>
            </div>
            <div class="flex items-center justify-between mx-24">
                <button
                    class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>