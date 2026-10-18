<?php

namespace App\Services;

use App\Models\Program;
use App\Models\Article;
use Illuminate\Support\Str;

class AstekindoSchemeService
{
    /**
     * Master definition of 10 LSP ASTEKINDO Certification Schemes
     */
    public static function getMasterSchemes(): array
    {
        return [
            [
                'title' => 'Sertifikasi SKK Ahli Manajemen Proyek Konstruksi (Project Manager)',
                'code' => 'SKK-ASTEK-MP01',
                'slug' => 'sertifikasi-ahli-manajemen-proyek-konstruksi',
                'category' => 'Manajemen Proyek',
                'jenjang' => 'Jenjang 9 & 8 (Ahli Utama / Madya)',
                'badge' => 'Paling Diminati BUMN',
                'short_description' => 'Sertifikasi kompetensi tertinggi bagi pimpinan proyek konstruksi, kepala proyek (Project Director/Manager), dan konsultan manajemen konstruksi berlisensi BNSP & LPJK.',
                'full_description' => 'Skema Sertifikasi Ahli Manajemen Proyek Konstruksi membekali tenaga ahli dengan penguasaan 10 area pengetahuan PMBOK dan SKKNI: integrasi proyek, ruang lingkup, jadwal, biaya, mutu, sumber daya, komunikasi, risiko, pengadaan material/alat berat, dan keselamatan kerja (SMKK). Lulusan diakui secara nasional untuk memimpin proyek infrastruktur strategis nasional (PSN).',
                'curriculum' => [
                    'Penyusunan Project Charter & Rencana Manajemen Proyek Terpadu',
                    'Manajemen Biaya, Cashflow Proyek & Earned Value Management (EVM)',
                    'Manajemen Waktu Proyek, Critical Path Method (CPM) & Kurva S',
                    'Manajemen Mutu Konstruksi & Audit Spesifikasi Teknis Bina Marga/Cipta Karya',
                    'Manajemen Risiko Kontrak Konstruksi (Standar FIDIC & Permen PUPR)',
                    'Penerapan Sistem Manajemen Keselamatan Konstruksi (SMKK Permen PUPR 10/2021)'
                ],
                'requirements' => [
                    'Ijazah S1/S2/S3 Teknik Sipil / Arsitektur / Manajemen Konstruksi',
                    'Pengalaman kerja di proyek konstruksi minimal 4 tahun (Madya) / 8 tahun (Utama)',
                    'Portofolio bukti kerja proyek (Laporan Proyek, Gambar As-Built, Kontrak Kerja)',
                    'Fotokopi KTP, NPWP, dan Pasfoto 3x4 latar belakang merah'
                ],
                'certification_body' => 'Badan Nasional Sertifikasi Profesi (BNSP) & LPJK Kementerian PUPR',
                'duration' => '3 Hari (Uji Portofolio, Wawancara Asesor & Uji Tertulis)',
                'icon' => 'bi-diagram-3-fill',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'manajemen_proyek',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Sertifikasi SKK Ahli K3 Konstruksi (Keselamatan Konstruksi SMKK)',
                'code' => 'SKK-ASTEK-K302',
                'slug' => 'sertifikasi-ahli-k3-konstruksi-smkk',
                'category' => 'Keselamatan Konstruksi (K3)',
                'jenjang' => 'Jenjang 7 & 6 (Ahli Muda / Madya)',
                'badge' => 'Wajib Tender PUPR',
                'short_description' => 'Pembinaan dan sertifikasi kompetensi personel K3 konstruksi yang berwenang menyusun RKK, mengidentifikasi bahaya, dan mengawasi implementasi SMKK di lapangan.',
                'full_description' => 'Sertifikasi Ahli K3 Konstruksi LSP ASTEKINDO menjamin pemegang sertifikat mampu merencanakan, melaksanakan, dan mengevaluasi Sistem Manajemen Keselamatan Konstruksi (SMKK) sesuai amanat UU No. 2/2017 dan Permen PUPR No. 10/2021 untuk mencegah kecelakaan fatal (*Zero Accident*) pada pekerjaan berisiko tinggi.',
                'curriculum' => [
                    'Penyusunan Dokumen Rencana Keselamatan Konstruksi (RKK) & Biaya SMKK',
                    'Analisis Keselamatan Pekerjaan (Job Safety Analysis - JSA) & IBPRP',
                    'Prosedur Tanggap Darurat & Investigasi Kecelakaan Kerja Konstruksi',
                    'Inspeksi Alat Berat, Perancah (Scaffolding), dan Penggalian Tanah',
                    'Audit Internal K3 Konstruksi & Pelaporan Berkala ke Balai Jasa Konstruksi'
                ],
                'requirements' => [
                    'Pendidikan minimal D3/S1 Teknik atau K3',
                    'Pengalaman kerja lapangan di bidang K3 konstruksi minimal 2 tahun',
                    'Sertifikat pelatihan K3 Konstruksi (jika ada)',
                    'KTP, NPWP, dan Berkas Portofolio Lapangan'
                ],
                'certification_body' => 'BNSP & LPJK Kementerian PUPR',
                'duration' => '3 Hari Asesmen Terpadu',
                'icon' => 'bi-shield-check',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'k3_konstruksi',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Sertifikasi SKK Ahli Teknik Bangunan Gedung (Struktur & Finishing)',
                'code' => 'SKK-ASTEK-BG03',
                'slug' => 'sertifikasi-ahli-teknik-bangunan-gedung',
                'category' => 'Gedung & Sipil',
                'jenjang' => 'Jenjang 7, 8, 9 (Muda / Madya / Utama)',
                'badge' => 'Kategori Utama',
                'short_description' => 'Sertifikasi keahlian profesional perancangan struktur beton bertulang, baja bertingkat, pondasi dalam, dan metode konstruksi gedung modern.',
                'full_description' => 'Ahli Teknik Bangunan Gedung bertanggung jawab penuh atas kekuatan struktur, ketahanan gempa (SNI 1726), metode bekisting, pengecoran beton massa, hingga pekerjaan fasad dan mechanical-electrical. Skema ini menjadi syarat mutlak penanggung jawab teknis badan usaha (PJTBU) dan penanggung jawab subklasifikasi (PJSK).',
                'curriculum' => [
                    'Analisis Struktur Bangunan Tahan Gempa Berbasis SNI 1726 & SNI 2847',
                    'Metode Konstruksi Pondasi Tiang Pancang & Bored Pile',
                    'Pengawasan Pengecoran Beton Ready-Mix & Pengujian NDT (Ultrasonic/Rebound)',
                    'Supervisi Pemasangan Struktur Baja, Sambungan Baut Mutu Tinggi & Las',
                    'Penerapan Building Information Modeling (BIM) dalam Konstruksi Gedung'
                ],
                'requirements' => [
                    'S1/S2 Teknik Sipil / Arsitektur',
                    'Pengalaman relevan dalam pengawasan/perencanaan gedung',
                    'Bukti dokumen perhitungan struktur dan gambar kerja (DED)'
                ],
                'certification_body' => 'BNSP & LPJK Kementerian PUPR',
                'duration' => '3 Hari Uji Kompetensi',
                'icon' => 'bi-buildings-fill',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'teknik_gedung',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Sertifikasi SKK Ahli Teknik Jalan & Jembatan',
                'code' => 'SKK-ASTEK-JJ04',
                'slug' => 'sertifikasi-ahli-teknik-jalan-dan-jembatan',
                'category' => 'Jalan & Jembatan',
                'jenjang' => 'Jenjang 7 & 8 (Ahli Muda / Madya)',
                'badge' => 'Infrastruktur Strategis',
                'short_description' => 'Kualifikasi tenaga ahli perkerasan jalan lentur (aspal), kaku (rigid pavement), serta konstruksi jembatan rangka baja dan prestressed concrete girder.',
                'full_description' => 'Membekali tenaga teknik dengan kepiawaian perencanaan geometri, pengendalian mutu campuran aspal panas (Hot-mix), stabilisasi tanah dasar, perakitan dan peluncuran girder jembatan, serta pengawasan pemeliharaan berkala jalan nasional dan jalan tol.',
                'curriculum' => [
                    'Perencanaan Geometri Jalan Raya & Drainase Saluran Tepi',
                    'Teknologi Campuran Aspal Panas (AC-WC, AC-BC) & Pengujian Marshall',
                    'Konstruksi Perkerasan Kaku (Rigid Pavement) & Pemasangan Dowel Bar',
                    'Metode Erection Girder Jembatan Precast & Stressing Kabel Prategang',
                    'Pengujian Beban Dinamis Jembatan & Pemeliharaan Jembatan Eksisting'
                ],
                'requirements' => [
                    'S1/D4 Teknik Sipil Rekayasa Jalan/Jembatan',
                    'Pengalaman kerja lapangan di proyek jalan/jembatan minimal 3 tahun',
                    'Laporan hasil kerja pengawasan atau pelaksanaan lapangan'
                ],
                'certification_body' => 'BNSP & LPJK Kementerian PUPR',
                'duration' => '3 Hari Asesmen',
                'icon' => 'bi-signpost-split-fill',
                'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'jalan_jembatan',
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Sertifikasi SKK Ahli Manajemen Mutu Konstruksi (QA/QC Engineer)',
                'code' => 'SKK-ASTEK-QC05',
                'slug' => 'sertifikasi-ahli-manajemen-mutu-konstruksi-qa-qc',
                'category' => 'Quality Assurance & Control',
                'jenjang' => 'Jenjang 7 (Ahli Muda)',
                'badge' => 'Standar Mutu ISO',
                'short_description' => 'Standar kompetensi insinyur kendali mutu material, validasi sertifikat uji laboratorium, kalibrasi peralatan, dan audit prosedur konstruksi.',
                'full_description' => 'Tenaga Ahli QA/QC memegang kendali atas kepatuhan material konstruksi (baja, beton, agregat, tanah timbunan) terhadap Rencana Mutu Kontrak (RMK). Skema ini menguji integritas pengawasan laboratorium dan verifikasi hasil uji lapangan secara objektif.',
                'curriculum' => [
                    'Penyusunan Rencana Penjaminan Mutu Konstruksi (RMK/QAP)',
                    'Pengujian Laboratorium Tanah, Batuan, Semen, dan Agregat Kasar/Halus',
                    'Sampling & Pengujian Benda Uji Beton (Silinder/Kubus) di Lapangan',
                    'Penanganan Ketidaksesuaian Mutu (Non-Conformance Report - NCR)',
                    'Penerapan Sistem Manajemen Mutu ISO 9001:2015 pada Jasa Konstruksi'
                ],
                'requirements' => [
                    'S1/D4 Teknik Sipil / Material / Kimia Industri',
                    'Pengalaman di laboratorium atau bagian Quality Control proyek minimal 2 tahun'
                ],
                'certification_body' => 'BNSP & LPJK',
                'duration' => '2 Hari Asesmen',
                'icon' => 'bi-patch-check-fill',
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'manajemen_mutu',
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Sertifikasi SKK Pelaksana Lapangan Pekerjaan Gedung',
                'code' => 'SKK-ASTEK-PL06',
                'slug' => 'sertifikasi-pelaksana-lapangan-pekerjaan-gedung',
                'category' => 'Teknisi & Pelaksana',
                'jenjang' => 'Jenjang 6 & 5 (Teknisi / Pelaksana)',
                'badge' => 'Terbanyak Diserap Pasar',
                'short_description' => 'Sertifikasi pengawas teknis garda depan yang memimpin mandor, tukang, serta pembagian jadwal harian pelaksanaan gedung.',
                'full_description' => 'Pelaksana Lapangan Gedung bertanggung jawab atas penerjemahan gambar kerja (Shop Drawing) menjadi wujud fisik di lapangan, pengawasan akurasi bekisting, pembesian, pengadukan spesi, serta pengawasan K3 langsung di area kerja.',
                'curriculum' => [
                    'Pembacaan & Interpretasi Gambar Kerja (Shop Drawing) Konstruksi',
                    'Manajemen Logistik Material & Alat Bantu Perancah Harian',
                    'Pengawasan Pemasangan Bekisting, Pembesian, & Pengecoran',
                    'Pencatatan Laporan Harian, Mingguan, dan Volume Opname Pekerjaan',
                    'Penerapan Instruksi Kerja K3 Bagi Tukang & Pekerja Harian Lepas'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Teknik Bangunan / D3 Teknik Sipil',
                    'Pengalaman sebagai pengawas atau mandor konstruksi minimal 2 tahun'
                ],
                'certification_body' => 'BNSP & LPJK Kementerian PUPR',
                'duration' => '2 Hari Uji Praktik & Portofolio',
                'icon' => 'bi-hammer',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'pelaksana_gedung',
                'is_featured' => false,
                'sort_order' => 6,
            ],
            [
                'title' => 'Sertifikasi SKK Pelaksana Lapangan Pekerjaan Jalan & Saluran',
                'code' => 'SKK-ASTEK-PJ07',
                'slug' => 'sertifikasi-pelaksana-lapangan-pekerjaan-jalan',
                'category' => 'Jalan & Drainase',
                'jenjang' => 'Jenjang 5 (Pelaksana)',
                'badge' => 'Proyek Daerah',
                'short_description' => 'Standar kompetensi koordinator lapangan pekerjaan tanah, pemadatan subgrade, lapis pondasi agregat, dan saluran u-ditch drainase perkotaan.',
                'full_description' => 'Pelaksana lapangan jalan memastikan tebal hamparan, suhu pemadatan aspal, kerataan permukaan, serta kemiringan saluran drainase memenuhi standar Bina Marga dan dinas PUPR daerah.',
                'curriculum' => [
                    'Teknik Pengukuran Lapangan (Waterpass & Total Station Sederhana)',
                    'Pengawasan Galian Tanah, Pemadatan Subgrade & Uji Sand Cone',
                    'Penghamparan & Pemadatan Lapis Pondasi Agregat Kelas A dan B',
                    'Pemasangan Saluran Precast U-Ditch & Box Culvert',
                    'Pengaturan Manajemen Lalu Lintas Sementara (Traffic Management)'
                ],
                'requirements' => [
                    'SMK Teknik Konstruksi / D3 Sipil',
                    'Pengalaman kerja lapangan pekerjaan jalan minimal 2 tahun'
                ],
                'certification_body' => 'BNSP & LPJK',
                'duration' => '2 Hari',
                'icon' => 'bi-cone-striped',
                'image' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'pelaksana_jalan',
                'is_featured' => false,
                'sort_order' => 7,
            ],
            [
                'title' => 'Sertifikasi SKK Ahli Teknik Sumber Daya Air (Irigasi & Bendungan)',
                'code' => 'SKK-ASTEK-SDA08',
                'slug' => 'sertifikasi-ahli-teknik-sumber-daya-air',
                'category' => 'Sumber Daya Air',
                'jenjang' => 'Jenjang 7 & 8 (Ahli Muda / Madya)',
                'badge' => 'Proyek Ketahanan Pangan',
                'short_description' => 'Keahlian teknis dalam perencanaan, konstruksi, dan pemeliharaan bendungan, embung, tanggul banjir, serta jaringan irigasi modern.',
                'full_description' => 'Sertifikasi Ahli SDA menguji penguasaan analisis hidrologi, hidrolika aliran terbuka, stabilitas lereng bendungan urugan, pintu air mekanikal, hingga konservasi daerah aliran sungai (DAS).',
                'curriculum' => [
                    'Analisis Hidrologi, Curah Hujan Rencana & Debit Banjir Rancangan',
                    'Desain & Konstruksi Tubuh Bendungan, Spillway, & Saluran Pelimpah',
                    'Perencanaan Jaringan Irigasi Primer, Sekunder, dan Bangunan Bagi',
                    'Perkuatan Tebing Sungai, Bronjong Kawat, & Sheet Pile Baja',
                    'Operasi & Pemeliharaan (O&P) Prasarana Sumber Daya Air Berkelanjutan'
                ],
                'requirements' => [
                    'S1/S2 Teknik Pengairan / Teknik Sipil Keairan',
                    'Pengalaman di proyek keairan minimal 3 tahun'
                ],
                'certification_body' => 'BNSP & LPJK',
                'duration' => '3 Hari Asesmen',
                'icon' => 'bi-water',
                'image' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'sumber_daya_air',
                'is_featured' => false,
                'sort_order' => 8,
            ],
            [
                'title' => 'Sertifikasi SKK Ahli Geoteknik & Pondasi Konstruksi',
                'code' => 'SKK-ASTEK-GEO09',
                'slug' => 'sertifikasi-ahli-geoteknik-dan-pondasi',
                'category' => 'Geoteknik',
                'jenjang' => 'Jenjang 8 & 9 (Ahli Madya / Utama)',
                'badge' => 'Keahlian Khusus',
                'short_description' => 'Keahlian spesialis mekanika tanah, interpretasi sondir (CPT), Soil Nailing, Ground Improvement, dan perancangan pondasi dalam.',
                'full_description' => 'Ahli Geoteknik memegang peranan krusial dalam mitigasi risiko longsor, likuifaksi, dan kegagalan pondasi gedung tinggi maupun lereng jalan bebas hambatan. Menjamin keamanan struktur dari dasar bumi.',
                'curriculum' => [
                    'Interpretasi Uji Penyelidikan Tanah (Boring, SPT, CPT, Coredrill)',
                    'Perhitungan Daya Dukung Pondasi Tiang & Penurunan Konsolidasi',
                    'Desain Dinding Penahan Tanah (Retaining Wall, Soldier Pile, Diaphragm Wall)',
                    'Teknologi Perbaikan Tanah Lunak (PVD, Prefabricated Vertical Drain, Stone Column)',
                    'Instrumentasi Geoteknik (Inclinometer, Piezometer, Settlement Plate)'
                ],
                'requirements' => [
                    'S1/S2/S3 Teknik Sipil Geoteknik',
                    'Pengalaman kerja investigasi dan rekayasa geoteknik minimal 5 tahun'
                ],
                'certification_body' => 'BNSP & LPJK',
                'duration' => '3 Hari Asesmen',
                'icon' => 'bi-layers-half',
                'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'geoteknik',
                'is_featured' => false,
                'sort_order' => 9,
            ],
            [
                'title' => 'Sertifikasi SKK Pengawas Pekerjaan Struktur Bangunan Gedung',
                'code' => 'SKK-ASTEK-PS10',
                'slug' => 'sertifikasi-pengawas-pekerjaan-struktur-gedung',
                'category' => 'Pengawasan & Inspeksi',
                'jenjang' => 'Jenjang 6 (Teknisi / Inspektur)',
                'badge' => 'Konsultan Supervisi',
                'short_description' => 'Kompetensi inspektur teknis konsultan pengawas yang bertugas menginspeksi ketepatan dimensi, tulangan, bekisting, dan hasil uji beton.',
                'full_description' => 'Pengawas pekerjaan struktur bertindak sebagai mata dan telinga pemilik proyek (Owner/PUPR) untuk memastikan kontraktor bekerja sesuai spesifikasi teknis dan gambar DED yang disahkan.',
                'curriculum' => [
                    'Metode Verifikasi Dimensi Elemen Struktur (Kolom, Balok, Plat Lantai)',
                    'Pemeriksaan Diameter, Jumlah, & Panjang Penyaluran Besi Tulangan',
                    'Pengawasan Pengecoran & Pengambilan Benda Uji Beton di Truk Mixer',
                    'Penerbitan Surat Teguran & Approval Lembar Request Pekerjaan Kontraktor',
                    'Penyusunan Laporan Progres Mingguan & Opname Prestasi Fisik Proyek'
                ],
                'requirements' => [
                    'D3/S1 Teknik Sipil',
                    'Pengalaman pengawasan struktur minimal 2 tahun'
                ],
                'certification_body' => 'BNSP & LPJK Kementerian PUPR',
                'duration' => '2 Hari Asesmen',
                'icon' => 'bi-search',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800&auto=format&fit=crop&q=80',
                'topic_key' => 'pengawas_struktur',
                'is_featured' => false,
                'sort_order' => 10,
            ]
        ];
    }

