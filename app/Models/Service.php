<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table    = 'services';

    protected $casts    = [
        'description' => 'json'
    ];

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'description',
        'image',
        'status',
        'created_by'
    ];

    public static function getCaseStudyById( $id )
    {
        return self::where('id', $id)->first();
    }

}
