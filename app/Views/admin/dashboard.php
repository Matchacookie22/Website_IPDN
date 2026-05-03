<?= $this->extend('layout_admin') ?>

<?= $this->section('content') ?>
<div class="pb-24 bg-slate-50 min-h-screen">
    <div class="container mx-auto px-4">

        <!-- Header Selamat Datang -->
        <div class="mb-10">
            <h1 class="text-4xl font-black text-slate-900 uppercase tracking-tighter">Panel <span class="text-red-700 italic">Administrator.</span></h1>
            <p class="text-slate-500 font-medium italic">Selamat Datang Admin — Ahmad Andrian Fitzal Rahman</p>
        </div>

        <!-- Baris 1: Statistik Utama (Pusat Data Praja) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Praja -->
            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm relative overflow-hidden group">
                <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center text-red-700 mb-6 group-hover:bg-red-700 group-hover:text-white transition-all">
                    <i class="fas fa-user-graduate text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-1">Total Praja Aktif</p>
                <h3 class="text-3xl font-black text-slate-900 italic">10,824</h3>
                <p class="text-[10px] text-slate-400 font-bold mt-2">Seluruh Kampus Daerah</p>
            </div>

            <!-- Pendaftar SPCP -->
            <div class="bg-slate-900 p-8 rounded-[2.5rem] shadow-xl text-white relative overflow-hidden">
                <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center text-red-500 mb-6">
                    <i class="fas fa-file-signature text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-1">Pendaftar SPCP 2025</p>
                <h3 class="text-3xl font-black italic text-red-500">42,156</h3>
                <p class="text-[10px] text-slate-400 font-bold mt-2">Update: Real-time</p>
            </div>

            <!-- Kampus Daerah -->
            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center text-red-700 mb-6">
                    <i class="fas fa-map-marked-alt text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-1">Sebaran Kampus</p>
                <h3 class="text-3xl font-black text-slate-900 italic">08</h3>
                <p class="text-[10px] text-slate-400 font-bold mt-2">Lokasi di Seluruh Indonesia</p>
            </div>

            <!-- Kuota Nasional -->
            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center text-red-700 mb-6">
                    <i class="fas fa-clipboard-check text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-1">Kuota Nasional</p>
                <h3 class="text-3xl font-black text-slate-900 italic">1,219</h3>
                <p class="text-[10px] text-red-700 font-bold mt-2 italic">SE Mendagri 2025</p>
            </div>
        </div>

        <!-- Baris 2: Grafik & Detail Peminat -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-12">
            <!-- Analitik Trafik (Kiri) -->
            <div class="lg:col-span-2 bg-white p-10 rounded-[3rem] border border-slate-100 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between mb-10 relative z-10">
                    <div>
                        <h3 class="text-xl font-black text-slate-900 uppercase tracking-tighter italic">Analitik Trafik Real-time</h3>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Aktivitas Pengunjung 7 Hari Terakhir</p>
                    </div>
                    <div class="text-right">
                        <span class="text-2xl font-black text-red-700 italic">84.2k</span>
                        <p class="text-[8px] font-bold text-green-500 uppercase tracking-widest">▲ 12.5% Bullish</p>
                    </div>
                </div>

                <!-- Area Chart.js -->
                <div class="relative h-72 w-full px-2">
                    <canvas id="cryptoChart"></canvas>
                </div>

                <!-- Label Hari -->
                <div class="flex justify-between mt-8 text-[10px] font-black uppercase text-slate-400 tracking-[0.3em] px-10">
                    <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                </div>
            </div>

            <!-- Peminat Kampus Informatif (Kanan) -->
            <div class="bg-white p-10 rounded-[3rem] border border-slate-100 shadow-sm">
                <div class="mb-8">
                    <h3 class="text-xl font-black text-slate-900 uppercase tracking-tighter italic">Peminat Kampus</h3>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Distribusi Pilihan Calon Praja</p>
                </div>

                <div class="space-y-8">
                    <!-- Kampus Jatinangor -->
                    <div>
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-xs font-black uppercase tracking-widest text-slate-900">Jatinangor (Pusat)</span>
                            <span class="text-xs font-black text-red-700 italic">4,250 Praja</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-700 h-full rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                    <!-- Kampus Jakarta -->
                    <div>
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-xs font-black uppercase tracking-widest text-slate-600">Jakarta</span>
                            <span class="text-xs font-black text-slate-900 italic">1,820 Praja</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-slate-900 h-full rounded-full" style="width: 45%"></div>
                        </div>
                    </div>

                    <!-- Kampus Sumatera Barat -->
                    <div>
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-xs font-black uppercase tracking-widest text-slate-600">Sumatera Barat</span>
                            <span class="text-xs font-black text-slate-900 italic">1,150 Praja</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-slate-400 h-full rounded-full" style="width: 30%"></div>
                        </div>
                    </div>

                    <!-- Kampus Papua -->
                    <div>
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-xs font-black uppercase tracking-widest text-slate-600">Papua</span>
                            <span class="text-xs font-black text-slate-900 italic">980 Praja</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-slate-400 h-full rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 p-6 bg-slate-50 rounded-[2rem] border border-dashed border-slate-200">
                    <p class="text-[9px] font-bold text-slate-400 uppercase leading-relaxed text-center">
                        Berdasarkan data pendaftaran SPCP 2025 per tanggal 1 Mei 2026.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script Inisialisasi Chart -->
<script>
    const ctx = document.getElementById('cryptoChart').getContext('2d');

    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(185, 28, 28, 0.4)');
    gradient.addColorStop(1, 'rgba(185, 28, 28, 0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                label: 'Pengunjung',
                data: [1200, 1900, 1500, 2500, 2200, 3100, 3800],
                borderColor: '#b91c1c',
                borderWidth: 4,
                fill: true,
                backgroundColor: gradient,
                tension: 0.4,
                pointRadius: 0,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: '#b91c1c',
                pointHoverBorderColor: '#fff',
                pointHoverBorderWidth: 4,
            }]
        },
        options: {
            layout: {
                padding: {
                    bottom: 20
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    display: true,
                    grid: {
                        drawBorder: false,
                        color: 'rgba(226, 232, 240, 0.5)',
                    },
                    ticks: {
                        color: '#94a3b8',
                        font: {
                            size: 10,
                            family: 'Inter, sans-serif',
                            weight: 'bold'
                        },
                        callback: function(value) {
                            return value >= 1000 ? (value / 1000) + 'k' : value;
                        }
                    }
                },
                x: {
                    display: false
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            }
        }
    });
</script>
<?= $this->endSection() ?>