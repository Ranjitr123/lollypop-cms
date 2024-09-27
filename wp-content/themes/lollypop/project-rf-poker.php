<?php

/**
 *
 *Template Name: project-rf-poker
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

    .step-between {
        >div:first-of-type {
            margin: 0;
        }
    }

    .define-content {
        margin-top: 80px;
    }

    .li-auto {
        list-style: auto !important;
    }

    .make_diff {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 22px;
        margin-top: 80px;

        h2 {
            font-size: 48px;
            font-weight: 800;
            line-height: 56px;
            color: #221429;
        }

        p {
            color: #5A5A5A;
        }
    }

    .albert_img {
        width: 498px;
        padding-top: 80px;
    }

    .wireframes {
        width: 100%;
    }

    .defined-img {
        margin-top: 40px;
    }

    .img-fullW {
        display: block;
        width: 100%;
        margin-top: 80px;

        img {
            width: 100%;
        }
    }

    .wrapper-img {
        margin-top: 80px;
        padding: 0;
    }

    .brief_row {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .class1 {
        max-width: 956px;
        width: 100%;
        height: auto;
    }

    .define_desc {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 112px;

        >div:first-of-type {
            margin-top: 0;
            >div:nth-child(5) {
                margin-top: 40px;
            }
        }

        >div:last-of-type {
            margin-top: 0px;
        }

        >div:nth-child(3) {
            margin-top: 0;
            >div:nth-child(3) {
                width: 148% !important;
            }

        }

        >div:nth-child(4) {
            margin-top: 0;
            >div:nth-child(3),
            >div:nth-child(4) {
                width: 60% !important;
                position: relative;
                left: -170px !important;
                margin-top: 40px;

            }

            >div:nth-child(5) {
                width: 148% !important;
                margin-top: 40px;

            }
        }

        >div:nth-child(5) {
            margin-top: 0;
            >div:nth-child(3) {
                width: 148% !important;
            }
        }

        >div:last-of-type {
            >div:last-of-type {
                text-align: start;
            }
        }
    }

    .define_desc__item {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* margin-top: 80px; */
        position: relative;
    }

    .define_title {
        /* position: absolute;
        left: -316px;
        top: 331px;
        z-index: 1; */
    }

    .title-desc {
        font-size: 48px;
        font: Outfit;
        color: #0D0E10;
        /* background: linear-gradient(90deg, #FD2E35 0%, #971B20 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; */
        font-weight: 700;
        width: 100%;
    }

    .sub-title {
        margin-top: 40px;
        font-size: 16px;
        text-align: center;

        >div:nth-child(2) {
            text-align: start;
        }
    }

    .define_web_image {
        /* margin-top: 40px; */
    }

    .list_content {
        margin-top: 80px;
    }

    .content_img {
        margin-top: 80px;
    }

    @media (max-width: 1168px) {
        .sub-title {
            font-size: 14px;
        }

        .define_desc {
            >div:first-of-type {
                >div:last-of-type {
                    margin-bottom: -166px;
                }
            }

            >div:nth-child(3) {
                >div:nth-child(3) {
                    width: 110% !important;
                }
            }
            >div:nth-child(4) {
                >div:nth-child(3),
                >div:nth-child(4) {
                    width: 55% !important;
                    position: relative;
                    left: -96px !important;
                }

                >div:nth-child(5) {
                    width: 110% !important;
                }
            }

            >div:nth-child(5) {
                >div:nth-child(3) {
                    width: 118% !important;
                }
            }

            >div:last-of-type {
                >div:last-of-type {
                    text-align: start;
                }
            }
        }
    }

    @media (max-width: 1024px) {
        .define_desc {
            >div:nth-child(3) {
                >div:nth-child(3) {
                    width: 103% !important;
                }
            }

            >div:nth-child(4) {
                >div:nth-child(5) {
                    width: 103% !important;
                }
            }

            >div:nth-child(5) {
                >div:nth-child(3) {
                    width: 107% !important;
                }
            }
        }

    }

    @media (max-width: 900px) {
        .title-desc {
            font-size: 90px;
        }

        .sub-title {
            font-size: 12px;
        }
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

        .define_desc {
            >div:first-of-type {
                >div:last-of-type {
                    margin-bottom: -166px;
                }
            }

            >div:nth-child(3) {
                >div:nth-child(3) {
                    width: 100% !important;
                }
            }
            >div:nth-child(4) {
                >div:nth-child(3),
                >div:nth-child(4) {
                    width: 55% !important;
                    position: relative;
                    left: -96px !important;
                }

                >div:nth-child(5) {
                    width: 100% !important;
                }
            }

            >div:nth-child(5) {
                >div:nth-child(3) {
                    width: 100% !important;
                }
            }

            >div:last-of-type {
                >div:last-of-type {
                    text-align: start;
                }
            }
        }
    }

    @media (max-width: 576px) {
        .title-desc {
            font-size: 64px;
        }
    }

    .emaars {
        position: relative;
        margin-bottom: 146px;

        >div:first-of-type {
            margin-top: 0;
            padding-top: 0;

            img {
                width: 100%;
                /* transform: rotate(-4deg); */
            }
        }

        >div:nth-child(2) {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            top: 200px;


            img {
                width: 100%;
                height: 100%
            }
        }

        >div:nth-child(3) {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            img {
                width: 100%;
                height: 100%;
            }
        }
    }

    .conclusion {
        background-color: #F7F5F3;
    }

    .conclusion-title {
        font: Alatsi;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        color: #FD2E35;
    }

    .web-img {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        >div:first-of-type {

            img {
                width: 100%;
            }
        }

        >div:last-of-type {
            /* position: absolute;
            width: 380px;
            top: -25px;
            right: calc(14%);
            ;

            img {
                width: 380px;
                height: 250px;
            } */
        }
    }
