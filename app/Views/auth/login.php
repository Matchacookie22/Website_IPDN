<?= $this->extend('layout_clear') ?>

<?= $this->section('content') ?>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div class="h-screen w-full flex items-center justify-center bg-slate-50 p-6 overflow-hidden">
    <div
        class="bg-white rounded-[3rem] shadow-2xl w-full max-w-5xl h-[650px] flex overflow-hidden border border-slate-100">

        <!-- Sisi Kiri: Visual/Foto (Tetap 1/2) -->
        <div class="hidden lg:block w-1/2 relative bg-slate-900">
            <img src="<?= base_url('assets/img/pddkn.jpg') ?>"
                class="absolute inset-0 w-full h-full object-cover opacity-60" alt="IPDN Academic">

            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>

            <div class="absolute bottom-12 left-12 right-12 text-center">
                <h2 class="text-4xl font-black text-white uppercase tracking-tighter leading-none mb-4">
                    Selamat Datang di <br><span class="text-red-600 ">IPDN</span>
                </h2>
                <p class="text-slate-300 text-sm font-medium leading-relaxed italic">
                    "Abdi Negara, Bakti Bangsa, Indonesia Jaya."
                </p>
            </div>
        </div>

        <!-- Sisi Kanan: Form Login -->
        <div class="w-full lg:w-1/2 p-12 lg:p-20 flex flex-col justify-center bg-white">
            <div class="mb-10 text-center">
                <img src="<?= base_url('assets/img/Logo_IPDN.png') ?>" class="w-20 h-20 mb-6 mx-auto" alt="Logo IPDN">
                <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Login</h3>
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mt-2">Institut Pemerintahan
                    Dalam Negeri</p>
            </div>

            <?php if (session()->getFlashdata('error')): ?>
                <div
                    class="mb-6 p-4 bg-red-50 border-l-4 border-red-700 text-red-700 text-[10px] font-black uppercase tracking-wider">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('login/attempt') ?>" method="post" class="space-y-6">
                <!-- Tambahin CSRF Field buat security -->
                <?= csrf_field() ?>

                <div>
                    <label
                        class="block text-[10px] font-black uppercase mb-2 tracking-widest text-slate-400 ml-1">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username"
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:outline-none focus:ring-4 focus:ring-red-700/5 transition-all font-bold text-slate-900 placeholder:text-slate-300"
                        required>
                </div>

                <!-- BAGIAN PASSWORD DENGAN ICON MATA -->
                <div x-data="{ show: false }">
                    <label
                        class="block text-[10px] font-black uppercase mb-2 tracking-widest text-slate-400 ml-1">Password</label>
                    <div class="relative flex items-center">
                        <input :type="show ? 'text' : 'password'" name="password" placeholder="••••••••"
                            class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:outline-none focus:ring-4 focus:ring-red-700/5 transition-all font-bold text-slate-900 placeholder:text-slate-300"
                            required>

                        <!-- Tombol Toggle Mata -->
                        <button type="button" @click="show = !show"
                            class="absolute right-6 focus:outline-none text-slate-400 hover:text-red-700 transition-colors">

                            <!-- Icon Mata Terbuka (muncul saat dipencet) -->
                            <svg x-show="show" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            <!-- Icon Mata Tertutup (kondisi awal) -->
                            <svg x-show="!show" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full py-5 bg-red-700 hover:bg-red-800 text-white rounded-2xl font-black text-xs uppercase tracking-[0.2em] transition-all shadow-xl shadow-red-700/20 active:scale-[0.98] mt-4">
                    Masuk
                </button>
            </form>

            <div class="mt-10 border-t border-slate-50 text-center">
                <a href="<?= base_url('/') ?>"
                    class="text-[10px] font-black uppercase text-slate-400 hover:text-red-700 transition-colors">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>