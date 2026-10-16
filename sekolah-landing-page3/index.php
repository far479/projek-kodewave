<?php
// index.php - Desain Baru Gaya Modern Indigo/Violet
$nama_sekolah = "SMA/SMK Bintang Bangsa";
$tahun_ajaran = "2026/2027";

include 'assets/header.php';
?>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative overflow-hidden pt-16 pb-28 lg:pt-24 lg:pb-36 bg-gradient-to-b from-primary-50/50 via-white to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-primary-100 text-primary-800 px-4 py-2 rounded-xl text-xs font-bold uppercase tracking-wider border border-primary-200">
                        <i class="fas fa-star text-amber-500"></i> Sekolah Penggerak Berprestasi Nasional
                    </div>
                    <h1 class="font-heading font-bold text-4xl sm:text-6xl text-slate-900 tracking-tight leading-[1.1]">
                        Pusat Talenta Digital & <span class="text-primary-600">Pemimpin Masa Depan.</span>
                    </h1>
                    <p class="text-slate-600 text-lg max-w-2xl mx-auto lg:mx-0 font-medium">
                        Menggabungkan kurikulum nasional berkualitas tinggi dengan ekosistem teknologi modern, kedisiplinan, dan pembentukan karakter mulia.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="ppdb.php" class="w-full sm:w-auto bg-primary-600 hover:bg-primary-700 text-white font-bold px-8 py-4 rounded-2xl shadow-xl shadow-primary-600/30 transition text-center flex items-center justify-center gap-3">
                            <span>Daftar PPDB <?php echo $tahun_ajaran; ?></span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                        <a href="#program" class="w-full sm:w-auto bg-white hover:bg-slate-100 text-slate-700 font-bold px-8 py-4 rounded-2xl border border-slate-200 transition text-center shadow-sm">
                            Jelajahi Jurusan
                        </a>
                    </div>
                    
                    <!-- Statistik Bar -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-100 text-center lg:text-left">
                        <div>
                            <div class="font-heading font-bold text-3xl text-slate-900">98%</div>
                            <div class="text-xs text-slate-500 font-semibold mt-1">Penempatan Kerja</div>
                        </div>
                        <div>
                            <div class="font-heading font-bold text-3xl text-slate-900">35+</div>
                            <div class="text-xs text-slate-500 font-semibold mt-1">Ekstrakurikuler</div>
                        </div>
                        <div>
                            <div class="font-heading font-bold text-3xl text-slate-900">15+</div>
                            <div class="text-xs text-slate-500 font-semibold mt-1">Mitra Industri</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <div class="absolute -top-4 -left-4 w-72 h-72 bg-primary-300 rounded-full filter blur-3xl opacity-40 animate-pulse"></div>
                        <div class="relative bg-white p-4 rounded-3xl shadow-2xl border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Siswa Sekolah" class="rounded-2xl object-cover w-full h-[400px]">
                            <div class="absolute bottom-8 left-8 right-8 bg-slate-900/90 backdrop-blur-md p-4 rounded-2xl text-white flex items-center gap-4 border border-slate-800">
                                <div class="w-10 h-10 bg-primary-600 rounded-xl flex items-center justify-center font-bold">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <div class="font-heading font-bold text-sm">Pendaftaran Gelombang 1</div>
                                    <div class="text-xs text-slate-300">Potongan Biaya Gedung Tersedia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG KAMI -->
    <section id="tentang" class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&q=80&w=500" alt="Gedung Sekolah" class="rounded-3xl shadow-lg w-full h-72 object-cover">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=500" alt="Diskusi Siswa" class="rounded-3xl shadow-lg w-full h-72 object-cover mt-8">
                </div>
                <div class="space-y-6">
                    <span class="text-primary-600 font-bold text-xs uppercase tracking-wider bg-primary-50 px-3.5 py-1.5 rounded-xl border border-primary-100">Tentang Kami</span>
                    <h2 class="font-heading font-bold text-3xl sm:text-4xl text-slate-900">Membentuk Generasi Cerdas, Tangguh, dan Berakhlak</h2>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        Bintang Bangsa berdedikasi menciptakan atmosfer akademik yang kondusif. Kami memadukan kecerdasan intelektual (IQ), emosional (EQ), dan spiritual (SQ) agar setiap siswa siap menghadapi tantangan masa depan.
                    </p>
                    <div class="grid grid-cols-2 gap-4 pt-2">
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="font-heading font-bold text-primary-600 text-lg mb-1">Visi Utama</div>
                            <p class="text-xs text-slate-500">Unggul dalam prestasi, santun dalam pekerti, terdepan dalam teknologi.</p>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="font-heading font-bold text-primary-600 text-lg mb-1">Misi Unggulan</div>
                            <p class="text-xs text-slate-500">Pendidikan berbasis karakter dan pembelajaran berbasis praktik langsung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM KEAHLIAN / JURUSAN -->
    <section id="program" class="py-24 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-primary-600 font-bold text-xs uppercase tracking-wider bg-primary-50 px-3.5 py-1.5 rounded-xl border border-primary-100">Program Keahlian</span>
                <h2 class="font-heading font-bold text-3xl sm:text-4xl text-slate-900">Pilihan Jurusan Favorit</h2>
                <p class="text-slate-600 text-sm">Dirancang selaras dengan kebutuhan industri kreatif dan teknologi masa kini.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition space-y-4">
                    <div class="w-14 h-14 bg-primary-50 text-primary-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-slate-900">Software Engineering (RPL)</h3>
                    <p class="text-slate-600 text-sm">Pengembangan aplikasi web, mobile, database management, dan dasar pemrograman modern.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition space-y-4">
                    <div class="w-14 h-14 bg-primary-50 text-primary-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-slate-900">Multimedia & DKV</h3>
                    <p class="text-slate-600 text-sm">Fokus pada desain grafis, animasi 3D, videografi sinematik, dan content creation profesional.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition space-y-4">
                    <div class="w-14 h-14 bg-primary-50 text-primary-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-slate-900">Digital Business</h3>
                    <p class="text-slate-600 text-sm">Strategi e-commerce, digital marketing, manajemen keuangan, dan inkubator startup siswa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FASILITAS KAMPUS -->
    <section id="fasilitas" class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-primary-600 font-bold text-xs uppercase tracking-wider bg-primary-50 px-3.5 py-1.5 rounded-xl border border-primary-100">Fasilitas Kampus</span>
                <h2 class="font-heading font-bold text-3xl sm:text-4xl text-slate-900">Sarana Penunjang Modern</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 text-center space-y-4">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="font-heading font-bold text-slate-900 text-lg">Lab Komputer Spek Tinggi</h3>
                    <p class="text-xs text-slate-500">Dilengkapi PC/iMac performa tinggi untuk kenyamanan praktik siswa.</p>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 text-center space-y-4">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="font-heading font-bold text-slate-900 text-lg">Perpustakaan Digital</h3>
                    <p class="text-xs text-slate-500">Ribuan referensi buku cetak dan e-book perpustakaan berstandar nasional.</p>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 text-center space-y-4">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                    <h3 class="font-heading font-bold text-slate-900 text-lg">Lapangan Olahraga</h3>
                    <p class="text-xs text-slate-500">Area indoor dan outdoor untuk basket, futsal, serta kegiatan ekstrakurikuler.</p>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 text-center space-y-4">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h3 class="font-heading font-bold text-slate-900 text-lg">Masjid Representatif</h3>
                    <p class="text-xs text-slate-500">Pusat pembinaan rohis, tahfidz, dan kegiatan ibadah harian yang nyaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI -->
    <section id="testimoni" class="py-24 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-primary-600 font-bold text-xs uppercase tracking-wider bg-primary-50 px-3.5 py-1.5 rounded-xl border border-primary-100">Testimoni</span>
                <h2 class="font-heading font-bold text-3xl sm:text-4xl text-slate-900">Kata Alumni & Orang Tua</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                    <div class="text-amber-500 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">"Belajar di Bintang Bangsa benar-benar membuka wawasan saya di dunia IT. Sekarang saya sudah bekerja sebagai junior developer."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=150" alt="Alumni" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-slate-900 text-sm">Fikri Haikal</div>
                            <div class="text-xs text-slate-500">Alumni RPL</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                    <div class="text-amber-500 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">"Sebagai orang tua, saya sangat tenang karena pembinaan akhlak dan kedisiplinan di sekolah ini sangat diutamakan setiap harinya."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=150" alt="Orang Tua" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-slate-900 text-sm">Ibu Rina Lestari</div>
                            <div class="text-xs text-slate-500">Orang Tua Siswa</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 space-y-4">
                    <div class="text-amber-500 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">"Fasilitas studionya lengkap banget! Sangat membantu hobi videografi saya hingga sering juara lomba tingkat provinsi."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=150" alt="Siswa" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-slate-900 text-sm">Aurel Maharani</div>
                            <div class="text-xs text-slate-500">Siswa DKV</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'assets/footer.php';
?>