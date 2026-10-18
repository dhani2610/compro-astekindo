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
    
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Modern Light Blue & Clean Design System -->
    <style>
        :root {
            --sky-primary: #0284C7;
            --sky-accent: #0EA5E9;
            --sky-light: #38BDF8;
            --sky-bg-subtle: #F0F9FF;
            --sky-border: #BAE6FD;
            --sky-dark: #0369A1;

            --text-heading: #0F172A;
            --text-body: #334155;
            --text-muted: #64748B;
            --bg-page: #F8FAFC;
            --bg-white: #FFFFFF;
            --border-light: #E2E8F0;

            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow-subtle: 0 4px 20px -2px rgba(2, 132, 199, 0.06);
            --shadow-card: 0 10px 30px -4px rgba(2, 132, 199, 0.08);
            --shadow-hover: 0 20px 40px -6px rgba(2, 132, 199, 0.16);
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-page);
            color: var(--text-body);
            line-height: 1.65;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-heading);
            font-weight: 800;
            letter-spacing: -0.4px;
        }

        /* Top Notification Bar */
        .top-bar-modern {
            background: #F0F9FF;
            border-bottom: 1px solid var(--sky-border);
            padding: 8px 0;
            font-size: 0.82rem;
            color: #475569;
        }

        .top-badge-modern {
            background: #E0F2FE;
            color: var(--sky-primary);
            border: 1px solid var(--sky-border);
            padding: 3px 12px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Modern Sleek Navbar (Without Icons) */
        .main-navbar-modern {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #E2E8F0;
            position: sticky;
            top: 0;
            z-index: 1050;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: var(--transition);
        }

        .navbar-brand-modern {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .brand-icon-box {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, var(--sky-primary), var(--sky-accent));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.35rem;
            box-shadow: 0 6px 18px rgba(14, 165, 233, 0.3);
        }

        .brand-title-box h1 {
            font-size: 1.15rem;
            font-weight: 900;
            color: var(--text-heading);
            margin: 0;
            line-height: 1.2;
            letter-spacing: -0.3px;
        }

        .brand-title-box span {
            font-size: 0.7rem;
            font-weight: 700;
            color: var(--sky-primary);
            letter-spacing: 0.5px;
            display: block;
            text-transform: uppercase;
        }

        /* Nav Links without Icons */
        .nav-links-modern {
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links-modern li a {
            color: #475569;
            text-decoration: none;
            font-size: 0.94rem;
            font-weight: 600;
            padding: 9px 16px;
            border-radius: 30px;
            transition: var(--transition);
            display: inline-block;
        }

        .nav-links-modern li a:hover {
            color: var(--sky-primary);
            background: var(--sky-bg-subtle);
        }

        .nav-links-modern li a.active {
            color: var(--sky-primary);
            background: #E0F2FE;
            font-weight: 700;
        }

        .btn-cta-nav {
            background: linear-gradient(135deg, var(--sky-primary), var(--sky-accent));
            color: #ffffff !important;
            font-weight: 700 !important;
            font-size: 0.88rem !important;
            padding: 9px 20px !important;
            border-radius: 30px !important;
            box-shadow: 0 6px 18px rgba(14, 165, 233, 0.28);
            transition: var(--transition);
            border: none;
            text-decoration: none;
        }

        .btn-cta-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(14, 165, 233, 0.4);
            color: #ffffff !important;
        }

        /* Modern Light Footer */
        .footer-modern {
            background: #FFFFFF;
            border-top: 1px solid var(--border-light);
            padding: 70px 0 30px;
            color: #64748B;
        }

        .footer-modern h5 {
            color: var(--text-heading);
            font-size: 1.05rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-list li {
            margin-bottom: 12px;
        }

        .footer-links-list a {
            color: #64748B;
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .footer-links-list a:hover {
            color: var(--sky-primary);
            padding-left: 4px;
        }

        /* Floating WhatsApp Button */
        .floating-wa-btn {
            position: fixed;
            bottom: 28px;
            right: 28px;
            background: #25D366;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 22px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 0.92rem;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            z-index: 1060;
            transition: var(--transition);
        }

        .floating-wa-btn:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 15px 35px rgba(37, 211, 102, 0.55);
            color: #ffffff;
        }

        .floating-wa-btn i {
            font-size: 1.35rem;
        }

        /* Mobile drawer */
        .mobile-drawer {
            position: fixed;
            top: 0;
            right: -320px;
            width: 300px;
            height: 100vh;
            background: #ffffff;
            box-shadow: -5px 0 30px rgba(0,0,0,0.15);
            z-index: 1100;
            padding: 24px;
            display: flex;
            flex-direction: column;
            transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mobile-drawer.open {
            right: 0;
        }

        .drawer-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(4px);
            z-index: 1090;
            display: none;
        }

        .drawer-backdrop.open {
            display: block;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- 1. TOP ANNOUNCEMENT BAR -->
    <div class="top-bar-modern d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <span class="top-badge-modern">
                        <i class="bi bi-patch-check-fill text-primary"></i> Lisensi BNSP: {{ \App\Models\Setting::get('license_bnsp', 'BNSP-LSP-1897-ID') }}
                    </span>
                    <span class="top-badge-modern" style="background: #F0FDF4; color: #16A34A; border-color: #BBF7D0;">
                        <i class="bi bi-shield-check text-success"></i> Terakreditasi LPJK: {{ \App\Models\Setting::get('license_lpjk', 'LPJK-SKK-042/2021') }}
                    </span>
                </div>
                <div class="d-flex align-items-center gap-4 small">
                    <a href="tel:{{ \App\Models\Setting::get('phone', '(021) 7919-4820') }}" class="text-secondary text-decoration-none">
                        <i class="bi bi-telephone-fill me-1 text-primary"></i> {{ \App\Models\Setting::get('phone', '(021) 7919-4820') }}
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" class="text-secondary text-decoration-none">
                        <i class="bi bi-whatsapp me-1 text-success"></i> WA: {{ \App\Models\Setting::get('whatsapp', '081399810272') }}
                    </a>
                    <a href="mailto:{{ \App\Models\Setting::get('email', 'sekretariat@astekindo.org') }}" class="text-secondary text-decoration-none">
                        <i class="bi bi-envelope-fill me-1 text-info"></i> {{ \App\Models\Setting::get('email', 'sekretariat@astekindo.org') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. MAIN NAVBAR (Clean & Without Icons) -->
    <header class="main-navbar-modern py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="navbar-brand-modern">
                    <div class="brand-icon-box">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <div class="brand-title-box">
                        <h1>{{ \App\Models\Setting::get('site_name', 'LSP ASTEKINDO') }}</h1>
                        <span>KONSTRUKSI MANDIRI &bull; RESMI BNSP & LPJK</span>
                    </div>
                </a>

                <!-- Desktop Nav Items (No Icons as Requested) -->
                <ul class="nav-links-modern d-none d-lg-flex">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a></li>
                    <li><a href="{{ route('programs') }}" class="{{ request()->routeIs('programs*') ? 'active' : '' }}">Skema Sertifikasi</a></li>
                    <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects*') ? 'active' : '' }}">Proyek</a></li>
                    <li><a href="{{ route('articles') }}" class="{{ request()->routeIs('articles*') ? 'active' : '' }}">Artikel & Wilayah</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'active' : '' }}">Kontak</a></li>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20konsultasi%20syarat%20SKK%20Konstruksi" target="_blank" class="btn-cta-nav">
                            Konsultasi SKK
                        </a>
                    </li>
                </ul>

                <!-- Mobile Hamburger Button -->
                <button class="btn btn-outline-light border text-dark d-lg-none rounded-3 px-3 py-2" id="toggleMobileDrawerBtn" aria-label="Menu">
                    <i class="bi bi-list fs-4"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div class="drawer-backdrop" id="drawerBackdrop"></div>
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="d-flex justify-content-between align-items-center pb-3 border-bottom mb-3">
            <div class="d-flex align-items-center gap-2">
                <div class="brand-icon-box" style="width: 36px; height: 36px; font-size: 1.1rem;">
                    <i class="bi bi-building-check"></i>
                </div>
                <strong class="text-dark">LSP ASTEKINDO</strong>
            </div>
            <button class="btn btn-sm btn-light border-0" id="closeMobileDrawerBtn">
                <i class="bi bi-x-lg fs-5"></i>
            </button>
        </div>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
            <li><a href="{{ route('home') }}" class="d-block py-2 px-3 rounded text-decoration-none fw-semibold {{ request()->routeIs('home') ? 'bg-primary-subtle text-primary' : 'text-dark' }}">Beranda</a></li>
            <li><a href="{{ route('about') }}" class="d-block py-2 px-3 rounded text-decoration-none fw-semibold {{ request()->routeIs('about') ? 'bg-primary-subtle text-primary' : 'text-dark' }}">Tentang Kami</a></li>
            <li><a href="{{ route('programs') }}" class="d-block py-2 px-3 rounded text-decoration-none fw-semibold {{ request()->routeIs('programs*') ? 'bg-primary-subtle text-primary' : 'text-dark' }}">Skema Sertifikasi</a></li>
            <li><a href="{{ route('projects') }}" class="d-block py-2 px-3 rounded text-decoration-none fw-semibold {{ request()->routeIs('projects*') ? 'bg-primary-subtle text-primary' : 'text-dark' }}">Proyek</a></li>
            <li><a href="{{ route('articles') }}" class="d-block py-2 px-3 rounded text-decoration-none fw-semibold {{ request()->routeIs('articles*') ? 'bg-primary-subtle text-primary' : 'text-dark' }}">Artikel & Wilayah</a></li>
            <li><a href="{{ route('contact') }}" class="d-block py-2 px-3 rounded text-decoration-none fw-semibold {{ request()->routeIs('contact*') ? 'bg-primary-subtle text-primary' : 'text-dark' }}">Kontak</a></li>
        </ul>
        <div class="mt-auto">
            <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" class="btn btn-primary w-100 rounded-pill py-2 fw-bold" style="background: var(--sky-primary); border-color: var(--sky-primary);">
                <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp
            </a>
        </div>
    </div>

    <!-- MAIN BODY CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- 3. FOOTER (Modern Light Slate Theme) -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row g-4 mb-5">
                <!-- Col 1: Brand Info -->
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="brand-icon-box" style="width: 38px; height: 38px; font-size: 1.2rem;">
                            <i class="bi bi-building-check"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">{{ \App\Models\Setting::get('site_name', 'LSP ASTEKINDO') }}</h5>
                            <small class="text-primary fw-bold" style="font-size: 0.72rem;">KONSTRUKSI MANDIRI &bull; RESMI BNSP & LPJK</small>
                        </div>
                    </div>
                    <p class="small text-muted mb-3" style="line-height: 1.7;">
                        {{ \App\Models\Setting::get('footer_text', 'Lembaga Sertifikasi Profesi (LSP-P3) terlisensi resmi BNSP dan terakreditasi LPJK Kementerian PUPR untuk sertifikasi kompetensi tenaga ahli dan pengawas konstruksi seluruh Indonesia.') }}
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light text-secondary border px-3 py-2">
                            Lisensi: {{ \App\Models\Setting::get('license_bnsp', 'BNSP-LSP-1897-ID') }}
                        </span>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2">
                            Akreditasi: {{ \App\Models\Setting::get('license_lpjk', 'LPJK-SKK-042/2021') }}
                        </span>
                    </div>
                </div>

                <!-- Col 2: Skema Layanan -->
                <div class="col-sm-6 col-lg-2">
                    <h5>Skema Sertifikasi</h5>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('programs') }}">Ahli Manajemen Proyek</a></li>
                        <li><a href="{{ route('programs') }}">Ahli K3 Konstruksi SMKK</a></li>
                        <li><a href="{{ route('programs') }}">Ahli Bangunan Gedung</a></li>
                        <li><a href="{{ route('programs') }}">Ahli Jalan & Jembatan</a></li>
                        <li><a href="{{ route('programs') }}">Ahli Manajemen Mutu</a></li>
                        <li><a href="{{ route('programs') }}">Pelaksana Lapangan</a></li>
                    </ul>
                </div>

                <!-- Col 3: Navigasi Cepat -->
                <div class="col-sm-6 col-lg-2">
                    <h5>Navigasi</h5>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('about') }}">Tentang Lembaga</a></li>
                        <li><a href="{{ route('about') }}#legalitas">Legalitas Lisensi</a></li>
                        <li><a href="{{ route('projects') }}">Portofolio Proyek</a></li>
                        <li><a href="{{ route('articles') }}">Direktori 38 Provinsi</a></li>
                        <li><a href="{{ route('articles') }}">200 Panduan Teknis</a></li>
                        <li><a href="{{ route('contact') }}">Kontak Sekretariat</a></li>
                    </ul>
                </div>

                <!-- Col 4: Sekretariat & Hotline -->
                <div class="col-lg-4">
                    <h5>Sekretariat Pusat</h5>
                    <p class="small text-muted mb-2">
                        <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                        {{ \App\Models\Setting::get('address', 'Gedung Astekindo Lt. 3, Jl. Raya Pasar Minggu No. 17, Jakarta Selatan 12780') }}
                    </p>
                    <p class="small text-muted mb-2">
                        <i class="bi bi-telephone-fill text-primary me-2"></i>
                        Telp: {{ \App\Models\Setting::get('phone', '(021) 7919-4820') }}
                    </p>
                    <p class="small text-muted mb-2">
                        <i class="bi bi-whatsapp text-success me-2"></i>
                        Hotline 1: {{ \App\Models\Setting::get('whatsapp', '081399810272') }}
                    </p>
                    <p class="small text-muted mb-2">
                        <i class="bi bi-whatsapp text-success me-2"></i>
                        Hotline 2: {{ \App\Models\Setting::get('whatsapp_2', '081283624838') }}
                    </p>
                    <p class="small text-muted mb-0">
                        <i class="bi bi-envelope-fill text-info me-2"></i>
                        Email: {{ \App\Models\Setting::get('email', 'sekretariat@astekindo.org') }}
                    </p>
                </div>
            </div>

            <div class="pt-4 border-top d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 small text-muted">
                <div>
                    &copy; {{ date('Y') }} <strong>{{ \App\Models\Setting::get('site_name', 'LSP ASTEKINDO Konstruksi Mandiri') }}</strong>. Seluruh hak cipta dilindungi undang-undang.
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span>Standar BNSP ISO/IEC 17024</span>
                    <a href="{{ route('admin.login') }}" class="text-secondary text-decoration-none">
                        <i class="bi bi-shield-lock-fill me-1"></i> Admin Portal
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Action -->
    <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20konsultasi%20sertifikasi%20SKK%20Konstruksi" target="_blank" class="floating-wa-btn" title="Chat WhatsApp Hotline">
        <i class="bi bi-whatsapp"></i>
        <span>Konsultasi SKK</span>
    </a>

    <!-- Bootstrap 5.3.3 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Mobile Drawer Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleMobileDrawerBtn');
            const closeBtn = document.getElementById('closeMobileDrawerBtn');
            const drawer = document.getElementById('mobileDrawer');
            const backdrop = document.getElementById('drawerBackdrop');

            function openDrawer() {
                if (drawer && backdrop) {
                    drawer.classList.add('open');
                    backdrop.classList.add('open');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeDrawer() {
                if (drawer && backdrop) {
                    drawer.classList.remove('open');
                    backdrop.classList.remove('open');
                    document.body.style.overflow = '';
                }
            }

            if (toggleBtn) toggleBtn.addEventListener('click', openDrawer);
            if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
            if (backdrop) backdrop.addEventListener('click', closeDrawer);
        });
    </script>

    @stack('scripts')
</body>
</html>
