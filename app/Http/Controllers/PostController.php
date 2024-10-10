<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request) {
        request()->validate([
            'content' => 'required|min:5|max:300',
        ]);

        Post::create([
            'content' => request()->get('content', 'error'),
            'likes' => 0,
        ]);

        return redirect()->route('dashboard.index')->with('success', "Post was successfully created.");
    }

    public function destroy($id) {
        $post = Post::where('id', $id)->first();
        $post->delete();

        return redirect()->route('dashboard.index')->with('success', 'Post was successfully deleted.');
    }

    /*public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('dashboard.index')->with('success', 'Post was successfully deleted.');
    }*/
}
