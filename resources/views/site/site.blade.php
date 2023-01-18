@extends('site-template.app')
@section('meta')
    @include('components.meta-tags')
@endsection()
@section('content')

    <div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach( $carouselImages as $key => $slider )
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}" class="{{ ( $key == 0 ) ? 'active' : '' }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach( $carouselImages as $key => $slider )
                    <div class="carousel-item {{ ( $key == 0 ) ? 'active' : '' }}">
                        <img src="{{ URL::asset("storage/{$slider->image}") }}" width="100%" height="100%" role="img" preserveAspectRatio="xMidYMid slice" alt="{{ $slider->name }}">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container marketing">
            <div class="row">
                <h2 class="text-muted" id="site-services">Services</h2>
                @foreach( $services as $service)
                    <div class="col-lg-4">
                        <img src="{{ URL::asset("storage/{$service->image}") ?? '' }}" class="rounded-circle" width="140px" height="140px" role="img" preserveAspectRatio="xMidYMid slice" alt="{{ $service->title }}">
                        <h2>{{ $service->title }}</h2>
                        <p>{{ $service->subtitle }}</p>
                        <p><a href="{{ route('service', ['id' => $service->id . '-' . $service->slug]) }}" class="btn btn-secondary">View details</a></p>
                    </div>
                @endforeach
            </div>
            <h2 class="text-muted mt-5" id="site-technologies">Technologies</h2>
            <div class="row multiple-items text-center py-5">
                @foreach( $languages as $language )
                    <div class="card border-white text-white bg-white">
                        <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$language->image_logo}") ?? '' }}" width="70px" height="70px" role="img" alt="{{ $language->name }}">
                        <div class="card-body">
                            <h6 class="card-title text-muted">{{ $language->name }}</h6>
                        </div>
                    </div>
                @endforeach
                @foreach( $frameworks as $framework )
                    <div class="card border-white text-white bg-white">
                        <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$framework->image_logo}") ?? '' }}" width="70px" height="70px" role="img" alt="{{ $framework->name }}">
                        <div class="card-body">
                            <h6 class="card-title text-muted">{{ $framework->name }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
            <h2 class="text-muted border-bottom mt-5" id="site-study-cases">Study cases</h2>
            <br>
            @foreach( $caseStudies as $key => $case )
                <div class="row featurette">
                    <div class="col-md-7 {{ ( ($key % 2) == 0 ) ? 'order-md-2' : '' }}">
                        <h2 class="featurette-heading">{{ $case->title }}</h2>
                        <p><h4><span class="text-muted"> {{ $case->subtitle }}</span></h4></p>
                        <a href="{{ route('case-study', ['id' => $case->id . '-' . $case->slug]) }}" class="btn btn-success">Read more</a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ URL::asset("storage/{$case->image}") }}" class="featurette-image img-fluid mx-auto" width="500px" height="500px" role="img" preserveAspectRatio="xMidYMid slice" alt="{{ $case->title }}">
                    </div>
                </div>
            @endforeach

            <h2 class="pb-2 border-bottom mt-5" id="site-clients">Clients</h2>
            <div class="row multiple-items text-center py-5">
                @foreach( $clients as $client )
                    <div class="card border-white text-white bg-white">
                        <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$client->image_logo}") ?? '' }}" width="70px" height="70px" role="img" alt="{{ $language->name }}">
                        <div class="card-body">
                            <h6 class="card-title text-muted">{{ $client->name }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>

            <h2 class="pb-2 border-bottom" id="site-work">How we work?</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </div>
                    <h2>We Understand</h2>
                    <p>We start by signing a PSA and understanding your business requirements.</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </div>
                    <h2>We Provide</h2>
                    <p>Depending on how you choose to work with us, we either build your product end-to-end or provide skilled experts who can.</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                    </div>
                    <h2>You Build</h2>
                    <p>With our services/experts at your disposal, we help you build your digital product exactly how you envisioned it.</p>
                </div>
                <div class="feature col">
                    <div class="feature-icon bg-primary bg-gradient">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                    </div>
                    <h2>You Expand</h2>
                    <p>You expand your team and take on more projects while we do the heavy lifting.</p>
                </div>
            </div>

            <h2 class="pb-2 border-bottom" id="site-payments">Payments</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <img src="{{ asset('site-template/dist/img/paypal.png') }}" width="95px" height="95px">
                </div>
                <div class="feature col">
                    <img src="{{ asset('site-template/dist/img/wise.png') }}" width="205px" height="95px">
                </div>
            </div>
        </div>
    </div>

@endsection
