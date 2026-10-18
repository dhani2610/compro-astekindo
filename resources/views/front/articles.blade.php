@extends('layouts.front')

@section('title', 'Katalog 200 Artikel & Panduan Teknis SKKNI Konstruksi | LSP ASTEKINDO')
@section('meta_description', 'Kumpulan 200 artikel referensi teknis sertifikasi kompetensi kerja (SKK) konstruksi BNSP, standar K3, manajemen proyek gedung, jalan, dan jembatan seluruh Indonesia.')

@section('content')
<!-- Page Header -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #0A192F 0%, #172A46 100%);">
    <div class="container py-4 position-relative" style="z-index: 2;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Artikel & Panduan</li>
            </ol>
        </nav>
        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
            <i class="bi bi-journal-richtext me-1"></i> Direktori Resmi 200 Artikel SKKNI
        </span>
        <h1 class="display-5 fw-bold text-white mb-3">Pusat Panduan & Kajian Teknis Konstruksi</h1>
        <p class="lead text-white-50 mb-0" style="max-width: 780px;">
            Akses komprehensif 200 topik kajian ilmiah, standar pengawasan lapangan, K3 konstruksi, dan prosedur sertifikasi BNSP berstandar LPJK PUPR di 38 Provinsi & 514 Kota se-Indonesia.
        </p>
    </div>
</section>

