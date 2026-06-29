<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'slug', 'content'];
}
