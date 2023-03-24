<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    return view('posts', [
        // Lesser DB response time
        'posts' => Post::with(['category'])->get()

        // Higher DB response time
        // 'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) { 

    return view('post', [
        'post' => $post
    ]);

});

Route::get('/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});