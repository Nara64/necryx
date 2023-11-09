<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Collection extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'type',
        'content',
        'image',
        'players',
        'duration',
        'age',
        'origin',
        'status'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'collections_tags', 'collection_id', 'tag_id');
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'collections_articles', 'article_id', 'collection_id');
    }

}
