@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('about.css') }}">
    <link rel="stylesheet" href="{{ frontcss('blog-detail.css') }}">

    <section class="universal_banner">
        <div class="container">

            <div class="heading_wrapper">
                <h1>{{ $cmsPage->pagetitle }}</h1>
            </div>

        </div>
    </section>
    <section class="blog_detail">
        <div class="container">
            <div class="blog_detail_box">
                <div class="blog_img">
                    <figure><img src="{{ asset('uploads/blogs/' . $blog->media) }}" class="ing-fluid"></figure>
                </div>
                <div class="blog_content">
                    <div class="title">
                        <h2>{{ $blog->title }}</h2>

                    </div>
                    {!! $blog->content !!}
                </div>

            </div>
        </div>
    </section>
@endsection
