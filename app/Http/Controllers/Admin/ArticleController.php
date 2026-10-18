<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(15);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $programs = Program::where('is_active', true)->get();
        return view('admin.articles.create', compact('programs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'program_id' => 'nullable|exists:programs,id',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'author' => 'nullable|string',
            'read_time' => 'nullable|integer',
            'featured_image' => 'nullable|url',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_published'] = $request->has('is_published');

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diterbitkan.');
    }

    public function edit(Article $article)
    {
        $programs = Program::where('is_active', true)->get();
        return view('admin.articles.edit', compact('article', 'programs'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'program_id' => 'nullable|exists:programs,id',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'author' => 'nullable|string',
            'read_time' => 'nullable|integer',
            'featured_image' => 'nullable|url',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_published'] = $request->has('is_published');

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
