<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $table    = 'case_studies';

    protected $casts    = [
        'technology' => 'json',
        'images'     => 'json'
    ];

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'challenge',
        'solution',
        'technology',
        'image',
        'images',
        'status',
        'created_by'
    ];

    public static function selectItemsLanguages()
    {
        return Language::where('status', 1)->get()->pluck('name', 'id');
    }

    public static function selectItemsFrameworks()
    {
        return Framework::where('status', 1)->get()->pluck('name', 'id');
    }

    public static function getCaseStudyById( $id )
    {
        return self::where('id', $id)->first();
    }

}
