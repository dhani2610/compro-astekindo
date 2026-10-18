<?php

namespace App\Services;

use Illuminate\Support\Str;

class ArticleContentGenerator
{
    /**
     * Generate 6,000 to 9,000 words rich HTML technical dossier
     */
    public static function generate(array $scheme, string $province, string $city, ?array $topic = null): string
    {
        $schemeTitle = $scheme['title'];
        $schemeCode = $scheme['code'] ?? 'SKK-ASTEK-01';
        $jenjang = $scheme['jenjang'] ?? 'Jenjang 7 & 8';
        $category = $scheme['category'] ?? 'Konstruksi & Sipil';
        $topicTitle = $topic['title'] ?? $schemeTitle;

        $html = '';

        // Executive Summary Callout Box
        $html .= '<div class="card border-0 p-4 rounded-4 mb-5" style="background: linear-gradient(135deg, #F0F9FF 0%, #E0F2FE 100%); border-left: 5px solid #0284C7 !important;">';
        $html .= '<div class="d-flex align-items-center gap-2 mb-2 flex-wrap">';
        $html .= '<span class="badge bg-primary text-white rounded-pill px-3 py-1 fw-bold">DOKUMEN KAJIAN TEKNIS SKKNI RESMI</span>';
        $html .= '<span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1 fw-bold"><i class="bi bi-shield-check me-1"></i>BNSP & LPJK Kementerian PUPR</span>';
        $html .= '<span class="badge bg-info-subtle text-info border border-info-subtle rounded-pill px-3 py-1 fw-bold"><i class="bi bi-book-half me-1"></i>Standar Mutu 6.000 - 9.000 Kata</span>';
        $html .= '</div>';
        $html .= '<h3 class="fw-bold text-dark mb-2" style="font-size: 1.35rem;">Ringkasan Eksekutif & Ruang Lingkup Pedoman Keahlian</h3>';
        $html .= '<p class="text-secondary mb-3" style="line-height: 1.8; font-size: 0.98rem;">';
        $html .= "Dokumen komprehensif ini merupakan panduan teknis, yuridis, dan metodologis resmi yang diterbitkan oleh Lembaga Sertifikasi Profesi (LSP) ASTEKINDO Konstruksi Mandiri untuk wilayah operasional <strong>{$city}</strong>, Provinsi <strong>{$province}</strong>. Dokumen ini dirancang sebagai referensi baku bagi para insinyur profesional, manajer proyek, pengawas lapangan, kontraktor pelaksana, konsultan perencana, serta calon asesi yang bersiap menempuh uji kompetensi pada skema <strong>{$schemeTitle}</strong> (Kode Skema: <code>{$schemeCode}</code>) dengan fokus kajian terapan: <em>{$topicTitle}</em>. Standar yang diulas merujuk penuh pada regulasi Undang-Undang Nomor 2 Tahun 2017 tentang Jasa Konstruksi, Peraturan Menteri PUPR Nomor 10 Tahun 2021 tentang Sistem Manajemen Keselamatan Konstruksi (SMKK), serta Standar Kompetensi Kerja Nasional Indonesia (SKKNI) yang telah ditetapkan oleh Kementerian Ketenagakerjaan Republik Indonesia.";
        $html .= '</p>';
        $html .= '<div class="row g-3 pt-2 border-top border-primary-subtle text-muted small">';
        $html .= '<div class="col-sm-6 col-md-3"><strong>Klasifikasi:</strong><br>' . htmlspecialchars($category) . '</div>';
        $html .= '<div class="col-sm-6 col-md-3"><strong>Kualifikasi KKNI:</strong><br>' . htmlspecialchars($jenjang) . '</div>';
        $html .= '<div class="col-sm-6 col-md-3"><strong>Wilayah Asesmen:</strong><br>' . htmlspecialchars($city) . '</div>';
        $html .= '<div class="col-sm-6 col-md-3"><strong>Masa Berlaku:</strong><br>5 (Lima) Tahun Penuh</div>';
        $html .= '</div>';
        $html .= '</div>';

        // BAB I: LANDASAN HUKUM
        $html .= '<section id="bab-1" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB I.</span> Landasan Yuridis, Kerangka Regulasi Nasional & Kebijakan Mandatory Jasa Konstruksi</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Penyelenggaraan pekerjaan konstruksi di seluruh wilayah kedaulatan Negara Kesatuan Republik Indonesia telah memasuki era transformasi mutu ketat yang berorientasi pada keselamatan publik, ketahanan infrastruktur jangka panjang, akuntabilitas anggaran, dan pencegahan risiko kegagalan bangunan (structural failure). Pembangunan infrastruktur modern yang masif di tingkat regional—khususnya pada wilayah strategis ' . htmlspecialchars($city) . ', Provinsi ' . htmlspecialchars($province) . '—memerlukan kepastian hukum bahwa setiap badan usaha jasa konstruksi (BUJK) mempekerjakan sumber daya manusia keteknikan yang benar-benar kompeten, tersertifikasi, dan diakui negara.</p>';
        
        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">1.1 Kewajiban Hukum Berdasarkan Undang-Undang Nomor 2 Tahun 2017</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Undang-Undang Nomor 2 Tahun 2017 tentang Jasa Konstruksi merupakan tonggak regulasi tertinggi yang merombak tatanan industri konstruksi nasional. Pasal 70 Undang-Undang tersebut secara eksplisit menegaskan asas kewajiban bersertifikat yang bersifat mengikat (imperatif/mandatory):</p>';
        $html .= '<div class="p-3 my-3 rounded-3 bg-light border-start border-4 border-primary">';
        $html .= '<ul class="mb-0 text-secondary" style="line-height: 1.8;">';
        $html .= '<li><strong>Pasal 70 Ayat (1):</strong> Setiap tenaga kerja konstruksi yang bekerja di bidang Jasa Konstruksi wajib memiliki Sertifikat Kompetensi Kerja (SKK).</li>';
        $html .= '<li><strong>Pasal 70 Ayat (2):</strong> Setiap Pengguna Jasa dan/atau Penyedia Jasa wajib mempekerjakan tenaga kerja konstruksi yang memiliki Sertifikat Kompetensi Kerja sebagaimana dimaksud pada ayat (1).</li>';
        $html .= '<li><strong>Pasal 70 Ayat (3):</strong> Sertifikat Kompetensi Kerja sebagaimana dimaksud pada ayat (1) diperoleh melalui uji kompetensi sesuai dengan Standar Kompetensi Kerja Nasional Indonesia (SKKNI), standar internasional, dan/atau standar khusus.</li>';
        $html .= '</ul>';
        $html .= '</div>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Konsekuensi yuridis dari pelanggaran terhadap Pasal 70 tidak main-main. Berdasarkan ketentuan Bab X mengenai Pengawasan dan Sanksi Administratif, badan usaha penyedia jasa konstruksi yang terbukti mempekerjakan tenaga kerja tidak bersertifikat kompetensi dapat dikenakan sanksi bertingkat mulai dari peringatan tertulis, denda administratif hingga ratusan juta rupiah, penghentian sementara kegiatan konstruksi, pencantuman dalam daftar hitam (blacklist), hingga pencabutan Nomor Induk Berusaha (NIB) dan Sertifikat Badan Usaha (SBU). Lebih jauh lagi, tenaga kerja asing maupun domestik yang bekerja tanpa SKK sah dapat diberhentikan seketika dari lokasi proyek oleh pengawas ketenagakerjaan dan pejabat pembina jasa konstruksi daerah.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">1.2 Peraturan Pemerintah Nomor 14 Tahun 2021 dan Kelembagaan LSP P-3</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Sebagai aturan turunan operasional, Peraturan Pemerintah Nomor 14 Tahun 2021 tentang Perubahan atas PP Nomor 22 Tahun 2020 tentang Peraturan Pelaksanaan UU Jasa Konstruksi mengatur restrukturisasi menyeluruh terhadap lembaga sertifikasi. Lembaga Pengembangan Jasa Konstruksi (LPJK) kini bertransformasi menjadi lembaga non-struktural di bawah naungan Kementerian PUPR yang bertugas meregistrasi dan mengakreditasi asosiasi profesi serta memberikan rekomendasi lisensi kepada Lembaga Sertifikasi Profesi (LSP). Pengujian teknis diserahkan sepenuhnya kepada LSP Pihak Ketiga (LSP P-3) berlisensi Badan Nasional Sertifikasi Profesi (BNSP), seperti LSP ASTEKINDO Konstruksi Mandiri.</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Dengan struktur ini, seluruh sertifikat keahlian yang terbit wajib terintegrasi secara elektronik ke dalam portal Sistem Informasi Konstruksi Terintegrasi (SIKI LPJK) dan Sistem Informasi Pembina Jasa Konstruksi (SIPJAKI), sehingga menutup rapat celah pemalsuan dokumen sertifikat yang kerap terjadi pada masa lampau.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">1.3 Peraturan Menteri PUPR Nomor 10 Tahun 2021: Pedoman Penerapan SMKK</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Keselamatan kerja bukan lagi sekadar himbauan moral, melainkan kewajiban hukum yang harus dituangkan dalam dokumen penawaran kontrak tender pemerintah maupun swasta. Permen PUPR No. 10/PRT/M/2021 mewajibkan implementasi Sistem Manajemen Keselamatan Konstruksi (SMKK) pada seluruh siklus proyek, meliputi tahapan pengkajian, perencanaan, perancangan, pelaksanaan konstruksi, hingga operasi dan pemeliharaan. Regulasi ini mengamanatkan bahwa setiap proyek dengan nilai risiko keselamatan sedang hingga tinggi wajib menempatkan Ahli Keselamatan Konstruksi yang memegang SKK Jenjang 7, 8, atau 9 sebagai pengendali Rencana Keselamatan Konstruksi (RKK) dan penyusun Analisis Keselamatan Pekerjaan (Job Safety Analysis / JSA).</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">1.4 Peraturan Menteri PUPR Nomor 8 Tahun 2021: Penetapan 9 Jenjang KKNI</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Peraturan Menteri PUPR Nomor 8 Tahun 2021 mengatur tata cara penetapan penilai ahli, pemeriksaan kegagalan bangunan, dan pengesahan SKK Konstruksi berdasarkan 9 Jenjang Kerangka Kualifikasi Nasional Indonesia (KKNI). Pembagian ini mengelompokkan tenaga kerja ke dalam tiga kategori besar: Jabatan Kerja Operator (Jenjang 1, 2, 3), Jabatan Kerja Teknisi / Analis (Jenjang 4, 5, 6), dan Jabatan Kerja Ahli (Jenjang 7 untuk Ahli Muda, Jenjang 8 untuk Ahli Madya, dan Jenjang 9 untuk Ahli Utama). Penentuan jenjang ini berkaitan erat dengan kualifikasi pendidikan formal, portofolio pengalaman proyek riil, serta tanggung jawab hukum dalam menandatangani dokumen teknis bangunan.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">1.5 Penyelesaian Sengketa Konstruksi Menurut UU No. 2 Tahun 2017 & Standar Kontrak FIDIC</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pasal 88 Undang-Undang Jasa Konstruksi mengatur hierarki penyelesaian sengketa kontrak konstruksi guna melindungi investasi dan kepastian hukum penyedia serta pengguna jasa. Sengketa yang timbul dalam pelaksanaan kontrak di ' . htmlspecialchars($city) . ' wajib diselesaikan terlebih dahulu melalui musyawarah untuk mufakat. Apabila tidak tercapai kesepakatan, para pihak dapat menempuh tahapan alternatif penyelesaian sengketa (mediasi, konsiliasi, arbitrase konstruksi, atau pembentukan Dewan Sengketa / Dispute Board).</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Tenaga ahli yang memegang sertifikat ' . htmlspecialchars($schemeTitle) . ' dituntut memahami klausul kontrak standar internasional (seperti FIDIC Red Book untuk konstruksi konvensional, Yellow Book untuk Plant and Design-Build, serta Silver Book untuk EPC Turnkey) maupun standar kontrak pemerintah berbasis LKPP/PUPR. Penguasaan terhadap prosedur pengajuan klaim perpanjangan waktu (Extension of Time / EoT) dan klaim kompensasi biaya (Cost Compensation) sesuai aturan kontrak menjadi salah satu materi asesmen mendalam oleh tim dewan asesor.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">1.6 Perbandingan Komprehensif: Sistem SKA/SKT Lama vs Sistem SKK Konstruksi BNSP</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Peralihan dari rezim Sertifikat Keahlian (SKA) / Sertifikat Keterampilan (SKT) lama ke sistem Sertifikat Kompetensi Kerja (SKK) berbasis BNSP menghasilkan perubahan mendasar dalam tata kelola sertifikasi keteknikan Indonesia:</p>';

        $html .= '<div class="table-responsive my-4">';
        $html .= '<table class="table table-bordered table-hover align-middle bg-white shadow-sm rounded-3 overflow-hidden">';
        $html .= '<thead class="table-primary text-primary-emphasis text-center">';
        $html .= '<tr><th style="width: 25%;">Parameter Komparasi</th><th style="width: 37%;">Rezim SKA / SKT Lama (Pra-2021)</th><th style="width: 38%;">Rezim SKK Konstruksi Baru (BNSP & LPJK)</th></tr>';
        $html .= '</thead>';
        $html .= '<tbody>';
        $html .= '<tr><td class="fw-bold">Lembaga Pelaksana Asesmen</td><td>Asosiasi Profesi & LPJK Daerah</td><td>LSP Pihak Ketiga (LSP P-3) Berlisensi BNSP</td></tr>';
        $html .= '<tr><td class="fw-bold">Standar Kompetensi Acuan</td><td>Standar Khusus Asosiasi</td><td>SKKNI Resmi Kemnaker & Standar Internasional</td></tr>';
        $html .= '<tr><td class="fw-bold">Metode Verifikasi Bukti</td><td>Mayoritas Administrasi Kertas</td><td>Uji Tertulis, Wawancara Asesor & Uji Portofolio VATM</td></tr>';
        $html .= '<tr><td class="fw-bold">Pengakuan Legalitas</td><td>Nasional Terbatas (LPJK Sektor Konstruksi)</td><td>Nasional Lintas Sektor (BNSP) & Internasional (MRA ASEAN)</td></tr>';
        $html .= '<tr><td class="fw-bold">Jenjang Kualifikasi</td><td>Muda, Madya, Utama (3 Tingkat)</td><td>9 Jenjang Kerangka Kualifikasi Nasional Indonesia (KKNI)</td></tr>';
        $html .= '<tr><td class="fw-bold">Mekanisme Verifikasi Keaslian</td><td>Buku Registrasi Manual / Barcode Sederhana</td><td>QR Code Dinamis Terenkripsi Terhubung SIKI PUPR Real-Time</td></tr>';
        $html .= '<tr><td class="fw-bold">Masa Berlaku Dokumen</td><td>3 (Tiga) Tahun</td><td>5 (Lima) Tahun Penuh (Bisa Diperpanjang)</td></tr>';
        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';
        $html .= '</section>';

        // BAB II: PROFIL LSP ASTEKINDO
        $html .= '<section id="bab-2" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB II.</span> Profil Kelembagaan, Legalitas & Akreditasi Mutu LSP ASTEKINDO Konstruksi Mandiri</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Lembaga Sertifikasi Profesi (LSP) ASTEKINDO Konstruksi Mandiri merupakan institusi sertifikasi profesi pihak ketiga (LSP-P3) yang beroperasi di bawah naungan Asosiasi Tenaga Teknik Konstruksi Indonesia (ASTEKINDO). Lembaga ini didirikan dengan tekad mulia untuk mengawal standardisasi mutu keteknikan di tanah air, menjembatani kesenjangan antara kurikulum akademis dengan kebutuhan riil industri lapangan, serta mencetak tenaga ahli yang memiliki integritas profesional tinggi.</p>';
        
        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">2.1 Visi Kelembagaan dan Komitmen Mutu Global</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Visi utama LSP ASTEKINDO adalah menjadi Lembaga Sertifikasi Profesi Jasa Konstruksi yang unggul, berintegritas, mandiri, dan berdaya saing global dalam menciptakan sumber daya manusia konstruksi yang profesional, adaptif terhadap inovasi digital (BIM dan Konstruksi Hijau), serta mengedepankan budaya nihil kecelakaan (Zero Accident).</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Dalam mewujudkan visi tersebut, LSP ASTEKINDO menetapkan 5 (lima) pilar misi strategis:</p>';
        $html .= '<div class="row g-3 my-3">';
        $html .= '<div class="col-md-6"><div class="p-3 bg-white rounded-3 shadow-sm border"><strong class="text-primary d-block mb-1">1. Integritas Asesmen Objektif</strong>Menyelenggarakan asesmen kompetensi yang transparan, jujur, bebas benturan kepentingan, dan taat pada pedoman BNSP 201 dan 202.</div></div>';
        $html .= '<div class="col-md-6"><div class="p-3 bg-white rounded-3 shadow-sm border"><strong class="text-primary d-block mb-1">2. Standarisasi Mutu ISO/IEC 17024</strong>Menerapkan sistem penjaminan mutu sertifikasi personel bertaraf internasional secara konsisten dan diaudit berkala.</div></div>';
        $html .= '<div class="col-md-6"><div class="p-3 bg-white rounded-3 shadow-sm border"><strong class="text-primary d-block mb-1">3. Distribusi TUK di 38 Provinsi</strong>Menyediakan sarana Tempat Uji Kompetensi (TUK) mandiri dan sewaktu di seluruh ibukota provinsi dan kabupaten/kota, termasuk di ' . htmlspecialchars($city) . '.</div></div>';
        $html .= '<div class="col-md-6"><div class="p-3 bg-white rounded-3 shadow-sm border"><strong class="text-primary d-block mb-1">4. Pembinaan Asesor Berkelanjutan</strong>Mengembangkan keahlian korps master asesor dan asesor kompetensi dengan pembaruan teknologi engineering terkini.</div></div>';
        $html .= '</div>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">2.2 Struktur Organisasi dan Independensi Penilaian</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Struktur tata kelola LSP ASTEKINDO dirancang untuk memisahkan secara ketat antara Dewan Pengarah (Governing Board), Dewan Penasihat, Bagian Manajemen Sertifikasi, Bagian Manajemen Mutu, serta Komite Skema Sertifikasi. Komite Skema beranggotakan para pakar teknik sipil senior, akademisi perguruan tinggi ternama, perwakilan asosiasi kontraktor (GAPENSI/AKLI), dan praktisi BUMN Karya yang bertanggung jawab meninjau materi uji kompetensi (MUK) agar selalu selaras dengan dinamika teknologi konstruksi modern.</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Setiap keputusan sertifikasi ditetapkan melalui Sidang Pleno Komite Teknis Sertifikasi berdasarkan rekomendasi objektif dari tim asesor independen yang memegang sertifikat Asesor Kompetensi (Askep) berlisensi BNSP.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">2.3 Sistem Manajemen Mutu Anti-Penyuapan ISO 37001 & Pakta Integritas Asesor</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Guna menjaga kredibilitas hasil asesmen, LSP ASTEKINDO mengadopsi standar ISO 37001 (Sistem Manajemen Anti Penyuapan / Anti-Bribery Management System). Setiap asesor kompetensi yang ditugaskan ke Tempat Uji Kompetensi di ' . htmlspecialchars($city) . ' menandatangani pakta integritas dan surat pernyataan bebas benturan kepentingan sebelum menguji calon asesi. Dilarang keras adanya transaksi gratifikasi, pungutan liar, atau kompromi mutu dalam pemberian rekomendasi kelulusan. Pelanggaran terhadap kode etik asesor dikenai sanksi pencabutan surat tugas dan rekomendasi pembekuan lisensi asesor ke BNSP.</p>';
        $html .= '</section>';

        // BAB III: STRUKTUR SKEMA & UNIT KOMPETENSI SKKNI
        $html .= '<section id="bab-3" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB III.</span> Struktur Skema Sertifikasi, Jenjang Kualifikasi KKNI & Pemetaan Unit Kompetensi SKKNI</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Skema sertifikasi <strong>' . htmlspecialchars($schemeTitle) . '</strong> dengan kode registrasi <code>' . htmlspecialchars($schemeCode) . '</code> dikembangkan secara sistematis berdasarkan Standar Kompetensi Kerja Nasional Indonesia (SKKNI). Skema ini memetakan kemampuan kerja yang dituntut dalam dunia industri jasa konstruksi ke dalam tiga kelompok kompetensi utama: Kompetensi Umum (General Competencies), Kompetensi Inti (Core Competencies), dan Kompetensi Khusus/Pilihan (Specialized Competencies).</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">3.1 Matriks Unit Kompetensi Teruji Sesuai SKKNI</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Calon asesi di wilayah ' . htmlspecialchars($city) . ' akan dinilai kompetensinya terhadap serangkaian unit standar baku berikut:</p>';

        $html .= '<div class="table-responsive my-4">';
        $html .= '<table class="table table-bordered table-striped align-middle bg-white shadow-sm rounded-3 overflow-hidden">';
        $html .= '<thead class="table-light">';
        $html .= '<tr><th style="width: 15%;" class="text-center">Kategori Unit</th><th style="width: 25%;">Kode Unit SKKNI</th><th>Judul Unit Kompetensi & Elemen Kunci yang Dinilai</th><th style="width: 15%;" class="text-center">Standar Unjuk Kerja</th></tr>';
        $html .= '</thead>';
        $html .= '<tbody>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Umum</td><td><code>INA.5220.111.01.01.18</code></td><td><strong>Menerapkan Keselamatan dan Kesehatan Kerja Lingkungan (K3L)</strong><br><small class="text-muted">Mengidentifikasi potensi bahaya di area kerja, menginspeksi ketersediaan APD/APK, memimpin safety briefing harian (Toolbox Meeting), dan menanggulangi kondisi darurat.</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Umum</td><td><code>INA.5220.111.02.01.18</code></td><td><strong>Melakukan Komunikasi dan Negosiasi di Tempat Kerja Proyek</strong><br><small class="text-muted">Menyampaikan instruksi teknis kepada subkontraktor, menyusun memo lapangan, melakukan koordinasi lintas disiplin struktural-mekanikal, dan menyusun laporan kemajuan fisik.</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Inti</td><td><code>INA.5220.212.01.02.18</code></td><td><strong>Mengkaji Dokumen Kontrak, Gambar Rencana (DED), dan Spesifikasi Teknis</strong><br><small class="text-muted">Memeriksa keselarasan Bill of Quantities (BQ) dengan gambar kerja, mendeteksi potensi pertentangan klausul kontrak, dan mengajukan Request for Information (RFI).</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Inti</td><td><code>INA.5220.212.02.02.18</code></td><td><strong>Menyusun Rencana Manajemen Mutu Pekerjaan Konstruksi (RMK/RMPK)</strong><br><small class="text-muted">Menyusun Inspection and Test Plan (ITP), menentukan metode pengujian laboratorium sampel material, menetapkan kriteria toleransi deviasi dimensi, dan mengendalikan formulir inspeksi.</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Inti</td><td><code>INA.5220.212.03.02.18</code></td><td><strong>Mengendalikan Jadwal Proyek dengan Critical Path Method (CPM) & Kurva S</strong><br><small class="text-muted">Menghitung durasi aktivitas, mengidentifikasi jalur kritis keterlambatan, membandingkan progres aktual vs rencana, dan menyusun program percepatan (Catch-Up Plan / Crashing).</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Inti</td><td><code>INA.5220.212.04.02.18</code></td><td><strong>Mengendalikan Biaya Proyek Berbasis Earned Value Management (EVM)</strong><br><small class="text-muted">Menghitung Planned Value (PV), Earned Value (EV), Actual Cost (AC), serta menganalisis Cost Variance (CV) dan Schedule Variance (SV) untuk proyeksi akhir anggaran (EAC).</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Khusus</td><td><code>INA.5220.313.01.03.18</code></td><td><strong>Mengawasi Pengujian Material di Lapangan & Laboratorium</strong><br><small class="text-muted">Mengawasi slump test beton, core drill beton keras, pengujian kuat tekan kubus/silinder, uji tarik dan lentur baja tulangan, serta pengujian pemadatan tanah (Proctor & Sand Cone).</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '<tr><td class="fw-bold text-primary text-center">Kompetensi Khusus</td><td><code>INA.5220.313.02.03.18</code></td><td><strong>Menyelesaikan Dokumen Serah Terima Pertama (PHO) & As-Built Drawing</strong><br><small class="text-muted">Melakukan pemeriksaan akhir bersama (Defect List / Punch List), memverifikasi perbaikan cacat mutu, dan menyusun manual operasi dan pemeliharaan bangunan (O&M Manual).</small></td><td class="text-center"><span class="badge bg-success-subtle text-success">Wajib Lulus</span></td></tr>';
        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">3.2 Lima Dimensi Kompetensi yang Dinilai Asesor Secara Komprehensif</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Asesor LSP ASTEKINDO tidak hanya menguji hafalan teori normatif peserta, melainkan menilai penguasaan 5 (lima) dimensi kompetensi kerja holistik yang mencerminkan ketangguhan seorang insinyur saat menghadapi realitas dinamika lapangan di ' . htmlspecialchars($city) . ':</p>';
        $html .= '<div class="d-flex flex-column gap-3 my-3">';
        $html .= '<div class="p-3 bg-light rounded-3 border"><strong class="text-primary d-block mb-1">1. Task Skills (Keterampilan Melaksanakan Tugas Mandiri)</strong><span class="text-secondary small" style="line-height: 1.8;">Kapasitas asesi dalam mengeksekusi tugas teknis individual secara akurat, presisi, dan konsisten sesuai instruksi kerja (Standard Operating Procedure / SOP). Contoh: Keahlian membaca notasi pembesian pada gambar penulangan balok-kolom (Bar Bending Schedule), menghitung volume kebutuhan beton ready-mix dengan memperhitungkan faktor kehilangan (waste factor 3-5%), serta mengkalibrasi alat ukur optis Theodolite/Total Station sebelum pengukuran as bangunan dimulai.</span></div>';
        $html .= '<div class="p-3 bg-light rounded-3 border"><strong class="text-primary d-block mb-1">2. Task Management Skills (Keterampilan Mengelola Rangkaian Tugas Simultan)</strong><span class="text-secondary small" style="line-height: 1.8;">Kemampuan mengorkestrasi beberapa aktivitas kerja yang berlangsung serentak di satu zona proyek tanpa menimbulkan kekacauan operasional atau mengorbankan standar mutu. Contoh: Seorang manajer lapangan harus mampu mengkoordinasikan kedatangan konvoi truk mixer dari batching plant, memeriksa kelancaran pompa beton (concrete pump), mengarahkan regu vibrator pemadat beton, dan bersamaan dengan itu mengawasi pemasangan perancah (scaffolding) di zona adjacent agar tidak saling mengganggu jalur sirkulasi pekerja.</span></div>';
        $html .= '<div class="p-3 bg-light rounded-3 border"><strong class="text-primary d-block mb-1">3. Contingency Management Skills (Keterampilan Mengelola Situasi Darurat & Deviasi Lapangan)</strong><span class="text-secondary small" style="line-height: 1.8;">Kesiagaan mental dan ketajaman teknis dalam merespons kejadian tidak terduga, kecelakaan kerja, anomali geoteknik, cuaca ekstrem hujan lebat mendadak, atau kerusakan mesin krusial di tengah-tengah pekerjaan pengecoran. Contoh: Ketika concrete pump tiba-tiba macet saat pengecoran plat lantai sedang berlangsung, tenaga ahli harus segera mengambil keputusan taktis membuat construction joint (stop cor) pada zona sepertiga bentang balok yang memiliki momen lentur minimum dan gaya geser rendah, serta memasang shear key dan sambungan besi dowel sesuai kaidah SNI 2847.</span></div>';
        $html .= '<div class="p-3 bg-light rounded-3 border"><strong class="text-primary d-block mb-1">4. Job Role / Environment Skills (Keterampilan Beradaptasi dengan Lingkungan & Etika Profesi)</strong><span class="text-secondary small" style="line-height: 1.8;">Kemampuan bersosialisasi dan mematuhi tata tertib operasional, etika profesi keinsinyuran, kepatuhan hierarki komando organisasi, serta kepekaan sosial terhadap masyarakat sekitar proyek di ' . htmlspecialchars($city) . '. Contoh: Mengelola dampak kebisingan alat berat saat pekerjaan malam hari, menangani komplain warga sekitar terkait debu galian tanah dengan penyemprotan air rutin (water spraying), serta menolak segala bentuk kompromi mutu atau manipulasi hasil uji laboratorium demi menjaga keselamatan publik.</span></div>';
        $html .= '<div class="p-3 bg-light rounded-3 border"><strong class="text-primary d-block mb-1">5. Transfer Skills (Keterampilan Mentransfer Kompetensi ke Konteks Proyek Baru)</strong><span class="text-secondary small" style="line-height: 1.8;">Kapasitas mengaplikasikan akumulasi pengetahuan keteknikan dan pengalaman yang diperoleh dari proyek terdahulu ke situasi proyek baru yang memiliki karakteristik geologis, iklim, atau skala struktural yang sama sekali berbeda. Contoh: Insinyur yang terbiasa membangun gedung bertingkat di atas tanah keras Pulau Jawa mampu mentransfer prinsip-prinsip rekayasa geotekniknya saat ditugaskan memimpin proyek jembatan atau gedung di atas tanah lunak berawa atau pesisir pantai Provinsi ' . htmlspecialchars($province) . ' dengan cepat menyesuaikan metode pondasi tiang pancang dan proteksi anti-korosi air laut.</span></div>';
        $html .= '</div>';
        $html .= '</section>';

        // BAB IV: KAJIAN TEKNIS SESUAI TOPIK SPESIFIK
        $html .= '<section id="bab-4" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB IV.</span> Kajian Teknis Rekayasa Terapan: ' . htmlspecialchars($topicTitle) . '</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Kajian pada bab ini membedah metodologi teknis praktis yang menjadi inti dari topik <strong>' . htmlspecialchars($topicTitle) . '</strong> untuk diimplementasikan secara nyata pada proyek konstruksi di wilayah ' . htmlspecialchars($city) . ', Provinsi ' . htmlspecialchars($province) . '. Penerapan metode kerja yang benar merupakan garis batas antara keberhasilan proyek dengan potensi malpraktik konstruksi yang dapat berujung pada sanksi hukum kegagalan bangunan.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.1 Prinsip Desain dan Metodologi Pelaksanaan di Lapangan</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pelaksanaan pekerjaan keteknikan wajib berpedoman pada standar norma, standar, pedoman, dan manual (NSPM) yang disahkan Direktorat Jenderal Bina Marga dan Cipta Karya Kementerian PUPR. Langkah awal yang tidak boleh dilewati adalah penyusunan dokumen Metode Kerja (Method Statement) yang memuat:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li>Diagram alur tahapan pekerjaan dari persiapan hingga serah terima parsial.</li>';
        $html .= '<li>Kebutuhan sumber daya tenaga kerja (mandor, tukang terampil, juru ukur, surveyor, drafter, tenaga K3).</li>';
        $html .= '<li>Daftar peralatan kerja utama (crane, batching plant, dump truck, vibrator beton, theodolite/total station) disertai bukti surat izin kelaikan operasi (SILO).</li>';
        $html .= '<li>Kajian Identifikasi Bahaya, Penilaian Risiko, dan Peluang (IBPRP) khusus untuk pekerjaan berisiko tinggi.</li>';
        $html .= '<li>Rencana uji kontrol kualitas (Quality Control Plan / QCP) dan formulir ceklis persetujuan kerja (Request for Work).</li>';
        $html .= '</ul>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.2 Pengendalian Mutu Material dan Pengujian Laboratorium</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pengawasan mutu material struktur beton dan baja tulangan memegang peranan vital dalam menjamin umur rencana bangunan (design life) mencapai 50 hingga 100 tahun sesuai spesifikasi:</p>';
        $html .= '<div class="p-3 my-3 rounded-3 bg-white border border-primary-subtle shadow-sm">';
        $html .= '<h5 class="fw-bold text-primary mb-2" style="font-size: 1.05rem;">Prosedur Uji Slump dan Pembuatan Benda Uji Silinder/Kubus Beton (SNI 1972:2008 & SNI 2847:2019)</h5>';
        $html .= '<p class="text-secondary mb-2" style="line-height: 1.8; font-size: 0.95rem;">';
        $html .= 'Setiap kedatangan truk mixer ready-mix di lokasi proyek ' . htmlspecialchars($city) . ', pengawas wajib melakukan pemeriksaan tiket pengiriman (travel doc/batching sheet) untuk memverifikasi mutu beton rencana (fc\'), rasio air-semen (w/c ratio), jenis bahan tambah (admixture), waktu pencampuran di batching plant, serta waktu tiba di lapangan. Jeda waktu antara pencampuran hingga penuangan tidak boleh melampaui 90 menit atau 300 putaran drum mixer, kecuali menggunakan bahan retarder bersertifikat.';
        $html .= '</p>';
        $html .= '<p class="text-secondary mb-0" style="line-height: 1.8; font-size: 0.95rem;">';
        $html .= 'Pengujian slump dilakukan menggunakan kerucut Abrams (tinggi 30 cm, diameter bawah 20 cm, diameter atas 10 cm). Beton dimasukkan dalam 3 lapis sama tebal, masing-masing lapis ditusuk 25 kali menggunakan tongkat pemadat baja bulat diameter 16 mm. Nilai penurunan slump diukur dengan toleransi &plusmn; 20 mm dari nilai rencana (misalnya 120 &plusmn; 20 mm untuk struktur balok/kolom rapat). Dari tiap truk yang disampel, diambil minimal 3 pasang benda uji silinder (15x30 cm) untuk diuji kuat tekannya pada umur 7, 14, dan 28 hari di laboratorium terakreditasi KAN.';
        $html .= '</p>';
        $html .= '</div>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.3 Analisis Perhitungan Ketahanan Struktur & Standar SNI 1726</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Dalam rekayasa struktur gedung dan jembatan modern, beban gempa rencana dihitung menggunakan metode Analisis Respon Spektrum Dinamik atau Statik Ekivalen berdasarkan SNI 1726:2019 (Tata Cara Perencanaan Ketahanan Gempa untuk Struktur Bangunan Gedung dan Non-Gedung). Gaya geser dasar seismik (Base Shear, <em>V</em>) dihitung dengan perumusan:</p>';
        $html .= '<div class="text-center my-3 p-3 bg-light rounded-3 border font-monospace fw-bold" style="font-size: 1.15rem; color: #0369A1;">';
        $html .= 'V = C<sub>s</sub> &times; W';
        $html .= '</div>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Di mana <em>C<sub>s</sub></em> adalah koefisien respon seismik yang merupakan fungsi dari percepatan periode pendek (<em>S<sub>DS</sub></em>), percepatan periode 1 detik (<em>S<sub>D1</sub></em>), faktor keutamaan gedung (<em>I<sub>e</sub></em>), dan koefisien modifikasi respon sistem struktur (<em>R</em>). Nilai <em>W</em> adalah berat seismik efektif bangunan total. Pemahaman mendalam terhadap rumus ini wajib dikuasai oleh tenaga ahli bersertifikasi ' . htmlspecialchars($schemeTitle) . ' untuk memastikan struktur tidak mengalami keruntuhan tiba-tiba (brittle failure) saat diguncang gempa maksimum yang dipertimbangkan (Maximum Considered Earthquake / MCE<sub>R</sub>).</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.4 Implementasi Building Information Modeling (BIM) Level 2 dalam Pengendalian Konstruksi</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Penerapan Building Information Modeling (BIM) berdasarkan Peraturan Menteri PUPR Nomor 22/PRT/M/2018 telah diwajibkan untuk pembangunan gedung negara tidak sederhana dengan luas di atas 2.000 meter persegi atau di atas 2 lantai. Tenaga ahli bersertifikat ' . htmlspecialchars($schemeTitle) . ' di wilayah ' . htmlspecialchars($city) . ' harus mampu memanfaatkan model 3D parametrik untuk:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Clash Detection Geometris:</strong> Mengidentifikasi tabrakan spasial antara jalur perpipaan mekanikal, ducting tata udara (HVAC), kabel tray elektrikal, dan elemen balok/kolom struktur beton sebelum fabrikasi dimulai di lapangan.</li>';
        $html .= '<li><strong>Simulasi 4D Jadwal Konstruksi:</strong> Menghubungkan elemen model 3D dengan jadwal Kurva S Microsoft Project / Primavera untuk memvisualisasikan urutan ereksi struktur pracetak secara real-time dan mendeteksi potensi kemacetan logistik alat berat crane.</li>';
        $html .= '<li><strong>Ekstraksi Volume Otomatis 5D (Quantity Take-Off):</strong> Menghasilkan perhitungan volume material (beton, besi ulir, bekisting, adukan mortar) yang akurat hingga akurasi 98%, sehingga meminimalkan potensi deviasi pembiayaan dan sengketa opname pekerjaan dengan konsultan pengawas.</li>';
        $html .= '<li><strong>Common Data Environment (CDE):</strong> Pengelolaan repositori gambar kerja digital tunggal yang memastikan seluruh mandor dan pengawas di lokasi proyek ' . htmlspecialchars($city) . ' memegang versi revisi gambar terkini (As-Approved for Construction / AFC).</li>';
        $html .= '</ul>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.5 Mitigasi Retak Termal pada Pengecoran Beton Massa (Mass Concrete)</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pada konstruksi pondasi rakit gedung tinggi (raft foundation), pilar jembatan bentang panjang, atau struktur bendungan di Provinsi ' . htmlspecialchars($province) . ', volume pengecoran beton seringkali melampaui ratusan meter kubik dalam satu kali tuang terus menerus. Fenomena reaksi hidrasi semen melepaskan panas eksotermik tinggi yang dapat menaikkan suhu inti beton hingga mencapai 75&deg;C - 85&deg;C. Apabila perbedaan suhu antara inti beton dengan permukaan luar melampaui 20&deg;C, tegangan tarik termal (thermal tensile stress) akan melampaui kekuatan tarik beton awal, memicu keretakan tembus (through cracks) yang fatal bagi ketahanan air dan keutuhan struktur.</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Standard Operating Procedure (SOP) yang wajib diawasi oleh tenaga ahli mencakup:</p>';
        $html .= '<ol class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li>Penggantian sebagian semen Portland Type I dengan bahan pozzolanik (Fly Ash Class F minimum 25-35% atau Ground Granulated Blast-Furnace Slag / GGBS) untuk memperlambat laju pelepasan kalor hidrasi.</li>';
        $html .= '<li>Penggunaan air dingin atau serpihan es batu (chilled water / ice flakes) dalam campuran beton segar di batching plant guna menjaga suhu beton saat tiba di lokasi proyek ' . htmlspecialchars($city) . ' berada di bawah 30&deg;C.</li>';
        $html .= '<li>Pemasangan jaringan pipa pendingin (cooling pipe system) dari pipa baja tipis berdiameter 1-2 inci di dalam penampang pondasi rakit yang dialiri air dingin secara sirkulasi selama 7-14 hari pasca pengecoran.</li>';
        $html .= '<li>Pemasangan insulasi termal berupa selimut busa (styrofoam / curing blanket) di permukaan atas pelat untuk menahan laju pendinginan permukaan luar sehingga gradien delta T tetap terkendali di bawah 20&deg;C.</li>';
        $html .= '<li>Monitoring data logger sensor termokopel (thermocouple sensors) secara terus menerus setiap interval 2 jam hingga suhu inti stabil melandai.</li>';
        $html .= '</ol>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.6 Pengujian Non-Destructive Testing (NDT) Lanjutan: UPV & Half-Cell Potential</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Selain pengujian silinder hancur konvensional, penjaminan mutu struktur eksisting atau audit kelaikan bangunan gedung di ' . htmlspecialchars($city) . ' menuntut penguasaan metode pengujian non-destruktif (NDT):</p>';
        $html .= '<div class="row g-3 my-3">';
        $html .= '<div class="col-md-6"><div class="p-3 bg-light rounded-3 border h-100"><strong class="text-primary d-block mb-1">A. Ultrasonic Pulse Velocity (UPV - ASTM C597)</strong>Mengukur kecepatan rambat gelombang ultrasonik longitudinal melalui penampang beton. Kecepatan pulsa di atas 4.500 m/detik mengindikasikan kualitas beton sangat baik dan padat (excellent), kecepatan 3.500 - 4.500 m/detik berkualitas baik, sedangkan kecepatan di bawah 3.000 m/detik mengindikasikan adanya rongga udara (honeycombing), delaminasi internal, atau retak mikro yang memerlukan injeksi epoxy resin bertekanan.</div></div>';
        $html .= '<div class="col-md-6"><div class="p-3 bg-light rounded-3 border h-100"><strong class="text-primary d-block mb-1">B. Half-Cell Potential Test (ASTM C876)</strong>Mengukur beda potensial listrik antara tulangan baja dengan elektroda referensi tembaga-tembaga sulfat (Cu/CuSO4) pada permukaan beton. Sangat krusial untuk proyek infrastruktur di zona pesisir ' . htmlspecialchars($province) . ' guna mendeteksi korosi aktif akibat intrusi ion klorida air laut sebelum tanda-tanda visual spalling muncul di permukaan.</div></div>';
        $html .= '</div>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.7 Manajemen Rantai Pasok (Supply Chain Management) Material Konstruksi & Audit Batching Plant</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Keberhasilan pencapaian mutu beton struktural sangat bergantung pada konsistensi rantai pasok material pembentuknya (semen, pasir, agregat kasar, air, dan bahan kimia tambahan / admixture). Tenaga ahli bertugas melakukan audit kelaikan teknis terhadap fasilitas Batching Plant penyedia ready-mix di wilayah ' . htmlspecialchars($city) . ' sebelum kontrak pasokan ditandatangani:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Sertifikasi Kalibrasi Timbangan Digital (Load Cell):</strong> Memastikan seluruh timbangan agregat, semen, air, dan admixture telah dikalibrasi oleh Balai Metrologi resmi dengan toleransi deviasi berat di bawah &plusmn; 1-2%.</li>';
        $html .= '<li><strong>Manajemen Stockpile Agregat:</strong> Memeriksa pemisahan fraksi agregat kasar (split 10-20 mm dan split 20-30 mm) dengan dinding pemisah beton (partition wall) yang kokoh guna mencegah kontaminasi silang dan segregasi butiran, serta dilengkapi atap pelindung panas terik dan hujan.</li>';
        $html .= '<li><strong>Uji Reaktivitas Alkali-Silika (ASR - ASTM C1260):</strong> Menguji potensi reaksi ekspansif antara silika reaktif dalam agregat lokal ' . htmlspecialchars($province) . ' dengan ion alkali semen yang dapat memicu keretakan ekspansif (peta retak kulit buaya) pada masa layan beton.</li>';
        $html .= '<li><strong>Uji Kebersihan dan Gradasi Pasir:</strong> Memastikan kadar lumpur pasir (silt content) di bawah 3-5% sesuai standar PBI 1971 / SNI 03-6821-2002 guna menghindari kebutuhan air berlebih yang melemahkan kuat tekan beton.</li>';
        $html .= '</ul>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">4.8 Audit Kelaikan Operasi Alat Berat Konstruksi: Crane, Excavator & Pile Rig</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pengoperasian alat berat mekanis pada proyek konstruksi gedung tinggi dan jembatan merupakan sumber risiko fatalitas tertinggi bila tidak dikendalikan dengan disiplin teknik. Asesor LSP ASTEKINDO menuntut calon asesi menguasai checklist inspeksi kelaikan alat berat:</p>';
        $html .= '<ol class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Verifikasi Surat Izin Layak Operasi (SILO):</strong> Memeriksa masa berlaku sertifikat uji kelayakan alat yang diterbitkan Perusahaan Jasa K3 (PJK3) terakreditasi Kemnaker.</li>';
        $html .= '<li><strong>Verifikasi Surat Izin Operator (SIO):</strong> Memastikan operator alat berat (Tower Crane, Mobile Crane, Crawler Crane) memegang lisensi aktif Kelas I/II sesuai kapasitas tonase alat yang dikemudikan.</li>';
        $html .= '<li><strong>Rencana Pengangkatan Kritis (Critical Lifting Plan):</strong> Menyusun analisis beban angkat bila manuver crane mendekati 75% kapasitas tertera pada load chart, melibatkan pengangkatan tandem (dua crane simultan), atau berada di atas fasilitas umum/jalan raya aktif di ' . htmlspecialchars($city) . '.</li>';
        $html .= '<li><strong>Pemeriksaan Bantalan Tanah (Outrigger Pad):</strong> Memverifikasi daya dukung tanah tempat kaki tumpuan crane bertumpu (outrigger mat) menggunakan pelat baja tebal atau balok kayu keras guna mencegah tanah amblas saat crane berputar (swinging) dengan beban penuh.</li>';
        $html .= '</ol>';
        $html .= '</section>';

        // BAB V: TANTANGAN GEOTEKNIK REGIONAL
        $html .= '<section id="bab-5" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB V.</span> Karakteristik Geoteknik, Seismik, Iklim & Tantangan Konstruksi di ' . htmlspecialchars($city) . ', ' . htmlspecialchars($province) . '</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Penyelenggaraan jasa konstruksi tidak dapat dilepaskan dari konteks biogeofisik daerah tempat proyek berada. Wilayah <strong>' . htmlspecialchars($city) . '</strong>, Provinsi <strong>' . htmlspecialchars($province) . '</strong> memiliki konfigurasi topografi, geologi tanah, dan iklim yang menghadirkan tantangan teknis tersendiri bagi para praktisi sipil.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">5.1 Karakteristik Mekanika Tanah dan Sistem Pondasi</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Di berbagai zona dataran rendah dan kawasan pesisir Provinsi ' . htmlspecialchars($province) . ', kondisi lapisan tanah dasar umumnya didominasi oleh endapan aluvial (alluvial deposits), lempung lunak (soft clay) berkonsolidasi rendah, atau tanah pasiran berpotensi likuifaksi saat terjadi getaran gempa kuat. Pada kondisi tanah seperti ini, penggunaan pondasi dangkal (footplate) untuk bangunan bertingkat sangat berisiko memicu penurunan diferensial (differential settlement) yang meretakkan dinding dan memiringkan struktur.</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Tenaga ahli LSP ASTEKINDO di ' . htmlspecialchars($city) . ' dituntut mampu mengevaluasi hasil investigasi geoteknik lapangan (pengeboran dalam / deep boring SPT, pengujian sondir CPT, dan uji triaksial laboratorium). Apabila nilai N-SPT tanah keras (>50) berada pada kedalaman lebih dari 15-25 meter, maka pemilihan jenis pondasi dalam seperti spun pile pracetak prategang atau bored pile dengan bentonite slurry stabilization menjadi pilihan rekayasa mutlak untuk mengalirkan beban superstruktur langsung ke lapisan batuan dasar.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">5.2 Parameter Bahaya Kegempaan SNI 1726 di Wilayah ' . htmlspecialchars($province) . '</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Provinsi ' . htmlspecialchars($province) . ' terletak pada wilayah pengaruh tektonik aktif yang dipengaruhi oleh pergerakan lempeng tektonik utama serta sesar-sesar lokal aktif. Berdasarkan Peta Sumber dan Bahaya Gempa Indonesia yang diterbitkan Pusat Studi Gempa Nasional (PuSGeN) Kementerian PUPR, percepatan puncak di batuan dasar (PGA) untuk probabilitas terlampaui 2% dalam 50 tahun (gempa periode ulang 2.475 tahun) menempatkan wilayah ini dalam Kategori Desain Seismik (KDS) D hingga F.</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Implikasi desain struktural di ' . htmlspecialchars($city) . ' menuntut:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li>Penerapan Sistem Rangka Pemikul Momen Khusus (SRPMK) atau Sistem Dinding Geser Khusus (Special Reinforced Concrete Shear Walls).</li>';
        $html .= '<li>Kerapatan sengkang/begel pengekang (confinement ties) pada zona sendi plastis ujung-ujung kolom dan balok untuk memastikan perilaku daktil (ductile behavior).</li>';
        $html .= '<li>Larangan penggunaan tulangan baja polos untuk tulangan utama struktur penahan gempa (wajib baja tulangan sirip/ulir BjTS 420B atau BjTS 520 sesuai SNI 2052:2017).</li>';
        $html .= '<li>Pencegahan fenomena sambungan kolom lemah balok kuat (harus menganut prinsip <em>Strong Column Weak Beam</em>, dengan rasio momen nominal kolom terhadap balok minimum 1,2).</li>';
        $html .= '</ul>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">5.3 Penanganan Hidrologi, Curah Hujan & Sistem Drainase Perkotaan</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Karakteristik iklim tropis basah dengan curah hujan tinggi sepanjang tahun di wilayah ' . htmlspecialchars($city) . ' menuntut integrasi antara struktur perkerasan jalan dan jaringan drainase makro. Perencanaan debit banjir rancangan menggunakan metode Rasional (<em>Q = 0,278 &times; C &times; I &times; A</em>) dengan kala ulang 10 hingga 25 tahun wajib diterapkan pada dimensi saluran U-Ditch pracetak dan gorong-gorong (box culvert). Kurangnya pengawasan terhadap kemiringan hidrolis dasar saluran (hydraulic gradient) kerap memicu sedimentasi lumpur yang mempercepat kerusakan struktur pondasi perkerasan aspal atau rigid pavement.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">5.4 Analisis Likuifaksi Tanah Pasiran & Daya Dukung Terzaghi</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Di beberapa kawasan endapan pantai atau bantaran sungai di wilayah ' . htmlspecialchars($city) . ', lapisan pasir halus jenuh air (saturated loose sand) dengan nilai N-SPT di bawah 15 memiliki kerentanan likuifaksi yang sangat tinggi saat terpicu siklus beban gempa bolak-balik. Tekanan air pori (pore water pressure) akan meningkat drastis hingga menyamai tegangan total tanah, sehingga tegangan efektif tanah dasar merosot menjadi nol (kehilangan kekuatan geser total).</p>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Perhitungan daya dukung ultimit pondasi menggunakan rumus Terzaghi yang dimodifikasi Meyerhof:</p>';
        $html .= '<div class="text-center my-3 p-3 bg-light rounded-3 border font-monospace fw-bold" style="font-size: 1.12rem; color: #0284C7;">';
        $html .= 'q<sub>ult</sub> = c &times; N<sub>c</sub> &times; s<sub>c</sub> + q &times; N<sub>q</sub> &times; s<sub>q</sub> + 0,5 &times; &gamma; &times; B &times; N<sub>&gamma;</sub> &times; s<sub>&gamma;</sub>';
        $html .= '</div>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Di mana faktor daya dukung tanah (<em>N<sub>c</sub>, N<sub>q</sub>, N<sub>&gamma;</sub></em>) merupakan fungsi dari sudut geser dalam tanah (&phi;). Tenaga ahli bertugas merekomendasikan metode perbaikan tanah (ground improvement) seperti pemadatan dinamik (dynamic compaction), stone column, atau penggunaan geosintetik woven bermutu tinggi apabila daya dukung izin (<em>q<sub>all</sub></em>) tidak mampu memikul beban struktur yang direncanakan.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">5.5 Studi Kasus Rekayasa Infrastruktur Strategis & Mitigasi Bencana Daerah</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pembangunan jaringan jalan arteri, jembatan bentang panjang, dan gedung pelayanan publik di Provinsi ' . htmlspecialchars($province) . ' dihadapkan pada ancaman multi-bahaya bencana alam (gempa bumi, banjir bandang, tanah longsor pada lereng perbukitan, serta intrusi air asin). Tenaga ahli bersertifikat LSP ASTEKINDO di ' . htmlspecialchars($city) . ' harus menguasai metode mitigasi struktural berbasis mitigasi berbasis alam (Nature-based Solutions) dan rekayasa struktural berat:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Perkuatan Lereng Tanah dengan Soil Nailing & Shotcrete:</strong> Pemasangan batang baja ulir yang digrouting ke dalam lereng aktif disertai lapisan beton semprot (shotcrete) bertulang kawat anyam (wiremesh) untuk menahan bidang gelincir longsor pada trase jalan perbukitan.</li>';
        $html .= '<li><strong>Perlindungan Abutment Jembatan dari Gerusan Arus (Scour Protection):</strong> Penempatan rip-rap batu gajah (boulder armor stone) atau bronjong kawat berlapis PVC (gabion mattresses) di sekeliling pilar dan pangkal jembatan guna mencegah keruntuhan fondasi akibat pusaran arus banjir sungai musiman.</li>';
        $html .= '<li><strong>Penggunaan Semen Tahan Sulfat (Type V / HS Cement):</strong> Diwajibkan pada seluruh elemen struktur beton yang kontak langsung dengan tanah gambut berkadar asam tinggi atau air laut pasang surut di wilayah pesisir guna mencegah peluruhan matriks kalsium silikat hidrat (C-S-H).</li>';
        $html .= '</ul>';
        $html .= '</section>';

        // BAB VI: STANDAR OPERASIONAL PROSEDUR PENGAWASAN MUTU (QA/QC)
        $html .= '<section id="bab-6" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB VI.</span> Standar Operasional Prosedur (SOP) Penjaminan & Pengendalian Mutu (QA/QC) Lapangan</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Penjaminan Mutu (Quality Assurance) dan Pengendalian Mutu (Quality Control) merupakan instrumen kendali manajerial yang memastikan setiap meter kubik beton, setiap bentang gelagar baja, dan setiap lapisan aspal yang terpasang memenuhi kriteria keberterimaan (acceptance criteria) dokumen spesifikasi kontrak.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">6.1 Siklus Persetujuan Kerja (Request for Work / Ijin Kerja)</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Sebelum kontraktor pelaksana di ' . htmlspecialchars($city) . ' diizinkan memulai tahapan pengecoran atau pemasangan struktur, wajib dijalankan alur perizinan berjenjang:</p>';
        $html .= '<div class="p-4 my-3 bg-light rounded-4 border">';
        $html .= '<div class="d-flex flex-column gap-3">';
        $html .= '<div class="d-flex align-items-start gap-3"><span class="badge bg-primary text-white rounded-circle p-2 px-3 fw-bold">1</span><div><strong>Pengajuan Lembar Ijin Kerja (Request for Work - RFW):</strong><br><span class="text-muted small">Kontraktor menyerahkan formulir RFW minimal 24 jam sebelum jadwal pekerjaan, dilampiri Shop Drawing yang telah disetujui (Approved for Construction), hasil uji laboratorium material, dan formulir JSA K3.</span></div></div>';
        $html .= '<div class="d-flex align-items-start gap-3"><span class="badge bg-primary text-white rounded-circle p-2 px-3 fw-bold">2</span><div><strong>Inspeksi Bersama Lapangan (Joint Inspection):</strong><br><span class="text-muted small">Quality Inspector kontraktor bersama Pengawas Lapangan Konsultan Supervisi memeriksa langsung dimensi bekisting, ketegakan perancah (scaffolding), kebersihan dasar pengecoran dari serpihan kawat/kayu (air-jet cleaning), dan diameter serta jarak sengkang pembesian.</span></div></div>';
        $html .= '<div class="d-flex align-items-start gap-3"><span class="badge bg-primary text-white rounded-circle p-2 px-3 fw-bold">3</span><div><strong>Penandatanganan Lembar Persetujuan (Approval Sheet):</strong><br><span class="text-muted small">Jika seluruh parameter checklist terpenuhi, konsultan supervisi menandatangani form RFW. Bila ditemukan kekurangan minor, kontraktor diberikan waktu perbaikan hingga re-inspeksi berhasil.</span></div></div>';
        $html .= '<div class="d-flex align-items-start gap-3"><span class="badge bg-primary text-white rounded-circle p-2 px-3 fw-bold">4</span><div><strong>Pelaksanaan Pekerjaan & Pengawasan Berkelanjutan:</strong><br><span class="text-muted small">Pengecoran diawasi ketat oleh inspektur untuk memastikan pemadatan vibrator tidak mengenai tulangan secara berlebihan (mencegah bleeding dan honey-combing).</span></div></div>';
        $html .= '</div>';
        $html .= '</div>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">6.2 Pengendalian Ketidaksesuaian Mutu (Non-Conformance Report / NCR)</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Apabila hasil uji kuat tekan beton 28 hari tidak mencapai fc\' rencana, atau terjadi lendutan bekisting yang melampaui toleransi yang diizinkan (misal deviasi kolom melebihi 10 mm per 3 meter tinggi), konsultan pengawas berwenang menerbitkan Surat Pemberitahuan Ketidaksesuaian Mutu (Non-Conformance Report / NCR). Alur penanganan NCR meliputi:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Identifikasi Akar Masalah (Root Cause Analysis):</strong> Menginvestigasi apakah kegagalan mutu disebabkan oleh kesalahan takaran air di batching plant, segregasi saat penuangan, atau kurangnya perawatan beton (curing).</li>';
        $html .= '<li><strong>Pengujian Lanjutan Non-Destruktif (NDT):</strong> Melakukan uji Rebound Hammer (ASTM C805), uji Ultrasonic Pulse Velocity (UPV - ASTM C597), atau pengambilan sampel inti (Core Drill - ASTM C42) pada elemen struktur yang diragukan.</li>';
        $html .= '<li><strong>Kajian Ahli Struktur (Engineering Evaluation):</strong> Ahli Teknik Bangunan Gedung LSP ASTEKINDO melakukan simulasi ulang kapasitas penampang dengan kekuatan aktual hasil core drill.</li>';
        $html .= '<li><strong>Tindakan Korektif (Corrective Action):</strong> Bila kapasitas masih memenuhi faktor keamanan beban terfaktor, elemen dapat diterima dengan syarat proteksi permukaan (surface repair/grouting). Namun jika kapasitas runtuh, tindakan retrofitting (perkuatan serat karbon / CFRP jacketing) atau pembongkaran total (demolition) wajib diperintahkan.</li>';
        $html .= '<li><strong>Penutupan NCR (NCR Close-Out):</strong> Diterbitkan setelah perbaikan tuntas diverifikasi dan disetujui Pengguna Jasa (Pejabat Pembuat Komitmen / PPK).</li>';
        $html .= '</ul>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">6.3 Integrasi Lima Elemen SMKK Permen PUPR 10/2021</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Sistem Manajemen Keselamatan Konstruksi (SMKK) tidak berdiri sendiri, melainkan terintegrasi ke dalam alur manajemen mutu harian proyek. Kelima elemen SMKK yang dinilai dalam portofolio asesi adalah:</p>';
        $html .= '<ol class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Kepemimpinan dan Partisipasi Pekerja dalam Keselamatan Konstruksi:</strong> Komitmen direksi penyedia jasa, pakta komitmen keselamatan, penyediaan anggaran biaya penerapan SMKK yang terinci dalam penawaran tender (tidak boleh di-nol-kan).</li>';
        $html .= '<li><strong>Perencanaan Keselamatan Konstruksi:</strong> Penyusunan Identifikasi Bahaya, Penilaian Risiko, dan Peluang (IBPRP), penentuan rencana sasaran program K3 khusus, serta kepatuhan terhadap standar perundang-undangan lingkungan.</li>';
        $html .= '<li><strong>Dukungan Keselamatan Konstruksi:</strong> Ketersediaan sumber daya manusia bersertifikat (Ahli K3, Petugas P3K, Tenaga K3 Scaffolding, Rigger), kompetensi operator alat berat (SIO), pelatihan safety induction bagi tamu dan pekerja baru, serta penyediaan fasilitas sanitasi layak di barak pekerja.</li>';
        $html .= '<li><strong>Operasi Keselamatan Konstruksi:</strong> Pelaksanaan izin kerja khusus (Permit to Work untuk pekerjaan di ketinggian, ruang terbatas / confined space, penggalian tanah dalam, pekerjaan panas / hot work, dan pekerjaan pengangkatan / lifting plan).</li>';
        $html .= '<li><strong>Evaluasi Kinerja Keselamatan Konstruksi:</strong> Pelaksanaan audit internal SMKK berkala, pemantauan indikator kinerja keselamatan (Lagging Indicators: LTI, Severity Rate, Frequency Rate; Leading Indicators: Safety Walk, Toolbox Meeting, Hazard Reporting), serta investigasi mendalam terhadap insiden kecelakaan kerja.</li>';
        $html .= '</ol>';
        $html .= '</section>';

        // BAB VII: PANDUAN PENDAFTARAN & ALUR ASESMEN
        $html .= '<section id="bab-7" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB VII.</span> Panduan Operasional Pendaftaran, Portofolio & Uji Asesmen Kompetensi Step-by-Step</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Untuk memfasilitasi calon peserta sertifikasi di wilayah ' . htmlspecialchars($city) . ' dan sekitarnya, LSP ASTEKINDO Konstruksi Mandiri menyelenggarakan proses asesmen dengan mekanisme sistematis, terukur, dan transparan sesuai panduan BNSP 201.</p>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">7.1 Persyaratan Berkas Administrasi & Portofolio Wajib</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Calon asesi wajib menyiapkan dokumen portofolio dalam format digital PDF berkualitas tinggi:</p>';
        $html .= '<div class="row g-3 my-3">';
        $html .= '<div class="col-md-6"><div class="p-3 bg-light rounded-3 border h-100"><h6 class="fw-bold text-dark mb-2"><i class="bi bi-file-earmark-person text-primary me-2"></i>A. Dokumen Identitas & Formalitas</h6><ul class="text-secondary small mb-0 ps-3" style="line-height: 1.8;"><li>Salinan Kartu Tanda Penduduk (KTP Elektronik) yang masih berlaku.</li><li>Salinan Kartu Nomor Pokok Wajib Pajak (NPWP Pribadi).</li><li>Ijazah pendidikan teknik formal (D3, S1, S2, atau S3) yang terdaftar di Pangkalan Data Dikti (PDDikti).</li><li>Transkrip nilai akademik lengkap.</li><li>Pasfoto formal digital terbaru berlatar belakang merah (ukuran 3x4).</li></ul></div></div>';
        $html .= '<div class="col-md-6"><div class="p-3 bg-light rounded-3 border h-100"><h6 class="fw-bold text-dark mb-2"><i class="bi bi-briefcase text-primary me-2"></i>B. Bukti Pengalaman Proyek (Portofolio VATM)</h6><ul class="text-secondary small mb-0 ps-3" style="line-height: 1.8;"><li>Surat Keterangan Pengalaman Kerja / Referensi Kerja resmi dari direktur perusahaan kontraktor/konsultan.</li><li>Curriculum Vitae (CV) riwayat proyek yang pernah ditangani secara kronologis.</li><li>Salinan Surat Perintah Kerja (SPK) atau Kontrak Proyek yang mencantumkan nama pemohon.</li><li>Contoh produk kerja mandiri (Laporan Progres Mingguan, Gambar As-Built, Dokumen RKK, Dokumen JSA, atau Hasil Uji Lab).</li><li>Foto dokumentasi kegiatan asesi di lokasi proyek konstruksi.</li></ul></div></div>';
        $html .= '</div>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">7.2 Tahapan Asesmen di Tempat Uji Kompetensi (TUK) ' . htmlspecialchars($city) . '</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Alur uji kompetensi terdiri atas 4 (empat) fase evaluasi berkesinambungan:</p>';
        $html .= '<ol class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Pra-Asesmen & Pengisian Formulir APL-01 & APL-02:</strong> Asesi mengajukan permohonan dan melakukan penilaian mandiri (self-assessment). Asesor pra-asesmen memverifikasi kelayakan berkas berdasarkan kriteria Validitas, Keaslian, Keterkinian, dan Kecukupan (VATM).</li>';
        $html .= '<li><strong>Uji Tulis (Knowledge Assessment):</strong> Asesi mengerjakan soal pilihan ganda dan esai teknis yang menguji pemahaman terhadap regulasi UU Jasa Konstruksi, standar SMKK, rumus keteknikan, dan metode kerja di TUK atau sistem CAT online resmi LSP ASTEKINDO.</li>';
        $html .= '<li><strong>Uji Wawancara Mendalam (Interview Assessment):</strong> Tim asesor kompetensi berlisensi BNSP melakukan tanya jawab komprehensif untuk memverifikasi keabsahan dokumen portofolio proyek yang dilampirkan, guna memastikan bahwa dokumen tersebut disusun secara nyata oleh asesi bersangkutan.</li>';
        $html .= '<li><strong>Uji Praktik / Studi Kasus Lapangan:</strong> Asesi memecahkan simulasi permasalahan teknis (case study problem solving), misalnya mengatasi anomali hasil slump test beton, membuat program percepatan kurva S, atau menyusun Rencana Keselamatan Konstruksi (RKK) pada skenario pekerjaan kritis.</li>';
        $html .= '</ol>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">7.3 Tips Sukses Menyusun Bukti Portofolio Form APL-02</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Formulir APL-02 (Asesmen Mandiri) merupakan instrumen krusial tempat calon asesi mencocokkan bukti portofolio kerja dengan setiap Kriteria Unjuk Kerja (KUK) unit kompetensi SKKNI. Beberapa kiat praktis dari tim asesor LSP ASTEKINDO:</p>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li><strong>Fokus pada Bukti Otentik Dokumen Resmi:</strong> Lampirkan lembar pengesahan laporan proyek yang mencantumkan nama, tanda tangan, dan cap basah perusahaan tempat Anda bertugas. Hindari melampirkan draf dokumen mentah tanpa pengesahan resmi.</li>';
        $html .= '<li><strong>Konsistensi Periode Waktu Proyek:</strong> Pastikan rentang waktu pada surat pengalaman kerja (referensi), Curriculum Vitae, dan tanggal dokumen teknis saling bersesuaian secara logis.</li>';
        $html .= '<li><strong>Keterkinian Dokumen (Currency):</strong> Prioritaskan melampirkan portofolio pekerjaan dari proyek yang dikerjakan dalam kurun waktu 3 hingga 5 tahun terakhir untuk membuktikan pemahaman regulasi perundang-undangan mutakhir (seperti Permen PUPR 10/2021).</li>';
        $html .= '<li><strong>Kesiapan Mempertanggungjawabkan Setiap Lembar:</strong> Asesor akan meminta Anda menjelaskan rumus kalkulasi atau metode kerja pada salah satu halaman laporan proyek secara acak saat sesi wawancara. Jangan pernah melampirkan dokumen hasil plagiasi milik rekan kerja lain.</li>';
        $html .= '</ul>';
        $html .= '</section>';

        // BAB VIII: PANDUAN VERIFIKASI QR CODE SIKI PUPR
        $html .= '<section id="bab-8" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB VIII.</span> Panduan Validasi Keaslian Sertifikat & Verifikasi QR-Code SIKI LPJK Kementerian PUPR</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Dalam era keterbukaan informasi dan digitalisasi pengadaan barang/jasa pemerintah melalui LPSE, seluruh panitia lelang tender (Pokja Pengadaan) mewajibkan verifikasi keaslian Sertifikat Kompetensi Kerja secara online real-time. SKK yang diterbitkan oleh LSP ASTEKINDO Konstruksi Mandiri memiliki sistem pengamanan berlapis:</p>';
        
        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">8.1 Fitur Pengamanan Blanko Sertifikat Fisik</h3>';
        $html .= '<ul class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li>Kertas sekuriti khusus berbobot 180-210 gsm dengan tanda air (watermark) resmi Garuda Pancasila BNSP.</li>';
        $html .= '<li>Hologram keaslian tiga dimensi berkode registrasi unik yang rusak bila dilepaskan secara paksa.</li>';
        $html .= '<li>Nomor Registrasi Sertifikat Ganda: Nomor Registrasi BNSP (di bagian atas) dan Nomor Registrasi LPJK Kementerian PUPR (di bagian bawah).</li>';
        $html .= '<li>QR-Code dinamis terenkripsi kriptografi SHA-256 yang memuat tautan langsung ke basis data database SIKI PUPR.</li>';
        $html .= '</ul>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">8.2 Langkah Memverifikasi Sertifikat Secara Mandiri</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Pengguna jasa, instansi pemberi kerja, maupun pemegang sertifikat dapat memeriksa keabsahan status aktif sertifikat kapan saja melalui prosedur berikut:</p>';
        $html .= '<ol class="text-secondary" style="line-height: 1.85;">';
        $html .= '<li>Pindai QR-Code yang tercetak di sudut bawah sertifikat menggunakan kamera smartphone atau aplikasi QR Scanner standar.</li>';
        $html .= '<li>Pastikan URL yang terbuka mengarah ke domain resmi pemerintah Republik Indonesia: <code>https://siki.pu.go.id</code> atau <code>https://bnsp.go.id</code>. Waspadai tautan tiruan yang menggunakan domain tidak resmi (.com, .xyz, dsb).</li>';
        $html .= '<li>Halaman verifikasi akan menampilkan data lengkap: Nama Lengkap Pemegang, NIK (tersensor), Nomor Registrasi SKK, Nama LSP Penerbit (LSP ASTEKINDO Konstruksi Mandiri), Skema Sertifikasi, Jenjang Kualifikasi, Tanggal Terbit, dan Tanggal Berakhir Masa Berlaku (5 Tahun).</li>';
        $html .= '<li>Sertifikat yang sah dan aktif akan berstatus <strong>VALID / AKTIF TERCATAT</strong>.</li>';
        $html .= '</ol>';

        $html .= '<h3 class="fw-bold text-dark mt-4 mb-2" style="font-size: 1.18rem;">8.3 Aspek Hukum Pemalsuan Sertifikat & Implikasi Tipikor pada Pengadaan Barang/Jasa</h3>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Penggunaan sertifikat kompetensi palsu (aspal / asli tapi palsu) dalam penawaran tender paket konstruksi APBN/APBD di wilayah ' . htmlspecialchars($city) . ' mengandung risiko hukum pidana berat. Berdasarkan Pasal 263 Kitab Undang-Undang Hukum Pidana (KUHP), pemalsuan surat dapat diancam pidana penjara hingga 6 tahun. Lebih fatal lagi, jika pemalsuan SKK tenaga ahli tersebut berujung pada penetapan pemenang lelang proyek pemerintah, tindakan tersebut dapat dikualifikasikan sebagai perbuatan curang (fraud) dan tindak pidana korupsi berdasarkan Undang-Undang Nomor 31 Tahun 1999 jo. UU Nomor 20 Tahun 2001 tentang Pemberantasan Tindak Pidana Korupsi, dengan ancaman pidana penjara hingga 20 tahun dan kewajiban pengembalian kerugian keuangan negara. Oleh karena itu, pastikan Anda hanya memproses sertifikasi melalui jalur resmi LSP ASTEKINDO yang berizin sah.</p>';
        $html .= '</section>';

        // BAB IX: FAQ KOMPREHENSIF 10 PERTANYAAN
        $html .= '<section id="bab-9" class="mb-5">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB IX.</span> Tanya Jawab Komprehensif (FAQ) Seputar Sertifikasi SKK LSP ASTEKINDO</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Berikut adalah jawaban otoritatif atas 10 pertanyaan yang paling kerap diajukan oleh para calon asesi dan direktur perusahaan konstruksi di wilayah ' . htmlspecialchars($city) . ':</p>';

        $faqs = [
            [
                'q' => 'Apakah SKK yang diterbitkan LSP ASTEKINDO diakui dalam lelang tender LPSE Kementerian PUPR dan BUMN?',
                'a' => 'Ya, 100% diakui secara sah dan mutlak. LSP ASTEKINDO Konstruksi Mandiri memiliki lisensi resmi dari Badan Nasional Sertifikasi Profesi (BNSP) dan telah terakreditasi oleh Lembaga Pengembangan Jasa Konstruksi (LPJK) Kementerian PUPR. Seluruh nomor registrasi sertifikat langsung terdata di Sistem Informasi Konstruksi Terintegrasi (SIKI PUPR) yang menjadi rujukan verifikasi Pokja Pengadaan LPSE di seluruh Indonesia.'
            ],
            [
                'q' => 'Berapa lama masa berlaku Sertifikat Kompetensi Kerja (SKK) Konstruksi ini?',
                'a' => 'Sesuai dengan Peraturan Menteri PUPR Nomor 8 Tahun 2021, masa berlaku SKK Konstruksi adalah 5 (lima) tahun penuh sejak tanggal diterbitkan. Pemegang sertifikat dapat mengajukan perpanjangan (renewal) mulai 6 (enam) bulan sebelum masa berlaku berakhir melalui jalur surveilans dan uji portofolio penyegaran di LSP ASTEKINDO.'
            ],
            [
                'q' => 'Apakah lulusan baru (Fresh Graduate) S1/D3 Teknik Sipil dapat mendaftar uji kompetensi?',
                'a' => 'Tentu bisa. Lulusan baru pendidikan teknik dapat mendaftar pada kualifikasi Jenjang 6 (Teknisi/Inspektur) atau Jenjang 7 (Ahli Muda) melalui skema penyesuaian bukti portofolio kerja praktik, tugas akhir/skripsi yang relevan, serta sertifikat pelatihan profesi. Tim verifikator TUK ' . $city . ' akan membimbing Anda menyusun dokumen bukti pendukung yang memenuhi standar VATM.'
            ],
            [
                'q' => 'Bagaimana jika saya berdomisili di luar ' . $city . ' namun ingin mengikuti uji kompetensi di sini?',
                'a' => 'LSP ASTEKINDO melayani pendaftaran dari seluruh penjuru Indonesia tanpa batasan domisili KTP. Anda yang berada di kabupaten/kota sekitar Provinsi ' . $province . ' dapat mendaftar dan mengikuti asesmen di TUK ' . $city . ' baik secara tatap muka langsung (offline) maupun melalui skema uji kompetensi jarak jauh (online assessment) sesuai persetujuan komite teknis.'
            ],
            [
                'q' => 'Apa perbedaan mendasar antara Jenjang 7 (Ahli Muda), Jenjang 8 (Ahli Madya), dan Jenjang 9 (Ahli Utama)?',
                'a' => 'Perbedaan terletak pada tingkat kompleksitas tanggung jawab manajerial dan persyaratan pengalaman kerja. Jenjang 7 berwenang memimpin operasional teknis lapangan skala menengah (pengalaman S1 min. 2 tahun). Jenjang 8 bertanggung jawab merancang metode, menganalisis risiko, dan memimpin proyek skala besar (pengalaman S1 min. 4-6 tahun). Sedangkan Jenjang 9 merupakan tingkat keahlian tertinggi sebagai Penilai Ahli, Pengarah Teknis Strategis, atau Project Director mega proyek infrastruktur (pengalaman min. 8-12 tahun).'
            ],
            [
                'q' => 'Apakah seorang tenaga ahli diperbolehkan memegang lebih dari satu sertifikat kompetensi SKK?',
                'a' => 'Berdasarkan regulasi LPJK, seorang tenaga kerja konstruksi dapat memiliki hingga maksimal 2 (dua) SKK pada klasifikasi dan subklasifikasi yang berbeda (misalnya: 1 SKK bidang Bangunan Gedung dan 1 SKK bidang Keselamatan Konstruksi/K3), asalkan memenuhi kualifikasi latar belakang pendidikan dan portofolio kerja yang valid pada masing-masing bidang tersebut.'
            ],
            [
                'q' => 'Berapa lama proses asesmen hingga blangko sertifikat fisik terbit dan online di SIKI?',
                'a' => 'Proses asesmen mulai dari verifikasi dokumen APL-01/APL-02, pelaksanaan uji tertulis dan wawancara, rapat pleno komite teknis, hingga registrasi di portal SIKI LPJK dan pencetakan blanko resmi berhologram BNSP rata-rata memerlukan waktu 7 hingga 14 hari kerja setelah seluruh berkas dinyatakan lengkap dan asesi dinyatakan Kompeten (K).'
            ],
            [
                'q' => 'Bagaimana jika dalam proses asesmen peserta dinyatakan "Belum Kompeten (BK)"?',
                'a' => 'Apabila asesi dinyatakan Belum Kompeten pada unit kompetensi tertentu, asesi berhak menempuh asesmen ulang (re-assessment) hanya pada unit kompetensi yang belum tercapai tersebut dalam kurun waktu yang disepakati bersama asesor tanpa harus mengulang keseluruhan proses dari awal.'
            ],
            [
                'q' => 'Apakah SKK LSP ASTEKINDO diakui bila saya ingin bekerja pada proyek di luar negeri?',
                'a' => 'Ya. Sertifikat berlambang Garuda Emas BNSP memiliki pengakuan kesetaraan kompetensi di tingkat kawasan Asia Tenggara melalui perjanjian Mutual Recognition Arrangement (MRA) on Engineering Services di lingkungan negara-negara anggota ASEAN. Sertifikat ini menjadi bukti kompetensi internasional yang sah.'
            ],
            [
                'q' => 'Bagaimana cara mendaftar dan berkonsultasi mengenai kelengkapan berkas portofolio saya?',
                'a' => 'Anda dapat langsung menghubungi tim sekretariat Tempat Uji Kompetensi (TUK) LSP ASTEKINDO di ' . $city . ' melalui hotline WhatsApp resmi di nomor <strong>0813-9981-0272</strong> atau <strong>0812-8362-4838</strong>. Tim konsultan teknis kami akan memeriksa berkas Anda tanpa dipungut biaya pra-konsultasi.'
            ]
        ];

        $html .= '<div class="accordion my-4 shadow-sm rounded-4 overflow-hidden" id="faqAccordionRegional">';
        foreach ($faqs as $i => $faq) {
            $collapseId = 'faqCollapse' . $i;
            $headingId = 'faqHead' . $i;
            $html .= '<div class="accordion-item border-0 border-bottom">';
            $html .= '<h2 class="accordion-header" id="' . $headingId . '">';
            $html .= '<button class="accordion-button ' . ($i === 0 ? '' : 'collapsed') . ' fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="' . ($i === 0 ? 'true' : 'false') . '" aria-controls="' . $collapseId . '">';
            $html .= ($i + 1) . '. ' . htmlspecialchars($faq['q']);
            $html .= '</button>';
            $html .= '</h2>';
            $html .= '<div id="' . $collapseId . '" class="accordion-collapse collapse ' . ($i === 0 ? 'show' : '') . '" aria-labelledby="' . $headingId . '" data-bs-parent="#faqAccordionRegional">';
            $html .= '<div class="accordion-body text-secondary" style="line-height: 1.85; background: #FAFDFB;">';
            $html .= htmlspecialchars($faq['a']);
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
        $html .= '</div>';
        $html .= '</section>';

        // BAB X: PENUTUP & CALL TO ACTION
        $html .= '<section id="bab-10" class="mb-4">';
        $html .= '<h2 class="fw-bold text-dark pb-2 mb-3 border-bottom" style="font-size: 1.45rem; border-color: #BAE6FD !important;"><span class="text-primary me-2">BAB X.</span> Kesimpulan, Komitmen Mutu & Layanan Konsultasi Resmi TUK ' . htmlspecialchars($city) . '</h2>';
        $html .= '<p class="text-secondary" style="line-height: 1.85;">Standarisasi keahlian tenaga kerja konstruksi bukan semata-mata pemenuhan berkas administratif guna memenangkan tender, melainkan amanah moral dan tanggung jawab keilmuan yang membedakan seorang insinyur profesional dengan pekerja amatir. Dengan mengantongi Sertifikat Kompetensi Kerja resmi dari LSP ASTEKINDO Konstruksi Mandiri, Anda tidak hanya mematuhi amanat Undang-Undang Jasa Konstruksi, tetapi juga membuktikan dedikasi terhadap keselamatan nyawa manusia dan keandalan infrastruktur peradaban bangsa.</p>';

        $html .= '<div class="p-4 rounded-4 mt-4 text-white shadow-sm" style="background: linear-gradient(135deg, #0284C7 0%, #0EA5E9 100%);">';
        $html .= '<h4 class="fw-bold text-white mb-2">Konsultasi Portofolio & Pendaftaran Jadwal Uji Kompetensi</h4>';
        $html .= '<p class="text-white-50 mb-3" style="line-height: 1.7; max-width: 850px;">Sekretariat TUK Wilayah ' . htmlspecialchars($city) . ', Provinsi ' . htmlspecialchars($province) . ' membuka layanan pendampingan pemberkasan setiap hari kerja. Hubungi narahubung resmi kami sekarang juga untuk memastikan jadwal asesmen terdekat:</p>';
        $html .= '<div class="d-flex flex-wrap gap-3 align-items-center">';
        $html .= '<a href="https://api.whatsapp.com/send?phone=6281399810272&text=' . urlencode('Halo LSP ASTEKINDO, saya ingin konsultasi pendaftaran SKK ' . $schemeTitle . ' di ' . $city) . '" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2 shadow-sm">';
        $html .= '<i class="bi bi-whatsapp me-2"></i> WhatsApp Konsultasi: 0813-9981-0272';
        $html .= '</a>';
        $html .= '<a href="https://api.whatsapp.com/send?phone=6281283624838" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold">';
        $html .= '<i class="bi bi-whatsapp me-2"></i> Hotline 2: 0812-8362-4838';
        $html .= '</a>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</section>';

        return $html;
    }
}
