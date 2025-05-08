<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function allPosts() {
        return Post::all();
    }

    public function updatePostStatus($id, Request $request) {
        $post = Post::findOrFail($id);
        $post->status = $request->status;
        $post->save();
        return response()->json(['message' => 'Status updated']);
    }

    public function allUsers() {
        return User::all();
    }

    public function updateUserStatus($id, Request $request) {
        $user = User::findOrFail($id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['message' => 'User status updated']);
    }
}