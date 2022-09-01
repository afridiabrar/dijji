@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.benefits.edit', $data) }}
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
                        <i class="fa fa-edit"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <h4>&nbsp;</h4>

                    <form method="POST" action="{{ route('admin.benefits.update', $data->id) }}" class="form-horizontal"
                        role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="point" class="col-md-2 control-label">Point *</label>
                            <div class="col-md-8">
                                <input type="text" name="point" value="{{ old('point', $data->point) }}"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="detail" class="col-md-2 control-label">Detail *</label>
                            <div class="col-md-8">
                                <textarea name="detail" class="form-control ckeditor" maxlength="65000">{{ old('detail', $data->detail) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="media" class="col-md-2 control-label">Media </label>
                            <div class="col-md-4">
                                @if ($data->media != '' && file_exists(uploadsDir('benefit/') . $data->media))
                                    <img src="{!! asset('uploads/benefit/' . $data->media) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="media" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-md-2 control-label">Category *</label>
                            <div class="col-md-8">
                                <select class="form-control" name="category">
                                    <option value=""> - Select - </option>
                                    <option value="1"
                                        {{ old('category', $data->category) == '1' ? 'selected="selected"' : '' }}>Retailer
                                    </option>
                                    <option value="0"
                                        {{ old('category', $data->category) == '0' ? 'selected="selected"' : '' }}>Customer
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Status *</label>
                            <div class="col-md-4">
                                <select class="form-control" name="status">
                                    <option value=""> - Select - </option>
                                    <option value="1"
                                        {{ old('status', $data->status) == '1' ? 'selected="selected"' : '' }}>Active
                                    </option>
                                    <option value="0"
                                        {{ old('status', $data->status) == '0' ? 'selected="selected"' : '' }}>Blocked
                                    </option>
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
                window.location.href = "{!! URL::route('admin.benefits.index') !!}";
            });
        });
    </script>
@stop
