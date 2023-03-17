<x-confirmation-modal wire:model='show_modal_delete'>
    <x-slot name="title">
        Eliminar Usuario
    </x-slot>
    <x-slot name="content">
        ¿Está seguro de que desea eliminar este usuario?
    </x-slot>
    <x-slot name="footer">
        <div class="flex justify-between w-full">
            <x-button wire:click="$toggle('show_modal_delete')">Cancelar</x-button>
            <x-danger-button wire:click='delete_user({{ $usuario }})'>Eliminar</x-button>
        </div>
    </x-slot>
</x-confirmation-modal>
