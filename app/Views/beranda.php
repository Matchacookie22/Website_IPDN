<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="relative h-screen min-h-[600px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="<?= base_url('assets/img/hero-IPDN.jpg') ?>" alt="Praja IPDN" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent"></div>
    </div>

    <!-- Teks di Atas Gambar -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">

            <h1 class="text-5xl lg:text-7xl font-black text-white leading-tight mb-6">
                Mencetak Kader <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-300">Pamong Praja</span>
                <br>
                Sejati
            </h1>
            <p class="text-lg lg:text-xl text-slate-300 mb-10 max-w-xl leading-relaxed">
                Institut Pemerintahan Dalam Negeri menghasilkan pemimpin masa depan yang berkarakter, berintegritas, dan
                kompeten.
            </p>

        </div>
    </div>

    <!-- Dekorasi Garis di Bawah (Optional) -->
    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-white to-transparent"></div>
</div>

<!-- Section: Berita Terbaru ala Portal Instansi Modern -->
<section id="berita" class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
            <div>
                <span class="text-red-700 font-bold text-xs uppercase tracking-[0.2em] mb-2 block">Informasi
                    Terkini</span>
                <h2 class="text-4xl font-black text-slate-900 tracking-tighter">Berita <span
                        class="text-red-700">IPDN</span></h2>
            </div>
            <a href="#"
                class="group text-sm font-bold text-slate-400 hover:text-red-700 transition-all flex items-center gap-2">
                LIHAT SEMUA BERITA
                <i class="fas fa-arrow-right text-xs group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <!-- Grid Berita -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Berita 1 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] mb-6 aspect-[4/3] shadow-lg">
                    <img src="<?= base_url('assets/img/Acehipdn.jpeg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        alt="Berita IPDN">
                </div>
                <div class="px-2">
                    <span class="text-xs text-slate-400 font-medium mb-3 block">03 February 2026</span>
                    <h3
                        class="text-xl font-bold text-slate-900 leading-snug group-hover:text-red-700 transition-colors mb-4">
                        IPDN Untuk Negeri, Aceh Mari Bangkit Bersama
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                        Aceh (03/02/2026), Genap 1 bulan sudah misi kemanusiaan praja IPDN dan ASN Kemendagri membantu
                        masyarakat Aceh Tamiang membangun kembali sistem birokrasi pasca bencana banjir bandang
                        berlangsung. Sejumlah 861 orang praja dan 273 ASN Kemendagri ditambah 2 orang Wakil Rektor IPDN
                        dengan total 1.136 orang yang terbentuk dalam Satuan Tugas Pemulihan Bencana Aceh hadir membantu
                        masyarakat disana untuk pemulihan wilayah. Total 38 gedung di Komplek Kantor Pemerintahan Aceh
                        Tamiang yang terdiri atas 32 kantor dinas pemerintahan, 3 sekolah dan 3 gedung serbaguna serta
                        42 hektar lahan berhasil dibersihkan untuk dapat difungsikan kembali oleh masyarakat sekitar.
                    </p>
                    <!-- Tambahkan ini di bawah deskripsi berita -->
                    <div class="mt-6">
                        <a href="<?= base_url('berita/detail/1') ?>"
                            class="inline-flex items-center gap-2 text-[11px] font-bold text-red-700 uppercase tracking-[0.15em] group/btn transition-all">
                            Baca Selengkapnya
                            <span
                                class="w-8 h-[1px] bg-red-200 group-hover/btn:w-12 group-hover/btn:bg-red-700 transition-all"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] mb-6 aspect-[4/3] shadow-lg">
                    <img src="<?= base_url('assets/img/pengukuhan.jpeg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        alt="Kegiatan Praja">
                </div>
                <div class="px-2">
                    <span class="text-xs text-slate-400 font-medium mb-3 block">30 September 2025</span>
                    <h3
                        class="text-xl font-bold text-slate-900 leading-snug group-hover:text-red-700 transition-colors mb-4">
                        Calon Praja Pratama IPDN Angkatan XXXVI Siap Melaksanakan DIKSARMENDISPRA Selama 12 Hari
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                        Jatinangor (30/09/2025), Bukan menjadi pejabat, calon praja IPDN dididik untuk menjadi pelayanan
                        masyarakat. Hal ini disampaikan Rektor IPDN, Dr. Halilul Khairi., M,Si saat membuka kegiatan
                        Pendidikan.
                    </p>
                    <!-- Tambahkan ini di bawah deskripsi berita -->
                    <div class="mt-6">
                        <a href="<?= base_url('berita/detail/2') ?>"
                            class="inline-flex items-center gap-2 text-[11px] font-bold text-red-700 uppercase tracking-[0.15em] group/btn transition-all">
                            Baca Selengkapnya
                            <span
                                class="w-8 h-[1px] bg-red-200 group-hover/btn:w-12 group-hover/btn:bg-red-700 transition-all"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-[2rem] mb-6 aspect-[4/3] shadow-lg">
                    <img src="<?= base_url('assets/img/prestasi.jpeg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        alt="Prestasi IPDN">
                </div>
                <div class="px-2">
                    <span class="text-xs text-slate-400 font-medium mb-3 block">15 October 2025</span>
                    <h3
                        class="text-xl font-bold text-slate-900 leading-snug group-hover:text-red-700 transition-colors mb-4">
                        Harsha Ksatrya, Nama Angkatan Praja Pratama XXXVI yang Dikukuhkan Tahun 2025
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                        Jatinangor (15/10/2025), Sejumlah 1.058 putra/i bangsa terpilih yang telah berhasil bersaing
                        dengan 31.321 pendaftar IPDN kini resmi dilantik menjadi Praja Pratama IPDN Angkatan XXXVI Tahun
                        2025. Upac...
                    </p>
                    <!-- Tambahkan ini di bawah deskripsi berita -->
                    <div class="mt-6">
                        <a href="<?= base_url('berita/detail/3') ?>"
                            class="inline-flex items-center gap-2 text-[11px] font-bold text-red-700 uppercase tracking-[0.15em] group/btn transition-all">
                            Baca Selengkapnya
                            <span
                                class="w-8 h-[1px] bg-red-200 group-hover/btn:w-12 group-hover/btn:bg-red-700 transition-all"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Statistik Institusi (High-Impact) -->
