@extends('site-template.app')
@section('content')

    <div class="container">

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
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

                <article class="blog-post">
                    <h2 class="blog-post-title">Challenge</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                    <p>{{ $caseStudy->challenge }}</p>
                    <hr>
                    <h2>Solution</h2>
                    <p>{{ $caseStudy->solution }}</p>
                    <h3>Tecnhnology</h3>
                    <p></p>
                    <ul>
                        @foreach( $languages as $language)
                            <li>{{ $language->name }}</li>
                        @endforeach
                        @foreach( $frameworks as $framework)
                            <li>{{ $framework->name }}</li>
                        @endforeach
                    </ul>


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
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                </div>
            </div>
        </div>

        @livewire('contact-form')

    </div>

@endsection
