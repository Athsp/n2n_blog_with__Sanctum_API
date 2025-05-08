<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {
    public function index() {
        return Post::where('status', 'published')->get();
    }

    public function show($id) {
        return Post::where('id', $id)->where('status', 'published')->firstOrFail();
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post) {
        if ($post->user_id !== Auth::id()) return response()->json(['error' => 'Unauthorized'], 403);

        $post->update($request->only(['title', 'content']));
        return response()->json($post);
    }

    public function destroy(Post $post) {
        if ($post->user_id !== Auth::id()) return response()->json(['error' => 'Unauthorized'], 403);

        $post->delete();
        return response()->json(['message' => 'Post deleted']);
    }
}