@extends('layouts.admin')

@section('title', 'Tulis Artikel & Panduan Baru')
@section('page_title', 'Tulis Artikel Baru')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Form Publikasi Artikel Baru</h4>
            <p class="text-muted small mb-0">Tulis artikel panduan teknis, K3 konstruksi, atau regulasi sertifikasi tenaga kerja.</p>
        </div>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
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

    <form action="{{ route('admin.articles.store') }}" method="POST">
        @csrf

        <div class="row g-3">
            <div class="col-md-8">
                <label for="title" class="form-label fw-bold small text-dark">Judul Artikel <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Contoh: Prosedur Keselamatan Kerja di Ketinggian Standar SMKK PUPR" required>
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label fw-bold small text-dark">Kategori Bidang <span class="text-danger">*</span></label>
                <select class="form-select" id="category" name="category" required>
                    <option value="K3 Konstruksi" {{ old('category') == 'K3 Konstruksi' ? 'selected' : '' }}>K3 Konstruksi</option>
                    <option value="Gedung & Sipil" {{ old('category') == 'Gedung & Sipil' ? 'selected' : '' }}>Gedung & Sipil</option>
                    <option value="Jalan & Jembatan" {{ old('category') == 'Jalan & Jembatan' ? 'selected' : '' }}>Jalan & Jembatan</option>
                    <option value="Manajemen Proyek" {{ old('category') == 'Manajemen Proyek' ? 'selected' : '' }}>Manajemen Proyek</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="program_id" class="form-label fw-bold small text-dark">Terkait Skema Sertifikasi</label>
                <select class="form-select" id="program_id" name="program_id">
                    <option value="">-- Umum (Tidak Terikat Skema Tertentu) --</option>
                    @foreach($programs as $p)
                    <option value="{{ $p->id }}" {{ old('program_id') == $p->id ? 'selected' : '' }}>{{ $p->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="author" class="form-label fw-bold small text-dark">Nama Penulis / Tim Ahli</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author', 'Tim Litbang LSP ASTEKINDO') }}">
            </div>

            <div class="col-md-4">
                <label for="read_time" class="form-label fw-bold small text-dark">Estimasi Waktu Baca (Menit)</label>
                <input type="number" class="form-control" id="read_time" name="read_time" value="{{ old('read_time', 6) }}">
            </div>

            <div class="col-12">
                <label for="excerpt" class="form-label fw-bold small text-dark">Ringkasan / Cuplikan Artikel <span class="text-danger">*</span></label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="2" placeholder="Ringkasan 1-2 kalimat untuk preview di beranda dan media sosial..." required>{{ old('excerpt') }}</textarea>
            </div>

            <div class="col-12">
                <label for="content" class="form-label fw-bold small text-dark">Konten Lengkap Artikel (Mendalam & Komprehensif) <span class="text-danger">*</span></label>
                <textarea class="form-control" id="content" name="content" rows="12" placeholder="Tuliskan materi teknis, standar SKKNI, acuan UU No. 2 Tahun 2017 tentang Jasa Konstruksi..." required>{{ old('content') }}</textarea>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', true) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_published">Terbitkan Artikel Sekarang</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_featured">Tampilkan di 3 Card Artikel Beranda</label>
                </div>
            </div>

            <div class="col-12 pt-3 border-top mt-3">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-send-fill me-1"></i> Publikasikan Artikel
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
