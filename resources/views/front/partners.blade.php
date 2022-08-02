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
                        <figure><img src="{{ frontimage('partner.png') }}" class="img-fluid"></figure>
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
                        <figure><img src="{{ frontimage('charity.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        <h2 class="wow animate__animated animate__fadeInDown animate__delay-1s">Charities</h2><br />
                        <p class="wow animate__animated animate__fadeInDown animate__delay-2s">
                            We aim to provide support to charities that protect and restore Britain’s natural environment
                            and woodlands through financial contributions, raising awareness, and volunteer
                            days.<br /><br />
                            One simple change to help you play your part in tackling climate change – choose eco-friendly
                            Dijii receipts and discounts instead of the harmful paper alternative.
                        </p>
                        <ul class="points wow animate__animated animate__fadeInDown animate__delay-3s">
                            <li><img src="{{ frontimage('tick.png') }}" class="img-fluid" />
                                <p>Over 11 billion paper receipts are produced by the retail sector every year, and 95% of
                                    them are unrecyclable and end up in landfills</p>
                            </li>
                            <li><img src="{{ frontimage('tick.png') }}" class="img-fluid" />
                                <p>Paper waste and waste removal contributes to CO2 emissions
                                </p>
                            </li>
                            <li><img src="{{ frontimage('tick.png') }}" class="img-fluid" />
                                <p>Forests and natural woodland areas are destroyed to make way for paper farms for
                                    disposable receipts
                                </p>
                            </li>
                            <li><img src="{{ frontimage('tick.png') }}" class="img-fluid" />
                                <p>Help us to contribute to restore Britain’s natural environment and woodlands
                                </p>
                            </li>
                        </ul><br />
                        <p>
                            We’d love to partner with you to help save our forests.
                        </p>
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
                        <h2 class="wow animate__animated animate__fadeInDown">POS Providers</h2><br />
                        <p class="wow animate__animated animate__fadeInDown">
                            For POS Software Providers and Card Machine Providers
                            Offer cutting-edge digital solutions to your customers to help them significantly cut their
                            costs and improve the sustainability of their operations by partnering with Dijii.
                            <br /><br />
                            With Dijii, retailers can..
                        </p>
                        <ul class="points wow animate__animated animate__fadeInLeft animate__delay-1s">
                            <li><img src="{{ frontimage('checked.png') }}" class="img-fluid" />
                                <p>Reduce operational costs for current clunky systems which need to collect personal
                                    information manually </p>
                            </li>
                            <li><img src="{{ frontimage('checked.png') }}" class="img-fluid" />
                                <p>Save money on paper and staff
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked.png') }}" class="img-fluid" />
                                <p>Reach customers more effectively with push notifications that are tailored to their
                                    purchase history
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked.png') }}" class="img-fluid" />
                                <p>Create a better checkout experience for customers
                                </p>
                            </li>
                            <li><img src="{{ frontimage('checked.png') }}" class="img-fluid" />
                                <p>Access a whole new marketing avenue to help retailers remain relevant
                                </p>
                            </li>
                        </ul><br />
                        <p class="wow animate__animated animate__fadeInUp animate__delay-2s">
                            As customers become more climate-conscious, they are making the choice to support eco-friendly
                            businesses in the UK – give your retailers that edge by offering them a sustainable solution
                            that’s easy to implement and gives them a competitive advantage
                        </p>
                        <div class="button-group wow animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="{{ url('/contact') }}" class="diji-btn">Contact Us</a>
                            <!-- <div class="dropdown">
                                <button class="btn dropdown-toggle diji-btn " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register / Join Us
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('/register-investor') }}">Register As Investor</a>
                                    <a class="dropdown-item" href="{{ url('/register-beta-tester') }}">Register As Beta-Tester</a>
                                    <a class="dropdown-item" href="{{ url('/register-retailer') }}">Register As Retailer</a>
                                    <a class="dropdown-item" href="{{ url('/login') }}">Retailer</a>
                                </div>
                            </div> -->
                            <!-- <a href="#" class="diji-btn">Register Here</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img_box">
                        <figure><img src="{{ frontimage('retailer12.png') }}" class="img-fluid"></figure>
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
                        <figure><img src="{{ frontimage('owner.png') }}" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content_wrapper">
                        <h2 class="wow animate__animated animate__fadeInDown animate__delay-1s">Shopping Centre Owners</h2>
                        <br />
                        <p class="wow animate__animated animate__fadeInLeft animate__delay-2s">
                            Why invest in sustainable retail? Because it’s what customers want.
                            <br /><br />
                            Studies show that customers want to purchase from businesses that operate sustainably and will
                            boycott businesses that are not environmentally responsible.<br /><br />
                            Most shopping centre owners have made sustainability the focal point of their environmental
                            effortswhich they continue to improve. From low energy lighting to rainwater harvesting,
                            planters and composted coffee grinds, it is impressive to see real, tangible practices which
                            reduce the impact their properties have on our climate.

                        </p>
                        <p class="wow animate__animated animate__fadeInRight animate__delay-2s">
                            Some shopping centres have diverted all waste from landfill with much of it being recycled,
                            however, this does not account for the tonnes of paper receipts taken off-site by
                            customers.<br /><br />
                            Dijii enables shopping centres to reduce tonnes of paper waste going into landfill. Dijii’s
                            unique offering presents a competitive advantage to early adopters and enhances the corporate
                            sustainability reputation of the shopping centre.
                        </p>
                        <div class="button-group wow animate__animated animate__fadeInUp animate__delay-3s">
                            <a href="{{ url('/contact') }}" class="diji-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
