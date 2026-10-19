<?php

namespace App\Services;

use App\Models\Program;
use App\Models\Article;
use App\Services\RegionService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SitemapService
{
    /**
     * Generate sitemap.xml and save to public/sitemap.xml
     *
     * @param string|null $baseUrl
     * @return array
     */
    public static function generate(?string $baseUrl = null): array
    {
        if (!$baseUrl) {
            $configUrl = config('app.url');
            if ($configUrl && !str_contains($configUrl, 'localhost') && !str_contains($configUrl, '127.0.0.1')) {
                $baseUrl = rtrim($configUrl, '/');
            } elseif (function_exists('request') && request()->root() && !str_contains(request()->root(), 'localhost') && !str_contains(request()->root(), '127.0.0.1')) {
                $baseUrl = rtrim(request()->root(), '/');
            } else {
                $baseUrl = 'https://trainingk3konstruksi.my.id';
            }
        }
        $baseUrl = rtrim($baseUrl, '/');

        $now = date('Y-m-d');
        $urls = [];

        // 1. Static Core Pages
        $staticPages = [
            ['path' => '/', 'priority' => '1.0', 'changefreq' => 'daily'],
            ['path' => '/tentang-kami', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['path' => '/skema-sertifikasi', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['path' => '/proyek-sertifikasi', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['path' => '/artikel-panduan', 'priority' => '0.9', 'changefreq' => 'daily'],
            ['path' => '/kontak', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        foreach ($staticPages as $page) {
            $urls[] = [
                'loc' => $baseUrl . $page['path'],
                'lastmod' => $now,
                'changefreq' => $page['changefreq'],
                'priority' => $page['priority'],
            ];
        }

        // 2. All Active Certification Programs
        $programs = Program::where('is_active', true)->orderBy('sort_order')->get();
        foreach ($programs as $prog) {
            $urls[] = [
                'loc' => $baseUrl . '/skema-sertifikasi/' . $prog->slug,
                'lastmod' => $prog->updated_at ? $prog->updated_at->format('Y-m-d') : $now,
                'changefreq' => 'weekly',
                'priority' => '0.85',
            ];
        }

        // 3. Articles (Panduan)
        $articles = Article::where('is_published', true)->latest()->get();
        foreach ($articles as $art) {
            $urls[] = [
                'loc' => $baseUrl . '/artikel-panduan/' . $art->slug,
                'lastmod' => $art->updated_at ? $art->updated_at->format('Y-m-d') : $now,
                'changefreq' => 'daily',
                'priority' => '0.8',
            ];
        }

        // 4. Regional Pages
        $provinces = RegionService::getProvinces();
        
        // Priority programs for regional landing pages (featured or top 30)
        $featuredPrograms = Program::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->take(30)
            ->get();

        if ($featuredPrograms->isEmpty()) {
            $featuredPrograms = $programs->take(20);
        }

        foreach ($provinces as $prov) {
            $provSlug = $prov['slug'] ?? Str::slug($prov['name'] ?? '');
            if (!$provSlug) continue;

            $kabkotList = $prov['kabkot'] ?? [];
            foreach ($kabkotList as $kabkot) {
                $citySlug = is_array($kabkot) ? ($kabkot['slug'] ?? Str::slug($kabkot['name'] ?? '')) : Str::slug($kabkot);
                if (!$citySlug) continue;

                // Direct region landing page: /wilayah/{prov}/{city}
                $urls[] = [
                    'loc' => $baseUrl . '/wilayah/' . $provSlug . '/' . $citySlug,
                    'lastmod' => $now,
                    'changefreq' => 'weekly',
                    'priority' => '0.75',
                ];

                // Regional program pages for featured programs
                foreach ($featuredPrograms as $featProg) {
                    $urls[] = [
                        'loc' => $baseUrl . '/skema-sertifikasi/' . $featProg->slug . '/wilayah/' . $provSlug . '/' . $citySlug,
                        'lastmod' => $now,
                        'changefreq' => 'weekly',
                        'priority' => '0.7',
                    ];
                }
            }
        }

        // 5. Build XML Structure
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
        $xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
        $xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

        foreach ($urls as $u) {
            $xml .= "    <url>\n";
            $xml .= "        <loc>" . htmlspecialchars($u['loc'], ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "        <lastmod>{$u['lastmod']}</lastmod>\n";
            $xml .= "        <changefreq>{$u['changefreq']}</changefreq>\n";
            $xml .= "        <priority>{$u['priority']}</priority>\n";
            $xml .= "    </url>\n";
        }

        $xml .= '</urlset>';

        // 6. Save to public/sitemap.xml
        $publicPath = public_path('sitemap.xml');
        File::put($publicPath, $xml);

        return [
            'total_urls' => count($urls),
            'file_path' => $publicPath,
            'file_size' => filesize($publicPath),
            'base_url' => $baseUrl,
        ];
    }
}
