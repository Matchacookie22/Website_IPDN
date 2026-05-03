<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Header: SPCP Admission Center  -->
<div class="relative pt-60 pb-32 overflow-hidden bg-slate-900">
    <!-- Foto Background Hero -->
    <div class="absolute inset-0 z-0">
        <img src="<?= base_url('assets/img/hero-ipdn.jpg') ?>"
            class="w-full h-full object-cover opacity-40 grayscale hover:grayscale-0 transition-all duration-1000"
            alt="Gedung IPDN">
        <!-- Overlay Gradient  -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl">
            <div class="flex items-center gap-4 mb-8">
                <span class="h-[1px] w-12 bg-red-600"></span>
                <span class="text-red-500 font-black text-[10px] uppercase tracking-[0.5em]">Informasi Resmi SPCP
                    2026</span>
            </div>
            <h1 class="text-6xl lg:text-8xl font-black text-white tracking-tighter uppercase leading-[0.85] mb-8">
                Seleksi <br> <span class="text-red-600 italic">Calon Praja</span>
            </h1>
            <p class="text-slate-300 text-xl leading-relaxed border-l-4 border-red-700 pl-8 font-medium max-w-2xl">
                Berdasarkan Surat Edaran Mendagri Nomor 800.1.2.2/2290/SJ, IPDN membuka kesempatan bagi putra-putri
                terbaik bangsa untuk bergabung menjadi kader pamong praja.
            </p>
        </div>
    </div>
