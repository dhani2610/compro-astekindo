<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Article;
use App\Models\Project;
use App\Models\ContactMessage;
use App\Models\Statistic;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPrograms = Program::count();
        $totalArticles = Article::count();
        $totalProjects = Project::count();
        $totalMessages = ContactMessage::count();
        $unreadMessages = ContactMessage::where('is_read', false)->count();
        $recentMessages = ContactMessage::latest()->take(5)->get();
        $recentArticles = Article::latest()->take(5)->get();
        $statistics = Statistic::orderBy('sort_order')->get();

        return view('admin.dashboard', compact(
            'totalPrograms',
            'totalArticles',
            'totalProjects',
            'totalMessages',
            'unreadMessages',
            'recentMessages',
            'recentArticles',
            'statistics'
        ));
    }
}
