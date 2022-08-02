@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('contact.css') }}">


    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
            </div>
        </div>
    </section>


    <!-- Contact Sec Start Here -->
    <section class="contact_sec">
        <div class="container">
            <div class="heading_wrapper">
                {!! $cmsPage->content !!}

            </div>
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="E-mail address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" placeholder="Phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Postcode" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Company Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Number Of Stores" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea placeholder="Your message here" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="check_boxes">
                            <div class="form-group">
                                <input type="checkbox" required id="frst-check" class="form-control">
                                <label for="frst-check">I have read and accepted the Terms of Use and the Privacy
                                    Policy*</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="scnd-check" class="form-control">
                                <label for="scnd-check">Dijii may keep me informed about its services</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="thrd-check" class="form-control">
                                <label for="thrd-check">I am a potential investor</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="frth-check" class="form-control">
                                <label for="frth-check">I am a retailer or other business</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="action_group">
                            <div class="recaptcha">
                                <div class="g-recaptcha" data-sitekey="6LcTc3IgAAAAAEU1FwmPFv5mVygK9mzj0jm3tVG7"></div>
                            </div>
                            <div class="button-group">
                                <button class="btn" type="submit" data-toggle="modal"
                                    data-target="#contact_modal">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Sec End Here -->

    <!-- modal section start here -->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button> -->

    <div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Thank you for registering</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        A member of our team will reply shortly
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
