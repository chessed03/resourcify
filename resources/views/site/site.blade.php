@extends('site-template.app')
@section('content')

    <div>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                @foreach( $carouselImages as $key => $slider )
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}" class="{{ ( $key == 0 ) ? 'active' : '' }}" aria-label="{{ $slider->name }}"></button>
                @endforeach

            </div>
            <div class="carousel-inner">

                @foreach( $carouselImages as $key => $slider )

                    <div class="carousel-item {{ ( $key == 0 ) ? 'active' : '' }}">

                        <img src="{{ URL::asset("storage/{$slider->image}") }}" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" focusable="false">

                        <div class="container">
                            <div class="carousel-caption {{ ( $key == 0 ) ? 'text-start' : '' }}">
                                <h1>{{ $slider->name }}</h1>
                                <p>{{ $slider->name }} and the descrition</p>
                                <p><a class="btn btn-lg btn-primary" href="#">{{ $slider->name }}</a></p>
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

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">

                @foreach( $services as $service)

                    <div class="col-lg-4">

                        <img src="{{ URL::asset("storage/{$service->image}") ?? '' }}" class="rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

                        <h2>{{ $service->title }}</h2>
                        <p>{{ $service->subtitle }}</p>
                        <p><a href="{{ route('service', ['id' => $service->id]) }}" class="btn btn-secondary">View details</a></p>

                    </div><!-- /.col-lg-4 -->

                @endforeach

            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row multiple-items text-center">
                @foreach( $languages as $language )
                    <div class="card border-white text-white bg-white">
                        <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$language->image_logo}") ?? '' }}" width="70px" height="70px" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title text-muted">{{ $language->name }}</h6>
                        </div>
                    </div>
                @endforeach
                @foreach( $frameworks as $framework )
                    <div class="card border-white text-white bg-white">
                        <img class="mx-auto d-block text-muted" src="{{ URL::asset("storage/{$framework->image_logo}") ?? '' }}" width="70px" height="70px" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title text-muted">{{ $framework->name }}</h6>
                        </div>
                    </div>
                @endforeach
                {{--<div>
                    <i class="fab fa-5x fa-html5"></i>
                    <br>
                    HTML5
                </div>
                <div>
                    <i class="fab fa-5x fa-css3-alt"></i>
                    <br>
                    CSS3
                </div>
                <div>
                    <i class="fab fa-5x fa-python"></i>
                    <br>
                    Python
                </div>
                <div>
                    <i class="fab fa-5x fa-wordpress"></i>
                    <br>
                    wordpress
                </div>
                <div>
                    <i class="fab fa-5x fa-bootstrap"></i>
                    <br>
                    Boostrap
                </div>
                <div>
                    <i class="fab fa-5x fa-angular"></i>
                    <br>
                    Angular
                </div>
                <div>
                    <i class="fab fa-5x fa-php"></i>
                    <br>
                    PHP
                </div>
                <div>
                    <i class="fab fa-5x fa-laravel"></i>
                    <br>
                    Laravel
                </div>
                <div>
                    <i class="fab fa-5x fa-react"></i>
                    <br>
                    Laravel
                </div>
                <div>
                    <i class="fab fa-5x fa-vuejs"></i>
                    <br>
                    Laravel
                </div>--}}
            </div>

            <hr class="featurette-divider">

            @foreach( $caseStudies as $key => $case )

                <div class="row featurette">
                    <div class="col-md-7 {{ ( ($key % 2) == 0 ) ? 'order-md-2' : '' }}">
                        <h2 class="featurette-heading">{{ $case->title }}<span class="text-muted"> {{ $case->subtitle }}</span></h2>
                        <p class="lead">{{ $case->challenge }}</p>

                        <a href="{{ route('case-study', ['id' => $case->id]) }}" class="btn btn-success">Read more</a>
                    </div>
                    <div class="col-md-5">

                        <img src="{{ URL::asset("storage/{$case->image}") }}" class="featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

                    </div>


                </div>

            @endforeach

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


    </div>

@endsection
