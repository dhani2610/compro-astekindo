@extends('layouts.front')

@section('title', 'LSP ASTEKINDO Konstruksi Mandiri | Lembaga Sertifikasi Profesi Konstruksi Resmi BNSP & LPJK')
@section('meta_description', 'LSP ASTEKINDO Konstruksi Mandiri menyelenggarakan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Konstruksi resmi berlisensi BNSP & LPJK Kementerian PUPR di 38 provinsi di Indonesia.')

@push('styles')
<style>
    /* Hero Slider Section */
    .hero-slider-section {
        position: relative;
        background: var(--primary-navy-dark);
        overflow: hidden;
        min-height: 580px;
        display: flex;
        align-items: center;
    }

    .hero-slide {
        display: none;
        width: 100%;
        padding: 80px 0 100px;
        position: relative;
        animation: fadeIn 0.8s ease forwards;
    }

    .hero-slide.active {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 50px;
        align-items: center;
    }

    .hero-badge-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(245, 158, 11, 0.12);
        color: var(--safety-gold);
        border: 1px solid rgba(245, 158, 11, 0.35);
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.82rem;
        font-weight: 800;
        margin-bottom: 22px;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    .hero-title {
        color: #ffffff;
        font-size: 2.85rem;
        font-weight: 900;
        line-height: 1.18;
        margin-bottom: 20px;
        letter-spacing: -0.8px;
    }

    .hero-title span {
        background: linear-gradient(135deg, var(--safety-gold), #fbbf24);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
        color: #94a3b8;
        font-size: 1.08rem;
        line-height: 1.7;
        margin-bottom: 34px;
        max-width: 580px;
    }

    .hero-cta-group {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-gold {
        background: linear-gradient(135deg, var(--safety-gold), var(--safety-gold-dark));
        color: #0b1a30;
        font-weight: 800;
        font-size: 0.95rem;
        padding: 14px 28px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 8px 25px rgba(245, 158, 11, 0.35);
        transition: var(--transition);
        border: none;
        cursor: pointer;
    }

    .btn-gold:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(245, 158, 11, 0.55);
        color: #0b1a30;
    }

    .btn-outline-white {
        background: rgba(255, 255, 255, 0.06);
        color: #ffffff;
        font-weight: 700;
        font-size: 0.95rem;
        padding: 14px 26px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: var(--transition);
    }

    .btn-outline-white:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: #ffffff;
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* Hero Card Visual */
    .hero-card-visual {
        position: relative;
    }

    .hero-glass-box {
        background: rgba(17, 34, 64, 0.75);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        position: relative;
        z-index: 2;
    }

    .hero-glass-box img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: var(--radius-md);
        margin-bottom: 20px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .floating-cred-card {
        position: absolute;
        bottom: -20px;
        left: -20px;
        background: #ffffff;
        color: var(--primary-navy);
        padding: 14px 20px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        display: flex;
        align-items: center;
        gap: 14px;
        z-index: 3;
        border: 1px solid #e2e8f0;
    }

    .cred-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: #ecfdf5;
        color: #059669;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
    }

    /* Slider Dots Controls */
    .slider-dots {
        position: absolute;
        bottom: 26px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    }

    .dot-btn {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.25);
        border: none;
        cursor: pointer;
        transition: var(--transition);
    }

    .dot-btn.active {
        width: 32px;
        border-radius: 20px;
        background: var(--safety-gold);
    }

    /* Dynamic Statistics Counter Section */
    .stats-section {
        background: #ffffff;
        margin-top: -45px;
        position: relative;
        z-index: 20;
        border-radius: var(--radius-lg);
        box-shadow: 0 15px 40px rgba(10, 25, 47, 0.08);
        border: 1px solid var(--border-light);
        padding: 35px 25px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        divide-x: 1px solid #e2e8f0;
    }

    .stat-item {
        padding: 0 20px;
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .stat-icon-wrap {
        width: 58px;
        height: 58px;
        border-radius: 14px;
        background: rgba(245, 158, 11, 0.12);
        color: var(--safety-gold-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        flex-shrink: 0;
    }

    .stat-item:nth-child(2) .stat-icon-wrap {
        background: rgba(37, 99, 235, 0.1);
        color: var(--blueprint-blue);
    }

    .stat-item:nth-child(3) .stat-icon-wrap {
        background: rgba(16, 185, 129, 0.1);
        color: #059669;
    }

    .stat-item:nth-child(4) .stat-icon-wrap {
        background: rgba(147, 51, 234, 0.1);
        color: #7c3aed;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 900;
        color: var(--primary-navy);
        line-height: 1;
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 0.86rem;
        font-weight: 700;
        color: var(--text-muted);
    }

    /* Section Header Common */
    .section-header {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 50px;
    }

    .section-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 0.8rem;
        font-weight: 800;
        color: var(--safety-gold-dark);
        background: var(--safety-gold-light);
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .section-title {
        font-size: 2.2rem;
        font-weight: 900;
        color: var(--primary-navy);
        line-height: 1.25;
        letter-spacing: -0.5px;
        margin-bottom: 14px;
    }

    .section-desc {
        color: var(--text-muted);
        font-size: 1rem;
        line-height: 1.65;
    }

    /* Keunggulan Grid */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .feature-card {
        background: #ffffff;
        border: 1px solid var(--border-light);
        border-radius: var(--radius-lg);
        padding: 32px 26px;
        box-shadow: var(--shadow-subtle);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .feature-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-hover);
        border-color: rgba(245, 158, 11, 0.4);
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--safety-gold), var(--blueprint-blue));
        opacity: 0;
        transition: var(--transition);
    }

    .feature-card:hover::before {
        opacity: 1;
    }

    .feature-icon-box {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: rgba(10, 25, 47, 0.05);
        color: var(--primary-navy);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
        transition: var(--transition);
    }

    .feature-card:hover .feature-icon-box {
        background: var(--safety-gold);
        color: #0b1a30;
    }

    /* Schemes / Program Cards */
    .scheme-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .scheme-card {
        background: #ffffff;
        border-radius: var(--radius-lg);
        border: 1px solid var(--border-light);
        overflow: hidden;
        box-shadow: var(--shadow-subtle);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
    }

    .scheme-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-hover);
        border-color: rgba(37, 99, 235, 0.3);
    }

    .scheme-card-img-wrap {
        height: 200px;
        position: relative;
        overflow: hidden;
    }

    .scheme-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .scheme-card:hover .scheme-card-img-wrap img {
        transform: scale(1.06);
    }

    .scheme-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(10, 25, 47, 0.85);
        backdrop-filter: blur(8px);
        color: var(--safety-gold);
        font-size: 0.74rem;
        font-weight: 800;
        padding: 5px 12px;
        border-radius: 20px;
        border: 1px solid rgba(245, 158, 11, 0.4);
    }

    .scheme-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .scheme-jenjang-pill {
        display: inline-block;
        font-size: 0.74rem;
        font-weight: 800;
        color: var(--blueprint-blue);
        background: #eff6ff;
        padding: 4px 10px;
        border-radius: 6px;
        margin-bottom: 12px;
    }

    .scheme-title {
        font-size: 1.18rem;
        font-weight: 800;
        color: var(--primary-navy);
        line-height: 1.35;
        margin-bottom: 12px;
    }

    .scheme-desc {
        color: var(--text-muted);
        font-size: 0.88rem;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .scheme-footer {
        padding-top: 18px;
        border-top: 1px solid var(--border-light);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Projects Grid */
    .project-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
    }

    .project-card {
        background: #ffffff;
        border-radius: var(--radius-lg);
        overflow: hidden;
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-subtle);
        transition: var(--transition);
    }

    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-hover);
    }

    .project-img-box {
        height: 210px;
        position: relative;
    }

    .project-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .project-category-tag {
        position: absolute;
        bottom: 12px;
        left: 12px;
        background: rgba(10, 25, 47, 0.85);
        color: #ffffff;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 0.74rem;
        font-weight: 700;
    }

    .project-info {
        padding: 22px;
    }

    /* Client Logos */
    .clients-slider-box {
        background: #ffffff;
        border: 1px solid var(--border-light);
        border-radius: var(--radius-lg);
        padding: 30px;
        box-shadow: var(--shadow-subtle);
    }

    .clients-grid {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        gap: 24px;
    }

    .client-badge-pill {
        background: var(--bg-light);
        border: 1px solid var(--border-light);
        padding: 10px 18px;
        border-radius: 10px;
        font-size: 0.88rem;
        font-weight: 800;
        color: var(--primary-navy);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition);
    }

    .client-badge-pill:hover {
        background: rgba(37, 99, 235, 0.08);
        border-color: var(--blueprint-blue);
        transform: translateY(-2px);
    }

    /* Testimonials */
    .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 28px;
    }

    .testimonial-card {
        background: #ffffff;
        border: 1px solid var(--border-light);
        border-radius: var(--radius-lg);
        padding: 32px;
        box-shadow: var(--shadow-subtle);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .testi-stars {
        color: var(--safety-gold);
        font-size: 1.1rem;
        margin-bottom: 16px;
    }

    .testi-text {
        color: #334155;
        font-size: 0.96rem;
        line-height: 1.7;
        font-style: italic;
        margin-bottom: 24px;
    }

    .testi-author {
        display: flex;
        align-items: center;
        gap: 14px;
        padding-top: 18px;
        border-top: 1px solid #f1f5f9;
    }

    .testi-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--safety-gold), var(--primary-navy));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.1rem;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .hero-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }
        .hero-subtitle {
            margin: 0 auto 34px;
        }
        .hero-cta-group {
            justify-content: center;
        }
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            divide-x: none;
        }
        .features-grid,
        .scheme-grid,
        .project-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .testimonial-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .hero-title {
            font-size: 2.1rem;
        }
        .stats-grid {
            grid-template-columns: 1fr;
        }
        .features-grid,
        .scheme-grid,
        .project-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')

    <!-- 1. HERO SLIDER SECTION -->
    <section class="hero-slider-section">
        @foreach($slides as $index => $slide)
            <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" id="slide-{{ $index }}">
                <div class="container">
                    <div class="hero-grid">
                        <!-- Left Content -->
                        <div>
                            @if($slide->badge)
                                <div class="hero-badge-pill">
                                    <i class="bi bi-patch-check-fill"></i> {{ $slide->badge }}
                                </div>
                            @endif
                            <h2 class="hero-title">
                                {!! Str::replaceFirst('Resmi', '<span>Resmi</span>', e($slide->title)) !!}
                            </h2>
                            <p class="hero-subtitle">
                                {{ $slide->subtitle }}
                            </p>
                            <div class="hero-cta-group">
                                <a href="{{ $slide->cta_link ?: '#skema-sertifikasi' }}" class="btn-gold">
                                    <i class="bi bi-award-fill"></i> {{ $slide->cta_text ?: 'Daftar Skema Sertifikasi' }}
                                </a>
                                <a href="{{ $slide->cta2_link ?: 'https://api.whatsapp.com/send?phone=6281399810272' }}" target="_blank" class="btn-outline-white">
                                    <i class="bi bi-whatsapp"></i> {{ $slide->cta2_text ?: 'Konsultasi Syarat SKK' }}
                                </a>
                            </div>
                        </div>

                        <!-- Right Visual Box -->
                        <div class="hero-card-visual">
                            <div class="hero-glass-box">
                                <img src="{{ $slide->image ?: 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800' }}" alt="{{ $slide->title }}">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <div style="color: var(--safety-gold); font-size: 0.76rem; font-weight: 800; text-transform: uppercase;">Akreditasi Lembaga</div>
                                        <div style="color: #ffffff; font-weight: 800; font-size: 1.05rem;">LSP ASTEKINDO P-3</div>
                                    </div>
                                    <span style="background: rgba(16, 185, 129, 0.2); color: #34d399; font-weight: 800; font-size: 0.74rem; padding: 4px 10px; border-radius: 4px; border: 1px solid rgba(16, 185, 129, 0.4);">
                                        <i class="bi bi-check-circle-fill"></i> Terdaftar SIPJAKI
                                    </span>
                                </div>
                            </div>
                            <div class="floating-cred-card">
                                <div class="cred-icon">
                                    <i class="bi bi-file-earmark-check-fill"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 900; font-size: 0.95rem; color: #0f172a;">SKK Terakreditasi BNSP</div>
                                    <div style="font-size: 0.76rem; color: #64748b; font-weight: 600;">Syarat Wajib Lelang Proyek PUPR</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Slider Dots -->
        @if(count($slides) > 1)
            <div class="slider-dots">
                @foreach($slides as $index => $slide)
                    <button class="dot-btn {{ $index === 0 ? 'active' : '' }}" onclick="switchSlide({{ $index }})" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
        @endif
    </section>

    <!-- 2. DYNAMIC STATISTICS COUNTER (Editable in Admin Panel) -->
    <div class="container">
        <div class="stats-section">
            <div class="stats-grid">
                @foreach($statistics as $stat)
                    <div class="stat-item">
                        <div class="stat-icon-wrap">
                            <i class="bi {{ $stat->icon ?: 'bi-bar-chart-fill' }}"></i>
                        </div>
                        <div>
                            <div class="stat-number">{{ $stat->value }}</div>
                            <div class="stat-label">{{ $stat->label }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- 3. KEUNGGULAN LSP ASTEKINDO -->
    <section style="padding: 90px 0 60px;">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-star-fill"></i> Nilai Tambah & Integritas</span>
                <h3 class="section-title">Mengapa Memilih Sertifikasi di LSP ASTEKINDO Konstruksi Mandiri?</h3>
                <p class="section-desc">
                    Kami menjamin proses uji kompetensi yang akuntabel, transparan, dan sesuai standar ISO/IEC 17024 guna memastikan legalitas mutlak tenaga kerja konstruksi Anda di mata hukum dan pengguna jasa.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-shield-check"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px;">Lisensi Resmi BNSP & LPJK</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Tercatat resmi dengan Nomor Lisensi BNSP-LSP-1897-ID dan akreditasi LPJK Kementerian PUPR. Sertifikat berhologram dengan QR-Code terintegrasi ke portal SIPJAKI nasional.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-person-check-fill"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px;">Korps Asesor Berpengalaman</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Didukung lebih dari 340 asesor kompetensi tersertifikasi BNSP yang berasal dari kalangan praktisi senior BUMN, konsultan ahli, dan akademisi teknik terkemuka.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px;">Jaringan TUK 38 Provinsi</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Tempat Uji Kompetensi (TUK) mandiri dan sewaktu yang tersebar merata di seluruh wilayah Sumatera, Jawa, Kalimantan, Sulawesi, hingga Papua mempermudah asesmen tanpa kendala geografis.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-file-earmark-lock2-fill"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px;">Syarat Mutlak Tender Proyek</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Menjamin pemenuhan syarat Penanggung Jawab Teknis Badan Usaha (PJTBU) dan Penanggung Jawab Subklasifikasi (PJSK) lelang proyek pemerintah (LPSE/APBN) dan BUMN.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-speedometer2"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px;">Proses Cepat & Terstruktur</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Alur pendaftaran digital, pra-asesmen dokumen portofolio yang dibimbing admin responsif, hingga pleno keputusan kompetensi yang tepat waktu dan terjadwal.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-box"><i class="bi bi-award-fill"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px;">Pengakuan Regional ASEAN</h4>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Sertifikasi kompetensi berstandar KKNI dan SKKNI yang memiliki kesetaraan kualifikasi tenaga kerja di tingkat negara anggota ASEAN melalui kesepakatan MRA.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SKEMA SERTIFIKASI UNGGULAN -->
    <section id="skema-sertifikasi" style="padding: 60px 0 80px; background: #ffffff;">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-card-checklist"></i> Skema Terlisensi</span>
                <h3 class="section-title">Skema Sertifikasi Kompetensi Kerja (SKK) Konstruksi</h3>
                <p class="section-desc">
                    Tersedia jenjang kualifikasi Ahli Utama (Jenjang 9), Ahli Madya (Jenjang 8), Ahli Muda (Jenjang 7), Teknisi/Inspektur (Jenjang 6 & 5), dan Pelaksana Lapangan.
                </p>
            </div>

            <div class="scheme-grid">
                @foreach($programs as $prog)
                    <div class="scheme-card">
                        <div class="scheme-card-img-wrap">
                            <img src="{{ $prog->image ?: 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=600' }}" alt="{{ $prog->title }}">
                            @if($prog->badge)
                                <span class="scheme-badge"><i class="bi bi-award"></i> {{ $prog->badge }}</span>
                            @endif
                        </div>
                        <div class="scheme-body">
                            <span class="scheme-jenjang-pill">{{ $prog->jenjang }} &bull; {{ $prog->category }}</span>
                            <h4 class="scheme-title">{{ $prog->title }}</h4>
                            <p class="scheme-desc">{{ Str::limit($prog->short_description, 130) }}</p>
                            <div class="scheme-footer">
                                <span style="font-size: 0.78rem; font-weight: 800; color: #059669; display: flex; align-items: center; gap: 4px;">
                                    <i class="bi bi-shield-fill-check"></i> {{ $prog->certification_body }}
                                </span>
                                <a href="{{ route('program.detail', $prog->slug) }}" style="font-size: 0.86rem; font-weight: 800; color: var(--blueprint-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                    Detail Skema & Wilayah <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 45px;">
                <a href="{{ route('programs') }}" class="btn-gold">
                    <i class="bi bi-grid-fill"></i> Lihat Seluruh Skema Sertifikasi (64 Skema)
                </a>
            </div>
        </div>
    </section>

    <!-- 5. JELAJAHI WILAYAH TUK SERTIFIKASI SE-INDONESIA (Interactive Directory) -->
    <section id="wilayah-sertifikasi" style="padding: 70px 0; background: var(--primary-navy-dark); color: #fff;">
        <div class="container">
            <div class="section-header" style="color: #fff;">
                <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold);"><i class="bi bi-geo-alt-fill"></i> Jaringan TUK Nasional</span>
                <h3 class="section-title" style="color: #ffffff;">Layanan Uji Kompetensi di 38 Provinsi & 514 Kabupaten/Kota</h3>
                <p class="section-desc" style="color: #94a3b8;">
                    Temukan Tempat Uji Kompetensi (TUK) LSP ASTEKINDO terdekat di wilayah kerja proyek Anda di seluruh pelosok nusantara.
                </p>
            </div>

            <!-- Island Filter Pills -->
            <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; margin-bottom: 30px;">
                <button onclick="filterIsland('semua')" class="island-filter-btn active" data-island="semua">Semua Pulau (38)</button>
                <button onclick="filterIsland('Sumatera')" class="island-filter-btn" data-island="Sumatera">Sumatera</button>
                <button onclick="filterIsland('Jawa')" class="island-filter-btn" data-island="Jawa">Jawa</button>
                <button onclick="filterIsland('Kalimantan')" class="island-filter-btn" data-island="Kalimantan">Kalimantan</button>
                <button onclick="filterIsland('Sulawesi')" class="island-filter-btn" data-island="Sulawesi">Sulawesi</button>
                <button onclick="filterIsland('Bali & Nusa Tenggara')" class="island-filter-btn" data-island="Bali & Nusa Tenggara">Bali & Nusra</button>
                <button onclick="filterIsland('Maluku')" class="island-filter-btn" data-island="Maluku">Maluku</button>
                <button onclick="filterIsland('Papua')" class="island-filter-btn" data-island="Papua">Papua</button>
            </div>

            <!-- Quick City Search -->
            <div style="max-width: 580px; margin: 0 auto 35px; position: relative;">
                <input type="text" id="citySearchInput" placeholder="Ketik nama Kabupaten / Kota (misal: Medan, Surabaya, Balikpapan)..." 
                       style="width: 100%; padding: 14px 20px 14px 46px; border-radius: 30px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.08); color: #fff; font-size: 0.95rem; outline: none;">
                <i class="bi bi-search" style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: var(--safety-gold); font-size: 1.1rem;"></i>
            </div>

            <!-- Provinces Accordion Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 18px;" id="provincesGrid">
                @foreach($provinces as $prov)
                    <div class="province-card-box" data-island="{{ $prov['island'] }}" data-provname="{{ strtolower($prov['name']) }}"
                         style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 20px; transition: var(--transition);">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                            <h4 style="color: #fff; font-size: 1.05rem; font-weight: 800;">{{ $prov['name'] }}</h4>
                            <span style="font-size: 0.72rem; color: var(--safety-gold); background: rgba(245, 158, 11, 0.15); padding: 3px 8px; border-radius: 4px; font-weight: 700;">
                                {{ count($prov['kabkot']) }} Kota/Kab
                            </span>
                        </div>
                        <p style="color: #94a3b8; font-size: 0.8rem; margin-bottom: 14px;">Pulau: {{ $prov['island'] }}</p>
                        
                        <div style="max-height: 120px; overflow-y: auto; padding-right: 6px; font-size: 0.8rem; line-height: 1.8;">
                            @foreach($prov['kabkot'] as $kk)
                                @php
                                    $kkName = is_array($kk) ? $kk['name'] : $kk;
                                    $kkSlug = is_array($kk) ? $kk['slug'] : Str::slug($kk);
                                    $provSlug = $prov['slug'];
                                @endphp
                                <a href="{{ route('program.region', ['sertifikasi-ahli-manajemen-proyek-konstruksi', $provSlug, $kkSlug]) }}" 
                                   class="city-link-tag" data-cityname="{{ strtolower($kkName) }}"
                                   style="color: #cbd5e1; text-decoration: none; display: block; padding: 2px 0;">
                                    &bull; {{ $kkName }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 6. PORTOFOLIO PROYEK SERTIFIKASI (Our Projects) -->
    <section style="padding: 90px 0 70px;">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-briefcase-fill"></i> Jejak Langkah Nyata</span>
                <h3 class="section-title">Portofolio Sertifikasi Proyek Strategis Nasional</h3>
                <p class="section-desc">
                    Ribuan tenaga kerja yang telah tersertifikasi melalui LSP ASTEKINDO bertugas langsung di garda terdepan pembangunan infrastruktur berkelas dunia di seluruh Indonesia.
                </p>
            </div>

            <div class="project-grid">
                @foreach($projects as $proj)
                    <div class="project-card">
                        <div class="project-img-box">
                            <img src="{{ $proj->image }}" alt="{{ $proj->title }}">
                            <span class="project-category-tag">{{ $proj->category }}</span>
                        </div>
                        <div class="project-info">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="font-size: 0.76rem; font-weight: 800; color: var(--blueprint-blue);"><i class="bi bi-calendar3"></i> {{ $proj->year }}</span>
                                <span style="font-size: 0.76rem; font-weight: 800; color: #059669; background: #ecfdf5; padding: 2px 8px; border-radius: 4px;">
                                    {{ $proj->participants_certified }}
                                </span>
                            </div>
                            <h4 style="font-size: 1.12rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 8px; line-height: 1.35;">{{ $proj->title }}</h4>
                            <p style="font-size: 0.84rem; color: var(--text-muted); margin-bottom: 12px; line-height: 1.6;">{{ Str::limit($proj->description, 110) }}</p>
                            <div style="font-size: 0.78rem; font-weight: 700; color: #475569; display: flex; align-items: center; gap: 6px;">
                                <i class="bi bi-geo-alt-fill" style="color: var(--safety-gold-dark);"></i> {{ $proj->location }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('projects') }}" class="btn-outline-white" style="color: var(--primary-navy); border-color: var(--border-light); background: #ffffff;">
                    Lihat Seluruh Portofolio Proyek <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 7. OUR CLIENTS / MITRA KERJA -->
    <section style="padding: 60px 0; background: #ffffff; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 30px;">
                <span style="font-size: 0.82rem; font-weight: 800; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px;">
                    Dipercaya oleh BUMN Konstruksi, Kementerian PUPR, & Kontraktor Nasional
                </span>
            </div>
            <div class="clients-grid">
                @foreach($clients as $c)
                    <div class="client-badge-pill">
                        <i class="bi bi-buildings" style="color: var(--safety-gold);"></i>
                        <span>{{ $c->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONIALS -->
    <section style="padding: 90px 0;">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-chat-quote-fill"></i> Testimoni Pengguna Jasa</span>
                <h3 class="section-title">Apa Kata Praktisi & Pimpinan Proyek?</h3>
                <p class="section-desc">
                    Pengakuan profesional atas akuntabilitas uji kompetensi, integritas asesor, dan keabsahan sertifikat di berbagai lini proyek konstruksi.
                </p>
            </div>

            <div class="testimonial-grid">
                @foreach($testimonials as $t)
                    <div class="testimonial-card">
                        <div>
                            <div class="testi-stars">
                                @for($i = 0; $i < $t->rating; $i++) <i class="bi bi-star-fill"></i> @endfor
                            </div>
                            <p class="testi-text">"{{ $t->content }}"</p>
                        </div>
                        <div class="testi-author">
                            <div class="testi-avatar">
                                {{ substr($t->name, 0, 2) }}
                            </div>
                            <div>
                                <h5 style="font-size: 0.98rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 2px;">{{ $t->name }}</h5>
                                <p style="font-size: 0.8rem; color: var(--text-muted); margin-bottom: 2px;">{{ $t->role }} &bull; <strong>{{ $t->company }}</strong></p>
                                <span style="font-size: 0.72rem; color: var(--blueprint-blue); font-weight: 700; background: #eff6ff; padding: 2px 6px; border-radius: 4px;">
                                    Skema: {{ $t->scheme_name }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 9. LATEST 3 ARTICLES SECTION -->
    <section style="padding: 70px 0 90px; background: #ffffff; border-top: 1px solid var(--border-light);">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-journal-bookmark-fill"></i> Wawasan & Regulasi</span>
                <h3 class="section-title">Artikel & Panduan Teknis Konstruksi Terbaru</h3>
                <p class="section-desc">
                    Pelajari regulasi terbaru Kementerian PUPR, standar keselamatan SMKK, dan metodologi keteknikan langsung dari dewan pakar LSP ASTEKINDO.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">
                @foreach($latestArticles as $art)
                    <div style="background: var(--bg-light); border: 1px solid var(--border-light); border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column; transition: var(--transition);"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='var(--shadow-hover)'"
                         onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
                        <div style="height: 180px; background: linear-gradient(135deg, var(--primary-navy), var(--steel-blue)); display: flex; align-items: center; justify-content: center; color: var(--safety-gold); font-size: 3rem;">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <div style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <span style="font-size: 0.74rem; font-weight: 800; color: var(--blueprint-blue); background: #eff6ff; padding: 3px 8px; border-radius: 4px;">
                                    {{ $art->category }}
                                </span>
                                <span style="font-size: 0.74rem; color: var(--text-muted);"><i class="bi bi-clock"></i> {{ $art->read_time }} menit</span>
                            </div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 12px; line-height: 1.4;">
                                <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit; text-decoration: none;">
                                    {{ Str::limit($art->title, 75) }}
                                </a>
                            </h4>
                            <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                                {{ Str::limit($art->excerpt, 120) }}
                            </p>
                            <a href="{{ route('article.detail', $art->slug) }}" style="font-size: 0.86rem; font-weight: 800; color: var(--blueprint-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 45px;">
                <a href="{{ route('articles') }}" class="btn-gold">
                    <i class="bi bi-journal-text"></i> Buka Katalog 200 Artikel & Panduan Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- 10. CALL TO ACTION BANNER -->
    <section style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-navy-dark)); color: #fff; padding: 70px 0; border-top: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
                <div style="max-width: 650px;">
                    <span style="color: var(--safety-gold); font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.5px;">Siap Mengikuti Uji Kompetensi?</span>
                    <h3 style="font-size: 2.1rem; font-weight: 900; line-height: 1.25; margin: 8px 0 12px;">Daftarkan Diri & Tenaga Kerja Perusahaan Anda Sekarang</h3>
                    <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">
                        Dapatkan sertifikat resmi BNSP & LPJK untuk jaminan kepatuhan hukum, syarat mutlak tender, dan pengembangan karir profesional jasa konstruksi.
                    </p>
                </div>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20jadwalkan%20uji%20kompetensi%20SKK%20Konstruksi" target="_blank" class="btn-gold">
                        <i class="bi bi-whatsapp"></i> Chat WhatsApp Hotline
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline-white">
                        <i class="bi bi-envelope"></i> Kirim Permohonan
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<style>
    .island-filter-btn {
        background: rgba(255, 255, 255, 0.08);
        color: #cbd5e1;
        border: 1px solid rgba(255, 255, 255, 0.15);
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.82rem;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition);
    }
    .island-filter-btn:hover,
    .island-filter-btn.active {
        background: var(--safety-gold);
        color: #0b1a30;
        border-color: var(--safety-gold);
    }
