<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'uID',
        'title',
        'content',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
