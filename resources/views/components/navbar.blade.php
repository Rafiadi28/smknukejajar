<nav x-data="{ isOpen: false, atTop: true }" @scroll.window="atTop = (window.pageYOffset > 400 ? false : true)" class="fixed mx-auto z-50 w-full" :class="{'bg-clr-primary': isOpen}" @click.outside="isOpen = false">
    <div class="px-8 sm:px-9 lg:px-10 bg-clr-primary transition-colors duration-300 ease-in-out" :class="{'bg-clr-primary': !atTop, 'bg-transparent': atTop}">
        <div class="flex h-32 w-full items-center justify-between">
            <div class="flex gap-5 items-center justify-between">
                <template x-if="atTop">
                    <img class="h-20 w-20" src="/img/logo-smk/logo-smk-hitam.svg" alt="SMK NU Kejajar">
                </template>
                <template x-if="!atTop">
                    <img class="h-20 w-20" src="/img/logo-smk/logo-smk-putih.svg" alt="SMK NU Kejajar">
                </template>
                <span class="font-bold text-4xl" :class="!atTop || isOpen ? 'text-clr-white' : 'text-clr-black'">SMK NU Kejajar</span>
            </div>
            <div class="hidden lg:block">
                <div class="ml-10 flex items-baseline space-x-1">
                    <!-- Navbar Link -->
                    <ul x-data="{ isOpen: false, leaveTimeout: null}" class="ml-10 flex items-baseline space-x-1">
                        <!-- Navbar Link -->
                        <li>
                            <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
                        </li>
                        <li class="relative group px-4 py-3 text-sm" :class="{'{{ request()->is('profil') ? 'bg-clr-secondary text-clr-black' : 'text-clr-white hover:bg-clr-secondary hover:text-clr-black font-medium' }}': !atTop, '{{ request()->is('profil') ? 'bg-clr-primary text-clr-white' : 'text-clr-black hover:bg-clr-primary hover:text-clr-white font-semibold' }}': atTop}" aria-current="{{ request()->is('profil') ? 'page' : false }}" type="button" aria-expanded="isOpen" aria-haspopup="true" aria-hidden="!isOpen">
                            <!-- Toggle Button -->
                            <a href="/profil" class="flex">
                                Profil
                                <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="pt-1 size-4 rotate-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </a>
                            <!-- Dropdown Menu -->
                            <div class="absolute group-hover:block top-11 left-0 hidden w-full min-w-[12rem] flex-col overflow-hidden border" :class="!atTop ? 'border-clr-secondary bg-clr-primary ':' border-clr-primary bg-clr-secondary'" role="menu">
                                <x-nav-link href="/jurusan" :active="request()->is('jurusan')">Sejarah</x-nav-link>
                                <x-nav-link href="/berita" :active="request()->is('berita')">Visi dan Misi</x-nav-link>
                                <x-nav-link href="/bkk" :active="request()->is('bkk')">Fasilitas</x-nav-link>
                                <x-nav-link href="/ppdb" :active="request()->is('ppdb')">Ekstrakulikuler</x-nav-link>
                            </div>
                        </li>
                        <li class="relative group px-4 py-3 text-sm" :class="{'{{ request()->is('jurusan') ? 'bg-clr-secondary text-clr-black' : 'text-clr-white hover:bg-clr-secondary hover:text-clr-black font-medium' }}': !atTop, '{{ request()->is('jurusan') ? 'bg-clr-primary text-clr-white' : 'text-clr-black hover:bg-clr-primary hover:text-clr-white font-semibold' }}': atTop}" aria-current="{{ request()->is('jurusan') ? 'page' : false }}" type="button" aria-expanded="isOpen" aria-haspopup="true" aria-hidden="!isOpen">
                            <!-- Toggle Button -->
                            <a href="/jurusan" class="flex">
                                Jurusan
                                <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="pt-1 size-4 rotate-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </a>
                            <!-- Dropdown Menu -->
                            <div class="absolute group-hover:block top-11 left-0 hidden w-full min-w-[12rem] flex-col overflow-hidden border" :class="!atTop ? 'border-clr-secondary bg-clr-primary ':' border-clr-primary bg-clr-secondary'" role="menu">
                                <x-nav-link href="/profil" :active="request()->is('profil')">Akuntasi dan Keuangan Lembaga</x-nav-link>
                                <x-nav-link href="/berita" :active="request()->is('berita')">Otomatisasi dan Tata Kelola Perkantoran</x-nav-link>
                                <x-nav-link href="/bkk" :active="request()->is('bkk')">Pengembangan Perangkat Lunak dan Gim</x-nav-link>
                                <x-nav-link href="/ppdb" :active="request()->is('ppdb')">Teknik Otomotif</x-nav-link>
                            </div>
                        </li>
                        <li>
                            <x-nav-link href="/berita" :active="request()->is('berita')">Berita</x-nav-link>
                        </li>
                        <li>
                            <x-nav-link href="/bkk" :active="request()->is('bkk')">BKK</x-nav-link>
                        </li>
                        <li>
                            <x-nav-link href="/ppdb" :active="request()->is('ppdb')">PPDB</x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="-mr-2 flex lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-2" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="bg-black lg:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
            <x-nav-link href="/profil" :active="request()->is('profil')">Profil</x-nav-link>
            <div x-data="{ isOpen: false, openedWithKeyboard: false }" class="relative" @keydown.esc.window="isOpen = false, openedWithKeyboard = false">
                <!-- Toggle Button -->
                <button type="button" @click="isOpen = ! isOpen" class="flex px-4 py-3 text-sm font-medium w-full" aria-haspopup="true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" :class="!atTop ? 'text-gray-50 hover:bg-gray-700 hover:text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'" :aria-expanded="isOpen || openedWithKeyboard">
                    <span class="flex items-center justify-between w-full">
                        Profil
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="pt-1 size-4 rotate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </span>
                </button>
                <!-- Dropdown Menu -->
                <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="flex w-full min-w-[12rem] flex-col overflow-hidden ml-4" role="menu">
                    <x-nav-link href="/profil" :active="request()->is('profil')">Ringkasan Profil</x-nav-link>
                    <x-nav-link href="/jurusan" :active="request()->is('jurusan')">Sejarah</x-nav-link>
                    <x-nav-link href="/berita" :active="request()->is('berita')">Visi dan Misi</x-nav-link>
                    <x-nav-link href="/bkk" :active="request()->is('bkk')">Fasilitas</x-nav-link>
                    <x-nav-link href="/ppdb" :active="request()->is('ppdb')">Ekstrakulikuler</x-nav-link>
                </div>
            </div>
            <x-nav-link href="/jurusan" :active="request()->is('jurusan')">Jurusan</x-nav-link>
            <div x-data="{ isOpen: false, openedWithKeyboard: false }" class="relative" @keydown.esc.window="isOpen = false, openedWithKeyboard = false">
                <!-- Toggle Button -->
                <button type="button" @click="isOpen = ! isOpen" class="flex px-4 py-3 text-sm font-medium w-full" aria-haspopup="true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" :class="!atTop ? 'text-gray-50 hover:bg-gray-700 hover:text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'" :aria-expanded="isOpen || openedWithKeyboard">
                    <span class="flex items-center justify-between w-full">
                        Jurusan
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="pt-1 size-4 rotate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </span>
                </button>
                <!-- Dropdown Menu -->
                <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="flex w-full min-w-[12rem] flex-col overflow-hidden ml-4" role="menu">
                    <x-nav-link href="/jurusan" :active="request()->is('jurusan')">Ringkasan Jurusan</x-nav-link>
                    <x-nav-link href="/jurusan" :active="request()->is('jurusan')">Akuntansi dan Keuangan Lembaga</x-nav-link>
                    <x-nav-link href="/berita" :active="request()->is('berita')">Otomatisasi dan Tata Kelola Perkantoran</x-nav-link>
                    <x-nav-link href="/bkk" :active="request()->is('bkk')">Pengembangan Perangkat Lunak dan Gim</x-nav-link>
                    <x-nav-link href="/ppdb" :active="request()->is('ppdb')">Teknik Otomotif</x-nav-link>
                </div>
            </div>
            <x-nav-link href="/berita" :active="request()->is('berita')">Berita</x-nav-link>
            <x-nav-link href="/bkk" :active="request()->is('bkk')">BKK</x-nav-link>
            <x-nav-link href="/ppdb" :active="request()->is('ppdb')">PPDB</x-nav-link>
        </div>
    </div>
</nav>
