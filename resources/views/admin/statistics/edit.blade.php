@extends('layouts.admin')

@section('title', 'Ubah Angka Statistik: ' . $statistic->label)
@section('page_title', 'Edit Statistik Beranda')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff; max-width: 800px;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Ubah Angka Metrik: {{ $statistic->label }}</h4>
            <p class="text-muted small mb-0">Perbarui nilai counter, unit, atau ikon visual yang muncul di beranda.</p>
        </div>
        <a href="{{ route('admin.statistics.index') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
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

    <form action="{{ route('admin.statistics.update', $statistic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-8">
                <label for="label" class="form-label fw-bold small text-dark">Label Statistik</label>
                <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $statistic->label) }}" required>
            </div>

            <div class="col-md-4">
                <label for="sort_order" class="form-label fw-bold small text-dark">Urutan Tampil</label>
                <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $statistic->sort_order) }}" required>
            </div>

            <div class="col-md-6">
                <label for="value" class="form-label fw-bold small text-dark">Nilai / Angka (Value)</label>
                <input type="text" class="form-control" id="value" name="value" value="{{ old('value', $statistic->value) }}" placeholder="Contoh: 15.000 atau 38" required>
            </div>

            <div class="col-md-6">
                <label for="unit" class="form-label fw-bold small text-dark">Satuan / Unit (Suffix)</label>
                <input type="text" class="form-control" id="unit" name="unit" value="{{ old('unit', $statistic->unit) }}" placeholder="Contoh: +, Orang, Provinsi, Skema">
            </div>

            <div class="col-md-12">
                <label for="icon" class="form-label fw-bold small text-dark">Bootstrap Icon Class</label>
                <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon', $statistic->icon) }}" placeholder="Contoh: bi bi-mortarboard-fill">
            </div>

            <div class="col-12">
                <div class="form-check form-switch pt-2">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $statistic->is_active) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold text-dark small" for="is_active">Tampilkan counter statistik ini di beranda</label>
                </div>
            </div>

            <div class="col-12 pt-3 border-top mt-4">
                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
                    <i class="bi bi-check2-circle me-1"></i> Simpan Perubahan Statistik
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
