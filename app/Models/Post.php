<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{

    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    /* A constructor. It is called when an object is instantiated. */
    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title   = $title;
        $this->excerpt = $excerpt;
        $this->date    = $date;
        $this->body    = $body;
        $this->slug    = $slug;
    }


    /* Returning a collection of all the posts.
     *
     * @return collection
     */
    public static function all() : object
    {
        return cache()->rememberForever('posts.all', function() {
            return collect(File::files(resource_path('/htmlContent/posts')))
            ->map(function($file) {
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function ($document) {
                return new Post(
                        $document->title,
                        $document->date,
                        $document->excerpt,
                        $document->body(),
                        $document->slug
                );
            })
            ->sortByDesc('date');
        });
    }

    public static function find(string $slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    
    }
}
