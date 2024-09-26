<header x-data="{ scroll: false }" @scroll.window="scroll = (window.pageYOffset > 500) ? true : false" :class="{ 'bg-green-800': scroll, 'bg-transparent': !scroll }" class="fixed top-0 z-50 w-full transition-colors duration-300 ease-in-out">
    <x-navbar></x-navbar>
</header>
