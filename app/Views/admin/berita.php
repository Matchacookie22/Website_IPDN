<?= $this->extend('layout_admin') ?>

<?= $this->section('content') ?>
<div class="pb-24 bg-slate-50 min-h-screen">
    <div class="container mx-auto px-4">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div>
                <h1 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Manajemen <span class="text-red-700">Berita</span></h1>
                <p class="text-slate-500 font-medium italic">Kelola Informasi Resmi</p>
            </div>
            <button class="bg-slate-900 text-white px-8 py-3 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-xl hover:bg-red-700 transition-all flex items-center gap-3">
                <i class="fas fa-plus"></i> Tambah Berita
            </button>
        </div>

        <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-900 text-white text-[10px] font-black uppercase tracking-[0.2em]">
                    <tr>
                        <th class="p-6">Info Berita</th>
                        <th class="p-6">Deskripsi</th>
                        <th class="p-6 text-center">Detail</th>
                        <th class="p-6">Status</th>
                        <th class="p-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-slate-600 text-xs font-bold">
                    <?php foreach($daftar_berita as $b): ?>
                    <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors">
                        <!-- Kolom Judul & Gambar -->
                        <td class="p-6 flex items-center gap-4 min-w-[300px]">
                            <div class="w-16 h-12 rounded-lg bg-slate-200 overflow-hidden shrink-0 border border-slate-100">
                                <img src="<?= base_url('assets/img/'.$b['gambar']) ?>" class="w-full h-full object-cover" alt="Thumb">
                            </div>
                            <div>
                                <span class="text-slate-900 font-black uppercase tracking-tight block leading-tight"><?= $b['judul'] ?></span>
                                <span class="text-[9px] text-slate-400 font-bold uppercase mt-1 block italic"><?= $b['penulis'] ?></span>
                            </div>
                        </td>

                        <!-- Kolom Deskripsi -->
                        <td class="p-6">
                            <p class="line-clamp-2 text-slate-500 font-medium leading-relaxed max-w-xs">
                                <?= $b['deskripsi'] ?>
                            </p>
                        </td>

                        <!-- Kolom Tgl Rilis -->
                        <td class="p-6 text-center">
                            <span class="text-slate-400 italic"><?= $b['tgl_rilis'] ?></span>
                        </td>

                        <!-- Kolom Status -->
                        <td class="p-6">
                            <?php if($b['status'] == 'Published'): ?>
                                <span class="px-4 py-1.5 bg-green-50 text-green-600 rounded-full text-[9px] font-black uppercase">Published</span>
                            <?php else: ?>
                                <span class="px-4 py-1.5 bg-slate-100 text-slate-400 rounded-full text-[9px] font-black uppercase">Draft</span>
                            <?php endif; ?>
                        </td>

                        <!-- Kolom Aksi -->
                        <td class="p-6 text-center">
                            <div class="flex justify-center gap-4">
                                <button title="Edit" class="text-slate-400 hover:text-red-700 transition-all text-base"><i class="fas fa-edit"></i></button>
                                <button title="Hapus" class="text-slate-400 hover:text-red-700 transition-all text-base"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>