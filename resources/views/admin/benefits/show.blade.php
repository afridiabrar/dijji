@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.benefits.show', $data) }}
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
                            <label class="col-md-2 control-label"><strong>Point:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->point }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Detail:</strong> </label>
                            <div class="col-md-8">
                                <textarea name="detail" cols="4" rows="4" class="form-control ckeditor" readonly>{{ $data->detail }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Image:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label"><img src="{!! asset('uploads/benefit/' . $data->media) !!}" alt="{!! $data->title !!}"
                                    title="{!! $data->title !!}" style="width: 100px;" />
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Category:</strong> </label>
                            <div class="col-md-8">
                                <td>{!! $data->category ? 'Retailers' : 'Customer' !!}</td>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Status:</strong> </label>
                            <div class="col-md-8">
                                {!! $data->status
                                    ? '<h6 class="alert alert-success">Active</h6>'
                                    : '<h6 class="alert alert-danger">Deactive</h6>' !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn black" id="cancel"
                                    onclick="window.location.href = '{!! URL::route('admin.benefits.index') !!}'">
                                    < Back..</button>
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
