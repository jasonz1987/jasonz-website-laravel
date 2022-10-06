<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {
        $page = $request->input('page');

        $posts = Post::paginate(1, ['*'], 'page',  $page);

        return view('pages.blog.index', compact('posts'));
    }

    public function show(Request $request) {
        $slug = $request->input('');

        $post = Post::find(1);

        return view('pages.blog.show', compact('post'));
    }
}
