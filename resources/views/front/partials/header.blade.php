<!-- Header Start Here -->
<header id="header-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-7 col-4">
                <div class="left-content">
                    <div class="logoDv">
                        <a href="index.php">
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
                            <li class="menu-items"><a href="{{ url('/about') }}">About Us</a>
                                <!-- <ul class="dropdown customdrop">
                                    <li class="customtest"><a href="about.php#testimony">Testimony</a></li>
                                </ul> -->
                            </li>
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
                        <div class="plystore">
                            <a href="#">
                                <figure><img src="{{ frontimage('playstore.png') }}" class="img-fluid"></figure>
                            </a>
                        </div>
                        <div class="apple">
                            <a href="#">
                                <figure><img src="{{ frontimage('apple.png') }}" class="img-fluid"></figure>
                            </a>
                        </div>
                    </div>
                    <div class="button-group">
                        <!-- <a href="register.php" class="diji-btn">Register As Tester</a> -->
                        <!-- <a href="login.php" class="diji-btn">Login</a> -->
                        <!-- <div class="dropdown">
                            <button class="btn dropdown-toggle diji-btn "  type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="login.php">Investor</a>
                                <a class="dropdown-item" href="login.php">Beta-Tester</a>
                                <a class="dropdown-item" href="login.php">Retailer</a>
                            </div>
                        </div> -->
                        <div class="dropdown">
                            <button class="btn dropdown-toggle diji-btn " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Register / Join Us
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="register-invester.php">Register As Investor</a>
                                <a class="dropdown-item" href="register-beta-tester.php">Register As Beta-Tester</a>
                                <a class="dropdown-item" href="register-retailer.php">Register As Retailer</a>
                                <!-- <a class="dropdown-item" href="login.php">Retailer</a> -->
                            </div>
                        </div>
                        <a href="login.php" class="diji-btn">Login</a>
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
        <li class="menu_items"><a class="menu_links active_menu" href="index.php">Home</a></li>
        <li class="menu_items"><a class="menu_links" href="about.php">About Us</a></li>
        <li class="menu_items"><a class="menu_links" href="customer.php">Customers</a></li>
        <li class="menu_items"><a class="menu_links" href="retailer.php">Retailers</a></li>
        <li class="menu_items"><a class="menu_links" href="partner.php">Partners</a></li>
        <li class="menu_items"><a class="menu_links" href="contact.php">Contact Us</a></li>
        <li class="menu_items"><a class="menu_links" href="#">Register as tester</a></li>
        <li class="menu_items"><a class="menu_links" href="login.php">Login</a></li>
        <li class="menu_items"><a class="menu_links" href="#">Download from Playstore</a></li>
        <li class="menu_items"><a class="menu_links" href="#">Download from Applestore</a></li>
    </ul>
</div>
<!-- Mobile Header End Here -->

<!-- Messanger Code -->
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat">

</div>
<!-- Messanger Code -->
