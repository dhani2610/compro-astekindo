@extends('layouts.admin')

@section('title', 'Pengaturan Umum & Logo')
@section('page_title', 'Pengaturan Website & Identitas')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom">
        <h4 class="fw-bold text-dark mb-1">Konfigurasi Nama Website & Logo</h4>
        <p class="text-muted small mb-0">Ubah nama portal, logo resmi, legalitas lisensi BNSP, nomor kontak, dan link Google Maps.</p>
    </div>

    <form action="{{ route('admin.settings.general.update') }}" method="POST">
        @csrf

        <div class="row g-4">
            <!-- Website Branding -->
            <div class="col-md-6">
                <label for="site_name" class="form-label fw-bold text-dark small">Nama Website (Site Title)</label>
                <input type="text" class="form-control py-2" id="site_name" name="site_name" value="{{ $settings['site_name'] ?? 'LSP ASTEKINDO' }}" required>
                <small class="text-muted">Tampil pada title bar browser dan header utama.</small>
            </div>

            <div class="col-md-6">
                <label for="site_tagline" class="form-label fw-bold text-dark small">Tagline Perusahaan</label>
                <input type="text" class="form-control py-2" id="site_tagline" name="site_tagline" value="{{ $settings['site_tagline'] ?? 'LSP Konstruksi Mandiri Terlisensi BNSP & Terakreditasi LPJK' }}" required>
            </div>

            <div class="col-md-6">
                <label for="company_name" class="form-label fw-bold text-dark small">Nama Legal Lembaga (PT / LSP)</label>
                <input type="text" class="form-control py-2" id="company_name" name="company_name" value="{{ $settings['company_name'] ?? 'LSP ASTEKINDO Konstruksi Mandiri' }}" required>
            </div>

            <div class="col-md-6">
                <label for="logo_url" class="form-label fw-bold text-dark small">URL Logo Resmi Website</label>
                <input type="text" class="form-control py-2" id="logo_url" name="logo_url" value="{{ $settings['logo_url'] ?? '' }}" placeholder="https://domain.com/logo.png atau /images/logo.png">
                <small class="text-muted">Masukkan link URL logo atau kosongkan untuk logo default ASTEKINDO.</small>
            </div>

            <!-- Legalitas Lisensi -->
            <div class="col-md-6">
                <label for="license_bnsp" class="form-label fw-bold text-dark small">Nomor Lisensi BNSP</label>
                <input type="text" class="form-control py-2" id="license_bnsp" name="license_bnsp" value="{{ $settings['license_bnsp'] ?? 'BNSP-LSP-1897-ID' }}">
            </div>

            <div class="col-md-6">
                <label for="license_lpjk" class="form-label fw-bold text-dark small">Nomor Akreditasi LPJK PUPR</label>
                <input type="text" class="form-control py-2" id="license_lpjk" name="license_lpjk" value="{{ $settings['license_lpjk'] ?? 'LPJK-SKK-042/2021' }}">
            </div>

            <!-- Kontak & WhatsApp -->
            <div class="col-md-6">
                <label for="whatsapp" class="form-label fw-bold text-dark small">Hotline WhatsApp</label>
                <input type="text" class="form-control py-2" id="whatsapp" name="whatsapp" value="{{ $settings['whatsapp'] ?? '08118500177' }}">
                <small class="text-muted">Nomor yang terhubung ke tombol chat WhatsApp terapung di website.</small>
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label fw-bold text-dark small">Nomor Telepon Kantor / Hotline</label>
                <input type="text" class="form-control py-2" id="phone" name="phone" value="{{ $settings['phone'] ?? '08118500177' }}">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label fw-bold text-dark small">Email Resmi Lembaga</label>
                <input type="email" class="form-control py-2" id="email" name="email" value="{{ $settings['email'] ?? 'kontak@trainingk3konstruksi.my.id' }}">
            </div>

            <div class="col-12">
                <label for="address" class="form-label fw-bold text-dark small">Alamat Lengkap Kantor Pusat</label>
                <textarea class="form-control" id="address" name="address" rows="2">{{ $settings['address'] ?? 'Jl. Raden Inten II, Duren Sawit, Jakarta Timur, DKI Jakarta' }}</textarea>
            </div>

            <div class="col-12">
                <label for="maps_embed" class="form-label fw-bold text-dark small">Google Maps Iframe Embed URL</label>
                <input type="text" class="form-control py-2" id="maps_embed" name="maps_embed" value="{{ $settings['maps_embed'] ?? '' }}" placeholder="https://www.google.com/maps/embed?...">
            </div>

            <div class="col-12">
                <label for="footer_text" class="form-label fw-bold text-dark small">Teks Hak Cipta Footer</label>
                <input type="text" class="form-control py-2" id="footer_text" name="footer_text" value="{{ $settings['footer_text'] ?? 'Training K3 Konstruksi. Seluruh hak cipta dilindungi undang-undang.' }}">
            </div>

            <div class="col-12 pt-3 border-top">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Perubahan Pengaturan
                </button>
            </div>
        </div>
    </form>
