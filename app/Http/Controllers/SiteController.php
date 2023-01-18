<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function site( Request $request)
    {

        $tagMetas       = Site::getTagMetas();

        $carouselImages = Site::getCarouselImages();

        $services       = Site::getServices();

        $languajes      = Site::getLanguages();

        $frameworks     = Site::getFrameworks();

        $caseStudies    = Site::getCaseStudies();

        $clients        = Site::getClients();

        return view('site.site', [
            'descriptions'   => $tagMetas->seo_description,
            'keywords'       => $tagMetas->seo_keyword,
            'carouselImages' => $carouselImages,
            'services'       => $services,
            'languages'      => $languajes,
            'frameworks'     => $frameworks,
            'caseStudies'    => $caseStudies,
            'clients'        => $clients
        ]);
    }

    public function caseStudy( Request $request )
    {
        $id         = $request->id;

        $caseStudy  = Site::getCaseStudyById( $id );

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
            'caseStudy'    => $caseStudy,
            'descriptions' => $caseStudy->seo_description,
            'keywords'     => $caseStudy->seo_keyword,
            'languages'    => $languages,
            'frameworks'   => $frameworks
        ]);
    }

    public function service( Request $request )
    {
        $id      = $request->id;

        $service = Site::getServiceById( $id );

        return view('site.service', [
            'service'      => $service,
            'descriptions' => $service->seo_description,
            'keywords'     => $service->seo_keyword
        ]);

    }

}
