@extends('layouts.front')

@section('title', 'Training K3 Konstruksi | Sertifikasi SKK Konstruksi Berlisensi BNSP & LPJK')
@section('meta_description', 'Penyelenggara Training K3 Konstruksi dan Fasilitasi Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Konstruksi resmi berlisensi BNSP & terdaftar LPJK di 38 provinsi di Indonesia.')

@section('content')

<!-- 1. HERO SLIDER SECTION (Modern Light Blue & White Aesthetic) -->
<section class="position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 40%, #FFFFFF 100%); min-height: 580px; display: flex; align-items: center;">
    <div class="container py-4 position-relative" style="z-index: 2;">
        @foreach($slides as $index => $slide)
        <div class="hero-slide-item {{ $index === 0 ? 'd-block' : 'd-none' }}" id="hero-slide-{{ $index }}">
            <div class="row align-items-center g-5">
                <!-- Left Text Content -->
                <div class="col-lg-7">
                    @if($slide->badge)
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3" style="background: #E0F2FE; border: 1px solid #BAE6FD; color: #0284C7; font-size: 0.8rem; font-weight: 800; text-transform: uppercase;">
                        <i class="bi bi-patch-check-fill"></i> {{ $slide->badge }}
                    </div>
                    @endif

                    <h1 class="display-4 fw-bold text-dark mb-3" style="letter-spacing: -0.8px; line-height: 1.15;">
                        {{ $slide->title }}
                    </h1>

                    <p class="lead text-muted mb-4" style="font-size: 1.12rem; max-width: 620px; line-height: 1.7;">
                        {{ $slide->subtitle }}
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="{{ $slide->cta_link ?: '#skema-sertifikasi' }}" class="btn btn-primary fw-bold px-4 py-3 rounded-pill shadow-sm" style="background: linear-gradient(135deg, #0284C7, #0EA5E9); border: none; font-size: 0.95rem;">
                            <i class="bi bi-award-fill me-2"></i>{{ $slide->cta_text ?: 'Lihat Skema Sertifikasi' }}
                        </a>
                        <a href="{{ $slide->cta2_link ?: 'https://api.whatsapp.com/send?phone=628118500177' }}" target="_blank" class="btn btn-outline-primary fw-bold px-4 py-3 rounded-pill" style="border-color: #0284C7; color: #0284C7; font-size: 0.95rem;">
                            <i class="bi bi-whatsapp me-2"></i>{{ $slide->cta2_text ?: 'Konsultasi Syarat SKK' }}
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="d-flex align-items-center gap-4 mt-4 pt-3 border-top border-primary-subtle text-muted small">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-fill-check text-success fs-5"></i>
                            <span>Standar Mutu SKKNI</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-building-check text-primary fs-5"></i>
                            <span>Standar Nasional Konstruksi</span>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Box (Clean Vector Graphic Illustration, No Broken Images) -->
                <div class="col-lg-5">
                    <div class="position-relative">
                        <!-- Main Card -->
                        <div class="card border-0 shadow-lg p-4 p-md-5 rounded-4" style="background: #ffffff; border: 1px solid #BAE6FD !important;">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                                    <i class="bi bi-award-fill me-1"></i> Standar Nasional SMKK
                                </span>
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                                    <i class="bi bi-check-circle-fill me-1"></i> SIPJAKI Terintegrasi
                                </span>
                            </div>

                            <!-- Modern Vector Graphic Banner -->
                            <div class="p-4 rounded-3 text-center mb-4" style="background: linear-gradient(135deg, #0284C7, #0EA5E9); color: #ffffff;">
                                <div class="bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 70px; height: 70px;">
                                    <i class="bi bi-shield-check display-6"></i>
                                </div>
                                <h4 class="fw-bold text-white mb-1">Sertifikasi SKK Konstruksi</h4>
                                <p class="small text-white-50 mb-0">Penjamin Mutu & Kompetensi Tenaga Ahli Standar Nasional</p>
                            </div>

                            <!-- Benefits List -->
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-light">
                                    <div class="bg-primary text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                        <i class="bi bi-check-lg fw-bold"></i>
                                    </div>
                                    <div class="small fw-semibold text-dark">Syarat Mutlak Penanggung Jawab Teknis Badan Usaha (PJTBU)</div>
                                </div>
                                <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-light">
                                    <div class="bg-primary text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                        <i class="bi bi-check-lg fw-bold"></i>
                                    </div>
                                    <div class="small fw-semibold text-dark">Kualifikasi Wajib Tender Proyek LPSE / APBN / BUMN</div>
                                </div>
                                <div class="d-flex align-items-center gap-3 p-2 rounded-3 bg-light">
                                    <div class="bg-primary text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                        <i class="bi bi-check-lg fw-bold"></i>
                                    </div>
                                    <div class="small fw-semibold text-dark">Asesmen Cepat & Transparan di 38 Provinsi Indonesia</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Certification Pill -->
                        <div class="position-absolute bottom-0 start-0 translate-middle-y ms-n3 p-3 bg-white shadow rounded-4 border d-flex align-items-center gap-3" style="max-width: 280px; z-index: 3;">
                            <div class="bg-success text-white rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                                <i class="bi bi-file-earmark-check-fill fs-5"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small">Sertifikat Resmi BNSP</div>
                                <small class="text-muted" style="font-size: 0.72rem;">Berlaku 5 Tahun & QR-Code LPJK</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Slider Pagination Dots -->
        @if(count($slides) > 1)
        <div class="d-flex justify-content-center gap-2 mt-4 pt-2">
            @foreach($slides as $idx => $s)
            <button class="btn p-0 rounded-pill {{ $idx === 0 ? 'bg-primary' : 'bg-secondary bg-opacity-25' }}" 
                    style="width: {{ $idx === 0 ? '30px' : '10px' }}; height: 10px; border: none; transition: all 0.3s ease;" 
                    onclick="switchHeroSlide({{ $idx }})" 
                    aria-label="Slide {{ $idx + 1 }}"></button>
            @endforeach
        </div>
        @endif
    </div>
