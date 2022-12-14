@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('job.css') }}">

    <style>
        .page-item.active .page-link {
            background-color: #0cecbf;
            border-color: #0cecbf;
        }

        .page-link:focus,
        .page-link:hover,
        .page-link {
            color: #0cecbf;
        }
    </style>
    <!-- Stylesheet -->
    <!-- Stylesheet -->

    <section class="paralax_scroll">
        <!-- Shop Sec Start Here -->
        <section class="shop_sec job_section">
            <!-- Universal Banner Start Here -->
            <section class="universal_banner">
                <div class="container">

                    <div class="heading_wrapper">
                        <h1>{{ $cmsPage->page_title }}</h1>
                    </div>

                </div>
            </section>
            <!-- Universal Banner End Here -->
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-md-9">
                        <div class="filter_dv">
                            <div class="showing_pages">
                                <p>Showing {{ $careers->firstItem() }} - {{ $careers->lastItem() }} of
                                    {{ $careers->total() }} results</p>
                            </div>
                            <div class="filters_btn">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected>Sort by (Default)</option>
                                        <option>Ascending order</option>
                                        <option>Descending order</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected>12 Per Page</option>
                                        <option>16 Per Page</option>
                                        <option>18 Per Page</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row ">
                    <div class="col"></div>
                    <div class="col-lg-9">
                        @foreach ($careers as $career)
                            <div class="job_content mt-3">
                                <div class="row">

                                    <div class="col-md-1">
                                        <div>
                                            <img src="{{ frontimage('favicon.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <p class="job_para">{{ $career->title }}</p>
                                            <p class="job_g_para">{{ $career->salary }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="text-center">
                                            <p class="job_b_para"> {{ $career->experience }}</p>
                                            <div class="job_add_loc">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="job_g_para "> {{ $career->location }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <a href="{{ url('/job-detail', $career->id) }}" class="btn"
                                                {{-- data-toggle="modal" data-target="#exampleModalCenter" --}}>Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="mt-3"> {{ $careers->links() }}
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
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

                                <form method="POST" action="{{ url('/submit-apply-job') }}" class="form-horizontal"
                                    role="form" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <input type="hidden" name="job_id" value="">
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
                                        <a href="" class="btn w-100" data-toggle="modal"
                                            data-target="#exampleModalCenter">Apply</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Sec End Here -->
    </section>
@endsection
