@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('retailer.css') }}">

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->page_title }}</h1>
            </div>
        </div>
    </section>
    <!-- Universal Banner End Here -->

    <section class="retailer_sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="content_wrapper">

                        {!! $cmsPage->content !!}

                        <div class="button-group wow animate__animated animate__fadeInLeft animate__delay-2s">
                            <a href="{{ url('/register-beta-tester') }}" class="diji-btn">Register as Beta-Tester</a>
                            <a href="{{ url('/register-investor') }}" class="diji-btn">Join Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img_box wow animate__animated animate__fadeInRight">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media) }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Retailer Sec End Here -->

    <!-- Benefits Sec Start Here -->
    <section class="benefits_sec">

        <div class="container-fluid">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>The Problem<span class="pnk">.</span> The Solution<span class="yellow">.</span></h2>
            </div>
            <div class="row">
                <div class="col-md-5 left_problem">
                    {!! $cmsPage->content_2 !!}

                </div>
                <div class="col-md-2">
                    <div class="img_box wow animate__animated animate__bounceIn animate__delay-1s">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_2) }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-5 right_problem">
                    {!! $cmsPage->content_3 !!}

                </div>
            </div>
        </div>

    </section>
    <!-- Benefits Sec End Here -->

    <!-- Save Money Sec Start Here -->

    <!-- Save Money Sec End Here -->

    <!-- Benefits Sec Start Here -->
    <section class="benefit_sec">

        <div class="container">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>5 Benefits</h2>
                <p>Save Time. Save Paper. Save Money</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    @foreach ($retailers as $key => $retailer)
                        @if ($key != 2)
                            <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s">
                                <div class="heading_bar">
                                    <h4>{{ $retailer->point }}</h4>
                                    <figure><img src="{{ asset('uploads/benefit/' . $retailer->media) }}" class="img-fluid">
                                    </figure>
                                </div>
                                {!! $retailer->detail !!}
                            </div>
                        @else
                </div>
                <div class="col-md-4">
                    <div class="center-mobile wow animate__animated animate__bounceIn">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_2) }}" data-speed="-5"
                                class="layer img-fluid">
                        </figure>
                    </div>

                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s"
                        style="margin-top:10rem">
                        <div class="heading_bar">
                            <h4>{{ $retailer->point }}</h4>
                            <figure><img src="{{ asset('uploads/benefit/' . $retailer->media) }}" class="img-fluid">
                            </figure>
                        </div>
                        {!! $retailer->detail !!}
                    </div>
                </div>
                <div class="col-md-4">
                    @endif
                    @endforeach

                </div>
            </div>

    </section>
    <!-- Benefits Sec End Here -->

    <!-- How It Work Sec Start Here -->
    <section class="how_works" id="how_work">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="img_box">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_4) }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content-wrapper">
                        {!! $cmsPage->content_4 !!}

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- How It Work Sec End Here -->

    <!-- Innovate Sec Start Here -->
    <section class="innovate_sec">
        <div class="container">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>Are You Ready To Innovate</h2>
                <p>Activate Dijii In 5 Easy Steps</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="innovate_box">
                        <div class="icon_box">
                            <a href="{{ url('/contact') }}">
                                <figure><img src="{{ frontimage('inovate10.png') }}" class="img-fluid"></figure>
                            </a>
                        </div>
                        <div class="content">
                            <h4>Contact </h4>
                            <p>
                                To register for more information or interested in becoming a beta-tester? Tap JoinUs
                            </p>
                            <div class="button-group">
                                <a href="{{ url('/contact') }}" class="diji-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="innovate_box">
                        <div class="icon_box">
                            <figure><img src="{{ frontimage('inovate20.png') }}" class="img-fluid"></figure>
                        </div>
                        <div class="content">
                            <h4>Discuss</h4>
                            <p>
                                Dijii will be in touch to understand your requirements and create your onboarding documents
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="innovate_box">
                        <div class="icon_box">
                            <figure><img src="{{ frontimage('inovate30.png') }}" class="img-fluid"></figure>
                        </div>
                        <div class="content">
                            <h4>Download</h4>
                            <p>
                                Dijii’s web app will be available through most POS software providers and alternative
                                payment providers – download it and subscribe (Our team will integrate Dijii onto any POS
                                software platform if we are not yet partnered)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="innovate_box">
                        <div class="icon_box">
                            <figure><img src="{{ frontimage('inovate30.png') }}" class="img-fluid"></figure>
                        </div>
                        <div class="content">
                            <h4>Integrate and activate</h4>
                            <p>
                                Speedy roll out through templated integration e.g. retailer’s dashboard, receipt
                                customisation template, map of POS terminals
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="innovate_box">
                        <div class="icon_box">
                            <figure><img src="{{ frontimage('inovate50.png') }}" class="img-fluid"></figure>
                        </div>
                        <div class="content">
                            <h4>Go Dijii!</h4>
                            <p>
                                Start issuing digital receipts, discounts, and offers immediately
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="innovate_box">
                        <div class="icon_box">
                            <figure><img src="{{ frontimage('inovate50.png') }}" class="img-fluid"></figure>
                        </div>
                        <div class="content join_btn">
                            <div class="button-group">
                                <a href="{{ url('/login') }}" class="diji-btn">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