    /**
     * Generate 200 Construction Articles Topics Catalog for Client-side / JS Fast Filter
     */
    public static function get200ConstructionTopics(): array
    {
        $baseTopics = [
            'Penerapan Sistem Manajemen Keselamatan Konstruksi (SMKK) Sesuai Permen PUPR No 10 Tahun 2021',
            'Metode Pengujian Slump Test dan Evaluasi Kuat Tekan Benda Uji Beton Struktur',
            'Teknologi Erection Girder Precast Jembatan Bentang Panjang Menggunakan Launcher Gantry',
            'Analisis Perhitungan Beban Gempa Statik dan Dinamik Respon Spektrum Gedung Tinggi SNI 1726',
            'Manajemen Pengendalian Biaya dan Jadwal Proyek dengan Earned Value Management (EVM)',
            'Prosedur Pengawasan Pengecoran Beton Massa (Mass Concrete) untuk Mencegah Retak Termal',
            'Metode Stabilisasi Tanah Dasar Lempung Ekspansif Menggunakan Semen dan Geotekstil Woven',
            'Penerapan Building Information Modeling (BIM) Level 2 pada Perencanaan dan Pelaksanaan Konstruksi',
            'Teknik Pengujian Non-Destructive Testing (NDT) Ultrasonic Pulse Velocity dan Rebound Hammer',
            'Manajemen Risiko Kontrak Konstruksi Berbasis Standar FIDIC Red Book dan UU Jasa Konstruksi',
            'Sertifikasi Kompetensi Kerja (SKK) Konstruksi Syarat Penanggung Jawab Teknis Badan Usaha (PJTBU)',
            'Metode Pemasangan Struktur Baja Berat dengan Sambungan Baut Mutu Tinggi High Strength Friction Grip',
            'Audit Kelaikan Operasi Alat Berat Crane, Excavator, dan Batching Plant di Lokasi Proyek',
            'Penyusunan Rencana Keselamatan Konstruksi (RKK) dan Identifikasi Bahaya Penilaian Risiko (IBPRP)',
            'Prosedur Uji Pembebanan Statis Pile Driving Analyzer (PDA Test) pada Pondasi Tiang Pancang',
            'Pengawasan Mutu Campuran Aspal Panas Asphalt Concrete Wearing Course (AC-WC) Jalan Nasional',
            'Metode Dewatering dan Konstruksi Dinding Penahan Tanah Diaphragm Wall Basement Gedung',
            'Teknik Pengawasan Pemasangan Saluran Precast U-Ditch dan Box Culvert untuk Drainase Perkotaan',
            'Pengendalian Mutu Besi Tulangan Ulir SNI 2052 dan Uji Tarik Bending di Laboratorium Terakreditasi',
            'Perencanaan dan Pelaksanaan Konstruksi Perkerasan Kaku (Rigid Pavement) dengan Dowel dan Tie Bar'
        ];

        $variations = [
            'Panduan Lengkap Standar BNSP & LPJK',
            'Metodologi Praktis Implementasi di Lapangan',
            'Kajian Regulasi dan Standar Teknis PUPR',
            'Studi Kasus Kegagalan Struktur dan Solusinya',
            'Optimasi Efisiensi Waktu dan Anggaran Proyek',
            'SOP Pengawasan Mutu Konsultan Supervisi',
            'Pedoman Keselamatan Kerja dan Mitigasi Bahaya K3',
            'Prosedur Uji Laboratorium dan Sertifikasi Lapangan',
            'Persiapan Uji Kompetensi Tenaga Ahli Konstruksi',
            'Teknik Inspeksi Lapangan bagi Tenaga Ahli'
        ];

        $catalog = [];
        $index = 1;

        foreach ($baseTopics as $base) {
            foreach ($variations as $var) {
                $catalog[] = [
                    'id' => $index,
                    'title' => "{$base} - {$var}",
                    'slug' => Str::slug("{$base} - {$var}"),
                    'category' => ($index % 4 == 0) ? 'K3 Konstruksi' : (($index % 3 == 0) ? 'Jalan & Jembatan' : (($index % 2 == 0) ? 'Gedung & Sipil' : 'Manajemen Proyek')),
                    'read_time' => 20 + ($index % 15),
                    'views' => 120 + ($index * 13) % 850,
                ];
                $index++;
                if ($index > 200) break 2;
            }
        }

        return $catalog;
    }

