<div>
    <div class="container relative mx-auto -top-8">
        <form wire:submit.prevent='submitContactForm' enctype="multipart/form-data"
            class="px-8 pt-6 pb-8 mx-0 mb-4 shadow-md bg-sky-800 rounded-2xl xl:mx-52">
            @csrf
            <label class="block mt-2 mb-6 text-2xl font-bold text-center text-white" for="nombre">CONTACTANOS </label>
            <div class="p-4 mx-0 mb-4 rounded-lg sm:mx-8 md:mx-12 lg:mx-24 bg-slate-100">
                <label class="block mb-2 font-bold text-gray-700">
                    Nombre completo
                </label>
                <input wire:model="name"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Ingrese su nombre completo">
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="p-4 mx-0 mb-4 rounded-lg sm:mx-8 md:mx-12 lg:mx-24 bg-slate-100">
                <div>
                    <label class="block mb-2 font-bold text-gray-700">
                        Correo electrónico
                    </label>
                    <input wire:model="email"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Ingrese su correo electrónico">
                    @error('email')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="p-4 mx-0 mb-4 rounded-lg sm:mx-8 md:mx-12 lg:mx-24 bg-slate-100">
                <div>
                    <label class="block mb-2 font-bold text-gray-700">
                        Telefono
                    </label>
                    <input wire:model="phone"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="phone" type="number" placeholder="+51 984786532">
                    @error('phone')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="p-4 mx-0 mb-4 rounded-lg sm:mx-8 md:mx-12 lg:mx-24 bg-slate-100">
                <label class="block mb-2 font-bold text-gray-700">
                    Mensaje
                </label>
                <textarea wire:model="message"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="message" placeholder="Ingrese su mensaje"></textarea>
                @error('message')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between mx-0 mb-4 sm:mx-8 md:mx-12 lg:mx-24">
                <button
                    class="px-4 py-2 font-bold text-white bg-black rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                    type="submit">
                    Enviar
                </button>
            </div>
            <x-banner />
        </form>
    </div>
</div>
