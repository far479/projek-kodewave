<?php
// index.php - Landing Page Lengkap (Fasilitas, Testimoni, & PPDB)
$nama_sekolah = "SMA/SMK Cahaya Bangsa";
$tahun_ajaran = "2026/2027";

// Memanggil Header dari folder assets
include 'assets/header.php';

?>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative overflow-hidden pt-12 pb-24 lg:pt-20 lg:pb-32 bg-gradient-to-br from-emerald-50/60 via-white to-zinc-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-primary-100/80 text-primary-800 px-4 py-2 rounded-2xl text-xs font-bold uppercase tracking-wider border border-primary-200">
                        <span class="w-2 h-2 rounded-full bg-primary-600 animate-ping"></span> Pendaftaran Tahun Ajaran <?php echo $tahun_ajaran; ?> Dibuka
                    </div>
                    <h1 class="font-heading font-extrabold text-4xl sm:text-6xl text-zinc-900 tracking-tight leading-[1.1]">
                        Pendidikan Unggul Untuk Masa Depan <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-emerald-500">Tanpa Batas.</span>
                    </h1>
                    <p class="text-zinc-600 text-lg max-w-2xl mx-auto lg:mx-0 font-medium">
                        Mewujudkan generasi pemimpin masa depan yang berakhlak mulia, cerdas secara intelektual, dan siap bersaing di era digital global.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="ppdb.php" class="w-full sm:w-auto bg-primary-600 hover:bg-primary-700 text-white font-bold px-8 py-4 rounded-2xl shadow-xl shadow-primary-600/30 transition text-center flex items-center justify-center gap-3">
                            <span>Formulir PPDB Online</span>
                            <i class="fas fa-chevron-right text-xs"></i>
                        </a>
                        <a href="#program" class="w-full sm:w-auto bg-white hover:bg-zinc-100 text-zinc-700 font-bold px-8 py-4 rounded-2xl border border-zinc-200 transition text-center shadow-sm">
                            Lihat Program Jurusan
                        </a>
                    </div>
                    
                    <!-- Statistik -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-zinc-200/80 text-center lg:text-left">
                        <div>
                            <div class="font-heading font-extrabold text-3xl text-zinc-900">100%</div>
                            <div class="text-xs text-zinc-500 font-semibold mt-1">Lulusan Tersalurkan</div>
                        </div>
                        <div>
                            <div class="font-heading font-extrabold text-3xl text-zinc-900">30+</div>
                            <div class="text-xs text-zinc-500 font-semibold mt-1">Ekstrakurikuler</div>
                        </div>
                        <div>
                            <div class="font-heading font-extrabold text-3xl text-zinc-900">A</div>
                            <div class="text-xs text-zinc-500 font-semibold mt-1">Akreditasi Unggul</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-primary-500 to-accent-500 rounded-3xl filter blur-2xl opacity-20 animate-pulse"></div>
                        <div class="relative bg-zinc-900 p-4 rounded-3xl shadow-2xl border border-zinc-800">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&q=80&w=800" alt="Siswa Sekolah" class="rounded-2xl object-cover w-full h-[420px] opacity-90">
                            <div class="absolute inset-x-8 bottom-8 bg-white/15 backdrop-blur-md p-5 rounded-2xl border border-white/20 text-white flex items-center gap-4">
                                <div class="w-12 h-12 bg-accent-500 rounded-xl flex items-center justify-center text-xl font-bold">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <div class="font-heading font-bold text-sm">Sekolah Rujukan Nasional</div>
                                    <div class="text-xs text-zinc-200">Kurikulum Merdeka & Berbasis Teknologi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG KAMI -->
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <span class="bg-primary-50 text-primary-700 font-bold text-xs uppercase px-3.5 py-1.5 rounded-xl border border-primary-100">Profil Sekolah</span>
                    <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-zinc-900 tracking-tight">Lingkungan Belajar Inspiratif Untuk Mengembangkan Potensi Terbaik Anak</h2>
                    <p class="text-zinc-600 leading-relaxed font-medium">
                        Cahaya Bangsa hadir dengan fasilitas modern, metode pengajaran interaktif berstandar internasional, serta pengawasan karakter secara intensif setiap hari.
                    </p>
                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4 bg-zinc-50 p-4 rounded-2xl border border-zinc-100">
                            <div class="w-10 h-10 rounded-xl bg-primary-100 text-primary-600 flex items-center justify-center font-bold flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-zinc-900 text-sm">Pengajar Profesional & Tersertifikasi</h4>
                                <p class="text-xs text-zinc-500 mt-0.5">Guru-guru pilihan lulusan universitas terkemuka dalam dan luar negeri.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-zinc-50 p-4 rounded-2xl border border-zinc-100">
                            <div class="w-10 h-10 rounded-xl bg-primary-100 text-primary-600 flex items-center justify-center font-bold flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-zinc-900 text-sm">Program Tahfidz & Karakter Islami</h4>
                                <p class="text-xs text-zinc-500 mt-0.5">Membangun kecerdasan spiritual seimbang dengan prestasi akademik.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=500" alt="Kelas" class="rounded-3xl shadow-lg w-full h-72 object-cover">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80&w=500" alt="Diskusi" class="rounded-3xl shadow-lg w-full h-72 object-cover mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM KEAHLIAN / JURUSAN -->
    <section id="program" class="py-24 bg-zinc-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="bg-primary-50 text-primary-700 font-bold text-xs uppercase px-3.5 py-1.5 rounded-xl border border-primary-100">Konsentrasi Keahlian</span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-zinc-900">Pilih Jalur Suksesmu Bersama Kami</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-zinc-200/80 hover:shadow-xl hover:-translate-y-1 transition duration-300 space-y-4">
                    <div class="w-14 h-14 bg-primary-50 text-primary-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-zinc-900">Software Engineering (RPL)</h3>
                    <p class="text-zinc-600 text-sm leading-relaxed">Belajar membuat aplikasi web, mobile, database management, dan dasar kecerdasan buatan.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-zinc-200/80 hover:shadow-xl hover:-translate-y-1 transition duration-300 space-y-4">
                    <div class="w-14 h-14 bg-primary-50 text-primary-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-zinc-900">Multimedia & DKV</h3>
                    <p class="text-zinc-600 text-sm leading-relaxed">Fokus pada desain grafis, animasi 3D, videografi sinematik, dan editing konten digital profesional.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-zinc-200/80 hover:shadow-xl hover:-translate-y-1 transition duration-300 space-y-4">
                    <div class="w-14 h-14 bg-primary-50 text-primary-600 rounded-2xl flex items-center justify-center text-2xl font-bold">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-zinc-900">Digital Business</h3>
                    <p class="text-zinc-600 text-sm leading-relaxed">Menguasai strategi e-commerce, digital marketing, manajemen keuangan modern, dan startup.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FASILITAS KAMPUS -->
    <section id="fasilitas" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="bg-primary-50 text-primary-700 font-bold text-xs uppercase px-3.5 py-1.5 rounded-xl border border-primary-100">Fasilitas Unggulan</span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-zinc-900">Sarana & Prasarana Modern</h2>
                <p class="text-zinc-600 text-sm">Menunjang kenyamanan serta efektivitas proses belajar mengajar harian.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-zinc-50 p-6 rounded-3xl border border-zinc-200 text-center space-y-4 hover:border-primary-500 transition">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="font-heading font-bold text-zinc-900 text-lg">Lab Komputer iMac</h3>
                    <p class="text-xs text-zinc-500">Perangkat spesifikasi tinggi untuk praktik pemrograman dan desain grafis profesional.</p>
                </div>
                <div class="bg-zinc-50 p-6 rounded-3xl border border-zinc-200 text-center space-y-4 hover:border-primary-500 transition">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="font-heading font-bold text-zinc-900 text-lg">Perpustakaan Digital</h3>
                    <p class="text-xs text-zinc-500">Akses ribuan buku fisik dan e-book perpustakaan secara online maupun offline.</p>
                </div>
                <div class="bg-zinc-50 p-6 rounded-3xl border border-zinc-200 text-center space-y-4 hover:border-primary-500 transition">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3 class="font-heading font-bold text-zinc-900 text-lg">Area Olahraga Indoor</h3>
                    <p class="text-xs text-zinc-500">Lapangan basket, badminton, dan futsal terpadu untuk menyalurkan bakat minat.</p>
                </div>
                <div class="bg-zinc-50 p-6 rounded-3xl border border-zinc-200 text-center space-y-4 hover:border-primary-500 transition">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-2xl mx-auto flex items-center justify-center text-2xl">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h3 class="font-heading font-bold text-zinc-900 text-lg">Masjid Kampus Luas</h3>
                    <p class="text-xs text-zinc-500">Pusat kegiatan pembinaan keagamaan dan sholat berjamaah harian siswa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI SISWA & ORANG TUA -->
    <section id="testimoni" class="py-24 bg-zinc-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="bg-primary-50 text-primary-700 font-bold text-xs uppercase px-3.5 py-1.5 rounded-xl border border-primary-100">Testimoni</span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-zinc-900">Kata Mereka Tentang Cahaya Bangsa</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-zinc-200 space-y-4">
                    <div class="text-amber-500 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-zinc-600 text-sm leading-relaxed italic">"Lingkungan belajarnya sangat nyaman dan gurunya asyik-asyik. Di jurusan RPL saya jadi paham coding dan langsung diterima magang di software house."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-zinc-100">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150" alt="Siswa" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-zinc-900 text-sm">Dimas Pratama</div>
                            <div class="text-xs text-zinc-500">Alumni RPL</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-zinc-200 space-y-4">
                    <div class="text-amber-500 text-sm flex gap-1">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-zinc-600 text-sm leading-relaxed italic">"Sangat tenang menyekolahkan anak di sini karena pembinaan karakternya kuat. Prestasi akademik dan kegiatan ekstrakurikulernya juga sangat seimbang."</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-zinc-100">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=150" alt="Orang Tua" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-heading font-bold text-zinc-900 text-sm">Ibu Siti Aminah</div>
                            <div class="text-xs text-zinc-500">Orang Tua Siswa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
// PASTIKAN BARIS INI ADA DI PALING BAWAH INDEX.PHP
include 'assets/footer.php';
?>