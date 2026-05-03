<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Header: World Class Facilities -->
<div class="pt-48 pb-24 bg-white border-b border-slate-100 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="flex items-center gap-4 mb-6">
                <span class="w-12 h-[1px] bg-red-700"></span>
                <span class="text-red-700 font-bold text-[10px] uppercase tracking-[0.5em]">Campus Infrastructure</span>
            </div>
            <h1 class="text-5xl lg:text-7xl font-black text-slate-900 tracking-tighter uppercase leading-none mb-8">
                Fasilitas <br> <span class="text-red-700 italic">Kampus</span>
            </h1>
            <p class="text-slate-500 text-lg leading-relaxed border-l-4 border-red-700/20 pl-8 font-medium">
                Sarana dan prasarana modern untuk menunjang aktivitas akademik, pengasuhan, dan pelatihan bagi seluruh
                Praja.
            </p>
        </div>
    </div>
</div>

<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">

        <!-- Gallery Grid Fasilitas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Fasilitas 1: Ruang Kelas -->
            <div
                class="group bg-white rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="<?= base_url('assets/img/kelasipdn.jpg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mb-4">Ruang Kuliah</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Dilengkapi dengan teknologi audio-visual terkini
                        untuk menunjang metode pembelajaran yang interaktif dan nyaman.</p>
                </div>
            </div>

            <!-- Fasilitas 2: Menza (Ruang Makan) -->
            <div
                class="group bg-white rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="<?= base_url('assets/img/menzaipdn.jpg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mb-4">Menza Utama</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Fasilitas ruang makan bersama yang luas dengan
                        standar kebersihan dan nutrisi yang terjaga untuk seluruh Praja.</p>
                </div>
            </div>

            <!-- Fasilitas 3: Sarana Olahraga -->
            <div
                class="group bg-white rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="<?= base_url('assets/img/lapanganipdn.jpeg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mb-4">Stadion & GOR</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Fasilitas olahraga komprehensif mulai dari stadion
                        atletik, kolam renang, hingga gedung olahraga *indoor*.</p>
                </div>
            </div>

            <!-- Fasilitas 4: Barak / Asrama -->
            <div
                class="group bg-white rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="<?= base_url('assets/img/wismaipdn.jpg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mb-4">Wisma Praja</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Hunian asrama yang nyaman dan tertib sebagai
                        tempat pembinaan karakter dan disiplin dalam kehidupan sehari-hari.</p>
                </div>
            </div>

            <!-- Fasilitas 5: Perpustakaan -->
            <div
                class="group bg-white rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="<?= base_url('assets/img/perpus.jpg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mb-4">Perpustakaan Pusat
                    </h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Menyediakan ribuan koleksi literatur fisik dan
                        akses ke portal jurnal digital internasional.</p>
                </div>
            </div>

            <!-- Fasilitas 6: Rumah Sakit/Poliklinik -->
            <div
                class="group bg-white rounded-[3rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="<?= base_url('assets/img/polik.jpg') ?>"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mb-4">Poliklinik IPDN</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Layanan kesehatan siaga bagi seluruh civitas
                        akademika untuk menjamin kondisi fisik yang prima.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>