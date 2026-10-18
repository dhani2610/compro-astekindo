<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - LSP ASTEKINDO</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --admin-navy: #0A192F;
            --admin-navy-dark: #060D17;
            --admin-blue: #1D4ED8;
            --admin-gold: #F59E0B;
            --admin-sidebar-w: 260px;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
        }

        /* Sidebar Desktop */
        .admin-sidebar {
            width: var(--admin-sidebar-w);
            background: var(--admin-navy);
            color: #cbd5e1;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255,255,255,0.06);
            transition: transform 0.3s ease;
        }

        .admin-nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 18px;
            margin: 3px 12px;
            border-radius: 10px;
            color: #94a3b8;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .admin-nav-item:hover, .admin-nav-item.active {
            color: #ffffff;
            background: rgba(29, 78, 216, 0.4);
            border-left: 3px solid var(--admin-gold);
        }

        .admin-nav-item i {
            font-size: 1.15rem;
            width: 22px;
            text-align: center;
        }

        .admin-nav-category {
            font-size: 0.7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #64748b;
            padding: 16px 22px 6px;
        }

        /* Main Content Wrapper */
        .admin-main {
            margin-left: var(--admin-sidebar-w);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: margin-left 0.3s ease;
        }

        /* Top Navbar */
        .admin-topbar {
            height: 68px;
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 900;
        }

        /* Content Area */
        .admin-content {
            padding: 28px;
            flex-grow: 1;
        }

        /* Responsive Breakpoint */
        @media (max-width: 991.98px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            .admin-sidebar.show-mobile {
                transform: translateX(0);
            }
            .admin-main {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Admin Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <!-- Brand Header -->
        <div class="p-3 border-bottom border-secondary border-opacity-25 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
                <div class="bg-primary text-white rounded-3 p-2 fw-bold d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                    <i class="bi bi-shield-fill-check fs-5"></i>
                </div>
                <div>
                    <h6 class="fw-bold mb-0 text-white" style="letter-spacing: -0.3px;">LSP ASTEKINDO</h6>
                    <small class="text-white-50" style="font-size: 0.72rem;">Admin Management</small>
                </div>
            </div>
            <button class="btn btn-sm btn-link text-white-50 d-lg-none" id="closeSidebarBtn">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <!-- Navigation Menu -->
        <div class="py-2 flex-grow-1">
            <div class="admin-nav-category">Ikhtisar Utama</div>
            <a href="{{ route('admin.dashboard') }}" class="admin-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard
            </a>

            <div class="admin-nav-category">Konfigurasi Beranda</div>
            <a href="{{ route('admin.settings.general') }}" class="admin-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <i class="bi bi-gear-fill"></i> Pengaturan & Logo
            </a>
            <a href="{{ route('admin.statistics.index') }}" class="admin-nav-item {{ request()->routeIs('admin.statistics.*') ? 'active' : '' }}">
                <i class="bi bi-bar-chart-fill"></i> Counter Statistik
            </a>

            <div class="admin-nav-category">Layanan & Konten</div>
            <a href="{{ route('admin.programs.index') }}" class="admin-nav-item {{ request()->routeIs('admin.programs.*') ? 'active' : '' }}">
                <i class="bi bi-mortarboard-fill"></i> Skema Sertifikasi
            </a>
            <a href="{{ route('admin.projects.index') }}" class="admin-nav-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                <i class="bi bi-building-fill"></i> Portofolio Proyek
            </a>
            <a href="{{ route('admin.articles.index') }}" class="admin-nav-item {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
                <i class="bi bi-journal-text"></i> Artikel & Panduan
            </a>

            <div class="admin-nav-category">Interaksi Pengunjung</div>
            <a href="{{ route('admin.contacts.index') }}" class="admin-nav-item {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                <i class="bi bi-envelope-fill"></i> Pesan Masuk
            </a>
        </div>

        <!-- Bottom Session User -->
        <div class="p-3 border-top border-secondary border-opacity-25">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2 overflow-hidden">
                    <div class="bg-warning text-dark rounded-circle fw-bold d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; font-size: 0.8rem;">
                        A
                    </div>
                    <div class="text-truncate">
                        <div class="text-white small fw-bold text-truncate">{{ auth()->user()->name ?? 'Administrator' }}</div>
                        <div class="text-white-50" style="font-size: 0.7rem;">admin@astekindo.com</div>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger border-0 p-1" title="Logout">
                        <i class="bi bi-box-arrow-right fs-5"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="admin-main">
        <!-- Top Navbar -->
        <header class="admin-topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-light border d-lg-none" id="toggleSidebarBtn">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <h5 class="fw-bold mb-0 text-dark">@yield('page_title', 'Dashboard')</h5>
            </div>

            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                    <i class="bi bi-globe me-1"></i> Lihat Website
                </a>
            </div>
        </header>

        <!-- Dynamic Body Content -->
        <main class="admin-content">
            <!-- Toast / Flash Notification -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 p-3 mb-4 d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill fs-4 me-2 text-success"></i>
                <div>{{ session('success') }}</div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 p-3 mb-4 d-flex align-items-center" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-2 text-danger"></i>
                <div>{{ session('error') }}</div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('adminSidebar');
            const toggleBtn = document.getElementById('toggleSidebarBtn');
            const closeBtn = document.getElementById('closeSidebarBtn');

            if (toggleBtn && sidebar) {
                toggleBtn.addEventListener('click', function() {
                    sidebar.classList.toggle('show-mobile');
                });
            }

            if (closeBtn && sidebar) {
                closeBtn.addEventListener('click', function() {
                    sidebar.classList.remove('show-mobile');
                });
            }
        });
    </script>
</body>
</html>
