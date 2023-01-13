<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public static function getCarouselImages()
    {
        $result = null;

        $query = CarouselImage::where('status', 1)->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

    public static function getCaseStudies()
    {
        $result = null;

        $query = CaseEstudy::where('status', 1)->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

    public static function getLanguages()
    {
        $result = null;

        $query = Language::where('status', 1)->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;
    }


}
