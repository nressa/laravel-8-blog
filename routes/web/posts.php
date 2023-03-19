<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/posts', function () {
    return redirect('/');
});

Route::get('/posts/{post}', function ($id) { 

    return view('post', [
        'post' => Post::findOrFail($id)
    ]);

});