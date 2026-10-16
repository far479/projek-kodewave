<?php
// assets/header.php
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($nama_sekolah) ? $nama_sekolah : "Sekolah"; ?> - Unggul & Berkarakter</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                        accent: {
                            500: '#f59e0b',
                            600: '#d97706',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-zinc-50 text-zinc-800 font-sans antialiased selection:bg-primary-500 selection:text-white">

    <!-- TOP BAR -->
    <div class="bg-primary-900 text-emerald-100 text-xs sm:text-sm py-2.5 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-6">
                <span><i class="fas fa-phone-alt mr-2 text-accent-500"></i> (021) 7788-9900</span>
                <span><i class="fas fa-envelope mr-2 text-accent-500"></i> pendaftaran@cahayabangsa.sch.id</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="bg-accent-500 text-white text-xs font-bold px-3 py-0.5 rounded-full shadow-sm">
                    ✨ PPDB <?php echo $tahun_ajaran ?? '2026/2027'; ?> Telah Dibuka
                </span>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-zinc-200/60 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-12 h-12 bg-gradient-to-tr from-primary-600 to-primary-400 rounded-2xl flex items-center justify-center text-white font-heading font-extrabold text-xl shadow-lg shadow-primary-500/30 group-hover:scale-105 transition">
                    CB
                </div>
                <div>
                    <span class="font-heading font-extrabold text-lg text-zinc-900 block leading-tight">CAHAYA BANGSA</span>
                    <span class="text-xs text-primary-600 font-bold tracking-wider uppercase">Modern Islamic School</span>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-zinc-600">
                <a href="#beranda" class="hover:text-primary-600 transition">Beranda</a>
                <a href="#tentang" class="hover:text-primary-600 transition">Tentang</a>
                <a href="#program" class="hover:text-primary-600 transition">Jurusan</a>
                <a href="#fasilitas" class="hover:text-primary-600 transition">Fasilitas</a>
                <a href="#testimoni" class="hover:text-primary-600 transition">Testimoni</a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                <a href="#ppdb" class="bg-primary-600 hover:bg-primary-700 text-white font-bold text-sm px-6 py-3 rounded-2xl shadow-xl shadow-primary-600/20 transition transform active:scale-95">
                    Daftar Sekarang <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <button id="menu-btn" class="md:hidden text-zinc-700 focus:outline-none text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-zinc-100 px-6 py-4 space-y-3">
            <a href="#beranda" class="block py-2 text-zinc-600 font-semibold hover:text-primary-600">Beranda</a>
            <a href="#tentang" class="block py-2 text-zinc-600 font-semibold hover:text-primary-600">Tentang</a>
            <a href="#program" class="block py-2 text-zinc-600 font-semibold hover:text-primary-600">Jurusan</a>
            <a href="#fasilitas" class="block py-2 text-zinc-600 font-semibold hover:text-primary-600">Fasilitas</a>
            <a href="#testimoni" class="block py-2 text-zinc-600 font-semibold hover:text-primary-600">Testimoni</a>
            <div class="pt-2">
                <a href="#ppdb" class="block text-center bg-primary-600 text-white font-bold py-3 rounded-xl shadow-md">Daftar Sekarang</a>
            </div>
        </div>
    </header>