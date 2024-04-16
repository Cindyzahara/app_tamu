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
            'body' => 'required'
        ]);


        Post::create($validateData);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }
}
