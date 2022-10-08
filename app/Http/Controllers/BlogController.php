<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {
        $page = $request->input('page');

        $posts = Post::paginate(12, ['*'], 'page',  $page);

        return view('pages.blog.index', compact('posts'));
    }

    public function show($slug, Request $request) {

        $post = Post::where('slug', '=', $slug)->first();

        if (!$post) {
            abort(404);
        }

        return view('pages.blog.show', compact('post'));
    }
}
