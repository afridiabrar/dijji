<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Site Title -->
<title>{{ ucfirst($cmsPage->meta_title ?? $setting->site_title) }}</title>

<meta name="description" content="{{ $cmsPage->meta_description ?? '' }}">
<meta name="keywords" content="{{ $cmsPage->meta_keywords ?? '' }}">
<!-- Site Title -->

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ frontimage('favicon.png') }}">
<!-- Favicon -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ frontcss('bootstrap.min.css') }}">
<!-- Bootstrap CSS -->

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font Awesome CDN -->

<!-- Slick Slider CDN -->
<link rel="stylesheet" href="{{ frontSlick('slick.css') }}">
<link rel="stylesheet" href="{{ frontSlick('slick-theme.css') }}">
<!-- Slick Slider CDN -->

<!-- Anime.js CDN -->
<link rel="stylesheet" href="{{ frontcss('animate.css') }}">
<!-- Anime.js CDN -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ frontcss('style.css') }}">
<!-- Css Stylesheet -->

@yield('css')
