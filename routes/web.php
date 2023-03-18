<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
});


Route::get('/posts', function () {
    return view('posts');
});

Route::get('/posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/htmlContent/posts/{$slug}.html";

    if (!file_exists($path)) {
        // ddd('does not exist'); // dump, die, and debug
        abort(404);
    }

    $post = cache()->remember("posts.{$slug}", 3600, 
        function() use($path) {
            return file_get_contents($path);
        }
    );

    
    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-Za-z0-9_\-]+');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';