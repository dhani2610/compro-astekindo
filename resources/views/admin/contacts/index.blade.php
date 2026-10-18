@extends('layouts.admin')

@section('title', 'Pesan Masuk Pengunjung')
@section('page_title', 'Kotak Masuk Pesan & Konsultasi')

@section('content')
<div class="card border-0 shadow-sm p-4" style="border-radius: 18px; background: #ffffff;">
    <div class="mb-4 pb-3 border-bottom">
        <h4 class="fw-bold text-dark mb-1">Daftar Pesan Masuk</h4>
        <p class="text-muted small mb-0">Pesan dan permohonan sertifikasi yang dikirimkan pengunjung melalui formulir kontak.</p>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col" style="width: 50px;">No</th>
                    <th scope="col">Nama Pengirim</th>
                    <th scope="col">Email & WhatsApp</th>
                    <th scope="col">Perusahaan / Subjek</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end" style="width: 140px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                <tr class="{{ !$msg->is_read ? 'table-primary bg-opacity-10' : '' }}">
                    <td class="text-muted small fw-bold">{{ $loop->iteration }}</td>
                    <td>
                        <div class="fw-bold text-dark">{{ $msg->name }}</div>
                    </td>
                    <td>
                        <div class="small text-dark">{{ $msg->email }}</div>
                        @if($msg->phone)
                        <small class="text-success fw-semibold"><i class="bi bi-whatsapp me-1"></i>{{ $msg->phone }}</small>
                        @endif
                    </td>
                    <td>
                        <div class="small fw-semibold text-primary">{{ $msg->company ?? '-' }}</div>
                        <small class="text-muted text-truncate d-block" style="max-width: 250px;">{{ $msg->subject ?? $msg->message }}</small>
                    </td>
                    <td>
                        <small class="text-muted">{{ $msg->created_at->isoFormat('D MMM Y, HH:mm') }}</small>
                    </td>
                    <td>
                        @if($msg->is_read)
                        <span class="badge bg-secondary-subtle text-secondary px-2 py-1 rounded-pill">Sudah Dibaca</span>
                        @else
                        <span class="badge bg-danger px-2 py-1 rounded-pill">Pesan Baru</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <div class="d-inline-flex gap-1">
                            <a href="{{ route('admin.contacts.show', $msg->id) }}" class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;" title="Baca Pesan">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <form action="{{ route('admin.contacts.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');" class="d-inline">
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
                    <td colspan="7" class="text-center py-4 text-muted">Belum ada pesan masuk di kotak pesan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($messages->hasPages())
    <div class="mt-4 pt-3 border-top d-flex justify-content-center">
        {{ $messages->links() }}
    </div>
    @endif
</div>
@endsection
