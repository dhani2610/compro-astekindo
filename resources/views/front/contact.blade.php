@extends('layouts.front')

@section('title', 'Hubungi Sekretariat & Tempat Uji Kompetensi | LSP ASTEKINDO')
@section('meta_description', 'Kontak resmi Sekretariat LSP ASTEKINDO Konstruksi Mandiri. Alamat kantor, Google Maps, hotline WhatsApp, dan formulir konsultasi sertifikasi BNSP & LPJK.')

@section('content')
<!-- Header Banner (Modern Light Blue & White) -->
<section class="py-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 50%, #FFFFFF 100%); border-bottom: 1px solid #BAE6FD;">
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Kontak</li>
            </ol>
        </nav>
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-chat-square-dots-fill me-1"></i> Layanan Informasi Resmi
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-clock-history me-1"></i> Respon Cepat 24 Jam
            </span>
        </div>
        <h1 class="display-5 fw-bold text-dark mb-2" style="letter-spacing: -0.5px;">
            Hubungi Sekretariat LSP ASTEKINDO
        </h1>
        <p class="lead text-muted mb-0" style="max-width: 820px; font-size: 1.05rem;">
            Konsultasikan kebutuhan sertifikasi kompetensi tenaga kerja konstruksi Anda, verifikasi portofolio, jadwal asesmen, atau kemitraan TUK mandiri di seluruh Indonesia.
        </p>
    </div>
</section>

<!-- Contact Info & Form Section -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Success Alert -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm p-4 mb-4 rounded-4" role="alert">
            <div class="d-flex align-items-center">
                <i class="bi bi-check-circle-fill fs-2 me-3 text-success"></i>
                <div>
                    <h5 class="fw-bold mb-1">Pesan Berhasil Terkirim!</h5>
                    <p class="mb-0">{{ session('success') }}</p>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row g-4 mb-5">
            <!-- Left: Contact Details Cards -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4 p-md-5 h-100" style="border-radius: 20px; background: #ffffff;">
                    <h3 class="fw-bold text-dark mb-4">Informasi Kantor Pusat</h3>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="bg-primary-subtle text-primary p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-geo-alt-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Alamat Kantor</h6>
                            <p class="text-muted small mb-0" style="line-height: 1.6;">
                                Gedung Astekindo Mandiri Lt. 3, Jl. Raya Pasar Minggu No. 17, Pejaten Timur, Pasar Minggu, Jakarta Selatan, DKI Jakarta 12780
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="bg-primary-subtle text-primary p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-telephone-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Telepon Kantor</h6>
                            <p class="text-muted small mb-0">
                                (021) 7919-4820 / (021) 7919-4821
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="bg-success-subtle text-success p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-whatsapp fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Hotline WhatsApp Asesor</h6>
                            <p class="text-muted small mb-2">Respon cepat konsultasi berkas & portofolio:</p>
                            <div class="d-flex flex-column gap-2">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20Admin%20LSP%20ASTEKINDO" target="_blank" class="btn btn-sm btn-outline-success rounded-pill text-start px-3">
                                    <i class="bi bi-whatsapp me-2"></i>Hotline 1: 0813-9981-0272
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=6281283624838&text=Halo%20Admin%20LSP%20ASTEKINDO" target="_blank" class="btn btn-sm btn-outline-success rounded-pill text-start px-3">
                                    <i class="bi bi-whatsapp me-2"></i>Hotline 2: 0812-8362-4838
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="bg-warning-subtle text-warning-emphasis p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-envelope-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Email Resmi</h6>
                            <p class="text-muted small mb-0">
                                sekretariat@astekindo.org<br>
                                sertifikasi@astekindo.org
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-info-subtle text-info p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-clock-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Jam Pelayanan Asesmen</h6>
                            <p class="text-muted small mb-0">
                                Senin - Jumat: 08.30 - 17.00 WIB<br>
                                Sabtu & Minggu: Khusus Jadwal Uji TUK Sewaktu
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Interactive Contact Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4 p-md-5 h-100" style="border-radius: 20px; background: #ffffff;">
                    <div class="mb-4">
                        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold mb-2">Formulir Pesan</span>
                        <h3 class="fw-bold text-dark">Kirimkan Pertanyaan atau Permohonan Sertifikasi</h3>
                        <p class="text-muted small">Isi formulir berikut, data Anda tersimpan aman dan tim sekretariat akan merespon selambat-lambatnya 1x24 jam.</p>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger rounded-3 py-2 px-3 small mb-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label small fw-bold text-dark">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control py-2 rounded-3" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Ir. Budi Santoso, MT" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label small fw-bold text-dark">Alamat Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control py-2 rounded-3" id="email" name="email" value="{{ old('email') }}" placeholder="nama@perusahaan.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label small fw-bold text-dark">Nomor WhatsApp / HP</label>
                                <input type="text" class="form-control py-2 rounded-3" id="phone" name="phone" value="{{ old('phone') }}" placeholder="08123456789">
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label small fw-bold text-dark">Instansi / Perusahaan</label>
                                <input type="text" class="form-control py-2 rounded-3" id="company" name="company" value="{{ old('company') }}" placeholder="PT / CV / BUMN / Konsultan">
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label small fw-bold text-dark">Skema / Subjek Konsultasi</label>
                                <input type="text" class="form-control py-2 rounded-3" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Misal: Sertifikasi Ahli K3 Konstruksi atau Uji Kolektif Proyek">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label small fw-bold text-dark">Rincian Pertanyaan / Kebutuhan <span class="text-danger">*</span></label>
                                <textarea class="form-control rounded-3" id="message" name="message" rows="5" placeholder="Tuliskan detail pertanyaan atau kebutuhan jumlah personil yang ingin disertifikasi..." required>{{ old('message') }}</textarea>
                            </div>
                            <div class="col-12 pt-2">
                                <button type="submit" class="btn btn-primary fw-bold px-4 py-3 rounded-pill w-100 shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                                    <i class="bi bi-send-fill me-2"></i>Kirim Pesan ke Sekretariat
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Maps Section -->
        <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 20px;">
            <div class="p-3 bg-white border-bottom d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
                    <span class="fw-bold text-dark">Lokasi Kantor LSP ASTEKINDO di Google Maps</span>
                </div>
                <a href="https://maps.google.com/?q=Pasar+Minggu+Jakarta+Selatan" target="_blank" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
                    Buka di Aplikasi Maps <i class="bi bi-box-arrow-up-right ms-1"></i>
                </a>
            </div>
            <div class="ratio ratio-21x9" style="min-height: 380px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.864746685822!2d106.8415714!3d-6.2815147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2148283f6f1%3A0xb35a703a95bb2b46!2sJl.+Raya+Pasar+Minggu%2C+Jakarta+Selatan!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
