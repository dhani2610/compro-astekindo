@extends('layouts.admin')

@section('title', 'Daftar Skema Sertifikasi')
@section('page_title', 'Kelola Skema Sertifikasi BNSP')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 18px; background: #ffffff;">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4 pb-3 border-bottom">
        <div>
            <h4 class="fw-bold text-dark mb-1">Daftar Skema Sertifikasi Terlisensi</h4>
            <p class="text-muted small mb-0">Kelola master skema kompetensi kerja konstruksi yang terintegrasi ke 38 provinsi.</p>
        </div>
        <a href="{{ route('admin.programs.create') }}" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
            <i class="bi bi-plus-lg me-1"></i> Tambah Skema Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col" style="width: 50px;">No</th>
                    <th scope="col">Nama Skema Sertifikasi</th>
                    <th scope="col">Kode / Kategori</th>
                    <th scope="col">Jenjang KKNI</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end" style="width: 140px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($programs as $prog)
                <tr>
                    <td class="text-muted small fw-bold">{{ $loop->iteration }}</td>
                    <td>
                        <div class="fw-bold text-dark">{{ $prog->title }}</div>
                        <small class="text-muted text-truncate d-block" style="max-width: 380px;">{{ $prog->short_description }}</small>
                    </td>
                    <td>
                        <div class="small fw-semibold text-primary">{{ $prog->code ?? '-' }}</div>
                        <span class="badge bg-light text-muted border">{{ $prog->category }}</span>
                    </td>
                    <td>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill">{{ $prog->jenjang }}</span>
                    </td>
                    <td>
                        @if($prog->is_active)
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill">Aktif</span>
                        @else
                        <span class="badge bg-secondary-subtle text-secondary px-2 py-1 rounded-pill">Draft</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <div class="d-inline-flex gap-1">
                            <a href="{{ route('admin.programs.edit', $prog->id) }}" class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;" title="Edit">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{ route('admin.programs.destroy', $prog->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus skema ini?');" class="d-inline">
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
                    <td colspan="6" class="text-center py-4 text-muted">Belum ada skema sertifikasi yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($programs->hasPages())
    <div class="mt-4 pt-3 border-top d-flex justify-content-center">
        {{ $programs->links() }}
    </div>
    @endif
</div>
@endsection
