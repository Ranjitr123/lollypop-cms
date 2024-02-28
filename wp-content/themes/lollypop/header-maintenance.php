<!DOCTYPE html>
<html lang="en" data-page="home">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W8J8Y4T75L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-W8J8Y4T75L');
    </script>

    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-TQBBF4Z');
    </script>

    <!-- End Google Tag Manager -->

    <!-- Hotjar Tracking Code for https://lollypop.design/ -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3603345,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <?php if (get_field('keywords')) : ?>
        <meta name="keywords" content="<?php the_field('keywords') ?>">
    <?php endif; ?>
    <?php get_template_part('meta', 'keywords'); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="2S5zY3O27y--xTYUltuRrhmNpZdpn5bqNPVrqqfXTa8" />
    <!--<link rel="shortcut icon" type="image/svg" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/lollypop-logo.svg" alt="Image">-->
    <link rel="shortcut icon" type="image/svg" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/Path.svg" alt="Image">
    <link rel="shortcut icon" type="image/svg" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/Mobile-Favicon.png" alt="Image">
    <link rel="shortcut icon" type="image/svg" sizes="18x18" href="<?php echo get_template_directory_uri(); ?>/img/Mobile-Favicon.png" alt="Image">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/Path.svg" alt="Image">

    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/services/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/design-audit" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/usability-testing/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/ux-research/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/illustrations/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/data-visualization/" />
    <link rel="alternate" hreflang="en-us" rel="alternate" href="https://lollypop.design/ui-ux-design-agency-in-usa/" hreflang="en-us">
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/industries/fintech" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/industries/enabling-growth-in-edtech/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/industries/telecom/" />
    <link rel="alternate" hreflang="en-us" href="https://lollypop.design/projects/knowledgehut/" />

    <!-- Google new tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42458763-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-42458763-1');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        var menu = document.getElementById('drop-menu');

        // Add an event listener to the document
        document.addEventListener('click', function(event) {

            // Check if the clicked element is outside of the menu
            if (!menu.contains(event.target)) {
                // If so, hide the menu
                menu.style.display = 'none';
            }
        });
    </script>

    <!-- translate button end -->


    <!---css---------->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap">
    </noscript>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel='stylesheet' href='https://lollypop.design/wp-content/themes/lollypop/css/Designathon.css' type='text/css' media='all' />
    <link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/swiper-bundle.min.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel='stylesheet' id='swifer-css' href='https://lollypop.design/wp-content/themes/lollypop/css/swiper-bundle.min.css?ver=5.9' type='text/css' media='all' />
    </noscript>
    <link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/aos.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel='stylesheet' id='aos-css' href='https://lollypop.design/wp-content/themes/lollypop/css/aos.css?ver=5.9' type='text/css' media='all' />
    </noscript>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel='stylesheet' id='main-css' href="<?php echo get_template_directory_uri(); ?>/css/main.css" type='text/css' media='all' />
    </noscript>
    <link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/plyr.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel='stylesheet' id='plyr-css' href='https://lollypop.design/wp-content/themes/lollypop/css/plyr.css?ver=5.9' type='text/css' media='all' />
    </noscript>
    <link rel="preload" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-css.css">


    <style>
        .fnt-100 {
            font-size: 32px;
            line-height: 42px;
            letter-spacing: -2px;
        }

        @media (min-width: 768px) {
            .fnt-100 {
                font-size: 70px;
                line-height: 75px;
                letter-spacing: -2px;
            }

            .sec-last1 {
                padding-bottom: 25px !important;
            }
        }

        @media (min-width: 992px) {
            .fnt-100 {
                font-size: 80px;
                line-height: 85px;
                letter-spacing: -4px;
            }
        }

        @media (min-width: 1200px) {
            .fnt-100 {
                font-size: 100px;
                line-height: 104px;
                letter-spacing: -4px;
            }
        }

        .fnt-100 {
            font-size: 32px;
            line-height: 42px;
            letter-spacing: -2px;
        }

        @media (min-width: 768px) {
            .fnt-100 {
                font-size: 70px;
                line-height: 75px;
                letter-spacing: -2px;
            }


        }

        /* dropdown */
        @media(max-width:768px) {
            .secut {
                display: none;
            }

            .secut-res label {
                color: #221429 !important;
            }

            .sec-last1 {
                padding-bottom: 25px !important;
            }

        }

        @media (min-width: 992px) {
            .fnt-100 {
                font-size: 80px;
                line-height: 85px;
                letter-spacing: -4px;
            }
        }

        @media (min-width: 1200px) {
            .fnt-100 {
                font-size: 100px;
                line-height: 104px;
                letter-spacing: -4px;
            }
        }

        .lp-mainheader--white .header-nav .nav-item:last-of-type a::after {
            background-color: #fff !important;
        }

        .h-transparent .header-nav .nav-item:last-of-type a {
            color: #fd2e35 !important;
        }

        .h-transparent .header-nav .nav-item:last-of-type a::after {
            background-color: #fd2e35 !important;
        }

        .drop-clr,
        .drop-white {
            position: absolute;
            right: -9px;
        }

        #myDIV,
        #myDIV1 {
            display: none;
            position: absolute;
            top: 30px;
            width: 180px;
            left: 35px;
        }

        .dropdown-ver {
            align-items: center;
            justify-content: flex-end;
        }

        .triangle {
            display: inline-block;
            margin: 0 5px;
            vertical-align: middle;
            box-sizing: border-box;

        }

        .langue-container {
            background-color: #FFFFFF;
            position: relative;
            padding: 10px;
            border-radius: 5px;
            width: 131px;
            right: -50px;
            top: -4px;
        }

        .triangle-4 {
            width: 0px;
            height: 0px;
            border-bottom: solid 15px #FFFFFF;
            border-left: solid 15px transparent;
            border-right: solid 15px transparent;
            position: relative;
            left: 35%;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked+label,
        [type="radio"]:not(:checked)+label {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: black;
        }

        [type="radio"]:checked+label:before,
        [type="radio"]:not(:checked)+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            border: 2px solid #221429;
            border-radius: 100%;
            background: #fff;
        }

        [type="radio"]:checked+label:after,
        [type="radio"]:not(:checked)+label:after {
            content: '';
            width: 8px;
            height: 8px;
            background: black;
            position: absolute;
            top: 5px;
            left: 5px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked)+label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked+label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .dropdown-ver a ::after {
            background-image: url('https://terralogic.com/wp-content/uploads/2023/02/Icon.svg');
            content: "";
            width: 20px;
            height: 100%;
            width: 100%;
            position: absolute;
            background-repeat: no-repeat;
            top: 3px;
            background-size: 15px 10px;
            background-position: left;
            left: 30px;
        }

        .dropdown-ver a {
            position: relative;
        }

        .dropdown-ver a p {
            margin-bottom: 0rem;
            font-weight: 600;
            margin-top: 6px;
        }

        @media (max-width: 768px) {
            #myDIV {
                left: 8px;
                width: 150px;
            }

            .triangle {
                margin: 0 15px;

            }

            .triangle-4 {
                width: 0px;
                height: 0px;
                bottom: 6px;
                border-bottom: solid 15px #FFFFFF;
                border-left: solid 15px transparent;
                border-right: solid 15px transparent;
                position: relative;
                left: -2%;
            }

            .button-up,
            .button-down {
                position: absolute;
                padding: 5px;
                margin: 30px auto;
                background: rgba(255, 255, 255, 0.8);
                height: 35px !important;
                width: 35px !important;
                border-radius: 50%;
                transition: all 0.2s linear;
                top: 21% !important;
            }

            .button-up::after,
            .button-down::after {
                content: "";
                position: absolute;
                left: 0px;
                z-index: 11;
                display: block;
                width: 11px !important;
                height: 11px !important;
                border-top: 2px solid #FD2E35;
                border-left: 2px solid #FD2E35;
            }

            .button-up::after {
                top: 12px !important;
                transform: rotate(135deg);
                left: 11px !important;
            }

            .button-down::after {
                top: 12px !important;
                transform: rotate(-45deg);
                left: 14px !important;
            }

            .vitanam-slider h4 {
                line-height: 38px;
                font-size: 22px !important;
            }

            .langue-container {
                background-color: #FFFFFF;
                position: relative;
                border-radius: 5px;
                margin-top: -15px;
                padding: 10px;
                width: 104px;
                left: -5px;
            }

            .langue-container form label {
                font-size: 12px;
                line-height: 16px;
            }

            type="radio"]:checked+label:after,
            [type="radio"]:not(:checked)+label:after {
                content: '';
                width: 6px;
                height: 6px;
                background: black;
                position: absolute;
                top: 5px;
                left: 5px;
                border-radius: 100%;
                -webkit-transition: all 0.2s ease;
                transition: all 0.2s ease;
            }

            [type="radio"]:checked+label:before,
            [type="radio"]:not(:checked)+label:before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                width: 16px;
                height: 16px;
                border: 2px solid #221429;
                border-radius: 100%;
                background: #fff;
            }

            .secut {
                top: 4% !important;
                right: 28% !important;
            }
        }

        .secut {
            position: fixed;
            top: 10%;
        }

        .hr-1 {
            border-bottom: 1px solid #F7F4F2;
            padding: 2px;
        }



        /* global button */
        .global-drop .dropdown-ver a ::after {
            background-image: url('https://lollypop.design/wp-content/uploads/2023/04/chevron1.svg');
            left: 60px !important;
            background-size: 10px 10px !important;
        }

        .global-drop .dropdown-ver a p {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 19px;
            color: #FD2E35;
            padding-left: 12px;
        }

        .global-drop .langue-container {

            position: relative;
            padding: 16px;
            border-radius: 5px;
            width: 240px;
            top: 20px;
            border-radius: 10px;
            right: inherit;
            left: 10px;
        }

        .global-drop .langue-container ul {
            padding: 0px;
        }

        .global-drop .langue-container ul li {}

        .global-drop .langue-container ul li h6 {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 160%;
            color: #221429;
            margin-bottom: 4px;
        }

        .global-drop .langue-container ul li p {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 160%;
            color: #877C88;
            margin-bottom: 12px;
        }

        .global-drop .langue-container ul hr {
            margin: 12px 0;
            color: inherit;
            border: 0;
            opacity: .25;
            background: #F7F5F3;
        }

        .global-drop .dropdown-ver {
            align-items: center;
            justify-content: flex-start;
        }

        .global-drop #myDIV {
            width: inherit;
            background-color: unset;
            left: inherit;
        }

        .global-drop .secut {
            right: inherit !important;
            top: inherit !important;
        }

        /* .global-drop{margin-left:1rem;} */
        @media (max-width: 767px) {
            .lp-hamberg {
                transform: translate(0px, -100%) !important;
            }
        }

        .secut {
            display: block;
        }
    </style>

    <!-- global button -->
    <script>
        $(document).off("mouseup").on("mouseup", function(e) {
            var container = $('.global-drop .dropdown-content');
            var menu = $('.global-drop #drop-menu');
            if (!menu.is(e.target) && menu.has(e.target).length === 0 && !container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });

        $(document).ready(function() {
            $(".global-drop #drop-menu").off("click").on("click", function() {
                var dropdownContent = $(".global-drop .dropdown-content");
                if (dropdownContent.is(":visible")) {
                    dropdownContent.hide();
                } else {
                    dropdownContent.show();
                }
            });

            $(window).scroll(function() {
                var dropdownContent = $(".global-drop .dropdown-content");
                if (dropdownContent.is(":visible")) {
                    dropdownContent.hide();
                }
            });
        });

        $(window).scroll(function() {
            $('.scroll-hide').css('display', 'block');
            if ($(this).scrollTop() > 50) {
                $('.scroll-hide').fadeOut();
                $('.scroll-hide').css('display', 'none');
            } else {
                $('.scroll-hide').fadeIn();
                $('.scroll-hide').css('display', 'block');
            }
        });
    </script>

</head>




<?php
$args = array(
    'post_type' => 'header',
    'posts_per_page' => 1,

);
$header = new WP_Query($args);

?>

<header class="header">
    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-11 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-1 js-toggle d-flex justify-content-center align-items-center"> 
                        <a class="logo-header pz-2 d-flex align-items-center" href="<?php echo site_url(); ?>">
                        <i class="icon-lollypop"></i>
                    </a></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="desktop-menu clearfix">
    <div class="desktop-menu__redbg">
        <div class="desktop-menu__item">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-lg-11 col-xl-10 col-xxl-9 h-100 pd-lg mx-auto postion-relative">
                        <div class="row h-lg-100 align-items-center">
                            <div class="col-12">
                                <div class="d-flex flex-wrap justify-content-md-between center-menu-pd">
                                    <div class="main-links hvr-div hvr-m pe-5 ps-md-0 d-flex flex-column">
                                        <div>
                                            <a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>">home</a>
                                        </div>
                                        <div><a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/services/">services</a></div>
                                        <div> <a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/projects/">projects</a></div>
                                        <div><a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/industries/">Industries</a></div>
                                        <div><a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/about/">About Us</a></div>
                                    </div>
                                    <div class="main-links main-links--sub d-md-flex flex-column">
                                        <!-- For Desktop-->
                                        <div class="hvr-div mt-md-auto mb-lg-1 d-none d-md-flex ps-xl-4 justify-content-between sec-last1">
                                            <div class="d-md-flex hvr-m flex-column">
                                                <div>
                                                    <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/process/">Process</a>
                                                </div>
                                                <div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/clients/">Clients</a></div>
                                                <div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/careers/">Careers</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/blogs/">Blogs</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/whitepapers/">White Papers</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/contact/">Contact Us</a></div>
                                            </div>
                                            <div class="d-md-flex hvr-m flex-column justify-content-end">
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/telecom/">Telecom</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enabling-growth-in-edtech/">Edtech</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/fintech/">Fintech</a></div>
                                                <div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/healthcare/">Healthcare</a></div>
                                                <div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/agriculture/">Agriculture</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enterprise/">Enterprise</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/e-commerce/">E-commerce</a></div>
                                                <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/real-estate/">Real Estate</a></div>
                                            </div>
                                        </div>
                                        <!-- For mobile-->
                                        <div class="hvr-div mt-lg-auto hvr-m hvr-m--mb d-flex flex-column justify-content-end d-md-none">
                                            <a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/process/">Process</a>
                                            <a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/clients/">Clients</a>
                                            <a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/careers">Careers</a>
                                            <a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/blogs">Blogs</a>
                                            <a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/whitepapers/">Whitepapers</a>
                                            <a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/contact/">Contact Us</a>
                                        </div>
                                        <div class="d-md-flex hvr-m flex-column justify-content-end d-md-none d-none">
                                            <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/telecom/">Telecom</a></div>
                                            <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enabling-growth-in-edtech/">Edtech</a></div>
                                            <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/fintech/">Fintech</a></div>
                                            <div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/healthcare/">Healthcare</a></div>
                                            <div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/agriculture/">Agriculture</a></div>
                                            <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enterprise/">Enterprise</a></div>
                                            <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/e-commerce/">E-commerce</a></div>
                                            <div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/real-estate/">Real Estate</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-ftr d-none d-md-block mt-md-4 mt-lg-auto mb-4 mb-md-0 menu-ftr-pos menu-ftr-pos--redbg">
                            <div class="menu-ftr__links hvr-div d-md-flex flex-wrap">
                                <a class="d-inline-block fnt-18" href="https://www.linkedin.com/company/lollypop-studio/" target="_blank">LinkedIn</a>
                                <a class="d-inline-block fnt-18" href="https://www.instagram.com/lollypop.design/" target="_blank">Instagram</a>
                                <a class="d-inline-block fnt-18" href="https://www.facebook.com/lollypop.india" target="_blank">Facebook</a>
                                <a class="d-inline-block fnt-18" href="https://dribbble.com/lollypop_studio" target="_blank">Dribbble</a>
                                <a class="d-inline-block fnt-18" href="https://twitter.com/lollypop_studio" target="_blank">Twitter</a>
                                <a class="d-inline-block fnt-18" href="https://in.pinterest.com/Lollypop_Design/_created/" target="_blank">Pinterest</a>
                            </div>
                        </div>
                        <!-- drop -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-menu__blackbg">
        <div class="desktop-menu__item">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-lg-10 col-xl-9 mx-auto h-100 d-flex flex-column postion-relative">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 mt-lg-5">
                                <div class="menu-craft mb-4 pb-3 pb-lg-0 mb-lg-0">
                                    <div class="menu-craft__item mb-4">
                                        <p class="d-none d-md-block fnt-18 mb-2 mb-md-3">Got An Idea?</p>
                                        <h3 class="fnt-36 fnt-800 bg-bl-hd">Let's craft <span class="d-block">brilliance together!</span></h3>
                                    </div><a class="web-btn mt-lg-3 web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get in touch</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-ftr mt-md-auto menu-ftr-pos">
                            <div class="menu-ftr__links hvr-div">
                                <a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-company-in-india/">India</a>
                                <a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-usa/">USA</a>
                                <a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-uae/">UAE</a>
                                <a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam/">Vietnam</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body>
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQBBF4Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->

    <div class="bd-brd"></div>
    <div class="loader">
        <div class="loader__item"><img defer src="https://lollypop.design/wp-content/uploads/2022/09/logoanimated100.gif" alt="Image"></div>
    </div>