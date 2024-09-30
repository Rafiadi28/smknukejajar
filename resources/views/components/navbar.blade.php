<nav class="container mx-auto max-w-full px-4 sm:px-6 lg:px-8" x-data="{ isOpen: false }">
    <div class="flex h-32 items-center justify-between">
        <div class="flex items-center">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center ">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Logo SMK NU Kejajar">
                    <div class="font-bold text-4xl ml-2">SMK NU Kejajar</div>
                </a>
            </div>
        </div>
        <div class="flex items-center">
            <div class="hidden md:block">
                <div class="ml-10 flex gap-y-0 items-baseline">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/posts" :active="request()->is('posts')">Profil</x-nav-link>
                <x-nav-link href="/kejuruan" :active="request()->is('kejuruan')">Kejuruan</x-nav-link>
                <x-nav-link href="/bkk" :active="request()->is('bkk')">BKK</x-nav-link>
                <x-nav-link href="/ppdb" :active="request()->is('ppdb')">PPDB</x-nav-link>
                </div>
            </div>
        </div>

        <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click ="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md p-2 text-black hover:text-white focus:outline-none focus:ring-2 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen,'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen,'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show ="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Profil</x-nav-link>
            <x-nav-link href="/kejuruan" :active="request()->is('kejuruan')">Kejuruan</x-nav-link>
            <x-nav-link href="/ekstrakurikuler" :active="request()->is('ekstrakurikuler')">Ekstrakurikuler</x-nav-link>
            <x-nav-link href="/bkk" :active="request()->is('bkk')">BKK</x-nav-link>
            <x-nav-link href="/ppdb" :active="request()->is('ppdb')">PPDB</x-nav-link>
        </div>
    </div>
</nav>