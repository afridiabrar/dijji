<!-- Footer Start Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="footer_content">
                    <div class="logoDv">
                        <a href="{{ url('/') }}">
                            @if (isset($siteSettings->logo) && adminHasAssets($siteSettings->logo))
                                <figure><img src="{!! asset(uploadsDir() . $siteSettings->logo) !!}" class="img-fluid"></figure>
                            @else
                                <figure><img src="{{ frontimage('ft-logo.png') }}" class="img-fluid"></figure>
                            @endif
                        </a>
                    </div>
                    <ul class="social_icons">







                        @if ($setting->facebook)
                            <li><a href="{{ $setting->facebook ? $setting->facebook : '' }}" target="blank"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($setting->twitter)
                            <li><a target="blank" href="{{ $setting->twitter ? $setting->twitter : '' }}"><i
                                        class="fa fa-twitter" aria-hidden="true"></i>
                                </a></li>
                        @endif

                        @if ($setting->pinterest)
                            <li><a target="blank" href="{{ $setting->pinterest ? $setting->pinterest : '' }}"><i
                                        class="fa fa-instagram" aria-hidden="true"></i>
                                </a></li>
                        @endif
                        @if ($setting->linkedin)
                            <li><a target="blank" href="{{ $setting->linkedin ? $setting->linkedin : '' }}"><i
                                        class="fa fa-linkedin" aria-hidden="true"></i>
                                </a></li>
                        @endif
                        @if ($setting->youtube)
                            <li><a target="blank" href="{{ $setting->youtube ? $setting->youtube : '' }}"><i
                                        class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a></li>
                        @endif
                        @if ($setting->tiktok)
                            <li><a target="blank" href="{{ $setting->tiktok ? $setting->tiktok : '' }}"><img
                                        src="{{ frontimage('tik-tok.png') }}" class="img-fluid tiktok"></a></li>
                        @endif
                    </ul>
                    <p>SEIS and EIS Advance Assurance Status</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <!-- <h5>General</h5> -->
                                <h5>General</h5>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{ url('/register-retailer') }}#how_work">How it Works?</a></li>
                                <li><a href="{{ url('/portal-login-beta') }}">Login</a></li>
                                <li><a href="{{ url('/partners') }}#charity">Charity</a></li>
                                <li><a href="{{ url('/portal-login-investor') }}">Investor Portal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <h5>Quick Links</h5>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{ url('/about-us') }}#faqs">FAQs</a></li>
                                <li><a href="{{ url('/register-investor') }}">Join Now</a></li>
                                <li><a href="{{ url('/register-retailer') }}">For Retailers</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <h5>About Us</h5>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/job') }}">Careers</a></li>
                                <li><a href="{{ url('/about-us') }}#mission">Our Mission</a></li>
                                <li><a href="{{ url('/about-us') }}#newsBlog">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="left">
                <p>© 2022 dijii. All Rights Reserved UK00003726343</p>
            </div>
            <div class="right">
                <ul class="links">
                    <li><a href="{{ url('/cookies') }}">Cookies</a></li>
                    <li class="spacer">|</li>
                    <li><a href="{{ url('/term') }}">Term of Use</a></li>
                    <li class="spacer">|</li>
                    <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End Here -->
