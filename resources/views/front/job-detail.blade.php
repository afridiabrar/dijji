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
                <h1>{{ $cmsPage->pagetitle }}</h1>
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
                            <div class="form-group mt-4">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="hidden" name="job_id" value="{{ $career->id }}">
                                        <input type="text" class="form-control" id="inputPass" name="fullname"
                                            placeholder="Full name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="email" class="form-control" id="inputemail" name="email"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="tel" class="form-control" id="inputPno" name="phone"
                                            placeholder="Phone Number" required>
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
                            </div>
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
