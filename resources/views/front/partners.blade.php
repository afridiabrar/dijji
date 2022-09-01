@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('partner.css') }}">

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
            </div>
        </div>
    </section>

    <!-- Digital Retail Sec Start Here -->
    <section class="digital_retail">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="content_wrapper">

                        {!! $cmsPage->content !!}

                        <div class="button-group wow animate__animated animate__fadeInLeft animate__delay-1s">
                            <a href="{{ url('/register-investor') }}" class="diji-btn">Join Us</a>
                            <a href="{{ url('/register-beta-tester') }}" class="diji-btn">Register as a Beta-Tester</a>
                        </div>
                        <div class="button-group wow animate__animated animate__fadeInLeft animate__delay-2s">
                            <a href="{{ url('/contact') }}" class="diji-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img_box">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media) }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Digital Retail Sec End Here -->

    <!-- Charities Sec Start Here -->
    <section class="charity_sec" id="charity">

        <div class="container">
            <div class="row">
                <div class="col-md-5 charity_img">
                    <div class="img_box wow animate__animated animate__fadeInLeft">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_2) }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        {!! $cmsPage->content_2 !!}

                        <div class="button-group">
                            <a href="{{ url('/contact') }}" class="diji-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Charities Sec End Here -->

    <!-- POS Sec Start Here -->
    <section class="charity_sec pos">

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content_wrapper">
                        {!! $cmsPage->content_3 !!}

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img_box">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_3) }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- POS Sec End Here -->

    <!-- Charities Sec Start Here -->
    <section class="charity_sec">

        <div class="container">
            <div class="row">
                <div class="col-md-5 charity_img">
                    <div class="img_box wow animate__animated animate__fadeInLeft">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_4) }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        {!! $cmsPage->content_4 !!}

                        <div class="button-group wow animate__animated animate__fadeInUp animate__delay-3s">
                            <a href="{{ url('/contact') }}" class="diji-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
