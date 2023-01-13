<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseEstudy extends Model
{
    use HasFactory;

    protected $table    = 'case_estudies';

    protected $casts    = [
        'images'  => 'json'
    ];

    protected $fillable = [
        'name',
        'title',
        'description',
        'challenge',
        'solution',
        'technology',
        'content',
        'image',
        'images',
        'status',
        'created_by'
    ];

}
