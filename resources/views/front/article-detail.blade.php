@extends('layouts.front')

@section('title', $article->title . ' | LSP ASTEKINDO')
@section('meta_description', Str::limit(strip_tags(is_object($article) ? ($article->excerpt ?? $article->content ?? '') : ''), 160))

@section('content')
<!-- Header Banner -->
<section style="background: linear-gradient(135deg, var(--primary-navy-dark), var(--primary-navy)); padding: 60px 0 50px; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
        <div style="display: flex; gap: 8px; font-size: 0.82rem; color: #94a3b8; margin-bottom: 16px; align-items: center; flex-wrap: wrap;">
            <a href="{{ route('home') }}" style="color: #94a3b8; text-decoration: none;">Beranda</a>
            <i class="bi bi-chevron-right"></i>
            <a href="{{ route('articles') }}" style="color: #94a3b8; text-decoration: none;">Artikel & Panduan</a>
            <i class="bi bi-chevron-right"></i>
            <span style="color: var(--safety-gold);">Kajian Teknis</span>
        </div>

        <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
            <span style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold); font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                <i class="bi bi-tag-fill"></i> {{ $article->category ?? 'Konstruksi & K3' }}
            </span>
            <span style="background: rgba(16, 185, 129, 0.2); color: #34d399; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                <i class="bi bi-shield-check"></i> Lisensi BNSP & LPJK PUPR
            </span>
        </div>

        <h1 style="font-size: 2.2rem; font-weight: 900; line-height: 1.3; margin-bottom: 16px; letter-spacing: -0.5px; max-width: 950px;">
            {{ $article->title }}
        </h1>

        <div style="display: flex; gap: 20px; font-size: 0.84rem; color: #cbd5e1; align-items: center; flex-wrap: wrap;">
            <span><i class="bi bi-person-fill" style="color: var(--safety-gold);"></i> Tim Litbang LSP ASTEKINDO</span>
            <span><i class="bi bi-calendar3" style="color: var(--safety-gold);"></i> {{ isset($article->published_at) ? \Carbon\Carbon::parse($article->published_at)->isoFormat('D MMMM Y') : 'Terbit Resmi' }}</span>
            <span><i class="bi bi-eye-fill" style="color: #34d399;"></i> {{ $article->views ?? '1.240' }} Pembaca</span>
            <span><i class="bi bi-clock-fill" style="color: #60a5fa;"></i> {{ $article->read_time ?? '8 Menit Baca' }}</span>
        </div>
    </div>
</section>

<!-- Reading Body -->
<section style="padding: 60px 0 90px; background: #f8fafc;">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content Reader -->
            <div class="col-lg-8">
                <!-- Article Content Card -->
                <div class="card border-0 shadow-sm p-4 p-md-5 mb-4" style="border-radius: 18px; line-height: 1.85; font-size: 1.02rem; color: #1e293b; background: #fff;">
                    @if(isset($article->thumbnail) && $article->thumbnail)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="img-fluid rounded-4 w-100" style="max-height: 420px; object-fit: cover;">
                    </div>
                    @endif

                    <!-- Content body -->
                    <div class="article-body-text" style="white-space: pre-line; font-family: 'Plus Jakarta Sans', sans-serif;">
                        {!! nl2br(e($article->content)) !!}
                    </div>

                    <!-- Share & Keywords -->
                    <div class="pt-4 mt-5 border-top d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted small fw-bold"><i class="bi bi-share me-1"></i>Bagikan:</span>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . url()->current()) }}" target="_blank" class="btn btn-sm btn-success rounded-circle" style="width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-primary rounded-circle" style="width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;" onclick="navigator.clipboard.writeText(window.location.href); alert('Link artikel berhasil disalin!');">
                                <i class="bi bi-link-45deg"></i>
                            </button>
                        </div>
                        <a href="{{ route('articles') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1">
                            <i class="bi bi-arrow-left me-1"></i> Kembali ke Katalog 200 Artikel
                        </a>
                    </div>
                </div>

                <!-- Consultation CTA Box -->
                <div class="card border-0 shadow-sm p-4 text-white" style="background: linear-gradient(135deg, #0A192F, #1D4ED8); border-radius: 18px;">
                    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div>
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">Konsultasi Portofolio</span>
                            <h4 class="fw-bold mb-1">Butuh Uji Kompetensi & Sertifikat BNSP Resmi?</h4>
                            <p class="text-white-50 small mb-0">Hubungi asesor dan tim verifikasi berkas LSP ASTEKINDO untuk pendampingan pendaftaran skema.</p>
                        </div>
                        <div>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo LSP ASTEKINDO, saya membaca artikel ' . $article->title . ' dan ingin konsultasi uji kompetensi sertifikasi BNSP.') }}" target="_blank" class="btn btn-warning text-dark fw-bold px-4 py-2 rounded-pill shadow-sm text-nowrap">
                                <i class="bi bi-whatsapp me-1"></i> Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <!-- LSP Accreditation Card -->
                <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background: #fff;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary-subtle text-primary p-3 rounded-circle">
                            <i class="bi bi-award-fill fs-3"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">LSP ASTEKINDO</h6>
                            <small class="text-muted">Konstruksi Mandiri</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-3">
                        Lembaga Sertifikasi Profesi Pihak Ketiga (LSP-P3) terlisensi resmi Badan Nasional Sertifikasi Profesi (BNSP) dan terakreditasi LPJK Kementerian PUPR.
                    </p>
                    <ul class="list-unstyled small mb-3">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Lisensi BNSP-LSP-1897-ID</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Akreditasi LPJK-SKK-042/2021</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>38 Provinsi Jaringan TUK</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                        Profil & Legalitas Lengkap
                    </a>
                </div>

                <!-- Latest Articles -->
                @if(isset($latestArticles) && count($latestArticles) > 0)
                <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background: #fff;">
                    <h6 class="fw-bold text-dark mb-3">Artikel Rekomendasi Terkait</h6>
                    <div class="d-flex flex-column gap-3">
                        @foreach($latestArticles as $latest)
                        <div class="pb-2 border-bottom">
                            <a href="{{ route('article.detail', $latest->slug) }}" class="text-decoration-none text-dark fw-semibold small hover-primary" style="line-height: 1.4; display: block;">
                                {{ $latest->title }}
                            </a>
                            <small class="text-muted" style="font-size: 0.75rem;">
                                <i class="bi bi-calendar3 me-1"></i>{{ \Carbon\Carbon::parse($latest->published_at)->diffForHumans() }}
                            </small>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Contact Hotline Card -->
                <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background: #fff;">
                    <h6 class="fw-bold text-dark mb-2">Pusat Layanan Konsultasi</h6>
                    <p class="text-muted small mb-3">Senin - Jumat: 08.00 - 17.00 WIB</p>
                    <div class="d-flex flex-column gap-2">
                        <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2">
                            <i class="bi bi-whatsapp me-2"></i>Hotline 1: 0813-9981-0272
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281283624838" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2">
                            <i class="bi bi-whatsapp me-2"></i>Hotline 2: 0812-8362-4838
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
