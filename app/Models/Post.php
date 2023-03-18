<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function all()
    {
        $files = File::files(resource_path('/htmlContent/posts'));
        
        return array_map(function($file) {
            return file_get_contents($file);
        }, $files);
    }

    public static function find(string $slug)
    {
        if (!file_exists($path = resource_path("htmlContent/posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 3600, 
            function() use($path) {
                return file_get_contents($path);
            }
        );
    
    }
}
