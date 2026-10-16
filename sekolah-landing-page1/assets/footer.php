<?php
// assets/footer.php
?>
    <!-- FOOTER -->
    <footer class="bg-slate-950 text-slate-400 py-16 border-t border-white/10 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="space-y-4 md:col-span-1">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-tr from-brand-600 to-accent-500 rounded-xl flex items-center justify-center text-white font-heading font-black text-lg shadow-lg">
                            BB
                        </div>
                        <span class="font-heading font-black text-lg text-white">BINTANG BANGSA</span>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-400">
                        Lembaga pendidikan vokasi dan umum modern yang berkomitmen melahirkan lulusan berdaya saing internasional.
                    </p>
                </div>

                <div>
                    <h4 class="font-heading font-bold text-white text-sm uppercase tracking-wider mb-4">Navigasi Utama</h4>
                    <ul class="space-y-2.5 text-xs font-semibold">
                        <li><a href="index.php#beranda" class="hover:text-brand-400 transition">Beranda</a></li>
                        <li><a href="index.php#tentang" class="hover:text-brand-400 transition">Tentang Kami</a></li>
                        <li><a href="index.php#program" class="hover:text-brand-400 transition">Program Jurusan</a></li>
                        <li><a href="ppdb.php" class="hover:text-brand-400 transition">Formulir PPDB</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading font-bold text-white text-sm uppercase tracking-wider mb-4">Program Keahlian</h4>
                    <ul class="space-y-2.5 text-xs font-semibold">
                        <li><a href="index.php#program" class="hover:text-brand-400 transition">Software Engineering</a></li>
                        <li><a href="index.php#program" class="hover:text-brand-400 transition">Digital Media & DKV</a></li>
                        <li><a href="index.php#program" class="hover:text-brand-400 transition">Digital Business</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading font-bold text-white text-sm uppercase tracking-wider mb-4">Kontak Resmi</h4>
                    <ul class="space-y-3 text-xs font-medium">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-map-marker-alt text-brand-400 mt-0.5"></i>
                            <span>Jl. Inovasi Teknologi No. 88, Jakarta Selatan</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone-alt text-brand-400"></i>
                            <span>(021) 8899-0011</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-white/5 text-center text-xs text-slate-500 font-semibold flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $nama_sekolah ?? 'Sekolah'; ?>. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-slate-300">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-slate-300">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Mobile Menu Toggle -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if(menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>