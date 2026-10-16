<?php
// index.php - Ultra Modern Landing Page
$nama_sekolah = "SMA/SMK Bintang Bangsa";
$tahun_ajaran = "2026/2027";

include 'assets/header.php';
?>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative overflow-hidden pt-16 pb-28 lg:pt-24 lg:pb-36 bg-slate-950">
        <!-- Glowing Ambient Lights Background -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-600/20 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute top-1/3 right-10 w-[400px] h-[400px] bg-accent-500/15 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column (Copywriting) -->
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2.5 bg-white/5 border border-white/10 px-4 py-2 rounded-full backdrop-blur-md">
                        <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span class="text-xs font-bold text-slate-200 tracking-wider uppercase">Sekolah Penggerak & Pusat Keunggulan IT</span>
                    </div>

                    <h1 class="font-heading font-black text-4xl sm:text-6xl lg:text-7xl tracking-tight leading-[1.05] text-white">
                        Mencetak Talenta Digital & <span class="text-gradient">Pemimpin Global Masa Depan.</span>
                    </h1>

                    <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 font-medium leading-relaxed">
                        Nikmati ekosistem pendidikan futuristik dengan kurikulum berbasis praktik industri, laboratorium Apple Mac, serta pembinaan karakter akhlakul karimah yang kokoh.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="ppdb.php" class="w-full sm:w-auto bg-gradient-to-r from-brand-600 via-indigo-600 to-purple-600 hover:opacity-90 text-white font-extrabold px-8 py-4 rounded-2xl shadow-xl shadow-brand-600/30 transition text-center flex items-center justify-center gap-3">
                            <span>Daftar PPDB <?php echo $tahun_ajaran; ?></span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                        <a href="#kalkulator" class="w-full sm:w-auto bg-white/5 hover:bg-white/10 text-white font-bold px-8 py-4 rounded-2xl border border-white/10 backdrop-blur-md transition text-center">
                            <i class="fas fa-calculator mr-2 text-brand-400"></i> Hitung Beasiswa
                        </a>
                    </div>

                    <!-- Counter Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                        <div>
                            <div class="font-heading font-black text-3xl sm:text-4xl text-white">99%</div>
                            <div class="text-xs text-slate-400 font-medium mt-1">Terserap Kerja & PTN</div>
                        </div>
                        <div>
                            <div class="font-heading font-black text-3xl sm:text-4xl text-white">40+</div>
                            <div class="text-xs text-slate-400 font-medium mt-1">Kemitraan Industri</div>
                        </div>
                        <div>
                            <div class="font-heading font-black text-3xl sm:text-4xl text-white">A</div>
                            <div class="text-xs text-slate-400 font-medium mt-1">Akreditasi Unggul</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Hero Card Visual) -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Card Wrapper with Glassmorphism Effect -->
                        <div class="glass-card-dark p-4 rounded-3xl shadow-2xl relative overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Siswa Bintang Bangsa" class="rounded-2xl object-cover w-full h-[420px] group-hover:scale-105 transition duration-700">
                            
                            <!-- Floating Badge -->
                            <div class="absolute bottom-8 left-8 right-8 glass-card-dark p-5 rounded-2xl border border-white/20 text-white flex items-center gap-4 shadow-2xl">
                                <div class="w-12 h-12 bg-gradient-to-tr from-brand-500 to-accent-500 rounded-xl flex items-center justify-center text-xl font-bold shadow-lg">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <div class="font-heading font-bold text-sm">Diskon Biaya SPP 50%</div>
                                    <div class="text-xs text-slate-300">Khusus Pendaftar Gelombang Early Bird</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TENTANG KAMI -->
    <section id="tentang" class="py-24 bg-slate-900 border-t border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="grid grid-cols-2 gap-4 relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=500" alt="Gedung Kampus" class="rounded-3xl shadow-2xl w-full h-80 object-cover border border-white/10">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&q=80&w=500" alt="Praktik Lab" class="rounded-3xl shadow-2xl w-full h-80 object-cover border border-white/10 mt-8">
                </div>
                <div class="space-y-6">
                    <span class="text-brand-400 font-extrabold text-xs uppercase tracking-widest bg-brand-500/10 px-4 py-2 rounded-xl border border-brand-500/20">Tentang Kami</span>
                    <h2 class="font-heading font-black text-3xl sm:text-5xl text-white leading-tight">Membentuk Karakter Pemimpin Digital yang Bertaqwa</h2>
                    <p class="text-slate-400 leading-relaxed text-base">
                        Bintang Bangsa mengombinasikan pendidikan vokasi praktis, teknologi mutakhir, dan penguatan nilai-nilai keagamaan. Setiap siswa dididik langsung oleh profesional dari industri nasional dan global.
                    </p>

                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <div class="bg-white/5 p-5 rounded-2xl border border-white/10">
                            <h4 class="font-heading font-bold text-white text-lg mb-1"><i class="fas fa-lightbulb text-brand-400 mr-2"></i> Inovasi Tanpa Batas</h4>
                            <p class="text-xs text-slate-400">Pembelajaran berbasis riset, coding, AI, dan creative media.</p>
                        </div>
                        <div class="bg-white/5 p-5 rounded-2xl border border-white/10">
                            <h4 class="font-heading font-bold text-white text-lg mb-1"><i class="fas fa-shield-alt text-brand-400 mr-2"></i> Akhlak Mulia</h4>
                            <p class="text-xs text-slate-400">Program kedisiplinan, karakter kepemimpinan, dan tahfidz Al-Qur'an.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM KEAHLIAN / JURUSAN -->
    <section id="program" class="py-24 bg-slate-950 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-brand-400 font-extrabold text-xs uppercase tracking-widest bg-brand-500/10 px-4 py-2 rounded-xl border border-brand-500/20">Program Keahlian</span>
                <h2 class="font-heading font-black text-3xl sm:text-5xl text-white">Jurusan Berstandar Industri Global</h2>
                <p class="text-slate-400 text-base">Kurikulum dikembangkan bersama perusahaan teknologi terkemuka untuk memastikan kesiapan kerja.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="glass-card-dark p-8 rounded-3xl border border-white/10 hover:border-brand-500/50 hover:-translate-y-2 transition duration-500 space-y-6 group">
                    <div class="w-16 h-16 bg-gradient-to-tr from-brand-600 to-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-brand-500/30">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-brand-400 transition">Software Engineering</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Menguasai pemograman Web Fullstack, Mobile App Development (Flutter/React Native), Cloud & Dasar Artificial Intelligence.</p>
                    <div class="pt-4 border-t border-white/10 flex justify-between items-center text-xs text-slate-400 font-bold">
                        <span><i class="fas fa-check-circle text-emerald-400 mr-1"></i> Sertifikasi Internasional</span>
                        <a href="ppdb.php" class="text-brand-400 hover:underline">Pilih <i class="fas fa-chevron-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="glass-card-dark p-8 rounded-3xl border border-white/10 hover:border-brand-500/50 hover:-translate-y-2 transition duration-500 space-y-6 group">
                    <div class="w-16 h-16 bg-gradient-to-tr from-purple-600 to-accent-500 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-purple-500/30">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-brand-400 transition">Digital Media & DKV</h3>
                    <p class="text-slate-600 text-sm leading-relaxed text-slate-400">Desain Komunikasi Visual, Animasi 3D, Production House, Videografi Sinematik, dan Editing Konten Kreatif.</p>
                    <div class="pt-4 border-t border-white/10 flex justify-between items-center text-xs text-slate-400 font-bold">
                        <span><i class="fas fa-check-circle text-emerald-400 mr-1"></i> Studio Apple Mac</span>
                        <a href="ppdb.php" class="text-brand-400 hover:underline">Pilih <i class="fas fa-chevron-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="glass-card-dark p-8 rounded-3xl border border-white/10 hover:border-brand-500/50 hover:-translate-y-2 transition duration-500 space-y-6 group">
                    <div class="w-16 h-16 bg-gradient-to-tr from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-emerald-500/30">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-brand-400 transition">Digital Business & E-Com</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Strategi Pemasaran Digital, E-Commerce Management, Analisis Data Bisnis, dan Program Incubation Startup.</p>
                    <div class="pt-4 border-t border-white/10 flex justify-between items-center text-xs text-slate-400 font-bold">
                        <span><i class="fas fa-check-circle text-emerald-400 mr-1"></i> Inkubator Modal Usaha</span>
                        <a href="ppdb.php" class="text-brand-400 hover:underline">Pilih <i class="fas fa-chevron-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KALKULATOR BEASISWA INTERAKTIF -->
    <section id="kalkulator" class="py-24 bg-slate-900 border-t border-white/5 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card-dark p-8 sm:p-12 rounded-3xl border border-brand-500/30 shadow-2xl relative overflow-hidden">
                <div class="text-center max-w-2xl mx-auto mb-10 space-y-3">
                    <span class="text-emerald-400 font-extrabold text-xs uppercase tracking-widest bg-emerald-500/10 px-4 py-1.5 rounded-full border border-emerald-500/20">Simulasi Interaktif</span>
                    <h2 class="font-heading font-black text-3xl sm:text-4xl text-white">Cek Potongan Beasiswa SPP Kamu!</h2>
                    <p class="text-slate-400 text-sm">Pilih kriteria prestasi Anda di bawah ini untuk melihat estimasi potongan biaya pendidikan.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-4">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300">Jalur Prestasi / Keahlian Anda:</label>
                        <select id="jalur-beasiswa" class="w-full bg-slate-950 border border-white/20 rounded-2xl p-4 text-white font-semibold focus:border-brand-500 outline-none">
                            <option value="0">Reguler (Tanpa Beasiswa Khusus)</option>
                            <option value="50">Peringkat 1-3 Paralel Sekolah (Diskon 50%)</option>
                            <option value="100">Tahfidz Al-Qur'an > 5 Juz (Beasiswa 100%)</option>
                            <option value="30">Juara Lomba Kejuaraan Kota/Provinsi (Diskon 30%)</option>
                        </select>

                        <div class="p-4 bg-white/5 rounded-2xl border border-white/10 space-y-2">
                            <div class="text-xs text-slate-400">Biaya Normal SPP per Bulan:</div>
                            <div class="text-lg font-bold text-white">Rp 1.000.000 / bulan</div>
                        </div>
                    </div>

                    <!-- Output Kalkulator -->
                    <div class="bg-gradient-to-br from-brand-900/60 to-indigo-950/60 p-8 rounded-2xl border border-brand-500/40 text-center space-y-4">
                        <div class="text-xs font-bold uppercase tracking-widest text-slate-300">Estimasi SPP Setelah Beasiswa:</div>
                        <div id="hasil-spp" class="font-heading font-black text-4xl text-emerald-400">Rp 1.000.000</div>
                        <div class="text-xs text-slate-400" id="ket-potongan">Pilih jalur prestasi untuk mendapatkan diskon!</div>
                        <a href="ppdb.php" class="inline-block bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs px-6 py-3 rounded-xl transition">
                            Klaim Beasiswa Sekarang <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FASILITAS KAMPUS -->
    <section id="fasilitas" class="py-24 bg-slate-950 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-brand-400 font-extrabold text-xs uppercase tracking-widest bg-brand-500/10 px-4 py-2 rounded-xl border border-brand-500/20">Fasilitas</span>
                <h2 class="font-heading font-black text-3xl sm:text-5xl text-white">Sarana & Prasarana Modern</h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="glass-card-dark p-6 rounded-3xl border border-white/10 text-center space-y-4">
                    <div class="w-16 h-16 bg-brand-500/20 text-brand-400 rounded-2xl mx-auto flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="font-heading font-bold text-white text-lg">Apple Mac Studio Lab</h3>
                    <p class="text-xs text-slate-400">Komputer spesifikasi tinggi untuk editing dan pemrograman skala besar.</p>
                </div>
                <div class="glass-card-dark p-6 rounded-3xl border border-white/10 text-center space-y-4">
                    <div class="w-16 h-16 bg-brand-500/20 text-brand-400 rounded-2xl mx-auto flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3 class="font-heading font-bold text-white text-lg">Wi-Fi 6 High Speed</h3>
                    <p class="text-xs text-slate-400">Jaringan internet fiber optic berkecepatan tinggi di seluruh area sekolah.</p>
                </div>
                <div class="glass-card-dark p-6 rounded-3xl border border-white/10 text-center space-y-4">
                    <div class="w-16 h-16 bg-brand-500/20 text-brand-400 rounded-2xl mx-auto flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-volleyball-ball"></i>
                    </div>
                    <h3 class="font-heading font-bold text-white text-lg">GOR Indoor Serbaguna</h3>
                    <p class="text-xs text-slate-400">Lapangan futsal, basket, badminton indoor dengan standar kompetisi.</p>
                </div>
                <div class="glass-card-dark p-6 rounded-3xl border border-white/10 text-center space-y-4">
                    <div class="w-16 h-16 bg-brand-500/20 text-brand-400 rounded-2xl mx-auto flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h3 class="font-heading font-bold text-white text-lg">Masjid Islamic Center</h3>
                    <p class="text-xs text-slate-400">Pusat ibadah dan kajian keagamaan yang nyaman dan megah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI -->
    <section id="testimoni" class="py-24 bg-slate-900 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-brand-400 font-extrabold text-xs uppercase tracking-widest bg-brand-500/10 px-4 py-2 rounded-xl border border-brand-500/20">Testimoni</span>
                <h2 class="font-heading font-black text-3xl sm:text-5xl text-white">Apa Kata Mereka?</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card-dark p-8 rounded-3xl border border-white/10 space-y-4">
                    <div class="text-amber-400 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed italic">"Lingkungan sekolahnya luar biasa futuristik. Baru kelas 11 saya sudah bisa bikin aplikasi startup sendiri dan punya portofolio keren!"</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=150" alt="Siswa" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-white text-sm">Fikri Ramadhan</div>
                            <div class="text-xs text-slate-400">Siswa Software Engineering</div>
                        </div>
                    </div>
                </div>

                <div class="glass-card-dark p-8 rounded-3xl border border-white/10 space-y-4">
                    <div class="text-amber-400 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed italic">"Sebagai orang tua, saya sangat tenang karena Bintang Bangsa tidak hanya mengajarkan skill digital modern, tapi juga membina akhlak dan sholat lima waktu secara disiplin."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=150" alt="Orang Tua" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-white text-sm">Ibu Ratna Sarumpaet</div>
                            <div class="text-xs text-slate-400">Orang Tua Siswa</div>
                        </div>
                    </div>
                </div>

                <div class="glass-card-dark p-8 rounded-3xl border border-white/10 space-y-4">
                    <div class="text-amber-400 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed italic">"Fasilitas studio videografinya setara studio profesional. Begitu lulus langsung terserap kerja di agency digital marketing ternama."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=150" alt="Alumni" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-white text-sm">Nadia Safitri</div>
                            <div class="text-xs text-slate-400">Alumni DKV</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Kalkulator Sederhana -->
    <script>
        const selectJalur = document.getElementById('jalur-beasiswa');
        const outputHasil = document.getElementById('hasil-spp');
        const ketPotongan = document.getElementById('ket-potongan');

        if(selectJalur) {
            selectJalur.addEventListener('change', function() {
                const diskon = parseInt(this.value);
                const sppAwal = 1000000;
                const sppAkhir = sppAwal - (sppAwal * (diskon / 100));

                outputHasil.innerText = 'Rp ' + sppAkhir.toLocaleString('id-ID');
                
                if(diskon > 0) {
                    ketPotongan.innerText = `Selamat! Anda hemat ${diskon}% dari total biaya SPP bulanan.`;
                } else {
                    ketPotongan.innerText = 'Pilih jalur prestasi untuk mendapatkan diskon!';
                }
            });
        }
    </script>

<?php
include 'assets/footer.php';
?>