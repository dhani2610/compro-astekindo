@extends('layouts.admin')

@section('title', 'Daftar Portofolio Proyek')
@section('page_title', 'Kelola Portofolio Proyek')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 18px; background: #ffffff;">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4 pb-3 border-bottom">
        <div>
            <h4 class="fw-bold text-dark mb-1">Daftar Proyek Konstruksi & Sertifikasi</h4>
            <p class="text-muted small mb-0">Kelola dokumentasi portofolio proyek strategis nasional dan BUMN.</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
            <i class="bi bi-plus-lg me-1"></i> Tambah Proyek Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col" style="width: 50px;">No</th>
                    <th scope="col">Nama Proyek</th>
                    <th scope="col">Klien / Kontraktor</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tahun</th>
                    <th scope="col" class="text-end" style="width: 140px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $proj)
                <tr>
                    <td class="text-muted small fw-bold">{{ $loop->iteration }}</td>
                    <td>
                        <div class="fw-bold text-dark">{{ $proj->title }}</div>
                        <small class="text-muted text-truncate d-block" style="max-width: 360px;">{{ $proj->description }}</small>
                    </td>
                    <td>
                        <div class="small fw-semibold text-primary">{{ $proj->client_name ?? '-' }}</div>
                        <small class="text-muted">{{ $proj->location }}</small>
                    </td>
                    <td>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill">{{ $proj->category }}</span>
                    </td>
                    <td>
                        <span class="badge bg-light text-muted border">{{ $proj->year }}</span>
                    </td>
                    <td class="text-end">
                        <div class="d-inline-flex gap-1">
                            <a href="{{ route('admin.projects.edit', $proj->id) }}" class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;" title="Edit">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{ route('admin.projects.destroy', $proj->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek ini?');" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;" title="Hapus">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">Belum ada portofolio proyek yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($projects->hasPages())
    <div class="mt-4 pt-3 border-top d-flex justify-content-center">
        {{ $projects->links() }}
    </div>
    @endif
</div>
@endsection
