<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Web Routes - Front Public
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/tentang-kami', [FrontController::class, 'about'])->name('about');
Route::get('/skema-sertifikasi', [FrontController::class, 'programs'])->name('programs');
Route::get('/skema-sertifikasi/{slug}', [FrontController::class, 'programDetail'])->name('program.detail');
Route::get('/skema-sertifikasi/{programSlug}/wilayah/{provinceSlug}/{citySlug}', [FrontController::class, 'programRegionDetail'])->name('program.region');
Route::get('/skema-sertifikasi/{programSlug}/wilayah/{provinceSlug}/{citySlug}/{articleSlug}', [FrontController::class, 'programArticleDetail'])->name('program.region.article');
Route::get('/wilayah/{provinceSlug}/{citySlug}', [FrontController::class, 'directRegionDetail'])->name('region.direct');

Route::get('/proyek-sertifikasi', [FrontController::class, 'projects'])->name('projects');
Route::get('/artikel-panduan', [FrontController::class, 'articles'])->name('articles');
Route::get('/artikel-panduan/{slug}', [FrontController::class, 'articleDetail'])->name('article.detail');
Route::get('/api/articles-catalog', [FrontController::class, 'apiArticles'])->name('api.articles');

Route::get('/kontak', [FrontController::class, 'contact'])->name('contact');
Route::post('/kontak', [FrontController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');


/*
|--------------------------------------------------------------------------
| Admin Portal Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Settings (Name, Logo, Contact, Maps)
        Route::get('/settings/general', [SettingController::class, 'general'])->name('settings.general');
        Route::post('/settings/general', [SettingController::class, 'updateGeneral'])->name('settings.general.update');

        // Statistics (Editable Hero Counter Numbers)
        Route::resource('statistics', StatisticController::class)->only(['index', 'edit', 'update']);

        // Schemes / Programs
        Route::resource('programs', ProgramController::class)->except(['show']);

        // Projects / Portfolio
        Route::resource('projects', ProjectController::class)->except(['show']);

        // Articles
        Route::resource('articles', ArticleController::class)->except(['show']);

        // Messages
        Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);

        // XML Sitemap Generator
        Route::post('/sitemap/generate', [SitemapController::class, 'generateAdmin'])->name('sitemap.generate');
    });
});
