<?php

namespace App\Services;

use App\Models\Program;
use App\Models\Article;
use Illuminate\Support\Str;

class AstekindoSchemeService
{
    /**
     * Map a raw title into a standard professional category
     */
    public static function categorizeScheme(string $title): string
    {
        $lower = strtolower($title);

        if (str_contains($lower, 'k3') || str_contains($lower, 'keselamatan') || str_contains($lower, 'smkk') || str_contains($lower, 'higiene')) {
            return 'Keselamatan Konstruksi (K3)';
        }
        if (str_contains($lower, 'jalan') || str_contains($lower, 'jembatan') || str_contains($lower, 'rel') || str_contains($lower, 'aspal') || str_contains($lower, 'perkerasan') || str_contains($lower, 'kereta')) {
            return 'Jalan & Jembatan';
        }
        if (str_contains($lower, 'air') || str_contains($lower, 'hidrologi') || str_contains($lower, 'hidrolika') || str_contains($lower, 'sungai') || str_contains($lower, 'pantai') || str_contains($lower, 'drainase') || str_contains($lower, 'irigasi') || str_contains($lower, 'bendungan') || str_contains($lower, 'dermaga') || str_contains($lower, 'pelabuhan') || str_contains($lower, 'pengerukan') || str_contains($lower, 'spald') || str_contains($lower, 'limbah') || str_contains($lower, 'rawa') || str_contains($lower, 'sumber daya air') || str_contains($lower, 'pengairan')) {
            return 'Sumber Daya Air & Sanitasi';
        }
        if (str_contains($lower, 'gedung') || str_contains($lower, 'bangunan') || str_contains($lower, 'arsitektur') || str_contains($lower, 'beton') || str_contains($lower, 'baja') || str_contains($lower, 'struktur') || str_contains($lower, 'pembongkaran') || str_contains($lower, 'grouting') || str_contains($lower, 'pondasi') || str_contains($lower, 'tanah') || str_contains($lower, 'geoteknik') || str_contains($lower, 'sondir') || str_contains($lower, 'pengeboran')) {
            return 'Gedung & Geoteknik';
        }
        if (str_contains($lower, 'manajemen') || str_contains($lower, 'manager') || str_contains($lower, 'biaya') || str_contains($lower, 'kontrak') || str_contains($lower, 'survei') || str_contains($lower, 'surveyor') || str_contains($lower, 'ukur') || str_contains($lower, 'pemetaan') || str_contains($lower, 'mutu')) {
            return 'Manajemen & Survei Proyek';
        }
        if (str_contains($lower, 'mekanikal') || str_contains($lower, 'elektrikal') || str_contains($lower, 'alat berat') || str_contains($lower, 'plumbing') || str_contains($lower, 'pipa') || str_contains($lower, 'las') || str_contains($lower, 'pengelasan')) {
            return 'Mekanikal & Alat Berat';
        }

        return 'Teknik Konstruksi Sipil';
    }

    /**
     * Determine KKNI Jenjang based on title
     */
    public static function determineJenjang(string $title): string
    {
        if (preg_match('/Level\s*4/i', $title)) {
            return 'Jenjang 4 (Pelaksana)';
        }
        if (preg_match('/Level\s*5/i', $title)) {
            return 'Jenjang 5 (Teknisi / Pelaksana)';
        }
        if (preg_match('/Level\s*6/i', $title)) {
            return 'Jenjang 6 (Teknisi / Pengawas)';
        }
        if (stripos($title, 'Ahli Utama') !== false) {
            return 'Jenjang 9 (Ahli Utama)';
        }
        if (stripos($title, 'Ahli Madya') !== false) {
            return 'Jenjang 8 (Ahli Madya)';
        }
        if (stripos($title, 'Ahli Muda') !== false) {
            return 'Jenjang 7 (Ahli Muda)';
        }
        if (stripos($title, 'Operator') !== false) {
            return 'Jenjang 3 (Operator Terampil)';
        }
        if (stripos($title, 'Juru') !== false || stripos($title, 'Tukang') !== false) {
            return 'Jenjang 2 & 3 (Terampil)';
        }

        return 'Jenjang 6 & 7 (Teknisi / Ahli)';
    }

    /**
     * Get modern Bootstrap Icon for category
     */
    public static function getSchemeIcon(string $category): string
    {
        return match ($category) {
            'Keselamatan Konstruksi (K3)' => 'bi-shield-check',
            'Jalan & Jembatan' => 'bi-cone-striped',
            'Sumber Daya Air & Sanitasi' => 'bi-water',
            'Gedung & Geoteknik' => 'bi-building',
            'Manajemen & Survei Proyek' => 'bi-diagram-3-fill',
            'Mekanikal & Alat Berat' => 'bi-gear-wide-connected',
            default => 'bi-tools',
        };
    }

    /**
     * Get thematic Unsplash image for category
     */
    public static function getSchemeImage(string $category): string
    {
        return match ($category) {
            'Keselamatan Konstruksi (K3)' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800&auto=format&fit=crop&q=80',
            'Jalan & Jembatan' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&auto=format&fit=crop&q=80',
            'Sumber Daya Air & Sanitasi' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?w=800&auto=format&fit=crop&q=80',
            'Gedung & Geoteknik' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&auto=format&fit=crop&q=80',
            'Manajemen & Survei Proyek' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80',
            'Mekanikal & Alat Berat' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
            default => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&auto=format&fit=crop&q=80',
        };
    }

