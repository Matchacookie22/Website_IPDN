<footer class="bg-[#020617] pt-24 pb-12 text-white border-t-4 border-red-700">
    <div class="container mx-auto px-4">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-20">

            <!-- Column 1: Identity (4 Slots) -->
            <div class="lg:col-span-5">
                <div class="flex items-center gap-4 mb-8">
                    <img src="<?= base_url('assets/img/Logo_IPDN.png') ?>" alt="Logo IPDN"
                        class="w-14 h-14 object-contain">
                    <div>
                        <h4 class="font-black text-2xl tracking-tighter leading-none">IPDN</h4>
                        <p class="text-[10px] font-bold text-red-500 uppercase tracking-[0.2em] mt-1">
                            Institut Pemerintahan Dalam Negeri
                        </p>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed max-w-md mb-8">
                    Lembaga Pendidikan Tinggi Kedinasan di lingkungan Kementerian Dalam Negeri, yang menyelenggarakan
                    program pendidikan vokasi, sarjana, pascasarjana, dan profesi kepamongprajaan.
                </p>
                <!-- Social Media Resmi IPDN -->
                <div class="flex gap-4">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/humasipdn.id" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:bg-red-700 hover:border-red-700 transition-all group"
                        title="Instagram Humas IPDN">
                        <i class="fab fa-instagram text-sm text-white transition-transform group-hover:scale-110"></i>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@HumasIPDN" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:bg-red-700 hover:border-red-700 transition-all group"
                        title="YouTube Humas IPDN">
                        <i class="fab fa-youtube text-sm text-white transition-transform group-hover:scale-110"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://web.facebook.com/officialhumaspraja" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:bg-red-700 hover:border-red-700 transition-all group"
                        title="Facebook Humas IPDN">
                        <i class="fab fa-facebook-f text-sm text-white transition-transform group-hover:scale-110"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links (3 Slots) -->
            <div class="lg:col-span-3">
                <h5 class="text-xs font-black uppercase tracking-[0.3em] mb-10 text-white/50">Navigasi</h5>
                <ul class="space-y-4">
                    <li>
                        <a href="<?= base_url() ?>"
                            class="text-sm font-bold text-slate-400 hover:text-red-500 flex items-center gap-2 group transition-all">
                            <span class="w-0 group-hover:w-4 h-[1px] bg-red-500 transition-all"></span> Beranda Utama
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('profil') ?>"
                            class="text-sm font-bold text-slate-400 hover:text-red-500 flex items-center gap-2 group transition-all">
                            <span class="w-0 group-hover:w-4 h-[1px] bg-red-500 transition-all"></span> Profil Institusi
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pendidikan') ?>"
                            class="text-sm font-bold text-slate-400 hover:text-red-500 flex items-center gap-2 group transition-all">
                            <span class="w-0 group-hover:w-4 h-[1px] bg-red-500 transition-all"></span> Program
                            Pendidikan
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('fasilitas') ?>"
                            class="text-sm font-bold text-slate-400 hover:text-red-500 flex items-center gap-2 group transition-all">
                            <span class="w-0 group-hover:w-4 h-[1px] bg-red-500 transition-all"></span> Fasilitas
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('smart-campus') ?>"
                            class="text-sm font-bold text-slate-400 hover:text-red-500 flex items-center gap-2 group transition-all">
                            <span class="w-0 group-hover:w-4 h-[1px] bg-red-500 transition-all"></span> SPCP
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Headquarters (4 Slots) -->
            <div class="lg:col-span-4">
                <h5 class="text-xs font-black uppercase tracking-[0.3em] mb-10 text-white/50">Kampus Pusat</h5>
                <div class="bg-slate-900/50 border border-slate-800 p-8 rounded-[2rem]">
                    <div class="flex gap-4 mb-6">
                        <i class="fas fa-map-marker-alt text-red-500 mt-1"></i>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Jl. Raya Bandung - Sumedang Km 20, Jatinangor, Sumedang, Jawa Barat 45363.
                        </p>
                    </div>
                    <div class="flex gap-4 mb-6">
                        <i class="fas fa-phone-alt text-red-500 mt-1"></i>
                        <p class="text-sm text-slate-300 font-bold">021 - 7708059</p>
                    </div>
                    <div class="flex gap-4">
                        <i class="fas fa-envelope text-red-500 mt-1"></i>
                        <p class="text-sm text-slate-300 font-bold">info@ipdn.ac.id</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="pt-10 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">
                &copy; 2026 Ahmad Andrian Fitzal Rahman • A11.2023.15152
            </p>
            <div class="flex gap-8 text-[10px] font-black text-slate-500 uppercase tracking-widest">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>