<?php

/**
 *
 *Template Name: project-we82
 *Template post type: projects
 **/

get_header();
?>

<style>
    /* Banner Section */
    .heading-banner-section {
        font-size: 72px;
        font-weight: 500;
        line-height: 86px;
        margin-bottom: 24px;
    }

    .short-desc-banner-section {
        font-size: 18px;
        font-weight: 200;
        line-height: 26px;
        margin-bottom: 22px;
    }

    .section-heading {
        font-size: 164px;
        font-weight: 400;
        line-height: 164px;
        text-align: center;
        color: #C30010;
        padding-bottom: 56px;
        padding-top: 56px;
    }


    /* Brief Section */
    .red-stroke::before {
        position: absolute;
        width: 1px;
        height: 100%;
        left: -2px;
        top: 5px;
        background: #fd2e35 !important;
    }

    .gray-stroke::before {
        position: absolute;
        width: 2px;
        height: 100%;
        left: -16px;
        top: 0px;
        content: "";
        background: #E3E8EF;
    }

    .brief-item {
        /* margin-bottom: 56px; */
        padding-block: 56px;
    }

    .brief-content {
        font-size: 16px;
        font-weight: 200;
        line-height: 22px;
        text-align: left;
    }

    /* Persona Section */
    .persona-section {
        padding-bottom: 85px;
    }

    /* Main Section */

    .section-style {
        .container {
            >div:first-of-type {
                padding-bottom: 0;
            }
        }
    }

    .main-img-1 {
        padding-bottom: 56px;

    }

    .main_image_3 {
        padding-bottom: 56px;

    }

    .branding-detail {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        p {
            font-size: 24px;
            font-weight: 400;
            line-height: 36px;
            text-align: center;
            color: #C30010;
            width: 60%;
        }
    }

    /* Cards Section */
    .cards-style {
        background-color: #C30010;
        padding: 48px 84px;
    }

    .card-item {
        background: #FBEEDA;
        position: relative;
    }

    .card-body {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding-left: 20px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        background-color: #FBEEDA;
    }

    .card-title {
        /* font-family: 'iCielBC Cubano'; */
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 400;
        line-height: 20px;
        text-align: left;
        color: #C30010;
    }

    .card-text {
        font-family: BT Beau Sans;
        font-size: 12px;
        font-weight: 400;
        line-height: 12px;
        text-align: left;
        color: #00000099;
        text-decoration: underline;
    }
</style>

