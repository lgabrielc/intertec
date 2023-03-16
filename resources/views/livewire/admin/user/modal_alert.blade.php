<x-modal wire:model='show_model_alert'>
    {{-- <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
            <div
                class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full shrink-0 sm:mx-0 sm:h-10 sm:w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l5 5l10 -10" />
                </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium text-gray-900">
                    aa
                </h3>

                <div class="mt-4 text-sm text-gray-600">
                    bb
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row justify-end px-6 py-4 text-right bg-gray-100">
        c
    </div> --}}
    <div class="z-10 flex w-full rounded-lg shadow-lg">
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
</x-modal>
