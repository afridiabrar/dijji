<!-- Bootstrap CDN -->
<script src="{{ frontjs('jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ frontjs('popper.min.js') }}" type="text/javascript"></script>
<script src="{{ frontjs('bootstrap.min.js') }}" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<!-- Bootstrap CDN -->

<!-- Main Js -->
<script src="{{ frontjs('main.js') }}"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="{{ frontSlick('slick.min.js') }}"></script>
<!-- Slick Slider CDN -->

<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

<!-- Wow Js CDN -->
<script src="{{ frontjs('wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>
<!-- Wow Js CDN -->

<script>
    // Testimonials Js Start Here
    $('.testimonial_slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
    });
    // Testimonials Js End Here
    // Blog Slider Js
    $('.all_blogs').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    // Blog Slider Js
</script>

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6283d7027b967b11798fd942/1g39fvpj8';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> --}}
<!--End of Tawk.to Script-->
<!-- backtotop start-->
<script>
    var btn = $('#backtotop');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
</script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml2');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml2 .letter',
            scale: [4, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70 * i
        }).add({
            targets: '.ml2',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    $('input[type="checkbox"]').change(function() {
        this.value = (Number(this.checked));
    });
</script>
<script>
    $(document).ready(function() {

        // YOUR CODE (NOT RELATED TO DIALOGFLOW MESSENGER)

        window.addEventListener('dfMessengerLoaded', function(event) {
            let $r1 = document.querySelector("df-messenger");
            let $r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
            let $r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); //for other mods

            var sheet = new CSSStyleSheet;
            sheet.replaceSync(`div.chat-wrapper[opened="true"] { height: 450px }`);
            $r2.shadowRoot.adoptedStyleSheets = [sheet];

            // MORE OF YOUR DIALOGFLOW MESSENGER CODE
        });
    });
</script>

<df-messenger intent="WELCOME" chat-title="Diji-Bot" agent-id="9fad1eda-c9cb-4e34-a5bd-02aff88263ae" language-code="en"
    chat-icon="https://t3.ftcdn.net/jpg/03/22/38/32/360_F_322383277_xcXz1I9vOFtdk7plhsRQyjODj08iNSwB.jpg"></df-messenger>
<!-- backtotop end-->


@yield('js')
