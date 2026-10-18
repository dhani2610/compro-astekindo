@extends('layouts.front')

@section('title', 'Portofolio Proyek Sertifikasi Nasional | LSP ASTEKINDO')
@section('meta_description', 'Dokumentasi keterlibatan sertifikasi tenaga ahli dan pengawas konstruksi LSP ASTEKINDO pada proyek strategis nasional (PSN) se-Indonesia.')

@section('content')
<!-- Header Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Proyek Sertifikasi</li>
            </ol>
        </nav>
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-briefcase-fill me-1"></i> Rekam Jejak Portofolio
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Proyek Strategis Nasional
            </span>
        </div>
        <h1 class="display-5 fw-bold text-dark mb-2" style="letter-spacing: -0.5px;">
            Proyek Strategis Nasional & Konstruksi Unggulan
        </h1>
        <p class="lead text-muted mb-0" style="max-width: 820px; font-size: 1.05rem;">
            Komitmen LSP ASTEKINDO dalam menjamin kompetensi ribuan personil ahli madya, utama, dan pelaksana pada proyek-proyek mega infrastruktur di Indonesia.
        </p>
    </div>
</section>

<!-- Projects Grid Section -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <div class="row g-4">
            @forelse($projects as $p)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden d-flex flex-column rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important; transition: transform 0.25s ease, box-shadow 0.25s ease;"
                     onmouseover="this.style.borderColor='#BAE6FD'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 28px rgba(2,132,199,0.1)'"
                     onmouseout="this.style.borderColor='#E2E8F0'; this.style.transform='none'; this.style.boxShadow='0 4px 20px -2px rgba(2,132,199,0.06)'">
                    
                    <!-- Modern Header Banner (Guaranteed No Broken Image) -->
                    <div class="p-4 position-relative" style="background: linear-gradient(135deg, #0284C7 0%, #0EA5E9 100%); color: #ffffff; min-height: 140px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-white text-primary px-3 py-1 rounded-pill fw-bold" style="font-size: 0.75rem;">
                                {{ $p->category }}
                            </span>
                            <span class="badge bg-white bg-opacity-25 text-white px-3 py-1 rounded-pill fw-bold" style="font-size: 0.75rem;">
                                <i class="bi bi-calendar3 me-1"></i>{{ $p->year }}
                            </span>
                        </div>
                        <div class="mt-3">
                            <small class="text-white-50 text-uppercase fw-semibold" style="letter-spacing: 0.5px; font-size: 0.75rem;">
                                <i class="bi bi-building me-1"></i>{{ $p->client_name }}
                            </small>
                            <h5 class="fw-bold text-white mb-0 mt-1" style="font-size: 1.15rem; line-height: 1.35;">
                                {{ $p->title }}
                            </h5>
                        </div>
                    </div>

                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.65; font-size: 0.92rem;">
                            {{ $p->description }}
                        </p>

                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill small">
                                <i class="bi bi-shield-check me-1"></i>Terverifikasi BNSP
                            </span>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo LSP ASTEKINDO, saya ingin konsultasi sertifikasi untuk proyek seperti ' . $p->title) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-bold">
                                Konsultasi <i class="bi bi-whatsapp ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">Belum ada portofolio proyek yang dipublikasikan.</p>
            </div>
            @endforelse
        </div>

        <!-- Corporate Certification Partnership CTA -->
        <div class="mt-5 p-4 p-md-5 rounded-4 text-white text-center position-relative overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #0284C7 0%, #0EA5E9 100%);">
            <h2 class="fw-bold mb-3">Butuh Sertifikasi Kolektif Tenaga Ahli untuk Proyek Anda?</h2>
            <p class="text-white-50 mx-auto mb-4" style="max-width: 700px; font-size: 1.02rem; line-height: 1.7;">
                LSP ASTEKINDO menyediakan skema Uji Kompetensi In-House / On-Site di Tempat Uji Kompetensi (TUK) Sewaktu untuk BUMN Karya, Kontraktor, dan Konsultan Manajemen Konstruksi.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20kami%20ingin%20mengajukan%20kerjasama%20sertifikasi%20kolektif%20perusahaan" target="_blank" class="btn btn-warning text-dark fw-bold px-4 py-3 rounded-pill shadow-sm">
                    <i class="bi bi-whatsapp me-2"></i>Hubungi Tim Kemitraan Korporasi
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light fw-bold px-4 py-3 rounded-pill">
                    <i class="bi bi-envelope me-2"></i>Kirim Surat Permohonan
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
