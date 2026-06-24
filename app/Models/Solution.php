<?php

// app/Models/Service.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'title',
        'description',
        'images',
        'list_title',
        'list_items',
    ];

    protected $casts = [
        'images' => 'array',
        'list_items' => 'array',
    ];
}
