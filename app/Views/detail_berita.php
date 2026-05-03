<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">

        <!-- Header Berita -->
        <div class="mb-10 text-center">
            <span
                class="text-red-700 font-bold text-xs uppercase tracking-widest mb-4 block"><?= $berita['tgl'] ?></span>
            <h1 class="text-4xl lg:text-5xl font-black text-slate-900 leading-tight tracking-tighter mb-6">
                <?= $berita['judul'] ?>
            </h1>
            <div class="h-1.5 w-20 bg-red-700 mx-auto rounded-full"></div>
        </div>

        <!-- Image Utama -->
        <div class="rounded-[3rem] overflow-hidden shadow-2xl mb-12 aspect-video">
            <img src="<?= $berita['img'] ?>" class="w-full h-full object-cover" alt="Detail Berita">
        </div>

        <!-- Isi Berita -->
        <div class="prose prose-lg max-w-none text-slate-600 leading-relaxed font-light">
            <p class="mb-6 font-bold text-slate-900">Jatinangor, IPDN News —</p>
            <p class="mb-6 text-justify"><?= $berita['isi'] ?></p>
            <p class="mb-6 text-justify"></p>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-16 pt-10 border-t border-slate-100">
            <a href="<?= base_url() ?>"
                class="inline-flex items-center gap-3 text-sm font-bold text-slate-400 hover:text-red-700 transition-all group">
                <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform"></i>
                KEMBALI KE BERANDA
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>