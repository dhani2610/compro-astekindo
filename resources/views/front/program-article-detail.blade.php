@extends('layouts.front')

@section('title', $articleData['title'])
@section('meta_description', Str::limit(strip_tags($articleData['content']), 160))

@section('content')

<!-- Header Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('programs') }}" class="text-primary text-decoration-none">Skema Sertifikasi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('program.region', [$program->slug, $province['slug'], $kabkot['slug']]) }}" class="text-primary text-decoration-none">{{ $cityName }}</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Panduan Lengkap</li>
            </ol>
        </nav>

        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-geo-alt-fill me-1"></i> {{ $cityName }}, {{ $provinceName }}
            </span>
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold">
                {{ $program->jenjang }}
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Lisensi BNSP & LPJK PUPR
            </span>
            <span class="badge bg-info-subtle text-info border border-info-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-book-half me-1"></i> {{ $articleData['word_count'] ?? '6.400+ Kata SKKNI' }}
            </span>
        </div>

        <h1 class="display-5 fw-bold text-dark mb-3" style="letter-spacing: -0.5px; max-width: 980px; line-height: 1.25;">
            {{ $articleData['title'] }}
        </h1>

        <div class="d-flex flex-wrap align-items-center gap-4 text-muted small">
            <span><i class="bi bi-person-fill text-primary me-1"></i> {{ $articleData['author'] }}</span>
            <span><i class="bi bi-calendar3 text-primary me-1"></i> {{ $articleData['published_at'] }}</span>
            <span><i class="bi bi-check2-all text-success me-1"></i> Standar SKKNI & SMKK PUPR</span>
        </div>
    </div>
</section>

<!-- Reading Body -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <div class="row g-4">
            <!-- Left: Full Rich Text Reader -->
            <div class="col-lg-8">
                <!-- Chapter Navigation Bar -->
                <div class="card border-0 shadow-sm p-3 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #BAE6FD !important;">
                    <div class="d-flex flex-wrap align-items-center gap-2 small">
                        <strong class="text-dark me-2"><i class="bi bi-bookmark-fill text-primary me-1"></i>Daftar Isi Bab:</strong>
                        <a href="#bab-1" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">1. Landasan Hukum</a>
                        <a href="#bab-2" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">2. Legalitas LSP</a>
                        <a href="#bab-3" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">3. Unit SKKNI</a>
                        <a href="#bab-4" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">4. Kajian Teknis</a>
                        <a href="#bab-5" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">5. Geoteknik {{ $cityName }}</a>
                        <a href="#bab-6" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">6. SOP QA/QC</a>
                        <a href="#bab-7" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">7. Prosedur Uji</a>
                        <a href="#bab-8" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">8. Validasi QR SIKI</a>
                        <a href="#bab-9" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">9. FAQ</a>
                        <a href="#bab-10" class="badge bg-light text-primary border text-decoration-none px-3 py-2 rounded-pill">10. Pendaftaran</a>
                    </div>
                </div>

                <!-- Main Article Paper -->
                <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important; font-size: 1.02rem; line-height: 1.85; color: #1E293B;">
                    <div class="article-rich-content" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        {!! $articleData['content'] !!}
                    </div>

                    <!-- Share & Actions -->
                    <div class="pt-4 mt-5 border-top d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted small fw-bold"><i class="bi bi-share me-1"></i>Bagikan:</span>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($articleData['title'] . ' ' . url()->current()) }}" target="_blank" class="btn btn-sm btn-success rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-primary rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" onclick="navigator.clipboard.writeText(window.location.href); alert('Tautan panduan berhasil disalin!');">
                                <i class="bi bi-link-45deg"></i>
                            </button>
                        </div>
                        <a href="{{ route('program.region', [$program->slug, $province['slug'], $kabkot['slug']]) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-1 fw-bold">
                            <i class="bi bi-arrow-left me-1"></i> Kembali ke 200 Artikel {{ $cityName }}
                        </a>
                    </div>
                </div>

                <!-- Kecamatan Coverage Box -->
                @if(count($sampleKecamatan) > 0)
                <div class="card border-0 shadow-sm p-4 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <h5 class="fw-bold text-dark mb-2">
                        <i class="bi bi-pin-map-fill text-primary me-2"></i>Jangkauan Kecamatan Uji Kompetensi di {{ $cityName }}
                    </h5>
                    <p class="text-muted small mb-3">
                        LSP ASTEKINDO melayani pendaftaran uji kompetensi dan konsultasi portofolio mencakup seluruh kecamatan di {{ $cityName }}:
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
                        <span class="badge bg-white text-primary px-3 py-1 rounded-pill fw-bold mb-2 align-self-start">TUK Resmi Wilayah</span>
                        <h4 class="fw-bold mb-2">Pendaftaran di {{ $cityName }}</h4>
                        <p class="text-white-50 small mb-4" style="line-height: 1.6;">
                            Konsultasikan kelengkapan berkas portofolio Anda bersama asesor verifikator LSP ASTEKINDO untuk memastikan kelulusan asesmen.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo LSP ASTEKINDO, saya membaca panduan ' . $articleData['title'] . ' dan ingin konsultasi pendaftaran uji kompetensi.') }}" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill py-2 shadow-sm mb-2">
                            <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp Asesor
                        </a>
                        <a href="{{ route('program.region', [$program->slug, $province['slug'], $kabkot['slug']]) }}" class="btn btn-outline-light rounded-pill py-2 small fw-semibold">
                            <i class="bi bi-grid-fill me-1"></i> Lihat 200 Artikel {{ $cityName }}
                        </a>
                    </div>

                    <!-- LSP Credentials Card -->
                    <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                        <h5 class="fw-bold text-dark mb-3 border-bottom pb-2">Legalitas Penyelenggara</h5>
                        <ul class="list-unstyled small mb-3 d-flex flex-column gap-2 text-muted">
                            <li><strong class="text-dark">Lembaga:</strong> LSP ASTEKINDO P-3</li>
                            <li><strong class="text-dark">Lisensi BNSP:</strong> BNSP-LSP-1897-ID</li>
                            <li><strong class="text-dark">Akreditasi LPJK:</strong> LPJK-SKK-042/2021</li>
                            <li><strong class="text-dark">Masa Berlaku:</strong> 5 Tahun</li>
                            <li><strong class="text-dark">Status:</strong> Terintegrasi SIPJAKI PUPR</li>
                        </ul>
                        <a href="{{ route('about') }}" class="btn btn-sm btn-outline-primary rounded-pill w-100">
                            Profil & Legalitas Lengkap
                        </a>
                    </div>

                    <!-- Hotline Support -->
                    <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                        <h6 class="fw-bold text-dark mb-2">Hotline Konsultasi</h6>
                        <p class="text-muted small mb-3">Senin - Jumat: 08.30 - 17.00 WIB</p>
                        <div class="d-flex flex-column gap-2">
                            <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2">
                                <i class="bi bi-whatsapp me-2"></i>0813-9981-0272
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6281283624838" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2">
                                <i class="bi bi-whatsapp me-2"></i>0812-8362-4838
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
