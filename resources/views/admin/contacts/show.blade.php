@extends('layouts.admin')

@section('title', 'Detail Pesan: ' . $contact->name)
@section('page_title', 'Detail Pesan Masuk')

@section('content')
<div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 18px; background: #ffffff; max-width: 850px;">
    <div class="mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Pesan dari: {{ $contact->name }}</h4>
            <p class="text-muted small mb-0">Diterima pada {{ $contact->created_at->isoFormat('dddd, D MMMM Y - HH:mm') }} WIB</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?');" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">
                    <i class="bi bi-trash-fill me-1"></i> Hapus
                </button>
            </form>
        </div>
    </div>

    <!-- Sender Details -->
    <div class="row g-3 p-3 bg-light rounded-3 mb-4">
        <div class="col-md-6">
            <small class="text-muted d-block">Nama Lengkap:</small>
            <strong class="text-dark">{{ $contact->name }}</strong>
        </div>
        <div class="col-md-6">
            <small class="text-muted d-block">Alamat Email:</small>
            <a href="mailto:{{ $contact->email }}" class="text-primary text-decoration-none fw-semibold">{{ $contact->email }}</a>
        </div>
        <div class="col-md-6">
            <small class="text-muted d-block">Nomor Telepon / WhatsApp:</small>
            @if($contact->phone)
            <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $contact->phone) }}" target="_blank" class="text-success text-decoration-none fw-semibold">
                <i class="bi bi-whatsapp me-1"></i>{{ $contact->phone }} (Balas via WhatsApp)
            </a>
            @else
            <span class="text-muted">-</span>
            @endif
        </div>
        <div class="col-md-6">
            <small class="text-muted d-block">Instansi / Perusahaan:</small>
            <strong class="text-dark">{{ $contact->company ?? '-' }}</strong>
        </div>
        <div class="col-12">
            <small class="text-muted d-block">Subjek / Topik Konsultasi:</small>
            <strong class="text-dark">{{ $contact->subject ?? '-' }}</strong>
        </div>
    </div>

    <!-- Message Content -->
    <div class="mb-4">
        <h6 class="fw-bold text-dark mb-2">Isi Pesan:</h6>
        <div class="p-4 border rounded-3 bg-white" style="line-height: 1.8; font-size: 1rem; color: #1e293b; white-space: pre-line;">
            {{ $contact->message }}
        </div>
    </div>

    <!-- Action Shortcuts -->
    <div class="pt-3 border-top d-flex gap-2 flex-wrap">
        @if($contact->phone)
        <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $contact->phone) }}&text={{ urlencode('Halo Bapak/Ibu ' . $contact->name . ', terima kasih telah menghubungi LSP ASTEKINDO. Mengenai pesan Anda: ') }}" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold">
            <i class="bi bi-whatsapp me-1"></i> Balas Langsung ke WhatsApp
        </a>
        @endif
        <a href="mailto:{{ $contact->email }}?subject=Balasan:%20{{ urlencode($contact->subject ?? 'Konsultasi LSP ASTEKINDO') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold">
            <i class="bi bi-envelope me-1"></i> Balas via Email
        </a>
    </div>
</div>
@endsection
