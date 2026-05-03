<?= $this->extend('layout_admin') ?>

<?= $this->section('content') ?>
<div class="w-full">
    <!-- Header Page -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
        <div>
            <h1 class="text-4xl font-black tracking-tighter leading-none text-slate-900">
                MANAJEMEN <span class="text-red-600">ADMIN</span>
            </h1>
            <p class="text-slate-500 font-bold italic mt-2 text-sm uppercase tracking-tight">
                Otoritas & Pengaturan Akses Personel IT IPDN
            </p>
        </div>

        <!-- Tombol Tambah Admin -->
        <button
            class="flex items-center gap-3 px-6 py-3.5 bg-slate-900 text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] hover:bg-red-700 transition-all shadow-xl shadow-slate-900/20 group">
            <i class="fa-solid fa-plus transition-transform group-hover:rotate-90"></i>
            Tambah Administrator
        </button>
    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">
                            Administrator</th>
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Role</th>
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Status
                        </th>
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Last
                            Active</th>
                        <th
                            class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] text-center">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <!-- Data Admin 1: Akun Kamu -->
                    <tr class="group hover:bg-slate-50/80 transition-all">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-11 h-11 rounded-2xl bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center font-black text-white text-xs border border-red-400/20 shadow-lg">
                                    A</div>
                                <div>
                                    <p class="text-xs font-black text-slate-900 uppercase tracking-tighter italic">A.
                                        Andrian Fitzal R.</p>
                                    <p class="text-[10px] text-slate-400 font-bold">andrian@ipdn.ac.id</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span
                                class="text-[9px] font-black px-3 py-1.5 rounded-lg bg-red-50 text-red-600 uppercase tracking-widest border border-red-100">Super
                                Admin</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                                <span
                                    class="text-[10px] font-black text-slate-700 uppercase tracking-widest">Online</span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-[10px] font-bold text-slate-500 italic uppercase">Just Now</p>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <button
                                    class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 text-slate-600 hover:bg-slate-900 hover:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-pen-to-square text-[10px]"></i>
                                </button>
                                <button
                                    class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 text-slate-600 hover:bg-red-600 hover:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-trash-can text-[10px]"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data Admin 2: Dummy -->
                    <tr class="group hover:bg-slate-50/80 transition-all">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-11 h-11 rounded-2xl bg-slate-100 flex items-center justify-center font-black text-slate-400 text-xs border border-slate-200 shadow-sm">
                                    M</div>
                                <div>
                                    <p class="text-xs font-black text-slate-900 uppercase tracking-tighter italic">
                                        Mutiara Ramadhani</p>
                                    <p class="text-[10px] text-slate-400 font-bold">mutiara@ipdn.ac.id</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span
                                class="text-[9px] font-black px-3 py-1.5 rounded-lg bg-slate-100 text-slate-500 uppercase tracking-widest border border-slate-200">Editor</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2 text-slate-300">
                                <div class="w-1.5 h-1.5 rounded-full bg-slate-300"></div>
                                <span class="text-[10px] font-black uppercase tracking-widest">Offline</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-slate-400">
                            <p class="text-[10px] font-bold italic uppercase tracking-tighter">02 May 2026</p>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div
                                class="flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button
                                    class="w-9 h-9 flex items-center justify-center rounded-xl bg-slate-100 text-slate-600 hover:bg-slate-900 hover:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-pen-to-square text-[10px]"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination Minimalis -->
        <div class="px-8 py-6 bg-slate-50/30 border-t border-slate-100 flex items-center justify-between">
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest italic">Showing 2 results from IPDN
                Central Node</p>
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 rounded-lg bg-white border border-slate-200 text-[10px] font-black text-slate-400 hover:text-red-600 transition-all">PREV</button>
                <button
                    class="px-4 py-2 rounded-lg bg-white border border-slate-200 text-[10px] font-black text-slate-400 hover:text-red-600 transition-all">NEXT</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>