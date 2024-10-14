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
            <div class="bg-green-600 rounded-xl py-9 my-6">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                  <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-4">
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                      <dt class="text-base leading-7 text-gray-700">Siswa</dt>
                      <dd class="order-first text-3xl font-semibold tracking-tight text-black sm:text-5xl">367</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                      <dt class="text-base leading-7 text-gray-700">Alumni</dt>
                      <dd class="order-first text-3xl font-semibold tracking-tight text-black sm:text-5xl">1.000+</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                      <dt class="text-base leading-7 text-gray-700">Alumni yang bekerja</dt>
                      <dd class="order-first text-3xl font-semibold tracking-tight text-black sm:text-5xl">500+</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-gray-700">Alumni yang berkuliah</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-black sm:text-5xl">500+</dd>
                    </div>
                  </dl>
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
