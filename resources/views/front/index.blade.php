@extends('front.layouts.app')

@section('content')
    <!-- ticker section start here -->
    <section class="ticker_sec">
        <div>
            <marquee behavior="" direction=""> {{ $cmsPage->content }}<a type="" class="btn marquea"
                    href="#newsletters">Subscribe</a></marquee>
        </div>
    </section>
    <!-- ticker section end here -->
    <!-- Banner Sec Start Here -->
    <section class="banner_sec">
        <div class="container">
            <div class="center-mobile wow animate__animated animate__bounceIn">
                <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media) }}" data-speed="-5" class="layer img-fluid">
                </figure>
            </div>
            <div class="go-to-bottom">
                <a href="#scnd-sec">
                    <figure><img src="{{ frontimage('go-bottom.png') }}" class="img-fluid"></figure>
                </a>
            </div>
        </div>
    </section>
    <!-- Banner Sec End Here -->

    <!-- Second Sec Start Here -->
    <section class="second_sec" id="scnd-sec">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box_content wow animate__animated animate__fadeInDown">
                        <div class="boxes">
                            <div class="icon_box">
                                <figure><img src="{{ frontimage('icon11.png') }}" class="img-fluid"></figure>
                            </div>
                            <div class="txt">
                                <h3>Save Time</h3>
                            </div>
                        </div>
                        <div class="content_dv">
                            <h5>
                                Just one tap for digital receipts at participating UK businesses – no long queues or awkward
                                email exchanges.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_content wow animate__animated animate__fadeInDown animate__delay-1s">
                        <div class="boxes">
                            <div class="icon_box">
                                <figure><img src="{{ frontimage('icon12.png') }}" class="img-fluid"></figure>
                            </div>
                            <div class="txt">
                                <h3>Save Paper</h3>
                            </div>
                        </div>
                        <div class="content_dv">
                            <h5>
                                Eliminate tonnes of paper waste from landfills – let’s build a sustainable future together.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_content wow animate__animated animate__fadeInDown animate__delay-2s">
                        <div class="boxes">
                            <div class="icon_box">
                                <figure><img src="{{ frontimage('icon12.png') }}" class="img-fluid"></figure>
                            </div>
                            <div class="txt">
                                <h3>Save Money</h3>
                            </div>
                        </div>
                        <div class="content_dv">
                            <h5>
                                Customers will access personalised discounts and save money on
                                their purchases while retailers save money on paper, staff and marketing.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head text-center pt-5">
                <h2>How it Works</h2>
            </div>
            <div class="video_box wow animate__animated animate__fadeInUp">
                <div class="preview_img">

                    <video width="100%" autoplay playsinline loop poster="http://placehold.it/350x350">
                        <source src="{{ asset('uploads/pages/' . $cmsPage->video) }}" type="video/mp4">
                    </video>
                </div>

            </div>

    </section>
    <!-- Second Sec End Here -->

    <!-- Benefits Sec Start Here -->
    <section class="benefits_sec">

        <div class="container-fluid">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>The Benefits</h2>

            </div>
            <div class="row ">
                <div class="col-md-4 customr">
                    <div class="content_dv wow animate__animated animate__fadeInLeft">
                        <div class="title">
                            <h4>For Customers</h4>
                        </div>
                        <ul class="points">
                            @foreach ($customers as $customer)
                                <li>
                                    <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                    <p>
                                    <details>
                                        <summary>
                                            <span class="bld">{{ $customer->point }}</span>
                                            <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                        </summary>
                                        {!! $customer->detail !!}
                                    </details>
                                    </p>
                                </li>
                            @endforeach

                        </ul>
                        <div class="button-group">
                            <a href="{{ url('/customers') }}" class="diji-btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="center-mobile wow animate__animated animate__bounceIn">
                        <figure><img src="{{ frontimage('bannerPhone4.png') }}" data-speed="-5" class="layer img-fluid">
                        </figure>
                    </div>

                </div>
                <div class="col-md-4 customr">
                    <div class="content_dv wow animate__animated animate__fadeInRight">
                        <div class="title">
                            <h4>For Retailers</h4>
                        </div>
                        <ul class="points">
                            @foreach ($retailers as $retailer)
                                <li>
                                    <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                    <p>
                                    <details>
                                        <summary>
                                            <span class="bld">{{ $retailer->point }}</span>
                                            <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                        </summary>
                                        {!! $retailer->detail !!}
                                    </details>
                                    </p>
                                </li>
                            @endforeach

                        </ul>
                        <div class="button-group">
                            <a href="{{ url('/register-retailer') }}" class="diji-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Benefits Sec End Here -->

    <!-- Landing Banner Sec Start Here -->
    <section class="landing_banner">
        <div class="landing_banner_sec">
            <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="img_box wow animate__animated animate__fadeInUp">
                            <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media_2) }}" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contentDv">

                            {!! $cmsPage->content_2 !!}
                            <div class="download_from wow animate__animated animate__fadeInDown animate__delay-2s">
                                @if ($setting->playstore_link)
                                    <a href="{{ $setting->playstore_link ? $setting->playstore_link : '' }}"
                                        data-toggle="modal" data-target="#appstore">
                                        <figure><img src="{{ frontimage('apple-btn.png') }}" class="img-fluid"></figure>
                                    </a>
                                @endif
                                @if ($setting->appstore_link)
                                    <a href="{{ $setting->appstore_link ? $setting->appstore_link : '' }}"
                                        data-toggle="modal" data-target="#appstore">
                                        <figure><img src="{{ frontimage('google-btn.png') }}"
                                                class="img-fluid googleimg">
                                        </figure>
                                    </a>
                                @endif

                            </div>
                            <div class="button-group wow animate__animated animate__fadeInUp animate__delay-3s">
                                <a href="{{ url('/register-beta-tester') }}" class="diji-btn">Register As Tester</a>
                                <a href="{{ url('/register-investor') }}" class="diji-btn scnd">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Landing Banner Sec End Here -->

    <!-- Newsletter Sec Start Here -->
    <section class="newsletter_sec" id="newsletters">

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="newsletter_box">
                        <div class="heading_wrapper">
                            <h2 class="wow animate__animated animate__fadeInDown">Subscribe To Our Newsletter</h2>
                            <p class="wow animate__animated animate__fadeInDown animate__delay-1s">Stay up to date with
                                Dijii's development, get early access, find out about our launch,
                                and receive relevant information about our exciting app!</p>
                        </div>
                        @include('admin.partials.errors')

                        <form method="POST" action="{{ url('/subscribe') }}" class="form-horizontal" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group wow animate__animated animate__fadeInUp animate__delay-2s">
                                <input type="email" name="email" placeholder="Enter your email address"
                                    class="form-control">
                                <button class="diji-btn wow animate__animated animate__rubberBand animate__delay-3s"
                                    type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- Newsletter Sec End Here -->

    <!-- modal section start here -->
    <div class="modal fade" id="appstore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Our app is still in development. Register to get the latest news and be one of the first to find out
                    about our launch!
                </div>
            </div>
        </div>
    </div>
    <!-- modal section end here -->

    <!-- modal sec start here -->
    <div class="modal fade" id="subscript_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Thank you for subscribing</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- modal sec end here -->

    <script>
        window.addEventListener('load', videoScroll);
        window.addEventListener('scroll', videoScroll);

        function videoScroll() {

            if (document.querySelectorAll('video[autoplay]').length > 0) {
                var windowHeight = window.innerHeight,
                    videoEl = document.querySelectorAll('video[autoplay]');

                for (var i = 0; i < videoEl.length; i++) {

                    var thisVideoEl = videoEl[i],
                        videoHeight = thisVideoEl.clientHeight,
                        videoClientRect = thisVideoEl.getBoundingClientRect().top;

                    if (videoClientRect <= ((windowHeight) - (videoHeight * .5)) && videoClientRect >= (0 - (videoHeight *
                            .5))) {
                        thisVideoEl.play();
                    } else {
                        thisVideoEl.pause();
                    }

                }
            }

        }
    </script>
@endsection
