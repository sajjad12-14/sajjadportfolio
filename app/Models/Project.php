<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'video',
        'technologies',
        'features',
        'github_url',
        'demo_url',
        'status',
        'show_on_home',
    ];

    protected $casts = [
        'status' => 'boolean',
        'show_on_home' => 'boolean',
    ];
}
