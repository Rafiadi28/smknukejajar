<x-layout>
    <x-carousel></x-carousel>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="isolate flex items-center justify-center gap-9 my-9 mx-16">
            <img class="relative inline-block size-24 transition-all duration-300 ease-in-out hover:scale-125" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Rita Pasaraya">
            <img class="relative inline-block size-24 transition-all duration-300 ease-in-out hover:scale-125" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Honda Ahass">
            <img class="relative inline-block size-24 transition-all duration-300 ease-in-out hover:scale-125" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Dieng Cyber">
            <img class="relative inline-block size-24 transition-all duration-300 ease-in-out hover:scale-125" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Bank Wonosobo">
        </div>
        <div class="flex flex-col max-w-7xl items-center text-center mx-auto px-64 gap-3">
            <h7 class="text-3xl font-bold">Tentang SMK NU Kejajar</h7>
            <h3>SMK NU Kejajar adalah Sekolah yang terdiri dari Program Keahlian Rekayasa Perangkat Lunak, Adminsitrasi Perkantoran, Akuntansi dan Teknik Sepeda Motor.</h3>
            <div><a href="">Selanjutnya</a></div>
        </div>
        <div class="relative flex flex-col w-full items-center">
            <div class="flex justify-center rounded-3xl bg-green-500 px-12 py-12 my-6 -top-28">
                <div class="text-center px-6">
                    <div class="text-6xl">367</div>
                    <div>Siswa</div>
                </div>
                <div class="text-center px-6">
                    <div class="text-6xl">1.000+</div>
                    <div>Alumni</div>
                </div>
                <div class="text-center px-6">
                    <div class="text-6xl">500+</div>
                    <div>Alumni yang bekerja</div>
                </div>
                <div class="text-center px-6">
                    <div class="text-6xl">500+</div>
                    <div>Alumni yang berkuliah</div>
                </div>
            </div>
        </div>
        <div class="relative flex w-full h-full place-content-center mb-8">
            <div class="flex justify-center w-4/5">
                <div class="flex flex-col h-full justify-between p-4">
                    <div>Fasilitas</div>
                    <div>Fasilitas yang ada di SMK NU Kejajar untuk memenuhi kegiatan, praktik, dan pembelajaran.</div>
                    <div class="flex flex-col h-full justify-between">
                        <a href="">Lab Komputer</a>
                        <a href="">Bengkel</a>
                        <a href="">Balai Latihan Kerja</a>
                        <a href="">Perpustakaan</a>
                    </div>
                </div>
                <div class="w-4/6">
                    <img class="rounded-3xl" src="https://images.unsplash.com/photo-1665492095698-8ea8406cdf2a?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kantin">
                </div>
            </div>
        </div>

        <div class="relative flex flex-wrap content-center">
            <div class="flex flex-col items-center justify-center gap-3">
                <h1>Program Keahlian</h1>
                <h1>Jurusan yang ada di SMK NU Kejajar</h1>
                <div class="relative grid grid-cols-2 grid-rows-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1665492095698-8ea8406cdf2a?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kantin">
                    <img src="https://images.unsplash.com/photo-1665492095698-8ea8406cdf2a?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kantin">
                    <img src="https://images.unsplash.com/photo-1665492095698-8ea8406cdf2a?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kantin">
                    <img src="https://images.unsplash.com/photo-1665492095698-8ea8406cdf2a?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kantin">
                </div>
            </div>
        </div>
        <x-berita></x-berita>
        <x-testimoni></x-testimoni>    
    </div>
    <x-footer></x-footer>    
    <x-slot:title>{{ $title }}</x-slot:title>
</x-layout>
