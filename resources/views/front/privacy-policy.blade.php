@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('privacy-policy.css') }}">

    <!-- Stylesheet -->

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
            </div>
        </div>
    </section>
    <!-- Universal Banner End Here -->

    <!-- Privacy Sec Start Here -->
    <section class="privacy_policy">
        <div class="container">
        {!! $cmsPage->content !!}

        </div>
    </section>
    <!-- Privacy Sec End Here -->
@endsection