<section id="statistik" class="py-24 bg-slate-950 text-white overflow-hidden relative">
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-5">
                <span class="text-red-600 font-black text-xs uppercase tracking-[0.4em] mb-4 block">Institutional
                    Scale</span>
                <h2 class="text-4xl lg:text-5xl font-black tracking-tighter uppercase leading-tight mb-6">
                    Mencetak Pemimpin <br> <span class="text-white border-b-4 border-red-700">Masa Depan</span>
                </h2>
                <p class="text-slate-300 text-sm leading-relaxed max-w-sm">
                    Lembaga pendidikan kedinasan terbesar dengan distribusi kader terbaik ke seluruh penjuru negeri.
                </p>
            </div>

            <div class="lg:col-span-7">
                <div class="grid grid-cols-2 gap-8 lg:gap-12">
                    <!-- Stat 1 -->
                    <div
                        class="group border-l-2 border-slate-800 pl-8 hover:border-red-600 transition-all duration-500">
                        <div class="flex items-baseline gap-1">
                            <span class="stat-number text-5xl lg:text-6xl font-black text-white tracking-tighter"
                                data-target="10000">0</span>
                            <span class="text-2xl font-black text-red-600">+</span>
                        </div>
                        <span class="text-[11px] font-black text-red-500 uppercase tracking-[0.2em] mt-2 block">Praja
                            Aktif</span>
                    </div>

                    <!-- Stat 2 -->
                    <div
                        class="group border-l-2 border-slate-800 pl-8 hover:border-red-600 transition-all duration-500">
                        <span class="stat-number text-5xl lg:text-6xl font-black text-white tracking-tighter"
                            data-target="38">0</span>
                        <span class="text-[11px] font-black text-red-500 uppercase tracking-[0.2em] mt-2 block">Provinsi
                            Penempatan</span>
                    </div>

                    <!-- Stat 3 -->
                    <div
                        class="group border-l-2 border-slate-800 pl-8 hover:border-red-600 transition-all duration-500">
                        <div class="flex items-baseline gap-1">
                            <span class="stat-number text-5xl lg:text-6xl font-black text-white tracking-tighter"
                                data-target="8">0</span>
                        </div>
                        <span class="text-[11px] font-black text-red-500 uppercase tracking-[0.2em] mt-2 block">Kampus
                            Regional</span>
                    </div>

                    <!-- Stat 4 -->
                    <div
                        class="group border-l-2 border-slate-800 pl-8 hover:border-red-600 transition-all duration-500">
                        <div class="flex items-baseline gap-1">
                            <span class="stat-number text-5xl lg:text-6xl font-black text-white tracking-tighter"
                                data-target="100">0</span>
                            <span class="text-2xl font-black text-red-600">%</span>
                        </div>
                        <span class="text-[11px] font-black text-red-500 uppercase tracking-[0.2em] mt-2 block">Karier
                            CPNS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Tri Dharma -->
