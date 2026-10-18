@extends('layouts.admin')

@section('title', 'Daftar Artikel & Panduan')
@section('page_title', 'Kelola Artikel & Kajian Teknis')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 18px; background: #ffffff;">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4 pb-3 border-bottom">
        <div>
            <h4 class="fw-bold text-dark mb-1">Daftar Artikel & Panduan Konstruksi</h4>
            <p class="text-muted small mb-0">Publikasi artikel kustom selain 200 katalog dinamis yang tersedia di direktori web.</p>
        </div>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm" style="background: #1D4ED8; border-color: #1D4ED8;">
            <i class="bi bi-pencil-square me-1"></i> Buat Artikel Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col" style="width: 50px;">No</th>
                    <th scope="col">Judul Artikel</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end" style="width: 140px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $art)
                <tr>
                    <td class="text-muted small fw-bold">{{ $loop->iteration }}</td>
                    <td>
                        <div class="fw-bold text-dark">{{ $art->title }}</div>
                        <small class="text-muted text-truncate d-block" style="max-width: 380px;">{{ $art->excerpt }}</small>
                    </td>
                    <td>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill">{{ $art->category }}</span>
                    </td>
                    <td class="small text-muted">{{ $art->author ?? 'Tim LSP ASTEKINDO' }}</td>
                    <td>
                        @if($art->is_published)
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill">Tayang</span>
                        @else
                        <span class="badge bg-secondary-subtle text-secondary px-2 py-1 rounded-pill">Draft</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <div class="d-inline-flex gap-1">
                            <a href="{{ route('admin.articles.edit', $art->id) }}" class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;" title="Edit">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{ route('admin.articles.destroy', $art->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');" class="d-inline">
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
                    <td colspan="6" class="text-center py-4 text-muted">Belum ada artikel kustom yang dibuat.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($articles->hasPages())
    <div class="mt-4 pt-3 border-top d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
    @endif
</div>
@endsection
