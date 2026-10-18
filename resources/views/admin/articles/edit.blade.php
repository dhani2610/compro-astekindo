@extends('layouts.admin')

@section('title', 'Ubah Artikel: ' . $art->title ?? 'Ubah Artikel')
@section('page_title', 'Edit Artikel')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Ubah Artikel: {{ $article->title }}</h4>
            <p class="text-muted small mb-0">Perbarui materi teknis, acuan SKKNI, atau status penerbitan artikel.</p>
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

    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-8">
                <label for="title" class="form-label fw-bold small text-dark">Judul Artikel <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" required>
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label fw-bold small text-dark">Kategori Bidang <span class="text-danger">*</span></label>
                <select class="form-select" id="category" name="category" required>
                    <option value="K3 Konstruksi" {{ old('category', $article->category) == 'K3 Konstruksi' ? 'selected' : '' }}>K3 Konstruksi</option>
                    <option value="Gedung & Sipil" {{ old('category', $article->category) == 'Gedung & Sipil' ? 'selected' : '' }}>Gedung & Sipil</option>
                    <option value="Jalan & Jembatan" {{ old('category', $article->category) == 'Jalan & Jembatan' ? 'selected' : '' }}>Jalan & Jembatan</option>
                    <option value="Manajemen Proyek" {{ old('category', $article->category) == 'Manajemen Proyek' ? 'selected' : '' }}>Manajemen Proyek</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="program_id" class="form-label fw-bold small text-dark">Terkait Skema Sertifikasi</label>
                <select class="form-select" id="program_id" name="program_id">
                    <option value="">-- Umum (Tidak Terikat Skema Tertentu) --</option>
                    @foreach($programs as $p)
                    <option value="{{ $p->id }}" {{ old('program_id', $article->program_id) == $p->id ? 'selected' : '' }}>{{ $p->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="author" class="form-label fw-bold small text-dark">Nama Penulis / Tim Ahli</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $article->author) }}">
            </div>

            <div class="col-md-4">
                <label for="read_time" class="form-label fw-bold small text-dark">Estimasi Waktu Baca (Menit)</label>
                <input type="number" class="form-control" id="read_time" name="read_time" value="{{ old('read_time', $article->read_time) }}">
            </div>

            <div class="col-12">
                <label for="excerpt" class="form-label fw-bold small text-dark">Ringkasan / Cuplikan Artikel <span class="text-danger">*</span></label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="2" required>{{ old('excerpt', $article->excerpt) }}</textarea>
            </div>

            <div class="col-12">
                <label for="content" class="form-label fw-bold small text-dark">Konten Lengkap Artikel <span class="text-danger">*</span></label>
                <textarea class="form-control" id="content" name="content" rows="12" required>{{ old('content', $article->content) }}</textarea>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', $article->is_published) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_published">Terbitkan Artikel</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $article->is_featured) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_featured">Tampilkan di 3 Card Artikel Beranda</label>
                </div>
            </div>

            <div class="col-12 pt-3 border-top mt-3">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Perubahan Artikel
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
