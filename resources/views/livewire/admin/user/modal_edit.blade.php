 <x-dialog-modal wire:model='show_modal_edit'>
     <x-slot name="title">
         Editar Usuario
     </x-slot>
     <x-slot name="content">
         <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
             <div class="my-2">
                 <x-label>DNI</x-label>
                 <x-input class="w-full px-4" type='number' nombre='dni' value='{{ $dni }}' disabled />
             </div>
             <div class="my-2">
                 {{-- {{dd($user)}} --}}
                 <x-label>Rol</x-label>
                 {{ $usuario->hasRole('SuperAdmin') }}
                 <select wire:model.defer='rol' name="" id="" {{-- class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 "> --}}
                     class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @if ($usuario->hasRole('SuperAdmin')) disabled opacity-50 @endif">
                     @foreach ($roles as $rol)
                         <option value="{{ $rol }}">{{ $rol }}</option>
                     @endforeach
                 </select>
                 {{-- <x-input class="w-full px-4" type='text' nombre='rol' value='{{ $rol }}' disabled /> --}}
             </div>
             {{-- <x-button wire:click='search_dni'>Buscar</x-button> --}}
         </div>
         <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
             <div class="my-2">
                 <x-label>Nombre</x-label>
                 <x-input wire:model='nombre' type="text" name="nombre" class="w-full px-4"
                     value='{{ $nombre }}' disabled />
             </div>
             <div class="my-2">

                 <x-label>Apellido</x-label>
                 <x-input wire:model='apellido' type="text" name="apellido" class="w-full px-4"
                     value='{{ $apellido }}' disabled />
             </div>
         </div>
         <div class="grid grid-cols-1 space-x-0 lg:space-x-4 lg:grid-cols-2">
             <div class="my-2">
                 <x-label>Direccion</x-label>
                 <x-input wire:model='direccion' type="text" name="direccion" class="w-full px-4" />
             </div>
             <div class="my-2">

                 <x-label>Telefono</x-label>
                 <x-input wire:model='telefono' type="number" name="telefono" class="w-full px-4" />
             </div>
         </div>
         {{-- <x-label>Contraseña</x-label>
         <x-input type="password" name="password" class="w-full" /> --}}

     </x-slot>
     <x-slot name="footer">
         <div class="flex flex-col justify-between w-full space-y-2 sm:flex-row sm:space-y-0">
             <x-button wire:click="$toggle('show_modal_edit')">
                 Cancelar
             </x-button>
             <x-secondary-button wire:click='reset_password({{ $usuario }})'>
                 Restablecer Contraseña
             </x-secondary-button>
             <x-button wire:click='edit_user({{ $usuario }})' class="bg-green-600 hover:bg-green-700">Guardar
             </x-button>
         </div>
     </x-slot>
 </x-dialog-modal>