</div>

{{-- XML Sitemap Card --}}
<div class="card border-0 shadow-sm rounded-4 p-4 mt-4" style="background: #ffffff;">
    <div class="d-flex align-items-center gap-3 mb-4 border-bottom pb-3">
        <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(2, 132, 199, 0.1); color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
            <i class="bi bi-diagram-3"></i>
        </div>
        <div>
            <h5 class="fw-bold mb-1" style="color: #0F172A;">XML Sitemap Generator (Google Search Console)</h5>
            <p class="text-muted small mb-0">Kelola dan perbarui berkas peta situs <code>public/sitemap.xml</code> untuk integrasi SEO Google.</p>
        </div>
    </div>

    @php
        $sitemapPath = public_path('sitemap.xml');
        $exists = file_exists($sitemapPath);
    @endphp

    <div class="p-3 rounded-3 mb-4" style="background: #F8FAFC; border: 1px solid #E2E8F0;">
        <div class="row g-2 text-sm" style="font-size: 0.88rem;">
            <div class="col-sm-3 fw-bold text-secondary">Status Sitemap:</div>
            <div class="col-sm-9">
                @if($exists)
                    <span class="badge bg-success-subtle text-success border border-success px-2 py-1">
                        <i class="bi bi-check-circle-fill me-1"></i> File Tersedia (public/sitemap.xml)
                    </span>
                @else
                    <span class="badge bg-danger-subtle text-danger border border-danger px-2 py-1">
                        <i class="bi bi-x-circle-fill me-1"></i> Belum Digenerate
                    </span>
                @endif
            </div>

            @if($exists)
                <div class="col-sm-3 fw-bold text-secondary">Terakhir Diperbarui:</div>
                <div class="col-sm-9 text-muted">{{ date('d M Y H:i:s', filemtime($sitemapPath)) }} WIB</div>

                <div class="col-sm-3 fw-bold text-secondary">Ukuran Berkas:</div>
                <div class="col-sm-9 text-muted">{{ round(filesize($sitemapPath) / 1024, 2) }} KB</div>

                <div class="col-sm-3 fw-bold text-secondary">Akses URL:</div>
                <div class="col-sm-9">
                    <a href="{{ url('/sitemap.xml') }}" target="_blank" class="fw-bold text-primary text-decoration-none">
                        {{ url('/sitemap.xml') }} <i class="bi bi-box-arrow-up-right small"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>

    <form action="{{ route('admin.sitemap.generate') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #0284c7; border-color: #0284c7;">
            <i class="bi bi-arrow-repeat me-1"></i> {{ $exists ? 'Generate Ulang XML Sitemap' : 'Generate XML Sitemap Sekarang' }}
        </button>
    </form>
</div>
@endsection
