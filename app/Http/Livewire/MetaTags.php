<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MetaTags extends Component
{

    public $descriptions, $keywords;

    public function mount( $tagMetas )
    {
        $this->descriptions = $tagMetas->seo_description;

        $this->keywords     = $tagMetas->seo_keyword;
    }

    public function render()
    {
        $descriptions = $this->descriptions;

        $keywords     = $this->keywords;

        return view('livewire.meta-tags.meta-tags', [
            'descriptions' => $descriptions,
            'keywords'     => $keywords
        ]);
    }
}
