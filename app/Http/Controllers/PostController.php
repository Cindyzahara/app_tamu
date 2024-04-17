<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.Posts', [
            "posts" => Post::latest()->filter(request(['search']))->paginate(6)
        ]);
    }
    public function create()
    {
        return view('dashboard.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validateData);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard')->with('success', 'New post has been deleted!');
    }

    public function edit(Post $post)
    {
        return view('dashboard.edit', [
            'posts' => $post
        ]);
    }
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        $validateData = $request->validate($rules);
        Post::where('id', $post->id)
        ->update($validateData);

        return redirect('/dashboard')->with('success', 'Post has been update!');
    }
}
