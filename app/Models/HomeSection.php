<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job_title',
        'description',
        'image',
        'cv',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
