@extends('layouts.front')

@section('title', 'Daftar Skema Sertifikasi SKK Konstruksi | LSP ASTEKINDO')
@section('meta_description', 'Katalog lengkap Skema Sertifikasi Kompetensi Kerja (SKK) Konstruksi lisensi resmi BNSP & LPJK PUPR: Gedung, Jalan Jembatan, Ahli K3 Konstruksi SMKK, dan Manajemen Proyek.')

@section('content')

<!-- Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Skema Sertifikasi</li>
            </ol>
        </nav>
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-award-fill me-1"></i> Standar SKKNI & KKNI
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Lisensi BNSP & LPJK PUPR
            </span>
        </div>
        <h1 class="display-5 fw-bold text-dark mb-2" style="letter-spacing: -0.5px;">
            Skema Sertifikasi Profesi Konstruksi
        </h1>
        <p class="lead text-muted mb-0" style="max-width: 820px; font-size: 1.05rem;">
            Pilih skema sertifikasi kompetensi sesuai kualifikasi pendidikan, pengalaman proyek, dan syarat tender badan usaha Anda di seluruh wilayah Indonesia.
        </p>
    </div>
</section>

<!-- Main List -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <!-- Filter Pills -->
        <div class="d-flex gap-2 flex-wrap mb-4 justify-content-center">
            <a href="{{ route('programs') }}" 
               class="btn btn-sm rounded-pill px-4 py-2 fw-bold {{ !request('category') || request('category') == 'all' ? 'btn-primary' : 'btn-outline-secondary' }}"
               style="{{ !request('category') || request('category') == 'all' ? 'background: #0284C7; border-color: #0284C7;' : '' }}">
                Semua Skema
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('programs', ['category' => $cat]) }}" 
                   class="btn btn-sm rounded-pill px-4 py-2 fw-bold {{ request('category') == $cat ? 'btn-primary' : 'btn-outline-secondary' }}"
                   style="{{ request('category') == $cat ? 'background: #0284C7; border-color: #0284C7;' : '' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>

        <!-- Grid of Schemes -->
        <div class="row g-4">
            @foreach($programs as $prog)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4 d-flex flex-column" 
                     style="background: #ffffff; border: 1px solid #E2E8F0 !important; transition: transform 0.25s ease, box-shadow 0.25s ease;"
                     onmouseover="this.style.borderColor='#BAE6FD'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 28px rgba(2,132,199,0.1)'"
                     onmouseout="this.style.borderColor='#E2E8F0'; this.style.transform='none'; this.style.boxShadow='0 4px 20px -2px rgba(2,132,199,0.06)'">
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill small">
                            {{ $prog->category }}
                        </span>
                        <span class="badge bg-light text-muted border px-2 py-1 rounded-pill small">
                            {{ $prog->code ?? 'SKK-ASTEK' }}
                        </span>
                    </div>

                    <h4 class="fw-bold mb-2" style="font-size: 1.2rem; line-height: 1.4;">
                        <a href="{{ route('program.detail', $prog->slug) }}" class="text-dark text-decoration-none hover-primary">
                            {{ $prog->title }}
                        </a>
                    </h4>

                    <span class="badge bg-info-subtle text-info border border-info-subtle align-self-start px-2 py-1 rounded-pill small mb-3">
                        {{ $prog->jenjang }}
                    </span>

                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.65; font-size: 0.92rem;">
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

@endsection
