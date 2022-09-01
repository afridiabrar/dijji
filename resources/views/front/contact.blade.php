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
            @include('admin.partials.errors')

            <form method="POST" action="{{ url('/submit_query') }}" class="form-horizontal" role="form"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="fname" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="lname" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Phone" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea placeholder="Your message here" name="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="action_group">

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
