<div class="relative">
    <div class="z-0 bg-white rounded shadow">
        <div class="flex flex-col items-start justify-between w-full p-4 lg:flex-row lg:p-8 lg:items-stretch">
            <div class="flex flex-col items-start w-full lg:w-1/3 lg:flex-row lg:items-center">
                <label class="mb-2 text-xl text-bold">Gestionar Usuarios</label>
            </div>
            <div class="flex flex-col items-start justify-end w-full lg:w-2/3 lg:flex-row lg:items-center">
                <div class="flex items-center lg:ml-6">
                    <button
                        class="flex items-center h-8 px-5 text-sm text-indigo-700 transition duration-150 ease-in-out bg-gray-200 border border-transparent rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-gray-300">Excel</button>
                    <button role="button" aria-label="add table"
                        class="flex items-center justify-center w-8 h-8 ml-4 text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg7.svg"
                            alt="plus">
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
            @if (count($users))
                <table class="min-w-full bg-white ">
                    <thead>
                        <tr class="w-full h-16 py-8 border-b border-gray-300">
                            <th role="columnheader"
                                class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                ID</th>
                            <th role="columnheader"
                                class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                Nombre</th>
                            <th role="columnheader"
                                class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                Email</th>
                            <th role="columnheader"
                                class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                Rol</th>
                            <th role="columnheader"
                                class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                Ultimo ingreso</th>
                            <th class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                <div class="w-2 h-2 bg-indigo-400 rounded-full opacity-0"></div>
                            </th>
                            <td role="columnheader"
                                class="pr-8 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">
                                Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $usuario)
                            <tr class="h-24 border-b border-gray-300">
                                <td
                                    class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap ">
                                    {{ $usuario->id }}</td>
                                <td class="pr-6 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-full ">
                                            <img src="{{ asset('storage/' . $usuario->profile_photo_path) }}"
                                                alt="Display Avatar of Carrie Anthony" role="img"
                                                class="object-cover w-full h-full overflow-hidden rounded-full shadow" />
                                        </div>
                                        <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 ">
                                            {{ $usuario->nombre }}</p>
                                    </div>
                                </td>
                                <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                    {{ $usuario->email }}</td>

                                <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                    {{ $usuario->getRoleNames()->first() }}</td>
                                <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                    {{ $usuario->last_login ? \Carbon\Carbon::parse($usuario->last_login)->format('H:i:s') : 'Nunca inició sesión' }}
                                </td>
                                <td class="pr-6">
                                    @if ($usuario->estado)
                                        <div class="{{ $usuario->can('admin.users') ? 'cursor-pointer' : 'cursor-not-allowed' }} relative inline-flex items-center "
                                            wire:click='updat_state({{ $usuario }})'>
                                            <input type="checkbox" class="sr-only peer" checked>
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300
                                             dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                                              peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px]
                                               after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                                                dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </div>
                                    @else
                                        <div class="relative inline-flex items-center cursor-pointer"
                                            wire:click='updat_state({{ $usuario }})'>
                                            <input type="checkbox" class="sr-only peer">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300
                                         dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                                          peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px]
                                           after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                                            dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click='modal_edit_user({{ $usuario }})'
                                        class="p-2 text-blue-600 bg-gray-100 border border-transparent rounded cursor-pointer hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                        aria-label="Edit Table" role="button">
                                        <img class="dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg1.svg"
                                            alt="Edit">
                                        <img class="hidden dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg1dark.svg"
                                            alt="Edit">
                                    </button>

                                    <button wire:click='modal_delete_user({{ $usuario->id }})'
                                        class="p-2 text-red-500 bg-gray-100 border border-transparent rounded cursor-pointer hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                        aria-label="delete table" role="button">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg5.svg"
                                            alt="delete">
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($users->hasPages())
                    <div class="px-6 py-3">
                        {{ $users->links() }}
                    </div>
                @endif
            @else
                <div class="px-6 py-4">
                    No existe ningún registro coincidente
                </div>
            @endif
        </div>
    </div>
    <div class="z-10 flex rounded-lg shadow-lg w-96">
        <div class="flex items-center px-6 py-4 bg-green-600 rounded-l-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" viewBox="0 0 16 16" width="20"
                height="20">
                <path fill-rule="evenodd"
                    d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z">
                </path>
            </svg>
        </div>
        <div
            class="flex items-center justify-between w-full px-4 py-6 bg-white border border-gray-200 rounded-r-lg border-l-transparent">
            <div>Se actualizó con éxito</div>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 fill-current" viewBox="0 0 16 16"
                    width="20" height="20">
                    <path fill-rule="evenodd"
                        d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <div class="relative">
        <div class="z-10">Este div está encima</div>
        <div class="z-0">Este div está debajo</div>
    </div>
    @include('livewire.admin.user.modal_edit')
    @include('livewire.admin.user.modal_alert')
    @include('livewire.admin.user.modal_delete')
</div>
