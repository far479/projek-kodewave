<?php
// ppdb.php - Halaman Formulir Pendaftaran PPDB Online
$nama_sekolah = "SMA/SMK Bintang Bangsa";
$tahun_ajaran = "2026/2027";

// Memanggil Header
include 'assets/header.php';
?>

    <!-- HERO SECTION PPDB -->
    <section class="bg-gradient-to-br from-slate-900 via-primary-950 to-slate-900 text-white py-16 px-4 relative overflow-hidden">
        <div class="max-w-4xl mx-auto text-center space-y-4 relative z-10">
            <span class="bg-primary-600/30 text-primary-300 border border-primary-500/30 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider inline-block">
                Pendaftaran Siswa Baru
            </span>
            <h1 class="font-heading font-bold text-3xl sm:text-5xl tracking-tight">
                Formulir PPDB Online <?php echo $tahun_ajaran; ?>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto font-medium">
                Silakan isi data calon siswa dengan benar. Tim panitia PPDB <?php echo $nama_sekolah; ?> akan memverifikasi data dan menghubungi Anda melalui WhatsApp.
            </p>
        </div>
    </section>

    <!-- FORMULIR SECTION -->
    <section class="py-16 bg-slate-50 border-t border-slate-100">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white text-slate-900 p-8 sm:p-12 rounded-3xl shadow-xl border border-slate-200">
                <form action="process-ppdb.php" method="POST" class="space-y-6">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Nama Lengkap Siswa *</label>
                            <input type="text" name="nama_lengkap" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 focus:bg-white font-medium transition" placeholder="Contoh: Muhammad Rizki">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Asal Sekolah (SMP/MTs) *</label>
                            <input type="text" name="asal_sekolah" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 focus:bg-white font-medium transition" placeholder="Contoh: SMPN 1 Jakarta">
                        </div>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Nomor WhatsApp Aktif *</label>
                            <input type="tel" name="no_whatsapp" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 focus:bg-white font-medium transition" placeholder="Contoh: 081234567890">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Pilihan Jurusan *</label>
                            <select name="jurusan" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 focus:bg-white font-medium transition">
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="Software Engineering">Software Engineering (RPL)</option>
                                <option value="Multimedia & DKV">Multimedia & DKV</option>
                                <option value="Digital Business">Digital Business</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Alamat Lengkap Domisili *</label>
                        <textarea name="alamat" rows="3" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 focus:bg-white font-medium transition" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary-600/30 transition text-center text-base flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i>
                            <span>Kirim Pendaftaran PPDB Sekarang</span>
                        </button>
                    </div>

                    <p class="text-center text-xs text-slate-500 pt-2">
                        <i class="fas fa-lock text-primary-600 mr-1"></i> Data Anda tersimpan secara aman dan terenkripsi.
                    </p>
                </form>
            </div>

            <div class="text-center mt-8">
                <a href="index.php" class="text-sm font-bold text-primary-600 hover:underline inline-flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Kembali ke Beranda Utama
                </a>
            </div>
        </div>
    </section>

<?php
// Memanggil Footer
include 'assets/footer.php';
?>