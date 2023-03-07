<div>
    <div class="relative container mx-auto -top-8">
        <form class=" bg-sky-800 shadow-md rounded-2xl px-8 pt-6 pb-8 mb-4 mx-52">
            <label class="text-center block text-white font-bold text-2xl mb-6" for="nombre">CONTACTANOS </label>
            <div class="mb-4 bg-slate-100 p-4 rounded-lg mx-24">
                <label class="block text-gray-700 font-bold mb-2">
                    Nombre completo
                </label>
                <input wire:model="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Ingrese su nombre completo">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4 bg-slate-100 p-4 rounded-lg mx-24">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">
                        Correo electrónico
                    </label>
                    <input wire:model="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Ingrese su correo electrónico">
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">
                        Telefono
                    </label>
                    <input wire:model="phone"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="phone" type="phone" placeholder="+51 984786532">
                    @error('phone')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-4 bg-slate-100 p-4 rounded-lg mx-24">
                <label class="block text-gray-700 font-bold mb-2">
                    Mensaje
                </label>
                <textarea wire:model="message"
                    class="shadow appearance-none border rounded w-full py-2 px-3
                    text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" placeholder="Ingrese su mensaje"></textarea>
                @error('message')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between mx-24">
                <button wire:click='button_contact'
                    class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
