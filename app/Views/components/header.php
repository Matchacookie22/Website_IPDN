<?php
$uri = service('uri');
$isHome = ($uri->getTotalSegments() == 0);
$isLoggedIn = session()->get('isLoggedIn');

function isActive($path)
{
    return url_is($path) ? 'is-active' : '';
}
?>

<style>
    .nav-link-custom {
        position: relative;
        text-decoration: none;
        font-weight: 900;
        transition: all 0.3s ease;
    }

    .nav-link-custom.is-active {
        color: #b91c1c !important;
    }

    .nav-link-custom::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: -6px;
        left: 0;
        background-color: #b91c1c;
        transition: width 0.3s ease;
    }

    .nav-link-custom.is-active::after,
    .nav-link-custom:hover::after {
        width: 100% !important;
    }

    .nav-link-custom:hover {
        color: #b91c1c !important;
    }
</style>

<nav id="main-navbar"
    class="fixed top-0 z-50 w-full transition-all duration-500 border-b <?= $isHome ? 'border-transparent' : 'bg-white shadow-md border-slate-100' ?>">
    <div class="container mx-auto px-4 h-20 flex items-center justify-between">

        <!-- Logo Section -->
        <a href="<?= base_url() ?>" class="flex items-center gap-3 group min-w-fit">
            <img src="<?= base_url('assets/img/Logo_IPDN.png') ?>" alt="Logo IPDN" class="w-10 h-10 lg:w-11 lg:h-11">
            <div class="flex flex-col justify-center leading-tight">
                <span id="nav-logo-text"
                    class="font-black text-xl lg:text-2xl tracking-tighter transition-colors <?= $isHome ? 'text-white' : 'text-slate-900' ?>">IPDN</span>
                <span id="nav-subtitle-text"
                    class="text-[8px] lg:text-[9px] font-bold tracking-[0.1em] uppercase transition-colors <?= $isHome ? 'text-slate-300' : 'text-red-700' ?>">
                    Institut Pemerintahan Dalam Negeri
                </span>
            </div>
        </a>

        <!-- Menu Navigasi: Kita handle berdasarkan Role -->
        <div class="hidden lg:flex items-center gap-8 text-[14px] uppercase tracking-widest">
            <?php if (session()->get('user_role') === 'admin'): ?>
                <!-- KHUSUS ADMIN: A. Andrian Fitzal R. (Opsional kalau dia akses Landing Page) -->
                <a href="<?= base_url('admin/dashboard') ?>" class="nav-link-custom nav-item">Panel Admin</a>
                <a href="<?= base_url('admin/kuota') ?>" class="nav-link-custom nav-item">Kuota Nasional</a>

            <?php elseif (session()->get('user_role') === 'user'): ?>
                <!-- KHUSUS USER (PRAJA): Sesudah Login -->
                <a href="<?= base_url() ?>" class="nav-link-custom nav-item <?= isActive('/') ?>">Beranda</a>
                <a href="<?= base_url('profil') ?>" class="nav-link-custom nav-item <?= isActive('profil') ?>">Profil</a>
                <a href="<?= base_url('pendidikan') ?>"
                    class="nav-link-custom nav-item <?= isActive('pendidikan') ?>">Pendidikan</a>
                <a href="<?= base_url('fasilitas') ?>"
                    class="nav-link-custom nav-item <?= isActive('fasilitas') ?>">Fasilitas</a>
                <a href="<?= base_url('spcp') ?>" class="nav-link-custom nav-item <?= isActive('spcp') ?>">SPCP</a>

            <?php else: ?>
                <!-- GUEST: Sebelum Login (Persis yang lu mau) -->
                <a href="<?= base_url() ?>" class="nav-link-custom nav-item <?= isActive('/') ?>">Beranda</a>
                <a href="<?= base_url('profil') ?>" class="nav-link-custom nav-item <?= isActive('profil') ?>">Profil</a>
                <a href="<?= base_url('pendidikan') ?>"
                    class="nav-link-custom nav-item <?= isActive('pendidikan') ?>">Pendidikan</a>
                <a href="<?= base_url('fasilitas') ?>"
                    class="nav-link-custom nav-item <?= isActive('fasilitas') ?>">Fasilitas</a>
                <a href="<?= base_url('spcp') ?>" class="nav-link-custom nav-item <?= isActive('spcp') ?>">SPCP</a>
            <?php endif; ?>
        </div>

        <!-- Tombol Login/Logout -->
        <div class="min-w-fit flex items-center">
            <?php if (session()->get('isLoggedIn')): ?>
                <!-- Kasih ID 'nav-user-text' di sini -->
                <span id="nav-user-text"
                    class="text-[10px] font-black mr-4 transition-colors duration-500 <?= $isHome ? 'text-white' : 'text-slate-900' ?>">
                    HI, <?= strtoupper(explode(' ', session()->get('nama'))[0]) ?>!
                </span>
                <a href="<?= base_url('logout') ?>"
                    class="bg-slate-900 text-white px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg hover:bg-red-700 transition-all">Logout</a>
            <?php else: ?>
                <a href="<?= base_url('login') ?>"
                    class="bg-red-700 text-white px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg hover:bg-red-800 transition-all">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<script>
    function handleNavbar() {
        const navbar = document.getElementById('main-navbar');
        const logoText = document.getElementById('nav-logo-text');
        const subtitleText = document.getElementById('nav-subtitle-text');
        const userText = document.getElementById('nav-user-text');
        const navItems = document.querySelectorAll('.nav-item');
        const isHome = <?= $isHome ? 'true' : 'false' ?>;
        const scrolled = window.scrollY > 50;

        // 1. Handle Background Navbar
        if (scrolled || !isHome) {
            navbar.classList.add('bg-white', 'shadow-md', 'border-slate-100');
            navbar.classList.remove('border-transparent');
            if (logoText) logoText.style.color = '#0f172a'; 
            if (subtitleText) subtitleText.style.color = '#b91c1c'; 
            if (userText) userText.style.color = '#0f172a';
        } else {
            navbar.classList.remove('bg-white', 'shadow-md', 'border-slate-100');
            navbar.classList.add('border-transparent');
            if (logoText) logoText.style.color = '#ffffff';
            if (subtitleText) subtitleText.style.color = '#cbd5e1'; 
            if (userText) userText.style.color = '#ffffff';
        }

        // 2. Handle Warna Menu Navigasi
        navItems.forEach(item => {
            if (item.classList.contains('is-active')) {
                // Jika menu aktif, selalu merah
                item.style.color = '#b91c1c';
            } else {
                if (isHome && !scrolled) {
                    // Di Beranda posisi atas: Menu lain jadi putih agar kelihatan
                    item.style.color = '#ffffff';
                } else {
                    // Setelah scroll atau di halaman lain: Menu lain jadi abu-abu[cite: 1]
                    item.style.color = '#475569';
                }
            }
        });
    }

    window.addEventListener('scroll', handleNavbar);
    window.addEventListener('DOMContentLoaded', handleNavbar);
</script>