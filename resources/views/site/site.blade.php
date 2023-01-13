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
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            @foreach( $caseStudies as $key => $case )

                <div class="row featurette">
                    <div class="col-md-7 {{ ( ($key % 2) == 0 ) ? 'order-md-2' : '' }}">
                        <h2 class="featurette-heading">{{ $case->name }}<span class="text-muted"> {{ $case->title }}</span></h2>
                        <p class="lead">{{ $case->description }}</p>
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