</section>

<!-- 2. COUNTER STATISTIK BERANDA (Editable via Admin Panel) -->
<section class="py-4 position-relative" style="margin-top: -30px; z-index: 10;">
    <div class="container">
        <div class="card border-0 shadow-sm p-4 p-lg-4 rounded-4" style="background: #ffffff; border: 1px solid #BAE6FD !important;">
            <div class="row g-4 text-center divide-lg">
                @foreach($statistics as $stat)
                <div class="col-12 col-md-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="text-primary mb-2" style="font-size: 1.8rem;">
                            <i class="{{ $stat->icon ?: 'bi bi-award' }}"></i>
                        </div>
                        <h2 class="display-6 fw-bold text-dark mb-0" style="color: #0284C7 !important;">
                            {{ $stat->value }}<span class="fs-4">{{ $stat->unit }}</span>
                        </h2>
                        <span class="text-muted small fw-semibold mt-1">{{ $stat->label }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 3. KEUNGGULAN TRAINING K3 KONSTRUKSI -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                Mengapa Memilih Kami?
            </span>
            <h2 class="display-6 fw-bold text-dark mb-3">Keunggulan Layanan Training K3 Konstruksi</h2>
            <p class="text-muted">
                Sebagai penyelenggara sertifikasi dan pelatihan kompetensi resmi, kami memberikan kepastian proses yang kredibel, cepat, dan diakui secara legal dalam tender proyek konstruksi nasional.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4 text-center" style="background: #F0F9FF; border: 1px solid #BAE6FD !important;">
                    <div class="bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 58px; height: 58px;">
                        <i class="bi bi-patch-check-fill fs-3 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Lisensi Resmi BNSP</h5>
                    <p class="text-muted small mb-0">Terlisensi langsung oleh Badan Nasional Sertifikasi Profesi sesuai standar ISO 17024.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4 text-center" style="background: #F0F9FF; border: 1px solid #BAE6FD !important;">
                    <div class="bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 58px; height: 58px;">
                        <i class="bi bi-geo-alt-fill fs-3 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Jaringan 38 Provinsi</h5>
                    <p class="text-muted small mb-0">Tempat Uji Kompetensi (TUK) hadir di seluruh provinsi dan kota untuk kemudahan asesmen.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. SKEMA SERTIFIKASI UNGGULAN -->
<section class="py-5" id="skema-sertifikasi" style="background: #F8FAFC;">
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
            <div>
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    Skema Standar BNSP
                </span>
                <h2 class="display-6 fw-bold text-dark mb-0">Skema Sertifikasi Kompetensi Unggulan</h2>
            </div>
            <a href="{{ route('programs') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold mt-3 mt-md-0">
                Lihat Semua Skema <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-4">
            @foreach($programs as $prog)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4 d-flex flex-column" style="background: #ffffff; border: 1px solid #E2E8F0 !important; transition: transform 0.25s ease, box-shadow 0.25s ease;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill small">
                            {{ $prog->category }}
                        </span>
                        <span class="badge bg-light text-muted border px-2 py-1 rounded-pill small">
                            {{ $prog->jenjang }}
                        </span>
                    </div>

                    <h4 class="fw-bold mb-3" style="font-size: 1.2rem; line-height: 1.4;">
                        <a href="{{ route('program.detail', $prog->slug) }}" class="text-dark text-decoration-none hover-primary">
                            {{ $prog->title }}
                        </a>
                    </h4>

                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                        {{ $prog->short_description }}
                    </p>

                    <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-clock me-1 text-primary"></i>{{ $prog->duration ?: '3 Hari' }}</span>
                        <a href="{{ route('program.detail', $prog->slug) }}" class="btn btn-sm btn-primary rounded-pill px-3 py-1 fw-bold" style="background: #0284C7; border-color: #0284C7;">
                            Pilih Wilayah <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 5. DIREKTORI WILAYAH 38 PROVINSI & 514 KOTA (REDESIGNED: Clean, Modern, Light-Themed, No Nested Scrollbars) -->
<section class="py-5 bg-white" id="wilayah-sertifikasi">
    <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                <i class="bi bi-geo-alt-fill me-1"></i> Cakupan Seluruh Nusantara
            </span>
            <h2 class="display-6 fw-bold text-dark mb-3">Direktori TUK di 38 Provinsi & 514 Kabupaten / Kota</h2>
            <p class="text-muted">
                Temukan jadwal asesmen portofolio dan uji kompetensi langsung di Tempat Uji Kompetensi (TUK) resmi terdekat di kota Anda.
            </p>
        </div>

        <!-- Filter Controls: Island Tabs & Live Search Bar -->
        <div class="card border-0 shadow-sm p-4 rounded-4 mb-4" style="background: #F0F9FF; border: 1px solid #BAE6FD !important;">
            <!-- Island Filter Buttons -->
            <div class="d-flex flex-wrap gap-2 justify-content-center mb-3" id="islandFilterGroup">
                <button class="btn btn-sm btn-primary rounded-pill px-3 py-1 island-btn active" data-island="all">Semua Pulau (38)</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Sumatera">Sumatera</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Jawa">Jawa</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Kalimantan">Kalimantan</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Sulawesi">Sulawesi</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Bali & Nusa Tenggara">Bali & Nusa Tenggara</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Maluku">Maluku</button>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1 island-btn" data-island="Papua">Papua</button>
            </div>

            <!-- Live Search Input -->
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted ps-3">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" id="regionLiveSearchInput" class="form-control border-start-0 py-2" placeholder="Cari nama Provinsi atau Kabupaten / Kota..." aria-label="Search Region">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modern Province Cards Grid -->
        <div class="row g-4" id="provincesCardsContainer">
            @foreach($provinces as $prov)
            <div class="col-md-6 col-lg-4 province-card-col" data-island="{{ $prov['island'] }}" data-provname="{{ strtolower($prov['name']) }}">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4 province-card-modern" style="background: #ffffff; border: 1px solid #E2E8F0 !important; transition: all 0.25s ease;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold text-dark mb-0">{{ $prov['name'] }}</h5>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill small">
                            {{ count($prov['kabkot']) }} Kota/Kab
                        </span>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge bg-light text-muted border" style="font-size: 0.72rem;">Pulau {{ $prov['island'] }}</span>
                        <small class="text-muted" style="font-size: 0.75rem;">Layanan Asesmen TUK</small>
                    </div>

                    <!-- Clean City Pill Badges (First 6 cities + expander button, NO nested scrollbar) -->
                    <div class="city-pills-wrap mb-3">
                        @php
                            $kabkotList = $prov['kabkot'];
                            $visibleCities = array_slice($kabkotList, 0, 5);
                            $hiddenCities = array_slice($kabkotList, 5);
                            $provSlug = $prov['slug'];
                            $defaultProgSlug = $programs->first()?->slug ?? 'training-pelaksana-pengeboran-air-tanah-level-4';
                        @endphp

                        @foreach($visibleCities as $kk)
                            @php
                                $kkName = is_array($kk) ? $kk['name'] : $kk;
                                $kkSlug = is_array($kk) ? $kk['slug'] : Str::slug($kk);
                            @endphp
                            <a href="{{ route('program.region', [$defaultProgSlug, $provSlug, $kkSlug]) }}" 
                               class="city-pill-btn" 
                               data-cityname="{{ strtolower($kkName) }}">
                                {{ $kkName }}
                            </a>
                        @endforeach

                        @if(count($hiddenCities) > 0)
                            <div class="hidden-cities-box d-none" id="hidden-cities-{{ $provSlug }}">
                                @foreach($hiddenCities as $kk)
                                    @php
                                        $kkName = is_array($kk) ? $kk['name'] : $kk;
                                        $kkSlug = is_array($kk) ? $kk['slug'] : Str::slug($kk);
                                    @endphp
                                    <a href="{{ route('program.region', [$defaultProgSlug, $provSlug, $kkSlug]) }}" 
                                       class="city-pill-btn" 
                                       data-cityname="{{ strtolower($kkName) }}">
                                        {{ $kkName }}
                                    </a>
                                @endforeach
                            </div>

                            <button class="btn btn-sm btn-outline-secondary rounded-pill toggle-cities-btn mt-2 py-1 px-3" 
                                    type="button" 
                                    onclick="toggleMoreCities('{{ $provSlug }}', this)">
                                +{{ count($hiddenCities) }} Kota Lainnya
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 6. PORTOFOLIO PROYEK SERTIFIKASI (Our Projects) -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
            <div>
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    Portofolio Nyata
                </span>
                <h2 class="display-6 fw-bold text-dark mb-0">Proyek Strategis Nasional Bersertifikat</h2>
            </div>
            <a href="{{ route('projects') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold mt-3 mt-md-0">
                Lihat Semua Proyek <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-4">
            @foreach($projects as $p)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <div class="p-4" style="background: linear-gradient(135deg, #0284C7, #0EA5E9); color: #ffffff;">
                        <span class="badge bg-white text-primary px-3 py-1 rounded-pill fw-bold mb-2">{{ $p->category }}</span>
                        <h5 class="fw-bold text-white mb-1">{{ $p->title }}</h5>
                        <small class="text-white-50"><i class="bi bi-building me-1"></i>{{ $p->client_name }} &bull; {{ $p->year }}</small>
                    </div>
                    <div class="p-4 d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ $p->description }}
                        </p>
                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill small">
                                <i class="bi bi-check-circle-fill me-1"></i>Terverifikasi
                            </span>
                            <a href="https://api.whatsapp.com/send?phone=628118500177&text={{ urlencode('Halo Training K3 Konstruksi, saya ingin konsultasi sertifikasi untuk proyek seperti ' . $p->title) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                Konsultasi <i class="bi bi-whatsapp ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 7. TIGA CARD ARTIKEL TERBARU (Sesuai Permintaan User) -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
            <div>
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    Artikel & Panduan
                </span>
                <h2 class="display-6 fw-bold text-dark mb-0">Artikel & Kajian Ilmiah Terkini</h2>
            </div>
            <a href="{{ route('articles') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold mt-3 mt-md-0">
                Katalog 200 Artikel <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-4">
            @foreach($latestArticles as $art)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4 d-flex flex-column" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill small align-self-start mb-3">
                        {{ $art->category }}
                    </span>
                    <h5 class="fw-bold mb-3" style="line-height: 1.4;">
                        <a href="{{ route('article.detail', $art->slug) }}" class="text-dark text-decoration-none hover-primary">
                            {{ $art->title }}
                        </a>
                    </h5>
                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                        {{ $art->excerpt }}
                    </p>
                    <div class="pt-3 border-top d-flex justify-content-between align-items-center text-muted small">
                        <span><i class="bi bi-calendar3 me-1 text-primary"></i>{{ $art->published_at ? \Carbon\Carbon::parse($art->published_at)->diffForHumans() : 'Baru' }}</span>
                        <a href="{{ route('article.detail', $art->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                            Baca <i class="bi bi-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- 8. KLIEN & PARTNER BUMN -->
<section class="py-5" style="background: #F0F9FF; border-top: 1px solid #BAE6FD; border-bottom: 1px solid #BAE6FD;">
    <div class="container text-center">
        <span class="badge bg-white text-primary border px-3 py-2 rounded-pill fw-bold mb-3 shadow-sm">
            Kemitraan Terpercaya
        </span>
        <h3 class="fw-bold text-dark mb-4">Dipercaya oleh Kontraktor Terbesar di Indonesia</h3>
        <div class="row g-3 justify-content-center">
            @foreach($clients as $c)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="p-3 bg-white rounded-3 shadow-sm border border-primary-subtle fw-bold text-secondary small">
                    <i class="bi bi-building me-2 text-primary"></i>{{ $c->name }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.city-pill-btn {
    display: inline-block;
    font-size: 0.78rem;
    font-weight: 600;
    color: #0369A1;
    background: #F0F9FF;
    border: 1px solid #BAE6FD;
    padding: 3px 10px;
    border-radius: 20px;
    text-decoration: none;
    margin: 2px 2px;
    transition: all 0.2s ease;
}
.city-pill-btn:hover {
    background: #0284C7;
    color: #ffffff;
    border-color: #0284C7;
}
.hover-primary:hover {
    color: #0284C7 !important;
}
.province-card-modern:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(2, 132, 199, 0.12) !important;
    border-color: #BAE6FD !important;
}
</style>

@push('scripts')
<script>
    // Toggle hidden cities in modern province cards
    function toggleMoreCities(provSlug, btn) {
        const box = document.getElementById('hidden-cities-' + provSlug);
        if (box) {
            if (box.classList.contains('d-none')) {
                box.classList.remove('d-none');
                btn.textContent = 'Sembunyikan';
            } else {
                box.classList.add('d-none');
                btn.textContent = '+ Kota Lainnya';
            }
        }
    }

    // Hero Slide Switcher
    function switchHeroSlide(idx) {
        const slides = document.querySelectorAll('.hero-slide-item');
        slides.forEach((s, i) => {
            if (i === idx) {
                s.classList.remove('d-none');
                s.classList.add('d-block');
            } else {
                s.classList.remove('d-block');
                s.classList.add('d-none');
            }
        });
    }

    // Interactive Region Filter & Live Search
    document.addEventListener('DOMContentLoaded', function() {
        const islandBtns = document.querySelectorAll('.island-btn');
        const searchInput = document.getElementById('regionLiveSearchInput');
        const cards = document.querySelectorAll('.province-card-col');
        let currentIsland = 'all';
        let query = '';

        function filterRegions() {
            cards.forEach(card => {
                const island = card.getAttribute('data-island');
                const provName = card.getAttribute('data-provname');
                const cityLinks = card.querySelectorAll('.city-pill-btn');

                let cityMatch = false;
                cityLinks.forEach(cl => {
                    const cName = cl.getAttribute('data-cityname');
                    if (query && cName && cName.includes(query)) {
                        cityMatch = true;
                    }
                });

                const matchIsland = (currentIsland === 'all') || (island === currentIsland);
                const matchQuery = (!query) || (provName && provName.includes(query)) || cityMatch;

                if (matchIsland && matchQuery) {
                    card.classList.remove('d-none');
                } else {
                    card.classList.add('d-none');
                }
            });
        }

        islandBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                islandBtns.forEach(b => {
                    b.classList.remove('active', 'btn-primary');
                    b.classList.add('btn-outline-primary');
                });
                this.classList.add('active', 'btn-primary');
                this.classList.remove('btn-outline-primary');

                currentIsland = this.getAttribute('data-island');
                filterRegions();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                query = e.target.value.trim().toLowerCase();
                filterRegions();
            });
        }
    });
</script>
@endpush

@endsection
