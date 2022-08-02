@extends('front.layouts.app')

@section('content')
    <!-- ticker section start here -->
    <section class="ticker_sec">
        <div>
            <marquee behavior="" direction=""> Are you fed up of outdated, toxic paper receipts and want a quick and easy
                digital solution?
                Introducing Dijii. The digital receipt app you just need to tap!<a type="" class="btn marquea"
                    href="#newsletters">Subscribe</a></marquee>
        </div>
    </section>
    <!-- ticker section end here -->
    <!-- Banner Sec Start Here -->
    <section class="banner_sec">
        <div class="container">
            <div class="center-mobile wow animate__animated animate__bounceIn">
                <figure><img src="{{ frontimage('bannerPhone4.png') }}" data-speed="-5" class="layer img-fluid"></figure>
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
                        <source src="{{ frontimage('homevid.mp4') }}" type="video/mp4">
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
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Save Money and Redeem Rewards</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>with personalised discounts, offers and rewards</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">A Greener Future</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>is Within Our Grasp the eco-friendly choice that supports charities</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Maintain your privacy </span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>keep your email address private</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Simplicity and Convenience</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>with just one tappable app</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Feel in Control of Your Spending</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>with budget and spending analysis</p>
                                </details>
                                </p>
                            </li>

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
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">High Return on Investment</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>Increase sales, improve brand
                                        awareness, and raise engagement</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Reduce costs</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>Reduce operational and consumables costs by going digital</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Connect with Your Customers</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>Directly engage your customers</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">Personalised Marketing</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>For the individual, not a customer segment</p>
                                </details>
                                </p>
                            </li>
                            <li>
                                <img src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>
                                <details>
                                    <summary>
                                        <span class="bld">A Better Checkout</span>
                                        <img src="{{ frontimage('shareicon.png') }}" class="img-fluid" alt="">
                                    </summary>
                                    <p>A quicker, simpler, safer checkout experience with a single contactless tap</p>
                                </details>
                                </p>
                            </li>

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
                            <figure><img src="{{ frontimage('landing12.jpg') }}" class="img-fluid"></figure>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contentDv">

                            <p class="wow animate__animated animate__fadeInLeft animate__delay-1s">
                                We’d love to welcome you to <span>Dijii</span> so subscribe, register as a
                                beta-tester, or create an account to get regular updates and be one of the first
                                to use Dijii!<br /><br>
                                We’re looking for individuals and retailers to be part of our beta-testing team.<br /><br>
                                For now, take a look at our app mockups – let us know if you like them and
                                want to be part of our exciting journey!
                            </p>
                            <div class="download_from wow animate__animated animate__fadeInDown animate__delay-2s">
                                <a href="#" data-toggle="modal" data-target="#appstore">
                                    <figure><img src="{{ frontimage('apple-btn.png') }}" class="img-fluid"></figure>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#appstore">
                                    <figure><img src="{{ frontimage('google-btn.png') }}" class="img-fluid googleimg">
                                    </figure>
                                </a>
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
                        <form action="">
                            <div class="form-group wow animate__animated animate__fadeInUp animate__delay-2s">
                                <input type="email" placeholder="Enter your email address" class="form-control">
                                <button class="diji-btn wow animate__animated animate__rubberBand animate__delay-3s"
                                    type="button" data-toggle="modal" data-target="#subscript_modal">Subscribe</button>
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
