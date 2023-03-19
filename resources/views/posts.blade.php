<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/blog.css">
        <title>Blog</title>
    </head>
    <body>
        <div class="body">
            <h1 class="text-center">Posts</h1>
            @foreach ($posts as $post)
            <article class="{{ $loop->even ? 'bg-active' : '' }}">
                <h2>
                    <a href="/posts/{{ $post->slug }}">
                        {!! $post->title !!}
                    </a>
                </h2>
                {{ $post->excerpt }}
            </article>
            @endforeach
        </div>
        <footer class="text-center">
            Copyright@2023
        </footer>
    </body>
</html>