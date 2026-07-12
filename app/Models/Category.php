<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model implements TranslatableContract
{
    use Translatable;
    protected $fillable = ['image'];
    public $translatedAttributes = ['name', 'slug'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function getNameAttribute(): ?string
    {
        return $this->translations
            ->firstWhere('locale', app()->getLocale())
            ?->name;
    }
}