    /**
     * Master definition of all 202 Training K3 & Sertifikasi SKK Schemes crawled from BNSP
     */
    public static function getMasterSchemes(): array
    {
        $jsonPath = storage_path('app/bnsp_schemes_202.json');
        if (!file_exists($jsonPath)) {
            return [];
        }

        $rawSchemes = json_decode(file_get_contents($jsonPath), true) ?: [];
        $schemes = [];

        foreach ($rawSchemes as $item) {
            $no = (int)$item['no'];
            $rawTitle = trim($item['raw_title']);
            
            // Client requirement: "Di depan nama nya dibuat kata Training"
            $title = preg_replace('/^Training\s+/i', '', $rawTitle);
            $trainingTitle = 'Training ' . $title;
            
            $units = (int)($item['units'] ?? 8);
            $code = 'SKK-K3-' . sprintf('%03d', $no);
            $slug = Str::slug($trainingTitle);
            $category = static::categorizeScheme($rawTitle);
            $jenjang = static::determineJenjang($rawTitle);

            $schemes[] = [
                'id' => $no,
                'no' => $no,
                'title' => $trainingTitle,
                'raw_title' => $rawTitle,
                'code' => $code,
                'slug' => $slug,
                'category' => $category,
                'jenjang' => $jenjang,
                'badge' => ($units >= 15 ? 'Skema Komprehensif' : ($no <= 25 ? 'Program Populer' : 'Standar SKKNI')),
                'short_description' => "Program pelatihan teknis dan sertifikasi kompetensi {$trainingTitle} mencakup {$units} Unit Kompetensi berstandar SKKNI dan regulasi keselamatan konstruksi nasional.",
                'full_description' => "Program {$trainingTitle} membekali tenaga kerja dan profesional konstruksi dengan pemahaman regulasi, standar teknis, penerapan SMKK, serta kecakapan praktis lapangan sesuai {$units} Unit Kompetensi SKKNI untuk menghadapi uji kompetensi dan kebutuhan industri konstruksi nasional.",
                'curriculum' => [
                    "Pemahaman Regulasi, Kode Etik & Standar Kompetensi {$rawTitle}",
                    "Penerapan Sistem Manajemen Keselamatan Konstruksi (SMKK)",
                    "Teknik Pelaksanaan & Pengawasan Sesuai Spesifikasi Teknis",
                    "Penyusunan Berkas Portofolio VATM (Valid, Asli, Terkini, Memadai)",
                    "Simulasi Asesmen Wawancara & Uji Praktik Portofolio"
                ],
                'requirements' => [
                    "Pendidikan formal sesuai kualifikasi {$jenjang}",
                    "Pengalaman kerja di bidang pekerjaan konstruksi terkait",
                    "Portofolio bukti kerja proyek (Laporan Teknis, Gambar, Surat Tugas)",
                    "KTP, NPWP, dan Pasfoto 3x4 latar belakang merah"
                ],
                'certification_body' => 'Penyelenggara Training K3 Konstruksi',
                'duration' => '3 Hari (Pelatihan Teknis, Bimbingan Portofolio & Uji Kompetensi)',
                'units' => $units,
                'icon' => static::getSchemeIcon($category),
                'image' => static::getSchemeImage($category),
                'topic_key' => Str::slug($category),
                'is_featured' => ($no <= 12),
                'sort_order' => $no,
            ];
        }

        return $schemes;
    }

    /**
     * Generate 202 Training Programs Catalog for Client-side / JS Fast Filter per City
     */
    public static function get200ConstructionTopics(): array
    {
        $schemes = static::getMasterSchemes();
        $catalog = [];

        foreach ($schemes as $s) {
            $catalog[] = [
                'id' => $s['no'],
                'no' => $s['no'],
                'title' => $s['title'], // e.g. "Training Pelaksana Pengeboran Air Tanah (Level 4)"
                'raw_title' => $s['raw_title'],
                'slug' => $s['slug'],
                'category' => $s['category'],
                'jenjang' => $s['jenjang'],
                'units' => $s['units'],
                'read_time' => 20 + ($s['no'] % 15),
                'views' => 150 + ($s['no'] * 19) % 850,
            ];
        }

        return $catalog;
    }

    /**
     * Get or Generate rich 6000-9000 word article for a specific region & training topic
     */
    public static function getOrGenerateRegionalArticle(string $provinceName, string $cityName, ?string $programSlug = null, ?string $articleSlug = null): array
    {
        $schemes = static::getMasterSchemes();
        $selectedScheme = $schemes[0] ?? [
            'title' => 'Training Ahli K3 Konstruksi (Keselamatan Konstruksi SMKK)',
            'code' => 'SKK-K3-001',
            'slug' => 'training-ahli-k3-konstruksi',
            'category' => 'Keselamatan Konstruksi (K3)',
            'jenjang' => 'Jenjang 7 (Ahli Muda)',
            'units' => 12
        ];

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
                    $selectedScheme = $schemes[$t['id'] - 1] ?? $selectedScheme;
                    break;
                }
            }
        }

        if ($selectedTopic) {
            // Client requirement: remove BNSP, LPJK, and Permen PUPR No from titles
            $title = "{$selectedTopic['title']} di {$cityName}, Provinsi {$provinceName} | Panduan Teknis Lengkap";
            $slug = Str::slug("{$selectedTopic['title']}-{$cityName}");
        } else {
            $title = "{$selectedScheme['title']} di {$cityName}, Provinsi {$provinceName} | Panduan Teknis Lengkap";
            $slug = Str::slug("{$selectedScheme['slug']}-{$cityName}");
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
            'author' => 'Tim Instruktur Ahli & Litbang Training K3 Konstruksi',
            'published_at' => now()->format('d F Y'),
        ];
    }
}
