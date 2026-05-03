<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- Header -->
<div class="pt-48 pb-24 bg-white border-b border-slate-100 relative overflow-hidden">
    <!-- Ornamen Geometris Halus -->
    <div class="absolute right-0 top-0 w-1/2 h-full hidden lg:block">
        <div class="absolute inset-0 bg-gradient-to-l from-transparent to-white z-10"></div>
        <img src="<?= base_url('assets/img/pddkn.jpg') ?>"
            class="w-full h-full object-cover opacity-100 grayscale hover:grayscale-0 transition-all duration-1000">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <!-- Label Kecil -->
            <div class="flex items-center gap-4 mb-6">
                <span class="w-12 h-[1px] bg-red-700"></span>
                <span class="text-red-700 font-bold text-[10px] uppercase tracking-[0.5em]">
                    Academic Programs
                </span>
            </div>

            <!-- Judul -->
            <h1 class="text-4xl lg:text-6xl font-light text-slate-900 leading-tight mb-8">
                Eksplorasi Program <br>
                <span class="font-black text-red-700 uppercase tracking-tighter">Pendidikan Unggul</span>
            </h1>

            <!-- Deskripsi  -->
            <p
                class="text-slate-500 text-lg leading-relaxed max-w-xl font-medium italic border-l-2 border-red-700/20 pl-6">
                Menyusun kurikulum berbasis kompetensi untuk melahirkan aparatur sipil negara yang adaptif terhadap
                perubahan global.
            </p>
        </div>
    </div>
</div>

<section class="py-32 bg-white relative">
    <div class="container mx-auto px-4">

        <!-- Grid Fakultas -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Fakultas 1 -->
            <div
                class="group relative bg-slate-50 border border-slate-100 p-12 rounded-none hover:bg-white hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.1)] transition-all duration-700">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-red-700 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                </div>

                <div class="flex items-center justify-between mb-12">
                    <div class="w-24 h-24 bg-white shadow-xl flex items-center justify-center p-4">
                        <img src="<?= base_url('assets/img/FPM-removebg-preview.png') ?>" alt="Logo FPP"
                            class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <span class="text-5xl font-black text-slate-100 group-hover:text-red-50 transition-colors">01</span>
                </div>

                <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter leading-tight mb-6">
                    Fakultas Politik <br> Pemerintahan
                </h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-10 pb-10 border-b border-slate-200">
                    Pusat kajian teori politik dan implementasi kebijakan strategis dalam tata kelola pemerintahan
                    daerah di Indonesia.
                </p>

                <div class="space-y-4">
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Pembangunan Ekonomi dan Pemberdayaan Masyarakat</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Studi Kebijakan Publik</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Politik Indonesia Terapan</span>
                    </div>
                </div>
            </div>

            <!-- Fakultas 2 -->
            <div
                class="group relative bg-slate-50 border border-slate-100 p-12 rounded-none hover:bg-white hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.1)] transition-all duration-700">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-red-700 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                </div>

                <div class="flex items-center justify-between mb-12">
                    <div class="w-24 h-24 bg-white shadow-xl flex items-center justify-center p-4">
                        <img src="<?= base_url('assets/img/FMP-removebg-preview.png') ?>" alt="Logo FMP"
                            class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <span class="text-5xl font-black text-slate-100 group-hover:text-red-50 transition-colors">02</span>
                </div>

                <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter leading-tight mb-6">
                    Fakultas Manajemen <br> Pemerintahan
                </h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-10 pb-10 border-b border-slate-200">
                    Mencetak manajer publik yang unggul dalam pengelolaan sumber daya aparatur dan administrasi
                    birokrasi modern.
                </p>

                <div class="space-y-4">
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Manajemen Sumber Daya Manusia Sektor Publik</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Administrasi Pemerintahan Daerah</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Keuangan Publik</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Teknologi Rekayasa Informasi Pemerintahan</span>
                    </div>
                </div>
            </div>

            <!-- Fakultas 3 -->
            <div
                class="group relative bg-slate-50 border border-slate-100 p-12 rounded-none hover:bg-white hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.1)] transition-all duration-700">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-red-700 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                </div>

                <div class="flex items-center justify-between mb-12">
                    <div class="w-24 h-24 bg-white shadow-xl flex items-center justify-center p-4">
                        <img src="<?= base_url('assets/img/FPM-removebg-preview.png') ?>" alt="Logo FPM"
                            class="w-full h-full object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <span class="text-5xl font-black text-slate-100 group-hover:text-red-50 transition-colors">03</span>
                </div>

                <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter leading-tight mb-6">
                    Fakultas Perlindungan <br> Masyarakat
                </h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-10 pb-10 border-b border-slate-200">
                    Fokus pada keamanan, ketertiban, dan kependudukan untuk menjamin stabilitas pelayanan publik
                    nasional.
                </p>

                <div class="space-y-4">
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Studi Kependudukan dan Pencatatan Sipil</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Manajemen Keamanan dan Keselamatan Publik</span>
                    </div>
                    <div class="flex flex-col group/prodi">
                        <span class="text-[9px] font-black text-red-700 uppercase tracking-widest mb-1">Program
                            Studi</span>
                        <span
                            class="text-sm font-bold text-slate-900 group-hover/prodi:translate-x-2 transition-transform cursor-default">D4
                            Praktik Perpolisian Tata Pamong</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>