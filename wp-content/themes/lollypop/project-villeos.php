<?php

/**
 *
 *Template Name: project-villeos
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
/* Container for the image */

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
        margin-top: 20px;
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

    .image {
    display: flex;
    justify-content: center; /* Horizontally center the image */
    align-items: center;     /* Vertically center the image */
    width: 100%;             /* Ensure the container takes full width */
    height: 100%;            /* Make sure the container has a height (adjust as needed) */
    text-align: center;      /* Center the image if it's inline */
}

/* Image styling */
.custom-image-size {
    width: 924px;
    height: auto;
}

    .define_desc {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 30px;

        >div:first-of-type {
            >div:last-of-type {
                margin-bottom: -166px;
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

    }

    .title-desc {
        font-size: 60px;
        font: Alatsi;
        background: linear-gradient(180deg, #A84448 0%, #863538 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
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
        margin-top: 40px;
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
        .title-desc {
            font-size: 80px;
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
                /* height: 900px; */
                height: 675px;

                transform: rotate(-4deg);
            }
        }

        >div:nth-child(2) {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            /* top: 280px; */
            top: 200px;


            img {
                max-width: 983px;
                width: 100%;
                height: 100%
            }
        }

        >div:nth-child(3) {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            /* top: 200px; */
            top: 350px;


            img {
                max-width: 1160px;
                width: 100%;
                /* height: 2880px; */
                height: 100%;
            }
        }
    }

    .conclusion {
        margin-top: 80px;
        background-color: #F7F5F3;
    }

    .conclusion-title {
        font: Alatsi;
        font-size: 120px;
        font-weight: bold;
        text-align: left;
        background: linear-gradient(90deg, #FD2E35 0%, #971B20 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    @media (max-width: 1168px) {

        .conclusion-title {
            font-size: 74px;
        }
    }

    @media (max-width: 576px) {
        .conclusion-title {
            font-size: 62px;
        }
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
            position: absolute;
            width: 380px;
            top: -25px;
            right: calc(14%);
            ;

            img {
                width: 380px;
                height: 250px;
            }
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

                    <?php $bannerVideo = get_field('banner_video_link'); ?>
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
                    <?php } ?>
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

    <!-- Section Image-->
    <?php if (get_field('image') != ''): ?>
    <div class="w-100 image">
        <img class="img-project-dtl data-scroll custom-image-size"
             src="<?php the_field('image'); ?>" 
             alt="Image">
    </div>
<?php endif; ?>


    

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
                                    <div class="col-12 text-center">
                                        <span class="data-scroll title-desc"><?php the_sub_field('title'); ?></span>
                                    </div>
                                    <!-- content -->
                                    <div class="col-16 sub-title">
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

    <!-- Section Conclusion -->

<?php if (have_rows('conclusion_2')): ?>
    <section class="conclusion-pad sec-pt">
        <div class="container conclusion">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-10 px-0 mx-auto">
                        <div class="mb-r-80">
                            <div class="project-step">
                                <?php while (have_rows('conclusion_2')): the_row(); ?>
                                    <div class="row">
                                        <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                            <div class="col-md-10 px-0 mx-auto">
                                                <div>
                                                    <div class="project-step">
                                                        <div class="brief-item row">
                                                            <?php if (get_sub_field('title_1') != '' || get_sub_field('content_1') != ''): ?>
                                                                <div class="col-12 mb-3">
                                                                    <div class="title-content-block">
                                                                        <?php if (get_sub_field('title_1') != ''): ?>
                                                                            <div class="title mb-3"> <!-- Add margin-bottom here -->
                                                                                <span class="clr-second fnt-24 text-start d-inline-block fnt-800 data-scroll disc-head text-rpd text-rpd--more">
                                                                                    <?php the_sub_field('title_1'); ?>
                                                                                </span>
                                                                            </div>
                                                                        <?php endif; ?>

                                                                        <?php if (get_sub_field('content_1') != ''): ?>
                                                                            <div class="content project-step-disc gray-stroke position-relative px-0">
                                                                                <div class="brief-content" style="position: relative;">
                                                                                    <?php the_sub_field('content_1'); ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>



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