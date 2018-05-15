<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create(Request $request, Post $post)
    {
        $createdPost = $request->user()->posts()->create([
            'body' => $request->body
        ]);
        return response()->json($post->with('user')->find($createdPost->id));
    }
}
