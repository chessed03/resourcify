@extends('site-template.app')
@section('meta')
    @include('components.meta-tags')
@endsection()
@section('content')

    <div class="container">

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark" style="background-image: url({{ asset('site-template/dist/img/banner-industry-tech.jpg') }}); height: 30vh">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">{{ $caseStudy->title }}</h1>
                <p class="lead my-3">{{ $caseStudy->subtitle }}</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    {{ $caseStudy->subtitle }}
                </h3>
                <p class="blog-post-meta">{{ \Carbon\Carbon::createFromDate($caseStudy->created_at)->isoFormat('LLLL') }}</p>
                <article class="blog-post">
                    <h2 class="blog-post-title">Challenge</h2>
                    <p align="justify">{{ $caseStudy->challenge }}</p>
                    <hr>
                    <h2>Solution</h2>
                    <p align="justify">{{ $caseStudy->solution }}</p>
                    <h3>Tecnhnology</h3>
                    <p></p>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach( $languages as $language)
                                <div class="card border-white text-white bg-white">
                                    <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$language->image_logo}") ?? '' }}" width="70px" height="70px" role="img" alt="{{ $language->name }}">
                                    <div class="card-body text-center">
                                        <h6 class="card-title text-muted">{{ $language->name }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach( $frameworks as $framework)
                                <div class="card border-white text-white bg-white">
                                    <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$framework->image_logo}") ?? '' }}" width="70px" height="70px" role="img" alt="{{ $framework->name }}">
                                    <div class="card-body text-center">
                                        <h6 class="card-title text-muted">{{ $framework->name }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        @if(!empty($caseStudy->images[0]))
                            <img src="{{ URL::asset("storage/{$caseStudy->images[0]}") ?? '' }}" width="100%" height="100%">
                            <hr>
                        @endif
                        @if( !empty($caseStudy->images[1]) )
                            <img src="{{ URL::asset("storage/{$caseStudy->images[1]}") ?? '' }}" width="100%" height="100%">
                            <hr>
                        @endif
                        @if( !empty($caseStudy->images[2]) )
                            <img src="{{ URL::asset("storage/{$caseStudy->images[2]}") ?? '' }}" width="100%" height="100%">
                            <hr>
                        @endif
                    </div>

                </div>
            </div>
        </div>

        @livewire('contact-forms')

    </div>

@endsection
