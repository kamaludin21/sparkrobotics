<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $fillable = [
        'full_name',
        'company',
        'email',
        'phone',
        'message',
        'status',
        'admin_note'
    ];
}
