<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'active' => 'index',
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'active' => 'contact',
        ]);
    }

    public function services()
    {
        return view('services', [
            'active' => 'services',
        ]);
    }

    public function blog()
    {
        $posts = Post::latest()->paginate(8);
        $blog = Post::latest()->paginate(4);
        $topics = Topic::all();
        return view('post.index', [
            'posts' => $posts,
            'blog' => $blog,
            'topics' => $topics,
            'active' => 'blog',
        ]);
    }

    public function single(Post $post)
    {
        $blog = Post::latest()->paginate(4);
        $topics = Topic::all();
        return view('post.show', [
            'post' => $post,
            'blog' => $blog,
            'topics' => $topics,
        ]);
    }
}
