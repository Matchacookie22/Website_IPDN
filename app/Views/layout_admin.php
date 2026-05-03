<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/Logo_IPDN.png') ?>">
    <title>Admin Dashboard | IPDN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #F8FAFC;
        }

        #sidebar {
            width: 320px;
            transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #main-content {
            margin-left: 320px;
            transition: margin-left 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* STATE MINI (Hanya aktif lewat Tombol Hamburger) */
        #sidebar.sidebar-mini {
            width: 100px !important;
        }

        #main-content.content-expanded {
            margin-left: 100px !important;
        }

        /* MATIIN SEMUA TEKS SAAT MINI */
        .sidebar-mini .nav-text,
        .sidebar-mini .admin-name,
        .sidebar-mini .menu-label,
        .sidebar-mini .logo-text {
            display: none !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }

        /* PUSATKAN IKON SAAT MINI */
        .sidebar-mini .nav-link-item,
        .sidebar-mini .logo-container,
        .sidebar-mini .profile-container {
            justify-content: center !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /* GLASSMORPHISM & UI */
        .glass-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .main-container {
            padding: 1.5rem 2.5rem 2.5rem 2.5rem;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #0F172A;
        }

        ::-webkit-scrollbar-thumb {
            background: #1E293B;
            border-radius: 10px;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content-fade-up {
            animation: fadeUp 0.6s ease-out forwards;
        }
    </style>
</head>

<body class="antialiased text-slate-900">

    <div class="flex min-h-screen overflow-x-hidden">
        <!-- SIDEBAR -->
        <aside id="sidebar" class="bg-[#0F172A] text-white fixed h-full z-50 flex flex-col shadow-2xl">

            <!-- Logo Section -->
            <div class="logo-container p-8 flex items-center gap-4 border-b border-slate-800/50">
                <img src="<?= base_url('assets/img/Logo_IPDN.png') ?>" class="w-12 h-12 object-contain drop-shadow-xl"
                    alt="Logo">
                <div class="logo-text transition-all duration-300">
                    <h1 class="text-2xl font-black tracking-tighter uppercase leading-tight">IPDN</h1>
                    <span
                        class="text-red-500 block text-[10px] font-black uppercase tracking-[0.3em] opacity-80 text-nowrap">Admin
                        Central</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-4 py-8 space-y-2 overflow-y-auto">

                <a href="<?= base_url('admin/dashboard') ?>"
                    class="nav-link-item flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 <?= url_is('admin/dashboard') ? 'bg-gradient-to-r from-red-600 to-red-700 text-white shadow-xl shadow-red-900/40' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' ?>">
                    <i class="fa-solid fa-layer-group text-lg shrink-0"></i>
                    <span class="nav-text text-xs font-black uppercase tracking-widest italic">Dashboard</span>
                </a>

                <a href="<?= base_url('admin/kuota') ?>"
                    class="nav-link-item flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 <?= url_is('admin/kuota') ? 'bg-gradient-to-r from-red-600 to-red-700 text-white shadow-xl shadow-red-900/40' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' ?>">
                    <i class="fa-solid fa-map-location-dot text-lg shrink-0"></i>
                    <span class="nav-text text-xs font-black uppercase tracking-widest italic text-nowrap">Arsip
                        Kuota</span>
                </a>

                <a href="<?= base_url('admin/berita') ?>"
                    class="nav-link-item flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 <?= url_is('admin/berita') ? 'bg-gradient-to-r from-red-600 to-red-700 text-white shadow-xl shadow-red-900/40' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' ?>">
                    <i class="fa-solid fa-newspaper text-lg shrink-0"></i>
                    <span class="nav-text text-xs font-black uppercase tracking-widest italic text-nowrap">Manajemen
                        Berita</span>
                </a>
                <!-- Manajemen Admin Link -->
                <a href="<?= base_url('admin/users') ?>"
                    class="nav-link-item flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 <?= url_is('admin/users') ? 'bg-gradient-to-r from-red-600 to-red-700 text-white shadow-xl shadow-red-900/40' : 'text-slate-400 hover:text-white hover:bg-slate-800/50' ?>">
                    <i class="fa-solid fa-user-shield text-lg shrink-0"></i>
                    <span class="nav-text text-xs font-black uppercase tracking-widest italic text-nowrap">Manajemen
                        Admin</span>
                </a>
            </nav>

            <!-- Profil Admin -->
            <div class="p-6 border-t border-slate-800/50 bg-[#0B1222]/50">
                <div
                    class="profile-container flex items-center gap-4 p-4 rounded-3xl bg-slate-800/30 border border-white/5 mb-4 overflow-hidden">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-br from-red-500 to-red-800 flex items-center justify-center font-black text-white shrink-0 border border-white/10 shadow-lg">
                        A</div>
                    <div class="admin-name transition-all duration-300">
                        <p class="text-[11px] font-black uppercase tracking-tight text-white truncate">A. Andrian F.R.
                        </p>
                        <p class="text-[9px] text-slate-500 font-bold uppercase tracking-widest">Super Admin</p>
                    </div>
                </div>
                <a href="<?= base_url('logout') ?>"
                    class="nav-link-item flex items-center gap-4 px-6 py-4 rounded-2xl text-slate-500 hover:text-red-500 transition-all duration-300 group">
                    <i class="fa-solid fa-arrow-right-from-bracket text-sm shrink-0"></i>
                    <span class="nav-text text-xs font-black uppercase tracking-widest">Log out</span>
                </a>
            </div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <div id="main-content" class="flex-1 min-w-0 flex flex-col">
            <header
                class="h-20 glass-header border-b border-slate-200/60 flex items-center justify-between px-10 sticky top-0 z-40">
                <div class="flex items-center gap-6">
                    <button id="hamburger"
                        class="group w-11 h-11 flex items-center justify-center rounded-xl bg-slate-100/80 text-slate-600 hover:bg-red-600 hover:text-white transition-all duration-500 border border-slate-200/50 shadow-sm">
                        <i class="fa-solid fa-bars-staggered text-base transition-transform group-hover:rotate-90"></i>
                    </button>
                    <div class="hidden md:block">
                        <h2 class="text-xs font-black text-slate-800 uppercase tracking-tighter italic leading-none">
                            Sistem Admin <span class="text-red-600">IPDN</span></h2>
                    </div>
                </div>

                <div class="flex items-center gap-6">
                    <div class="text-right border-r pr-6 border-slate-200 hidden sm:block">
                        <p class="text-[10px] font-black text-slate-900 uppercase tracking-tighter italic leading-none">
                            <?= date('l, d F Y') ?></p>
                        <p class="text-[8px] font-bold text-red-600 uppercase tracking-[0.2em] mt-1">Live: Semarang</p>
                    </div>
                </div>
            </header>

            <div class="px-10 pt-6 flex items-center">
                <div class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                    <i class="fa-solid fa-house-chimney text-red-600/50"></i>
                    <span>Admin</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span class="text-slate-900"><?= ucfirst(str_replace('admin/', '', uri_string())) ?></span>
                </div>
            </div>

            <main class="main-container content-fade-up">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>

    <script>
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        // SATU-SATUNYA akses untuk ngerubah lebar sidebar
        hamburger.addEventListener('click', (e) => {
            e.preventDefault();
            sidebar.classList.toggle('sidebar-mini');
            mainContent.classList.toggle('content-expanded');
        });

        // Cegah interaksi di luar menu pas lagi mini
        sidebar.addEventListener('click', (e) => {
            if (sidebar.classList.contains('sidebar-mini')) {
                // Biarkan link <a> tetep jalan, selain itu stop
                if (!e.target.closest('a')) {
                    e.stopPropagation();
                }
            }
        });
    </script>

</body>

</html>