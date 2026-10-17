<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'percentage',
        'description',
        'status',
    ];

    protected $casts = [
        'percentage' => 'integer',
        'status' => 'boolean',
    ];
}

