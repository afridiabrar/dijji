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
                            <!-- <div class="dropdown">
                                                            <a class="btn dropdown-toggle diji-btn " type="button" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Join Us
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="{{ url('/register-investor') }}">Register As Investor</a>
                                                                <a class="dropdown-item" href="{{ url('/register-beta-tester') }}">Register As Beta-Tester</a>
                                                                <a class="dropdown-item" href="{{ url('/register-retailer') }}">Register As Retailer</a>
                                                                <a class="dropdown-item" href="{{ url('/login') }}">Retailer</a>
                                                            </div>
                                                        </div> -->
                            <a href="{{ url('/register-beta-tester') }}" class="diji-btn">Sign up as a beta tester </a>
                            <a href="#newsletters" class="diji-btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img_box wow animate__animated animate__fadeInRight">
                        <figure><img src="{{ frontimage('laptop.png') }}" class="img-fluid"></figure>
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
                @for ($s = 0; $s < 10; $s++)
                    <div class="blog_box">
                        <div class="video_box">
                            <div class="preview_img">
                                <figure><img src="{{ frontimage('blog1.webp') }}" class="img-fluid"></figure>
                            </div>

                        </div>
                        <div class="content_box">
                            <h4 class="title">Are digital receipts better for
                                privacy?</h4>
                            <div class='blog_btn'>
                                <h5 class="date">Apr 12, 2021</h5>
                                <a href="https://www.receet.me/post/are-digital-receipts-better-for-privacy"
                                    target=_blank>Read
                                    More</a>
                            </div>

                        </div>
                    </div>
                @endfor

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
                @for ($s = 0; $s < 2; $s++)
                    <div class="col-md-4">
                        <div class="team_box frst_box">
                            <div class="front_box">
                                <div class="preview_box">
                                    <div class="img_box">
                                        <figure><img src="{{ frontimage('team1.png') }}" class="img-fluid"></figure>
                                    </div>
                                    <div class="back_box">
                                        <h5>
                                            Victoria brings a wealth of experience from 10 years’ of working with FTSE100
                                            corporates
                                            to
                                            small tech startups, digital platforms, bids and acquisitions, business
                                            services,
                                            and
                                            consulting for early-stage businesses to power growth.
                                        </h5>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Victoria Smallman</h4>
                                    <h5>Founder and CEO</h5>
                                    <a href="https://www.linkedin.com/in/victoria-smallman-4a8b2033/" class="linkedin_sec">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

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
            <div id="accordionOne">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                <h5>How many apps do I need?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="card-body">
                            One app. Dijii.<br />
                            Download Dijii onto your phone from the Google Play store, App store or Amazon store (currently
                            in development).
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <h5>What is a digital receipt?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="card-body">
                            A digital receipt is exactly the same as a paper receipt but smarter, paperless and
                            eco-friendly.
                            It is smarter because you can tap on certain areas of the receipt for more information and links
                            through to relevant offers.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <h5>Are digital receipts legally acceptable as proof of purchase?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="card-body">
                            UK law confirms that digital receipts are equivalent to paper receipts. Retailers that offer
                            Dijii will accept receipts in your Dijii app
                            if you need to return or exchange items.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <h5>How will I get a digital receipt?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionOne">
                        <div class="card-body">
                            There will be three ways to get your digital receipt:<br />
                            <ul class="points">
                                <li>Open the Dijii app on your phone and tap it on the card reader machine at any time
                                    during checkout and before payment
                                </li>
                                <li>Tap your Dijii card on the card reader machine at any time during checkout and before
                                    payment
                                </li>
                                <li>Ask the cashier to scan the QR code in your app
                                </li>
                            </ul>
                            You can also email and scan receipts into the app too.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                <h5>How do I redeem my discounts using Dijii?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionOne">
                        <div class="card-body">
                            Any discounts in your Dijii app can be redeemed according to their terms and conditions in
                            participating retailers.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                <h5>Why choose Dijii rather than emailed receipts?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionOne">
                        <div class="card-body">
                            <div class="wrapper">
                                <h5>Emailed receipts:</h5><br />
                                <p>
                                    Complicate checkout – frustrate and slow the process when exchanging email addresses
                                    which create queues<br />
                                    Chaotic – create inbox chaos with irrelevant, spam marketing and dozens of digital
                                    receipts<br />
                                    Create mistrust – customers don’t want to share their personal information every time
                                    they shop<br />
                                    Non-compliant – unlikely to evidence active opt-in and consent<br />
                                    No additional benefit – doesn’t contribute to charitable environmental
                                    regeneration<br />
                                    Data is sold – Customer data is used and sold by marketing agencies

                                </p>
                            </div><br />
                            <div class="wrapper">
                                <h5>Dijii:</h5><br />
                                <p>
                                    Connects retailers and customers - to create better customer experiences<br />
                                    Privacy - customers are in control of the discounts they want, retailers save money and
                                    target only receptive customers<br />
                                    Convenience – one app used everywhere for all digital receipts, with just a tap at
                                    checkout Dijii won’t slow you down<br />
                                    Cost – Dijii is free for customers and lower cost than paper receipts for
                                    retailers<br />
                                    Data – customer and retailer specific data is never sold by Dijii
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                <h5>How do I use Dijii?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionOne">
                        <div class="card-body">
                            <div class="wrapper">
                                <h5 class="pb-4">Customers:</h5>
                                <p>
                                    Download the FREE Dijii app onto your smartphone from the Google Play store, App store
                                    or Amazon store<br />Sign Up to create a free account.<br />Personalise your
                                    preferences<br />Use Dijii it in participating stores in a number of ways:

                                </p>
                                <ul class="points">
                                    <li>Open the app and tap on the card reader</li>
                                    <li>Use your Dijii contactless card and tap on the card reader</li>
                                    <li>Ask the cashier to scan the QR code in your app</li>
                                </ul>
                            </div>
                            <div class="wrapper">
                                <h5 class="pb-4">See our video ‘How it Works’</h5>
                                <h5 class="pb-4">Retailers:</h5>
                                <p>
                                    Easy sign up and fast integration in 5 steps (in development):
                                </p>
                                <ul class="points">
                                    <li>Contact – Tap Join Us</li>
                                    <li>Discuss - Dijii will be in touch to understand your requirements</li>
                                    <li>Download - Dijii’s web app will be available through most POS software providers and
                                        alternative payment providers – download and subscribe</li>
                                    <li>Integrate – speedy roll out through templated integration e.g. retailer’s dashboard,
                                        receipt customisation template, map of POS terminals</li>
                                    <li>Go Dijii! - Subscribe to the software and start using Dijii!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                                <h5>How do I return or exchange an item with a receipt in my Dijii app?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionOne">
                        <div class="card-body">
                            Return your item as usual in-store, the retailer will scan the barcode at the bottom of your
                            receipt, your receipt will now be void and you will receive a new receipt in your app that
                            reflects the returned item.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine"
                                aria-expanded="false" aria-controls="collapseNine">
                                <h5>Is it possible to upload my loyalty cards to the app?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionOne">
                        <div class="card-body">
                            Yes.<br />
                            Your loyalty cards can be uploaded to the app and the relevant loyalty scheme will be registered
                            with the retailer when you tap Dijii at the checkout so you never again miss the opportunity to
                            collect your loyalty points.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen"
                                aria-expanded="false" aria-controls="collapseTen">
                                <h5>How do I return or exchange an item with a receipt in my Dijii app?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionOne">
                        <div class="card-body">
                            Yes.<br />
                            Your loyalty cards can be uploaded to the app and the relevant loyalty scheme will be registered
                            with the retailer when you tap Dijii at the checkout so you never again miss the opportunity to
                            collect your loyalty points.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEleven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven"
                                aria-expanded="false" aria-controls="collapseEleven">
                                <h5>Where can I use Dijii?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                        data-parent="#accordionOne">
                        <div class="card-body">
                            At all UK participating stores – we are currently speaking with retailers to implement Dijii in
                            their stores from 2023.<br /><br />
                            Some retailers have signed a ‘Paperless Pledge’ to commit to making paper receipts fully
                            optional in their stores by 2023.
                            River Island, Holland & Barrett, and Dunelm were the first retailers to sign the pledge.
                            include a map – as retailers sign up then we can add to it)
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingtwelve">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetwelve"
                                aria-expanded="false" aria-controls="collapsetwelve">
                                <h5>What can I do if my favourite shop is not yet a partner of Dijii?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve"
                        data-parent="#accordionOne">
                        <div class="card-body">
                            Use our chat function to let us know the area, shopping centre and/or stores in which you’d like
                            to use Dijii.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThirteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen"
                                aria-expanded="false" aria-controls="collapseThirteen">
                                <h5>Can I request a paper receipt?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
                        data-parent="#accordionOne">
                        <div class="card-body">
                            Each retailer will have their own receipt policy. The information on digital receipts will
                            contain all of the relevant information you expect to find on a paper receipt.<br /><br />
                            Depending on the retailer:
                            <ul class="steps">
                                <li>- retailers will ask you how you want to receive your receipt – digital or paper - at
                                    the checkout</li>
                                <li>- all receipts will be digital receipts unless specifically asked by the customer for a
                                    paper receipt during checkout </li>
                                <li>- all receipts are digital and you may choose between several options such as store’s
                                    own app, email or Dijii</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFourteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen"
                                aria-expanded="false" aria-controls="collapseFourteen">
                                <h5>How much does Dijii cost?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                        data-parent="#accordionOne">
                        <div class="card-body">
                            Dijii is free to download from the Google Play store, App store or Amazon store for customers.
                            Retailers pay a low-cost subscription fee which enables them to offer this service.
                        </div>
                    </div>
                </div>
            </div>
            <div id="accordionTwo">
                <div class="heading">
                    <h4>Environmental impact</h4>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecOne"
                                aria-expanded="false" aria-controls="collapseSecOne">
                                <h5>How do paper receipts harm the environment?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseSecOne" class="collapse " aria-labelledby="headingSecOne"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            <div class="wrapper">
                                <p>There is a significant environmental need to STOP issuing paper receipts<br />
                                    Every year, paper receipts issued in the UK:</p>
                            </div>
                            <div class="wrapper">
                                <p>Use over 200,000 trees<br />
                                    = equivalent to 222 Sherwood Forests every year</p>
                            </div>
                            <div class="wrapper">
                                <p>Consume 1,600,000,000 litres of water<br />
                                    = 640 Olympic sized swimming pools</p>
                            </div>
                            <div class="wrapper">
                                <p>Create 10,640 tonnes of paper waste<br />
                                    = 886 double decker buses </p>
                            </div>
                            <div class="wrapper">
                                <p>Generate 28,000 tonnes of CO2 carbon dioxide</p>
                            </div>
                            <div class="wrapper">
                                <p>Most paper receipts cannot be recycled because most thermal paper is coated in a toxic
                                    chemical so they end up in landfill.
                                </p>
                            </div>
                            <div class="wrapper">
                                <p>The toxic industrial chemical releases a greenhouse gas and leeches into watercourses
                                    which is harmful to people and the environment.
                                </p>
                            </div>
                            <div class="wrapper">
                                <p>
                                    This information was gathered from www.BeatTheReceipt.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecTwo"
                                aria-expanded="false" aria-controls="collapseSecTwo">
                                <h5>How much storage will it require on my phone?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecTwo" class="collapse" aria-labelledby="headingSecTwo"
                        data-parent="#accordionSecTwo">
                        <div class="card-body">
                            We’re still developing the app but internal storage is expected to be less than 1GB.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecThree"
                                aria-expanded="false" aria-controls="collapseSecThree">
                                <h5>Is my data secure</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecThree" class="collapse" aria-labelledby="headingSecThree"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            We take data protection seriously – here are some of the controls we have and will implement as
                            we grow:
                            <ul class="tick-points">
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Established, industry
                                    leading platform and
                                    database</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Data Protection expert
                                    service support
                                    Dijii
                                </li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Information security
                                    controls</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Secure chips in Dijii cards
                                </li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Firewalls</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Data protection training
                                    for Dijii staff
                                </li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Confidential
                                    cross-shredding</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Authentication for app
                                    sign-in</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Password protected Dijii
                                    systems</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFour"
                                aria-expanded="false" aria-controls="collapseSecFour">
                                <h5>With which security standards does Dijii comply?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFour" class="collapse" aria-labelledby="headingSecFour"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            We use an established and industry-proven provider to ensure information security, cyber
                            security and data protection controls are maintained to protect data from the ever-evolving
                            threats of the digital world.<br /><br />
                            Our staff undertake relevant vetting and training.<br />
                            Our platform and datacentre will be hosted by an established provider, with robust firewalls,
                            and subject to some of the most rigorous security standards. Ideally, ISO27001 compliant for
                            core services.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFive"
                                aria-expanded="false" aria-controls="collapseSecFive">
                                <h5>How can I store my receipts?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFive" class="collapse" aria-labelledby="headingSecFive"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            Receipts will be stored for 2 years.<br />
                            Customers can download their receipts to their devices to utilize their own internal storage to
                            store their receipts.<br />
                            The Crypt feature can be purchased as an in-app purchase for a small fee and can store files for
                            5 or more years.
                        </div>
                    </div>
                </div>
            </div>
            <div id="accordionThree">
                <div class="heading">
                    <h4>Security and storage</h4>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFive5">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFive5"
                                aria-expanded="false" aria-controls="collapseSecFive5">
                                <h5>How long are receipts stored by Dijii?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFive5" class="collapse" aria-labelledby="headingSecFive5"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            Receipts are stored by Dijii for 2 years. Customers can download their receipts to keep in their
                            own storage indefinitely.<br>
                            Download Dijii onto your phone from the Google Play store, App store or Amazon store (currently
                            in development).<br><br>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFive5">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFive6"
                                aria-expanded="false" aria-controls="collapseSecFive6">
                                <h5>How much storage will it require on my phone?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFive6" class="collapse" aria-labelledby="headingSecFive6"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            We’re still developing the app but internal storage is expected to be less than 1GB.

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFive5">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFive7"
                                aria-expanded="false" aria-controls="collapseSecFive7">
                                <h5>Is my data secure</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFive7" class="collapse" aria-labelledby="headingSecFive7"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            We take data protection seriously – here are some of the controls we have and will implement as
                            we grow:
                            <ul class="tick-points">
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Established, industry
                                    leading platform and
                                    database</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Data Protection expert
                                    service support
                                    Dijii
                                </li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Information security
                                    controls</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Secure chips in Dijii
                                    cards</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Firewalls</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Data protection training
                                    for Dijii staff
                                </li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Confidential
                                    cross-shredding</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Authentication for app
                                    sign-in</li>
                                <li><img src="{{ frontimage('tick.png') }}" class="img-fluid"> Password protected Dijii
                                    systems</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFive8">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFive8"
                                aria-expanded="false" aria-controls="collapseSecFive8">
                                <h5>With which security standards does Dijii comply?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFive8" class="collapse" aria-labelledby="headingSecFive8"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            We use an established and industry-proven provider to ensure information security, cyber
                            security and data protection controls are maintained to protect data from the ever-evolving
                            threats of the digital world.<br><br>
                            Our staff undertake relevant vetting and training.<br>
                            Our platform and datacentre will be hosted by an established provider, with robust firewalls,
                            and subject to some of the most rigorous security standards. Ideally, ISO27001 compliant for
                            core services.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSecFive9">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSecFive9"
                                aria-expanded="false" aria-controls="collapseSecFive9">
                                <h5>How can I store my receipts?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSecFive9" class="collapse" aria-labelledby="headingSecFive9"
                        data-parent="#accordionTwo">
                        <div class="card-body">
                            Receipts will be stored for 2 years.<br>
                            Customers can download their receipts to their devices to utilize their own internal storage to
                            store their receipts.<br>
                            The Crypt feature can be purchased as an in-app purchase for a small fee and can store files for
                            5 or more years.

                        </div>
                    </div>
                </div>
            </div>
            <div id="accordionFour">
                <div class="heading">
                    <h4>Miscellaneous</h4>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMisOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMisOne"
                                aria-expanded="false" aria-controls="collapseMisOne">
                                <h5>I have a problem with the app – who do I contact?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseMisOne" class="collapse " aria-labelledby="headingMisOne"
                        data-parent="#accordionFour">
                        <div class="card-body">
                            Please contact us using the chat function or submit a contact form.<br /><br />
                            Once the app is launched, you will also be able to contact us and report a bug through the app.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMisTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMisTwo"
                                aria-expanded="false" aria-controls="collapseMisTwo">
                                <h5>How can I contact Dijii?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseMisTwo" class="collapse" aria-labelledby="headingMisTwo"
                        data-parent="#accordionMisTwo">
                        <div class="card-body">
                            Please contact us through the chat button or contact us through the form on the website.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMisThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMisThree"
                                aria-expanded="false" aria-controls="collapseMisThree">
                                <h5>What charities does Dijii support?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseMisThree" class="collapse" aria-labelledby="headingMisThree"
                        data-parent="#accordionFour">
                        <div class="card-body">
                            UK charities that aim to improve Britain’s environment. Charities such as The Woodland Trust,
                            Trees for Cities, ReWilding Britain are a few.
                            We will choose a charity to support each year and customers can also gain rewards and
                            recognition such as a tree to be planted through various achievements in the app.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMisFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMisFour"
                                aria-expanded="false" aria-controls="collapseMisFour">
                                <h5>What is the difference between discounts and offers?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseMisFour" class="collapse" aria-labelledby="headingMisFour"
                        data-parent="#accordionFour">
                        <div class="card-body">
                            Discounts are deductions from the usual cost of a product that you gain through a loyalty scheme
                            and are redeemed in-store.<br /><br />
                            Offers are promotions of special prices and deductions of the usual price of products and
                            services accessed through Dijii but are not linked to the retailer’s loyalty scheme.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMisFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMisFive"
                                aria-expanded="false" aria-controls="collapseMisFive">
                                <h5>Can I use digital receipts for accounting and tax purposes?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseMisFive" class="collapse" aria-labelledby="headingMisFive"
                        data-parent="#accordionFour">
                        <div class="card-body">
                            HMRC has recently launched the Making Tax Digital service and provides a wide range of digital
                            services and support.<br /><br />
                            Dijii understands that digital receipts can be used for accounting and tax purposes but please
                            also consult HMRC’s website and your finance professional to ensure you are up to date with
                            their rules and requirements.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMisSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMisSix"
                                aria-expanded="false" aria-controls="collapseMisSix">
                                <h5>How does Dijii help me to stay healthy and germ-free?</h5>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseMisSix" class="collapse" aria-labelledby="headingMisSix"
                        data-parent="#accordionFour">
                        <div class="card-body">
                            Dijii’s contactless receipts and discounts help to reduce the spread of infection by removing
                            the transfer of germs on receipts and paper coupons.
                        </div>
                    </div>
                </div>
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
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    The app sounds absolutely incredible
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    Good to see companies taking the environment crisis seriously
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    Great idea and I’m looking forward to it!
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    It sounds very interesting and could make a real difference
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    Great idea, very interested
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    This is a great idea!
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    This seems like a brilliant idea, can’t wait to start using it!
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
                        <div class="testi-slide">

                            <div class="client-review">
                                <p>
                                    I look forward to downloading
                                </p>
                            </div>
                            <div class="client-details">
                                <h4>Survey participant</h4>
                                <h5>2021</h5>
                            </div>
                        </div>
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

    <!-- Landing Banner Sec Start Here -->
    <section class="landing_banner">
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
@endsection
