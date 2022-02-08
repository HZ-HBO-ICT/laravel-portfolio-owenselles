<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function show($slug)
    {

        $post = Post::where('slug', $slug)->firstOrFail();


    return view('post', [
        'post' => $post
    ]);
    }
}
