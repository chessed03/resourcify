<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function site( Request $request)
    {

        $tagMetas       = Site::getTagMetas();
        //dd($tagsMetas->seo_description);
        $carouselImages = Site::getCarouselImages();

        $services       = Site::getServices();

        $languajes      = Site::getLanguages();

        $frameworks     = Site::getFrameworks();

        $caseStudies    = Site::getCaseStudies();

        return view('site.site', [
            'tagMetas'       => $tagMetas,
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

        $tagMetas = (object)[
            'seo_description' => $caseStudy->seo_description,
            'seo_keyword'     => $caseStudy->seo_keyword
        ];

        return view('site.case-study', [
            'caseStudy'  => $caseStudy,
            'tagMetas'   => $tagMetas,
            'languages'  => $languages,
            'frameworks' => $frameworks
        ]);
    }

    public function service( Request $request )
    {
        $id      = $request->id;

        $service = Site::getServiceById( $id );

        $tagMetas = (object)[
            'seo_description' => $service->seo_description,
            'seo_keyword'     => $service->seo_keyword
        ];

        return view('site.service', [
            'service'  => $service,
            'tagMetas' => $tagMetas
        ]);

    }

}
