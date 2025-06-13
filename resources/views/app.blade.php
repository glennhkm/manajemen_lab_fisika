<x-layout-app>
    <!-- Hero Section (existing) -->
    {{-- <div id="hero" class="w-full h-screen flex relative">
        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
            alt="hero" class="object-cover w-full h-full absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/60 w-full h-full z-10 backdrop-blur-md"></div>
        <div class="w-full h-full text-neutral_01 flex flex-col items-center justify-center z-20 px-6 md:px-12 gap-4">
            <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200"
                class="text-xl border-b border-white/50 pb-3 mb-8 font-light text-neutral_01/80">
                Selamat Datang di
            </h3>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="h-1/6">
                <h1 class="text-5xl md:text-8xl font-bold text-center">
                    Laboratorium <span class="text-yellow-400">Geofisika</span>
                </h1>
            </div>
            <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300"
                class="glass-effect px-5 py-1.5 rounded-full text-neutral_01/80 text-xs text-center md:text-base shadow-lg">
                Departemen Fisika - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Syiah Kuala
            </h3>
            <div id="contribution"
                class="glass-effect grid grid-cols-2 md:grid-cols-3 gap-x-12 md:gap-x-32 gap-y-4 md:gap-32 absolute -bottom-[3.8rem] justify-between w-full md:w-auto items-center py-6 rounded-3xl shadow-lg shadow-black/20"
                data-aos="fade-up" data-aos-duration="300">
                <div class="col-span-2 md:col-span-1 flex gap-2 flex-col md:gap-4 items-center text-center">
                    <h4 class="font-bold text-2xl md:text-4xl text-yellow-400">23+</h4>
                    <p class="text-sm md:text-base text-neutral_01/60 font-medium">Alat Laboratorium</p>
                </div>
                <div class="flex flex-col gap-2 md:gap-4 items-center text-center">
                    <h4 class="font-bold text-2xl md:text-4xl text-yellow-400">100+</h4>
                    <p class="text-sm md:text-base text-neutral_01/60 font-medium">Kunjungan dan Pengujian Lab</p>
                </div>
                <div class="flex flex-col gap-2 md:gap-4 items-center text-center">
                    <h4 class="font-bold text-2xl md:text-4xl text-yellow-400">15+</h4>
                    <p class="text-sm md:text-base text-neutral_01/60 font-medium">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </div> --}}
    <section id="hero" class="w-full h-screen flex relative border-b border-[#27548A]/30">
        <img src="{{ asset('images/fisika-1.jpeg') }}" alt="hero"
            class="object-cover w-full h-full absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-bl from-black/80 to-[#27548A]/40 w-full h-full z-10 backdrop-blur-md"></div>
        <div class="w-full h-full text-neutral_01 flex flex-col items-center justify-center z-20 px-6 md:px-12 gap-4">
            <h3 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200"
                class="text-xl border-b border-white/50 pb-3 mb-8 font-light text-neutral_01/80">
                Selamat Datang di
            </h3>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="h-1/6">
                <x-typewriter 
                    :words="['Laboratorium <span class=\'text-yellow-400\'>Geofisika</span>']"
                    :speed="100"
                    :delete-speed="100"
                    :pause-time="2000"
                    :loop="true"
                    :delay="1200"
                    class="text-5xl md:text-8xl font-bold text-center"
                />
            </div>
            <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300"
                class="bg-white/20 backdrop-blur border border-white/40 shadow-lg shadow-black/20 px-5 py-1.5 rounded-full text-neutral_01 text-xs text-center md:text-base">
                Departemen Fisika - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Syiah Kuala
            </h3>
            <div id="contribution"
                class="bg-neutral_01 backdrop-blur border border-[#27548A]/60 grid grid-cols-2 md:grid-cols-3 gap-x-12 md:gap-x-32 gap-y-4 md:gap-32 absolute -bottom-[3.8rem] justify-between w-full md:w-auto items-center py-6 rounded-3xl shadow-lg shadow-black/20"
                data-aos="fade-up" data-aos-duration="300">
                <div class="col-span-2 md:col-span-1 flex gap-2 flex-col md:gap-4 items-center text-center">
                    <h4 class="font-bold text-2xl md:text-4xl text-[#27548A]">23+</h4>
                    <p class="text-sm md:text-base text-neutral_01/60 text-[#151515]/70 font-medium">Alat Laboratorium</p>
                </div>
                <div class="flex flex-col gap-2 md:gap-4 items-center text-center">
                    <h4 class="font-bold text-2xl md:text-4xl text-yellow-400">100+</h4>
                    <p class="text-sm md:text-base text-neutral_01/60 text-[#151515]/70 font-medium">Kunjungan dan Pengujian
                        Lab</p>
                </div>
                <div class="flex flex-col gap-2 md:gap-4 items-center text-center">
                    <h4 class="font-bold text-2xl md:text-4xl text-[#27548A]">23+</h4>
                    <p class="text-sm md:text-base text-neutral_01/60 text-[#151515]/70 font-medium">Alat Laboratorium</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-gradient-to-br from-[#27548A]/40 via-transparent to-transparent">
        <div class="container mx-auto px-6 md:px-12 pt-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-6xl md:text-6xl font-bold mb-8 text-[#151515]/90">
                    Tentang <span class="text-[#27548A]">Laboratorium</span>
                </h2>
                <p class="text-xl text-[#151515]/70 max-w-3xl mx-auto">
                    Laboratorium Geofisika merupakan fasilitas unggulan yang berkomitmen untuk mengembangkan
                    penelitian dan pendidikan di bidang geofisika dengan teknologi terdepan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div data-aos="fade-right">
                    <img src="{{ asset('images/hero-1.avif') }}"
                        alt="Laboratory" class="rounded-3xl shadow-2xl w-full h-96 object-cover">
                </div>
                <div data-aos="fade-left">
                    <h3 class="text-3xl font-bold mb-6 text-[#27548A]">Visi Kami</h3>
                    <p class="text-[#151515]/70 text-lg mb-8 leading-relaxed">
                        Menjadi laboratorium geofisika terdepan di Indonesia yang berkontribusi dalam
                        penelitian dan pengembangan ilmu geofisika untuk kemajuan bangsa.
                    </p>
                    <h3 class="text-3xl font-bold mb-6 text-[#27548A]">Misi Kami</h3>
                    <ul class="space-y-4 text-[#151515]/70">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-400 mr-3 mt-1"></i>
                            Menyediakan fasilitas penelitian geofisika berkualitas tinggi
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-400 mr-3 mt-1"></i>
                            Mengembangkan sumber daya manusia di bidang geofisika
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-400 mr-3 mt-1"></i>
                            Berkontribusi dalam mitigasi bencana alam
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full h-[2px] bg-gradient-to-r from-transparent via-yellow-400/60 to-transparent"></div>

    <!-- Facilities Section -->
    <section id="facilities" class="section-padding">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-8">
                    Fasilitas Unggulan
                </h2>
                <p class="text-xl text-[#151515]/70 max-w-3xl mx-auto">
                    Dilengkapi dengan peralatan modern dan canggih untuk mendukung penelitian geofisika
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="rounded-3xl p-8 bg-yellow-400/10 backdrop-blur-md border border-yellow-400/30 hover-lift duration-200 cursor-pointer">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-microscope text-yellow-400 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Seismometer</h3>
                        <p class="text-neutral_01/70">Alat pengukur aktivitas seismik dengan presisi tinggi untuk monitoring
                            gempa bumi</p>
                    </div>
                </div>

                <div class="rounded-3xl p-8 bg-yellow-400/10 backdrop-blur-md border border-yellow-400/30 hover-lift cursor-pointer">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-globe text-yellow-400 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Magnetometer</h3>
                        <p class="text-neutral_01/70">Instrumen untuk mengukur medan magnet bumi dan anomali magnetik</p>
                    </div>
                </div>

                <div class="rounded-3xl p-8 bg-yellow-400/10 backdrop-blur-md border border-yellow-400/30 hover-lift cursor-pointer">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-wave-square text-yellow-400 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Ground Penetrating Radar</h3>
                        <p class="text-neutral_01/70">Teknologi radar untuk pemetaan struktur bawah permukaan</p>
                    </div>
                </div>

                <div class="rounded-3xl p-8 bg-yellow-400/10 backdrop-blur-md border border-yellow-400/30 hover-lift cursor-pointer">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-satellite text-yellow-400 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">GPS Geodetik</h3>
                        <p class="text-neutral_01/70">Sistem positioning dengan akurasi centimeter untuk survei geodetik</p>
                    </div>
                </div>

                <div class="rounded-3xl p-8 bg-yellow-400/10 backdrop-blur-md border border-yellow-400/30 hover-lift cursor-pointer">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-chart-line text-yellow-400 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Resistivity Meter</h3>
                        <p class="text-neutral_01/70">Alat ukur resistivitas untuk eksplorasi bawah permukaan</p>
                    </div>
                </div>

                <div class="rounded-3xl p-8 bg-yellow-400/10 backdrop-blur-md border border-yellow-400/30 hover-lift cursor-pointer">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-mountain text-yellow-400 text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Gravimeter</h3>
                        <p class="text-neutral_01/70">Instrumen untuk mengukur variasi gravitasi bumi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    {{-- <section id="staff" class="section-padding bg-gray-900">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    Tim <span class="gradient-text">Ahli</span>
                </h2>
                <p class="text-xl text-neutral_01/70 max-w-3xl mx-auto">
                    Didukung oleh tenaga ahli berpengalaman dan berkompeten di bidangnya
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-effect rounded-3xl p-8 text-center hover-lift" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-user text-neutral_01 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Dr. Ahmad Fauzi, M.Si</h3>
                    <p class="text-yellow-400 mb-4">Kepala Laboratorium</p>
                    <p class="text-neutral_01/70">Spesialis Seismologi dan Tektonik dengan pengalaman 15+ tahun</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 text-center hover-lift" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-user text-neutral_01 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Dr. Siti Nurhaliza, M.T</h3>
                    <p class="text-yellow-400 mb-4">Peneliti Senior</p>
                    <p class="text-neutral_01/70">Ahli Geofisika Eksplorasi dan Magnetotellurik</p>
                </div>

                <div class="glass-effect rounded-3xl p-8 text-center hover-lift" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-user text-neutral_01 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">M. Rizki Pratama, M.Si</h3>
                    <p class="text-yellow-400 mb-4">Teknisi Laboratorium</p>
                    <p class="text-neutral_01/70">Spesialist perawatan dan operasional peralatan geofisika</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Services Section -->
    {{-- <section id="services" class="section-padding bg-gray-800">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">Layanan</span> Kami
                </h2>
                <p class="text-xl text-neutral_01/70 max-w-3xl mx-auto">
                    Berbagai layanan profesional untuk mendukung penelitian dan pendidikan geofisika
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-effect rounded-3xl p-8 hover-lift" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-yellow-400 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Penyewaan Alat</h3>
                    <p class="text-neutral_01/70 mb-6">Sewa peralatan geofisika untuk keperluan riset dan survei lapangan
                    </p>
                    <ul class="space-y-2 text-neutral_01/60">
                        <li>• Seismometer portable</li>
                        <li>• GPS Geodetik</li>
                        <li>• Magnetometer</li>
                        <li>• Ground Penetrating Radar</li>
                    </ul>
                </div>

                <div class="glass-effect rounded-3xl p-8 hover-lift" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-yellow-400 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Kunjungan Lab</h3>
                    <p class="text-neutral_01/70 mb-6">Program edukasi dan riset untuk mahasiswa dan peneliti</p>
                    <ul class="space-y-2 text-neutral_01/60">
                        <li>• Praktikum mahasiswa</li>
                        <li>• Workshop geofisika</li>
                        <li>• Pelatihan teknis</li>
                        <li>• Kolaborasi riset</li>
                    </ul>
                </div>

                <div class="glass-effect rounded-3xl p-8 hover-lift" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-flask text-yellow-400 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Pengujian Sampel</h3>
                    <p class="text-neutral_01/70 mb-6">Analisis dan pengujian sampel batuan dan material geologi</p>
                    <ul class="space-y-2 text-neutral_01/60">
                        <li>• Analisis sifat fisik batuan</li>
                        <li>• Pengukuran resistivitas</li>
                        <li>• Uji kuat tekan</li>
                        <li>• Karakterisasi mineral</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Gallery Section -->
    {{-- <section id="gallery" class="section-padding bg-gray-900">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">Galeri</span> Laboratorium
                </h2>
                <p class="text-xl text-neutral_01/70 max-w-3xl mx-auto">
                    Dokumentasi kegiatan dan fasilitas laboratorium geofisika
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="md:col-span-2 md:row-span-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Lab Equipment" class="w-full h-full object-cover rounded-3xl hover-lift">
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Research" class="w-full h-48 object-cover rounded-3xl hover-lift">
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Field Work" class="w-full h-48 object-cover rounded-3xl hover-lift">
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1582719471384-894fbb16e074?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Students" class="w-full h-48 object-cover rounded-3xl hover-lift">
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                        alt="Analysis" class="w-full h-48 object-cover rounded-3xl hover-lift">
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Forms Section -->
    {{-- <section id="forms" class="section-padding bg-gray-800">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    Formulir <span class="gradient-text">Online</span>
                </h2>
                <p class="text-xl text-neutral_01/70 max-w-3xl mx-auto">
                    Ajukan permohonan layanan laboratorium dengan mudah dan cepat
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Rental Form -->
                <div class="glass-effect rounded-3xl p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-yellow-400/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clipboard-list text-yellow-400 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Penyewaan Alat</h3>
                    </div>
                    <form class="space-y-4">
                        <input type="text" placeholder="Nama Lengkap"
                            class="w-full p-3 rounded-xl form-input text-neutral_01">
                        <input type="email" placeholder="Email"
                            class="w-full p-3 rounded-xl form-input text-neutral_01">
                        <input type="tel" placeholder="No. Telepon"
                            class="w-full p-3 rounded-xl form-input text-neutral_01">
                        <select class="w-full p-3 rounded-xl form-input text-neutral_01">
                            <option>Pilih Alat</option>
                            <option>Seismometer</option>
                            <option>Magnetometer</option>
                            <option>GPS Geodetik</option>
                            <option>Ground Penetrating Radar</option>
                        </select>
                        <input type="date" class="w-full p-3 rounded-xl form-input text-neutral_01">
                        <textarea placeholder="Keperluan penggunaan" rows="3" class="w-full p-3 rounded-xl form-input text-neutral_01"></textarea>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 text-black font-bold py-3 rounded-xl hover:shadow-lg transition duration-300">
                            Ajukan Pengujian
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Contact Section -->
    {{-- <section id="contact" class="section-padding bg-gray-900">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">Hubungi</span> Kami
                </h2>
                <p class="text-xl text-neutral_01/70 max-w-3xl mx-auto">
                    Kami siap membantu kebutuhan penelitian dan pendidikan geofisika Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div data-aos="fade-right">
                    <div class="space-y-8">
                        <div class="glass-effect rounded-3xl p-8">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-yellow-400 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Alamat Laboratorium</h3>
                                    <p class="text-neutral_01/70 leading-relaxed">
                                        Gedung Laboratorium Terpadu<br>
                                        Fakultas MIPA, Universitas Syiah Kuala<br>
                                        Jl. Syech Abdurrauf No. 3, Kopelma Darussalam<br>
                                        Banda Aceh, Aceh 23111
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="glass-effect rounded-3xl p-8">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-yellow-400 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Kontak Person</h3>
                                    <div class="space-y-2 text-neutral_01/70">
                                        <p><strong>Dr. Ahmad Fauzi, M.Si</strong></p>
                                        <p>Kepala Laboratorium</p>
                                        <p>📞 +62 651-7552939</p>
                                        <p>📱 +62 812-6900-1234</p>
                                        <p>✉️ lab.geofisika@unsyiah.ac.id</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="glass-effect rounded-3xl p-8">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-clock text-yellow-400 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Jam Operasional</h3>
                                    <div class="space-y-2 text-neutral_01/70">
                                        <p><strong>Senin - Jumat:</strong> 08:00 - 16:00 WIB</p>
                                        <p><strong>Sabtu:</strong> 08:00 - 12:00 WIB (by appointment)</p>
                                        <p><strong>Minggu:</strong> Tutup</p>
                                        <p class="text-yellow-400 text-sm mt-3">
                                            *Untuk layanan darurat atau penggunaan di luar jam operasional,
                                            silakan hubungi kontak person terlebih dahulu
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div data-aos="fade-left">
                    <div class="glass-effect rounded-3xl p-8 h-full">
                        <h3 class="text-2xl font-bold mb-6 text-center">Lokasi Kami</h3>
                        <div class="w-full h-96 bg-gray-700 rounded-2xl overflow-hidden relative">
                            <!-- Placeholder for map - replace with actual map embed -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0267340040513!2d95.36159261476176!3d5.566542996159773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304039c7c5b54c85%3A0x3d59b6b9b9b9b9b9!2sUniversitas%20Syiah%20Kuala!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl">
                            </iframe>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-neutral_01/70 mb-4">
                                Mudah dijangkau dengan transportasi umum dan memiliki area parkir yang luas
                            </p>
                            <div class="flex justify-center space-x-4">
                                <span class="glass-effect px-4 py-2 rounded-full text-sm">
                                    <i class="fas fa-car mr-2 text-yellow-400"></i>Parkir Tersedia
                                </span>
                                <span class="glass-effect px-4 py-2 rounded-full text-sm">
                                    <i class="fas fa-bus mr-2 text-yellow-400"></i>Akses Mudah
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer class="bg-neutral_01 py-12">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4 gradient-text">Laboratorium Geofisika</h3>
                    <p class="text-neutral_01/70 mb-6 leading-relaxed">
                        Berkomitmen untuk mengembangkan penelitian dan pendidikan geofisika yang berkualitas
                        dengan fasilitas modern dan tenaga ahli berpengalaman.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-yellow-400/20 rounded-full flex items-center justify-center hover:bg-yellow-400/40 transition duration-300">
                            <i class="fab fa-facebook-f text-yellow-400"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-yellow-400/20 rounded-full flex items-center justify-center hover:bg-yellow-400/40 transition duration-300">
                            <i class="fab fa-instagram text-yellow-400"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-yellow-400/20 rounded-full flex items-center justify-center hover:bg-yellow-400/40 transition duration-300">
                            <i class="fab fa-youtube text-yellow-400"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-yellow-400/20 rounded-full flex items-center justify-center hover:bg-yellow-400/40 transition duration-300">
                            <i class="fab fa-linkedin-in text-yellow-400"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-neutral_01/70">
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">Penyewaan Alat</a>
                        </li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">Kunjungan Lab</a>
                        </li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">Pengujian
                                Sampel</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition duration-300">Konsultasi</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-neutral_01/70">
                        <li>📞 +62 651-7552939</li>
                        <li>✉️ lab.geofisika@unsyiah.ac.id</li>
                        <li>🌐 www.geofisika.unsyiah.ac.id</li>
                        <li>📍 Banda Aceh, Aceh</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/20 mt-8 pt-8 text-center">
                <p class="text-neutral_01/60">
                    © 2024 Laboratorium Geofisika - Universitas Syiah Kuala. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</x-layout-app>
