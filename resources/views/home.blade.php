<x-layout>
    <div x-data="{
        autoplayIntervalTime: 5000,
        slides: [
        {
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            title: 'SMK NU Kejajar',
            description: 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.',
            ctaUrl: 'http://smknukejajar.sch.id/',
            ctaText: 'Situs SMK NU Kejajar',
        },
        {
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
            title: 'Back end developers',
            description: 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens',
            ctaUrl: '/posts',
            ctaText: 'Daftar',
        },
        {
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            title: 'Full stack developers',
            description: 'Where &quot;burnout&quot; is just a fancy term for &quot;Tuesday&quot;.',
            ctaUrl: 'https://example.com',
            ctaText: 'Become a Developer',
        },
        {
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            title: 'Full stack developers',
            description: 'Where &quot;burnout&quot; is just a fancy term for &quot;Tuesday&quot;.',
            ctaUrl: 'https://example.com',
            ctaText: 'Become a Developer',
        },
        ],
        currentSlideIndex: 1,
        isPaused: false,
        autoplayInterval: null,
        previous() {
            if (this.currentSlideIndex > 1) {
                this.currentSlideIndex = this.currentSlideIndex - 1
            } else {
                // If it's the first slide, go to the last slide
                this.currentSlideIndex = this.slides.length
            }
        },
        next() {
            if (this.currentSlideIndex < this.slides.length) {
                this.currentSlideIndex = this.currentSlideIndex + 1
            } else {
                // If it's the last slide, go to the first slide
                this.currentSlideIndex = 1
            }
        },
        autoplay() {
            this.autoplayInterval = setInterval(() => {
                if (! this.isPaused) {
                    this.next()
                }
            }, this.autoplayIntervalTime)
        },
        // Updates interval time
        setAutoplayInterval(newIntervalTime) {
            clearInterval(this.autoplayInterval)
            this.autoplayIntervalTime = newIntervalTime
            this.autoplay()
        },
    }" x-init="autoplay" class="relative w-full overflow-hidden">
    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-[90svh] w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>

                <!-- Title and description -->
                <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-neutral-950/85 to-transparent px-16 py-12 text-center">
                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                    <p class="lg:w-1/2 w-full text-pretty text-sm text-neutral-300" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                    <button type="button" @click="location.href=slide.ctaUrl" x-cloak x-show="slide.ctaUrl !== null" class="mt-2 cursor-pointer whitespace-nowrap rounded-md border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm" x-text="slide.ctaText"></button>
                </div>

                <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>

    <!-- Pause/Play Button -->
    <button type="button" class="absolute bottom-5 right-5 z-20 rounded-full text-neutral-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
        </svg>
        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
        </svg>
    </button>

    <!-- indicators -->
    <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 w-12 cursor-pointer rounded-full transition md:w-28 lg:w-56" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-300' : 'bg-neutral-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
    </div>

    <!-- Logo Mitra Kerja -->
    <div class="bg-white py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-4 max-h-12 w-full object-contain sm:col-span-2 lg:col-span-1 transition-all transform duration-300 hover:scale-125" src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                <img class="col-span-4 max-h-12 w-full object-contain sm:col-span-2 lg:col-span-1 transition-all transform duration-300 hover:scale-125" src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
                <img class="col-span-4 max-h-12 w-full object-contain sm:col-span-2 lg:col-span-1 transition-all transform duration-300 hover:scale-125" src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
                <img class="col-span-4 max-h-12 w-full object-contain sm:col-span-2 sm:col-start-2 lg:col-span-1 transition-all transform duration-300 hover:scale-125" src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
                <img class="col-span-4 max-h-12 w-full object-contain sm:col-span-2 lg:col-span-1 transition-all transform duration-300 hover:scale-125" src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
            </div>
        </div>
    </div>

    <!-- Profil Sekolah -->
    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-20 md:py-24">
        <img src="https://images.unsplash.com/photo-1527891751199-7225231a68dd?q=80&w=2070&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:text-start lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-white md:text-6xl">Tentang SMK NU Kejajar</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div class="grid grid-cols-3 gap-x-2 gap-y-6 text-base font-semibold leading-7 text-white sm:gap-x-8 lg:gap-x-10">
                    <a class="col-start-2 text-center lg:col-start-1 lg:text-start" href="#">Selengkapnya <span aria-hidden="true">&rarr;</span></a>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4 text-center">
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Siswa</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">367</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Alumni</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">1.000+</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Alumni yang bekerja</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">500+</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Alumni yang berkuliah</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">500+</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Program Keahlian -->
    <div class="bg-gray-50 py-8 sm:py-10">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-3xl font-semibold text-black">Program Keahlian</h2>
            <p class="mx-auto mt-2 max-w-lg text-pretty text-center text-xl font-medium tracking-tight text-gray-950">Jurusan yang ada di SMK NU Kejajar</p>
            <div class="mt-6 grid gap-4 px-4 sm:mt-8 md:grid-cols-2 lg:grid-rows-2">
                <div class="relative group h-60 md:h-80 lg:row-span-2">
                    <div class="absolute inset-px bg-white overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2022&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="AKL" class="absolute inset-0 h-full w-full object-cover transform transition-all duration-300 group-hover:scale-105">
                    </div>
                    <div class="relative flex h-full flex-col overflow-hidden justify-end">
                        <div class="bg-gradient-to-t from-neutral-950/85 to-transparent text-center px-8 pb-6 pt-8 sm:px-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-balance text-white">Akuntasi dan Keuangan Lembaga</p>
                            <p class="mt-2 mx-auto max-w-lg text-sm/6 leading-4 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, quod. Molestiae eligendi fugit reprehenderit nemo. Modi nam culpa consequatur quisquam sit quaerat necessitatibus excepturi et dolores, suscipit, eos corrupti iste!</p>
                        </div>
                    </div>
                </div>
                <div class="relative group h-60 md:h-80 lg:row-span-2">
                    <div class="absolute inset-px bg-white overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2022&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="OTKP" class="absolute inset-0 h-full w-full object-cover transform transition-all duration-300 group-hover:scale-105">
                    </div>
                    <div class="relative flex h-full flex-col overflow-hidden justify-end">
                        <div class="bg-gradient-to-t from-neutral-950/85 to-transparent text-center px-8 pb-6 pt-8 sm:px-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-balance text-white">Otomatisasi dan Tata Kelola Perkantoran</p>
                            <p class="mt-2 mx-auto max-w-lg text-sm/6 leading-4 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo ducimus dignissimos quos ipsum dolores blanditiis maxime obcaecati, molestiae hic at minima velit eaque exercitationem autem molestias praesentium. Exercitationem, placeat odit!</p>
                        </div>
                    </div>
                </div>
                <div class="relative group h-60 md:h-80 lg:row-span-2">
                    <div class="absolute inset-px bg-white overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2022&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="PPLG" class="absolute inset-0 h-full w-full object-cover transform transition-all duration-300 group-hover:scale-105">
                    </div>
                    <div class="relative flex h-full flex-col overflow-hidden justify-end">
                        <div class="bg-gradient-to-t from-neutral-950/85 to-transparent text-center px-8 pb-6 pt-8 sm:px-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-balance text-white">Pengembangan Perangkat Lunak dan Gim</p>
                            <p class="mt-2 mx-auto max-w-lg text-sm/6 leading-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt voluptatum architecto laudantium consequatur id quisquam dolor nobis, odit doloribus necessitatibus ratione iusto doloremque magni ipsa vero, vel sapiente eaque sequi.</p>
                        </div>
                    </div>
                </div>
                <div class="relative group h-60 md:h-80 lg:row-span-2">
                    <div class="absolute inset-px bg-white overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2022&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TO" class="absolute inset-0 h-full w-full object-cover transform transition-all duration-300 group-hover:scale-105">
                    </div>
                    <div class="relative flex h-full flex-col overflow-hidden justify-end">
                        <div class="bg-gradient-to-t from-neutral-950/85 to-transparent text-center px-8 pb-6 pt-8 sm:px-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-balance text-white">Teknik Otomotif</p>
                            <p class="mt-2 mx-auto max-w-lg text-sm/6 leading-4 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti itaque earum, illo deserunt velit minus, at architecto esse saepe iste fugiat, dolorem adipisci eveniet voluptatum nulla laboriosam facere! A, quaerat!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita -->
    <div class="bg-white py-8 sm:py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-3xl font-semibold text-black">Berita, Artikel dan Informasi</h2>
            <p class="mx-auto mt-2 max-w-lg text-pretty text-center text-xl font-medium tracking-tight text-gray-950">Kumpulan pengumuman, berita, artikel dan informasi di SMK NU Kejajar</p>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-12 sm:pt-12 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @for ($i = 0; $i < 3; $i++)
                <article class="flex max-w-2xl flex-col items-start justify-between gap-y-2 lg:max-w-xl">
                    <span class="absolute inset-0"></span>
                    <div class="max-h-56 overflow-hidden">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1527965408463-82ae0731825c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Berita" class="object-cover">
                        </a>
                    </div>
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    </div>
                    <div class="group relative">
                        <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-2 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="mt-1 flex items-center text-xs">
                        <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="relative flex items-center gap-x-2">
                        <svg class="size-6 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Admin SMK NU Kejajar
                            </a>
                            </p>
                        </div>
                    </div>
                </article>
                @endfor
            </div>
        </div>
    </div>


    <footer class="bg-gray-50 py-8 px-8 sm:py-10 sm:px-9 lg:px-10">
        <div class="mx-auto sm:mx-6 text-center md:text-left">
            <div class="grid gap-8 grid-cols-1 md:grid-cols-4 lg:grid-cols-6">
                <!-- Logo section -->
                <div class="col-span-4 md:col-span-3 lg:col-span-2 leading-5">
                    <h6 class="mb-8 flex items-center justify-center text-2xl sm:text-4xl font-bold sm:font-semibold text-balance uppercase md:justify-start">
                        <span class="me-3 max-h-12 max-w-12 sm:max-h-16 sm:max-w-16">
                            <img src="http://smknukejajar.sch.id/wp-content/uploads/2016/07/logo_smk.png" alt="SMK NU Kejajar">
                        </span>
                        SMK NU Kejajar
                    </h6>
                    <p class="mb-2 sm:mb-4 flex items-center justify-center md:justify-start text-wrap md:text-balance">
                        <span class="me-3 [&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Jl. Dieng No.11, Buntu, Tambi, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah 56354
                    </p>
                    <p class="mb-2 sm:mb-4 flex items-center justify-center md:justify-start text-balance">
                        <span class="me-3 [&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                        </span>
                        smknukejajarwsb@gmail.com
                    </p>
                    <p class="mb-2 sm:mb-4 flex items-center justify-center md:justify-start text-balance">
                        <span class="me-3 [&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        (0286) 332-6590
                    </p>
                </div>
                <!-- Menu links section -->
                <div class="max-w-full col-span-4 md:col-span-1 leading-loose">
                    <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                        Menu
                    </h6>
                    <p>
                        <a href="#!">Profil</a>
                    </p>
                    <p>
                        <a href="#!">Jurusan</a>
                    </p>
                    <p>
                        <a href="#!">Berita</a>
                    </p>
                    <p>
                        <a href="#!">BKK</a>
                    </p>
                    <p>
                        <a href="#!">PPDB</a>
                    </p>
                </div>
                <!-- Map -->
                <div class="col-span-4 lg:col-span-3">
                    <div class="overflow-hidden max-w-full h-64 rounded-xl">
                        <iframe class="h-full w-full" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=smk+nu+kejajar&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-300 sm:mx-auto" />
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex justify-center">
                <span class="text-sm text-gray-600 text-center">© 2024 <a href="#" class="hover:underline">SMK NU Kejajar</a>. All Rights Reserved.</span>
            </div>
            <div class="flex mt-4 justify-center md:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900">
                    <svg class="w-4 h-4" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true">
                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                    <svg class="w-4 h-4" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Instagram page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                    <svg class="w-4 h-4" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true">
                        <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                    </svg>
                    <span class="sr-only">Youtube page</span>
                </a>
            </div>
        </div>
    </footer>
    <x-slot:title>{{ $title }}</x-slot:title>
</x-layout>
