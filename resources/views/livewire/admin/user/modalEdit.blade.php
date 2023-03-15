{{-- <x-modal wire:mode='showModal'>
    <x-slot name="title">
        Mi título de modal
    </x-slot>

    <x-slot name="content">
        Mi contenido de modal
    </x-slot>

    <x-slot name="footer">
        Mi pie de página de modal
    </x-slot>
</x-modal> --}}
<x-button>Activar modal</x-button>
<x-jet-dialog-modal wire:mode='showModal'>
    <x-slot name="title">
        Mi título de modal
    </x-slot>

    <x-slot name="content">
        Mi contenido de modal
    </x-slot>

    <x-slot name="footer">
        Mi pie de página de modal
    </x-slot>
</x-jet-dialog-modal>