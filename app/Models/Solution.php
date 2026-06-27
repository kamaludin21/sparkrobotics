<?php

// app/Models/Service.php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model implements TranslatableContract
{
    use Translatable;
    protected $fillable = [
        'images',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'list_title',
        'list_items',
    ];

    protected $casts = [
        'images' => 'array',
        'list_items' => 'array',
    ];
}