<section id="tri-dharma" class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="mb-20">
            <h2 class="text-xs font-bold text-red-700 uppercase tracking-[0.4em] mb-4">Core Implementation</h2>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <h3 class="text-4xl lg:text-5xl font-black text-slate-900 tracking-tighter uppercase leading-none">
                    Tri Dharma <br> <span class="text-red-700">Perguruan Tinggi.</span>
                </h3>
            </div>
        </div>

        <div class="border-t-2 border-slate-900">
            <!-- 01. Pendidikan -->
            <div
                class="group border-b border-slate-100 py-16 hover:bg-red-50/50 transition-all duration-500 px-4 lg:px-12 relative overflow-hidden">
                <!-- Hover Indicator Line -->
                <div class="absolute left-0 top-0 bottom-0 w-0 group-hover:w-2 bg-red-700 transition-all duration-500">
                </div>

                <div class="flex flex-col lg:flex-row gap-12 lg:gap-24">
                    <div class="flex-none">
                        <span
                            class="text-7xl font-black text-slate-100 group-hover:text-red-700/20 transition-colors duration-500 italic uppercase">01</span>
                    </div>

                    <div class="flex-grow">
                        <h4
                            class="text-2xl font-black text-slate-900 uppercase tracking-tight mb-6 group-hover:text-red-700 transition-colors">
                            Pendidikan & Pengajaran</h4>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div>
                                <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                    Penyelenggaraan pendidikan tinggi kepamongprajaan yang mengedepankan aspek
                                    pengajaran, pelatihan, dan pengasuhan (Jarlatshuh) secara terintegrasi.
                                </p>
                                <div class="flex gap-4">
                                    <span
                                        class="px-3 py-1 bg-white border border-slate-200 text-[10px] font-bold text-slate-600 rounded">KURIKULUM
                                        2026</span>
                                    <span
                                        class="px-3 py-1 bg-white border border-slate-200 text-[10px] font-bold text-slate-600 rounded">AKREDITASI
                                        UNGGUL</span>
                                </div>
                            </div>
                            <!-- Detail Informatif -->
                            <div class="bg-white/50 p-6 rounded-2xl border border-slate-100">
                                <ul class="space-y-4">
                                    <li
                                        class="flex justify-between items-center border-b border-dotted border-slate-200 pb-2">
                                        <span class="text-[11px] font-bold text-slate-400 uppercase">Total
                                            Fakultas</span>
                                        <span class="text-sm font-black text-slate-900">3 Unit Utama</span>
                                    </li>
                                    <li
                                        class="flex justify-between items-center border-b border-dotted border-slate-200 pb-2">
                                        <span class="text-[11px] font-bold text-slate-400 uppercase">Program
                                            Studi</span>
                                        <span class="text-sm font-black text-slate-900">10 Program D-IV</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span class="text-[11px] font-bold text-slate-400 uppercase">Sistem
                                            Belajar</span>
                                        <span class="text-sm font-black text-slate-900">Berasrama (Residensial)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 02. Penelitian -->
            <div
                class="group border-b border-slate-100 py-16 hover:bg-red-50/50 transition-all duration-500 px-4 lg:px-12 relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-0 group-hover:w-2 bg-red-700 transition-all duration-500">
                </div>

                <div class="flex flex-col lg:flex-row gap-12 lg:gap-24">
                    <div class="flex-none">
                        <span
                            class="text-7xl font-black text-slate-100 group-hover:text-red-700/20 transition-colors duration-500 italic uppercase">02</span>
                    </div>
                    <div class="flex-grow">
                        <h4
                            class="text-2xl font-black text-slate-900 uppercase tracking-tight mb-6 group-hover:text-red-700 transition-colors">
                            Penelitian Terapan</h4>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div>
                                <p class="text-slate-500 text-sm leading-relaxed mb-8">
                                    Fokus pada riset kebijakan publik dan tata kelola pemerintahan untuk memberikan
                                    solusi konkret bagi permasalahan di tingkat pusat maupun daerah.
                                </p>
                                <div class="flex items-center gap-6">
                                    <a href="https://ejournal.ipdn.ac.id/"
                                        class="text-[10px] font-black text-red-700 border-b-2 border-red-700 pb-1 uppercase tracking-widest hover:text-slate-900 hover:border-slate-900 transition-all">E-Journal
                                        IPDN</a>
                                    <a href="https://lemriska.ipdn.ac.id/"
                                        class="text-[10px] font-black text-red-700 border-b-2 border-red-700 pb-1 uppercase tracking-widest hover:text-slate-900 hover:border-slate-900 transition-all">Repositori
                                        Riset</a>
                                </div>
                            </div>
                            <div class="bg-white/50 p-6 rounded-2xl border border-slate-100">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                        <span class="block text-2xl font-black text-red-700">150+</span>
                                        <span class="text-[9px] font-bold text-slate-400 uppercase">Jurnal Terbit</span>
                                    </div>
                                    <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                        <span class="block text-2xl font-black text-red-700">24</span>
                                        <span class="text-[9px] font-bold text-slate-400 uppercase">Pusat Kajian</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 03. Pengabdian -->
            <div
                class="group border-b border-slate-100 py-16 hover:bg-red-50/50 transition-all duration-500 px-4 lg:px-12 relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-0 group-hover:w-2 bg-red-700 transition-all duration-500">
                </div>

                <div class="flex flex-col lg:flex-row gap-12 lg:gap-24">
                    <div class="flex-none">
                        <span
                            class="text-7xl font-black text-slate-100 group-hover:text-red-700/20 transition-colors duration-500 italic uppercase">03</span>
                    </div>
                    <div class="flex-grow">
                        <h4
                            class="text-2xl font-black text-slate-900 uppercase tracking-tight mb-6 group-hover:text-red-700 transition-colors">
                            Pengabdian Masyarakat</h4>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div>
                                <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                    Implementasi ilmu kepamongprajaan secara langsung melalui program Bhakti Karya Praja
                                    (BKP) dan pendampingan administrasi pemerintahan desa.
                                </p>
                                <span
                                    class="inline-block bg-slate-900 text-white text-[9px] font-bold px-4 py-2 rounded uppercase tracking-[0.2em]">
                                    Bhinneka Nara Eka Bhakti
                                </span>
                            </div>
                            <div
                                class="bg-white/50 p-6 rounded-2xl border border-slate-100 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-[11px] font-bold text-slate-400 uppercase block mb-2">Cakupan
                                        Wilayah</span>
                                    <p class="text-sm font-bold text-slate-700">38 Provinsi & 514 Kota/Kabupaten</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200; 

    const startCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15); 
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    // Intersection Observer: Animasi hanya jalan pas section terlihat di layar
    const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            startCounters();
            observer.disconnect(); 
        }
    }, { threshold: 0.5 });

    observer.observe(document.getElementById('statistik'));
</script>

<?= $this->endSection() ?>