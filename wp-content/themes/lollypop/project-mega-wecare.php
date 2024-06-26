<?php

/**
 *
 *Template Name: project-mega-wecare
 *Template post type: projects
 **/

get_header();
?>
<style>
    .titleSection {
        font-size: 48px;
        font-weight: 800;
        line-height: 65.57px;
        letter-spacing: -0.04em;
        color: #5C261A;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .titleSection__subtitle {
        font-size: 16px;
        font-weight: 400;
        line-height: 25.6px;
        color: #221429;

    }

    .titleBlue {
        position: relative;
        z-index: 0;
    }

    .titleBlue::before {
        content: "";
        z-index: -1;
        width: 38px;
        height: 38px;
        background: url("<?php echo get_template_directory_uri(); ?>/img/icons/icon_jersey_joe.svg") no-repeat;
        transform: rotate(7deg);
        position: absolute;
        left: -10px;
        bottom: 18px;
    }

    .wireframe_images {
        display: flex;
        gap: 1rem;
    }

    .colour_title {
        font-family: "Rubik";
        font-size: 24px;
        font-weight: 500;
        line-height: 28.44px;
        color: #1F0702;
    }

    .colour_text {
        font-family: "Rubik";
        font-size: 16px;
        font-weight: 400;
        line-height: 18.96px;
        text-align: center;
        color: #4B3834;
        margin-bottom: 0.5rem;
    }

    .colour_color {
        font-family: "Rubik";
        font-size: 14px;
        font-weight: 400;
        line-height: 16.59px;
        text-align: center;
        color: #6F605D;
    }

    /* .btn-jersey {
        position: relative;
        z-index: 2;
        transition: transform 0.5s ease, background-color 0.5s ease;
    } */
    .btn-jersey {
        background-color: rgba(252, 185, 98, 1);
        box-shadow: 0px 6px 10px 0px rgba(251, 168, 59, 0.24);
        color: rgba(68, 20, 10, 1);
        font-family: "Rubik";
        font-weight: 700;
        font-size: 0.9vw;
        display: flex;
        align-items: center;
        justify-content: center;
        width: fit-content;
        border-radius: 32px;
        transition: transform 0.5s ease, background-color 0.5s ease;

    }

    .btn-jersey:hover {
        transform: translateY(-3px);
        box-shadow: 0px 6px 8px 0px rgba(251, 168, 59, 0.24);
        background-color: #FBA83B;
    }

    .btn-submit {
        position: absolute;
        top: 27%;
        right: 8%;
        width: 15%;
        height: 35%
    }

    .bg-color {
        transition: transform 0.5s ease, background-color 0.5s ease;
    }

    .btn-jersey:hover .bg-color {
        fill: #FBA83B;
    }

    .fullSize svg {
        width: 100%;
        height: 100%;
    }

    .has-hover {
        width: 100%;
        height: 100%;
        transition: opacity 1s ease-in-out;
    }

    .has-hover.hidden {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: opacity 1s ease-in-out;
        pointer-events: none;
    }

    .has-hover.hidden svg {
        width: 100%;
        height: auto;
    }

    .hover:hover .has-hover {
        opacity: 0;
    }

    .hover:hover .has-hover.hidden {
        opacity: 1;
        pointer-events: auto;
        z-index: 2;
    }

    .ui_component::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 325px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.64) 72.63%);
        pointer-events: none;
        z-index: 1;
    }

    .ui_design {}

    .ui_design::-webkit-scrollbar {
        display: none;
    }

    .mobileScroll {
        position: absolute;
        content: '';
        top: 53.5%;
        right: 6.27%;
        width: 17.5%;
        height: 50%;
        overflow: scroll;
        border-radius: 0 0 10px 10px;
        z-index: 3;
    }

    .mobileScroll1 {
        position: absolute;
        content: '';
        top: 11%;
        left: 15.3%;
        width: 72%;
        height: 73%;
        border-radius: 0 0 10px 10px;
        z-index: 1;
    }

    .mobileScroll2 {
        position: absolute;
        content: '';
        left: 75.7%;
        width: 18.5%;
        height: 66.8%;
        border-radius: 0 0 10px 10px;
        z-index: 2;
        bottom: -10.5%;
    }

    .mobileScroll3 {
        position: absolute;
        content: '';
        top: 50.6%;
        left: 11.9%;
        width: auto;
        height: auto;
        border-radius: 0 0 10px 10px;
        z-index: 2;
    }

    .mobileScroll4 {
        position: absolute;
        content: '';
        top: 52.5%;
        left: 11.9%;
        width: 21%;
        height: auto;
        border-radius: 0 0 10px 10px;
        z-index: 2;
    }

    .mobileScroll5 {
        position: absolute;
        content: '';
        top: 14%;
        left: 9.9%;
        width: 25%;
        height: auto;
        border-radius: 0 0 10px 10px;
        z-index: 2;
    }

    .mobileScroll6 {
        position: absolute;
        content: '';
        top: 34.7%;
        left: 65.9%;
        width: 19%;
        height: auto;
        border-radius: 0 0 10px 10px;
        z-index: 2;
    }

    .mobileScroll7 {
        position: absolute;
        content: '';
        top: 17.4%;
        left: 31.3%;
        width: 37.8%;
        height: 77%;
        border-radius: 0 0 12px 12px;
        z-index: 1;
        overflow: scroll;
    }

    .mobileScroll7 svg,
    .mobileScroll svg {
        height: auto;
    }

    .mobileScroll7::-webkit-scrollbar,
    .mobileScroll::-webkit-scrollbar {
        display: none;
    }


    .zoomBg {
        transition: transform 0.3s ease-in-out;
    }

    .zoomBg:hover {
        transform: rotate(2deg);
    }

    .zoomImage {
        transition: transform 0.3s ease-in-out;
    }

    .zoomBg:hover .zoomImage {
        transform: scale(1.5) rotate(-2deg);
        transform-origin: 65%;
    }

    .zoomBg1 {
        transform-origin: 625.908px 138.768px;
        transition: transform 0.3s ease-in-out;
    }

    .zoomBg1:hover {
        transform: rotate(4deg);
    }

    .zoomImage1 {
        transition: transform 0.3s ease-in-out;
    }

    .zoomBg1:hover .zoomImage1 {
        transform: scale(1.8) rotate(-2deg);
        transform-origin: 84% 44%;
    }

    .zoomBg2 {
        transform-origin: 633.055px 257.029px;
        transition: transform 0.3s ease-in-out;
    }

    .zoomBg2:hover {
        transform: rotate(-4deg);
    }

    .zoomImage2 {
        transition: transform 0.3s ease-in-out;
    }

    .zoomBg2:hover .zoomImage2 {
        transform: scale(1.6) rotate(4deg);
        transform-origin: 82% 66%;
    }

    @media (max-width: 768px) {
        .titleSection {
            font-size: 24px;
            line-height: 30px;
        }


        .titleBlue::before {
            width: 20px;
            height: 20px;
            left: -8px;
            top: 0;
        }

        .titleSection__subtitle {
            text-align: center;
        }

        .wireframe_images {
            flex-direction: column;
            gap: 1rem;
        }
    }

    .project-step {
        >div:first-of-type {
            margin: 0;
        }
    }

    .define-content {
        margin-top: 80px;
    }

    .img-fullW {
        display: block;
        width: 100%;

        /* img {
            transform: scaleX(1.05) translateY(0px) !important;
        } */
    }
