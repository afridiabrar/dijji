@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('career_detail.css') }}">

    <!-- Stylesheet -->
    <!-- Stylesheet -->

    <!-- Universal Banner Start Here -->
    <section class="universal_banner">
        <div class="container">
            <div class="heading_wrapper">
                <h1>{{ $cmsPage->page_title }}</h1>
            </div>
        </div>
    </section>
    <!-- Universal Banner End Here -->

    <!-- Privacy Sec Start Here -->
    <div class="container">
        @include('admin.partials.errors')

        <section class="career_detail_sec">
            <div class="career-detail">
                <h2>{{ $career->title }}</h2>

                <div class="apply-btn">
                    <a href="#">
                        <button class="btn" data-toggle="modal" data-target="#careerdetail_center">Apply Now</button>
                    </a>
                </div>
            </div>
            <div class="career-dollar">
                <p><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> {{ $career->experience }}</p>
                <p><i class="fa fa-usd mr-2" aria-hidden="true"></i> {{ $career->salary }}/Month</p>
                <p><i class="fa fa-map-marker mr-2" aria-hidden="true"></i> {{ $career->location }}</p>
            </div>
            <div class="career_detail_para">
                {!! $career->content !!}
            </div>
        </section>
    </div>
    <!-- Modal -->
    <div class="modal fade career_detail_modal" id="careerdetail_center" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <p class="aftj">Apply For This Job</p>
                        </div>
                        <form method="POST" action="{{ url('/submit-apply-job') }}" class="form-horizontal" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name <small>(Alphabet only)</small> *</label>
                                        <input type="hidden" name="job_id" value="{{ $career->id }}">

                                        <input type="text" name="fname" pattern="[A-Za-z]" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Julia"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name* <small>(Alphabet only)</small></label>
                                        <input type="text" name="lname" pattern="[A-Za-z]" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Julia"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label for="exampleInputEmail1">Email*</label>
                                        <input type="email" name="email" class="form-control" id="inputemail"
                                            aria-describedby="emailHelp" placeholder="you@example.com" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="number" name="phone" class="form-control" id="inputmobile"
                                            aria-describedby="emailHelp" placeholder="Mobile Number">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group"><label for="exampleInputEmail1">Phone Number</label><input
                                            type="tel" name="phone" class="form-control" id="inputnum"
                                            aria-describedby="emailHelp" placeholder="Phone Number"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Job Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="123456789"> -->
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Your Message*</label>
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Type here"
                                            style="height: 60px;" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row align-items-center">
                                        <div class=" col-md-6 col-xs-6">
                                            <div class="avatar-edit">
                                                <label for="imageUpload">Upload Your CV</label>
                                                <input type="file" name="media" id="imageUpload" required>
                                            </div>
                                        </div>
                                        <div class="contactus-form-btn col-md-6 col-xs-6 text-right">
                                            <small>Max Size 5mb</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group mt-4">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-xs-12">
                                                                                                                        <input type="hidden" name="job_id" value="{{ $career->id }}">
                                                                                                                        <input type="text" class="form-control" id="inputPass" name="fullname"
                                                                                                                            placeholder="Full name" required >
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group mt-4">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-xs-12">
                                                                                                                        <input type="email" class="form-control" id="inputemail" name="email"
                                                                                                                            placeholder="Email Address" required >
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group mt-4">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-xs-12">
                                                                                                                        <input type="tel" class="form-control" id="inputPno" name="phone"
                                                                                                                            placeholder="Phone Number" required >
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row align-items-center">
                                                                                                                <div class=" col-md-6 col-xs-6">
                                                                                                                    <div class="avatar-edit">
                                                                                                                        <label for="imageUpload">Upload Your CV</label>
                                                                                                                        <input type="file" name="media" id="imageUpload">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="contactus-form-btn col-md-6 col-xs-6 text-right">
                                                                                                                    <small>Max Size 5mb</small>
                                                                                                                </div>
                                                                                                            </div> -->
                            <div class="text-center mt-3 mb-3">
                                <button class="btn w-100" type="submit">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Sec End Here -->
@endsection
