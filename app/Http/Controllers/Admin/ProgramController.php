<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::orderBy('sort_order')->paginate(15);
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'nullable|string|max:50',
            'category' => 'required|string',
            'jenjang' => 'required|string',
            'badge' => 'nullable|string|max:50',
            'short_description' => 'required|string',
            'full_description' => 'required|string',
            'certification_body' => 'nullable|string',
            'duration' => 'nullable|string',
            'icon' => 'nullable|string',
            'image' => 'nullable|url',
            'sort_order' => 'required|integer',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        Program::create($validated);

        return redirect()->route('admin.programs.index')->with('success', 'Skema sertifikasi berhasil ditambahkan.');
    }

    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'nullable|string|max:50',
            'category' => 'required|string',
            'jenjang' => 'required|string',
            'badge' => 'nullable|string|max:50',
            'short_description' => 'required|string',
            'full_description' => 'required|string',
            'certification_body' => 'nullable|string',
            'duration' => 'nullable|string',
            'icon' => 'nullable|string',
            'image' => 'nullable|url',
            'sort_order' => 'required|integer',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        $program->update($validated);

        return redirect()->route('admin.programs.index')->with('success', 'Skema sertifikasi berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.programs.index')->with('success', 'Skema sertifikasi berhasil dihapus.');
    }
}
