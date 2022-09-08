@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('blog.css') }}">

    <section class="universal_banner">
        <div class="container">

            <div class="heading_wrapper">
                <h1>{{ $cmsPage->page_title }}</h1>
            </div>

        </div>
    </section>
    <!-- Universal Banner End Here -->

    <!-- Blogs Sec Start Here -->
    <section class="blogs_sec">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_box">
                            <div class="img_box">
                                <figure><img src="{{ asset('uploads/blogs/' . $blog->media) }}" class="img-fluid"></figure>
                                <div class="hover_box"></div>
                            </div>
                            <div class="content_box">
                                <h4>{{ $blog->title }}</h4>
                                <p>
                                    {{ Str::limit(strip_tags($blog->content), 70) }}
                                </p>
                                <a href="{{ url('/blog-detail', $blog->id, $blog->slug) }}" class="lnk">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
