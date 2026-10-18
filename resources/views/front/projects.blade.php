@extends('layouts.front')

@section('title', 'Portofolio Proyek Sertifikasi Nasional | LSP ASTEKINDO')
@section('meta_description', 'Dokumentasi keterlibatan sertifikasi tenaga ahli dan pengawas konstruksi LSP ASTEKINDO pada proyek strategis nasional (PSN) se-Indonesia.')

@section('content')
<!-- Header Banner -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #0A192F 0%, #172A46 100%);">
    <div class="container py-4 position-relative" style="z-index: 2;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Proyek Sertifikasi</li>
            </ol>
        </nav>
        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
            <i class="bi bi-briefcase-fill me-1"></i> Rekam Jejak Portofolio
        </span>
        <h1 class="display-5 fw-bold text-white mb-3">Proyek Strategis Nasional & Konstruksi Unggulan</h1>
        <p class="lead text-white-50 mb-0" style="max-width: 780px;">
            Komitmen LSP ASTEKINDO dalam menjamin kompetensi ribuan personil ahli madya, utama, dan pelaksana pada proyek-proyek mega infrastruktur di Indonesia.
        </p>
    </div>
</section>

<!-- Projects Grid Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            @forelse($projects as $p)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden d-flex flex-column" style="border-radius: 18px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="position-relative">
                        <img src="{{ $p->image_url ?? 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f8?auto=format&fit=crop&w=800&q=80' }}" alt="{{ $p->title }}" class="card-img-top" style="height: 230px; object-fit: cover;">
                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-bold shadow-sm">
                            <i class="bi bi-tag-fill me-1"></i>{{ $p->category }}
                        </span>
                        <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">
                            <i class="bi bi-calendar3 me-1"></i>{{ $p->year }}
                        </span>
                    </div>

                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <div class="mb-2 text-primary small fw-bold">
                            <i class="bi bi-building me-1"></i>{{ $p->client_name }}
                        </div>
                        <h4 class="fw-bold mb-3" style="font-size: 1.25rem; line-height: 1.4;">
                            {{ $p->title }}
                        </h4>
                        <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ $p->description }}
                        </p>

                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill">
                                <i class="bi bi-shield-check me-1"></i>Terverifikasi BNSP
                            </span>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo LSP ASTEKINDO, saya ingin konsultasi sertifikasi untuk proyek seperti ' . $p->title) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
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
        <div class="mt-5 p-4 p-md-5 rounded-4 text-white text-center position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0A192F 0%, #1D4ED8 100%);">
            <h2 class="fw-bold mb-3">Butuh Sertifikasi Kolektif Tenaga Ahli untuk Proyek Anda?</h2>
            <p class="text-white-50 mx-auto mb-4" style="max-width: 700px;">
                LSP ASTEKINDO menyediakan skema Uji Kompetensi In-House / On-Site di Tempat Uji Kompetensi (TUK) Sewaktu untuk BUMN Karya, Kontraktor, dan Konsultan Manajemen Konstruksi.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20kami%20ingin%20mengajukan%20kerjasama%20sertifikasi%20kolektif%20perusahaan" target="_blank" class="btn btn-warning text-dark fw-bold px-4 py-3 rounded-pill shadow">
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