<!-- Main Catalog Section with Fast Client-Side JavaScript -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Interactive Filter Toolbar (Zero Server Reload) -->
        <div class="card border-0 shadow-sm p-3 p-md-4 mb-4" style="border-radius: 16px;">
            <div class="row g-3 align-items-center">
                <!-- Live Search Input -->
                <div class="col-lg-5 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted ps-3">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" id="articleSearchInput" class="form-control border-start-0 py-2" placeholder="Cari topik artikel teknis, K3, jembatan, gedung..." aria-label="Search articles">
                        <button class="btn btn-outline-secondary border-start-0" type="button" id="clearSearchBtn" style="display: none;">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Category Filters (JS Powered) -->
                <div class="col-lg-5 col-md-6">
                    <div class="d-flex flex-wrap gap-2" id="categoryFilterGroup">
                        <button class="btn btn-sm btn-primary category-btn active" data-category="all">Semua (200)</button>
                        <button class="btn btn-sm btn-outline-secondary category-btn" data-category="Gedung & Sipil">Gedung & Sipil</button>
                        <button class="btn btn-sm btn-outline-secondary category-btn" data-category="Jalan & Jembatan">Jalan & Jembatan</button>
                        <button class="btn btn-sm btn-outline-secondary category-btn" data-category="K3 Konstruksi">K3 Konstruksi</button>
                        <button class="btn btn-sm btn-outline-secondary category-btn" data-category="Manajemen Proyek">Manajemen Proyek</button>
                    </div>
                </div>

                <!-- Fast Info Status -->
                <div class="col-lg-2 text-lg-end text-muted small">
                    Menampilkan <span id="articleCountBadge" class="fw-bold text-primary">0</span> artikel
                </div>
            </div>
        </div>

        <!-- Dynamic Articles Grid Container -->
        <div id="articlesLoadingSkeleton" class="row g-4 mb-5">
            <!-- Loading Skeletons -->
            @for($i = 0; $i < 6; $i++)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 p-3" style="border-radius: 14px;">
                    <div class="placeholder-glow">
                        <span class="placeholder col-4 mb-2 rounded"></span>
                        <h5 class="placeholder col-11 mb-2"></h5>
                        <p class="placeholder col-8 mb-3"></p>
                        <div class="d-flex justify-content-between pt-3 border-top">
                            <span class="placeholder col-3"></span>
                            <span class="placeholder col-3"></span>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div id="articlesGrid" class="row g-4 mb-5" style="display: none;">
            <!-- Rendered by JavaScript for instant, non-blocking performance -->
        </div>

        <!-- No Results Fallback -->
        <div id="noResultsState" class="text-center py-5" style="display: none;">
            <div class="mb-3">
                <i class="bi bi-file-earmark-x display-3 text-muted"></i>
            </div>
            <h4 class="fw-bold text-dark">Topik Artikel Tidak Ditemukan</h4>
            <p class="text-muted">Coba ubah kata kunci pencarian atau pilih kategori lain.</p>
            <button class="btn btn-outline-primary rounded-pill px-4" id="resetFilterBtn">Reset Filter</button>
        </div>

        <!-- Client-Side Pagination Controls -->
        <div id="paginationContainer" class="d-flex justify-content-center align-items-center gap-2 mt-4">
            <!-- Rendered by JS -->
        </div>

        <!-- Regional Directory Section Callout -->
        <div class="mt-5 p-4 p-md-5 rounded-4 text-white position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0A192F 0%, #1D4ED8 100%);">
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-lg-8">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
                        <i class="bi bi-geo-alt-fill me-1"></i> Direktori 38 Provinsi & 514 Kota
                    </span>
                    <h3 class="fw-bold mb-2">Ingin Membaca Artikel Spesifik Wilayah Anda?</h3>
                    <p class="text-white-50 mb-3 mb-lg-0">
                        Setiap program sertifikasi kami dilengkapi kajian teknis khusus yang disesuaikan dengan kondisi geoteknik, infrastruktur daerah, dan regulasi dinas PUPR di kota Anda.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('programs') }}" class="btn btn-warning text-dark fw-bold px-4 py-3 rounded-pill shadow">
                        <i class="bi bi-building me-2"></i>Pilih Skema & Wilayah <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client-Side Vanilla JavaScript: Ultra-fast, zero server lag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    let allArticles = [];
    let filteredArticles = [];
    let currentPage = 1;
    const itemsPerPage = 12;
    let selectedCategory = 'all';
    let searchQuery = '';

    const grid = document.getElementById('articlesGrid');
    const skeleton = document.getElementById('articlesLoadingSkeleton');
    const noResults = document.getElementById('noResultsState');
    const countBadge = document.getElementById('articleCountBadge');
    const pagination = document.getElementById('paginationContainer');
    const searchInput = document.getElementById('articleSearchInput');
    const clearBtn = document.getElementById('clearSearchBtn');
    const categoryBtns = document.querySelectorAll('.category-btn');
    const resetBtn = document.getElementById('resetFilterBtn');

    // Fetch catalog asynchronously
    fetch('{{ route("api.articles") }}')
        .then(response => response.json())
        .then(data => {
            allArticles = data;
            filteredArticles = [...allArticles];
            skeleton.style.display = 'none';
            grid.style.display = 'flex';
            renderGrid();
        })
        .catch(err => {
            console.error('Error loading article catalog:', err);
            skeleton.innerHTML = '<div class="col-12 text-center text-danger py-4">Gagal memuat katalog artikel. Silakan muat ulang halaman.</div>';
        });

    // Filter Logic
    function applyFilters() {
        const query = searchQuery.trim().toLowerCase();

        filteredArticles = allArticles.filter(item => {
            const matchCategory = (selectedCategory === 'all') || (item.category === selectedCategory);
            const matchSearch = (!query) ||
                (item.title && item.title.toLowerCase().includes(query)) ||
                (item.category && item.category.toLowerCase().includes(query)) ||
                (item.id && item.id.toString().includes(query));
            return matchCategory && matchSearch;
        });

        currentPage = 1;
        renderGrid();
    }

    // Render Grid with Pagination
    function renderGrid() {
        countBadge.textContent = filteredArticles.length;

        if (filteredArticles.length === 0) {
            grid.innerHTML = '';
            grid.style.display = 'none';
            noResults.style.display = 'block';
            pagination.innerHTML = '';
            return;
        }

        noResults.style.display = 'none';
        grid.style.display = 'flex';

        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const pageItems = filteredArticles.slice(startIndex, endIndex);

        let html = '';
        pageItems.forEach(art => {
            const detailUrl = `{{ url('/artikel-panduan') }}/${art.slug}`;
            html += `
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm article-card p-4 d-flex flex-column" style="border-radius: 16px; transition: transform 0.25s ease, box-shadow 0.25s ease;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill" style="font-size: 0.75rem;">
                            <i class="bi bi-tag-fill me-1"></i>${escapeHtml(art.category)}
                        </span>
                        <span class="badge bg-light text-muted border px-2 py-1 rounded-pill" style="font-size: 0.72rem;">
                            #${art.id}
                        </span>
                    </div>

                    <h5 class="fw-bold mb-3" style="font-size: 1.05rem; line-height: 1.45;">
                        <a href="${detailUrl}" class="text-dark text-decoration-none hover-primary">
                            ${escapeHtml(art.title)}
                        </a>
                    </h5>

                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                        Kajian teknis komprehensif pedoman implementasi lapangan, standar mutu K3 konstruksi, dan sertifikasi BNSP skema LPJK PUPR.
                    </p>

                    <div class="d-flex justify-content-between align-items-center pt-3 border-top text-muted" style="font-size: 0.8rem;">
                        <span><i class="bi bi-clock me-1 text-primary"></i>${escapeHtml(art.read_time)}</span>
                        <span><i class="bi bi-eye me-1 text-success"></i>${art.views} views</span>
                        <a href="${detailUrl}" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1">
                            Baca <i class="bi bi-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>`;
        });

        grid.innerHTML = html;
        renderPagination();
    }

    // Pagination Renderer
    function renderPagination() {
        const totalPages = Math.ceil(filteredArticles.length / itemsPerPage);
        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }

        let pgnHtml = '';

        // Prev Button
        pgnHtml += `
            <button class="btn btn-outline-secondary btn-sm rounded-pill px-3 ${currentPage === 1 ? 'disabled' : ''}" 
                onclick="window.goToArticlePage(${currentPage - 1})">
                <i class="bi bi-chevron-left me-1"></i> Sebelumnya
            </button>
        `;

        // Page Numbers Window
        const maxButtons = 5;
        let startPage = Math.max(1, currentPage - 2);
        let endPage = Math.min(totalPages, startPage + maxButtons - 1);

        if (endPage - startPage < maxButtons - 1) {
            startPage = Math.max(1, endPage - maxButtons + 1);
        }

        if (startPage > 1) {
            pgnHtml += `<button class="btn btn-outline-light text-dark btn-sm rounded-circle px-2" onclick="window.goToArticlePage(1)">1</button>`;
            if (startPage > 2) pgnHtml += `<span class="text-muted px-1">...</span>`;
        }

        for (let i = startPage; i <= endPage; i++) {
            pgnHtml += `
                <button class="btn btn-sm rounded-circle ${i === currentPage ? 'btn-primary text-white fw-bold' : 'btn-outline-light text-dark'}" 
                    style="width: 34px; height: 34px; padding: 0;"
                    onclick="window.goToArticlePage(${i})">${i}</button>
            `;
        }

        if (endPage < totalPages) {
            if (endPage < totalPages - 1) pgnHtml += `<span class="text-muted px-1">...</span>`;
            pgnHtml += `<button class="btn btn-outline-light text-dark btn-sm rounded-circle px-2" onclick="window.goToArticlePage(${totalPages})">${totalPages}</button>`;
        }

        // Next Button
        pgnHtml += `
            <button class="btn btn-outline-secondary btn-sm rounded-pill px-3 ${currentPage === totalPages ? 'disabled' : ''}" 
                onclick="window.goToArticlePage(${currentPage + 1})">
                Berikutnya <i class="bi bi-chevron-right ms-1"></i>
            </button>
        `;

        pagination.innerHTML = pgnHtml;
    }

    window.goToArticlePage = function(page) {
        currentPage = page;
        renderGrid();
        window.scrollTo({ top: grid.offsetTop - 120, behavior: 'smooth' });
    };

    // Search Listener
    searchInput.addEventListener('input', function(e) {
        searchQuery = e.target.value;
        clearBtn.style.display = searchQuery ? 'inline-block' : 'none';
        applyFilters();
    });

    clearBtn.addEventListener('click', function() {
        searchInput.value = '';
        searchQuery = '';
        clearBtn.style.display = 'none';
        applyFilters();
    });

    // Category Filter Listeners
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            categoryBtns.forEach(b => {
                b.classList.remove('active', 'btn-primary');
                b.classList.add('btn-outline-secondary');
            });
            this.classList.add('active', 'btn-primary');
            this.classList.remove('btn-outline-secondary');

            selectedCategory = this.getAttribute('data-category');
            applyFilters();
        });
    });

    // Reset Filter Button
    resetBtn.addEventListener('click', function() {
        searchInput.value = '';
        searchQuery = '';
        clearBtn.style.display = 'none';
        selectedCategory = 'all';

        categoryBtns.forEach(b => {
            if (b.getAttribute('data-category') === 'all') {
                b.classList.add('active', 'btn-primary');
                b.classList.remove('btn-outline-secondary');
            } else {
                b.classList.remove('active', 'btn-primary');
                b.classList.add('btn-outline-secondary');
            }
        });

        applyFilters();
    });

    function escapeHtml(text) {
        if (!text) return '';
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }
});
</script>

<style>
.article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 32px rgba(10, 25, 47, 0.12) !important;
}
.hover-primary:hover {
    color: #1D4ED8 !important;
}
</style>
@endsection
