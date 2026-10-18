@extends('layouts.front')

@section('title', 'Daftar Skema Sertifikasi SKK Konstruksi | LSP ASTEKINDO')
@section('meta_description', 'Katalog lengkap Skema Sertifikasi Kompetensi Kerja (SKK) Konstruksi lisensi resmi BNSP & LPJK PUPR: Gedung, Jalan Jembatan, Ahli K3 Konstruksi SMKK, dan Manajemen Proyek.')

@section('content')

    <!-- Banner -->
    <section style="background: linear-gradient(135deg, var(--primary-navy-dark), var(--primary-navy)); padding: 60px 0; color: #fff; border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <span style="background: rgba(245, 158, 11, 0.15); color: var(--safety-gold); font-size: 0.78rem; font-weight: 800; padding: 5px 12px; border-radius: 20px; text-transform: uppercase;">
                <i class="bi bi-award-fill"></i> Standar SKKNI & KKNI
            </span>
            <h1 style="font-size: 2.6rem; font-weight: 900; margin: 12px 0 8px; letter-spacing: -0.5px;">Skema Sertifikasi Profesi Konstruksi</h1>
            <p style="color: #94a3b8; font-size: 1.05rem; max-width: 650px;">
                Pilih skema sertifikasi kompetensi sesuai kualifikasi pendidikan, pengalaman proyek, dan syarat tender badan usaha Anda.
            </p>
        </div>
    </section>

    <!-- Main List -->
    <section style="padding: 70px 0 90px;">
        <div class="container">
            <!-- Filter Pills -->
            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 40px; justify-content: center;">
                <a href="{{ route('programs') }}" 
                   style="padding: 8px 18px; border-radius: 20px; font-size: 0.86rem; font-weight: 700; text-decoration: none; border: 1px solid {{ !request('category') || request('category') == 'all' ? 'var(--safety-gold)' : 'var(--border-light)' }}; background: {{ !request('category') || request('category') == 'all' ? 'var(--safety-gold)' : '#fff' }}; color: {{ !request('category') || request('category') == 'all' ? '#0b1a30' : 'var(--text-main)' }};">
                    Semua Skema
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('programs', ['category' => $cat]) }}" 
                       style="padding: 8px 18px; border-radius: 20px; font-size: 0.86rem; font-weight: 700; text-decoration: none; border: 1px solid {{ request('category') == $cat ? 'var(--safety-gold)' : 'var(--border-light)' }}; background: {{ request('category') == $cat ? 'var(--safety-gold)' : '#fff' }}; color: {{ request('category') == $cat ? '#0b1a30' : 'var(--text-main)' }};">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>

            <!-- Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 28px;">
                @foreach($programs as $prog)
                    <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); overflow: hidden; box-shadow: var(--shadow-subtle); display: flex; flex-direction: column; transition: var(--transition);"
                         onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='var(--shadow-hover)'"
                         onmouseout="this.style.transform='none'; this.style.boxShadow='var(--shadow-subtle)'">
                        <div style="height: 200px; position: relative;">
                            <img src="{{ $prog->image ?: 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=600' }}" alt="{{ $prog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @if($prog->badge)
                                <span style="position: absolute; top: 12px; left: 12px; background: rgba(10,25,47,0.85); backdrop-filter: blur(8px); color: var(--safety-gold); font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 20px; border: 1px solid rgba(245, 158, 11, 0.4);">
                                    <i class="bi bi-award"></i> {{ $prog->badge }}
                                </span>
                            @endif
                            <span style="position: absolute; bottom: 12px; right: 12px; background: #ffffff; color: var(--blueprint-blue); font-size: 0.72rem; font-weight: 800; padding: 4px 10px; border-radius: 6px;">
                                {{ $prog->code }}
                            </span>
                        </div>
                        <div style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                            <span style="font-size: 0.76rem; font-weight: 800; color: var(--blueprint-blue); background: #eff6ff; padding: 4px 10px; border-radius: 6px; width: fit-content; margin-bottom: 12px;">
                                {{ $prog->jenjang }} &bull; {{ $prog->category }}
                            </span>
                            <h3 style="font-size: 1.18rem; font-weight: 800; color: var(--primary-navy); line-height: 1.35; margin-bottom: 12px;">
                                {{ $prog->title }}
                            </h3>
                            <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                                {{ Str::limit($prog->short_description, 130) }}
                            </p>
                            <div style="padding-top: 16px; border-top: 1px solid var(--border-light); display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 0.78rem; font-weight: 800; color: #059669;">
                                    <i class="bi bi-shield-fill-check"></i> {{ $prog->certification_body }}
                                </span>
                                <a href="{{ route('program.detail', $prog->slug) }}" class="btn-gold" style="padding: 8px 16px; font-size: 0.82rem;">
                                    Detail & Wilayah TUK <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
