@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.pages.edit', $data) }}
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

                    <form method="POST" action="{{ route('admin.pages.update', $data->id) }}" class="form-horizontal"
                        enctype="multipart/form-data" role="form">
                        @csrf
                        @method('PUT')

                        <input type="hidden" id="page_id" name="id" value="{{ $data->id }}" />
                        <div class="form-group">
                            <label for="page_title" class="col-md-2 control-label">Page Title *</label>
                            <div class="col-md-4">
                                <input type="text" id="page_title" name="page_title" maxlength="190"
                                    value="{{ old('page_title', $data->page_title) }}" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-2 control-label">Content</label>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control ckeditor" maxlength="65000" rows="3">{{ old('content', $data->content) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="media" class="col-md-2 control-label">Media </label>
                            <div class="col-md-4">
                                @if ($data->media != '' && file_exists(uploadsDir('pages/') . $data->media))
                                    <img src="{!! asset('uploads/pages/' . $data->media) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="media" class="form-control" />

                            </div>
                        </div>
                        @if ($data->id == 1)
                            <div class="form-group">
                                <label for="Video" class="col-md-2 control-label">Video </label>
                                <div class="col-md-4">
                                    @if ($data->Video != '' && file_exists(uploadsDir('pages/') . $data->Video))
                                        <video src="{!! asset('uploads/pages/' . $data->video) !!}"></video>
                                    @endif

                                    <input type="file" name="Video" class="form-control" />

                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="content_2" class="col-md-2 control-label">2 Section Content</label>
                            <div class="col-md-8">
                                <textarea name="content_2" class="form-control ckeditor" maxlength="65000" rows="3">{{ old('content', $data->content_2) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="media_2" class="col-md-2 control-label">2 Section Media </label>
                            <div class="col-md-4">
                                @if ($data->media_2 != '' && file_exists(uploadsDir('pages/') . $data->media_2))
                                    <img src="{!! asset('uploads/pages/' . $data->media_2) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="media_2" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content_3" class="col-md-2 control-label">3 Section Content</label>
                            <div class="col-md-8">
                                <textarea name="content_3" class="form-control ckeditor" maxlength="65000" rows="3">{{ old('content', $data->content_3) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="media_3" class="col-md-2 control-label">3 Section Media </label>
                            <div class="col-md-4">
                                @if ($data->media_3 != '' && file_exists(uploadsDir('pages/') . $data->media_3))
                                    <img src="{!! asset('uploads/pages/' . $data->media_3) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="media_3" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content_4" class="col-md-2 control-label">3 Section Content</label>
                            <div class="col-md-8">
                                <textarea name="content_4" class="form-control ckeditor" maxlength="65000" rows="3">{{ old('content', $data->content_4) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="media_4" class="col-md-2 control-label">3 Section Media </label>
                            <div class="col-md-4">
                                @if ($data->media_4 != '' && file_exists(uploadsDir('pages/') . $data->media_4))
                                    <img src="{!! asset('uploads/pages/' . $data->media_4) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="media_4" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-2 control-label">Meta Title</label>
                            <div class="col-md-8">
                                <input id="meta_title" type="text" name="meta_title" maxlength="190"
                                    value="{{ old('meta_title', $data->meta_title) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords" class="col-md-2 control-label">Meta Keywords</label>
                            <div class="col-md-8">
                                <textarea name="meta_keywords" class="form-control" maxlength="65000" rows="3">{{ old('meta_keywords', $data->meta_keywords) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
                            <div class="col-md-8">
                                <textarea name="meta_description" class="form-control" maxlength="65000" rows="3">{{ old('meta_description', $data->meta_description) }}</textarea>
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
                window.location.href = "{!! URL::route('admin.pages.index') !!}";
            });
            var page_id = $("#page_id").val();
        });
    </script>
@stop
