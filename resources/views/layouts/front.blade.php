<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LSP ASTEKINDO Konstruksi Mandiri | Sertifikasi SKK Konstruksi Resmi BNSP & LPJK')</title>
    <meta name="description" content="@yield('meta_description', 'Lembaga Sertifikasi Profesi (LSP) ASTEKINDO Konstruksi Mandiri berlisensi resmi BNSP dan terakreditasi LPJK Kementerian PUPR. Layanan Sertifikasi Kompetensi Kerja (SKK) Konstruksi Ahli Utama, Madya, Muda dan Pelaksana Lapangan se-Indonesia.')">
    <meta name="keywords" content="LSP Astekindo, SKK Konstruksi, sertifikasi BNSP, LPJK PUPR, sertifikasi insinyur sipil, ahli K3 konstruksi, manajemen proyek konstruksi, sertifikasi arsitektur, TUK Astekindo, jasa konstruksi Indonesia">
    <meta name="author" content="LSP ASTEKINDO Konstruksi Mandiri">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS Reset & Custom Design System -->
    <style>
        :root {
            --primary-navy: #0A192F;
            --primary-navy-dark: #060F1E;
            --steel-blue: #1E293B;
            --blueprint-blue: #1D4ED8;
            --blueprint-accent: #2563EB;
            --safety-gold: #F59E0B;
            --safety-gold-dark: #D97706;
            --safety-gold-light: #FEF3C7;
            --text-main: #0F172A;
            --text-muted: #64748B;
            --text-light: #94A3B8;
            --bg-light: #F8FAFC;
            --border-light: #E2E8F0;
            --border-navy: #1E3A8A;
            --radius-md: 10px;
            --radius-lg: 16px;
            --shadow-subtle: 0 4px 20px -2px rgba(10, 25, 47, 0.05);
            --shadow-card: 0 10px 30px -4px rgba(10, 25, 47, 0.08);
            --shadow-hover: 0 20px 40px -6px rgba(10, 25, 47, 0.16);
            --transition: all 0.28s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Top Bar */
        .top-bar {
            background: var(--primary-navy-dark);
            color: var(--text-light);
            font-size: 0.8rem;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .top-bar-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .top-badge-group {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .top-badge {
            background: rgba(245, 158, 11, 0.15);
            color: var(--safety-gold);
            padding: 3px 10px;
            border-radius: 4px;
            font-weight: 700;
            font-size: 0.74rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .top-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .top-links a {
            color: #cbd5e1;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .top-links a:hover {
            color: var(--safety-gold);
        }

        /* Main Header Navigation */
        .main-header {
            background: rgba(10, 25, 47, 0.96);
            backdrop-filter: blur(12px);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        }

        .navbar-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 78px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
        }

        .logo-emblem {
            width: 46px;
            height: 46px;
            background: linear-gradient(135deg, var(--safety-gold), #b45309);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.4rem;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logo-text-box h1 {
            color: #ffffff;
            font-size: 1.15rem;
            font-weight: 900;
            letter-spacing: -0.3px;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .logo-text-box span {
            color: var(--safety-gold);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: block;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 6px;
        }

        .nav-menu li a {
            color: #e2e8f0;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 8px;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .nav-menu li a:hover,
        .nav-menu li a.active {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
        }

        .nav-cta-btn {
            background: linear-gradient(135deg, var(--safety-gold), var(--safety-gold-dark));
            color: #0b1a30 !important;
            font-weight: 800 !important;
            padding: 10px 20px !important;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
            transition: var(--transition);
        }

        .nav-cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.5);
        }

        .mobile-toggle {
            display: none;
            background: transparent;
            border: none;
            color: #ffffff;
            font-size: 1.6rem;
            cursor: pointer;
        }

        /* Mobile Offcanvas */
        .mobile-nav-drawer {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 82%;
            max-width: 340px;
            height: 100vh;
            background: var(--primary-navy-dark);
            z-index: 1050;
            padding: 24px;
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.5);
            flex-direction: column;
            gap: 16px;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .mobile-nav-drawer.open {
            transform: translateX(0);
        }

        .drawer-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1040;
        }

        .drawer-overlay.open {
            display: block;
        }

        /* Footer */
        .main-footer {
            background: var(--primary-navy-dark);
            color: var(--text-light);
            padding: 70px 0 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            position: relative;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col h4 {
            color: #ffffff;
            font-size: 1.05rem;
            font-weight: 800;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 36px;
            height: 3px;
            background: var(--safety-gold);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a:hover {
            color: var(--safety-gold);
            transform: translateX(4px);
        }

        .footer-bottom {
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.84rem;
            flex-wrap: wrap;
            gap: 15px;
        }

        /* Floating WhatsApp Button */
        .wa-float-btn {
            position: fixed;
            bottom: 26px;
            right: 26px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: #ffffff;
            padding: 13px 22px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 800;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.45);
            z-index: 999;
            transition: var(--transition);
        }

        .wa-float-btn:hover {
            transform: scale(1.06) translateY(-2px);
            box-shadow: 0 15px 35px rgba(37, 211, 102, 0.6);
            color: #ffffff;
        }

        .wa-float-btn i {
            font-size: 1.4rem;
        }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            .nav-menu {
                display: none;
            }
            .mobile-toggle {
                display: block;
            }
            .mobile-nav-drawer {
                display: flex;
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 640px) {
            .top-bar {
                display: none;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .navbar-flex {
                height: 68px;
            }
            .logo-emblem {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
            .logo-text-box h1 {
                font-size: 1rem;
            }
            .wa-float-btn span {
                display: none;
            }
            .wa-float-btn {
                padding: 14px;
                border-radius: 50%;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- 1. TOP BAR -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-flex">
                <div class="top-badge-group">
                    <span class="top-badge">
                        <i class="bi bi-shield-fill-check"></i> Lisensi BNSP: {{ \App\Models\Setting::get('license_bnsp', 'BNSP-LSP-1897-ID') }}
                    </span>
                    <span class="top-badge" style="background: rgba(37, 99, 235, 0.15); color: #60a5fa; border-color: rgba(37, 99, 235, 0.3);">
                        <i class="bi bi-building-fill-check"></i> Registrasi LPJK: {{ \App\Models\Setting::get('license_lpjk', 'LPJK-SKK-042/2021') }}
                    </span>
                </div>
                <div class="top-links">
                    <a href="tel:{{ \App\Models\Setting::get('phone', '021-83701234') }}">
                        <i class="bi bi-telephone-fill"></i> {{ \App\Models\Setting::get('phone', '021-83701234') }}
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20konsultasi%20sertifikasi%20SKK%20Konstruksi" target="_blank">
                        <i class="bi bi-whatsapp"></i> WA Hotline: {{ \App\Models\Setting::get('whatsapp', '081399810272') }}
                    </a>
                    <a href="mailto:{{ \App\Models\Setting::get('email', 'info@astekindo-sertifikasi.co.id') }}">
                        <i class="bi bi-envelope-fill"></i> {{ \App\Models\Setting::get('email', 'info@astekindo-sertifikasi.co.id') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. MAIN NAVBAR -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar-flex">
                <a href="{{ route('home') }}" class="brand-logo">
                    <div class="logo-emblem">
                        <i class="bi bi-cone-striped"></i>
                    </div>
                    <div class="logo-text-box">
                        <h1>{{ \App\Models\Setting::get('site_name', 'LSP ASTEKINDO') }}</h1>
                        <span>KONSTRUKSI MANDIRI &bull; RESMI BNSP & LPJK</span>
                    </div>
                </a>

                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="bi bi-house-door"></i> Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}"><i class="bi bi-info-circle"></i> Tentang Kami</a></li>
                    <li><a href="{{ route('programs') }}" class="{{ request()->routeIs('programs*') ? 'active' : '' }}"><i class="bi bi-award"></i> Skema Sertifikasi</a></li>
                    <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects*') ? 'active' : '' }}"><i class="bi bi-briefcase"></i> Proyek</a></li>
                    <li><a href="{{ route('articles') }}" class="{{ request()->routeIs('articles*') ? 'active' : '' }}"><i class="bi bi-journal-text"></i> Artikel & Wilayah</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'active' : '' }}"><i class="bi bi-geo-alt"></i> Kontak</a></li>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20daftar%20uji%20kompetensi%20SKK%20Konstruksi" target="_blank" class="nav-cta-btn">
                            <i class="bi bi-whatsapp"></i> Cek Syarat SKK
                        </a>
                    </li>
                </ul>

                <button class="mobile-toggle" id="mobileToggleBtn" aria-label="Buka Menu Navigasi">
                    <i class="bi bi-list"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div class="drawer-overlay" id="drawerOverlay"></div>
    <div class="mobile-nav-drawer" id="mobileNavDrawer">
        <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 12px; border-bottom: 1px solid rgba(255,255,255,0.1);">
            <div style="color: #fff; font-weight: 800; font-size: 1.1rem; display: flex; align-items: center; gap: 8px;">
                <i class="bi bi-cone-striped" style="color: var(--safety-gold);"></i> LSP ASTEKINDO
            </div>
            <button id="closeDrawerBtn" style="background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer;">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-top: 10px;">
            <li><a href="{{ route('home') }}" style="color: #cbd5e1; text-decoration: none; padding: 10px; display: block; font-weight: 600; border-radius: 6px;"><i class="bi bi-house-door" style="color: var(--safety-gold);"></i> Beranda</a></li>
            <li><a href="{{ route('about') }}" style="color: #cbd5e1; text-decoration: none; padding: 10px; display: block; font-weight: 600; border-radius: 6px;"><i class="bi bi-info-circle" style="color: var(--safety-gold);"></i> Tentang Kami</a></li>
            <li><a href="{{ route('programs') }}" style="color: #cbd5e1; text-decoration: none; padding: 10px; display: block; font-weight: 600; border-radius: 6px;"><i class="bi bi-award" style="color: var(--safety-gold);"></i> Skema Sertifikasi</a></li>
            <li><a href="{{ route('projects') }}" style="color: #cbd5e1; text-decoration: none; padding: 10px; display: block; font-weight: 600; border-radius: 6px;"><i class="bi bi-briefcase" style="color: var(--safety-gold);"></i> Proyek Nasional</a></li>
            <li><a href="{{ route('articles') }}" style="color: #cbd5e1; text-decoration: none; padding: 10px; display: block; font-weight: 600; border-radius: 6px;"><i class="bi bi-journal-text" style="color: var(--safety-gold);"></i> Artikel & Wilayah</a></li>
            <li><a href="{{ route('contact') }}" style="color: #cbd5e1; text-decoration: none; padding: 10px; display: block; font-weight: 600; border-radius: 6px;"><i class="bi bi-geo-alt" style="color: var(--safety-gold);"></i> Kontak</a></li>
        </ul>
        <div style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1);">
            <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" style="display: block; text-align: center; background: var(--safety-gold); color: #0b1a30; font-weight: 800; padding: 12px; border-radius: 8px; text-decoration: none;">
                <i class="bi bi-whatsapp"></i> Chat WhatsApp Hotline
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- 3. FOOTER -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: About -->
                <div class="footer-col">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div class="logo-emblem" style="width: 40px; height: 40px; font-size: 1.2rem;">
                            <i class="bi bi-cone-striped"></i>
                        </div>
                        <div>
                            <h3 style="color: #fff; font-size: 1.15rem; font-weight: 800;">{{ \App\Models\Setting::get('site_name', 'LSP ASTEKINDO') }}</h3>
                            <p style="color: var(--safety-gold); font-size: 0.76rem; font-weight: 700;">KONSTRUKSI MANDIRI &bull; BNSP & LPJK</p>
                        </div>
                    </div>
                    <p style="font-size: 0.88rem; line-height: 1.7; margin-bottom: 18px; color: #94a3b8;">
                        {{ \App\Models\Setting::get('footer_text', 'Lembaga Sertifikasi Profesi (LSP) Pihak Ketiga berlisensi resmi BNSP dan terakreditasi LPJK Kementerian PUPR untuk penyelenggaraan asesmen kompetensi tenaga kerja konstruksi Indonesia.') }}
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                        <span style="font-size: 0.72rem; background: rgba(255,255,255,0.06); padding: 4px 10px; border-radius: 4px; border: 1px solid rgba(255,255,255,0.1);">
                            No. Lisensi: {{ \App\Models\Setting::get('license_bnsp', 'BNSP-LSP-1897-ID') }}
                        </span>
                        <span style="font-size: 0.72rem; background: rgba(245, 158, 11, 0.1); color: var(--safety-gold); padding: 4px 10px; border-radius: 4px; border: 1px solid rgba(245, 158, 11, 0.2);">
                            Akreditasi: {{ \App\Models\Setting::get('license_lpjk', 'LPJK-SKK-042/2021') }}
                        </span>
                    </div>
                </div>

                <!-- Col 2: Skema Unggulan -->
                <div class="footer-col">
                    <h4>Skema Sertifikasi</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('programs') }}"><i class="bi bi-chevron-right"></i> Ahli Manajemen Proyek</a></li>
                        <li><a href="{{ route('programs') }}"><i class="bi bi-chevron-right"></i> Ahli K3 Konstruksi SMKK</a></li>
                        <li><a href="{{ route('programs') }}"><i class="bi bi-chevron-right"></i> Ahli Teknik Bangunan Gedung</a></li>
                        <li><a href="{{ route('programs') }}"><i class="bi bi-chevron-right"></i> Ahli Teknik Jalan & Jembatan</a></li>
                        <li><a href="{{ route('programs') }}"><i class="bi bi-chevron-right"></i> Ahli Manajemen Mutu QA/QC</a></li>
                        <li><a href="{{ route('programs') }}"><i class="bi bi-chevron-right"></i> Pelaksana Lapangan Gedung</a></li>
                    </ul>
                </div>

                <!-- Col 3: Navigasi Cepat -->
                <div class="footer-col">
                    <h4>Navigasi</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('about') }}"><i class="bi bi-chevron-right"></i> Profil & Visi Misi</a></li>
                        <li><a href="{{ route('about') }}#legalitas"><i class="bi bi-chevron-right"></i> Legalitas Lisensi BNSP</a></li>
                        <li><a href="{{ route('projects') }}"><i class="bi bi-chevron-right"></i> Portofolio Proyek BUMN</a></li>
                        <li><a href="{{ route('articles') }}"><i class="bi bi-chevron-right"></i> Direktori 38 Provinsi TUK</a></li>
                        <li><a href="{{ route('articles') }}"><i class="bi bi-chevron-right"></i> 200 Panduan Teknis SKK</a></li>
                        <li><a href="{{ route('contact') }}"><i class="bi bi-chevron-right"></i> Alamat & Peta Kantor</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kontak & Sekretariat -->
                <div class="footer-col">
                    <h4>Sekretariat Pusat</h4>
                    <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 12px; line-height: 1.6;">
                        <i class="bi bi-geo-alt-fill" style="color: var(--safety-gold);"></i>
                        {{ \App\Models\Setting::get('address', 'Jl. Raden Inten II No. 88, Duren Sawit, Jakarta Timur 13440') }}
                    </p>
                    <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 8px;">
                        <i class="bi bi-telephone-fill" style="color: var(--safety-gold);"></i> Telp: {{ \App\Models\Setting::get('phone', '021-83701234') }}
                    </p>
                    <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 8px;">
                        <i class="bi bi-whatsapp" style="color: #25D366;"></i> WA 1: {{ \App\Models\Setting::get('whatsapp', '081399810272') }}
                    </p>
                    <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 8px;">
                        <i class="bi bi-whatsapp" style="color: #25D366;"></i> WA 2: {{ \App\Models\Setting::get('whatsapp_2', '081283624838') }}
                    </p>
                    <p style="font-size: 0.88rem; color: #cbd5e1;">
                        <i class="bi bi-envelope-fill" style="color: var(--safety-gold);"></i> {{ \App\Models\Setting::get('email', 'info@astekindo-sertifikasi.co.id') }}
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    &copy; {{ date('Y') }} <strong>{{ \App\Models\Setting::get('site_name', 'LSP ASTEKINDO Konstruksi Mandiri') }}</strong>. Hak Cipta Dilindungi Undang-Undang.
                </div>
                <div style="display: flex; gap: 18px;">
                    <span>Standar BNSP ISO/IEC 17024</span>
                    <span>Sertifikasi SKK Berizin Resmi</span>
                    <a href="{{ route('admin.login') }}" style="color: #64748b; text-decoration: none;"><i class="bi bi-lock-fill"></i> Admin Panel</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Widget -->
    <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20konsultasi%20sertifikasi%20SKK%20Konstruksi" target="_blank" class="wa-float-btn" title="Konsultasi Sertifikasi via WhatsApp">
        <i class="bi bi-whatsapp"></i>
        <span>Konsultasi SKK Konstruksi</span>
    </a>

    <script>
        // Mobile Drawer Controller
        const mobileToggleBtn = document.getElementById('mobileToggleBtn');
        const closeDrawerBtn = document.getElementById('closeDrawerBtn');
        const mobileNavDrawer = document.getElementById('mobileNavDrawer');
        const drawerOverlay = document.getElementById('drawerOverlay');

        function openDrawer() {
            mobileNavDrawer.classList.add('open');
            drawerOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeDrawer() {
            mobileNavDrawer.classList.remove('open');
            drawerOverlay.classList.remove('open');
            document.body.style.overflow = '';
        }

        if (mobileToggleBtn) mobileToggleBtn.addEventListener('click', openDrawer);
        if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeDrawer);
        if (drawerOverlay) drawerOverlay.addEventListener('click', closeDrawer);
    </script>
    @stack('scripts')
</body>
</html>
