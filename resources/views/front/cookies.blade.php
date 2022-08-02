@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('cookies.css') }}">


<!-- Stylesheet -->

<!-- Universal Banner Start Here -->
<section class="universal_banner">
    <div class="container">
        <div class="heading_wrapper">
            <h1>{{ $cmsPage->pagetitle }}</h1>

        </div>
    </div>
</section>
<!-- Universal Banner End Here -->

<!-- Privacy Sec Start Here -->
<section class="cookies_policy">
    <div class="container">
        <div class="content_wrapper">
            <div class="title">
                <h5>1. Important information and who we are</h5>
            </div><br />
            <p>
                Welcome to Dijii Ltd’s Website Terms of Use (“Terms of Use”). Dijii Ltd is also referred to as “we”,
                “us”, or “our” and User(s) may also be referred to as “you” in these terms and conditions. User means
                any third party that accesses the Website and is not either (i) employed by Dijii Ltd and acting
                in the course of their employment or (ii) engaged as a consultant or otherwise providing services to
                Dijii Ltd and accessing the Website in connection with the provision of such services.<br /><br />
                Information is correct as at 1 April 2022.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>2. General</h5>
            </div><br />
            <p>
                This Website may place and access certain Cookies on your computer. Dijii Ltd uses Cookies to improve
                your experience of using the Website. Dijii Ltd has carefully chosen these Cookies and has taken steps
                to ensure that your privacy is respected at all times.<br /><br />
                All Cookies used by this Website are used in accordance with current UK and EU Cookie Law.<br /><br />
                Before the Website places Cookies on your computer, you will be presented with a message bar requesting
                your consent to set those Cookies. By giving your consent to the placing of Cookies, you are enabling UR
                Dijii Ltd to provide a better experience and service to you. You may, if you wish, deny consent to the
                placing of Cookies; however certain features of the Website may not function fully or as
                intended.<br /><br />This Website may place the following Cookies:
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>3.Consent</h5>
            </div><br />
            <p>
                Like most websites, we use cookies to make our site work while you visit it.We also use cookies to
                remember you, analyse how users use our Website, to personalise content and ads, to provide social media
                features and to analyse our traffic. By choosing "Allow all", you agree to thestoring of all categories
                of cookies on your device. If you wish to reject some or all categories of cookies, please click
                "Customise". If you’d like to know more about Cookies please click About or Dijii’sCookies Policyfor
                further information.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>4. Customise</h5>
            </div><br />
            <p>
                Strictly necessary: To maintain your session whilst you are using our Website<br /><br />
                Analytical/performance cookies: To help us analyse how users use the Website. With solely this
                information, a visitor cannot be identified. Functionality cookies: To identify your computer and allow
                our Website to remember choices visitors make such as user name and language to provide enhanced,
                personalised results. To analyse traffic patterns on our Website.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>5. About</h5>
            </div><br />
            <p>
                Cookies are small text files that can be used by websites to make a user's experience more
                efficient.Please see Dijii’s Cookies Policy for further information.We can store cookies on your device
                if they are strictly necessary for the operation of this site. For all
                <br /><br />
                other types of cookies we need your permission.This site uses different types of cookies. Some cookies
                are placed by third party services that appear on our pages.<br /><br />
                You can at any time change or withdraw your consent from the Cookie Declaration on our website.Learn
                more about who we are, how you can contact us and how we process personal data in our Privacy Policy.
            </p>
        </div>
        <div class="content_wrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type Of Cookie</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Strictly necessary cookies </td>
                            <td>
                                These are cookies that are required for the operation of our website.
                                They include, for example, cookies that enable you to log into secure
                                areas of our website.
                            </td>
                        </tr>
                        <tr>
                            <td>Analytical/performance cookies </td>
                            <td>
                                These allow us to recognise and count the number of visitors and to
                                see how visitors move around our website when they are using it.
                                This helps us to improve the way our website works, for example, by
                                ensuring that users are finding what they are looking for easily.
                            </td>
                        </tr>
                        <tr>
                            <td>Functionality cookies </td>
                            <td>
                                These are used to recognise you when you return to our website.
                                This enables us to personalise our content for you, greet you by
                                name and remember your preferences (for example, your choice of
                                language or region).
                            </td>
                        </tr>
                        <tr>
                            <td>Targeting cookies</td>
                            <td>
                                These cookies record your visit to our website, the pages you have
                                visited and the links you have followed. We will use this information to make our
                                website and the advertising displayed on it more relevant to your interests. We may also
                                share this information with third parties for this purpose
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><br /><br />
            <p>
                You can choose to enable or disable Cookies in your internet browser. By default, most internet browsers
                accept Cookies but this can be changed. For further details, please consult the help menu in your
                internet browser.<br /><br />
                You can choose to delete Cookies at any time; however, you may lose any information that enables you to
                access the Website more quickly and efficiently including, but not limited to, personalization settings.
                It is recommended that you ensure that your internet browser is up-to-date and that you consult the help
                and guidance provided by the developer of your internet browser if you are unsure about adjusting your
                privacy settings.
            </p><br /><br />
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>3. Cookies Schedule</h5>
            </div><br />
            <p>
                We use the following cookies. If this information is not complete or up to date, please let us
                know.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Strictly necessary: Session cookie</td>
                            <td>
                                To maintain your session whilst you are using our
                                Website.
                            </td>
                        </tr>
                        <tr>
                            <td>Analytical/performance cookies:
                                <span>Google Analytics</span>
                                <span>Google</span>
                                <span>Microsoft</span>
                                <span>Apple</span>
                                <span>App Store</span>
                                <span>LinkedIn</span>
                                <span>Microsoft</span>
                                <span>Facebook</span>
                                <span>Instagram</span>
                                <span>Google Play</span>
                            </td>
                            <td>
                                To help us analyse how users use the Website. With
                                solely this information, a visitor cannot be identified.
                            </td>
                        </tr>
                        <tr>
                            <td>Functionality cookies:
                                <span>Google</span>
                                <span>Google Play</span>
                                <span>Apple</span>
                                <span>App Store</span>
                                <span>LinkedIn</span>
                                <span>Microsoft</span>
                                <span>Facebook</span>
                                <span>Instagram</span>
                            </td>
                            <td>
                                To identify your computer and allow our Website to
                                remember choices visitors make such as user name and
                                language to provide enhanced, personalised results. To
                                analyse traffic patterns on our Website.
                            </td>
                        </tr>
                        <tr>
                            <td>Targeting cookies:
                                <span>Google</span>
                                <span>Google Play</span>
                                <span>Apple</span>
                                <span>App Store</span>
                                <span>Microsoft</span>
                                <span>YouTube</span>
                                <span>Facebook</span>
                                <span>Instagram</span>
                                <span>TikTok</span>
                            </td>
                            <td>
                                To enable us to show you adverts while you are browsing our Website and other websites
                                on the internet based on your interests.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>4. More information</h5>
            </div><br />
            <p>
                For more information generally on cookies, including how to disable them, please refer to
                aboutcookies.org. You will also find details on how to delete cookies from your computer.
            </p>
        </div>
    </div>
</section>
<!-- Privacy Sec End Here -->

@endsection
