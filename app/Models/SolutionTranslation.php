<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolutionTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'list_title',
        'list_items',
    ];

    protected $casts = [
        'list_items' => 'array',
    ];
}
