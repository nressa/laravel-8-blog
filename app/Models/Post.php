<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    /**
     * The fields should not be mass assigned. 
     *
     * @return array
     *  
     */
    protected $guarded = [
        'id'
    ];

    /** 
     * The fields should be mass assigned. 
     * 
     * @return array
    */
    protected $fillable = [
        'title',
        'excerpt',
        'body'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
