@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('retailer.css') }}">


    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
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
                        <figure><img src="{{ frontimage('apptap.webp') }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customer Sec End Here -->

    <!-- Benefits Sec Start Here -->
    <section class="benefits_sec">

        <div class="container-fluid">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>The Problem<span class="pnk">.</span> The Solution<span class="yellow">.</span></h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="content_dv wow animate__animated animate__fadeInLeft">
                        <div class="title">
                            <h4>The Problem</h4>
                        </div>
                        <div class="desc">
                            <p><span class="color">Paper receipts</span> and current digital offerings aren’t working well:
                            </p>
                        </div>
                        <ul class="points">
                            <li><img src="{{ frontimage('dot3.png') }}" class="img-fluid dot">
                                <p>The thermal paper for receipts cost UK retailers circa £32m every year
                                </p>
                            </li>
                            <li><img src="{{ frontimage('dot3.png') }}" class="img-fluid dot">
                                <p>Paper receipts have a low marketing value
                                </p>
                            </li>
                            <li><img src="{{ frontimage('dot3.png') }}" class="img-fluid dot">
                                <p>95% of paper receipts end up in landfills
                                </p>
                            </li>
                            <li class="inner-dropdown">
                                <div class="flx">
                                    <img src="{{ frontimage('dot3.png') }}" class="img-fluid dot">
                                    <p>Current digital receipt solutions create long queues while customers
                                        spell out email addresses or phone numbers, causing:</p>
                                </div>
                                <ul class="inner-points">
                                    <li><img src="{{ frontimage('dot2.png') }}" class="img-fluid">
                                        <p>poor checkout experiences</p>
                                    </li>
                                    <li><img src="{{ frontimage('dot2.png') }}" class="img-fluid">
                                        <p>reduced customer satisfaction</p>
                                    </li>
                                    <li><img src="{{ frontimage('dot2.png') }}" class="img-fluid">
                                        <p>higher costs as more staff are needed on the tills to keep queues short</p>
                                    </li>
                                </ul>
                            </li>
                            <li><img src="{{ frontimage('dot3.png') }}" class="img-fluid dot">
                                <p>Email marketing have very low open and click-through rates, typically less than 1% and 5%
                                    respectively</p>
                            </li>
                            <li><img src="{{ frontimage('dot3.png') }}" class="img-fluid dot">
                                <p>Customer mistrust and fast paced lifestyles means most won’t provide their personal
                                    data during checkout to get their receipt and they don’t want to have an app for every
                                    store they shop in</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="img_box wow animate__animated animate__bounceIn animate__delay-1s">
                        <figure><img src="{{ frontimage('retailer12.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="content_dv wow animate__animated animate__fadeInRight">
                        <div class="title">
                            <h4>The Solution</h4>
                            <p>What can Dijii do for you?<br />
                                Speedy checkouts. Grow Sales. Help the planet.
                            </p>
                        </div>
                        <ul class="points">
                            <li><img src="{{ frontimage('checked2.png') }}" class="img-fluid">
                                <p>Digital discounts will incentivise customers to enter your store, try new products and
                                    repeat purchases (especially when triggered by location)</p>
                            </li>
                            <li><img src="{{ frontimage('checked2.png') }}" class="img-fluid">
                                <p>Customers will use Dijii daily and this high level of engagement means marketing and
                                    customer communication is more effective, driving sales
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked2.png') }}" class="img-fluid">
                                <p>Increase your customer base when you deliver better in-store experiences which include
                                    product reviews and easy-speedy checkouts
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked2.png') }}" class="img-fluid">
                                <p>Proven customer support for <span class="color">eco-friendly</span> retailers presents
                                    an
                                    opportunity to acquire new
                                    customers and increase your customer base
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked2.png') }}" class="img-fluid">
                                <p>Location-triggered push notifications to receptive shoppers will let them receive
                                    discount offers, coupon, and event invitations when they enter the supermarket, keeping
                                    visitors around for longer
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked2.png') }}" class="img-fluid">
                                <p>Remain competitive and relevant
                                </p>
                            </li>
                        </ul>
                    </div>
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
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s">
                        <div class="heading_bar">
                            <h4>High Return on
                                Investment</h4>
                            <figure><img src="{{ frontimage('benefit6.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Increase sales, improve brand awareness, and raise customer engagement (research shows 75% of
                            customers open in-app messages compared with a low 13% for email marketing open rate)</p>
                    </div>
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-2s">
                        <div class="heading_bar">
                            <h4>Reduce costs</h4>
                            <figure><img src="{{ frontimage('benefit10.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Reduce operational and consumables costs by shifting to Dijii</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="center-mobile wow animate__animated animate__bounceIn">
                        <figure><img src="{{ frontimage('bannerPhone4.png') }}" data-speed="-5"
                                class="layer retailer img-fluid">
                        </figure>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s">
                        <div class="heading_bar">
                            <h4>Connect with Your Customers</h4>
                            <figure><img src="{{ frontimage('benefit7.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Direct customer engagement through Dijii’s in-app messages, push notifications, and forums for
                            fast feedback and real-time insights that inform strategies, improve satisfaction and drive
                            sales</p>
                    </div>
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-2s">
                        <div class="heading_bar">
                            <h4>Personalised
                                Marketing</h4>
                            <figure><img src="{{ frontimage('benefit8.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Increased redemptions and sales with targeted discounts and offers relevant to the individual,
                            informed by the customer’s shopping habits, which enriches their experience of your brand</p>
                    </div>
                </div>
                <div class="benefits_box benefitx lst-box wow animate__animated animate__fadeInDown animate__delay-3s ">
                    <div class="heading_bar">
                        <h4>A Better Checkout</h4>
                        <figure><img src="{{ frontimage('benefit8.png') }}" class="img-fluid"></figure>
                    </div>
                    <p>A quicker, simpler, safer checkout experience with a single contactless tap. Our research shows
                        less
                        than 3% of consumers would choose digital receipts using their personal email or mobile phone
                        number. About 82% of participants would use Dijii within a year.</p>
                </div>

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
                        <figure><img src="{{ frontimage('work.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content-wrapper">
                        <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                            <h2>How it Works</h2>
                            <h5>The Opportunity</h5>
                        </div>
                        <p class="wow animate__animated animate__fadeInLeft animate__delay-1s">
                            Seamless Omni-channel Retail Customer Experiences<br /><br />
                            Smart app-based marketing techniques such as push notifications, digital click-through marketing
                            on digital receipts, app gamification that increases customer engagement, and tap-and-go
                            discount activation is more effective than outdated email marketing.<br /><br />
                            Our pilot later this year presents an exciting opportunity for early adopters to benefit from
                            cost savings, positive brand sentiment from customers and secure a competitive
                            advantage.<br /><br />
                        </p>
                        <div class="bottom-content wow animate__animated animate__fadeInLeft animate__delay-1s">
                            <p>
                                (Email open rate for retail is c. 13% (Statistica 2020) whereas in-app messages have an open
                                rate of about 75% (Reckless) – more customers opt-in to push notifications than email
                                marketing)
                            </p>
                            <a
                                href="https://www.businessofapps.com/marketplace/push-notifications/research/push-notifications-statistics/?source=post_page)">
                                https://www.businessofapps.com/marketplace/push-notifications/research/push-notifications-statistics/?source=post_page)
                            </a>
                        </div>
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
