<x-layout-app>
    <div id="hero" class="w-full h-full flex relative">
        <img src="{{ asset('images/lab-google.png') }}" alt="hero"
            class="object-cover w-full h-full absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/60 w-full h-full z-10 backdrop-blur-md"></div>
        <div class="w-full h-full text-white flex flex-col items-center justify-center z-20 px-6 md:px-12 gap-4">
            <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200"
                class="text-xl border-b border-yellow-500/40 pb-3 mb-8 -mt-40 text-yellow-400">
                Selamat Datang di
            </h3>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="h-1/6">
                <x-typewriter :words="['Laboratorium Geofisika']" :speed="100" :delete-speed="100" :pause-time="2000" :loop="true"
                    :delay="1200" class="text-5xl md:text-8xl font-bold text-center" />
            </div>
            <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300"
                class="bg-white/20 backdrop-blur border border-white/40 shadow-lg shadow-black/20 px-5 py-1.5 rounded-full text-white/80 text-xs text-center md:text-base">
                Departemen Fisika - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Syiah Kuala
            </h3>
            <div id="contribution" class="grid grid-cols-2 md:grid-cols-3 gap-x-12 md:gap-x-32 gap-y-4 md:gap-32 absolute bottom-12 justify-between w-full md:w-auto" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="1500">
                <div class="col-span-2 md:col-span-1 flex gap-2 flex-col md:gap-4 items-center text-center">
                    <x-healthicons-o-biochemistry-laboratory class="w-10 h-10 text-yellow-400"/>
                    <h4 class="font-bold text-2xl md:text-4xl">23+</h4>
                    <p class="text-sm md:text-base text-white/60">Alat Laboratorium</p>
                </div>
                <div class="flex flex-col gap-2 md:gap-4 items-center text-center">
                    <x-bi-people class="w-10 h-10 text-yellow-400"/>
                    <h4 class="font-bold text-2xl md:text-4xl">100+</h4>
                    <p class="text-sm md:text-base text-white/60">Kunjungan <br /> dan <br>  Pengujian Lab</p>
                </div>
                <div class="flex flex-col gap-2 md:gap-4 items-center text-center">
                    <x-healthicons-o-biochemistry-laboratory class="w-10 h-10 text-yellow-400"/>
                    <h4 class="font-bold text-2xl md:text-4xl">23+</h4>
                    <p class="text-sm md:text-base text-white/60">Alat Laboratorium</p>
                </div>
            </div>
        </div>
    </div>
</x-layout-app>
