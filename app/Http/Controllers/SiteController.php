<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function site( Request $request)
    {
        $carouselImages = Site::getCarouselImages();

        $caseStudies    = Site::getCaseStudies();

        $languajes      = Site::getLanguages();

        return view('site.site', [
            'carouselImages' => $carouselImages,
            'caseStudies'    => $caseStudies,
            'languages'      => $languajes
        ]);
    }

}