<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <meta name="generator" content="Hugo 0.84.0">
    <title>Rosourcify</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('site-template/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site-template/dist/js/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('site-template/dist/site/carousel.css') }}" rel="stylesheet">

    <!-- fontaesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles

</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('site-index') }}">SISADESEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('site-index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#site-services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#site-technologies">Technologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#site-study-cases">Study cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#site-clients">Clients</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main>

    @yield('content')

    <!-- FOOTER -->
    <footer class="container mt-4">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</main>

    <script src="{{ asset('site-template/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site-template/dist/js/jquery-toast/jquery.toast.min.js') }}"></script>

    <script>
            $('.multiple-items').slick({
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 5,
            slidesToScroll: 2,
            responsive: [{
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
        },
        {
            breakpoint: 600,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
        },
        {
            breakpoint: 480,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
        }
        }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });
    </script>

    @livewireScripts

    <script type="text/javascript">
        window.livewire.on('message', (heading, text, icon) => {

            $.toast({
                heading: heading,
                text: text,
                icon: icon,
                loader: true,
                showHideTransition: 'fade',
                position: 'top-right'
            });
        });
    </script>

</body>
</html>
