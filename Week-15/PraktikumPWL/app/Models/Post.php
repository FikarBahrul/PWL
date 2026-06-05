<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Tag;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'color',
        'image',
        'body',
        'tags',
        'published',
        'published_at',
    ];

    protected $casts = [
        // tags cast removed (using relation)
        'published' => 'boolean',
        'published_at' => 'date',
    ];

    protected static function booted(): void
    {
        static::saving(function (Post $post) {
            if (blank($post->slug) && filled($post->title)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
