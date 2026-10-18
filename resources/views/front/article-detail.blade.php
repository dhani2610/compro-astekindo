@extends('layouts.front')

@section('title', $article->title . ' | Training K3 Konstruksi')
@section('meta_description', Str::limit(strip_tags(is_object($article) ? ($article->excerpt ?? $article->content ?? '') : ''), 160))

@section('content')
<!-- Header Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('articles') }}" class="text-primary text-decoration-none">Artikel & Panduan</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Kajian Teknis</li>
            </ol>
        </nav>

        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-tag-fill me-1"></i> {{ $article->category ?? 'Konstruksi & K3' }}
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Standar SKKNI & SMKK Nasional
            </span>
            @if(isset($article->word_count))
            <span class="badge bg-info-subtle text-info border border-info-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-book-half me-1"></i> {{ $article->word_count }}
            </span>
            @endif
        </div>

        <h1 class="display-6 fw-bold text-dark mb-3" style="letter-spacing: -0.5px; max-width: 950px; line-height: 1.3;">
            {{ $article->title }}
        </h1>

        <div class="d-flex flex-wrap align-items-center gap-4 text-muted small">
            <span><i class="bi bi-person-fill text-primary me-1"></i> Tim Litbang & Instruktur Ahli</span>
            <span><i class="bi bi-calendar3 text-primary me-1"></i> {{ isset($article->published_at) ? \Carbon\Carbon::parse($article->published_at)->isoFormat('D MMMM Y') : 'Terbit Resmi' }}</span>
            <span><i class="bi bi-eye-fill text-success me-1"></i> {{ $article->views ?? '1.240' }} Pembaca</span>
            <span><i class="bi bi-clock-fill text-info me-1"></i> {{ $article->read_time ?? '25 Menit Baca' }}</span>
        </div>
    </div>
</section>

<!-- Reading Body -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content Reader -->
            <div class="col-lg-8">
                <!-- Article Content Card -->
                <div class="card border-0 shadow-sm p-4 p-md-5 mb-4 rounded-4" style="line-height: 1.85; font-size: 1.02rem; color: #1E293B; background: #FFFFFF; border: 1px solid #E2E8F0 !important;">
                    @if(isset($article->thumbnail) && $article->thumbnail)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="img-fluid rounded-4 w-100" style="max-height: 420px; object-fit: cover;">
                    </div>
                    @endif

                    <!-- Content body -->
                    <div class="article-rich-content" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                        {!! $article->content !!}
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
                <div class="card border-0 shadow-sm p-4 text-white" style="background: linear-gradient(135deg, #0284C7, #0EA5E9); border-radius: 18px;">
                    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div>
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">Konsultasi Portofolio</span>
                            <h4 class="fw-bold mb-1">Butuh Pelatihan & Sertifikasi Resmi?</h4>
                            <p class="text-white-50 small mb-0">Hubungi tim konsultan dan instruktur ahli untuk pendampingan pendaftaran skema.</p>
                        </div>
                        <div>
                            <a href="https://api.whatsapp.com/send?phone=628118500177&text={{ urlencode('Halo Training K3 Konstruksi, saya membaca artikel ' . $article->title . ' dan ingin konsultasi sertifikasi keahlian.') }}" target="_blank" class="btn btn-warning text-dark fw-bold px-4 py-2 rounded-pill shadow-sm text-nowrap">
                                <i class="bi bi-whatsapp me-1"></i> Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <!-- Training Center Info Card -->
                <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background: #fff;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary-subtle text-primary p-3 rounded-circle">
                            <i class="bi bi-award-fill fs-3"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Training K3 Konstruksi</h6>
                            <small class="text-muted">Pusat Sertifikasi & Pelatihan</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-3">
                        Pusat pelatihan teknis dan sertifikasi kompetensi konstruksi berstandar SKKNI nasional dengan instruktur ahli berpengalaman.
                    </p>
                    <ul class="list-unstyled small mb-3">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>202 Skema Pelatihan Resmi</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Kurikulum SKKNI & SMKK</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>38 Provinsi Jaringan Pelatihan</li>
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

                <!-- Contact Hotline Card (4 Contacts per client instruction) -->
                <div class="card border-0 shadow-sm p-4" style="border-radius: 16px; background: #fff;">
                    <h6 class="fw-bold text-dark mb-2">Pusat Layanan Konsultasi</h6>
                    <p class="text-muted small mb-3">Layanan konsultasi cepat via WhatsApp resmi:</p>
                    <div class="d-flex flex-column gap-2">
                        <a href="https://api.whatsapp.com/send?phone=628118500177" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2 text-start px-3">
                            <i class="bi bi-whatsapp me-2"></i>Hotline 1: 0811-8500-177
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2 text-start px-3">
                            <i class="bi bi-whatsapp me-2"></i>Hotline 2: 0813-9981-0272
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6287894580806" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2 text-start px-3">
                            <i class="bi bi-whatsapp me-2"></i>Hotline 3: 0878-9458-0806
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6287894580649" target="_blank" class="btn btn-sm btn-outline-success rounded-pill py-2 text-start px-3">
                            <i class="bi bi-whatsapp me-2"></i>Hotline 4: 0878-9458-0649
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
