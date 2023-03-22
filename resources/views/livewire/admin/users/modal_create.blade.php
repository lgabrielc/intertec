<x-dialog-modal wire:model='show_modal_create'>
    <x-slot name="title">
        Crear Usuario
    </x-slot>
    <x-slot name="content">
        <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
            <div class="my-2">
                <x-label>DNI</x-label>
                <x-input class="w-full px-4" type='number' nombre='dni' wire:model.defer='dni' />
                @error('dni')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-2 ">
                <x-label>Opcion</x-label>
                <x-button wire:click='search_dni' class="w-full py-1 bg-blue-500 hover:bg-blue-600">Buscar datos
                </x-button>
                <div class="mx-1 text-red-500">
                    {{ $mensaje }}
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
            <div class="my-2">
                <x-label>Nombre</x-label>
                <x-input type="text" name="nombre" class="w-full px-4" value='{{ $nombre }}' disabled />

            </div>
            <div class="my-2">

                <x-label>Apellido</x-label>
                <x-input type="text" name="apellido" class="w-full px-4" value='{{ $apellido }}' disabled />
            </div>
        </div>
        <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
            <div class="my-2">
                <x-label>Direccion</x-label>
                <x-input wire:model.defer='direccion' id="my-input" type="text" name="direccion" class="w-full px-4"
                    oninput="toUpperCase()" />
                @error('direccion')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-2">

                <x-label>Telefono</x-label>
                <x-input wire:model.defer='telefono' type="number" name="telefono" class="w-full px-4" />
                @error('telefono')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
            <div class="my-2">
                <x-label>Email</x-label>
                <x-input wire:model.defer='email' type="email" name="direccion" class="w-full px-4" />
                @error('email')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-2">

                <x-label>Rol</x-label>
                <select wire:model.defer='rol'
                    class="w-full px-5 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    name="" id="">
                    <option value="">Escoja un Rol</option>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol }}">{{ $rol }}</option>
                    @endforeach
                </select>
                @error('rol')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- <x-label>Contraseña</x-label>
        <x-input type="password" name="password" class="w-full" /> --}}

    </x-slot>
    <x-slot name="footer">
        <div class="flex flex-col justify-between w-full space-y-2 sm:flex-row sm:space-y-0">
            <x-button wire:click="$toggle('show_modal_create')">
                Cancelar
            </x-button>

            <x-button wire:click='create_user' class="bg-green-600 hover:bg-green-700">Guardar
            </x-button>
        </div>
    </x-slot>
</x-dialog-modal>
<script>
    function toUpperCase() {
        var input = document.getElementById("my-input");
        input.value = input.value.toUpperCase();
    }
</script>
