<?php



namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        return view('cms', compact('posts'));
    }

    public function create()
    {
        return view('posts_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Blog::create($validatedData);

        return redirect()->route('posts.index')
            ->with('success', 'Blog created successfully.');
    }

    public function show(Blog $post)
    {
        return view('posts_show', compact('post'));
    }

    public function edit(Blog $post)
    {
        return view('posts_edit', compact('post'));
    }

    public function update(Request $request, Blog $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.index')
            ->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Blog deleted successfully');
    }
}
