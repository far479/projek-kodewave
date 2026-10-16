<?php
// ppdb.php - Form PPDB Multi-Step Modern
$nama_sekolah = "SMA/SMK Bintang Bangsa";
$tahun_ajaran = "2026/2027";

include 'assets/header.php';
?>

    <!-- HERO HEADER PPDB -->
    <section class="bg-slate-950 py-16 px-4 relative overflow-hidden border-b border-white/5">
        <div class="max-w-4xl mx-auto text-center space-y-4 relative z-10">
            <span class="bg-brand-500/20 text-brand-400 border border-brand-500/30 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider inline-block">
                Portal PPDB Online <?php echo $tahun_ajaran; ?>
            </span>
            <h1 class="font-heading font-black text-3xl sm:text-5xl text-white">Formulir Pendaftaran Siswa Baru</h1>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto">
                Isi data calon siswa di bawah ini. Proses verifikasi instan akan dikirimkan langsung ke nomor WhatsApp Anda.
            </p>
        </div>
    </section>

    <!-- MULTI STEP FORM SECTION -->
    <section class="py-16 bg-slate-900 border-t border-white/5">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card-dark p-8 sm:p-12 rounded-3xl border border-white/10 shadow-2xl">
                
                <form action="process-ppdb.php" method="POST" class="space-y-8">
                    <!-- Step Indicator -->
                    <div class="flex items-center justify-between border-b border-white/10 pb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-brand-600 text-white font-bold flex items-center justify-center text-sm shadow-lg shadow-brand-600/40">1</div>
                            <span class="font-heading font-bold text-white text-sm">Data Calon Siswa</span>
                        </div>
                        <div class="h-px bg-white/20 flex-1 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-slate-800 text-slate-400 border border-white/10 font-bold flex items-center justify-center text-sm">2</div>
                            <span class="font-heading font-bold text-slate-400 text-sm">Jurusan & Kontak</span>
                        </div>
                    </div>

                    <!-- Step 1 Inputs -->
                    <div class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">Nama Lengkap Siswa *</label>
                                <input type="text" name="nama_lengkap" required class="w-full bg-slate-950 border border-white/15 rounded-2xl px-4 py-3.5 text-sm text-white focus:outline-none focus:border-brand-500 font-medium transition" placeholder="Contoh: Muhammad Rizki">
                            </div>
                            <div>
                                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">Asal Sekolah (SMP/MTs) *</label>
                                <input type="text" name="asal_sekolah" required class="w-full bg-slate-950 border border-white/15 rounded-2xl px-4 py-3.5 text-sm text-white focus:outline-none focus:border-brand-500 font-medium transition" placeholder="Contoh: SMPN 1 Jakarta">
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">Nomor WhatsApp Aktif *</label>
                                <input type="tel" name="no_whatsapp" required class="w-full bg-slate-950 border border-white/15 rounded-2xl px-4 py-3.5 text-sm text-white focus:outline-none focus:border-brand-500 font-medium transition" placeholder="Contoh: 081234567890">
                            </div>
                            <div>
                                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">Pilihan Jurusan Utama *</label>
                                <select name="jurusan" required class="w-full bg-slate-950 border border-white/15 rounded-2xl px-4 py-3.5 text-sm text-white focus:outline-none focus:border-brand-500 font-medium transition">
                                    <option value="">-- Pilih Jurusan --</option>
                                    <option value="Software Engineering">Software Engineering (RPL)</option>
                                    <option value="Digital Media & DKV">Digital Media & DKV</option>
                                    <option value="Digital Business">Digital Business & E-Commerce</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">Alamat Lengkap Domisili *</label>
                            <textarea name="alamat" rows="3" required class="w-full bg-slate-950 border border-white/15 rounded-2xl px-4 py-3.5 text-sm text-white focus:outline-none focus:border-brand-500 font-medium transition" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota/Kabupaten"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full bg-gradient-to-r from-brand-600 via-indigo-600 to-purple-600 hover:opacity-90 text-white font-extrabold py-4 rounded-2xl shadow-xl shadow-brand-600/30 transition text-center text-base flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i>
                            <span>Kirim & Konfirmasi Pendaftaran</span>
                        </button>
                    </div>

                    <p class="text-center text-xs text-slate-400">
                        <i class="fas fa-lock text-emerald-400 mr-1"></i> Data Anda tersimpan aman dan terenkripsi.
                    </p>
                </form>
            </div>

            <div class="text-center mt-8">
                <a href="index.php" class="text-sm font-bold text-brand-400 hover:underline inline-flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Kembali ke Beranda Utama
                </a>
            </div>
        </div>
    </section>

<?php
include 'assets/footer.php';
?>