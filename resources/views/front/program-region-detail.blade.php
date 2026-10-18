@extends('layouts.front')

@section('title', $program->title . ' di ' . $cityName . ' | 202 Program Pelatihan & Sertifikasi K3')
@section('meta_description', 'Direktori 202 program pelatihan dan sertifikasi kompetensi ' . $program->title . ' di ' . $cityName . ', Provinsi ' . $provinceName . '. Berstandar Resmi SKKNI & SMKK.')

@section('content')

<!-- Header Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('programs') }}" class="text-primary text-decoration-none">Skema Sertifikasi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('program.detail', $program->slug) }}" class="text-primary text-decoration-none">{{ $program->title }}</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">{{ $cityName }}</li>
            </ol>
        </nav>

        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-geo-alt-fill me-1"></i> Wilayah {{ $cityName }}
            </span>
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold">
                Provinsi {{ $provinceName }}
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Standar SKKNI & SMKK
            </span>
            <span class="badge bg-info-subtle text-info border border-info-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-journal-check me-1"></i> 202 Program Pelatihan Lengkap
            </span>
        </div>

        <h1 class="display-5 fw-bold text-dark mb-2" style="letter-spacing: -0.5px;">
            {{ $program->title }} di {{ $cityName }}
        </h1>
        <p class="lead text-muted mb-0" style="max-width: 850px; font-size: 1.05rem;">
            Akses resmi 202 program pelatihan teknis, standar pengawasan lapangan, K3 konstruksi, dan prosedur sertifikasi di {{ $cityName }}, Provinsi {{ $provinceName }}.
        </p>
    </div>
</section>

