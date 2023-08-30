<header class="bg-black sticky top-0 z-50">
    <nav class="mx-auto flex items-center justify-between px-6 lg:px-8" aria-label="Global">
        <div class="flex flex-1">
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative" x-data="{ open: false }">
                    <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 font-p text-white" @click="open = !open">
                        Collections
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" x-description="'Product' flyout menu, show/hide based on flyout menu state." class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden bg-white shadow-lg ring-1 ring-gray-900/5" x-ref="panel" @click.away="open = false">
                        <div class="p-4">
                            <div class="group relative flex gap-x-6  p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center  bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-full group-hover:bg-white">
                                    <svg class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill="#0a0101" d="M20.5 11H19V7a2 2 0 0 0-2-2h-4V3.5A2.5 2.5 0 0 0 10.5 1A2.5 2.5 0 0 0 8 3.5V5H4a2 2 0 0 0-2 2v3.8h1.5c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H2V20a2 2 0 0 0 2 2h3.8v-1.5c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7V22H17a2 2 0 0 0 2-2v-4h1.5a2.5 2.5 0 0 0 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5Z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('collections', 'jeu') }}" class="block font-semibold text-gray-900">
                                        Jeux
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                </div>
                            </div>
                            <div class="group relative flex gap-x-6  p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-full bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill="#0a0101" d="M7 5.6L5.6 7L3.5 4.9l1.4-1.4L7 5.6M1 13h3v-2H1v2M13 1h-2v3h2V1m-3 21c0 .6.4 1 1 1h2c.6 0 1-.4 1-1v-1h-4v1m10-11v2h3v-2h-3m-.9-7.5L17 5.6L18.4 7l2.1-2.1l-1.4-1.4M18 12c0 2.2-1.2 4.2-3 5.2V19c0 .6-.4 1-1 1h-4c-.6 0-1-.4-1-1v-1.8c-1.8-1-3-3-3-5.2c0-3.3 2.7-6 6-6s6 2.7 6 6m-9.44-2h6.88C14.75 8.81 13.5 8 12 8s-2.75.81-3.44 2Z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('collections', 'concept') }}" class="block font-semibold text-gray-900">
                                        Concepts
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                                </div>
                            </div>
                            <div class="group relative flex gap-x-6  p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-full bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                                        <g fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.22 13.956c1.044-3.896-1.428-7.92-5.489-9.008c-4.586-1.23-11.095 1.964-9.647 6.061c.48 1.355 1.404 1.672 3.147 1.697l.109.002c.921.011 1.18.071 1.258.197c.127.208.129.539-.014 1.45c-.068.43-.09.58-.116.815c-.159 1.431.083 2.547 1.02 3.557c2.928 3.153 8.553-.373 9.732-4.771ZM2.97 10.341c-.729-2.06 3.936-4.349 7.243-3.463c3.017.809 4.826 3.754 4.075 6.559c-.838 3.128-4.782 5.6-6.334 3.928c-.48-.516-.599-1.068-.498-1.975c.021-.194.041-.328.104-.726c.219-1.397.216-2.035-.258-2.806c-.594-.967-1.3-1.13-2.937-1.151l-.106-.002c-.964-.013-1.193-.092-1.29-.364Z" clip-rule="evenodd" />
                                            <path d="M6 10a1.25 1.25 0 1 1 0-2.5A1.25 1.25 0 0 1 6 10Zm3.75 0a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5Zm2.5 3a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5Zm-1.5 3.5a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5Zm3.62-12.895a1 1 0 0 1 1.371.443l4.093 8.4a.652.652 0 0 1-1.149.611l-4.708-8.07a.998.998 0 0 1 .394-1.384Z" />
                                            <path fill-rule="evenodd" d="M12.537 3.484c.487.915 1.306 1.171 2.098.75c.791-.42 1.038-1.243.551-2.158C14.63 1.028 13.438.078 12.648.497c-.79.42-.668 1.939-.11 2.987Zm.883-.47a3.165 3.165 0 0 1-.32-1.137a1.975 1.975 0 0 1 .018-.496l.018.009c.05.024.205.096.403.254c.302.241.602.596.764.901c.229.43.164.646-.138.807c-.3.16-.516.092-.745-.337Z" clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="{{ route('collections', 'art') }}" class="block font-semibold text-gray-900">
                                        Arts
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('concepts') }}" class="text-sm font-semibold leading-6 font-p text-white">Concepts & Conseils</a>
                <a href="{{ route('informations') }}" class="text-sm font-semibold leading-6 font-p text-white">Informations</a>
                <a href="#" class="text-sm font-semibold leading-6 font-p text-white">Boutique</a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
        <a href="{{ route('home') }}" class="-m-1.5 p-1.5 translate-y-6 bg-black rounded-full">
            <span class="sr-only">Your Company</span>
            <x-application-logo />
        </a>
        <div class="flex flex-1 justify-end">
            @auth
            <a href="{{ route('dashboard') }}" class="bg-yellow-400 hover:bg-yellow-500 transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="py-2 px-4 text-sm font-semibold leading-6 font-p text-white">Se connecter</a>
            <a href="{{ route('register') }}" class="bg-yellow-400 hover:bg-yellow-500 transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                S'inscrire
            </a>
            @endauth
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 left-0 z-10 w-full overflow-y-auto bg-white px-6 py-6">
            <div class="flex items-center justify-between">
                <div class="flex flex-1">
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
                <div class="flex flex-1 justify-end">
                    @auth

                    @else
                    <a href="{{ route('login') }}" class="py-2 px-4 font-p">Se connecter</a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-2.5 text-base font-medium leading-6 text-white whitespace-no-wrap bg-yellow-400 hover:bg-indigo-400border rounded-md">S'inscrire</a>
                    @endauth
                </div>
            </div>
            <div class="mt-6 space-y-2">
                <a href="#" class="-mx-3 block  px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                <a href="#" class="-mx-3 block  px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block  px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
            </div>
        </div>
    </div>
</header>