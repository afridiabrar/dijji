@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('contact.css') }}">

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->page_title }}</h1>
            </div>
        </div>
    </section>

    <!-- Contact Sec Start Here -->
    <section class="contact_sec">
        <div class="container">
            <div class="heading_wrapper">
                {!! $cmsPage->content !!}

            </div>
            @include('admin.partials.errors')

            <form method="POST" action="{{ url('/submit_ticket') }}" class="form-horizontal" role="form"
                enctype="multipart/form-data" onsubmit="check_if_capcha_is_filled">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" name="fname" pattern="[A-Za-z]" placeholder="First Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" name="lname" pattern="[A-Za-z]" placeholder="Last Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="email" name="email" placeholder="E-mail address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="number" name="phone" placeholder="Phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" name="postcode" placeholder="Postcode" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" name="company_name" placeholder="Company Name"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input required type="text" name="no_store" placeholder="Number Of Stores"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea placeholder="Your message here" name="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="check_boxes">
                            <div class="form-group">
                                <input type="checkbox" required id="frst-check" name="term_condition" value="1"
                                    class="form-control">
                                <label for="frst-check">I have read and accepted the Terms of Use and the Privacy
                                    Policy*</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="check1" id="scnd-check" value="1" class="form-control">
                                <label for="scnd-check">Dijii may keep me informed about its services</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="check2" id="thrd-check" value="1" class="form-control">
                                <label for="thrd-check">I am a potential investor</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="check3" id="frth-check" value="1" class="form-control">
                                <label for="frth-check">I am a retailer or other business</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="action_group">
                            <div class="recaptcha">
                                <div id="g-recaptcha-response" class="g-recaptcha"
                                    data-sitekey="6LfO2sUhAAAAAE_A2-8px_sUF3aA_gUITq-aA9Kz"></div>
                            </div>
                            <div class="button-group">
                                <button class="btn" type="submit">Submit</button>
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
@section('js')
    <script>
        $("form").submit(function(event) {

            var recaptcha = $("#g-recaptcha-response").val();
            if (recaptcha === "") {
                event.preventDefault();
                alert("Please check the recaptcha");
            }
        });
    </script>
@endsection
