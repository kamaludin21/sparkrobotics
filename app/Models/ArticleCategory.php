<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleCategory extends Model
{
    protected $fillable = ['title', 'slug'];

    public function article(): HasMany
    {
        return $this->hasMany(Article::class, 'article_category_id');
    }
}
