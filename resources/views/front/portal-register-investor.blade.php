@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('portal-login.css') }}">


<!-- Stylesheet -->
<!-- Stylesheet -->

<!-- Login As A Tester Sec Start Here -->
<section class="portal-login">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="portal_box">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-investor-tab" data-toggle="pill" href="#pills-investor"
                                role="tab" aria-controls="pills-investor" aria-selected="true">Signup as a Investors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tester-tab" data-toggle="pill" href="#pills-tester" role="tab"
                                aria-controls="pills-tester" aria-selected="false">Signup as a Beta testers</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-investor" role="tabpanel"
                            aria-labelledby="pills-investor-tab">
                            <div class="login_box">
                                <div class="head">
                                    <h2>Signup as a Investors</h2>
                                </div>
                                <form action="">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="button-group">
                                        <button class="btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-tester" role="tabpanel" aria-labelledby="pills-tester-tab">
                            <div class="login_box">
                                <div class="head">
                                    <h2>Signup as a Beta testers</h2>
                                </div>
                                <form action="">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="button-group">
                                        <button class="btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<!-- Login As A Tester Sec End Here -->

@endsection
