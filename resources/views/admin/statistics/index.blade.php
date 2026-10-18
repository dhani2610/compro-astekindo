@extends('layouts.admin')

@section('title', 'Kelola Counter Statistik Beranda')
@section('page_title', 'Counter Statistik Beranda')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 18px; background: #ffffff;">
    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
        <div>
            <h4 class="fw-bold text-dark mb-1">Daftar Counter Statistik</h4>
            <p class="text-muted small mb-0">Angka metrik yang ditampilkan pada banner prestasi beranda website.</p>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col" style="width: 60px;">No</th>
                    <th scope="col">Label Statistik</th>
                    <th scope="col">Nilai / Angka</th>
                    <th scope="col">Satuan / Unit</th>
                    <th scope="col">Urutan</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end" style="width: 120px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($statistics as $stat)
                <tr>
                    <td class="text-muted small fw-bold">{{ $loop->iteration }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-primary"><i class="{{ $stat->icon ?? 'bi bi-award' }}"></i></span>
                            <span class="fw-bold text-dark">{{ $stat->label }}</span>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-primary fs-6 px-3 py-1 rounded-pill">{{ $stat->value }}</span>
                    </td>
                    <td class="text-muted">{{ $stat->unit }}</td>
                    <td>{{ $stat->sort_order }}</td>
                    <td>
                        @if($stat->is_active)
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill">Aktif</span>
                        @else
                        <span class="badge bg-secondary-subtle text-secondary px-2 py-1 rounded-pill">Nonaktif</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.statistics.edit', $stat->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                            <i class="bi bi-pencil-square me-1"></i> Ubah
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
