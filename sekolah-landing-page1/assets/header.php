<?php
// assets/header.php
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($nama_sekolah) ? $nama_sekolah : "Sekolah"; ?> - Future Leaders & Digital Innovation</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts Premium: Outfit & Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#1e1b4b',
                        },
                        accent: {
                            500: '#f43f5e',
                            600: '#e11d48',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .glass-card-dark {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #9333ea 50%, #f43f5e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased selection:bg-brand-500 selection:text-white min-h-screen flex flex-col">

    <!-- TOP ANNOUNCEMENT BAR -->
    <div class="bg-gradient-to-r from-brand-900 via-indigo-950 to-slate-950 text-slate-300 text-xs sm:text-sm py-2.5 px-4 border-b border-white/5 relative z-50">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-6">
                <span class="inline-flex items-center gap-2"><i class="fas fa-headset text-brand-400"></i> Hotline: (021) 8899-0011</span>
                <span class="hidden md:inline-flex items-center gap-2"><i class="fas fa-envelope text-brand-400"></i> pendaftaran@bintangbangsa.sch.id</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-[10px] sm:text-xs font-bold px-3 py-1 rounded-full shadow-lg shadow-emerald-500/20 uppercase tracking-wider">
                    ⚡ Gelombang 1 Dibuka (Early Bird Promo)
                </span>
            </div>
        </div>
    </div>

    <!-- NAVBAR GLASSMORPHISM -->
    <header class="sticky top-0 z-40 bg-slate-950/80 backdrop-blur-2xl border-b border-white/10 shadow-2xl shadow-black/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3.5 group">
                <div class="w-12 h-12 bg-gradient-to-tr from-brand-600 via-indigo-500 to-accent-500 rounded-2xl flex items-center justify-center text-white font-heading font-black text-2xl shadow-xl shadow-brand-500/30 group-hover:scale-105 transition duration-300">
                    BB
                </div>
                <div>
                    <span class="font-heading font-black text-xl tracking-tight text-white block leading-tight">BINTANG BANGSA</span>
                    <span class="text-[10px] text-brand-400 font-extrabold tracking-widest uppercase">Academy & High School</span>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-slate-300">
                <a href="index.php#beranda" class="hover:text-brand-400 transition">Beranda</a>
                <a href="index.php#tentang" class="hover:text-brand-400 transition">Tentang Kami</a>
                <a href="index.php#program" class="hover:text-brand-400 transition">Program Jurusan</a>
                <a href="index.php#fasilitas" class="hover:text-brand-400 transition">Fasilitas Kampus</a>
                <a href="index.php#kalkulator" class="hover:text-brand-400 transition">Cek Beasiswa</a>
                <a href="index.php#testimoni" class="hover:text-brand-400 transition">Testimoni</a>
            </nav>

            <div class="hidden md:flex items-center gap-4">
                <a href="ppdb.php" class="relative group overflow-hidden rounded-2xl p-px font-bold text-sm">
                    <span class="absolute inset-0 bg-gradient-to-r from-brand-500 via-purple-500 to-accent-500 transition duration-300 group-hover:opacity-90"></span>
                    <span class="relative block px-6 py-3 rounded-[15px] bg-slate-950 text-white transition duration-300 group-hover:bg-opacity-0">
                        Pendaftaran PPDB <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </span>
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button id="menu-btn" class="md:hidden text-white focus:outline-none text-2xl">
                <i class="fas fa-bars-staggered"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-b border-white/10 px-6 py-6 space-y-4">
            <a href="index.php#beranda" class="block text-slate-200 font-semibold hover:text-brand-400">Beranda</a>
            <a href="index.php#tentang" class="block text-slate-200 font-semibold hover:text-brand-400">Tentang Kami</a>
            <a href="index.php#program" class="block text-slate-200 font-semibold hover:text-brand-400">Program Jurusan</a>
            <a href="index.php#fasilitas" class="block text-slate-200 font-semibold hover:text-brand-400">Fasilitas Kampus</a>
            <a href="index.php#kalkulator" class="block text-slate-200 font-semibold hover:text-brand-400">Cek Beasiswa</a>
            <a href="index.php#testimoni" class="block text-slate-200 font-semibold hover:text-brand-400">Testimoni</a>
            <div class="pt-4">
                <a href="ppdb.php" class="block text-center bg-gradient-to-r from-brand-600 to-indigo-600 text-white font-bold py-3.5 rounded-2xl shadow-lg">
                    Daftar PPDB Online
                </a>
            </div>
        </div>
    </header>