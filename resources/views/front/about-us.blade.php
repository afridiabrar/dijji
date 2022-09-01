@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('about.css') }}">

    <!-- Stylesheet -->

    <style>
        #header-top ul li:hover>ul.customdrop,
        #header-top ul li ul.customdrop:hover {
            display: block;
        }
    </style>
    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">

            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
            </div>

        </div>
    </section>
    <!-- Universal Banner End Here -->

    <!-- Our Mission Sec Start Here -->
    <section class="our_mission" id="mission">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contentDv">
                        {!! $cmsPage->content !!}
                        <div class="button-group wow animate__animated animate__fadeInUp animate__delay-2s mt-4">
                            <a href="{{ url('/register-investor') }}" class="diji-btn">Join Us</a>
                            <a href="{{ url('/register-beta-tester') }}" class="diji-btn">Sign up as a beta tester </a>
                            <a href="#newsletters" class="diji-btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img_box wow animate__animated animate__fadeInRight">
                        <figure><img src="{{ asset('uploads/pages/' . $cmsPage->media) }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission Sec End Here -->

    <!-- Blog Sec Start Here -->
    <section class="blog_sec" id="newsBlog">
        <div class="container">
            <div class="heading wow animate__animated animate__fadeInDown">
                <h2>News and Blogs </h2>
            </div>
            <div class="all_blogs">
                @foreach ($blogs as $blog)
                    <div class="blog_box">
                        <div class="video_box">
                            <div class="preview_img">
                                <figure><img src="{{ asset('uploads/blogs/' . $blog->media) }}" class="img-fluid">
                                </figure>
                            </div>

                        </div>
                        <div class="content_box">
                            <h4 class="title">{{ $blog->title }}</h4>
                            <div class='blog_btn'>
                                <h5 class="date">{{ $blog->created_at }}</h5>
                                <a href="{{ url('/blog-detail', $blog->id, $blog->slug) }}" target=_blank>Read
                                    More</a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog Sec End Here -->

    <!-- Team Sec Start Here -->
    <section class="team_sec">

        <div class="container">
            <div class="heading_wrapper">
                <h2>Meet the Team</h2>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                @foreach ($teams as $team)
                    <div class="col-md-4">
                        <div class="team_box frst_box">
                            <div class="front_box">
                                <div class="preview_box">
                                    <div class="img_box">
                                        <figure><img src="{{ asset('uploads/teams/' . $team->media) }}" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="back_box">
                                        {!! $team->content !!}
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>{{ $team->name }}</h4>
                                    <h5>{{ $team->designation }}O</h5>
                                    <a href="https://www.linkedin.com/in/victoria-smallman-4a8b2033/" class="linkedin_sec">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-2"></div>
            </div>
        </div>

    </section>
    <!-- Team Sec End Here -->

    <!-- FAQs Sec Start Here -->
    <section class="faqs_sec" id="faqs">
        <div class="container">

            <div class="heading">
                <h2>Frequently Asked Questions</h2>
            </div>
            @foreach ($faqs as $faq)
                @if ($faq->category == 1)
                    <div id="accordionOne">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        <h5>{{ $faq->question }}</h5>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                data-parent="#accordionOne">
                                <div class="card-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            @endforeach

            <div id="accordionTwo">
                <div class="heading">
                    <h4>Environmental impact</h4>
                </div>
                @foreach ($faqs as $faq)
                    @if ($faq->category == 2)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        <h5>{{ $faq->question }}</h5>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                data-parent="#accordionOne">
                                <div class="card-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div id="accordionThree">
                <div class="heading">
                    <h4>Security and storage</h4>
                </div>
                @foreach ($faqs as $faq)
                    @if ($faq->category == 3)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h5>{{ $faq->question }}</h5>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                data-parent="#accordionOne">
                                <div class="card-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div id="accordionFour">
                <div class="heading">
                    <h4>Miscellaneous</h4>
                </div>
                @foreach ($faqs as $faq)
                    @if ($faq->category == 4)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h5>{{ $faq->question }}</h5>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                data-parent="#accordionOne">
                                <div class="card-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
    <!-- FAQs Sec End Here -->

    <!-- Testimonials Sec Start Here -->
    <section class="testimonials" id="testimony">

        <div class="container">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h5>TESTIMONY</h5>
                <h2>What UK Customers<br /> Think about Dijii</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="left-images">
                        <figure><img src="{{ frontimage('person4.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="circle-img">
                        <figure><img src="{{ frontimage('person4.png') }}" class="img-fluid"></figure>
                    </div>
                    <div class="testimonial_slider">
                        @foreach ($testimonials as $testimonial)
                            <div class="testi-slide">

                                <div class="client-review">
                                    {!! $testimonial->content !!}
                                </div>
                                <div class="client-details">
                                    <h4>{{ $testimonial->name }}</h4>
                                    <h5>{{ $testimonial->designation }}</h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-images">
                        <figure><img src="{{ frontimage('person4.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Testimonials Sec End Here -->

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
                                <input type="email" placeholder="Enter your email address" class="form-control">
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
@endsection
