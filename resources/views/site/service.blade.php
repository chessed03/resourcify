@extends('site-template.app')
@section('content')

    <div class="container">

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">

                <h1 class="display-4 fst-italic">###</h1>
                <p class="lead my-3">#</p>

            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    #
                </h3>

                <article class="blog-post">
                    <h2 class="blog-post-title">Challenge</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>


                </article>

            </div>


        </div>

        @livewire('contact-forms')

    </div>

@endsection
