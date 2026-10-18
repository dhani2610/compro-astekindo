@extends('layouts.front')

@section('title', $program->title . ' | LSP ASTEKINDO')
@section('meta_description', Str::limit(strip_tags($program->short_description), 160))

@section('content')

    <!-- Scheme Hero Header -->
    <section style="background: linear-gradient(135deg, var(--primary-navy-dark), var(--primary-navy)); padding: 60px 0; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div style="display: flex; gap: 8px; font-size: 0.82rem; color: #94a3b8; margin-bottom: 16px; align-items: center; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #94a3b8; text-decoration: none;">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <a href="{{ route('programs') }}" style="color: #94a3b8; text-decoration: none;">Skema Sertifikasi</a>
                <i class="bi bi-chevron-right"></i>
                <span style="color: var(--safety-gold);">{{ $program->title }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 12px; flex-wrap: wrap;">
                <span style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold); font-size: 0.78rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    Kode: {{ $program->code }}
                </span>
                <span style="background: rgba(37, 99, 235, 0.2); color: #60a5fa; font-size: 0.78rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    {{ $program->jenjang }}
                </span>
                <span style="background: rgba(16, 185, 129, 0.2); color: #34d399; font-size: 0.78rem; font-weight: 800; padding: 4px 12px; border-radius: 20px;">
                    <i class="bi bi-shield-check"></i> {{ $program->certification_body }}
                </span>
            </div>

            <h1 style="font-size: 2.5rem; font-weight: 900; line-height: 1.25; margin-bottom: 16px; letter-spacing: -0.5px;">
                {{ $program->title }}
            </h1>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 800px; line-height: 1.7;">
                {{ $program->short_description }}
            </p>
        </div>
    </section>

    <!-- Main Content Grid -->
    <section style="padding: 70px 0 90px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; margin-bottom: 70px;">
                <!-- Left Details -->
                <div>
                    <!-- Deskripsi Lengkap -->
                    <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 35px; border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle); margin-bottom: 30px;">
                        <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 16px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-file-text-fill" style="color: var(--safety-gold-dark);"></i> Deskripsi Lengkap Skema
                        </h3>
                        <p style="color: #334155; font-size: 0.98rem; line-height: 1.8; margin-bottom: 18px;">
                            {{ $program->full_description }}
                        </p>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 24px; padding-top: 20px; border-top: 1px solid #f1f5f9;">
                            <div>
                                <span style="font-size: 0.8rem; color: var(--text-muted); display: block;">Masa Berlaku Sertifikat:</span>
                                <strong style="font-size: 0.95rem; color: var(--primary-navy);"><i class="bi bi-calendar-check"></i> 5 (Lima) Tahun</strong>
                            </div>
                            <div>
                                <span style="font-size: 0.8rem; color: var(--text-muted); display: block;">Durasi Asesmen:</span>
                                <strong style="font-size: 0.95rem; color: var(--primary-navy);"><i class="bi bi-clock-history"></i> {{ $program->duration ?: '2 - 3 Hari Uji Portofolio' }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Unit Kompetensi / Kurikulum -->
                    @if($program->curriculum && count($program->curriculum) > 0)
                        <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 35px; border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle); margin-bottom: 30px;">
                            <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <i class="bi bi-check2-all" style="color: var(--blueprint-blue);"></i> Unit Kompetensi SKKNI yang Diujikan
                            </h3>
                            <div style="display: flex; flex-direction: column; gap: 12px;">
                                @foreach($program->curriculum as $idx => $cur)
                                    <div style="display: flex; align-items: flex-start; gap: 12px; padding: 12px 16px; background: var(--bg-light); border-radius: 8px; border: 1px solid var(--border-light);">
                                        <span style="width: 28px; height: 28px; border-radius: 50%; background: var(--safety-gold); color: #0b1a30; font-weight: 800; font-size: 0.8rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            {{ $idx + 1 }}
                                        </span>
                                        <span style="font-size: 0.94rem; color: #1e293b; font-weight: 600; line-height: 1.5;">{{ $cur }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Persyaratan Portofolio -->
                    @if($program->requirements && count($program->requirements) > 0)
                        <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 35px; border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                            <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <i class="bi bi-folder-check" style="color: #059669;"></i> Persyaratan Dokumen & Portofolio
                            </h3>
                            <ul style="display: flex; flex-direction: column; gap: 10px; padding-left: 20px; color: #334155; font-size: 0.95rem; line-height: 1.7;">
                                @foreach($program->requirements as $req)
                                    <li>{{ $req }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <!-- Right Sidebar Sticky -->
                <div>
                    <div style="position: sticky; top: 100px; display: flex; flex-direction: column; gap: 24px;">
                        <!-- Hotline Box -->
                        <div style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-navy-dark)); color: #fff; padding: 30px; border-radius: var(--radius-lg); box-shadow: var(--shadow-card);">
                            <h4 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 10px; color: #fff;">Daftar Uji Kompetensi</h4>
                            <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px;">
                                Konsultasikan jadwal terdekat, panduan pengisian borang APL-01 & APL-02, serta biaya sertifikasi langsung dengan tim sekretariat TUK.
                            </p>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20LSP%20ASTEKINDO,%20saya%20ingin%20daftar%20skema%20{{ urlencode($program->title) }}" target="_blank" class="btn-gold" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp Hotline
                            </a>
                            <a href="{{ route('contact') }}" class="btn-outline-white" style="width: 100%; justify-content: center; font-size: 0.88rem;">
                                <i class="bi bi-envelope"></i> Kirim Form Permohonan
                            </a>
                        </div>

                        <!-- Skema Terkait -->
                        <div style="background: #ffffff; padding: 26px; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-subtle);">
                            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 16px; border-bottom: 2px solid var(--safety-gold); padding-bottom: 8px;">
                                Skema Terkait Lainnya
                            </h4>
                            <div style="display: flex; flex-direction: column; gap: 12px;">
                                @foreach($otherPrograms as $op)
                                    <a href="{{ route('program.detail', $op->slug) }}" style="text-decoration: none; display: block; padding: 10px; border-radius: 8px; background: var(--bg-light); border: 1px solid var(--border-light); transition: var(--transition);"
                                       onmouseover="this.style.borderColor='var(--blueprint-blue)'" onmouseout="this.style.borderColor='var(--border-light)'">
                                        <div style="font-size: 0.74rem; font-weight: 700; color: var(--blueprint-blue); margin-bottom: 2px;">{{ $op->jenjang }}</div>
                                        <div style="font-size: 0.88rem; font-weight: 800; color: var(--primary-navy); line-height: 1.35;">{{ $op->title }}</div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGIONAL EXPLORER FOR THIS SCHEME (38 PROVINCES & 514 KAB/KOTA) -->
            <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 45px 35px; box-shadow: var(--shadow-card);">
                <div style="text-align: center; max-width: 700px; margin: 0 auto 35px;">
                    <span class="section-tag"><i class="bi bi-geo-alt-fill"></i> Jaringan TUK Seluruh Indonesia</span>
                    <h3 style="font-size: 1.85rem; font-weight: 900; color: var(--primary-navy); margin: 8px 0 10px;">
                        Pilih Wilayah Uji Kompetensi untuk Skema Ini
                    </h3>
                    <p style="color: var(--text-muted); font-size: 0.94rem;">
                        Klik pada nama Kabupaten / Kota Anda di bawah ini untuk melihat jadwal TUK, syarat lokal, dan modul artikel panduan teknis konstruksi di daerah tersebut.
                    </p>
                </div>

                <!-- Live City Search Filter inside Scheme -->
                <div style="max-width: 500px; margin: 0 auto 30px; position: relative;">
                    <input type="text" id="schemeCitySearch" placeholder="Cari Kota / Kabupaten Anda (misal: Medan, Semarang, Makassar)..."
                           style="width: 100%; padding: 12px 18px 12px 42px; border-radius: 30px; border: 1px solid var(--border-light); background: var(--bg-light); font-size: 0.92rem; outline: none;">
                    <i class="bi bi-search" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--text-muted);"></i>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: 18px;" id="schemeProvincesGrid">
                    @foreach($provinces as $prov)
                        <div class="scheme-prov-box" data-prov="{{ strtolower($prov['name']) }}"
                             style="border: 1px solid var(--border-light); border-radius: 12px; padding: 18px; background: var(--bg-light);">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <strong style="font-size: 0.98rem; color: var(--primary-navy);">{{ $prov['name'] }}</strong>
                                <span style="font-size: 0.72rem; color: var(--blueprint-blue); background: #eff6ff; padding: 2px 8px; border-radius: 4px; font-weight: 700;">
                                    {{ count($prov['kabkot']) }} Kota
                                </span>
                            </div>
                            <div style="max-height: 120px; overflow-y: auto; font-size: 0.8rem; line-height: 1.8;">
                                @foreach($prov['kabkot'] as $kk)
                                    @php
                                        $kkSlug = Str::slug($kk);
                                        $provSlug = $prov['slug'];
                                    @endphp
                                    <a href="{{ route('program.region', [$program->slug, $provSlug, $kkSlug]) }}" 
                                       class="scheme-city-link" data-city="{{ strtolower($kk) }}"
                                       style="color: var(--text-muted); text-decoration: none; display: block;">
                                        &bull; {{ $kk }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    const cityInput = document.getElementById('schemeCitySearch');
    if (cityInput) {
        cityInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const provBoxes = document.querySelectorAll('.scheme-prov-box');

            provBoxes.forEach(box => {
                const provName = box.dataset.prov || '';
                const cityLinks = box.querySelectorAll('.scheme-city-link');
                let match = provName.includes(query);

                cityLinks.forEach(link => {
                    const cityName = link.dataset.city || '';
                    if (cityName.includes(query)) {
                        link.style.color = '#1d4ed8';
                        link.style.fontWeight = 'bold';
                        match = true;
                    } else {
                        link.style.color = 'var(--text-muted)';
                        link.style.fontWeight = 'normal';
                    }
                });

                box.style.display = (query === '' || match) ? '' : 'none';
            });
        });
    }
</script>
@endpush
