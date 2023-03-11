<div>
    <div>
        <button wire:click="connectToOlt">Conectar a OLT</button>
    </div>

    <div>
        {{ $oltOutput }}
    </div>
    {{-- <div class="bg-white rounded shadow dark:bg-gray-800">
        <div class="flex flex-col items-start justify-between w-full p-4 lg:flex-row lg:p-8 lg:items-stretch">
            <div class="flex flex-col items-start w-full lg:w-1/3 lg:flex-row lg:items-center">
                <div class="flex items-center">
                    <button
                        class="p-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer dark:text-gray-400 dark:hover:bg-gray-600 dark:bg-gray-700 hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="Edit Table" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg1.svg"
                            alt="Edit">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg1dark.svg"
                            alt="Edit">
                    </button>
                    <button
                        class="p-2 mx-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer dark:text-gray-400 dark:hover:bg-gray-600 dark:bg-gray-700 hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="table settings" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg2.svg"
                            alt="settings">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg2dark.svg"
                            alt="settings">
                    </button>
                    <button
                        class="p-2 mr-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer dark:text-gray-400 dark:hover:bg-gray-600 dark:bg-gray-700 hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="Bookmark" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg3.svg"
                            alt="Bookmark">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg3dark.svg"
                            alt="Bookmark">
                    </button>
                    <button
                        class="p-2 mr-2 text-gray-600 bg-gray-100 border border-transparent rounded cursor-pointer dark:text-gray-400 dark:hover:bg-gray-600 dark:bg-gray-700 hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="copy table" role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg4.svg"
                            alt="">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg4dark.svg"
                            alt="">
                    </button>
                    <button
                        class="p-2 text-red-500 bg-gray-100 border border-transparent rounded cursor-pointer dark:bg-gray-700 dark:hover:bg-gray-600 hover:bg-gray-200 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                        aria-label="delete table" role="button">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg5.svg"
                            alt="delete">
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-start justify-end w-full lg:w-2/3 lg:flex-row lg:items-center">
                <div class="flex items-center py-3 border-gray-300 lg:border-l lg:border-r lg:py-0 lg:px-6">
                    <p class="text-base text-gray-600 dark:text-gray-400" id="page-view">Viewing 1 - 20 of 60</p>
                    <button
                        class="ml-2 text-gray-600 border border-transparent rounded cursor-pointer dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 "
                        onclick="pageView(false)" aria-label="Goto previous page " role="button">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg6.svg"
                            alt="">
                        <img class="hidden dark:block" src="../svgs/svg6dark.svg" alt="">
                    </button>
                    <button
                        class="text-gray-600 border border-transparent rounded cursor-pointer dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500"
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
                            class="absolute inset-0 z-0 w-5 h-5 m-auto mr-2 text-gray-600 pointer-events-none dark:text-gray-400 xl:mr-4">
                            <img class="transform -rotate-90 dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg6.svg"
                                alt="">
                        </div>
                        <select aria-label="Selected tab"
                            class="block w-full px-2 py-2 text-base text-gray-600 bg-transparent border border-transparent rounded appearance-none focus:outline-none focus:border-gray-800 focus:shadow-outline-gray form-select xl:px-3 dark:text-gray-400">
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
            <table class="min-w-full bg-white dark:bg-gray-800">
                <thead>
                    <tr class="w-full h-16 py-8 border-b border-gray-300">
                        <th
                            class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="checkAll(this)" />
                        </th>
                        <th
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            <div class="relative w-10 text-gray-600 opacity-0 cursor-default dark:text-gray-400">
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 mr-2 -mt-1 text-xs text-white bg-indigo-700 rounded-full">
                                    3</div>
                                <img class="dark:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                    alt="icon-tabler-file">
                                <img class="hidden dark:block"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                    alt="icon-tabler-file">
                            </div>
                        </th>
                        <th role="columnheader"
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            Invoice Number</th>
                        <th role="columnheader"
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            Client</th>
                        <th role="columnheader"
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            Company Contact</th>
                        <th role="columnheader"
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            Amount</th>
                        <th role="columnheader"
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            Date</th>
                        <th
                            class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            <div class="w-2 h-2 bg-indigo-400 rounded-full opacity-0"></div>
                        </th>
                        <td role="columnheader"
                            class="pr-8 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 dark:text-gray-400">
                            More</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-24 border-b border-gray-300">
                        <td
                            class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="tableInteract(this)" />
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div aria-label="documents" role="contentinfo"
                                class="relative w-10 text-gray-600 dark:text-gray-400">
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 mr-2 -mt-1 text-xs text-white bg-indigo-700 rounded-full">
                                    3</div>
                                <img class="dark:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                    alt="icon-tabler-file">
                                <img class="hidden dark:block"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                    alt="icon-tabler-file">
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            #MC10023</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            Toyota Motors</td>
                        <td class="pr-6 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/advance_tables/at_1.png"
                                        alt="Display Avatar of Carrie Anthony" role="img"
                                        class="w-full h-full overflow-hidden rounded-full shadow" />
                                </div>
                                <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 dark:text-gray-100">
                                    Carrie Anthony</p>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            $2,500</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            02.03.20</td>
                        <td class="pr-6">
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                        </td>
                        <td class="relative pr-8">
                            <button onclick="dropdownFunction(this)" aria-label="dropdown" role="button"
                                class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                    alt="dropdown">
                            </button>
                            <div class="absolute left-0 z-10 hidden w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                <ul class="py-1 bg-white rounded shadow dark:bg-gray-800">
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Edit</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Delete</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Duplicate</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="h-24 border-b border-gray-300">
                        <td
                            class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="tableInteract(this)" />
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="relative w-10 text-gray-400">
                                <img class="dark:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                    alt="icon-tabler-file">
                                <img class="hidden dark:block"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                    alt="icon-tabler-file">
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            #MC10023</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            Toyota Motors</td>
                        <td class="pr-6 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/advance_tables/at_2.png"
                                        alt="Display Avatar of Carrie Anthony" role="img"
                                        class="w-full h-full overflow-hidden rounded-full shadow" />
                                </div>
                                <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 dark:text-gray-100">
                                    Carrie Anthony</p>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            $2,500</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            02.03.20</td>
                        <td class="pr-6">
                            <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </td>
                        <td class="relative pr-8">
                            <button onclick="dropdownFunction(this)" aria-label="dropdown" role="button"
                                class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                                aria-label="Options expandable" role="button">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                    alt="dropdown">
                            </button>
                            <div class="absolute left-0 z-10 hidden w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                <ul class="py-1 bg-white rounded shadow dark:bg-gray-800">
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Edit</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Delete</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Duplicate</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="h-24 border-b border-gray-300">
                        <td
                            class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="tableInteract(this)" />
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="relative w-10 text-gray-400">
                                <img class="dark:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                    alt="icon-tabler-file">
                                <img class="hidden dark:block"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                    alt="icon-tabler-file">
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            #MC10023</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            Toyota Motors</td>
                        <td class="pr-6 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/advance_tables/at_3.png"
                                        alt="Display Avatar of Carrie Anthony" role="img"
                                        class="w-full h-full overflow-hidden rounded-full shadow" />
                                </div>
                                <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 dark:text-gray-100">
                                    Carrie Anthony</p>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            $2,500</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            02.03.20</td>
                        <td class="pr-6">
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                        </td>
                        <td class="relative pr-8">
                            <button onclick="dropdownFunction(this)" aria-label="dropdown" role="button"
                                class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                    alt="dropdown">
                            </button>
                            <div class="absolute left-0 z-10 hidden w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                <ul class="py-1 bg-white rounded shadow dark:bg-gray-800">
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Edit</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Delete</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Duplicate</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="h-24 border-b border-gray-300">
                        <td
                            class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="tableInteract(this)" />
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="relative w-10 text-gray-400">
                                <img class="dark:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                    alt="icon-tabler-file">
                                <img class="hidden dark:block"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                    alt="icon-tabler-file">
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            #MC10023</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            Toyota Motors</td>
                        <td class="pr-6 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/advance_tables/at_1.png"
                                        alt="Display Avatar of Carrie Anthony" role="img"
                                        class="w-full h-full overflow-hidden rounded-full shadow" />
                                </div>
                                <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 dark:text-gray-100">
                                    Carrie Anthony</p>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            $2,500</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            02.03.20</td>
                        <td class="pr-6">
                            <div class="w-2 h-2 bg-indigo-400 rounded-full"></div>
                        </td>
                        <td class="relative pr-8">
                            <button onclick="dropdownFunction(this)" aria-label="dropdown" role="button"
                                class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 ">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                    alt="dropdown">
                            </button>
                            <div class="absolute left-0 z-10 hidden w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                <ul class="py-1 bg-white rounded shadow dark:bg-gray-800">
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Edit</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Delete</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Duplicate</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="h-24 border-b border-gray-300">
                        <td
                            class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="tableInteract(this)" />
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="relative w-10">
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 mr-2 -mt-1 text-xs text-white bg-indigo-700 rounded-full">
                                    1</div>
                                <div class="text-gray-600 dark:text-gray-400">
                                    <img class="dark:hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                        alt="icon-tabler-file">
                                    <img class="hidden dark:block"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                        alt="icon-tabler-file">
                                </div>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            #MC10023</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            Toyota Motors</td>
                        <td class="pr-6 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/advance_tables/at_2.png"
                                        alt="Display Avatar of Carrie Anthony" role="img"
                                        class="w-full h-full overflow-hidden rounded-full shadow" />
                                </div>
                                <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 dark:text-gray-100">
                                    Carrie Anthony</p>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            $2,500</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            02.03.20</td>
                        <td class="pr-6">
                            <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </td>
                        <td class="relative pr-8">
                            <button onclick="dropdownFunction(this)" aria-label="dropdown" role="button"
                                class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                    alt="dropdown">
                            </button>
                            <div class="absolute left-0 z-10 hidden w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                <ul class="py-1 bg-white rounded shadow dark:bg-gray-800">
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Edit</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Delete</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Duplicate</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="h-24 border-b border-gray-300">
                        <td
                            class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <input placeholder="check box" type="checkbox"
                                class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
                                onclick="tableInteract(this)" />
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="relative w-10">
                                <div
                                    class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 mr-2 -mt-1 text-xs text-white bg-indigo-700 rounded-full">
                                    5</div>
                                <div class="text-gray-600 dark:text-gray-400">
                                    <img class="dark:hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8.svg"
                                        alt="icon-tabler-file">
                                    <img class="hidden dark:block"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg8dark.svg"
                                        alt="icon-tabler-file">
                                </div>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            #MC10023</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            Toyota Motors</td>
                        <td class="pr-6 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/advance_tables/at_3.png"
                                        alt="Display Avatar of Carrie Anthony" role="img"
                                        class="w-full h-full overflow-hidden rounded-full shadow" />
                                </div>
                                <p class="ml-2 text-sm leading-4 tracking-normal text-gray-800 dark:text-gray-100">
                                    Carrie Anthony</p>
                            </div>
                        </td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            $2,500</td>
                        <td
                            class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            02.03.20</td>
                        <td class="pr-6">
                            <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                        </td>
                        <td class="relative pr-8">
                            <button onclick="dropdownFunction(this)" aria-label="dropdown" role="button"
                                class="text-gray-500 border border-transparent rounded cursor-pointer dropbtn focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/compact_table_with_actions_and_select-svg9.svg"
                                    alt="dropdown">
                            </button>
                            <div class="absolute left-0 z-10 hidden w-32 mt-1 -ml-12 shadow-md dropdown-content">
                                <ul class="py-1 bg-white rounded shadow dark:bg-gray-800">
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Edit</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Delete</li>
                                    <li
                                        class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer dark:text-gray-400 hover:bg-indigo-700 hover:text-white">
                                        Duplicate</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
</div>