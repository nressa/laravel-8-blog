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

    /**
     * It is called when an object is instantiated.
     *
     * @param string $title
     * @param string $date
     * @param string $excerpt
     * @param string $body
     * @param string $slug
     */
    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title   = $title;
        $this->excerpt = $excerpt;
        $this->date    = $date;
        $this->body    = $body;
        $this->slug    = $slug;
    }


    /**
     * Returning a collection of all the posts.
     *
     * @return object
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

    /** 
     * Returning the first post that matches the slug. 
     * 
     * @param mixed $slug
     * @return object|null
     */
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    
    }

    /**
     * Finding the post by the slug if none match throw exception.
     *
     * @param mixed $slug
     * @throws ModelNotFoundException
     * @return object
     */
    public static function findOrFail($slug) : object
    {
        $post = static::find($slug);

        if (!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }
}