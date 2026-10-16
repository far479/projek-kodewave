<?php
// assets/footer.php
?>
    <!-- FOOTER -->
    <footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="space-y-4 md:col-span-1">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-primary-600 rounded-xl flex items-center justify-center text-white font-heading font-bold text-lg">
                            BB
                        </div>
                        <span class="font-heading font-bold text-lg text-white">BINTANG BANGSA</span>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-400">
                        Lembaga pendidikan modern yang berkomitmen melahirkan lulusan berdaya saing global, cerdas, dan berkarakter kuat.
                    </p>
                </div>
                <div>
                    <h4 class="font-heading font-bold text-white text-sm uppercase tracking-wider mb-4">Navigasi Utama</h4>
                    <ul class="space-y-2 text-xs font-medium">
                        <li><a href="index.php#beranda" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="index.php#tentang" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="index.php#program" class="hover:text-white transition">Program Jurusan</a></li>
                        <li><a href="ppdb.php" class="hover:text-white transition">Pendaftaran PPDB</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-heading font-bold text-white text-sm uppercase tracking-wider mb-4">Program Keahlian</h4>
                    <ul class="space-y-2 text-xs font-medium">
                        <li><a href="index.php#program" class="hover:text-white transition">Software Engineering</a></li>
                        <li><a href="index.php#program" class="hover:text-white transition">Multimedia & DKV</a></li>
                        <li><a href="index.php#program" class="hover:text-white transition">Digital Business</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-heading font-bold text-white text-sm uppercase tracking-wider mb-4">Kontak Resmi</h4>
                    <ul class="space-y-3 text-xs">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-map-marker-alt text-primary-400 mt-0.5"></i>
                            <span>Jl. Inovasi Teknologi No. 10, Jakarta Selatan</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone-alt text-primary-400"></i>
                            <span>(021) 8899-0011</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-900 text-center text-xs text-slate-600">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $nama_sekolah ?? 'Sekolah'; ?>. Seluruh Hak Cipta Dilindungi.</p>
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