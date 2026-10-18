@extends('layouts.admin')

@section('title', 'Dashboard Administrator')
@section('page_title', 'Ringkasan & Metrik Sistem')

@section('content')
<!-- KPI Cards Row -->
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 16px; background: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted small fw-bold">Skema Sertifikasi</span>
                <div class="bg-primary-subtle text-primary p-2 rounded-3">
                    <i class="bi bi-mortarboard-fill fs-5"></i>
                </div>
            </div>
            <h3 class="fw-bold text-dark mb-1">{{ $totalPrograms }}</h3>
            <span class="text-success small fw-semibold">
                <i class="bi bi-shield-check me-1"></i>Terlisensi BNSP-LPJK
            </span>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 16px; background: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted small fw-bold">Katalog 200 Artikel</span>
                <div class="bg-success-subtle text-success p-2 rounded-3">
                    <i class="bi bi-journal-check fs-5"></i>
                </div>
            </div>
            <h3 class="fw-bold text-dark mb-1">200+</h3>
            <span class="text-muted small">
                <i class="bi bi-cpu me-1 text-primary"></i>Client-side JS Fast Filter
            </span>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 16px; background: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted small fw-bold">Portofolio Proyek</span>
                <div class="bg-warning-subtle text-warning-emphasis p-2 rounded-3">
                    <i class="bi bi-building-fill fs-5"></i>
                </div>
            </div>
            <h3 class="fw-bold text-dark mb-1">{{ $totalProjects }}</h3>
            <span class="text-muted small">
                <i class="bi bi-check-all text-success me-1"></i>Proyek Nasional & BUMN
            </span>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 16px; background: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text-muted small fw-bold">Pesan Masuk</span>
                <div class="bg-info-subtle text-info p-2 rounded-3">
                    <i class="bi bi-envelope-fill fs-5"></i>
                </div>
            </div>
            <h3 class="fw-bold text-dark mb-1">{{ $totalMessages }}</h3>
            <span class="badge {{ $unreadMessages > 0 ? 'bg-danger' : 'bg-secondary' }} px-2 py-1 rounded-pill small">
                {{ $unreadMessages }} Belum Dibaca
            </span>
        </div>
    </div>
</div>

<!-- Counter Statistics Preview (User requirement: bisa di atur di admin panel) -->
<div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px; background: #ffffff;">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div>
            <h5 class="fw-bold text-dark mb-1">Counter Statistik Beranda (Aktif)</h5>
            <p class="text-muted small mb-0">Angka statistik yang tampil di halaman depan website.</p>
        </div>
        <a href="{{ route('admin.statistics.index') }}" class="btn btn-sm btn-primary rounded-pill px-3">
            <i class="bi bi-pencil-square me-1"></i> Edit Angka Statistik
        </a>
    </div>

    <div class="row g-3">
        @foreach($statistics as $stat)
        <div class="col-md-3">
            <div class="border rounded-3 p-3 text-center bg-light">
                <div class="text-primary mb-1"><i class="{{ $stat->icon ?? 'bi bi-award' }} fs-4"></i></div>
                <h4 class="fw-bold text-dark mb-0">{{ $stat->value }} {{ $stat->unit }}</h4>
                <small class="text-muted fw-semibold">{{ $stat->label }}</small>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row g-4">
    <!-- Recent Messages -->
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 16px; background: #ffffff;">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="fw-bold text-dark mb-0">Pesan Pengunjung Terbaru</h5>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-secondary rounded-pill">Lihat Semua</a>
            </div>

            @if(count($recentMessages) > 0)
            <div class="list-group list-group-flush">
                @foreach($recentMessages as $msg)
                <div class="list-group-item px-0 py-3 border-bottom">
                    <div class="d-flex justify-content-between align-items-start mb-1">
                        <h6 class="fw-bold mb-0 text-dark">{{ $msg->name }}</h6>
                        <small class="text-muted" style="font-size: 0.75rem;">{{ $msg->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="text-muted small text-truncate mb-2">{{ $msg->message }}</p>
                    <div class="d-flex gap-2">
                        @if($msg->phone)
                        <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $msg->phone) }}" target="_blank" class="badge bg-success text-decoration-none px-2 py-1">
                            <i class="bi bi-whatsapp me-1"></i>{{ $msg->phone }}
                        </a>
                        @endif
                        <span class="badge {{ $msg->is_read ? 'bg-secondary' : 'bg-primary' }}">{{ $msg->is_read ? 'Dibaca' : 'Baru' }}</span>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-muted py-4 text-center">Belum ada pesan masuk.</p>
            @endif
        </div>
    </div>

    <!-- Quick Links & Actions -->
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 16px; background: #ffffff;">
            <h5 class="fw-bold text-dark mb-3">Pintasan Manajemen Cepat</h5>
            <div class="d-grid gap-3">
                <a href="{{ route('admin.settings.general') }}" class="p-3 border rounded-3 text-decoration-none d-flex align-items-center justify-content-between hover-bg-light">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary-subtle text-primary p-2 rounded-circle">
                            <i class="bi bi-gear-wide-connected fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Ubah Nama Web, Logo & No. WhatsApp</h6>
                            <small class="text-muted">Kelola identitas resmi LSP ASTEKINDO</small>
                        </div>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>

                <a href="{{ route('admin.programs.create') }}" class="p-3 border rounded-3 text-decoration-none d-flex align-items-center justify-content-between hover-bg-light">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-success-subtle text-success p-2 rounded-circle">
                            <i class="bi bi-plus-circle-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Tambah Skema Sertifikasi Baru</h6>
                            <small class="text-muted">Input skema kompetensi BNSP & LPJK</small>
                        </div>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>

                <a href="{{ route('admin.projects.create') }}" class="p-3 border rounded-3 text-decoration-none d-flex align-items-center justify-content-between hover-bg-light">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-warning-subtle text-warning-emphasis p-2 rounded-circle">
                            <i class="bi bi-building-add fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Tambah Portofolio Proyek</h6>
                            <small class="text-muted">Tampilkan proyek strategis terbaru</small>
                        </div>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>

                <a href="{{ route('admin.articles.create') }}" class="p-3 border rounded-3 text-decoration-none d-flex align-items-center justify-content-between hover-bg-light">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-info-subtle text-info p-2 rounded-circle">
                            <i class="bi bi-pencil-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Tulis Artikel Baru</h6>
                            <small class="text-muted">Publikasikan panduan teknis konstruksi</small>
                        </div>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
