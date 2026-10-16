<?php
// assets/header.php
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($nama_sekolah) ? $nama_sekolah : "Sekolah"; ?> - Unggul & Berprestasi</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Plus Jakarta Sans & Space Grotesk -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        heading: ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                        accent: {
                            DEFAULT: '#f43f5e',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased selection:bg-primary-600 selection:text-white">

    <!-- TOP BAR -->
    <div class="bg-slate-900 text-slate-300 text-xs sm:text-sm py-2.5 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-6">
                <span><i class="fas fa-phone-alt mr-2 text-primary-400"></i> (021) 8899-0011</span>
                <span><i class="fas fa-envelope mr-2 text-primary-400"></i> halo@bintangbangsa.sch.id</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="bg-primary-600 text-white text-xs font-bold px-3 py-0.5 rounded-full shadow-sm">
                    🚀 PPDB <?php echo $tahun_ajaran ?? '2026/2027'; ?> Resmi Dibuka
                </span>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-12 h-12 bg-primary-600 rounded-2xl flex items-center justify-center text-white font-heading font-bold text-xl shadow-lg shadow-primary-600/30 group-hover:bg-primary-700 transition">
                    BB
                </div>
                <div>
                    <span class="font-heading font-bold text-lg text-slate-900 block leading-tight">BINTANG BANGSA</span>
                    <span class="text-xs text-primary-600 font-semibold uppercase tracking-wider">High School & Vocational</span>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-slate-600">
                <a href="index.php#beranda" class="hover:text-primary-600 transition">Beranda</a>
                <a href="index.php#tentang" class="hover:text-primary-600 transition">Tentang Kami</a>
                <a href="index.php#program" class="hover:text-primary-600 transition">Jurusan</a>
                <a href="index.php#fasilitas" class="hover:text-primary-600 transition">Fasilitas</a>
                <a href="index.php#testimoni" class="hover:text-primary-600 transition">Testimoni</a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                <a href="ppdb.php" class="bg-slate-900 hover:bg-primary-600 text-white font-bold text-sm px-6 py-3 rounded-xl shadow-lg transition transform active:scale-95">
                    Daftar PPDB <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <button id="menu-btn" class="md:hidden text-slate-800 focus:outline-none text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-200 px-6 py-4 space-y-3 shadow-lg">
            <a href="index.php#beranda" class="block py-2 text-slate-700 font-semibold hover:text-primary-600">Beranda</a>
            <a href="index.php#tentang" class="block py-2 text-slate-700 font-semibold hover:text-primary-600">Tentang Kami</a>
            <a href="index.php#program" class="block py-2 text-slate-700 font-semibold hover:text-primary-600">Jurusan</a>
            <a href="index.php#fasilitas" class="block py-2 text-slate-700 font-semibold hover:text-primary-600">Fasilitas</a>
            <a href="index.php#testimoni" class="block py-2 text-slate-700 font-semibold hover:text-primary-600">Testimoni</a>
            <div class="pt-2">
                <a href="ppdb.php" class="block text-center bg-primary-600 text-white font-bold py-3 rounded-xl shadow-md">Daftar PPDB Sekarang</a>
            </div>
        </div>
    </header>