<!-- Content Body with Fast Client-Side JavaScript for 202 Articles -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <div class="row g-4">
            <!-- Left: 202 Articles with Fast JS Filter & Pagination -->
            <div class="col-lg-8">
                <!-- Interactive Filter Toolbar -->
                <div class="card border-0 shadow-sm p-4 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #BAE6FD !important;">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 text-muted ps-3"><i class="bi bi-search"></i></span>
                                <input type="text" id="regionalSearchInput" class="form-control border-start-0 py-2" placeholder="Cari dari 202 program pelatihan di {{ $cityName }}...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-wrap gap-2" id="regionalCatGroup">
                                <button class="btn btn-sm btn-primary rounded-pill px-3 py-1 reg-cat-btn active" data-cat="all">Semua (202)</button>
                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 reg-cat-btn" data-cat="K3 Konstruksi">K3</button>
                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 reg-cat-btn" data-cat="Gedung & Sipil">Gedung</button>
                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 reg-cat-btn" data-cat="Jalan & Jembatan">Jalan</button>
                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 reg-cat-btn" data-cat="Manajemen Proyek">Manajemen</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Articles Dynamic Container -->
                <div id="regionalArticlesList" class="d-flex flex-column gap-3 mb-4">
                    <!-- Rendered by JavaScript for instant, zero-lag performance -->
                </div>

                <!-- Client-Side Pagination -->
                <div id="regionalPagination" class="d-flex justify-content-center align-items-center gap-2 mb-5">
                    <!-- Rendered by JS -->
                </div>

                <!-- Kecamatan Coverage Section -->
                @if(count($sampleKecamatan) > 0)
                <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">
                        <i class="bi bi-geo-alt-fill text-primary me-2"></i>Cakupan Wilayah Kecamatan di {{ $cityName }}
                    </h4>
                    <p class="text-muted small mb-3">
                        Layanan konsultasi berkas portofolio dan jadwal uji kompetensi Training K3 Konstruksi menjangkau seluruh kecamatan di {{ $cityName }}:
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($sampleKecamatan as $kec)
                        <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill small">
                            Kec. {{ $kec }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4" style="position: sticky; top: 100px;">
                    <!-- Registration Card -->
                    <div class="card border-0 shadow-sm p-4 rounded-4 text-white" style="background: linear-gradient(135deg, #0284C7, #0EA5E9);">
                        <span class="badge bg-white text-primary px-3 py-1 rounded-pill fw-bold mb-2 align-self-start">Tempat Uji Kompetensi</span>
                        <h4 class="fw-bold mb-2">Daftar di {{ $cityName }}</h4>
                        <p class="text-white-50 small mb-4" style="line-height: 1.6;">
                            Tim verifikator TUK {{ $cityName }}, Provinsi {{ $provinceName }} siap membantu pengecekan portofolio teknis Anda secara gratis sebelum jadwal asesmen.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=628118500177&text={{ urlencode('Halo Training K3 Konstruksi, saya ingin daftar uji kompetensi ' . $program->title . ' di ' . $cityName) }}" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill py-2 mb-2 shadow-sm">
                            <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp TUK
                        </a>
                        <a href="{{ route('program.detail', $program->slug) }}" class="btn btn-outline-light rounded-pill py-2 small fw-semibold">
                            <i class="bi bi-arrow-left me-1"></i> Pilih Kota / Wilayah Lain
                        </a>
                    </div>

                    <!-- Program Summary -->
                    <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                        <h5 class="fw-bold text-dark mb-3 border-bottom pb-2">Informasi Skema</h5>
                        <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-muted">
                            <li><strong class="text-dark">Kode Skema:</strong> {{ $program->code ?? '-' }}</li>
                            <li><strong class="text-dark">Kategori:</strong> {{ $program->category }}</li>
                            <li><strong class="text-dark">Jenjang KKNI:</strong> {{ $program->jenjang }}</li>
                            <li><strong class="text-dark">Durasi:</strong> {{ $program->duration ?: '3 Hari' }}</li>
                            <li><strong class="text-dark">Standar:</strong> SKKNI & SMKK Nasional</li>
                        </ul>
                    </div>

                    <!-- Hotline Support -->
                    <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                        <h6 class="fw-bold text-dark mb-2">Bantuan Konsultasi</h6>
                        <p class="text-muted small mb-3">Layanan konsultasi asesmen via telepon dan WhatsApp resmi:</p>
                        <div class="d-flex flex-column gap-2">
                            <a href="https://api.whatsapp.com/send?phone=628118500177" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2">
                                <i class="bi bi-whatsapp me-2"></i>Hotline WhatsApp: 0811-8500-177
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client-Side Vanilla JS: Instant, Zero Server Lag for 200 Articles -->
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const rawArticles = @json($articles);
    let filtered = [...rawArticles];
    let currentPage = 1;
    const perPage = 12;
    let selectedCat = 'all';
    let searchQuery = '';

    const listContainer = document.getElementById('regionalArticlesList');
    const pagination = document.getElementById('regionalPagination');
    const searchInput = document.getElementById('regionalSearchInput');
    const catButtons = document.querySelectorAll('.reg-cat-btn');

    function filterData() {
        const query = searchQuery.trim().toLowerCase();
        filtered = rawArticles.filter(item => {
            const matchCat = (selectedCat === 'all') || (item.category === selectedCat);
            const matchQuery = (!query) ||
                (item.title && item.title.toLowerCase().includes(query)) ||
                (item.category && item.category.toLowerCase().includes(query));
            return matchCat && matchQuery;
        });

        currentPage = 1;
        render();
    }

    function render() {
        if (filtered.length === 0) {
            listContainer.innerHTML = `
                <div class="card border-0 shadow-sm p-5 text-center rounded-4 bg-white">
                    <i class="bi bi-file-earmark-x display-4 text-muted mb-3"></i>
                    <h5 class="fw-bold text-dark">Topik Panduan Tidak Ditemukan</h5>
                    <p class="text-muted small">Coba ubah kata kunci pencarian atau pilih kategori lain.</p>
                </div>
            `;
            pagination.innerHTML = '';
            return;
        }

        const start = (currentPage - 1) * perPage;
        const end = start + perPage;
        const pageItems = filtered.slice(start, end);

        let html = '';
        pageItems.forEach((art, idx) => {
            const articleUrl = `{{ url('/skema-sertifikasi/' . $program->slug . '/wilayah/' . $province['slug'] . '/' . $kabkot['slug']) }}/${art.slug}`;
            html += `
            <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important; transition: all 0.25s ease;"
                 onmouseover="this.style.borderColor='#BAE6FD'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 28px rgba(2,132,199,0.1)'"
                 onmouseout="this.style.borderColor='#E2E8F0'; this.style.transform='none'; this.style.boxShadow='0 4px 20px -2px rgba(2,132,199,0.06)'">
                <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary text-white rounded-pill px-2 py-1" style="font-size: 0.72rem; background: #0284C7 !important;">
                            #${art.id}
                        </span>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill" style="font-size: 0.72rem;">
                            ${escapeHtml(art.category)}
                        </span>
                    </div>
                    <span class="text-muted small" style="font-size: 0.75rem;"><i class="bi bi-clock me-1 text-primary"></i>${escapeHtml(art.read_time)}</span>
                </div>

                <h4 class="fw-bold mb-2" style="font-size: 1.15rem; line-height: 1.45;">
                    <a href="${articleUrl}" class="text-dark text-decoration-none hover-primary">
                        ${escapeHtml(art.title)}
                    </a>
                </h4>

                <p class="text-muted small mb-3" style="line-height: 1.6;">
                    ${escapeHtml(art.excerpt)}
                </p>

                <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill" style="font-size: 0.72rem;">
                        <i class="bi bi-shield-check me-1"></i> Standar SKKNI & SMKK
                    </span>
                    <a href="${articleUrl}" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 fw-bold">
                        Buka Panduan Lengkap <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>`;
        });

        listContainer.innerHTML = html;
        renderPagination();
    }

    function renderPagination() {
        const totalPages = Math.ceil(filtered.length / perPage);
        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }

        let pgn = '';
        pgn += `
            <button class="btn btn-outline-secondary btn-sm rounded-pill px-3 ${currentPage === 1 ? 'disabled' : ''}" 
                onclick="window.goToRegPage(${currentPage - 1})">
                <i class="bi bi-chevron-left me-1"></i> Sebelumnya
            </button>
        `;

        const maxButtons = 5;
        let startPage = Math.max(1, currentPage - 2);
        let endPage = Math.min(totalPages, startPage + maxButtons - 1);
        if (endPage - startPage < maxButtons - 1) {
            startPage = Math.max(1, endPage - maxButtons + 1);
        }

        for (let i = startPage; i <= endPage; i++) {
            pgn += `
                <button class="btn btn-sm rounded-circle ${i === currentPage ? 'btn-primary text-white fw-bold' : 'btn-outline-light text-dark'}" 
                    style="width: 34px; height: 34px; padding: 0; ${i === currentPage ? 'background: #0284C7; border-color: #0284C7;' : ''}"
                    onclick="window.goToRegPage(${i})">${i}</button>
            `;
        }

        pgn += `
            <button class="btn btn-outline-secondary btn-sm rounded-pill px-3 ${currentPage === totalPages ? 'disabled' : ''}" 
                onclick="window.goToRegPage(${currentPage + 1})">
                Berikutnya <i class="bi bi-chevron-right ms-1"></i>
            </button>
        `;

        pagination.innerHTML = pgn;
    }

    window.goToRegPage = function(page) {
        currentPage = page;
        render();
        window.scrollTo({ top: listContainer.offsetTop - 120, behavior: 'smooth' });
    };

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            searchQuery = e.target.value;
            filterData();
        });
    }

    catButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            catButtons.forEach(b => {
                b.classList.remove('active', 'btn-primary');
                b.classList.add('btn-outline-secondary');
            });
            this.classList.add('active', 'btn-primary');
            this.classList.remove('btn-outline-secondary');

            selectedCat = this.getAttribute('data-cat');
            filterData();
        });
    });

    function escapeHtml(text) {
        if (!text) return '';
        const map = { '&': '&amp;', '<': '&lt;', ' ': ' ', '"': '&quot;', "'": '&#039;' };
        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }

    render();
});
</script>
@endpush

@endsection
