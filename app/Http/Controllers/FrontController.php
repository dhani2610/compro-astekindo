<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Project;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\ContactMessage;
use App\Services\RegionService;
use App\Services\AstekindoSchemeService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    /**
     * Homepage
     */
    public function index()
    {
        $slides = HeroSlide::where('is_active', true)->orderBy('sort_order')->get();
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order')->get();
        $programs = Program::where('is_active', true)->orderBy('sort_order')->take(6)->get();
        $allPrograms = Program::where('is_active', true)->orderBy('sort_order')->get();
        $projects = Project::where('is_featured', true)->orderBy('sort_order')->take(6)->get();
        $clients = Client::where('is_active', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order')->get();
        $latestArticles = Article::where('is_published', true)->latest()->take(3)->get();
        $provinces = RegionService::getProvinces();

        return view('front.index', compact(
            'slides',
            'statistics',
            'programs',
            'allPrograms',
            'projects',
            'clients',
            'testimonials',
            'latestArticles',
            'provinces'
        ));
    }

    /**
     * About Us (Visi, Misi, Sejarah, Legalitas Lisensi BNSP & LPJK)
     */
    public function about()
    {
        $statistics = Statistic::where('is_active', true)->orderBy('sort_order')->get();
        $clients = Client::where('is_active', true)->orderBy('sort_order')->get();
        return view('front.about', compact('statistics', 'clients'));
    }

    /**
     * List of Certification Schemes
     */
    public function programs(Request $request)
    {
        $query = Program::where('is_active', true);
        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }
        $programs = $query->orderBy('sort_order')->get();
        $categories = Program::select('category')->distinct()->pluck('category');

        return view('front.programs', compact('programs', 'categories'));
    }

    /**
     * Program Detail -> Lists Indonesian Regions for this scheme
     */
    public function programDetail($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $provinces = RegionService::getProvinces();
        $otherPrograms = Program::where('is_active', true)->where('id', '!=', $program->id)->take(4)->get();

        return view('front.program-detail', compact('program', 'provinces', 'otherPrograms'));
    }

    /**
     * Program Region Detail (e.g. Program in Kota Banda Aceh)
     */
    public function programRegionDetail($programSlug, $provinceSlug, $citySlug)
    {
        $program = Program::where('slug', $programSlug)->first() 
            ?: Program::where('is_active', true)->orderBy('sort_order')->first();
        abort_unless($program, 404);

        $province = RegionService::findProvinceBySlug($provinceSlug);
        abort_unless($province, 404);

        $kabkot = RegionService::findKabkotBySlug($provinceSlug, $citySlug);
        abort_unless($kabkot, 404);

        $cityName = $kabkot['name'];
        $provinceName = $province['name'];

        // Get 200 specific regional topics for this program and region
        $articles = [];
        $topics = AstekindoSchemeService::get200ConstructionTopics();

        foreach ($topics as $t) {
            $articles[] = [
                'id' => $t['id'],
                'title' => "{$t['title']} di {$cityName}, {$provinceName}",
                'slug' => Str::slug("{$t['title']}-{$cityName}"),
                'category' => $t['category'],
                'read_time' => $t['read_time'] . ' Menit Baca',
                'views' => $t['views'],
                'excerpt' => "Panduan implementasi teknis {$t['title']} khusus wilayah {$cityName}, Provinsi {$provinceName} berstandar SKKNI dan regulasi keselamatan konstruksi nasional.",
            ];
        }

        $sampleKecamatan = RegionService::getSampleKecamatan($cityName);

        return view('front.program-region-detail', compact(
            'program',
            'province',
            'kabkot',
            'cityName',
            'provinceName',
            'articles',
            'sampleKecamatan'
        ));
    }

    /**
     * Direct Region Detail without specifying program in URL
     */
    public function directRegionDetail($provinceSlug, $citySlug)
    {
        $program = Program::where('is_active', true)->orderBy('sort_order')->first();
        return $this->programRegionDetail($program ? $program->slug : 'training', $provinceSlug, $citySlug);
    }

    /**
     * Read Full Article in Region (6000-9000 words)
     */
    public function programArticleDetail($programSlug, $provinceSlug, $citySlug, $articleSlug)
    {
        $program = Program::where('slug', $programSlug)->first() 
            ?: Program::where('is_active', true)->orderBy('sort_order')->first();
        abort_unless($program, 404);

        $province = RegionService::findProvinceBySlug($provinceSlug);
        abort_unless($province, 404);

        $kabkot = RegionService::findKabkotBySlug($provinceSlug, $citySlug);
        abort_unless($kabkot, 404);

        $cityName = $kabkot['name'];
        $provinceName = $province['name'];

        $articleData = AstekindoSchemeService::getOrGenerateRegionalArticle($provinceName, $cityName, $programSlug, $articleSlug);
        $sampleKecamatan = RegionService::getSampleKecamatan($cityName);
        $relatedTopics = array_slice(AstekindoSchemeService::get200ConstructionTopics(), 10, 5);

        return view('front.program-article-detail', compact(
            'program',
            'province',
            'kabkot',
            'cityName',
            'provinceName',
            'articleData',
            'sampleKecamatan',
            'relatedTopics'
        ));
    }

    /**
     * Articles & Technical Guidelines Catalog (200 Articles with client-side JS filter)
     */
    public function articles(Request $request)
    {
        $topics = AstekindoSchemeService::get200ConstructionTopics();
        $categories = ['Semua Kategori', 'Gedung & Sipil', 'Jalan & Jembatan', 'K3 Konstruksi', 'Manajemen Proyek'];
        $provinces = RegionService::getProvinces();

        return view('front.articles', compact('topics', 'categories', 'provinces'));
    }

    /**
     * Standalone Article Detail
     */
    public function articleDetail($slug)
    {
        $article = Article::where('slug', $slug)->first();
        if (!$article) {
            // Generate on the fly
            $topics = AstekindoSchemeService::get200ConstructionTopics();
            $topic = $topics[0];
            foreach ($topics as $t) {
                if ($t['slug'] === $slug) {
                    $topic = $t;
                    break;
                }
            }
            $articleData = AstekindoSchemeService::getOrGenerateRegionalArticle('DKI Jakarta', 'Kota Jakarta Pusat');
            $articleData['title'] = $topic['title'];
            $articleData['slug'] = $slug;
            $article = (object) $articleData;
        }

        $latestArticles = Article::latest()->take(5)->get();

        return view('front.article-detail', compact('article', 'latestArticles'));
    }

    /**
     * Our Projects Showcase
     */
    public function projects()
    {
        $projects = Project::orderBy('sort_order')->get();
        return view('front.projects', compact('projects'));
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * Contact Form Submission
     */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:3000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Pesan Anda telah berhasil dikirimkan ke Sekretariat LSP ASTEKINDO. Tim kami akan segera menghubungi Anda melalui WhatsApp / Email.');
    }

    /**
     * Lightweight JSON API for 200 Articles for fast JS filter
     */
    public function apiArticles()
    {
        return response()->json(AstekindoSchemeService::get200ConstructionTopics());
    }
}
