<?= $this->extend('layout_admin') ?>

<?= $this->section('content') ?>
<div class="pb-24 bg-slate-50 min-h-screen">
    <div class="container mx-auto px-4 max-w-4xl">
        
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Arsip <span class="text-red-700">Formasi Capra</span></h1>
            <p class="text-slate-500 font-medium italic mt-2">Keputusan Menteri Dalam Negeri Tentang Alokasi Kuota Nasional</p>
        </div>

        <div class="space-y-4">
            
            <!-- Accordion Tahun 2025 (Terbuka Default) -->
            <details class="group bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden" open>
                <summary class="flex items-center justify-between p-8 cursor-pointer list-none">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-red-700 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-red-700/20">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-slate-900 uppercase tracking-tight">Kuota Formasi Tahun 2025</h3>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Kepmen No. 800.1.2.2-2442</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-slate-300 transition-transform group-open:rotate-180"></i>
                </summary>
                
                <div class="px-8 pb-8">
                    <div class="overflow-hidden border border-slate-50 rounded-2xl">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-slate-900 text-white text-[10px] font-black uppercase tracking-widest">
                                <tr>
                                    <th class="p-4">Provinsi</th>
                                    <th class="p-4 text-center">Alokasi Kuota</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs font-bold text-slate-600">
                                <?php foreach($kuota_2025 as $k): ?>
                                <tr class="border-b border-slate-50">
                                    <td class="p-4 uppercase"><?= $k['provinsi'] ?></td>
                                    <td class="p-4 text-center text-red-700 font-black"><?= $k['kuota'] ?> Kursi</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </details>

            <!-- Accordion Tahun 2024 (Tertutup) -->
            <details class="group bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden" open>
                <summary class="flex items-center justify-between p-8 cursor-pointer list-none">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-red-700 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-red-700/20">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-slate-900 uppercase tracking-tight">Kuota Formasi Tahun 2024</h3>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Kepmen No. 800.1.2.2-2442</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-slate-300 transition-transform group-open:rotate-180"></i>
                </summary>
                
                <div class="px-8 pb-8">
                    <div class="overflow-hidden border border-slate-50 rounded-2xl">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-slate-900 text-white text-[10px] font-black uppercase tracking-widest">
                                <tr>
                                    <th class="p-4">Provinsi</th>
                                    <th class="p-4 text-center">Alokasi Kuota</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs font-bold text-slate-600">
                                <?php foreach($kuota_2024 as $k): ?>
                                <tr class="border-b border-slate-50">
                                    <td class="p-4 uppercase"><?= $k['provinsi'] ?></td>
                                    <td class="p-4 text-center text-red-700 font-black"><?= $k['kuota'] ?> Kursi</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </details>

            <!-- Accordion Tahun 2023 (Tertutup) -->
            <details class="group bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden" open>
                <summary class="flex items-center justify-between p-8 cursor-pointer list-none">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-red-700 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-red-700/20">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-slate-900 uppercase tracking-tight">Kuota Formasi Tahun 2023</h3>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Kepmen No. 800.1.2.2-2442</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-slate-300 transition-transform group-open:rotate-180"></i>
                </summary>
                
                <div class="px-8 pb-8">
                    <div class="overflow-hidden border border-slate-50 rounded-2xl">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-slate-900 text-white text-[10px] font-black uppercase tracking-widest">
                                <tr>
                                    <th class="p-4">Provinsi</th>
                                    <th class="p-4 text-center">Alokasi Kuota</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs font-bold text-slate-600">
                                <?php foreach($kuota_2023 as $k): ?>
                                <tr class="border-b border-slate-50">
                                    <td class="p-4 uppercase"><?= $k['provinsi'] ?></td>
                                    <td class="p-4 text-center text-red-700 font-black"><?= $k['kuota'] ?> Kursi</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </details>

        </div>
    </div>
</div>
<?= $this->endSection() ?>