</style>
<main class="main" style="background:#FFFFFF;">
    <!-- Section Project Info -->
    <section class="sec-pd sec-bnr p-r-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-11 offset-md-1">
                            <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span
                                    class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('company_name'); ?></span>
                                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0">
                                    <?php the_title(); ?>
                                </h1>
                                <p class="fnt-24"><?php echo the_field('short_descriptions'); ?></p>
                                <div class="project-type">
                                    <?php if (have_rows('tags')):
                                        while (have_rows('tags')):
                                            the_row(); ?>
                                            <span class="fnt-14 clr-black354"><?php echo the_sub_field('list'); ?></span>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="wpdm-img" src="<?php the_field('thumbnail_image') ?>" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Brief Description -->

    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="col-md-10 px-0 mx-auto">
                        <div class="mb-r-120">
                            <div class="project-step">
                                <?php if (have_rows('brief_descriptions')):
                                    while (have_rows('brief_descriptions')):
                                        the_row(); ?>
                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span
                                                    class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item">
                                                    <?php the_sub_field('content'); ?>
                                                </div>
                                                <?php if (get_sub_field('cta_name') != '') { ?>
                                                    <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll"
                                                        href="<?php the_sub_field('cta_url'); ?>"><?php the_sub_field('cta_name'); ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section  Define Description-->

    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="col-md-10 px-0 mx-auto">
                        <div class="mb-r-120">
                            <div class="project-step">
                                <?php if (have_rows('define_descriptions')):
                                    while (have_rows('define_descriptions')):
                                        the_row(); ?>
                                        <div class="project-step__item row define-content">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span
                                                    class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc ">
                                                <div class="project-step-disc__item">
                                                    <?php the_sub_field('content'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="define-image">
                                            <?php if (have_rows('web_image')):
                                                while (have_rows('web_image')):
                                                    the_row();
                                                    $webImage = get_sub_field('images');
                                                    if ($webImage != '') { ?>
                                                        <div class="mb-r-80 m-img emar"><img class="img-project-dtl data-scroll"
                                                                src="<?php the_sub_field('images'); ?>" alt="Image"></div>
                                                    <?php } ?>
                                                <?php endwhile; endif; ?>

                                        </div>
                                    <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Web Image -->

    <section class="p-r-80 pb-0 pare-define">
        <?php if (have_rows('web_image')):
            while (have_rows('web_image')):
                the_row();
                $webImage = get_sub_field('project_gallery');
                if ($webImage != '') { ?>
                    <div class="mb-r-80 m-img img-fullW"><img class="img-project-dtl data-scroll"
                            src="<?php the_sub_field('project_gallery'); ?>" alt="Image"></div>
                <?php } ?>
            <?php endwhile; endif; ?>
    </section>

    <!-- Section Conclusion -->

    <?php if (get_field('conclusion') != '') { ?>
        <section class="conclusion-pad sec-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="col-md-10 px-0 mx-auto">
                            <div>
                                <div class="col-md-10 px-0 mx-auto">
                                    <div class="mb-r-80">
                                        <div class="project-step">
                                            <div class="project-step__item row">
                                                <div class="col-12">
                                                    <h3
                                                        class="clr-second fnt-40 text-left fnt-800 d-inline-block data-scroll">
                                                        Conclusion</h3>
                                                </div>
                                                <div class="col-md-12 project-step-disc mt-4">
                                                    <div class="project-step-disc__item conclusions data-scroll">
                                                        <?php echo the_field('conclusion'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    <?php } ?>
    <section class="sec-footer-trans">
        <div class="container z-1">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="py-70 px-3 data-scroll" style="background: #221429;">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
                                <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Got An
                                        Idea?</span>
                                    <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
                                </div><a class="web-btn web-btn--red"
                                    href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $("h4").addClass("fnt-28 fnt-800 mb-2 data-scroll");
    $('.bd-brd').css('border-color', '#f7f4f2');
    $(".project-step-disc__item h4").addClass('fnt-28 fnt-800 mb-2 data-scroll')
    $(".project-step-disc__item ul").addClass('m-0')
    $(".project-step-disc ul").addClass('li-disc')
    $(".project-step-disc__item overview2 ul li").addClass('fnt-16 clr-black-354 mt-4 data-scroll')
    $(".project-step-disc__item conclusions ul li").addClass('fnt-16 clr-black-354 data-scroll')
</script>
<?php get_footer(); ?>