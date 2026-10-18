@extends('layouts.admin')

@section('title', 'Ubah Proyek: ' . $project->title)
@section('page_title', 'Edit Portofolio Proyek')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Ubah Proyek: {{ $project->title }}</h4>
            <p class="text-muted small mb-0">Perbarui rincian proyek, klien, dan dokumentasi sertifikasi kompetensi.</p>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
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

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-8">
                <label for="title" class="form-label fw-bold small text-dark">Nama Proyek <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}" required>
            </div>

            <div class="col-md-4">
                <label for="client_name" class="form-label fw-bold small text-dark">Nama Klien / Kontraktor</label>
                <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name', $project->client_name) }}">
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label fw-bold small text-dark">Kategori Proyek <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $project->category) }}" required>
            </div>

            <div class="col-md-4">
                <label for="year" class="form-label fw-bold small text-dark">Tahun Pelaksanaan</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $project->year) }}">
            </div>

            <div class="col-md-4">
                <label for="location" class="form-label fw-bold small text-dark">Lokasi Proyek</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $project->location) }}">
            </div>

            <div class="col-md-6">
                <label for="participants_certified" class="form-label fw-bold small text-dark">Jumlah Tenaga Kerja Tersertifikasi</label>
                <input type="text" class="form-control" id="participants_certified" name="participants_certified" value="{{ old('participants_certified', $project->participants_certified) }}">
            </div>

            <div class="col-md-6">
                <label for="sort_order" class="form-label fw-bold small text-dark">Urutan Tampil <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $project->sort_order) }}" required>
            </div>

            <div class="col-12">
                <label for="description" class="form-label fw-bold small text-dark">Deskripsi Proyek & Lingkup Sertifikasi <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
            </div>

            <div class="col-12">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_featured">Tampilkan di Beranda (Featured Project)</label>
                </div>
            </div>

            <div class="col-12 pt-3 border-top mt-3">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Perubahan Proyek
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
