<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   use HasFactory;
    //use Sluggable, SluggableScopeHelpers;

    protected $table = 'blog';

    protected $fillable = [
        'title',
        'author',
        'blog_post_image',
        'blog_post_video',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at'
    ];
}
