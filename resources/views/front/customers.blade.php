@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('customer.css') }}">


    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
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
                        <figure><img src="{{ frontimage('customer1.webp') }}" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customer Sec End Here -->

    <!-- Solution Sec Start Here -->
    <section class="solution_sec">

        <div class="container">
            <div class="heading_wrapper wow animate__animated animate__fadeInDown">
                <h2>The Problem<span class="pnk">.</span> The Solution<span class="yellow">.</span></h2>
            </div>
            <div class="content_wrapper">
                <h4 class="wow animate__animated animate__fadeInLeft animate__delay-1s">The Future Starts Here</h4>
                <p class="wow animate__animated animate__fadeInLeft animate__delay-1s">Are you tired of holding up the
                    checkout line, spelling out your email address, for your digital receipt?
                    Are you constantly decluttering your inbox, your phone, and throwing away crinkled, faded receipts? Did
                    you know that 95% of these receipts cannot be recycled and end up in landfills?</p><br />
                <ul class="points">
                    <li class="wow animate__animated animate__fadeInDown animate__delay-1s">
                        <img src="{{ frontimage('tick.png') }}" class="img-fluid" alt="">
                        <b>Convenience:</b>
                        <p>All your receipts and discounts in one place and safely stored in secure cloud storage which you
                            can access anytime from anywhere with an internet connection</p>
                    </li>
                    <li class="wow animate__animated animate__fadeInDown animate__delay-2s">
                        <img src="{{ frontimage('tick.png') }}" class="img-fluid" alt="">
                        <b>Privacy:</b>
                        <p>Get your digital receipt with Dijii and keep your personal email address and phone number private
                        </p>
                    </li>
                    <li class="wow animate__animated animate__fadeInDown animate__delay-3s">
                        <img src="{{ frontimage('tick.png') }}" class="img-fluid" alt="">
                        <b>Easy, speedy:</b>
                        <p>Stop wasting time in queues and at the checkout - shop in-store at your pace with one quick tap
                            for your digital receipt</p>
                    </li>
                    <li class="wow animate__animated animate__fadeInDown animate__delay-4s">
                        <img src="{{ frontimage('tick.png') }}" class="img-fluid" alt="">
                        <b>The greener choice:</b>
                        <p>Dijii turns harmful paper receipts into environmentally helpful digital receipts</p>
                    </li>
                </ul>
            </div>
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
                        <figure><img src="{{ frontimage('solution12.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        <div class="heading_wrapper wow animate__animated animate__fadeInDown animate__delay-1s">
                            <h2>Sign Up</h2><br />
                            <p>
                                You are one free download away from helping yourself to save time, using discounts to save
                                money, and enjoy rewarding offers without slowing you down.
                            </p><br />
                        </div>
                        <ul class="points">
                            <li class="wow animate__animated animate__fadeInDown animate__delay-2s"><img
                                    src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>Download Dijii for free from the Apple Store or the Play Store</p>
                            </li>
                            <li class="wow animate__animated animate__fadeInDown animate__delay-3s"><img
                                    src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>At checkout, simply tap your smartphone or Dijii contactless card on the card reader</p>
                            </li>
                            <li class="wow animate__animated animate__fadeInDown animate__delay-4s"><img
                                    src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>Your linked loyalty cards and activated discounts will be automatically applied</p>
                            </li>
                            <li class="wow animate__animated animate__fadeInDown animate__delay-5s"><img
                                    src="{{ frontimage('checked.png') }}" class="img-fluid">
                                <p>Instantly receive your digital receipt on your phone</p>
                            </li>
                        </ul>
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
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s">
                        <div class="heading_bar">
                            <h4>Save Money and Redeem Rewards</h4>
                            <figure><img src="{{ frontimage('benefit10.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Personalised discounts and rewards to you in the
                            app in real time</p>
                    </div>
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-2s">
                        <div class="heading_bar">
                            <h4>A Greener Future is Within Our Grasp</h4>
                            <figure><img src="{{ frontimage('benefit30.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Dijii is the eco-friendly alternative and the only receipt solution supporting environmental
                            charities</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="center-mobile wow animate__animated animate__bounceIn">
                        <figure><img src="{{ frontimage('banner-phone5.png') }}" data-speed="-5" class="layer img-fluid">
                        </figure>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-1s">
                        <div class="heading_bar">
                            <h4>Maintain your privacy</h4>
                            <figure><img src="{{ frontimage('benefit20.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>get your digital receipt with one quick tap at the till – keep your email address private and
                            reduce the spam cluttering up your life</p>
                    </div>
                    <div class="benefits_box wow animate__animated animate__fadeInDown animate__delay-2s">
                        <div class="heading_bar">
                            <h4>One app convenience</h4>
                            <figure><img src="{{ frontimage('benefit40.png') }}" class="img-fluid"></figure>
                        </div>
                        <p>Dijii will be used across all types of retailers so you only need one app – neverlose a receipt
                            again!</p>
                    </div>
                </div>
                <div class="benefits_box benefitx wow animate__animated animate__fadeInDown animate__delay-3s">
                    <div class="heading_bar">
                        <h4>Feel in Control of Your Spending</h4>
                        <figure><img src="{{ frontimage('benefit9.png') }}" class="img-fluid"></figure>
                    </div>
                    <p>Access budget and spending analysis without being hooked up to your bank account. You don’t
                        recognise a purchase on your bank statement? Quickly and easily search your receipts in the app
                    </p>
                </div>

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
                        <figure><img src="{{ frontimage('impact.webp') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        <div class="heading_wrapper wow animate__animated animate__fadeInLeft">
                            <h2>The Lasting Impact</h2>
                        </div>
                        <p class="wow animate__animated animate__fadeInDown animate__delay-1s">
                            Dijii is committed to a more sustainable future by creating a lasting impact that helps our
                            planet. The UK generates over 11 billion receipts every year. Paper receipts consumer natural
                            resources, clutter our lives, end up in landfills, and decimate our woodlands and
                            forests.<br /><br />
                            So, what can we do? Dijii is a convenient and practical solution: Digital receipts! Dijii will
                            be used by everyone, everywhere!. You won’t need to download an app for every store you visit
                            when you have Dijii in your pocket. All you need is a smartphone and the Dijii app.<br /><br />
                            Choosing Dijii transforms harmful paper receipts into eco-friendly digital receipts that support
                            our donations to UK charities that work to restore our environment. Let’s do it together.
                        </p>
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