</div>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">

        <!-- SECTION 1: PERSYARATAN -->
        <div class="space-y-16 mb-32">

            <!-- 01. Persyaratan Umum & Fisik -->
            <div class="group">
                <h2 class="text-3xl font-black uppercase tracking-tighter mb-8 flex items-center gap-4">
                    <span class="text-red-700">01.</span> Persyaratan Umum & Fisik
                </h2>
                <div
                    class="bg-slate-50 p-10 rounded-[3rem] border border-slate-100 space-y-6 text-slate-600 text-sm leading-relaxed text-justify">
                    <p><span class="font-bold text-slate-900">Kewarganegaraan & Usia:</span> Terbuka bagi seluruh Warga
                        Negara Indonesia (WNI). Usia peserta minimal 16 tahun dan maksimal 21 tahun pada tanggal 1
                        Januari 2026.</p>
                    <p><span class="font-bold text-slate-900">Kriteria Fisik:</span> Tinggi badan pria minimal 160 cm
                        dan wanita minimal 155 cm. Pendaftar tidak boleh memiliki tato atau bekas tato. Peserta pria
                        tidak diperbolehkan bertindik atau memiliki bekas tindik kecuali karena ketentuan agama/adat.
                    </p>
                    <p><span class="font-bold text-slate-900">Kesehatan:</span> Tidak diperkenankan menggunakan kacamata
                        atau lensa kontak. Belum pernah menikah/kawin, dan bagi wanita belum pernah hamil atau
                        melahirkan.</p>
                    <p><span class="font-bold text-slate-900">Integritas:</span> Tidak sedang menjalani hukuman pidana
                        dan belum pernah diberhentikan secara tidak hormat sebagai Praja IPDN atau perguruan tinggi
                        lainnya.</p>
                </div>
            </div>

            <!-- 02. Persyaratan Akademik & Administrasi -->
            <div class="group">
                <h2 class="text-3xl font-black uppercase tracking-tighter mb-8 flex items-center gap-4">
                    <span class="text-red-700">02.</span> Standar Akademik & Administrasi
                </h2>
                <div
                    class="bg-slate-50 p-10 rounded-[3rem] border border-slate-100 space-y-6 text-slate-600 text-sm leading-relaxed text-justify">
                    <p><span class="font-bold text-slate-900">Ijazah:</span> Lulusan SMA atau MA (termasuk Paket C)
                        tahun 2021 hingga 2024. Nilai rata-rata Ijazah minimal 70,00 untuk Rapor dan Ujian Sekolah.</p>
                    <p><span class="font-bold text-slate-900">Afirmasi Papua:</span> Khusus pendaftar dari Provinsi
                        Papua, Papua Barat, Papua Tengah, Papua Pegunungan, Papua Selatan, dan Papua Barat Daya, nilai
                        rata-rata ijazah minimal adalah 65,00.</p>
                    <p><span class="font-bold text-slate-900">Domisili:</span> Wajib berdomisili minimal 1 tahun di
                        Kabupaten/Kota pada Provinsi tempat mendaftar secara sah (dibuktikan dengan KTP-el atau KK).</p>
                    <p><span class="font-bold text-slate-900">Foto & Email:</span> Mengunggah pasfoto 4x6 cm menghadap
                        depan, kemeja putih lengan panjang, latar belakang MERAH, serta memiliki alamat email aktif.</p>
                </div>
            </div>


        </div>

        <!-- SECTION 2: ALUR SELEKSI-->
        <div class="max-w-2xl mx-auto">
            <h2 class="text-4xl font-black uppercase tracking-tighter text-center mb-20 italic">Tahapan Seleksi Resmi
            </h2>

            <div class="relative">
                <!-- Garis Penghubung Tengah -->
                <div class="absolute left-1/2 top-0 bottom-0 w-1 bg-slate-100 -translate-x-1/2"></div>

                <!-- Step 1 -->
                <div class="relative flex items-center justify-center mb-16">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-10 h-10 bg-red-700 text-white rounded-full flex items-center justify-center font-black z-10 shadow-lg border-4 border-white text-xs">
                        01</div>
                    <div class="w-full pl-[60%] md:pl-[55%]">
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h4 class="font-black text-sm uppercase text-slate-900 mb-1">Seleksi Administrasi</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase italic">Verifikasi Dokumen Online
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex items-center justify-center mb-16">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-10 h-10 bg-slate-900 text-white rounded-full flex items-center justify-center font-black z-10 shadow-lg border-4 border-white text-xs">
                        02</div>
                    <div class="w-full pr-[60%] md:pr-[55%] text-right">
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h4 class="font-black text-sm uppercase text-slate-900 mb-1">Seleksi Kompetensi Dasar</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase italic">Tes CAT oleh BKN</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex items-center justify-center mb-16">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-10 h-10 bg-slate-900 text-white rounded-full flex items-center justify-center font-black z-10 shadow-lg border-4 border-white text-xs">
                        03</div>
                    <div class="w-full pl-[60%] md:pl-[55%]">
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h4 class="font-black text-sm uppercase text-slate-900 mb-1">Tes Kesehatan I</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase italic">Pemeriksaan Medis Awal</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative flex items-center justify-center mb-16">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-10 h-10 bg-slate-900 text-white rounded-full flex items-center justify-center font-black z-10 shadow-lg border-4 border-white text-xs">
                        04</div>
                    <div class="w-full pr-[60%] md:pr-[55%] text-right">
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h4 class="font-black text-sm uppercase text-slate-900 mb-1">Tes Kesehatan II</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase italic">Pemeriksaan Medis Lanjutan
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="relative flex items-center justify-center mb-16">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-10 h-10 bg-slate-900 text-white rounded-full flex items-center justify-center font-black z-10 shadow-lg border-4 border-white text-xs">
                        05</div>
                    <div class="w-full pl-[60%] md:pl-[55%]">
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h4 class="font-black text-sm uppercase text-slate-900 mb-1">Pantukhir</h4>
                            <p class="text-[10px] text-slate-400 font-bold uppercase italic">Kesamaptaan & Penampilan
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Final Step -->
                <div class="relative flex items-center justify-center">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 w-12 h-12 bg-red-700 text-white rounded-2xl flex items-center justify-center font-black z-10 shadow-xl border-4 border-white rotate-45">
                        <i class="fas fa-flag-checkered -rotate-45"></i></div>
                    <div class="w-full text-center mt-24">
                        <span class="text-red-700 font-black text-xs uppercase tracking-widest block">Goal</span>
                        <h4 class="text-2xl font-black text-slate-900 uppercase">CALON PRAJA IPDN</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?= $this->endSection() ?>