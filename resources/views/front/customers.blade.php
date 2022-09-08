@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('customer.css') }}">

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->page_title }}</h1>
            </div>
        </div>
    </section>
    <!-- Universal Banner End Here -->

    <!-- Customer Sec Start Here -->
    <section class="customer_sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="content_wrapper">
                        {!! $cmsPage->content !!}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img_box wow animate__animated animate__fadeInRight animate__delay-2s">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media) }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customer Sec End Here -->

    <!-- Solution Sec Start Here -->
    <section class="solution_sec">

        <div class="container">
            {!! $cmsPage->content_2 !!}
            <div class="button-group">
                <a href="{{ url('/register-investor') }}" class="diji-btn">Join Us</a>
                <a href="{{ url('/register-beta-tester') }}" class="diji-btn">Register as a beta-tester</a>
            </div>
        </div>

    </section>
    <!-- Solution Sec End Here -->

    <!-- Calculator Sec Start Here -->
    <section class="calculator_sec">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="img_box wow animate__animated animate__fadeInLeft">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_3) }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        {!! $cmsPage->content_3 !!}

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Calculator Sec End Here -->

    <!-- Benefits Sec Start Here -->
    <section class="benefit_sec">

        <div class="container">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>5 Benefits</h2>
                <p>Save Time. Save Paper. Save Money</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    @foreach ($customers as $key => $customer)
                        @if ($key != 2)
                            <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s">
                                <div class="heading_bar">
                                    <h4>{{ $customer->point }}</h4>
                                    <figure><img src="{{ asset('uploads/benefit/' . $customer->media) }}" class="img-fluid">
                                    </figure>
                                </div>
                                {!! $customer->detail !!}
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
                            <h4>{{ $customer->point }}</h4>
                            <figure><img src="{{ asset('uploads/benefit/' . $customer->media) }}" class="img-fluid">
                            </figure>
                        </div>
                        {!! $customer->detail !!}
                    </div>
                </div>
                <div class="col-md-4">
                    @endif
                    @endforeach

                </div>
            </div>

    </section>
    <!-- Benefits Sec End Here -->

    <!-- Impact Sec Start Here -->
    <section class="impact_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-5 tl_impact">
                    <div class="img_box wow animate__animated animate__fadeInRight">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_4) }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        {!! $cmsPage->content_4 !!}

                        <div class="button-group wow animate__animated animate__fadeInDown animate__delay-2s">
                            <a href="{{ url('/register-investor') }}" class="diji-btn">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Impact Sec End Here -->
@endsection
