@extends('front.layouts.app')

@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ frontcss('term.css') }}">


<!-- Stylesheet -->
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
<section class="term_use">
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
                You must be at least 16 years of age to use this Website. By using the Website and agreeing to these
                terms and conditions, you represent and warrant that you are at least 16 years of age.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>2. Intellectual property and acceptable use</h5>
            </div><br />
            <p>
                All Content included on the Website, unless uploaded by Users, is the property of Dijii Ltd, our
                affiliates or other relevant third parties. In these terms and conditions, Content means any text,
                graphics, images, audio, video, software, data compilations, page layout, underlying code and
                software and any other form of information capable of being stored in a computer that appears on or
                forms part of this Website, including any such content uploaded by Users. By continuing to use the
                Website you acknowledge that such Content is protected by copyright, trademarks, database rights and
                other intellectual property rights. Nothing on this site shall be construed as granting, by implication,
                estoppel, or otherwise, any license or right to use any trademark, logo or service mark displayed on the
                site without the owner’s prior written permission.<br /><br />
                You may, for your own personal, non-commercial use only, retrieve, display and view the Content on a
                digital device screen.<br /><br />
                You must not otherwise reproduce, modify, copy, distribute or use for commercial purposes any Content
                without the written permission of Dijii Ltd.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>3. Prohibited use</h5>
            </div><br />
            <p>
                You may not use the Website for any of the following purposes:<br /><br />
            </p>
            <ul class="points">
                <li>I. in any way which causes, or may cause, damage to the Website or interferes with any other
                    person’s use or enjoyment of the Website;
                </li>
                <li>II. in any way which is harmful, unlawful, illegal, abusive, immoral, harassing, threatening or</li>
                <li>II. in any way which is harmful, unlawful, illegal, abusive, immoral, harassing, threatening or
                    otherwise objectionable or in breach of any applicable law, regulation, governmental order; or
                </li>
                <li>III. making, transmitting or storing electronic copies of Content protected by copyright without the
                    permission of the owner and/or Dijii Ltd.
                </li>
            </ul><br />
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>4. Registration</h5>
            </div><br />
            <p>
                You must ensure that the details provided by you on registration or at any time are correct and
                complete. <br /><br />
                You must inform us immediately of any changes to the information that you provide when registering
                by updating your personal details to ensure we can communicate with you effectively.<br /><br />
                We may suspend or cancel your registration with immediate effect for any reasonable purposes or if
                you breach these terms and conditions.<br /><br />
                You may cancel your registration at any time by informing us in writing to the address at the end of
                these terms and conditions. If you do so, you must immediately stop using the Website. Cancellation
                or suspension of your registration does not affect any statutory rights.<br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>5. Privacy Policy and Cookies Policy</h5>
            </div>
            <p>
                Use of the Website is also governed by our Privacy Policy which are incorporated into these terms and
                conditions by this reference. To view the Privacy Policy please click on the following:
                https://www.dijii.co.uk/{{ url('/privacy-policy') }}.
                <br /><br />
            </p>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>6. Availability of the Website and disclaimers</h5>
            </div><br />
            <p>
                Any online facilities, tools, services or information that Dijii Ltd makes available through the Website
                (the Service) is provided “as is” and on an “as available” basis. We give no warranty that the Service
                will be free of defects and/or faults. To the maximum extent permitted by the law, we provide no
                warranties (express or implied) of fitness for a particular purpose, accuracy of information,
                compatibility and satisfactory quality. UR Payment Technologies Ltd is under no obligation to update
                information on the Website.
                <br /><br />
                Whilst Dijii Ltd uses reasonable endeavours to ensure that the Website is secure and free of errors,
                viruses and other malware, we give no warranty or guaranty in that regard and all Users take
                responsibility for their own security, that of their personal details and their computers.<br /><br />
                Dijii Ltd accepts no liability for any disruption or non-availability of the Website.<br /><br />
                Dijii Ltd reserves the right to alter, suspend or discontinue any part (or the whole of) the Website
                including, but not limited to, any products and/or services available. These terms and conditions shall
                continue to apply to any modified version of the Website unless it is expressly stated otherwise.
            </p><br />
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>7. Limitation of liability</h5>
            </div>
            <p>
                Nothing in these terms and conditions will: (a) limit or exclude our or your liability for death or
                personal injury resulting from our or your negligence, as applicable; (b) limit or exclude our or your
                liability for fraud or fraudulent misrepresentation; or (c) limit or exclude any of our or your
                liabilities in any way that is not permitted under applicable law.<br /><br />
                We will not be liable to you in respect of any losses arising out of events beyond our reasonable
                control.<br /><br />To the maximum extent permitted by law, Dijii Ltd accepts no liability for any of
                the following:
            </p>
            <ul class="points">
                <li>
                    I. any business losses, such as loss of profits, income, revenue, anticipated savings, business,
                    contracts, goodwill or commercial opportunities;
                </li>
                <li>
                    II. loss or corruption of any data, database or software; and
                </li>
                <li>
                    III. any special, direct, indirect or consequential loss or damage.
                </li>
            </ul>
        </div><br/><br/>
        <div class="content_wrapper">
            <div class="title">
                <h5>8. General</h5>
            </div><br/>
            <p>
                You may not transfer any of your rights under these terms and conditions to any other person. We may
                transfer our rights under these terms and conditions where we reasonably believe your rights will not be
                affected.<br /><br />
                These terms and conditions may be varied by us from time to time. Such revised terms will apply to the
                Website from the date of publication. Users should check the terms and conditions regularly to ensure
                familiarity with the correct, past or current, version.<br /><br />
                These terms and conditions together with the Privacy Policy contain the whole agreement between
                the parties relating to its subject matter and supersede all prior discussions, arrangements or
                agreements that might have taken place in relation to the terms and conditions.<br /><br />
                The Contracts (Rights of Third Parties) Act 1999shall not apply to these terms and conditions and no
                third party will have any right to enforce or rely on any provision of these terms and
                conditions.<br /><br />
                If any court or competent authority finds that any provision of these terms and conditions (or part of
                any provision) is invalid, illegal or unenforceable, that provision or part-provision will, to the
                extent required, be deemed to be deleted, and the validity and enforceability of the other provisions of
                these terms and conditions will not be affected.<br /><br />
                Unless otherwise agreed, no delay, act or omission by a party in exercising any right or remedy will be
                deemed a waiver of that, or any other, right or remedy.<br /><br />
                This Agreement shall be governed by and interpreted according to the law of England and Wales and all
                disputes arising under the Agreement (including non-contractual disputes or claims) shall be subject to
                the exclusive jurisdiction of the English and Welsh.
            </p><br/>
        </div>
        <div class="content_wrapper">
            <div class="title">
                <h5>9. Dijii Ltd’s details</h5>
            </div><br/>
            <p>
                Dijii Ltd is a company incorporated in England and Wales with registered number 13656102 whose
                registered address is Kemp House, 152 - 160 City Road, London, EC1V 2NX and it operates the Websites
                <a href="www.dijii.co.uk">www.dijii.co.uk</a> and <a href="www.dijii.uk">www.dijii.uk</a>. The
                registered VAT number is 401 3309 56.<br /><br />
                You can contact Dijii Ltd by email on info@dijii.co.uk.
            </p>
        </div>
    </div>
</section>
<!-- Privacy Sec End Here -->
@endsection
