<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model implements TranslatableContract
{
    use Translatable;

    public $fillable = ['article_category_id', 'image', 'type', 'video_url'];

    public $translatedAttributes = ['title', 'slug', 'content'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    protected $appends = ['embed_video_url'];

    public function getEmbedVideoUrlAttribute()
    {
        if (!$this->video_url) {
            return null;
        }

        // support youtube.com & youtu.be
        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^\s&]+)/', $this->video_url, $matches);
        $videoId = $matches[1] ?? null;

        if (!$videoId) {
            return null;
        }

        return "https://www.youtube.com/embed/{$videoId}";
    }
}
