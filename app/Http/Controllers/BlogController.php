<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Blog::create($validated);

        // return redirect()->route('blogs.index')->with('success', 'Blog has been created successfully!');
    }

    public function edit(Blog $blog)
    {
        // return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $blog->update($validated);

        // return redirect()->route('blogs.index')->with('success', 'Blog has been updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        // return redirect()->route('blogs.index')->with('success', 'Blog has been deleted successfully!');
    }
}
