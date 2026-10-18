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
                <label for="whatsapp" class="form-label fw-bold text-dark small">Hotline WhatsApp 1</label>
                <input type="text" class="form-control py-2" id="whatsapp" name="whatsapp" value="{{ $settings['whatsapp'] ?? '081399810272' }}">
                <small class="text-muted">Nomor yang terhubung ke tombol chat WhatsApp terapung di website.</small>
            </div>

            <div class="col-md-6">
                <label for="whatsapp_2" class="form-label fw-bold text-dark small">Hotline WhatsApp 2</label>
                <input type="text" class="form-control py-2" id="whatsapp_2" name="whatsapp_2" value="{{ $settings['whatsapp_2'] ?? '081283624838' }}">
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label fw-bold text-dark small">Nomor Telepon Kantor (PABX)</label>
                <input type="text" class="form-control py-2" id="phone" name="phone" value="{{ $settings['phone'] ?? '(021) 7919-4820' }}">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label fw-bold text-dark small">Email Resmi Lembaga</label>
                <input type="email" class="form-control py-2" id="email" name="email" value="{{ $settings['email'] ?? 'sekretariat@astekindo.org' }}">
            </div>

            <div class="col-12">
                <label for="address" class="form-label fw-bold text-dark small">Alamat Lengkap Kantor Pusat</label>
                <textarea class="form-control" id="address" name="address" rows="2">{{ $settings['address'] ?? 'Gedung Astekindo Lt. 3, Jl. Raya Pasar Minggu No. 17, Jakarta Selatan 12780' }}</textarea>
            </div>

            <div class="col-12">
                <label for="maps_embed" class="form-label fw-bold text-dark small">Google Maps Iframe Embed URL</label>
                <input type="text" class="form-control py-2" id="maps_embed" name="maps_embed" value="{{ $settings['maps_embed'] ?? '' }}" placeholder="https://www.google.com/maps/embed?...">
            </div>

            <div class="col-12">
                <label for="footer_text" class="form-label fw-bold text-dark small">Teks Hak Cipta Footer</label>
                <input type="text" class="form-control py-2" id="footer_text" name="footer_text" value="{{ $settings['footer_text'] ?? '© 2026 LSP ASTEKINDO Konstruksi Mandiri. Lisensi Resmi BNSP & Terakreditasi LPJK Kementerian PUPR.' }}">
            </div>

            <div class="col-12 pt-3 border-top">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Perubahan Pengaturan
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
