@extends('layouts.admin')

@section('title', 'Ubah Skema Sertifikasi: ' . $program->title)
@section('page_title', 'Edit Skema Sertifikasi')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Ubah Skema: {{ $program->title }}</h4>
            <p class="text-muted small mb-0">Perbarui data skema kompetensi, deskripsi, dan persyaratan unit SKKNI.</p>
        </div>
        <a href="{{ route('admin.programs.index') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
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

    <form action="{{ route('admin.programs.update', $program->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-8">
                <label for="title" class="form-label fw-bold small text-dark">Nama Skema Sertifikasi <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $program->title) }}" required>
            </div>

            <div class="col-md-4">
                <label for="code" class="form-label fw-bold small text-dark">Kode Skema BNSP</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $program->code) }}">
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label fw-bold small text-dark">Kategori Bidang <span class="text-danger">*</span></label>
                <select class="form-select" id="category" name="category" required>
                    <option value="Keselamatan & K3" {{ old('category', $program->category) == 'Keselamatan & K3' ? 'selected' : '' }}>Keselamatan & K3</option>
                    <option value="Teknik Sipil & Gedung" {{ old('category', $program->category) == 'Teknik Sipil & Gedung' ? 'selected' : '' }}>Teknik Sipil & Gedung</option>
                    <option value="Jalan & Jembatan" {{ old('category', $program->category) == 'Jalan & Jembatan' ? 'selected' : '' }}>Jalan & Jembatan</option>
                    <option value="Sumber Daya Air" {{ old('category', $program->category) == 'Sumber Daya Air' ? 'selected' : '' }}>Sumber Daya Air</option>
                    <option value="Manajemen Proyek" {{ old('category', $program->category) == 'Manajemen Proyek' ? 'selected' : '' }}>Manajemen Proyek</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="jenjang" class="form-label fw-bold small text-dark">Jenjang Kualifikasi KKNI <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="jenjang" name="jenjang" value="{{ old('jenjang', $program->jenjang) }}" required>
            </div>

            <div class="col-md-4">
                <label for="sort_order" class="form-label fw-bold small text-dark">Urutan Tampil <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $program->sort_order) }}" required>
            </div>

            <div class="col-12">
                <label for="short_description" class="form-label fw-bold small text-dark">Deskripsi Ringkas (Ringkasan Card) <span class="text-danger">*</span></label>
                <textarea class="form-control" id="short_description" name="short_description" rows="2" required>{{ old('short_description', $program->short_description) }}</textarea>
            </div>

            <div class="col-12">
                <label for="full_description" class="form-label fw-bold small text-dark">Deskripsi Lengkap & Persyaratan Unit Kompetensi <span class="text-danger">*</span></label>
                <textarea class="form-control" id="full_description" name="full_description" rows="5" required>{{ old('full_description', $program->full_description) }}</textarea>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $program->is_active) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_active">Aktifkan Skema (Tampil di Website)</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $program->is_featured) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_featured">Tandai sebagai Program Unggulan Beranda</label>
                </div>
            </div>

            <div class="col-12 pt-3 border-top mt-3">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Perubahan Skema
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
