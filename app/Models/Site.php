<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

        $query = CaseStudy::where('status', 1)->get();

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

    public static function getLanguagesForCaseStudy( $languages )
    {

        $result = null;

        $query = Language::select(
            DB::raw('
                    id,
                    name,
                    image_logo
                ')
            )
            ->whereIn('id', $languages)->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

    public static function getFrameworksForCaseStudy( $frameworks )
    {

        $result = null;

        $query = Framework::select(
                DB::raw('
                    id,
                    name,
                    image_logo
                ')
            )
            ->whereIn('id', $frameworks)->get();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }


}
