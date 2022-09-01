<!-- Header Start Here -->
<header id="header-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-7 col-4">
                <div class="left-content">
                    <div class="logoDv">
                        <a href="{{ url('/') }}">
                            @if ($siteSettings->gif_logo && adminHasAssets($siteSettings->gif_logo))
                                <figure><img width="180" src="{!! asset(uploadsDir() . $siteSettings->gif_logo) !!}"></figure>
                            @else
                                <figure><img width="180" src="{{ frontimage('logo.gif') }}"></figure>
                            @endif
                        </a>
                    </div>
                    <div class="navbar_menus">
                        <ul class="menus">
                            <li class="menu-items"><a href="{{ url('/') }}">Home</a></li>
                            <li class="menu-items"><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li class="menu-items"><a href="{{ url('/customers') }}">Customers</a></li>
                            <li class="menu-items"><a href="{{ url('/retailers') }}">Retailers</a></li>
                            <li class="menu-items"><a href="{{ url('/partners') }}">Partners</a></li>
                            <li class="menu-items"><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-8">
                <div class="right_content">
                    <div class="download_from">
                        @if ($setting->playstore_link)
                            <div class="plystore">
                                <a href="{{ $setting->playstore_link ? $setting->playstore_link : '' }}">
                                    <figure><img src="{{ frontimage('playstore.png') }}" class="img-fluid"></figure>
                                </a>
                            </div>
                        @endif
                        @if ($setting->appstore_link)
                            <div class="apple">
                                <a href="{{ $setting->appstore_link ? $setting->appstore_link : '' }}">
                                    <figure><img src="{{ frontimage('apple.png') }}" class="img-fluid"></figure>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="button-group">

                        <div class="dropdown">
                            <button class="btn dropdown-toggle diji-btn " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Register / Join Us
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('/register-investor') }}">Register As
                                    Investor</a>
                                <a class="dropdown-item" href="{{ url('/register-beta-tester') }}">Register As
                                    Beta-Tester</a>
                                <a class="dropdown-item" href="{{ url('/register-retailer') }}">Register As
                                    Retailer</a>
                                <!-- <a class="dropdown-item" href="{{ url('/login') }}">Retailer</a> -->
                            </div>
                        </div>
                        <a href="{{ url('/login') }}" class="diji-btn">Login</a>
                    </div>
                    <div class="canvas_btn">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="backtotop"></a>
</header>
<!-- Header End Here -->

<!-- Go To Top Button -->
<!-- <div class="go_to_top">
    <a href="#header-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div> -->
<!-- Go To Top Button -->

<!-- Mobile Header Start Here -->
<div class="mobile_header">
    <div class="cancel">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000" class="bi bi-x"
            viewBox="0 0 16 16">
            <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
    </div>
    <ul class="mobile_menus">
        <li class="menu_items"><a class="menu_links active_menu" href="{{ url('/') }}">Home</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ url('/about-us') }}">About Us</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ url('/customers') }}">Customers</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ url('/Retailers') }}">Retailers</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ url('/partners') }}">Partners</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ url('/contact') }}">Contact Us</a></li>
        <li class="menu_items"><a class="menu_links" href="#">Register as tester</a></li>
        <li class="menu_items"><a class="menu_links" href="{{ url('/login') }}">Login</a></li>

        @if ($setting->playstore_link)
            <li class="menu_items"><a class="menu_links"
                    href="{{ $setting->playstore_link ? $setting->playstore_link : '' }}">Download from Playstore</a>
            </li>
        @endif
        @if ($setting->appstore_link)
            <li class="menu_items"><a class="menu_links"
                    href="{{ $setting->appstore_link ? $setting->appstore_link : '' }}">Download from Applestore</a>
            </li>
        @endif
    </ul>
</div>
<!-- Mobile Header End Here -->

<!-- Messanger Code -->
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat">

</div>
<!-- Messanger Code -->
