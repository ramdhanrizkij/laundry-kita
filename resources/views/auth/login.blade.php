<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Kita | Login</title>
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div
            class="w-3/4 lg:w-2/4 xl:w-1/4 mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
            <div class="p-4 sm:p-7">
                <div class="flex justify-center flex-col mb-4">
                        <h2 class="flex items-center justify-center text-2xl font-medium text-gray-800 mb-2">Laundry Kita</h2>
                        <p>Please login with your email and password to continue</p>
                    </div>
                <div class="mt-5">
                    @if (session('success'))
                        <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500 mb-5"
                            role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                            <span id="hs-soft-color-success-label" class="font-bold">Success</span>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="mt-2 bg-rose-100 border border-rose-200 text-sm text-rose-800 rounded-lg p-4 dark:bg-rose-800/10 dark:border-rose-900 dark:text-rose-500 mb-5"
                            role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                            <span id="hs-soft-color-success-label" class="font-bold">Error</span>
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    

                    <!-- Form -->
                    <form action="{{ route('login.auth') }}" method="post">
                        @csrf
                        <div class="grid gap-y-4">
                            <!-- Form Group -->
                            <div>
                                <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email"
                                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 @error('email') border-red-500 @enderror"
                                        required aria-describedby="email-error"
                                        value="{{ old('email') }}">
                                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                        <svg class="size-5 text-red-500" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                @error('email')
                                    <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <div class="flex flex-wrap justify-between items-center gap-2">
                                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                    <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
                                        href="#">Forgot password?</a>
                                </div>
                                <div class="relative hs-tooltip">
                                    <input id="password" name="password"
                                        class="py-2.5 sm:py-3 px-4 pe-11 block w-full border-gray-200 rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 @error('password') border-red-500 @enderror"
                                        placeholder="xxxxx" type="password">
                                    <div class="absolute inset-y-0 end-0 flex items-center cursor-pointer z-20 pe-4 hs-tooltip-toggle"
                                        id="tooltip-button">
                                        <div id="show-button">
                                            <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-800"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2">
                                                    <path
                                                        d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575a1 1 0 0 1 0 .696a10.8 10.8 0 0 1-1.444 2.49m-6.41-.679a3 3 0 0 1-4.242-4.242" />
                                                    <path
                                                        d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151a1 1 0 0 1 0-.696a10.75 10.75 0 0 1 4.446-5.143M2 2l20 20" />
                                                </g>
                                            </svg>
                                            <span
                                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                                role="tooltip">
                                                Show Password
                                            </span>
                                        </div>

                                        <div class="hidden" id="hidden-button">
                                            <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-800"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2">
                                                    <path
                                                        d="M2.062 12.348a1 1 0 0 1 0-.696a10.75 10.75 0 0 1 19.876 0a1 1 0 0 1 0 .696a10.75 10.75 0 0 1-19.876 0" />
                                                    <circle cx="12" cy="12" r="3" />
                                                </g>
                                            </svg>
                                            <span
                                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                                role="tooltip">
                                                Hide Password
                                            </span>
                                        </div>

                                    </div>
                                    @error('password')
                                        <p class="hidden text-xs text-red-600 mt-2" id="password-error">{{ $message }}
                                        </p>
                                    @enderror

                                </div>
                                <!-- End Form Group -->

                                <!-- Checkbox -->
                                <div class="flex items-center mt-2 mb-2">
                                    <div class="flex">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <div class="ms-3">
                                        <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->

                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                                    in</button>
                            </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script>
        const tooltipButton = document.getElementById('tooltip-button');
        const showButton = document.getElementById('show-button');
        const hiddenButton = document.getElementById('hidden-button')
        const inputPassword = document.getElementById('password');

        tooltipButton.addEventListener('click', () => {
            const type = inputPassword.getAttribute('type');
            if (type == 'password') {
                inputPassword.setAttribute('type', 'text')
                showButton.classList.remove('hidden')
                hiddenButton.classList.add('hidden')
            } else {
                inputPassword.setAttribute('type', 'password')
                showButton.classList.add('hidden')
                hiddenButton.classList.remove('hidden')
            }
        })
    </script>
</body>

</html>
