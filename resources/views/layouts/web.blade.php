<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="{{ asset('images/background.svg') }}" />
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <a href="{{ url("/") }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(2.56,2.56)"><path d="M70,18.988h-39c-6.6,0 -12,5.4 -12,12v39c0,6.6 5.4,12 12,12h39c6.6,0 12,-5.4 12,-12v-39c0,-6.6 -5.4,-12 -12,-12z" fill="#afa1d3"></path><path d="M70,83h-39c-7.18,0 -13,-5.82 -13,-13v-39c0,-7.18 5.82,-13 13,-13h39c7.18,0 13,5.82 13,13v39c0,7.18 -5.821,13 -13,13zM20,31v39c0,6.075 4.925,11 11,11h39c6.075,0 11,-4.925 11,-11v-39c0,-6.075 -4.925,-11 -11,-11h-39c-6.076,0 -11,4.925 -11,11z" fill="#1f212b"></path><path d="M67.162,78h-33.325c-5.985,0 -10.837,-4.852 -10.837,-10.837v-33.326c0,-5.985 4.852,-10.837 10.837,-10.837h33.663c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5h-33.663c-5.433,0 -9.837,4.404 -9.837,9.837v33.325c0,5.433 4.405,9.838 9.838,9.838h33.325c5.433,0 9.837,-4.404 9.837,-9.837v-18.663c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5v18.662c0,5.986 -4.853,10.838 -10.838,10.838zM77.5,45.579c-0.276,0 -0.5,-0.224 -0.5,-0.5v-4c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5v4c0,0.277 -0.224,0.5 -0.5,0.5zM77.5,39.579c-0.276,0 -0.5,-0.224 -0.5,-0.5v-2c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5v2c0,0.277 -0.224,0.5 -0.5,0.5z" fill="#1f212b"></path><path d="M52.461,39.004c5.135,0 8.011,2.806 9.454,3.745c0.352,0.229 0.816,0.173 1.114,-0.123l2.855,-3.225c0.374,-0.37 0.365,-0.973 -0.033,-1.318c-1.131,-0.982 -3.626,-2.831 -7.417,-4.066l0.861,-4.097c0.119,-0.56 -0.311,-1.087 -0.883,-1.087h-5.534c-0.426,0 -0.796,0.3 -0.883,0.717l-0.686,3.264c-0.191,-0.006 -0.36,-0.034 -0.554,-0.036c-5.769,-0.058 -10.743,3.766 -11.348,8.567c-0.576,4.563 1.103,10.024 10.465,12.453c5.24,1.36 6.186,3.004 5.917,4.945c-0.283,2.049 -2.481,3.391 -7.197,3.134c-4.063,-0.222 -7.146,-2.883 -8.479,-3.931c-0.367,-0.287 -0.883,-0.247 -1.204,0.09l-3.004,3.387c-0.329,0.345 -0.339,0.876 -0.02,1.228c1.11,1.228 3.899,3.863 8.077,5.101l-0.699,3.323c-0.117,0.562 0.311,1.089 0.885,1.089h5.534c0.426,0 0.796,-0.3 0.883,-0.717l0.662,-3.148c7.239,-0.739 11.366,-4.726 12.246,-8.631c1.06,-4.696 -0.619,-10.51 -10.599,-12.762c-4.503,-1.017 -5.975,-2.92 -5.697,-5.122c0.199,-1.574 2.124,-2.78 5.284,-2.78z" fill="#fafafa"></path><path d="M49.68,72.667h-5.534c-0.425,0 -0.822,-0.189 -1.09,-0.519c-0.268,-0.33 -0.372,-0.757 -0.284,-1.173l0.605,-2.879c-4.146,-1.353 -6.866,-4.003 -7.865,-5.108c-0.497,-0.548 -0.485,-1.368 0.029,-1.907l2.992,-3.375c0.51,-0.538 1.317,-0.6 1.887,-0.151l0.281,0.223c1.387,1.104 4.274,3.402 7.917,3.603c4.034,0.221 6.403,-0.742 6.674,-2.704c0.205,-1.481 -0.324,-3.038 -5.547,-4.393c-9.985,-2.591 -11.404,-8.5 -10.835,-13c0.644,-5.109 5.869,-9.066 11.849,-9.005c0.051,0 0.101,0.002 0.15,0.005l0.597,-2.836c0.135,-0.645 0.712,-1.114 1.372,-1.114h5.534c0.426,0 0.823,0.189 1.091,0.521c0.267,0.33 0.369,0.756 0.281,1.17l-0.77,3.66c3.651,1.264 6.043,3.047 7.164,4.021c0.295,0.256 0.464,0.611 0.477,1c0.014,0.39 -0.14,0.773 -0.419,1.05l-2.834,3.201c-0.486,0.486 -1.219,0.564 -1.761,0.209c-0.228,-0.148 -0.492,-0.342 -0.794,-0.564c-1.572,-1.159 -4.206,-3.099 -8.387,-3.099c-2.686,0 -4.61,0.943 -4.789,2.346c-0.274,2.176 1.512,3.714 5.311,4.571c4.675,1.055 7.954,2.964 9.746,5.676c1.826,2.764 1.677,5.704 1.229,7.684c-0.809,3.591 -4.521,8.06 -12.317,8.979l-0.588,2.794c-0.134,0.645 -0.711,1.114 -1.372,1.114zM39.56,58.256c-0.105,0 -0.209,0.043 -0.289,0.127l-2.993,3.375c-0.16,0.168 -0.165,0.403 -0.023,0.56c0.978,1.081 3.697,3.728 7.849,4.958l0.442,0.131l-0.794,3.774c-0.034,0.164 0.037,0.281 0.082,0.337c0.045,0.056 0.146,0.149 0.314,0.149h5.534c0.189,0 0.355,-0.134 0.394,-0.318l0.737,-3.507l0.363,-0.037c7.518,-0.768 11.06,-4.921 11.809,-8.245c0.404,-1.79 0.543,-4.441 -1.089,-6.911c-1.646,-2.489 -4.718,-4.256 -9.133,-5.252c-5.462,-1.233 -6.323,-3.766 -6.082,-5.672c0.249,-1.957 2.518,-3.22 5.781,-3.22c4.51,0 7.309,2.062 8.98,3.294c0.283,0.208 0.531,0.392 0.746,0.532c0.15,0.099 0.356,0.073 0.488,-0.058l2.834,-3.202c0.105,-0.107 0.15,-0.216 0.146,-0.331c-0.004,-0.108 -0.051,-0.207 -0.134,-0.279c-1.106,-0.961 -3.52,-2.754 -7.244,-3.968l-0.427,-0.139l0.954,-4.536c0.034,-0.162 -0.035,-0.279 -0.08,-0.334c-0.077,-0.095 -0.191,-0.149 -0.313,-0.149h-5.534c-0.189,0 -0.354,0.134 -0.394,0.319l-0.772,3.674l-0.419,-0.013c-0.097,-0.003 -0.189,-0.011 -0.281,-0.019c-0.125,-0.011 -0.257,-0.018 -0.388,-0.017c-5.448,0 -10.144,3.552 -10.721,8.13c-0.518,4.103 0.813,9.499 10.094,11.906c4.833,1.254 6.654,2.847 6.286,5.498c-0.204,1.478 -1.478,3.905 -7.719,3.565c-3.962,-0.217 -7.018,-2.649 -8.486,-3.818l-0.275,-0.218c-0.073,-0.058 -0.158,-0.086 -0.243,-0.086z" fill="#1f212b"></path></g></g>
                        </svg>
                    </a>
                </div>
                @if (filament()->getLoginUrl())
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                    href="{{ url(filament()->getHomeUrl()) }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                {{ ucfirst(filament()->getCurrentPanel()->getId()) }}
                            </a>
                        @else
                            <a
                                    href="{{ url('/price') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Price
                            </a>

                            <a
                                    href="{{ url(filament()->getLoginUrl()) }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>

                            @if (filament()->getRegistrationUrl())
                                <a
                                        href="{{ url(filament()->getRegistrationUrl()) }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main class="mt-6">
                @yield('content')
            </main>


            <footer>
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <a href="https://stedigate.com/" class="flex items-center">
                                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Stedigate</span>
                            </a>
                        </div>
                        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="https://flowbite.com/" class="hover:underline">Documentation</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="https://tailwindcss.com/" class="hover:underline">API Reference</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="https://tailwindcss.com/" class="hover:underline">Status Page</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="https://tailwindcss.com/" class="hover:underline">Blog</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/" class="hover:underline">Invoice Page Demo</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="{{ url('/cookie-policy') }}" class="hover:underline">Cookie Policy</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="{{ url('/privacy-policy') }}" class="hover:underline">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/term-of-use') }}" class="hover:underline">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <div class="sm:flex sm:items-center sm:justify-between">
                                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Stedigate™</a>. All Rights Reserved.
                                </span>
                        <div class="flex mt-4 sm:justify-center sm:mt-0">
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                    <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                                </svg>
                                <span class="sr-only">Discord community</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Dribbble account</span>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</div>
</body>
</html>
