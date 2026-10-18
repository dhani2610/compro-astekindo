@extends('layouts.admin')

@section('title', 'Tambah Skema Sertifikasi Baru')
@section('page_title', 'Tambah Skema Sertifikasi')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Form Tambah Skema Sertifikasi</h4>
            <p class="text-muted small mb-0">Lengkapi data skema kompetensi BNSP dan standar LPJK Kementerian PUPR.</p>
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

    <form action="{{ route('admin.programs.store') }}" method="POST">
        @csrf

        <div class="row g-3">
            <div class="col-md-8">
                <label for="title" class="form-label fw-bold small text-dark">Nama Skema Sertifikasi <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Contoh: Ahli K3 Konstruksi (Muda, Madya, Utama)" required>
            </div>

            <div class="col-md-4">
                <label for="code" class="form-label fw-bold small text-dark">Kode Skema BNSP</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" placeholder="Contoh: SKM-K3-001/2021">
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label fw-bold small text-dark">Kategori Bidang <span class="text-danger">*</span></label>
                <select class="form-select" id="category" name="category" required>
                    <option value="Keselamatan & K3" {{ old('category') == 'Keselamatan & K3' ? 'selected' : '' }}>Keselamatan & K3</option>
                    <option value="Teknik Sipil & Gedung" {{ old('category') == 'Teknik Sipil & Gedung' ? 'selected' : '' }}>Teknik Sipil & Gedung</option>
                    <option value="Jalan & Jembatan" {{ old('category') == 'Jalan & Jembatan' ? 'selected' : '' }}>Jalan & Jembatan</option>
                    <option value="Sumber Daya Air" {{ old('category') == 'Sumber Daya Air' ? 'selected' : '' }}>Sumber Daya Air</option>
                    <option value="Manajemen Proyek" {{ old('category') == 'Manajemen Proyek' ? 'selected' : '' }}>Manajemen Proyek</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="jenjang" class="form-label fw-bold small text-dark">Jenjang Kualifikasi KKNI <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="jenjang" name="jenjang" value="{{ old('jenjang', 'Jenjang 7 / 8 / 9') }}" placeholder="Contoh: Jenjang 7 / 8 / 9" required>
            </div>

            <div class="col-md-4">
                <label for="sort_order" class="form-label fw-bold small text-dark">Urutan Tampil <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 1) }}" required>
            </div>

            <div class="col-12">
                <label for="short_description" class="form-label fw-bold small text-dark">Deskripsi Ringkas (Ringkasan Card) <span class="text-danger">*</span></label>
                <textarea class="form-control" id="short_description" name="short_description" rows="2" placeholder="Deskripsi ringkas yang tampil pada preview card..." required>{{ old('short_description') }}</textarea>
            </div>

            <div class="col-12">
                <label for="full_description" class="form-label fw-bold small text-dark">Deskripsi Lengkap & Persyaratan Unit Kompetensi <span class="text-danger">*</span></label>
                <textarea class="form-control" id="full_description" name="full_description" rows="5" placeholder="Rincian lengkap kualifikasi, unit SKKNI, dan lingkup asesmen..." required>{{ old('full_description') }}</textarea>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_active">Aktifkan Skema (Tampil di Website)</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_featured">Tandai sebagai Program Unggulan Beranda</label>
                </div>
            </div>

            <div class="col-12 pt-3 border-top mt-3">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Skema Baru
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
