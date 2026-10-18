@extends('layouts.front')

@section('title', $articleData['title'])
@section('meta_description', Str::limit(strip_tags($articleData['content']), 160))

@section('content')

    <!-- Header Banner -->
    <section style="background: linear-gradient(135deg, var(--primary-navy-dark), var(--primary-navy)); padding: 60px 0 50px; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div style="display: flex; gap: 8px; font-size: 0.82rem; color: #94a3b8; margin-bottom: 16px; align-items: center; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #94a3b8; text-decoration: none;">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('programs') }}" style="color: #94a3b8; text-decoration: none;">Skema Sertifikasi</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('program.region', [$program->slug, $province['slug'], $kabkot['slug']]) }}" style="color: #94a3b8; text-decoration: none;">{{ $cityName }}</a>
                <i class="bi bi-chevron-right"></i>
                <span style="color: var(--safety-gold);">Artikel & Panduan</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold); font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $cityName }}, {{ $provinceName }}
                </span>
                <span style="background: rgba(37, 99, 235, 0.2); color: #60a5fa; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    {{ $program->jenjang }}
                </span>
                <span style="background: rgba(16, 185, 129, 0.2); color: #34d399; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    <i class="bi bi-shield-check"></i> Lisensi BNSP & LPJK
                </span>
            </div>

            <h1 style="font-size: 2.2rem; font-weight: 900; line-height: 1.3; margin-bottom: 16px; letter-spacing: -0.5px; max-width: 950px;">
                {{ $articleData['title'] }}
            </h1>

            <div style="display: flex; gap: 20px; font-size: 0.84rem; color: #cbd5e1; align-items: center; flex-wrap: wrap;">
                <span><i class="bi bi-person-fill" style="color: var(--safety-gold);"></i> {{ $articleData['author'] }}</span>
                <span><i class="bi bi-calendar3" style="color: var(--safety-gold);"></i> {{ $articleData['published_at'] }}</span>
                <span><i class="bi bi-check-all" style="color: #34d399;"></i> Standar SKKNI & SMKK PUPR</span>
            </div>
        </div>
    </section>

    <!-- Reading Body -->
    <section style="padding: 60px 0 90px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2.4fr 1fr; gap: 45px;">
                <!-- Left: Full Rich Text Reader -->
                <div>
                    <!-- Document Navigation Pills -->
                    <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: 12px; padding: 18px 24px; margin-bottom: 30px; box-shadow: var(--shadow-subtle); display: flex; gap: 12px; flex-wrap: wrap; align-items: center;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: var(--primary-navy);"><i class="bi bi-bookmark-fill" style="color: var(--safety-gold-dark);"></i> Navigasi Bab:</span>
                        <a href="#landasan-hukum" style="font-size: 0.76rem; font-weight: 700; color: var(--blueprint-blue); background: #eff6ff; padding: 5px 10px; border-radius: 6px; text-decoration: none;">1. Landasan Yuridis</a>
                        <a href="#unit-skkni" style="font-size: 0.76rem; font-weight: 700; color: var(--blueprint-blue); background: #eff6ff; padding: 5px 10px; border-radius: 6px; text-decoration: none;">2. Unit SKKNI</a>
                        <a href="#prosedur-uji" style="font-size: 0.76rem; font-weight: 700; color: var(--blueprint-blue); background: #eff6ff; padding: 5px 10px; border-radius: 6px; text-decoration: none;">3. Prosedur Uji</a>
                        <a href="#cakupan-kecamatan" style="font-size: 0.76rem; font-weight: 700; color: var(--blueprint-blue); background: #eff6ff; padding: 5px 10px; border-radius: 6px; text-decoration: none;">4. Kecamatan {{ $cityName }}</a>
                        <a href="#konsultasi-tuk" style="font-size: 0.76rem; font-weight: 800; color: #065f46; background: #d1fae5; padding: 5px 10px; border-radius: 6px; text-decoration: none;"><i class="bi bi-whatsapp"></i> Hotline TUK</a>
                    </div>

                    <!-- Article Paper -->
                    <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 45px 40px; box-shadow: var(--shadow-card); line-height: 1.85; font-size: 1rem; color: #1e293b;" id="articleReaderContent">
                        
                        <!-- Rich Rendered Content -->
                        <div style="white-space: pre-line; font-family: 'Plus Jakarta Sans', sans-serif;">
                            {!! nl2br(e($articleData['content'])) !!}
                        </div>

                    </div>

                    <!-- Kecamatan Coverage Box -->
                    @if(count($sampleKecamatan) > 0)
                        <div id="cakupan-kecamatan" style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 35px; margin-top: 35px; box-shadow: var(--shadow-subtle);">
                            <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                <i class="bi bi-geo-alt-fill" style="color: var(--safety-gold-dark);"></i> Jangkauan Kecamatan Uji Kompetensi di {{ $cityName }}
                            </h3>
                            <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 18px;">
                                LSP ASTEKINDO melayani pendaftaran uji kompetensi dan konsultasi portofolio mencakup seluruh kecamatan di {{ $cityName }}:
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                @foreach($sampleKecamatan as $kec)
                                    <span style="background: var(--bg-light); border: 1px solid var(--border-light); padding: 6px 12px; border-radius: 6px; font-size: 0.84rem; color: #1e293b; font-weight: 600;">
                                        Kecamatan {{ $kec }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- FAQ Box -->
                    <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 35px; margin-top: 35px; box-shadow: var(--shadow-subtle);">
                        <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-question-circle-fill" style="color: var(--blueprint-blue);"></i> Pertanyaan yang Sering Diajukan (FAQ)
                        </h3>
                        <div style="display: flex; flex-direction: column; gap: 16px;">
                            <div style="border-bottom: 1px solid #f1f5f9; padding-bottom: 14px;">
                                <strong style="font-size: 0.95rem; color: var(--primary-navy); display: block; margin-bottom: 6px;">
                                    Berapa lama masa berlaku Sertifikat Kompetensi Kerja (SKK) Konstruksi?
                                </strong>
                                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                                    Sesuai Peraturan Menteri PUPR No. 8 Tahun 2021, SKK Konstruksi berlaku selama 5 (lima) tahun sejak tanggal diterbitkan dan dapat diperpanjang melalui asesmen portofolio PKB (Pengembangan Keprofesian Berkelanjutan).
                                </p>
                            </div>
                            <div style="border-bottom: 1px solid #f1f5f9; padding-bottom: 14px;">
                                <strong style="font-size: 0.95rem; color: var(--primary-navy); display: block; margin-bottom: 6px;">
                                    Apakah SKK dari LSP ASTEKINDO terdaftar di sistem SIPJAKI / LPJK?
                                </strong>
                                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                                    Ya, 100% terintegrasi. Setiap sertifikat dilengkapi QR-Code resmi yang terhubung langsung ke portal Sistem Informasi Pembina Jasa Konstruksi (SIPJAKI) Kementerian PUPR sehingga sah digunakan untuk tender lelang LPSE.
                                </p>
                            </div>
                            <div>
                                <strong style="font-size: 0.95rem; color: var(--primary-navy); display: block; margin-bottom: 6px;">
                                    Bagaimana jika portofolio kerja saya belum lengkap?
                                </strong>
                                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                                    Tim verifikator dan pra-asesor TUK {{ $cityName }} akan membimbing Anda menyusun dokumen bukti kerja sesuai format baku form APL-01 dan APL-02 sebelum diajukan ke uji kompetensi bersama asesor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar Sticky -->
                <div>
                    <div style="position: sticky; top: 100px; display: flex; flex-direction: column; gap: 24px;">
                        <!-- Hotline Box -->
                        <div id="konsultasi-tuk" style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-navy-dark)); color: #fff; padding: 30px; border-radius: var(--radius-lg); box-shadow: var(--shadow-card);">
                            <span style="color: var(--safety-gold); font-size: 0.74rem; font-weight: 800; text-transform: uppercase;">Sekretariat TUK {{ $cityName }}</span>
                            <h4 style="font-size: 1.25rem; font-weight: 800; margin: 6px 0 12px; color: #fff;">Konsultasi Gratis Syarat SKK</h4>
                            <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px;">
                                Hubungi asesor pendamping TUK {{ $cityName }} untuk jadwal uji kompetensi terdekat dan verifikasi kelayakan ijazah Anda.
                            </p>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20membaca%20panduan%20SKK%20{{ urlencode($program->title) }}%20di%20{{ urlencode($cityName) }}" target="_blank" class="btn-gold" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp Asesor
                            </a>
                            <a href="tel:081283624838" class="btn-outline-white" style="width: 100%; justify-content: center; font-size: 0.86rem;">
                                <i class="bi bi-telephone-fill"></i> Hotline 2: 081283624838
                            </a>
                        </div>

                        <!-- Back to Region list -->
                        <div style="background: #ffffff; padding: 24px; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 12px;">Navigasi Kembali</h4>
                            <a href="{{ route('program.region', [$program->slug, $province['slug'], $kabkot['slug']]) }}" style="color: var(--blueprint-blue); text-decoration: none; font-size: 0.88rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 10px;">
                                <i class="bi bi-arrow-left"></i> Kembali ke 10 Modul {{ $cityName }}
                            </a>
                            <a href="{{ route('program.detail', $program->slug) }}" style="color: var(--text-muted); text-decoration: none; font-size: 0.84rem; display: block;">
                                &bull; Pilih Kabupaten/Kota Lain
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
