<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = ['images'];
    public $translatedAttributes = ['title', 'slug', 'content'];

    protected $casts = [
        'images' => 'array',
    ];
}
