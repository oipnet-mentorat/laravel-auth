<?php

namespace App\Http\Controllers;

use App\Events\PostUpdated;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function like(Post $post) {
        $post->usersLike()->attach(Auth::user());

        return redirect()->route('post.show', $post);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        Post::create(array_merge($request->all(), ['user_id' => Auth::user()->id]));

        return redirect('home');
    }

    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());

        event(new PostUpdated($post));

        return redirect()->route('post.show', $post);
    }
}