<main class="main" style="background: #FFFFFF;
;">
    <!-- Project Info & Banner Video -->
    <section class="sec-pd sec-bnr p-r-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span
                            class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('company_name'); ?></span>
                        <h1 class="heading-banner-section px-md-0">
                            <?php the_title(); ?>
                        </h1>
                        <p class="short-desc-banner-section"><?php echo the_field('short_descriptions'); ?></p>
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
            <?php $bannerVideo = get_field('banner_video_link'); ?>
            <?php if ($bannerVideo != '') { ?>
                <div class="reveal-project">
                    <div class="play-video-on-scroll">
                        <div id="play2-out" style="display:none">
                            <div id="play2" data-plyr-provider="youtube"
                                data-plyr-embed-id="<?php the_field('banner_video_link'); ?>"></div>
                        </div>
                        <video class="playvid" autoplay muted loop playsinline
                            embed-id="<?php the_field('banner_video_link'); ?>"
                            provider="<?php the_field('banner_video_provider'); ?>"
                            poster="<?php the_field('banner_video_poster'); ?>"></video>
                        </video>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Brief Description -->
    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="col-md-10 px-0 mx-auto">
                        <div>
                            <div class="project-step">
                                <?php if (have_rows('brief_descriptions')):
                                    while (have_rows('brief_descriptions')):
                                        the_row(); ?>
                                        <div class="brief-item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span
                                                    class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="brief-content gray-stroke" style="position: relative;">
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

    <!-- Start of Sections -->
    <section class="section-style">
        <div class="container">
            <?php if (have_rows('main_content')):
                while (have_rows('main_content')):
                    the_row(); ?>
                    <!-- Heading -->
                    <?php if (get_sub_field('heading') != '') { ?>
                        <div class="w-100 section-heading">
                            <?php the_sub_field('heading'); ?>
                        </div>
                    <?php } ?>
                    <!-- Main Image 1 -->
                    <?php if (get_sub_field('main_image_1') != '') { ?>
                        <div class="w-100 main-img-1"><img class="img-project-dtl data-scroll"
                                src="<?php the_sub_field('main_image_1'); ?>" alt="Image">
                        </div>
                    <?php } ?>
                    <!-- Title 1 & content -->
                    <?php if (get_sub_field('title_1') != ''): ?>
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                <div class="col-md-10 px-0 mx-auto">
                                    <div>
                                        <div class="project-step">
                                            <div class="brief-item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span
                                                        class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title_1'); ?></span>
                                                </div>
                                                <div class="col-12 col-md-8 project-step-disc gray-stroke position-relative px-0">
                                                    <div class="brief-content" style="position: relative;">
                                                        <?php the_sub_field('content_1'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif (get_sub_field('content_1') != ''): ?>
                        <div class="branding-detail">
                            <p>
                                <?php the_sub_field('content_1'); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <!-- Main Image 2 -->
                    <?php if (get_sub_field('main_image_2') != '') { ?>
                        <div style="margin-bottom: 56px;" class="w-100"><img class="img-project-dtl data-scroll"
                                src="<?php the_sub_field('main_image_2'); ?>" alt="Image">
                        </div>
                    <?php } ?>

                    <?php if (get_sub_field('title_2') != '') { ?>
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                <div class="col-md-10 px-0 mx-auto">
                                    <div>
                                        <div class="project-step">
                                            <div class="brief-item row">
                                                <!-- Title 2 & content -->
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span
                                                        class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title_2'); ?></span>
                                                </div>
                                                <div style="margin-bottom: 56px"
                                                    class="col-12 col-md-8 project-step-disc gray-stroke position-relative px-0">
                                                    <div class="brief-content pb-5" style="position: relative;">
                                                        <?php the_sub_field('content_2'); ?>
                                                    </div>
                                                    <div class="w-100 pb-5"><img class="img-project-dtl data-scroll"
                                                            src="<?php the_sub_field('sub_image_1'); ?>" alt="Image">
                                                    </div>
                                                    <div class="brief-content pb-5" style="position: relative;">
                                                        <?php the_sub_field('note_1'); ?>
                                                    </div>
                                                    <div class="w-100 pb-5"><img class="img-project-dtl data-scroll"
                                                            src="<?php the_sub_field('sub_image_2'); ?>" alt="Image">
                                                    </div>
                                                    <div class="brief-content" style="position: relative;">
                                                        <?php the_sub_field('note_2'); ?>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Title 3 & content -->
                    <?php if (get_sub_field('title_3') != '') { ?>
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                <div class="col-md-10 px-0 mx-auto">
                                    <div>
                                        <div class="project-step">
                                            <div class="brief-item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span
                                                        class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title_3'); ?></span>
                                                </div>
                                                <div class="col-12 col-md-8 project-step-disc gray-stroke position-relative px-0">
                                                    <div class="brief-content" style="position: relative;">
                                                        <?php the_sub_field('content_3'); ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Main Image 3 -->
                    <?php if (get_sub_field('main_image_3') != '') { ?>
                        <div class="w-100 main_image_3"><img class="img-project-dtl data-scroll"
                                src="<?php the_sub_field('main_image_3'); ?>" alt="Image">
                        </div>
                    <?php } ?>
                    <!-- Title 4 & content -->
                    <?php if (get_sub_field('title_4') != '') { ?>
                        <div class="row">
                            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                <div class="col-md-10 px-0 mx-auto">
                                    <div>
                                        <div class="project-step">
                                            <div class="brief-item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span
                                                        class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title_4'); ?></span>
                                                </div>
                                                <div style="margin-bottom: 112px"
                                                    class="col-12 col-md-8 project-step-disc gray-stroke position-relative px-0">
                                                    <div class="brief-content" style="position: relative;">
                                                        <?php the_sub_field('content_4'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Solution Video -->
                    <?php if (get_sub_field('solution_video_link') != '') { ?>
                        <div class="reveal-project" style="padding-bottom: 56px">
                            <div class="play-video-on-scroll">
                                <div id="play2-out" style="display:none">
                                    <div id="play2" data-plyr-provider="youtube"
                                        data-plyr-embed-id="<?php the_sub_field('solution_video_link'); ?>"></div>
                                </div>
                                <video autoplay loop playsinline class="playvid"
                                    embed-id="<?php the_sub_field('solution_video_link'); ?>"
                                    provider="<?php the_sub_field('solution_video_provider'); ?>"
                                    poster="<?php the_sub_field('solution_video_poster'); ?>">
                                </video>
                            </div>
                        </div>
                    <?php } ?>
                <?php endwhile;
            endif; ?>
        </div>
    </section>
    <!-- Cards Section -->
    <section class="sec-pd p-r-80">
        <div>
            <div class="w-100 cards-style">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php if (have_rows('card')):
                        while (have_rows('card')):
                            the_row(); ?>
                            <div class="col">
                                <div class="card-item">
                                    <img class="img-project-dtl" src="<?php the_sub_field('card_image'); ?>" alt="Image">
                                    <?php if (get_sub_field('name') != '') { ?>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php the_sub_field('name'); ?></h5>
                                            <div class="d-flex">
                                                <img style="width: 12px; margin-right: 8px;" class="img-project-dtl"
                                                    src="<?php the_sub_field('card_icon'); ?>" alt="Image">
                                                <a class="card-text"
                                                    href="<?php the_sub_field('url'); ?>"><?php the_sub_field('linkedin'); ?></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Section Footer -->
    <section class="sec-footer-trans" style="margin-top: 164px;">
        <div class="container z-1" style="max-width: 100%; padding: 0;">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto" style="width: 100%">
                    <div class="py-70 px-3 data-scroll" style="background: #FD2E35;">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
                                <div class="mb-45"><span class="d-block fnt-14 mb-2 pb-2 mb-md-4 pb-md-0">COLLABORATE
                                        WITH OUR TEAM</span>
                                    <h2 class="fnt-50 fnt-800 clr-white">Got a project?<br />
                                        Let’s collaborate.</h2>
                                </div><a class="web-btn" style="color: #FD2E35; background-color: white;"
                                    href="<?php echo site_url(); ?>/project-enquiry/">Work With Us</a>
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
</main>

<?php get_footer(); ?>