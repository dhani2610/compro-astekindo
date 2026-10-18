@extends('layouts.front')

@section('title', 'Tentang Perusahaan | Profil, Visi, Misi & Legalitas LSP ASTEKINDO')
@section('meta_description', 'Profil lengkap Lembaga Sertifikasi Profesi (LSP) ASTEKINDO Konstruksi Mandiri. Visi, misi, sejarah, lisensi resmi BNSP dan LPJK Kementerian PUPR.')

@section('content')

    <!-- Header Banner -->
    <section style="background: linear-gradient(135deg, var(--primary-navy-dark), var(--primary-navy)); padding: 60px 0; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <span style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold); font-size: 0.78rem; font-weight: 800; padding: 5px 12px; border-radius: 20px; text-transform: uppercase;">
                <i class="bi bi-info-circle-fill"></i> Profil Lembaga
            </span>
            <h1 style="font-size: 2.6rem; font-weight: 900; margin: 12px 0 8px; letter-spacing: -0.5px;">Tentang LSP ASTEKINDO Konstruksi Mandiri</h1>
            <p style="color: #94a3b8; font-size: 1.05rem; max-width: 650px;">
                Membangun keandalan dan daya saing sumber daya manusia jasa konstruksi Indonesia melalui pengakuan kompetensi kerja berstandar nasional dan internasional.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section style="padding: 80px 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 50px; align-items: center; margin-bottom: 80px;">
                <div>
                    <span style="color: var(--safety-gold-dark); font-weight: 800; font-size: 0.84rem; text-transform: uppercase; letter-spacing: 0.5px;">Sejarah & Latar Belakang</span>
                    <h2 style="font-size: 2rem; font-weight: 900; color: var(--primary-navy); margin: 8px 0 18px; line-height: 1.3;">
                        Dedikasi untuk Keunggulan Jasa Konstruksi Nasional
                    </h2>
                    <p style="color: #475569; font-size: 0.96rem; line-height: 1.8; margin-bottom: 16px;">
                        LSP ASTEKINDO Konstruksi Mandiri didirikan sebagai tindak lanjut atas amanat <strong>Undang-Undang Nomor 2 Tahun 2017 tentang Jasa Konstruksi</strong> yang mewajibkan setiap tenaga kerja konstruksi memiliki Sertifikat Kompetensi Kerja (SKK). Dibentuk di bawah naungan <strong>Asosiasi Tenaga Teknik Konstruksi Indonesia (ASTEKINDO)</strong>, lembaga ini telah memperoleh lisensi resmi dari <strong>Badan Nasional Sertifikasi Profesi (BNSP)</strong> dengan nomor lisensi <code>BNSP-LSP-1897-ID</code> dan tercatat di <strong>Lembaga Pengembangan Jasa Konstruksi (LPJK) Kementerian PUPR</strong>.
                    </p>
                    <p style="color: #475569; font-size: 0.96rem; line-height: 1.8;">
                        Sejak awal berdirinya, LSP ASTEKINDO telah menyertifikasi lebih dari 48.000 tenaga kerja yang tersebar di 38 provinsi, mulai dari jenjang pelaksana teknisi lapangan hingga penanggung jawab teknis badan usaha (PJTBU) pada proyek-proyek strategis BUMN dan swasta.
                    </p>
                </div>
                <div>
                    <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 35px; box-shadow: var(--shadow-card);">
                        <h4 style="font-size: 1.15rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 20px; border-bottom: 2px solid var(--safety-gold); padding-bottom: 10px;">
                            Identitas Kelembagaan
                        </h4>
                        <div style="display: flex; flex-direction: column; gap: 14px; font-size: 0.9rem;">
                            <div>
                                <span style="color: var(--text-muted); display: block; font-size: 0.8rem;">Nama Lembaga:</span>
                                <strong>LSP ASTEKINDO Konstruksi Mandiri</strong>
                            </div>
                            <div>
                                <span style="color: var(--text-muted); display: block; font-size: 0.8rem;">Nomor Lisensi BNSP:</span>
                                <strong style="color: #059669;"><i class="bi bi-patch-check-fill"></i> BNSP-LSP-1897-ID</strong>
                            </div>
                            <div>
                                <span style="color: var(--text-muted); display: block; font-size: 0.8rem;">Registrasi LPJK PUPR:</span>
                                <strong style="color: var(--blueprint-blue);"><i class="bi bi-building-fill-check"></i> LPJK-SKK-042/2021</strong>
                            </div>
                            <div>
                                <span style="color: var(--text-muted); display: block; font-size: 0.8rem;">Jenis LSP:</span>
                                <strong>LSP Pihak Ketiga (P-3) Terbuka untuk Umum</strong>
                            </div>
                            <div>
                                <span style="color: var(--text-muted); display: block; font-size: 0.8rem;">Standar Mutu:</span>
                                <strong>Pedoman BNSP 201 & ISO/IEC 17024</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visi & Misi Box -->
            <div style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-navy-dark)); color: #fff; border-radius: var(--radius-lg); padding: 50px 40px; margin-bottom: 70px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(245, 158, 11, 0.2); color: var(--safety-gold); display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 800; color: #fff;">Visi Lembaga</h3>
                        </div>
                        <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.75;">
                            Menjadi Lembaga Sertifikasi Profesi Jasa Konstruksi yang independen, profesional, kredibel, dan berstandar internasional dalam menjamin kompetensi tenaga kerja konstruksi Indonesia menuju pembangunan nasional yang berkualitas, kokoh, dan andal.
                        </p>
                    </div>

                    <div>
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(37, 99, 235, 0.2); color: #60a5fa; display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
                                <i class="bi bi-compass-fill"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 800; color: #fff;">Misi Lembaga</h3>
                        </div>
                        <ul style="color: #cbd5e1; font-size: 0.94rem; line-height: 1.7; display: flex; flex-direction: column; gap: 10px; padding-left: 20px;">
                            <li>Menyelenggarakan proses uji kompetensi secara objektif, adil, transparan, dan bebas konflik kepentingan.</li>
                            <li>Mengembangkan skema sertifikasi SKKNI yang selaras dengan kemajuan teknologi digital konstruksi & BIM.</li>
                            <li>Mengoptimalkan jaringan Tempat Uji Kompetensi (TUK) di 38 provinsi di seluruh wilayah Indonesia.</li>
                            <li>Membina korps asesor kompetensi berlisensi BNSP yang berintegritas dan profesional tinggi.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kode Etik & Nilai Budaya -->
            <div style="text-align: center; max-width: 750px; margin: 0 auto 40px;">
                <span class="section-tag"><i class="bi bi-bookmark-check-fill"></i> Nilai Luhur</span>
                <h3 class="section-title">Komitmen Integritas & Kode Etik Asesor</h3>
                <p class="section-desc">
                    LSP ASTEKINDO memegang teguh prinsip 5K (Kejujuran, Keadilan, Kredibilitas, Kepatuhan, dan Keselamatan) dalam seluruh rantai asesmen.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
                <div style="background: #ffffff; padding: 26px; border-radius: 12px; border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                    <i class="bi bi-scale" style="font-size: 2rem; color: var(--safety-gold-dark); margin-bottom: 12px; display: block;"></i>
                    <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 8px;">Objektivitas Mutlak</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                        Keputusan kompetensi murni didasarkan atas bukti portofolio valid, asli, terkini, dan memadai (VATM) tanpa intervensi pihak luar.
                    </p>
                </div>
                <div style="background: #ffffff; padding: 26px; border-radius: 12px; border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                    <i class="bi bi-file-earmark-check" style="font-size: 2rem; color: var(--blueprint-blue); margin-bottom: 12px; display: block;"></i>
                    <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 8px;">Kerahasiaan Dokumen</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                        Seluruh data teknis proyek, gambar DED, dan dokumen perusahaan asesi dilindungi dengan standar kerahasiaan ketat ISO/IEC 17024.
                    </p>
                </div>
                <div style="background: #ffffff; padding: 26px; border-radius: 12px; border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                    <i class="bi bi-shield-shaded" style="font-size: 2rem; color: #059669; margin-bottom: 12px; display: block;"></i>
                    <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 8px;">Bebas Gratifikasi</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                        Penegakan pakta integritas zero toleransi terhadap suap, gratifikasi, atau percaloan blanko sertifikat kompetensi.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
