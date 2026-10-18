@extends('layouts.front')

@section('title', 'Tentang Lembaga | Profil, Visi, Misi & Legalitas Training K3 Konstruksi')
@section('meta_description', 'Profil lengkap Lembaga Penyelenggara Training K3 Konstruksi. Visi, misi, sejarah, lisensi resmi BNSP dan LPJK.')

@section('content')

<!-- Header Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-info-circle-fill me-1"></i> Profil Lembaga
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Lisensi Resmi BNSP & LPJK
            </span>
        </div>
        <h1 class="display-5 fw-bold text-dark mb-2" style="letter-spacing: -0.5px;">
            Training K3 Konstruksi
        </h1>
        <p class="lead text-muted mb-0" style="max-width: 820px; font-size: 1.05rem;">
            Membangun keandalan dan daya saing sumber daya manusia jasa konstruksi Indonesia melalui pengakuan kompetensi kerja berstandar nasional dan internasional.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <!-- Sejarah & Identitas -->
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-7">
                <span class="badge bg-primary-subtle text-primary px-3 py-1 rounded-pill fw-bold mb-2">Sejarah & Latar Belakang</span>
                <h2 class="display-6 fw-bold text-dark mb-3">
                    Dedikasi untuk Keunggulan Jasa Konstruksi Nasional
                </h2>
                <p class="text-muted mb-3" style="line-height: 1.8; font-size: 1rem;">
                    Lembaga Penyelenggara Training K3 Konstruksi didirikan sebagai tindak lanjut atas amanat <strong>Undang-Undang Nomor 2 Tahun 2017 tentang Jasa Konstruksi</strong> yang mewajibkan setiap tenaga kerja konstruksi memiliki Sertifikat Kompetensi Kerja (SKK). Lembaga ini telah berlisensi resmi dari <strong>Badan Nasional Sertifikasi Profesi (BNSP)</strong> dan tercatat di <strong>Lembaga Pengembangan Jasa Konstruksi (LPJK)</strong>.
                </p>
                <p class="text-muted mb-0" style="line-height: 1.8; font-size: 1rem;">
                    Sejak awal berdirinya, lembaga kami telah menyertifikasi lebih dari 48.000 tenaga kerja yang tersebar di 38 provinsi di seluruh Indonesia, mulai dari jenjang pelaksana teknisi lapangan hingga penanggung jawab teknis badan usaha (PJTBU) pada proyek-proyek strategis nasional BUMN dan swasta.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #BAE6FD !important;">
                    <h4 class="fw-bold text-dark mb-3 border-bottom pb-2" style="font-size: 1.15rem;">
                        <i class="bi bi-award-fill text-primary me-2"></i>Identitas Kelembagaan
                    </h4>
                    <div class="d-flex flex-column gap-3 small">
                        <div>
                            <span class="text-muted d-block" style="font-size: 0.78rem;">Nama Lembaga:</span>
                            <strong class="text-dark fs-6">Training K3 Konstruksi</strong>
                        </div>
                        <div>
                            <span class="text-muted d-block" style="font-size: 0.78rem;">Status Lisensi BNSP:</span>
                            <strong class="text-success fs-6"><i class="bi bi-patch-check-fill me-1"></i>Lisensi Resmi BNSP</strong>
                        </div>
                        <div>
                            <span class="text-muted d-block" style="font-size: 0.78rem;">Registrasi LPJK:</span>
                            <strong class="text-primary fs-6"><i class="bi bi-building-fill-check me-1"></i>Terdaftar Resmi LPJK</strong>
                        </div>
                        <div>
                            <span class="text-muted d-block" style="font-size: 0.78rem;">Jenis Layanan:</span>
                            <strong class="text-dark">Pelatihan & Fasilitasi Sertifikasi Kompetensi Terbuka</strong>
                        </div>
                        <div>
                            <span class="text-muted d-block" style="font-size: 0.78rem;">Standar Penjaminan Mutu:</span>
                            <strong class="text-dark">Pedoman BNSP 201, 202 & ISO/IEC 17024</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi Modern Card -->
        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-5 text-white" style="background: linear-gradient(135deg, #0284C7 0%, #0EA5E9 100%);">
            <div class="row g-4">
                <div class="col-md-6 border-end-md border-white-subtle">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge bg-white text-primary p-2 rounded-circle fs-5" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center;">
                            <i class="bi bi-eye-fill"></i>
                        </span>
                        <h3 class="fw-bold mb-0 text-white">Visi Lembaga</h3>
                    </div>
                    <p class="text-white-50 mb-0" style="line-height: 1.8; font-size: 1.02rem;">
                        Menjadi Lembaga Sertifikasi Profesi Jasa Konstruksi yang independen, profesional, kredibel, dan berstandar internasional dalam menjamin kompetensi tenaga kerja konstruksi Indonesia menuju pembangunan nasional yang berkualitas, kokoh, dan andal.
                    </p>
                </div>
                <div class="col-md-6 ps-md-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge bg-white text-primary p-2 rounded-circle fs-5" style="width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center;">
                            <i class="bi bi-compass-fill"></i>
                        </span>
                        <h3 class="fw-bold mb-0 text-white">Misi Lembaga</h3>
                    </div>
                    <ul class="text-white-50 mb-0 ps-3 d-flex flex-column gap-2" style="line-height: 1.7; font-size: 0.95rem;">
                        <li>Menyelenggarakan proses uji kompetensi secara objektif, adil, transparan, dan bebas konflik kepentingan.</li>
                        <li>Mengembangkan skema sertifikasi SKKNI yang selaras dengan kemajuan teknologi digital konstruksi & BIM.</li>
                        <li>Mengoptimalkan jaringan Tempat Uji Kompetensi (TUK) di 38 provinsi di seluruh wilayah Indonesia.</li>
                        <li>Membina korps asesor kompetensi berlisensi BNSP yang berintegritas dan profesional tinggi.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Nilai Integritas & Kode Etik -->
        <div class="text-center max-w-750 mx-auto mb-4">
            <span class="badge bg-primary-subtle text-primary px-3 py-1 rounded-pill fw-bold mb-2">Nilai Luhur</span>
            <h3 class="display-6 fw-bold text-dark mb-2">Komitmen Integritas & Kode Etik Asesor</h3>
            <p class="text-muted">
                Training K3 Konstruksi memegang teguh prinsip 5K (Kejujuran, Keadilan, Kredibilitas, Kepatuhan, dan Keselamatan) dalam seluruh rantai asesmen dan pelatihan.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <div class="bg-primary-subtle text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-scale fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Objektivitas Mutlak</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.65;">
                        Keputusan kompetensi murni didasarkan atas bukti portofolio valid, asli, terkini, dan memadai (VATM) tanpa intervensi pihak luar.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <div class="bg-info-subtle text-info rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-file-earmark-check fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Kerahasiaan Dokumen</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.65;">
                        Seluruh data teknis proyek, gambar DED, dan dokumen perusahaan asesi dilindungi dengan standar kerahasiaan ketat ISO/IEC 17024.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <div class="bg-success-subtle text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-shield-shaded fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Bebas Gratifikasi</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.65;">
                        Penegakan pakta integritas zero toleransi terhadap suap, gratifikasi, atau percaloan blanko sertifikat kompetensi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
