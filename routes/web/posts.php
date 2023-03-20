<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::with(['category'])->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) { 

    return view('post', [
        'post' => $post
    ]);

});