<div>
    @if (session()->has('success'))
        <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500 mb-5"
            role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
            <span id="hs-soft-color-success-label" class="font-bold">Success</span>
            {{ session('success') }}
        </div>
    @endif

    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Transaksi
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Add transaksi, edit and more.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">

                                <button type="button" wire:click="openModal"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Add Transaksi
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div class="py-3 px-4 border-b border-gray-200">
                        <div class="relative max-w-xs">
                            <label for="hs-table-search" class="sr-only">Search</label>
                            <input type="text" name="hs-table-search" id="hs-table-search"
                                wire:model.live.debounce.250ms="search"
                                class="py-1.5 sm:py-2 px-3 ps-9 block w-full border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Search for items">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                <svg class="size-4 text-gray-400 dark:text-neutral-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-800">
                            <tr>
                                <th scope="col" class="ps-6 pe-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            #
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Nama Customer
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            No HP Customer
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Service
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Berat
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Total Pembayaran
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Status
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Payment Method
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                                            Order Date
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-end"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach ($orders as $item)
                                <tr>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 pe-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $loop->iteration }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 pe-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $item->customer->name }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 pe-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $item->customer->phone_number }}</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-48 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $item->detail->service->name }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $item->detail->weight }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Rp
                                                {{ number_format($item->total_amount, 0, ',', '.') }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            @if ($item->status == 'completed')
                                                <div>
                                                    <span
                                                        class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                        <svg class="shrink-0 size-3"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                                            </path>
                                                            <path d="m9 12 2 2 4-4"></path>
                                                        </svg>
                                                        Complete
                                                    </span>
                                                </div>
                                            @elseif ($item->status == 'pending')
                                                <div>
                                                    <span
                                                        class="py-1 px-2 inline-flex items-center gap-x-1 text-xs bg-orange-100 text-orange-800 rounded-full dark:bg-neutral-500/20 dark:text-neutral-400">
                                                        <svg class="shrink-0 size-3"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z">
                                                            </path>
                                                            <path d="M12 9v4"></path>
                                                            <path d="M12 17h.01"></path>
                                                        </svg>
                                                        Pending
                                                    </span>
                                                </div>
                                            @elseif($item->status == 'process')
                                                <div>
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                                        <svg class="shrink-0 size-3"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <line x1="12" x2="12" y1="2"
                                                                y2="6"></line>
                                                            <line x1="12" x2="12" y1="18"
                                                                y2="22"></line>
                                                            <line x1="4.93" x2="7.76" y1="4.93"
                                                                y2="7.76"></line>
                                                            <line x1="16.24" x2="19.07" y1="16.24"
                                                                y2="19.07"></line>
                                                            <line x1="2" x2="6" y1="12"
                                                                y2="12"></line>
                                                            <line x1="18" x2="22" y1="12"
                                                                y2="12"></line>
                                                            <line x1="4.93" x2="7.76" y1="19.07"
                                                                y2="16.24"></line>
                                                            <line x1="16.24" x2="19.07" y1="7.76"
                                                                y2="4.93"></line>
                                                        </svg>
                                                        Proses
                                                    </span>
                                                </div>
                                            @else
                                                <div>
                                                    <span
                                                        class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-sky-100 text-sky-800 rounded-full dark:bg-sky-500/10 dark:text-sky-500">
                                                        <svg class="shrink-0 size-3"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                                            </path>
                                                            <path d="m9 12 2 2 4-4"></path>
                                                        </svg>
                                                        Selesai
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500 capitalize">{{ $item->payment?->payment_method ?? '-' }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="flex gap-2">
                                            <div class="py-1.5">
                                                <div class="hs-tooltip inline-block">
                                                    <button type="button"
                                                        {{ $item->status == 'completed' ? 'disabled' : '' }}
                                                        class="hs-tooltip-toggle py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md bg-sky-400 text-white shadow-2xs hover:bg-sky-500 focus:outline-hidden focus:bg-sky-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 disabled:cursor-not-allowed"
                                                        wire:click="edit({{ $item->id }})">
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g class="edit-outline">
                                                                <g fill="currentColor" fill-rule="evenodd"
                                                                    class="Vector" clip-rule="evenodd">
                                                                    <path
                                                                        d="M2 6.857A4.857 4.857 0 0 1 6.857 2H12a1 1 0 1 1 0 2H6.857A2.857 2.857 0 0 0 4 6.857v10.286A2.857 2.857 0 0 0 6.857 20h10.286A2.857 2.857 0 0 0 20 17.143V12a1 1 0 1 1 2 0v5.143A4.857 4.857 0 0 1 17.143 22H6.857A4.857 4.857 0 0 1 2 17.143z" />
                                                                    <path
                                                                        d="m15.137 13.219l-2.205 1.33l-1.033-1.713l2.205-1.33l.003-.002a1.2 1.2 0 0 0 .232-.182l5.01-5.036a3 3 0 0 0 .145-.157c.331-.386.821-1.15.228-1.746c-.501-.504-1.219-.028-1.684.381a6 6 0 0 0-.36.345l-.034.034l-4.94 4.965a1.2 1.2 0 0 0-.27.41l-.824 2.073a.2.2 0 0 0 .29.245l1.032 1.713c-1.805 1.088-3.96-.74-3.18-2.698l.825-2.072a3.2 3.2 0 0 1 .71-1.081l4.939-4.966l.029-.029c.147-.15.641-.656 1.24-1.02c.327-.197.849-.458 1.494-.508c.74-.059 1.53.174 2.15.797a2.9 2.9 0 0 1 .845 1.75a3.15 3.15 0 0 1-.23 1.517c-.29.717-.774 1.244-.987 1.457l-5.01 5.036q-.28.281-.62.487m4.453-7.126s-.004.003-.013.006z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span
                                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                                            role="tooltip">
                                                            Update
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="py-1.5">
                                                <div class="hs-tooltip inline-block">
                                                    <button type="button"
                                                        {{ $item->status == 'completed' ? 'disabled' : '' }}
                                                        class="hs-tooltip-toggle py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md bg-orange-400 text-white shadow-2xs hover:bg-orange-500 focus:outline-hidden focus:bg-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 disabled:cursor-not-allowed"
                                                        wire:click="changeStatus({{ $item->id }})">
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 20 20">
                                                            <path fill="currentColor"
                                                                d="M18 5.75a.75.75 0 0 0-.75-.75H2.75a.75.75 0 0 0 0 1.5h14.5a.75.75 0 0 0 .75-.75m0 3a.75.75 0 0 0-.75-.75H2.75a.75.75 0 0 0 0 1.5h9.456A5.5 5.5 0 0 1 14.5 9a5.5 5.5 0 0 1 2.294.5h.456a.75.75 0 0 0 .75-.75M9.022 14a5.6 5.6 0 0 0 .069 1.5H2.75a.75.75 0 0 1 0-1.5zm1.235-3a5.5 5.5 0 0 0-.882 1.5H2.75a.75.75 0 0 1 0-1.5zM19 14.5a4.5 4.5 0 1 0-9 0a4.5 4.5 0 0 0 9 0m-2.5-2a.5.5 0 0 1 .749.657l-.06.068l-3.512 3.64a.5.5 0 0 1-.666.021l-.067-.067l-1.34-1.645a.5.5 0 0 1 .713-.696l.063.064l.999 1.227z" />
                                                        </svg>
                                                        <span
                                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                                            role="tooltip">
                                                            Change Status
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="py-1.5">
                                                <div class="hs-tooltip inline-block">
                                                    <button type="button"
                                                        {{ $item->status != 'completed' ? 'disabled' : '' }}
                                                        class="hs-tooltip-toggle py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md bg-gray-400 text-white shadow-2xs hover:bg-gray-500 focus:outline-hidden focus:bg-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 disabled:cursor-not-allowed"
                                                        wire:click="print({{ $item->id }})">
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor" stroke-width="1">
                                                                <path
                                                                    d="M18 13.5h.5c.943 0 1.414 0 1.707-.293s.293-.764.293-1.707v-1c0-1.886 0-2.828-.586-3.414S18.386 6.5 16.5 6.5h-9c-1.886 0-2.828 0-3.414.586S3.5 8.614 3.5 10.5v2c0 .471 0 .707.146.854c.147.146.383.146.854.146H6" />
                                                                <path
                                                                    d="M6.5 19.806V11.5c0-.943 0-1.414.293-1.707S7.557 9.5 8.5 9.5h7c.943 0 1.414 0 1.707.293s.293.764.293 1.707v8.306c0 .317 0 .475-.104.55s-.254.025-.554-.075l-2.168-.723a.5.5 0 0 0-.173-.042a.5.5 0 0 0-.171.052l-2.144.858a.5.5 0 0 1-.186.055a.5.5 0 0 1-.186-.055l-2.144-.858c-.084-.034-.126-.05-.17-.052s-.088.013-.174.042l-2.168.723c-.3.1-.45.15-.554.075s-.104-.233-.104-.55Z" />
                                                                <path stroke-linecap="round" d="M9.5 13.5h4m-4 3h5" />
                                                                <path
                                                                    d="M17.5 6.5v-.4c0-1.697 0-2.546-.527-3.073S15.597 2.5 13.9 2.5h-3.8c-1.697 0-2.546 0-3.073.527S6.5 4.403 6.5 6.1v.4" />
                                                            </g>
                                                        </svg>
                                                        <span
                                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                                            role="tooltip">
                                                            Print Struck
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                <span
                                    class="font-semibold text-gray-800 dark:text-neutral-200">{{ $orders->total() }}</span>
                                results
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button" {{ $orders->onFirstPage() ? 'disabled' : '' }}
                                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    wire:click="previousPage" wire:loading.attr="disabled" rel="prev">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button" {{ $orders->onLastPage() ? 'disabled' : '' }}
                                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    wire:click="nextPage" wire:loading.attr="disabled" rel="next">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    @livewire('components.order.modalform')
    @livewire('components.order.modalchange')
</div>