</style>

<main class="main" style="background:#F7F5F3;
;">
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

                    <!-- <?php $bannerVideo = get_field('banner_video_link'); ?>
                    <?php if ($bannerVideo != '') { ?>
                        <div class="reveal-project">
                            <div class="play-video-on-scroll">
                                <div id="play2-out" style="display:none">
                                    <div id="play2" data-plyr-provider="youtube"
                                        data-plyr-embed-id="<?php the_field('banner_video_link'); ?>"></div>
                                </div>
                                <video class="playvid" controls autoplay muted loop playsinline
                                    embed-id="<?php the_field('banner_video_link'); ?>"
                                    provider="<?php the_field('banner_video_provider'); ?>"
                                    poster="<?php the_field('banner_video_poster'); ?>"></video>
                                </video>
                            </div>
                        </div>
                    <?php } ?> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Section Brief Description -->

    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row brief_row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="col-md-10 px-0 mx-auto">
                        <div>
                            <div class="project-step">
                                <?php if (have_rows('brief_descriptions')):
                                    while (have_rows('brief_descriptions')):
                                        the_row(); ?>
                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span
                                                    class="clr-second fnt-18 text-start d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span>
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
                <div class="col-12 col-md-11 col-lg-10 mx-auto p-0 class1">
                    <div class="define_desc">
                        <?php if (have_rows('define_descriptions')):
                            while (have_rows('define_descriptions')):
                                the_row(); ?>
                                <div class="define_desc__item">
                                    <!-- Title -->
                                    <div class="col-12 text-center define_title">
                                        <span class="data-scroll title-desc"><?php the_sub_field('title'); ?></span>
                                    </div>
                                    <!-- Content -->
                                    <div class="col-12 sub-title">
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                    <!-- Content IMG -->
                                    <?php
                                    $image = get_sub_field('define_selected_image');
                                    if ($image != '') { ?>
                                        <div class="w-100 content_img"><img class="img-project-dtl data-scroll lazyloaded"
                                                src="<?php the_sub_field('define_selected_image'); ?>" alt="Image"></div>
                                    <?php } ?>

                                    <!-- Web IMG -->
                                    <?php if (have_rows('web_image')):
                                        while (have_rows('web_image')):
                                            the_row();
                                            $webImage = get_sub_field('images');
                                            if ($webImage != '') { ?>
                                                <div class="w-100 define_web_image"><img class="img-project-dtl data-scroll"
                                                        src="<?php the_sub_field('images'); ?>" alt="Image"></div>
                                            <?php } ?>
                                        <?php endwhile;
                                    endif; ?>
                                    <!-- List content -->
                                    <?php if (have_rows('list_content')):
                                        while (have_rows('list_content')):
                                            the_row();
                                            $content = get_sub_field('content');
                                            if ($content != '') { ?>
                                                <div class="row list_content m-t-80">
                                                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                        <h2 class="fs-1 fw-bolder mbm-3 title-desc"><?php the_sub_field('title'); ?></h2>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="col-lg-10 px-0 mb-0"><?php the_sub_field('content'); ?>
                                                        </p>
                                                    </div>

                                                </div>
                                            <?php } ?>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emaars sections -->
    <section class="p-r-80 pb-0 mt-5 pare-define emaars">
        <?php if (have_rows('emaars_digital_booking')):
            while (have_rows('emaars_digital_booking')):
                the_row();
                if (have_rows('images_section')):
                    while (have_rows('images_section')):
                        the_row(); ?>
                        <div class="m-img img-fullW mt-0"><img class="data-scroll" src="<?php the_sub_field('image'); ?>" alt="Image">
                        </div>
                    <?php endwhile; endif; ?>
            <?php endwhile;
        endif; ?>
    </section>


    <!-- Section Conclusion -->

    <?php if (get_field('conclusion') != '') { ?>
        <section class="conclusion-pad sec-pt">
            <div class="container conclusion">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="col-md-10 px-0 mx-auto">
                            <div>
                                <div class="col-md-10 px-0 mx-auto">
                                    <div class="mb-r-80">
                                        <div class="project-step">
                                            <div class="project-step__item row text-center">
                                                <div class="col-4">
                                                    <h3 class="data-scroll conclusion-title text-uppercase">
                                                        Conclusion</h3>
                                                </div>
                                                <div class="col-8 project-step-disc">
                                                    <div
                                                        class="project-step-disc__item conclusions data-scroll conclusion-subtitle text-start">
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

    <!-- Section Web Image -->

    <section class="p-r-80 pb-0 web-img">
        <?php if (have_rows('web_image')):
            while (have_rows('web_image')):
                the_row();
                $webImage = get_sub_field('project_gallery');
                if ($webImage != '') { ?>
                    <div class="mb-r-80 m-img img-fullW"><img class="data-scroll" src="<?php the_sub_field('project_gallery'); ?>"
                            alt="Image"></div>
                <?php } ?>
            <?php endwhile; endif; ?>
    </section>

    <!-- Section Footer -->

    <section class="sec-footer-trans">
        <div class="container z-1">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="py-70 px-3 data-scroll" style="background: #221429;">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
                                <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Thinking of
                                        design?</span>
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
    // $(".project-step-disc__item ul").addClass('m-0')
    $(".project-step-disc__item p").addClass('m-0')
    $(".project-step-disc__item ol").addClass('mb-0 mt-4')
    $(".project-step-disc__item ol li").addClass('li-auto')
    $(".project-step-disc ul").addClass('li-disc ms-2')
    $(".project-step-disc__item overview2 ul li").addClass('fnt-16 clr-black-354 mt-4 data-scroll')
    $(".project-step-disc__item conclusions ul li").addClass('fnt-16 clr-black-354 data-scroll')
</script>
<?php get_footer(); ?>