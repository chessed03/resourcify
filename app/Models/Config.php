<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table    = 'configs';

    protected $fillable = [
        'seo_description',
        'seo_keyword',
        'status',
        'created_by'
    ];

    public static function getTagsMetasPrincipal()
    {

        $result = null;

        $query = self::where('status', 1)->first();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

}
