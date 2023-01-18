@extends('site-template.app')
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
                @foreach( $services as $service)
                    <div class="col-lg-4">
                        <img src="{{ URL::asset("storage/{$service->image}") ?? '' }}" class="rounded-circle" width="140px" height="140px" role="img" preserveAspectRatio="xMidYMid slice" alt="{{ $service->title }}">
                        <h2>{{ $service->title }}</h2>
                        <p>{{ $service->subtitle }}</p>
                        <p><a href="{{ route('service', ['id' => $service->id]) }}" class="btn btn-secondary">View details</a></p>
                    </div>
                @endforeach
            </div>
            <hr class="featurette-divider">
            <div class="row multiple-items text-center">
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
            <hr class="featurette-divider">
            @foreach( $caseStudies as $key => $case )
                <div class="row featurette">
                    <div class="col-md-7 {{ ( ($key % 2) == 0 ) ? 'order-md-2' : '' }}">
                        <h2 class="featurette-heading">{{ $case->title }}</h2>
                        <p><h4><span class="text-muted"> {{ $case->subtitle }}</span></h4></p>
                        <a href="{{ route('case-study', ['id' => $case->id]) }}" class="btn btn-success">Read more</a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ URL::asset("storage/{$case->image}") }}" class="featurette-image img-fluid mx-auto" width="500px" height="500px" role="img" preserveAspectRatio="xMidYMid slice" alt="{{ $case->title }}">
                    </div>
                </div>
            @endforeach
            <hr class="featurette-divider">
        </div>
    </div>

@endsection
