<div>
    <div class="bg-white rounded shadow ">
        <div class="flex flex-col items-start justify-between w-full p-4 lg:flex-row lg:p-8 lg:items-stretch">
            <div class="flex flex-col items-start w-full lg:w-1/3 lg:flex-row lg:items-center">
                <div class="flex items-center">
                    <button
                        class="p-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer    hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="Edit Table" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg1.svg"
                            alt="Edit">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg1dark.svg"
                            alt="Edit">
                    </button>
                    <button
                        class="p-2 mx-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer    hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="table settings" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg2.svg"
                            alt="settings">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg2dark.svg"
                            alt="settings">
                    </button>
                    <button
                        class="p-2 mr-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer    hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="Bookmark" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg3.svg"
                            alt="Bookmark">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg3dark.svg"
                            alt="Bookmark">
                    </button>
                    <button
                        class="p-2 mr-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer    hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="copy table" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg4.svg"
                            alt="">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg4dark.svg"
                            alt="">
                    </button>
                    <button
                        class="p-2 text-red-500 bg-gray-100 border border-transparent rounded cursor-pointer   hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="delete table" role="button">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg5.svg"
                            alt="delete">
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-start justify-end w-full lg:w-2/3 lg:flex-row lg:items-center">
                <div class="flex items-center py-3 border-gray-300 lg:border-l lg:border-r lg:py-0 lg:px-6">
                    <p class="text-base text-gray-600 " id="page-view">Viewing 1 - 20 of 60</p>
                    <button
                        class="ml-2 text-gray-600 border border-transparent rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-gray-500 "
                        onclick="pageView(false)" aria-label="Goto previous page " role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg6.svg"
                            alt="">
                        <img class="hidden dark:block" src="../svgs/svg6dark.svg" alt="">
                    </button>
                    <button
                        class="text-gray-600 border border-transparent rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-gray-500"
                        aria-label="goto next page" role="button" onclick="pageView(true)">
                        <img class="transform rotate-180 dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg6.svg"
                            alt="">
                        <img class="hidden transform rotate-180 dark:block" src="../svgs/svg6dark.svg" alt="">
                    </button>
                </div>
                <div class="flex items-center pb-3 border-gray-300 lg:border-r lg:pb-0 lg:px-6">
                    <div class="relative z-10 w-32">
                        <div
                            class="absolute inset-0 z-0 w-5 h-5 m-auto mr-2 text-gray-600 pointer-events-none  xl:mr-4">
                            <img class="transform -rotate-90 dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg6.svg"
                                alt="">
                        </div>
                        <select aria-label="Selected tab"
                            class="block w-full px-2 py-2 text-base text-gray-600 bg-transparent border border-transparent rounded appearance-none focus:outline-none focus:border-gray-800 focus:shadow-outline-gray form-select xl:px-3 ">
                            <option>List View</option>
                            <option>Grid View</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center lg:ml-6">
                    <button
                        class="flex items-center h-8 px-5 text-sm text-indigo-700 transition duration-150 ease-in-out bg-gray-200 border border-transparent rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-gray-300">Download
                        All</button>
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
                                More</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="h-24 border-b border-gray-300">
                                <td
                                    class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap ">
                                    {{ $user->id }}</td>
                                <td class="pr-6 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="object-contain w-10 h-12 rounded-full">
                                            <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                alt="Display Avatar of Carrie Anthony" role="img"
                                                class="w-full h-full overflow-hidden rounded-full shadow" />
                                        </div>
                                        <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 ">
                                            {{ $user->nombre }}</p>
                                    </div>
                                </td>
                                <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                    {{ $user->email }}</td>

                                <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                    {{ $user->getRoleNames()->first() }}</td>
                                <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                    {{ $user->last_login ? \Carbon\Carbon::parse($user->last_login)->format('H:i:s') : 'Nunca inició sesión' }}
                                </td>

                                <td class="pr-6">
                                    @if ($user->estado_id = 1)
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    @else
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    @endif
                                </td>
                                <td>
                                    <div x-data="{ open: false }" class="relative">
                                        <button type="button" x-on:click="open = !open"
                                            x-bind:aria-expanded="open ? 'true' : 'false'" aria-haspopup="true"
                                            aria-label="dropdown" role="button"
                                            class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                                alt="dropdown">
                                        </button>
                                        <div x-show="open" x-on:click.away="open = false"
                                            class="absolute left-0 z-10 w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                            <ul class="py-1 bg-white rounded shadow ">
                                                <li
                                                    class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer  hover:bg-indigo-700 hover:text-white">
                                                    Edit
                                                </li>
                                                <li
                                                    class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer  hover:bg-indigo-700 hover:text-white">
                                                    Delete
                                                </li>
                                                <li
                                                    class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer  hover:bg-indigo-700 hover:text-white">
                                                    Duplicate
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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
</div>
