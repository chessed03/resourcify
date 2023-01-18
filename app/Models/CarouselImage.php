<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    use HasFactory;

    protected $table    = 'carousel_images';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'status',
        'created_by'
    ];

}
