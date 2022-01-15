<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'map',
        'gameseconds',
        'type',
        'bundleid'
    ];
}
