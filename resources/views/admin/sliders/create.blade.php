@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle ?? '' }} <small></small></h3>
            {{ Breadcrumbs::render('admin.sliders.create') }}
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
                        <i class="fa fa-create"></i> {{ $pageTitle ?? '' }}
                    </div>
                </div>

                <div class="portlet-body">

                    <h4>&nbsp;</h4>

                    <form method="POST" action="{{ route('admin.sliders.store') }}" class="form-horizontal"
                        role="form" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name *</label>
                            <div class="col-md-4">
                                <input type="text" id="name" maxlength="190" name="name"
                                    value="{{ old('name') }}" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="logo" class="col-md-2 control-label">Images </label>
                            <div class="col-md-4">

                                <input type="file" name="image" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logo" class="col-md-2 control-label">Left Image </label>
                            <div class="col-md-4">

                                <input type="file" name="left_image" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logo" class="col-md-2 control-label">Right Image </label>
                            <div class="col-md-4">

                                <input type="file" name="right_image" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Active *</label>
                            <div class="col-md-4">
                                <select class="form-control" name="status">
                                    <option value=""> - Select - </option>
                                    <option value="0" {{ old('0') }}>Deactive</option>
                                    <option value="1" {{ old('1') }}>Active</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" class="btn blue" id="save" value="Save">
                                <input type="button" class="btn black" name="cancel" id="cancel" value="Cancel">
                            </div>
                        </div>
                    </form>
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
            $('#cancel').click(function() {
                window.location.href = "{!! URL::route('admin.sliders.index') !!}";
            });

        });
    </script>
@stop
