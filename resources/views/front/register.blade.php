@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('register.css') }}">


    <!-- Stylesheet -->

    <!-- Login Sec Start Here -->
    <section class="register_sec">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content_wrapper">
                        <div class="heading_wrapper">
                            <h1>{{ $cmsPage->pagetitle }}</h1>
                            <a href="{{ url('/') }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div class="wrapper">
                            {!! $cmsPage->content !!}
                            <p>Already a Member ?<a href="{{ url('/login') }}">Login </a> / </p>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle diji-btn " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('/register-beta-tester') }}">Register As
                                        Beta-Tester</a>
                                    <a class="dropdown-item" href="{{ url('/register-retailer') }}">Register As Retailer</a>
                                </div>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="f-name" placeholder="First Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="l-name" placeholder="Last Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" name="phone" placeholder="Phone Number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="company_name" placeholder="Company Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="recaptcha">
                                        <div class="g-recaptcha" data-sitekey="6LcTc3IgAAAAAEU1FwmPFv5mVygK9mzj0jm3tVG7">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="button-group">
                                        <button class="diji-btn" data-toggle="modal"
                                            data-target="#register_modal">Register</button>
                                    </div>
                                </div>
                            </div>
                            <div class="privacy">
                                <p>By creating an account, you are agreeing to our <a href="{{ url('/term') }}">Terms of
                                        Use</a> and
                                    <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <a href="{{ url('/') }}">
                        <div class="video_box">
                            <video loop="true" autoplay="autoplay" muted="">
                                <source src="{{ frontimage('login.mp4') }}" type="video/mp4">
                                <!-- <source src="movie.ogg" type="video/ogg"> -->
                            </video>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Sec End Here -->

    <!-- modal section start here -->

    <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                        A member of our team will validate your account and email you to set your
                        account password.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- modal section edn here -->
@endsection
