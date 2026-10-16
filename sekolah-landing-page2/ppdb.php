<?php
// ppdb.php - Halaman Khusus Pendaftaran PPDB Online
$nama_sekolah = "SMA/SMK Cahaya Bangsa";
$tahun_ajaran = "2026/2027";

// Memanggil Header dari folder assets
include 'assets/header.php';
?>

    <!-- HERO / HEADER SECTION PPDB -->
    <section class="bg-gradient-to-br from-emerald-900 to-zinc-900 text-white py-16 px-4">
        <div class="max-w-4xl mx-auto text-center space-y-4">
            <span class="bg-primary-600 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider">
                Pendaftaran Siswa Baru
            </span>
            <h1 class="font-heading font-extrabold text-3xl sm:text-5xl">Formulir PPDB Online <?php echo $tahun_ajaran; ?></h1>
            <p class="text-zinc-300 text-sm sm:text-base max-w-2xl mx-auto">
                Silakan isi data diri calon siswa dengan benar dan lengkap. Tim panitia PPDB <?php echo $nama_sekolah; ?> akan segera memverifikasi dan menghubungi Anda melalui WhatsApp.
            </p>
        </div>
    </section>

    <!-- FORMULIR PPDB SECTION -->
    <section class="py-16 bg-zinc-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white text-zinc-800 p-8 sm:p-12 rounded-3xl shadow-xl border border-zinc-200">
                <form action="process-ppdb.php" method="POST" class="space-y-6">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-zinc-700 mb-2">Nama Lengkap Siswa *</label>
                            <input type="text" name="nama_lengkap" required class="w-full bg-zinc-50 border border-zinc-200 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 font-medium" placeholder="Contoh: Muhammad Rizki">
                        </div>
                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-zinc-700 mb-2">Asal Sekolah (SMP/MTs) *</label>
                            <input type="text" name="asal_sekolah" required class="w-full bg-zinc-50 border border-zinc-200 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 font-medium" placeholder="Contoh: SMPN 1 Jakarta">
                        </div>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-zinc-700 mb-2">Nomor WhatsApp Aktif *</label>
                            <input type="tel" name="no_whatsapp" required class="w-full bg-zinc-50 border border-zinc-200 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 font-medium" placeholder="Contoh: 081234567890">
                        </div>
                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-zinc-700 mb-2">Pilihan Jurusan *</label>
                            <select name="jurusan" required class="w-full bg-zinc-50 border border-zinc-200 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 font-medium">
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="Software Engineering">Software Engineering (RPL)</option>
                                <option value="Multimedia & DKV">Multimedia & DKV</option>
                                <option value="Digital Business">Digital Business</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-zinc-700 mb-2">Alamat Lengkap Domisili *</label>
                        <textarea name="alamat" rows="3" required class="w-full bg-zinc-50 border border-zinc-200 rounded-2xl px-4 py-3.5 text-sm focus:outline-none focus:border-primary-600 font-medium" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota"></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-4 rounded-2xl shadow-xl shadow-primary-600/30 transition text-center text-base">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pendaftaran PPDB Sekarang
                        </button>
                    </div>

                    <p class="text-center text-xs text-zinc-500 pt-2">
                        <i class="fas fa-lock mr-1 text-primary-600"></i> Data Anda dijamin kerahasiaannya dan aman.
                    </p>
                </form>
            </div>

            <div class="text-center mt-8">
                <a href="index.php" class="text-sm font-bold text-primary-600 hover:underline">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali ke Beranda Utama
                </a>
            </div>
        </div>
    </section>

<?php
// Memanggil Footer dari folder assets
include 'assets/footer.php';
?>