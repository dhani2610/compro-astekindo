@extends('layouts.front')

@section('title', $program->title . ' | Training K3 Konstruksi')
@section('meta_description', Str::limit(strip_tags($program->short_description), 160))

@section('content')

<!-- Scheme Hero Header (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('programs') }}" class="text-primary text-decoration-none">Skema Sertifikasi</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">{{ $program->code ?? 'SKK-K3' }}</li>
            </ol>
        </nav>

        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                Kode: {{ $program->code ?? 'SKK-K3' }}
            </span>
            <span class="badge bg-info-subtle text-info border border-info-subtle px-3 py-2 rounded-pill fw-bold">
                {{ $program->jenjang }}
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-check me-1"></i> Standar SKKNI & SMKK
            </span>
        </div>

        <h1 class="display-5 fw-bold text-dark mb-3" style="letter-spacing: -0.5px; max-width: 920px; line-height: 1.25;">
            {{ $program->title }}
        </h1>
        <p class="lead text-muted mb-0" style="max-width: 820px; font-size: 1.05rem;">
            {{ $program->short_description }}
        </p>
    </div>
</section>

<!-- Main Content Grid -->
<section class="py-5" style="background: #F8FAFC;">
    <div class="container">
        <div class="row g-4 mb-5">
            <!-- Left Details -->
            <div class="col-lg-8">
                <!-- Deskripsi Lengkap -->
                <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <h3 class="fw-bold text-dark mb-3" style="font-size: 1.35rem;">
                        <i class="bi bi-file-text-fill text-primary me-2"></i>Deskripsi Lengkap Skema
                    </h3>
                    <p class="text-secondary mb-4" style="line-height: 1.8; font-size: 1rem;">
                        {{ $program->full_description }}
                    </p>
                    <div class="row g-3 pt-3 border-top text-muted small">
                        <div class="col-sm-6">
                            <span class="d-block" style="font-size: 0.8rem;">Masa Berlaku Sertifikat:</span>
                            <strong class="text-dark fs-6"><i class="bi bi-calendar-check text-success me-1"></i>5 (Lima) Tahun Penuh</strong>
                        </div>
                        <div class="col-sm-6">
                            <span class="d-block" style="font-size: 0.8rem;">Durasi Asesmen Uji:</span>
                            <strong class="text-dark fs-6"><i class="bi bi-clock-history text-primary me-1"></i>{{ $program->duration ?: '3 Hari Asesmen' }}</strong>
                        </div>
                    </div>
                </div>

                <!-- Kurikulum Unit Kompetensi -->
                @if(is_array($program->curriculum) && count($program->curriculum) > 0)
                <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <h3 class="fw-bold text-dark mb-3" style="font-size: 1.35rem;">
                        <i class="bi bi-journal-bookmark-fill text-primary me-2"></i>Materi Uji & Unit Kompetensi SKKNI
                    </h3>
                    <div class="d-flex flex-column gap-3">
                        @foreach($program->curriculum as $index => $curr)
                        <div class="d-flex align-items-start gap-3 p-3 rounded-3" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
                            <span class="badge bg-primary text-white rounded-circle p-2 px-3 fw-bold">{{ $index + 1 }}</span>
                            <div class="fw-semibold text-dark" style="font-size: 0.98rem; line-height: 1.5;">
                                {{ $curr }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Persyaratan Berkas -->
                @if(is_array($program->requirements) && count($program->requirements) > 0)
                <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                    <h3 class="fw-bold text-dark mb-3" style="font-size: 1.35rem;">
                        <i class="bi bi-check2-circle text-success me-2"></i>Persyaratan Permohonan & Portofolio
                    </h3>
                    <ul class="d-flex flex-column gap-2 mb-0 text-secondary" style="line-height: 1.8;">
                        @foreach($program->requirements as $req)
                        <li class="fw-medium">{{ $req }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4" style="position: sticky; top: 100px;">
                    <!-- Registration Box -->
                    <div class="card border-0 shadow-sm p-4 rounded-4 text-white" style="background: linear-gradient(135deg, #0284C7 0%, #0EA5E9 100%);">
                        <span class="badge bg-white text-primary px-3 py-1 rounded-pill fw-bold mb-2 align-self-start">Pendaftaran Resmi</span>
                        <h4 class="fw-bold mb-2">Konsultasi Portofolio</h4>
                        <p class="text-white-50 small mb-4" style="line-height: 1.6;">
                            Konsultasikan kecukupan berkas proyek Anda bersama verifikator resmi Training K3 Konstruksi sebelum proses uji kompetensi.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=628118500177&text={{ urlencode('Halo Training K3 Konstruksi, saya ingin konsultasi pendaftaran skema ' . $program->title) }}" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill py-2 shadow-sm mb-2">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp Konsultan
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light rounded-pill py-2 small fw-semibold">
                            <i class="bi bi-envelope me-1"></i> Form Kontak
                        </a>
                    </div>

                    <!-- Skema Terkait -->
                    <div class="card border-0 shadow-sm p-4 rounded-4" style="background: #ffffff; border: 1px solid #E2E8F0 !important;">
                        <h5 class="fw-bold text-dark mb-3 border-bottom pb-2">Skema Lainnya</h5>
                        <div class="d-flex flex-column gap-2">
                            @foreach($otherPrograms as $op)
                            <a href="{{ route('program.detail', $op->slug) }}" class="p-2 px-3 rounded-3 text-decoration-none border transition-all" style="background: #F8FAFC; border-color: #E2E8F0 !important;">
                                <div class="text-primary fw-bold small">{{ $op->jenjang }}</div>
                                <div class="text-dark small fw-semibold text-truncate">{{ $op->title }}</div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODERN REGIONAL DIRECTORY (NO UGLY SCROLLBARS, MODERN PILL BUTTONS) -->
        <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 mb-4" style="background: #ffffff; border: 1px solid #BAE6FD !important;">
            <div class="text-center max-w-750 mx-auto mb-4">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">
                    <i class="bi bi-geo-alt-fill me-1"></i> Jaringan TUK 38 Provinsi
                </span>
                <h3 class="display-6 fw-bold text-dark mb-2">Pilih Wilayah Uji Kompetensi untuk Skema Ini</h3>
                <p class="text-muted small">
                    Pilih kota tempat Anda berdomisili untuk mengakses jadwal Tempat Uji Kompetensi (TUK) serta <strong>202 program pelatihan & panduan teknis</strong> khusus wilayah tersebut.
                </p>
            </div>

            <!-- Live Search Bar -->
            <div class="max-w-500 mx-auto mb-4" style="max-width: 480px;">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 text-muted ps-3"><i class="bi bi-search"></i></span>
                    <input type="text" id="schemeCitySearch" class="form-control border-start-0 py-2 rounded-end-pill" placeholder="Cari kota Anda (misal: Medan, Surabaya, Makassar)...">
                </div>
            </div>

            <!-- Modern Regional Grid -->
            <div class="row g-3" id="schemeProvincesGrid">
                @foreach($provinces as $prov)
                    @php
                        $provSlug = $prov['slug'];
                        $kabkots = $prov['kabkot'] ?? [];
                        $visibleCities = array_slice($kabkots, 0, 4);
                        $hiddenCities = array_slice($kabkots, 4);
                    @endphp
                    <div class="col-md-6 col-lg-4 scheme-prov-col" data-provname="{{ strtolower($prov['name']) }}">
                        <div class="province-card p-3 rounded-4 h-100 bg-white" style="border: 1px solid #E2E8F0; transition: border-color 0.2s ease;">
                            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom">
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.95rem;">
                                    <i class="bi bi-pin-map text-primary me-1"></i>{{ $prov['name'] }}
                                </h6>
                                <span class="badge bg-primary-subtle text-primary rounded-pill small" style="font-size: 0.72rem;">
                                    {{ count($kabkots) }} Kota
                                </span>
                            </div>

                            <div class="cities-pill-wrapper d-flex flex-wrap gap-1">
                                @foreach($visibleCities as $kk)
                                    @php
                                        $kkName = is_array($kk) ? $kk['name'] : $kk;
                                        $kkSlug = is_array($kk) ? $kk['slug'] : Str::slug($kk);
                                    @endphp
                                    <a href="{{ route('program.region', [$program->slug, $provSlug, $kkSlug]) }}" 
                                       class="city-pill-btn" 
                                       data-cityname="{{ strtolower($kkName) }}">
                                        {{ $kkName }}
                                    </a>
                                @endforeach

                                @if(count($hiddenCities) > 0)
                                    <div class="extra-cities-container d-none flex-wrap gap-1 w-100 mt-1" id="extra-scheme-{{ $provSlug }}">
                                        @foreach($hiddenCities as $kk)
                                            @php
                                                $kkName = is_array($kk) ? $kk['name'] : $kk;
                                                $kkSlug = is_array($kk) ? $kk['slug'] : Str::slug($kk);
                                            @endphp
                                            <a href="{{ route('program.region', [$program->slug, $provSlug, $kkSlug]) }}" 
                                               class="city-pill-btn" 
                                               data-cityname="{{ strtolower($kkName) }}">
                                                {{ $kkName }}
                                            </a>
                                        @endforeach
                                    </div>

                                    <button class="btn btn-sm btn-outline-secondary rounded-pill toggle-cities-btn mt-2 py-1 px-3 w-100" 
                                            type="button" 
                                            onclick="toggleMoreCitiesScheme('{{ $provSlug }}', this)">
                                        +{{ count($hiddenCities) }} Kota Lainnya
                                    </button>
                                @endif
                            </div>
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
    function toggleMoreCitiesScheme(provSlug, btn) {
        const extraContainer = document.getElementById('extra-scheme-' + provSlug);
        if (extraContainer) {
            if (extraContainer.classList.contains('d-none')) {
                extraContainer.classList.remove('d-none');
                extraContainer.classList.add('d-flex');
                btn.innerText = 'Sembunyikan';
            } else {
                extraContainer.classList.remove('d-flex');
                extraContainer.classList.add('d-none');
                btn.innerText = '+' + extraContainer.children.length + ' Kota Lainnya';
            }
        }
    }

    // Live Search Filter for Cities
    const cityInput = document.getElementById('schemeCitySearch');
    if (cityInput) {
        cityInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const cols = document.querySelectorAll('.scheme-prov-col');

            cols.forEach(col => {
                const provName = col.dataset.provname || '';
                const pills = col.querySelectorAll('.city-pill-btn');
                let hasMatch = provName.includes(query);

                pills.forEach(pill => {
                    const cityName = pill.dataset.cityname || '';
                    if (query && cityName.includes(query)) {
                        pill.style.background = '#0284C7';
                        pill.style.color = '#ffffff';
                        pill.style.borderColor = '#0284C7';
                        hasMatch = true;
                    } else {
                        pill.style.background = '';
                        pill.style.color = '';
                        pill.style.borderColor = '';
                    }
                });

                col.style.display = (query === '' || hasMatch) ? '' : 'none';
            });
        });
    }
</script>
@endpush