</style>
<script>
    // Hero Slider Switcher
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot-btn');

    function switchSlide(index) {
        if (!slides.length) return;
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));
        slides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
        currentSlide = index;
    }

    if (slides.length > 1) {
        setInterval(() => {
            let next = (currentSlide + 1) % slides.length;
            switchSlide(next);
        }, 6000);
    }

    // Island Filter for Regional TUK
    function filterIsland(island) {
        document.querySelectorAll('.island-filter-btn').forEach(btn => {
            btn.classList.toggle('active', btn.dataset.island === island);
        });

        const cards = document.querySelectorAll('.province-card-box');
        cards.forEach(card => {
            if (island === 'semua' || card.dataset.island === island) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // City Live Search
    const citySearch = document.getElementById('citySearchInput');
    if (citySearch) {
        citySearch.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const provinceCards = document.querySelectorAll('.province-card-box');

            provinceCards.forEach(card => {
                const provName = card.dataset.provname || '';
                const cityLinks = card.querySelectorAll('.city-link-tag');
                let hasMatch = provName.includes(query);

                cityLinks.forEach(link => {
                    const cityName = link.dataset.cityname || '';
                    if (cityName.includes(query)) {
                        link.style.color = '#f59e0b';
                        link.style.fontWeight = 'bold';
                        hasMatch = true;
                    } else {
                        link.style.color = '#cbd5e1';
                        link.style.fontWeight = 'normal';
                    }
                });

                card.style.display = (query === '' || hasMatch) ? '' : 'none';
            });
        });
    }
</script>
@endpush
