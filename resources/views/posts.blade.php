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
            <h1>Posts</h1>
            <?php foreach($posts as $post): ?>
            <article>
                {!! $post !!}
            </article>
            <?php endforeach ?>
        </div>
        <footer class="text-center">
            Copyright@2023
        </footer>
    </body>
</html>