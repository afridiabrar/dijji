@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('register.css') }}">


<!-- Stylesheet -->
<!-- Stylesheet -->

<!-- Login Sec Start Here -->
<section class="register_sec">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content_wrapper">
                    <div class="heading_wrapper">
                        <h2>Register</h2>
                        <a href="{{ url('/') }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="wrapper">
                        <h4><span>Welcome to</span> Dijii's Beta-Tester Portal</h4>
                        <p>Already a Member ?<a href="{{ url('/login') }}">Login</a></p>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="First Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Last Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" placeholder="Phone Number" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control testertype">
                                    <option value="">Retailer </option>
                                    <option value="">Individual</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Company Name" class="form-control">
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
                                    <button class="diji-btn"  data-toggle="modal" data-target="#register_modal">Register</button>
                                </div>
                            </div>
                        </div>
                        <div class="privacy">
                            <p>By creating an account, you are agreeing to our <a href="{{ url('/term') }}">Terms of Use</a> and
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
