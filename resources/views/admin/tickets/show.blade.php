@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.tickets.show', $data) }}
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">

            @include('admin.partials.errors')

            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-search"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">
                    <h4>&nbsp;</h4>
                    <div class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Ticket no#:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">dt#{{ $data->id }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>First Name:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->fname }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Last Name:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->lname }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Email:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->email }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Phone #:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->phone }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Postcode #:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->postcode }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Company Name :</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->company_name }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Number Of Stores #:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->no_store }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Message:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->message }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong> Dijii may keep me informed about its services
                                    :</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">
                                    {!! $data->check1 ? '<h6 class="alert alert-success">Yes</h6>' : '<h6 class="alert alert-danger">No</h6>' !!}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>I am a potential investor :</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left"> {!! $data->check2 ? '<h6 class="alert alert-success">Yes</h6>' : '<h6 class="alert alert-danger">No</h6>' !!}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>I am a retailer or other business :</strong>
                            </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left"> {!! $data->check3 ? '<h6 class="alert alert-success">Yes</h6>' : '<h6 class="alert alert-danger">No</h6>' !!}</label>
                            </div>
                        </div>

                        @if ($data->reply)
                            <label class="col-md-2 control-label"><strong>Reply</strong>
                            </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left"> {!! $data->reply !!}</label>
                            </div>
                        @else
                            <form method="POST" action="{{ route('admin.tickets.update', $data->id) }}"
                                class="form-horizontal" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="reply" class="col-md-2 control-label">Reply *</label>
                                    <div class="col-md-8">
                                        <textarea name="reply" class="form-control ckeditor" maxlength="65000">{{ old('answer') }}</textarea>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn blue" id="save" value="Save">
                                    </div>
                                </div>
                            </form>
                        @endif


                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn black" id="cancel"
                                    onclick="window.location.href = '{!! URL::route('admin.tickets.index') !!}'">
                                    < Back.. </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@stop

@section('footer-js')
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            Admin.init();
        });
    </script>
@stop
