@extends('layouts.front')

@section('title', $program->title . ' di ' . $cityName . ' | LSP ASTEKINDO')
@section('meta_description', 'Layanan Uji Kompetensi dan Asesmen SKK ' . $program->title . ' di ' . $cityName . ', Provinsi ' . $provinceName . '. Lisensi Resmi BNSP & LPJK Kementerian PUPR.')

@section('content')

    <!-- Hero Header -->
    <section style="background: linear-gradient(135deg, var(--primary-navy-dark), var(--primary-navy)); padding: 60px 0; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div style="display: flex; gap: 8px; font-size: 0.82rem; color: #94a3b8; margin-bottom: 16px; align-items: center; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #94a3b8; text-decoration: none;">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('programs') }}" style="color: #94a3b8; text-decoration: none;">Skema Sertifikasi</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('program.detail', $program->slug) }}" style="color: #94a3b8; text-decoration: none;">{{ $program->title }}</a>
                <i class="bi bi-chevron-right"></i>
                <span style="color: var(--safety-gold);">{{ $cityName }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 12px; flex-wrap: wrap;">
                <span style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold); font-size: 0.78rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    <i class="bi bi-geo-alt-fill"></i> TUK Wilayah {{ $cityName }}
                </span>
                <span style="background: rgba(37, 99, 235, 0.2); color: #60a5fa; font-size: 0.78rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    Provinsi {{ $provinceName }}
                </span>
                <span style="background: rgba(16, 185, 129, 0.2); color: #34d399; font-size: 0.78rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    <i class="bi bi-shield-check"></i> {{ $program->certification_body }}
                </span>
            </div>

            <h1 style="font-size: 2.35rem; font-weight: 900; line-height: 1.25; margin-bottom: 14px; letter-spacing: -0.5px;">
                {{ $program->title }} di {{ $cityName }}
            </h1>
            <p style="color: #cbd5e1; font-size: 1.02rem; max-width: 820px; line-height: 1.65;">
                Penyelenggaraan Asesmen dan Sertifikasi Kompetensi Kerja (SKK) Konstruksi Resmi BNSP & LPJK untuk para profesional keteknikan di {{ $cityName }}, Provinsi {{ $provinceName }}.
            </p>
        </div>
    </section>

    <!-- Content: 10 Article Cards Section -->
    <section style="padding: 70px 0 90px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2.2fr 1fr; gap: 40px;">
                <!-- Left: 10 Article Cards -->
                <div>
                    <div style="margin-bottom: 30px;">
                        <span class="section-tag"><i class="bi bi-collection-play-fill"></i> Modul Terpadu & Panduan Teknis</span>
                        <h2 style="font-size: 1.8rem; font-weight: 900; color: var(--primary-navy); margin: 6px 0 8px;">
                            Daftar Artikel & Panduan Teknis di {{ $cityName }}
                        </h2>
                        <p style="color: var(--text-muted); font-size: 0.94rem;">
                            Setiap materi di bawah ini merupakan panduan teknis mendalam berstandar SKKNI dan regulasi keselamatan konstruksi PUPR untuk wilayah {{ $cityName }}. Klik artikel untuk membaca panduan lengkapnya.
                        </p>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        @foreach($articles as $index => $art)
                            <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 26px; box-shadow: var(--shadow-subtle); transition: var(--transition);"
                                 onmouseover="this.style.borderColor='var(--blueprint-blue)'; this.style.transform='translateY(-3px)'; this.style.boxShadow='var(--shadow-hover)'"
                                 onmouseout="this.style.borderColor='var(--border-light)'; this.style.transform='none'; this.style.boxShadow='var(--shadow-subtle)'">
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; flex-wrap: wrap; gap: 8px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="width: 26px; height: 26px; border-radius: 6px; background: var(--primary-navy); color: var(--safety-gold); font-size: 0.76rem; font-weight: 800; display: flex; align-items: center; justify-content: center;">
                                            #{{ $index + 1 }}
                                        </span>
                                        <span style="font-size: 0.74rem; font-weight: 800; color: var(--blueprint-blue); background: #eff6ff; padding: 3px 8px; border-radius: 4px;">
                                            {{ $art['category'] }}
                                        </span>
                                    </div>
                                    <span style="font-size: 0.76rem; color: var(--text-muted);"><i class="bi bi-clock"></i> {{ $art['read_time'] }} menit baca</span>
                                </div>

                                <h3 style="font-size: 1.18rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px; line-height: 1.4;">
                                    <a href="{{ route('program.region.article', [$program->slug, $province['slug'], $kabkot['slug'], $art['slug']]) }}" style="color: inherit; text-decoration: none;">
                                        {{ $art['title'] }}
                                    </a>
                                </h3>

                                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.65; margin-bottom: 18px;">
                                    {{ $art['excerpt'] }}
                                </p>

                                <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 14px; border-top: 1px solid #f1f5f9;">
                                    <span style="font-size: 0.76rem; font-weight: 700; color: #059669; display: flex; align-items: center; gap: 5px;">
                                        <i class="bi bi-patch-check-fill"></i> Standar SKKNI & BNSP
                                    </span>
                                    <a href="{{ route('program.region.article', [$program->slug, $province['slug'], $kabkot['slug'], $art['slug']]) }}" 
                                       class="btn-gold" style="padding: 7px 16px; font-size: 0.82rem; border-radius: 6px;">
                                        Buka Artikel Lengkap <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Kecamatan Coverage Box -->
                    @if(count($sampleKecamatan) > 0)
                        <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 30px; margin-top: 35px;">
                            <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                <i class="bi bi-pin-map-fill" style="color: var(--safety-gold-dark);"></i> Cakupan Wilayah Kecamatan di {{ $cityName }}
                            </h4>
                            <p style="color: var(--text-muted); font-size: 0.88rem; margin-bottom: 16px;">
                                Layanan sertifikasi dan konsultasi portofolio mencakup seluruh kecamatan di wilayah {{ $cityName }}:
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                @foreach($sampleKecamatan as $kec)
                                    <span style="background: var(--bg-light); border: 1px solid var(--border-light); padding: 4px 10px; border-radius: 6px; font-size: 0.82rem; color: #334155; font-weight: 600;">
                                        Kec. {{ $kec }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Right Sidebar -->
                <div>
                    <div style="position: sticky; top: 100px; display: flex; flex-direction: column; gap: 24px;">
                        <!-- Registration Card -->
                        <div style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-navy-dark)); color: #fff; padding: 30px; border-radius: var(--radius-lg); box-shadow: var(--shadow-card);">
                            <span style="color: var(--safety-gold); font-size: 0.74rem; font-weight: 800; text-transform: uppercase;">Layanan TUK Resmi</span>
                            <h4 style="font-size: 1.25rem; font-weight: 800; margin: 6px 0 12px; color: #fff;">Daftar di {{ $cityName }}</h4>
                            <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px;">
                                Tim verifikator berkas TUK {{ $cityName }} siap membantu pengecekan kelengkapan portofolio Anda secara gratis sebelum diajukan ke uji kompetensi.
                            </p>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20daftar%20uji%20SKK%20{{ urlencode($program->title) }}%20di%20{{ urlencode($cityName) }}" target="_blank" class="btn-gold" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp TUK
                            </a>
                            <a href="{{ route('program.detail', $program->slug) }}" class="btn-outline-white" style="width: 100%; justify-content: center; font-size: 0.86rem;">
                                <i class="bi bi-arrow-left"></i> Ganti Wilayah Lain
                            </a>
                        </div>

                        <!-- Skema Summary Box -->
                        <div style="background: #ffffff; padding: 26px; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 14px; border-bottom: 2px solid var(--safety-gold); padding-bottom: 8px;">
                                Ringkasan Skema
                            </h4>
                            <div style="display: flex; flex-direction: column; gap: 10px; font-size: 0.86rem;">
                                <div>
                                    <span style="color: var(--text-muted); display: block;">Jenjang Kualifikasi:</span>
                                    <strong style="color: var(--blueprint-blue);">{{ $program->jenjang }}</strong>
                                </div>
                                <div>
                                    <span style="color: var(--text-muted); display: block;">Kategori / Bidang:</span>
                                    <strong>{{ $program->category }}</strong>
                                </div>
                                <div>
                                    <span style="color: var(--text-muted); display: block;">Badan Sertifikasi:</span>
                                    <strong style="color: #059669;">{{ $program->certification_body }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
