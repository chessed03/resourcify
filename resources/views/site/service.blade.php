@extends('site-template.app')
@section('content')

    <div>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="{{ URL::asset("storage/{$service->image}") ?? '' }}" class="rounded-circle" width="70" height="70" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <span class="fs-4">&nbsp;{{ $service->title }}</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">{{ $service->title }}</h1>
                    <p class="col-md-8 fs-4">{{ $service->subtitle }}</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                @if( !empty($service->description) )
                    @foreach( $service->description as $description )
                        <div class="col-md-6">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                {!! $description['data']['content'] !!}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            @livewire('contact-forms')

        </div>
    </div>

@endsection
