<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- Header Halaman Profil -->
<div class="pt-40 pb-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="w-full lg:w-1/2">
                <span class="text-red-700 font-bold text-xs uppercase tracking-[0.4em] mb-4 block">Tentang
                    Institusi</span>
                <h1
                    class="text-5xl lg:text-7xl font-black text-slate-900 leading-tight tracking-tighter mb-6 uppercase">
                    Profil <br><span class="text-red-700">Kampus IPDN</span>
                </h1>
                <p class="text-slate-500 text-lg leading-relaxed max-w-xl">
                    Pusat keunggulan pendidikan kepamongprajaan yang berlokasi di Jatinangor, menjadi jantung peradaban
                    bagi calon pemimpin bangsa.
                </p>
            </div>
            <!-- Slot Gambar Gedung Kampus -->
            <div class="w-full lg:w-1/2">
                <div class="rounded-[3rem] overflow-hidden shadow-2xl border-[12px] border-slate-50 rotate-1">
                    <img src="<?= base_url('assets/img/gedungipdn.jpg') ?>" alt="Gedung Kampus IPDN"
                        class="w-full h-[450px] object-cover">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Konten Utama -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-20">

            <!-- Sidebar Navigasi Profil -->
            <div class="lg:col-span-4">
                <div class="sticky top-32 space-y-12">

                    <!-- Navigasi Menu  -->
                    <div id="profil-nav" class="space-y-1">
                        <h5
                            class="text-[10px] font-black text-slate-900 uppercase tracking-[0.4em] mb-6 ml-4 border-l-4 border-red-700 pl-4">
                            Indeks Profil</h5>

                        <a href="#sejarah"
                            class="nav-profil-item block p-4 rounded-xl font-bold text-base tracking-tight transition-all duration-300 border-l-4 border-transparent text-slate-400 hover:text-red-700">
                            Sejarah Singkat
                        </a>
                        <a href="#visi"
                            class="nav-profil-item block p-4 rounded-xl font-bold text-base tracking-tight transition-all duration-300 border-l-4 border-transparent text-slate-400 hover:text-red-700">
                            Visi & Misi
                        </a>
                        <a href="#video-profil"
                            class="nav-profil-item block p-4 rounded-xl font-bold text-base tracking-tight transition-all duration-300 border-l-4 border-transparent text-slate-400 hover:text-red-700">
                            Video Profil
                        </a>
                    </div>

                    <!-- Info Tambahan (Versi Ramping & Informatif) -->
                    <div class="pt-8 border-t border-slate-200 space-y-8">
                        <!-- Motto (Dibuat Text-Only biar Rapi) -->
                        <div class="ml-4">
                            <span class="text-[9px] font-black text-red-700 uppercase tracking-widest block mb-3">Motto
                                Institusi</span>
                            <p class="text-2xl font-black italic text-slate-900 leading-none tracking-tighter">
                                "Bhinneka Nara <br> Eka Bhakti"
                            </p>
                            <p class="text-slate-400 text-[10px] font-medium mt-3 uppercase tracking-wider">Berbeda-beda
                                orangnya, satu pengabdiannya.</p>
                        </div>

                        <!-- Detail List  -->
                        <div class="space-y-6 ml-4">
                            <div class="flex items-start gap-4">
                                <i class="fas fa-university text-red-700 mt-1"></i>
                                <div>
                                    <span
                                        class="block text-[9px] font-black text-slate-400 uppercase tracking-widest">Didirikan
                                        pada</span>
                                    <span class="text-sm font-black text-slate-900">17 Maret 1956</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="fas fa-map-marker-alt text-red-700 mt-1"></i>
                                <div>
                                    <span
                                        class="block text-[9px] font-black text-slate-400 uppercase tracking-widest">Lokasi
                                        Kampus</span>
                                    <span class="text-sm font-black text-slate-900 leading-tight">Jatinangor, Sumedang
                                        <br> <span class="text-slate-400 font-bold text-[10px] uppercase">+ 7 Kampus
                                            Regional</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Detail Isi -->
            <div class="lg:col-span-8">
                <!-- Section: Sejarah -->
                <div id="sejarah" class="mb-32 min-h-[40vh]">
                    <h2 class="text-3xl font-black text-slate-900 mb-8 uppercase tracking-tight">Sejarah Singkat</h2>
                    <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-justify">
                        <p class="mb-6">
                            Institut Pemerintahan Dalam Negeri (IPDN) merupakan penggabungan antara STPDN dan IIP
                            berdasarkan Keputusan Presiden Nomor 87 Tahun 2004. Institusi ini memiliki peran vital dalam
                            mencetak kader pemimpin yang memahami seluk-beluk birokrasi dan pelayanan publik di
                            Indonesia.
                        </p>
                        <p>
                            Berpusat di Jatinangor, Sumedang, IPDN kini telah berkembang menjadi institusi pendidikan
                            kedinasan dengan berbagai kampus regional yang tersebar di seluruh pelosok negeri.
                        </p>
                    </div>
                </div>

                <!-- Section: Visi Misi Detail -->
                <div id="visi" class="mb-32 pt-20 border-t border-slate-200 min-h-[60vh]">
                    <h2 class="text-3xl font-black text-slate-900 mb-10 uppercase tracking-tight">Visi & Misi</h2>

                    <div class="bg-slate-900 text-white p-10 rounded-[3rem] mb-10">
                        <h4 class="text-red-500 font-black text-xs uppercase tracking-[0.3em] mb-4">Visi 2045</h4>
                        <p class="text-2xl font-light leading-relaxed italic">
                            "Menjadi pendidikan tinggi kepamongprajaan yang unggul, berstandar internasional, dan
                            berjati diri Indonesia."
                        </p>
                    </div>

                    <div class="space-y-6 text-slate-600">
                        <div class="flex gap-6">
                            <span class="font-black text-red-700">01.</span>
                            <p>Menyelenggarakan pendidikan yang mengintegrasikan aspek pengajaran, pelatihan, dan
                                pengasuhan secara modern.</p>
                        </div>
                        <div class="flex gap-6">
                            <span class="font-black text-red-700">02.</span>
                            <p>Melaksanakan penelitian terapan untuk memecahkan masalah nyata di pemerintahan daerah.
                            </p>
                        </div>
                        <div class="flex gap-6">
                            <span class="font-black text-red-700">03.</span>
                            <p>Membangun kemitraan strategis dengan institusi dalam dan luar negeri dalam pengembangan
                                ilmu pemerintahan.</p>
                        </div>
                    </div>
                </div>

                <!-- Section: Video Profil -->
                <div id="video-profil" class="pt-20 border-t border-slate-200 min-h-screen">
                    <h2 class="text-3xl font-black text-slate-900 mb-4 uppercase tracking-tight">Video Profil</h2>
                    <p class="text-slate-500 text-sm mb-10">Saksikan representasi visual kehidupan kampus dan semangat
                        juang para praja IPDN.</p>

                    <div class="max-w-3xl">
                        <div
                            class="relative rounded-[2rem] overflow-hidden shadow-2xl bg-slate-950 aspect-video group border border-slate-800">
                            <iframe class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/LdiCh5VR7yc?si=k4PEnw4lhevhd7FS"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>


                    </div>
                </div>
            </div> <!-- Akhir Detail Isi -->
        </div> <!-- Akhir Grid -->
    </div> <!-- Akhir Container -->
</section>

<script>
    const profilSections = document.querySelectorAll('div[id]');
    const profilNavItems = document.querySelectorAll('.nav-profil-item');

    window.addEventListener('scroll', () => {
        let current = '';

        profilSections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - 250)) { 
                current = section.getAttribute('id');
            }
        });

        profilNavItems.forEach(item => {
            item.classList.remove('bg-white', 'shadow-md', 'text-red-700', 'border-red-700');
            item.classList.add('text-slate-400', 'border-transparent');

            if (item.getAttribute('href') === `#${current}`) {
                item.classList.remove('text-slate-400', 'border-transparent');
                item.classList.add('bg-white', 'shadow-md', 'text-red-700', 'border-red-700');
            }
        });
    });
</script>
<?= $this->endSection() ?>