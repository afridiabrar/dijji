@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('term.css') }}">


    <!-- Stylesheet -->
    <!-- Stylesheet -->

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->page_title }}</h1>
            </div>
        </div>
    </section>
    <!-- Universal Banner End Here -->

    <!-- Privacy Sec Start Here -->
    <section class="term_use">
        <div class="container">
            {!! $cmsPage->content !!}


        </div>
    </section>
    <!-- Privacy Sec End Here -->
@endsection
