@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('login.css') }}">


    <!-- Stylesheet -->
    <!-- Stylesheet -->

    <!-- Login Sec Start Here -->
    <section class="login_sec">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content_wrapper">
                        <div class="heading_wrapper">
                            <h2>Login</h2>
                            <a href="{{ url('/') }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div class="wrapper">
                            <h4>Welcome Back to Dijii's Portal</h4>
                            <p>Not a Member ?</p>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle diji-btn " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('/register-invester') }}">Register As Investor</a>
                                    <a class="dropdown-item" href="{{ url('/register-beta-tester') }}">Register As Beta-Tester</a>
                                    <a class="dropdown-item" href="{{ url('/register-retailer') }}">Register As Retailer</a>
                                </div>
                            </div>
                            <!-- <p>Not a Member ?<a href="#">Register</a></p> -->
                        </div>
                        <form action="" method="">
                            <div class="btn-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">
                                            <div class="tabs-radio">
                                                Investor
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">
                                            <div class="tabs-radio2">
                                                Beta-Tester
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                            role="tab" aria-controls="contact" aria-selected="false">
                                            <div class="tabs-radio3">
                                                Retailer
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="form-start">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="recaptcha">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LcTc3IgAAAAAEU1FwmPFv5mVygK9mzj0jm3tVG7"></div>

                                            </div>
                                            <div class="button-group">
                                                <button class="diji-btn" type="submit">Login</button>
                                            </div>
                                            <div class="rememberDv">
                                                <div class="form-group">
                                                    <input type="checkbox" id="remember" class="form-control" />
                                                    <label for="remember">Remember Me</label>
                                                </div>
                                                <div class="lnk">
                                                    <a href="{{ url('/forget-password') }}">Forgot Password ?</a>
                                                </div>
                                            </div>
                                            <div class="text-center have_account">
                                                Create an account / join the waiting list
                                                <!-- Already have an account?
                                                <a href="#">Sign in</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="form-start">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="recaptcha">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LcTc3IgAAAAAEU1FwmPFv5mVygK9mzj0jm3tVG7
"></div>

                                            </div>
                                            <div class="button-group">
                                                <button class="diji-btn" type="submit">Login</button>
                                            </div>
                                            <div class="rememberDv">
                                                <div class="form-group">
                                                    <input type="checkbox" id="remember" class="form-control" />
                                                    <label for="remember">Remember Me</label>
                                                </div>
                                                <div class="lnk">
                                                    <a href="{{ url('/forget-password') }}">Forgot Password ?</a>
                                                </div>
                                            </div>
                                            <div class="text-center have_account">Create an account / join the waiting list
                                                <!-- <a href="#">Sign in</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div class="form-start">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="recaptcha">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LcTc3IgAAAAAEU1FwmPFv5mVygK9mzj0jm3tVG7
"></div>

                                            </div>
                                            <div class="button-group">
                                                <button class="diji-btn" type="submit">Login</button>
                                            </div>
                                            <div class="rememberDv">
                                                <div class="form-group">
                                                    <input type="checkbox" id="remember" class="form-control" />
                                                    <label for="remember">Remember Me</label>
                                                </div>
                                                <div class="lnk">
                                                    <a href="{{ url('/forget-password') }}">Forgot Password ?</a>
                                                </div>
                                            </div>
                                            <div class="text-center have_account">Create an account / join the waiting list
                                                <!-- <a href="#">Sign in</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="video_box">
                        <a href="{{ url('/') }}">
                            <video loop="true" autoplay="autoplay" muted="">
                                <source src="{{ frontimage('login.mp4') }}" type="video/mp4">
                                <!-- <source src="movie.ogg" type="video/ogg"> -->
                            </video>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Sec End Here -->
@endsection