    /**
     * Get or Generate rich 6000-9000 word article for a specific region & topic
     */
    public static function getOrGenerateRegionalArticle(string $provinceName, string $cityName, ?string $programSlug = null, ?string $articleSlug = null): array
    {
        $schemes = static::getMasterSchemes();
        $selectedScheme = $schemes[0];
        if ($programSlug) {
            foreach ($schemes as $s) {
                if ($s['slug'] === $programSlug) {
                    $selectedScheme = $s;
                    break;
                }
            }
        }

        $selectedTopic = null;
        if ($articleSlug) {
            $topics = static::get200ConstructionTopics();
            foreach ($topics as $t) {
                $regionalSlug = Str::slug("{$t['title']}-{$cityName}");
                if ($regionalSlug === $articleSlug || $t['slug'] === $articleSlug || str_contains($articleSlug, $t['slug'])) {
                    $selectedTopic = $t;
                    break;
                }
            }
        }

        if ($selectedTopic) {
            $title = "{$selectedTopic['title']} di {$cityName}, Provinsi {$provinceName} | Panduan Teknis SKK Konstruksi";
            $slug = Str::slug("{$selectedTopic['title']}-{$cityName}");
        } else {
            $title = "Sertifikasi SKK {$selectedScheme['title']} di {$cityName}, Provinsi {$provinceName} | Lisensi BNSP & LPJK PUPR";
            $slug = Str::slug("sertifikasi-skk-{$selectedScheme['slug']}-{$cityName}");
        }

        // Generate full 6000-9000 word rich HTML technical dossier
        $content = ArticleContentGenerator::generate($selectedScheme, $provinceName, $cityName, $selectedTopic);
        $wordCount = str_word_count(strip_tags($content));

        return [
            'title' => $title,
            'slug' => $slug,
            'scheme' => $selectedScheme,
            'topic' => $selectedTopic,
            'province' => $provinceName,
            'city' => $cityName,
            'content' => $content,
            'word_count' => number_format($wordCount, 0, ',', '.') . ' Kata (Panduan Lengkap)',
            'author' => 'Tim Dewan Asesor LSP ASTEKINDO Konstruksi Mandiri',
            'published_at' => now()->format('d F Y'),
        ];
    }
}
