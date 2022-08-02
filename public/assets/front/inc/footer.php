<!-- Footer Start Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="footer_content">
                    <div class="logoDv">
                        <a href="{{ url('/') }}">
                            <figure><img src="img/ft-logo.png" class="img-fluid"></figure>
                        </a>
                    </div>
                    <ul class="social_icons">
                        <li><a href="https://www.linkedin.com/company/dijii/"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/DijiiUK"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/DijiiUK"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/dijiiuk/"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCV-27HsfTd64UPxm5sV0uZQ"><i
                                    class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.tiktok.com/@dijiiuk"><img src="img/tik-tok.png" class="img-fluid tiktok"></a>
                        </li>
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
                                <li><a href="{{ url('/register-retailers') }}#how_work">How it Works?</a></li>
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
                                <li><a href="about.php#faqs">FAQs</a></li>
                                <li><a href="{{ url('/register-investor') }}">Join Now</a></li>
                                <li><a href="{{ url('/register-retailers') }}">For Retailers</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <h5>About Us</h5>
                            </div>
                            <ul class="footer-links">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="{{ url('/job') }}">Careers</a></li>
                                <li><a href="about.php#mission">Our Mission</a></li>
                                <li><a href="about.php#newsBlog">Blogs</a></li>
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

<!-- Footer Links Include -->
<?php include 'inc/footerlinks.php';?>
<!-- Footer Links Include -->
