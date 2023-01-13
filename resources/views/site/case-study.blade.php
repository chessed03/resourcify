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

        <div class="row mb-2 mt-4">
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">

                        <div class="py-5 text-center">
                            <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                            <h2>Contact form</h2>
                            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                        </div>

                        <div class="row g-5">

                            <div class="col-md-12 col-lg-12">
                                <h4 class="mb-3">Billing address</h4>
                                <form class="needs-validation" novalidate>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="lastName" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                            <div class="invalid-feedback">
                                                Please enter a valid email address for shipping updates.
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone" placeholder="1234" required>
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="address2" class="form-label">Company <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                        </div>

                                        <div class="col-12">
                                            <label for="phone" class="form-label">Mesasage</label>
                                            <textarea type="text" class="form-control" placeholder="Message" required></textarea>
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                    </div>

                                    <button class="w-100 btn btn-primary btn-lg mt-4" type="submit">Send</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection
