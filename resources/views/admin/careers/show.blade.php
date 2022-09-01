@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.careers.show', $data) }}
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
                            <label for="title" class="col-md-2 control-label">Title *</label>
                            <div class="col-md-4">
                                <input type="text" id="title" name="title" readonly maxlength="190"
                                    value="{{ old('title', $data->title) }}" class="form-control" />
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="slug" class="col-md-2 control-label">Slug *</label>
                            <div class="col-md-4">
                                <input id="slug" type="text" name="slug" maxlength="190"
                                    value="{{ old('slug', $data->slug) }}" class="form-control" />
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Location *</label>
                            <div class="col-md-4">

                                <input type="text" id="name" name="name" readonly maxlength="190"
                                    value="{{ old('name', $data->location) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="experience" class="col-md-2 control-label">Experience *</label>
                            <div class="col-md-4">
                                <input type="text" id="experience" name="experience" readonly maxlength="190"
                                    value="{{ old('experience', $data->experience) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="salary" class="col-md-2 control-label">Salary *</label>
                            <div class="col-md-4">
                                <input type="text" id="salary" name="salary" readonly maxlength="190"
                                    value="{{ old('salary', $data->salary) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-md-2 control-label">Content</label>
                            <div class="col-md-8">
                                {!! $data->content !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn black" id="cancel"
                                    onclick="window.location.href = '{!! URL::route('admin.careers.index') !!}'">
                                    < Back..</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END CAREER CONTENT-->
@stop

@section('footer-js')
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            Admin.init();
        });
    </script>
@stop
