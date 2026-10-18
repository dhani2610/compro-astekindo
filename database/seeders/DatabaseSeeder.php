<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Project;
use App\Models\Client;
use App\Models\Testimonial;
use App\Services\AstekindoSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Super Admin User
        User::firstOrCreate(
            ['email' => 'admin@trainingk3.com'],
            [
                'name' => 'Super Administrator Training K3 Konstruksi',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'Training K3 Konstruksi',
            'site_tagline' => 'Lembaga Pelatihan & Pembinaan Sertifikasi SKK Konstruksi Berstandar SKKNI & SMKK',
            'company_name' => 'Training K3 Konstruksi',
            'license_bnsp' => 'Standar Mutu SKKNI & SMKK',
            'license_lpjk' => 'Standar Konstruksi Nasional',
            'phone' => '08118500177',
            'whatsapp' => '08118500177',
            'whatsapp_2' => '',
            'email' => 'kontak@trainingk3konstruksi.my.id',
            'email_secondary' => 'sekretariat.trainingk3@gmail.com',
            'address' => 'Jl. Raden Inten II, Duren Sawit, Jakarta Timur, DKI Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.257544078498!2d106.91428237588325!3d-6.229737993758416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698cb0e252a1d9%3A0x6b24a3507d383b1!2sDuren%20Sawit%2C%20East%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.30 - 17.00 WIB | Layanan Hotline: Setiap Hari',
            'hero_title' => 'Training K3 Konstruksi & Sertifikasi Kompetensi Kerja (SKK)',
            'hero_description' => 'Mewujudkan tenaga kerja konstruksi Indonesia yang unggul, kompeten, berdaya saing global, dan berstandar mutu keselamatan konstruksi nasional.',
            'footer_text' => 'Training K3 Konstruksi menyelenggarakan program pembinaan dan penyiapan sertifikasi kompetensi kerja konstruksi berstandar SKKNI dan SMKK nasional.',
        ];

        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(['key' => $key], ['value' => $val, 'group' => 'general']);
        }

        // 3. Dynamic Statistics (Editable in Admin Panel - 340 Asesor Removed per client instruction)
        $statistics = [
            [
                'key' => 'tenaga_kerja_tersertifikasi',
                'label' => 'Tenaga Kerja Tersertifikasi',
                'value' => '48.750+',
                'unit' => 'Personel',
                'icon' => 'bi-people-fill',
                'description' => 'Ahli Utama, Madya, Muda, Teknisi dan Pelaksana bersertifikat SKK resmi se-Indonesia.',
                'sort_order' => 1,
            ],
            [
                'key' => 'skema_sertifikasi_aktif',
                'label' => 'Skema Pelatihan & Sertifikasi',
                'value' => '202',
                'unit' => 'Skema',
                'icon' => 'bi-card-checklist',
                'description' => 'Meliputi Sumber Daya Air, Jalan Jembatan, SMKK K3, Gedung Geoteknik, dan Manajemen Proyek.',
                'sort_order' => 2,
            ],
            [
                'key' => 'jaringan_tuk_provinsi',
                'label' => 'Jaringan Wilayah se-Indonesia',
                'value' => '38',
                'unit' => 'Provinsi',
                'icon' => 'bi-geo-alt-fill',
                'description' => 'Pusat pelatihan teknis dan Tempat Uji Kompetensi (TUK) di 38 provinsi di Indonesia.',
                'sort_order' => 3,
            ]
        ];

        Statistic::truncate();
        foreach ($statistics as $stat) {
            Statistic::create($stat);
        }

        // 4. Hero Slides (BNSP & LPJK removed per client instruction)
        $slides = [
            [
                'title' => 'Training K3 Konstruksi & Sertifikasi Kompetensi Kerja (SKK)',
                'subtitle' => 'Tingkatkan legalitas, kredibilitas profesional, dan syarat mutlak tender proyek konstruksi nasional.',
                'badge' => 'Program Pelatihan & Sertifikasi Resmi',
                'cta_text' => 'Lihat 202 Skema Pelatihan',
                'cta_link' => '#skema-sertifikasi',
                'cta2_text' => 'Konsultasi Syarat SKK',
                'cta2_link' => 'https://api.whatsapp.com/send?phone=628118500177',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 1,
            ],
            [
                'title' => 'Jaminan Standar Mutu Ahli Konstruksi Indonesia di Seluruh Provinsi',
                'subtitle' => 'Melayani pelatihan dan sertifikasi Ahli Utama, Madya, Muda, Pelaksana Lapangan, dan Pengawas Struktur se-Indonesia.',
                'badge' => 'Standar Mutu SKKNI Nasional',
                'cta_text' => 'Jelajahi Wilayah TUK',
                'cta_link' => '#wilayah-sertifikasi',
                'cta2_text' => 'Hubungi Sekretariat',
                'cta2_link' => '/kontak',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 2,
            ],
            [
                'title' => 'Sistem Manajemen Keselamatan Konstruksi (SMKK) & Ahli K3',
                'subtitle' => 'Lindungi proyek dari risiko fatal kecelakaan kerja dengan tenaga ahli K3 konstruksi bersertifikasi resmi.',
                'badge' => 'Kepatuhan Standar Keselamatan Konstruksi',
                'cta_text' => 'Skema Ahli K3 Konstruksi',
                'cta_link' => '/skema-sertifikasi',
                'cta2_text' => 'WhatsApp Konsultasi',
                'cta2_link' => 'https://api.whatsapp.com/send?phone=628118500177',
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 3,
            ]
        ];

        HeroSlide::truncate();
        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }

        // 5. Programs (Skema Sertifikasi) - All 202 crawled schemes
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        Article::truncate();
        Program::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $masterSchemes = AstekindoSchemeService::getMasterSchemes();
        $fillable = (new Program)->getFillable();
        foreach ($masterSchemes as $scheme) {
            $data = array_intersect_key($scheme, array_flip($fillable));
            Program::create($data);
        }

        // 6. Projects (Our Projects)
        $projects = [
            [
                'title' => 'Sertifikasi Tenaga Ahli Jalan & Jembatan Jalan Tol Trans Sumatera',
                'slug' => 'sertifikasi-tol-trans-sumatera',
                'client_name' => 'PT Hutama Karya (Persero) & Subkontraktor Rekanan',
                'category' => 'Infrastruktur Jalan Bebas Hambatan',
                'year' => '2023 - 2026',
                'location' => 'Sumatera Utara - Riau - Lampung',
                'participants_certified' => '850+ Insinyur & Pelaksana',
                'description' => 'Uji kompetensi skema Ahli Teknik Jalan, Ahli Jembatan Precast Girder, dan Pelaksana Aspal Hot-mix pada segmen pembangunan Jalan Tol Trans Sumatera.',
                'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&auto=format&fit=crop&q=80',
                'sort_order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Sertifikasi Personel Keselamatan Konstruksi SMKK Proyek IKN Nusantara',
                'slug' => 'sertifikasi-smkk-ikn-nusantara',
                'client_name' => 'Satgas Pembangunan IKN & BUMN Karya',
                'category' => 'Ibu Kota Nusantara (IKN)',
                'year' => '2024 - 2026',
                'location' => 'Penajam Paser Utara, Kalimantan Timur',
                'participants_certified' => '1.200+ Petugas & Ahli K3',
                'description' => 'Asesmen massal penerapan SMKK, Job Safety Analysis (JSA), dan tanggap darurat alat berat pada pembangunan Istana Negara, Kemenko, dan jalan sumbu kebangsaan.',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80',
                'sort_order' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Sertifikasi Ahli Struktur & Geoteknik Proyek LRT Jabodebek',
                'slug' => 'sertifikasi-lrt-jabodebek',
                'client_name' => 'PT Adhi Karya (Persero) Tbk',
                'category' => 'Transportasi Massal Rel Layang',
                'year' => '2022 - 2024',
                'location' => 'DKI Jakarta & Jawa Barat',
                'participants_certified' => '420+ Tenaga Ahli',
                'description' => 'Uji sertifikasi Ahli Struktur Beton Prategang U-Duct, pengawasan pier head, dan analisis tanah lunak pada bentang jalur LRT layang.',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&auto=format&fit=crop&q=80',
                'sort_order' => 3,
                'is_featured' => true,
            ],
            [
                'title' => 'Sertifikasi Ahli Rekayasa Bendungan & SDA Bendungan Bener Purworejo',
                'slug' => 'sertifikasi-bendungan-bener',
                'client_name' => 'Balai Besar Wilayah Sungai (BBWS) Serayu Opak & Waskita',
                'category' => 'Ketahanan Air & Energi',
                'year' => '2023 - 2025',
                'location' => 'Purworejo, Jawa Tengah',
                'participants_certified' => '310+ Ahli Sumber Daya Air',
                'description' => 'Sertifikasi pengawasan tubuh bendungan urugan batu berinti lempung tertinggi di Indonesia, saluran pengelak terowongan, dan spillway.',
                'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?w=800&auto=format&fit=crop&q=80',
                'sort_order' => 4,
                'is_featured' => true,
            ],
            [
                'title' => 'Sertifikasi Pengawas Struktur Gedung Tinggi Bertingkat Menara Jakarta',
                'slug' => 'sertifikasi-gedung-menara-jakarta',
                'client_name' => 'Konsorsium Kontraktor Gedung Bertingkat Swasta & BUMN',
                'category' => 'Gedung Pencakar Langit (High-Rise)',
                'year' => '2023 - 2026',
                'location' => 'Jakarta Pusat',
                'participants_certified' => '560+ Pengawas Struktur',
                'description' => 'Uji kompetensi pengawasan beton fc 50 MPa, pembesian struktur bertulang, post-tensioning slab, dan instalasi façade curtain wall.',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800&auto=format&fit=crop&q=80',
                'sort_order' => 5,
                'is_featured' => true,
            ],
            [
                'title' => 'Sertifikasi Ahli Rigid Pavement Bandara Internasional Dhoho Kediri',
                'slug' => 'sertifikasi-bandara-dhoho-kediri',
                'client_name' => 'PT Surya Dhoho Investama & Wijaya Karya',
                'category' => 'Fasilitas Bandara Internasional',
                'year' => '2022 - 2024',
                'location' => 'Kediri, Jawa Timur',
                'participants_certified' => '280+ Personel Kendali Mutu',
                'description' => 'Uji kompetensi kendali mutu perkerasan runway 3.300 meter untuk pendaratan pesawat badan lebar (Wide Body Boeing 777).',
                'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&auto=format&fit=crop&q=80',
                'sort_order' => 6,
                'is_featured' => true,
            ],
        ];

        foreach ($projects as $proj) {
            Project::updateOrCreate(['slug' => $proj['slug']], $proj);
        }

        // 7. Clients (Our Clients)
        $clients = [
            ['name' => 'Lembaga Pengembangan Jasa Konstruksi (LPJK)', 'industry' => 'Regulator & Akreditasi Jasa Konstruksi', 'sort_order' => 1],
            ['name' => 'PT Wijaya Karya (Persero) Tbk', 'industry' => 'BUMN Konstruksi & Infrastruktur', 'sort_order' => 2],
            ['name' => 'PT Adhi Karya (Persero) Tbk', 'industry' => 'BUMN Konstruksi Rel & Gedung', 'sort_order' => 3],
            ['name' => 'PT Waskita Karya (Persero) Tbk', 'industry' => 'BUMN Konstruksi Jalan Tol & Transmisi', 'sort_order' => 4],
            ['name' => 'PT Hutama Karya (Persero)', 'industry' => 'BUMN Operator Jalan Tol Trans Sumatera', 'sort_order' => 5],
            ['name' => 'PT PP (Persero) Tbk', 'industry' => 'BUMN Konstruksi Gedung & EPC Energi', 'sort_order' => 6],
            ['name' => 'PT Total Bangun Persada Tbk', 'industry' => 'Kontraktor Gedung Komersial Swasta', 'sort_order' => 7],
            ['name' => 'PT Jaya Konstruksi MP Tbk', 'industry' => 'Infrastruktur Terpadu Perkotaan', 'sort_order' => 8],
        ];

        foreach ($clients as $cl) {
            Client::updateOrCreate(['name' => $cl['name']], $cl);
        }

        // 8. Testimonials
        $testimonials = [
            [
                'name' => 'Ir. Hendra Gunawan, S.T., M.T., IPU',
                'role' => 'Project Director Jalan Tol Trans Sumatera',
                'company' => 'PT Hutama Karya Infrastruktur',
                'content' => 'Proses pembinaan dan sertifikasi di Training K3 Konstruksi sangat objektif, profesional, dan berstandar BNSP yang ketat. Seluruh tim insinyur proyek kami terbukti memiliki kompetensi unggul dan kepatuhan penuh terhadap standar keselamatan SMKK.',
                'rating' => 5,
                'scheme_name' => 'Ahli Manajemen Proyek Konstruksi (Jenjang 9)',
                'sort_order' => 1,
            ],
            [
                'name' => 'Rian Hidayat, S.Tr.T.',
                'role' => 'HSE Site Coordinator Proyek Sumbu Kebangsaan IKN',
                'company' => 'KSO BUMN Karya IKN',
                'content' => 'Sertifikat SKK Ahli K3 Konstruksi melalui Training K3 Konstruksi menjadi paspor utama saya dalam memimpin tim safety di IKN Nusantara. Pelayanan cepat, asisten verifikasi portofolionya sangat membantu, dan sertifikat langsung terdaftar di sistem resmi LPJK.',
                'rating' => 5,
                'scheme_name' => 'Ahli K3 Konstruksi (Jenjang 7)',
                'sort_order' => 2,
            ],
            [
                'name' => 'Bambang Sudibyo, S.T.',
                'role' => 'Kepala Pengawas Struktur High-Rise Building',
                'company' => 'Konsultan Manajemen Konstruksi Nasional',
                'content' => 'Materi uji kompetensi mencakup aspek praktis lapangan terkini seperti BIM dan metode pengecoran massal. Training K3 Konstruksi benar-benar menjamin bahwa pemegang sertifikat siap tempur di lapangan tanpa keraguan.',
                'rating' => 5,
                'scheme_name' => 'Pengawas Struktur Bangunan Gedung (Jenjang 6)',
                'sort_order' => 3,
            ],
            [
                'name' => 'Dra. Maya Anggraini',
                'role' => 'General Manager Human Capital & Legal',
                'company' => 'PT Jaya Cipta Konstruksi Utama',
                'content' => 'Kerja sama batch sertifikasi korporat bersama Training K3 Konstruksi sangat memuaskan. Lebih dari 120 insinyur perusahaan kami tuntas tersertifikasi dengan tertib dan tepat waktu sebelum proses tender dibuka.',
                'rating' => 5,
                'scheme_name' => 'Sertifikasi Kolektif Badan Usaha',
                'sort_order' => 4,
            ]
        ];

        Testimonial::truncate();
        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // 9. Initial Articles
        $firstProgram = Program::first();
        $sampleArticles = [
            [
                'title' => 'Training Penerapan Sistem Manajemen Keselamatan Konstruksi (SMKK) Standar Nasional',
                'slug' => 'training-penerapan-smkk-standar-nasional',
                'category' => 'K3 Konstruksi',
                'province' => 'DKI Jakarta',
                'province_slug' => 'dki-jakarta',
                'city' => 'Kota Jakarta Pusat',
                'city_slug' => 'kota-jakarta-pusat',
                'program_id' => $firstProgram ? $firstProgram->id : null,
                'excerpt' => 'Kajian mendalam aspek hukum, struktur Rencana Keselamatan Konstruksi (RKK), identifikasi bahaya IBPRP, serta alokasi biaya SMKK pada tender jasa konstruksi.',
                'content' => AstekindoSchemeService::getOrGenerateRegionalArticle('DKI Jakarta', 'Kota Jakarta Pusat')['content'],
                'author' => 'Dewan Instruktur Training K3 Konstruksi',
                'read_time' => 25,
                'views_count' => 1420,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Training Metode Erection Girder Precast Jembatan Bentang Panjang dengan Launcher Gantry Standar Bina Marga',
                'slug' => 'training-metode-erection-girder-precast-jembatan-launcher-gantry',
                'category' => 'Jalan & Jembatan',
                'province' => 'Jawa Barat',
                'province_slug' => 'jawa-barat',
                'city' => 'Kota Bandung',
                'city_slug' => 'kota-bandung',
                'program_id' => $firstProgram ? $firstProgram->id : null,
                'excerpt' => 'Prosedur teknis peluncuran girder prategang jembatan, perhitungan beban counter-weight, stabilitas gantry, dan pengujian defleksi dinamis jembatan.',
                'content' => AstekindoSchemeService::getOrGenerateRegionalArticle('Jawa Barat', 'Kota Bandung')['content'],
                'author' => 'Tim Ahli Jembatan Training K3 Konstruksi',
                'read_time' => 28,
                'views_count' => 980,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Manajemen Pengendalian Biaya dan Jadwal Proyek dengan Earned Value Management (EVM)',
                'slug' => 'manajemen-pengendalian-biaya-jadwal-proyek-evm',
                'category' => 'Manajemen Proyek',
                'province' => 'Jawa Timur',
                'province_slug' => 'jawa-timur',
                'city' => 'Kota Surabaya',
                'city_slug' => 'kota-surabaya',
                'program_id' => $firstProgram ? $firstProgram->id : null,
                'excerpt' => 'Rumus perhitungan Cost Variance (CV), Schedule Variance (SV), Cost Performance Index (CPI), dan estimasi penyelesaian akhir (EAC) proyek konstruksi.',
                'content' => AstekindoSchemeService::getOrGenerateRegionalArticle('Jawa Timur', 'Kota Surabaya')['content'],
                'author' => 'Tim Dewan Instruktur Manajemen Training K3 Konstruksi',
                'read_time' => 22,
                'views_count' => 1150,
                'is_featured' => true,
                'is_published' => true,
            ],
        ];

        Article::truncate();
        foreach ($sampleArticles as $art) {
            Article::updateOrCreate(['slug' => $art['slug']], $art);
        }
    }
}
