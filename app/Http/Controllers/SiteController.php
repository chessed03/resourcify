<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Service;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function site( Request $request)
    {
        $carouselImages = Site::getCarouselImages();

        $services       = Site::getServices();

        $languajes      = Site::getLanguages();

        $frameworks     = Site::getFrameworks();

        $caseStudies    = Site::getCaseStudies();

        return view('site.site', [
            'carouselImages' => $carouselImages,
            'services'       => $services,
            'languages'      => $languajes,
            'frameworks'     => $frameworks,
            'caseStudies'    => $caseStudies
        ]);
    }

    public function caseStudy( Request $request )
    {
        $id         = $request->id;

        $caseStudy  = CaseStudy::getCaseStudyById( $id );

        $languages  = [];

        $frameworks = [];

        foreach ($caseStudy->technology as $key => $item) {

            foreach ( $item['data'] as $koy => $data ) {

                if ( $koy == "languages" ) {
                    $languages = Site::getLanguagesForCaseStudy( $data );
                }

                if ( $koy == "frameworks" ) {
                    $frameworks = Site::getFrameworksForCaseStudy( $data );
                }

            }

        }

        return view('site.case-study', [
            'caseStudy'  => $caseStudy,
            'languages'  => $languages,
            'frameworks' => $frameworks
        ]);
    }

    public function service( Request $request )
    {
        $id      = $request->id;

        $service = Service::getCaseStudyById( $id );
        //dd($service->description);
        return view('site.service', [
            'service' => $service
        ]);

    }

}
