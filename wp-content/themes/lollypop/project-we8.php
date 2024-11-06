<?php

/**
 *
 *Template Name: project-we8
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
        margin-bottom: 56px;
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
</style>

<main class="main" style="background: #FFFFFF;
;">
    <!-- Section Project Info -->
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

    <!-- Section Persona -->
    <section class="section-style">
        <div class="container">
            <?php if (have_rows('main_content')):
                while (have_rows('main_content')):
                    the_row(); ?>
                    <!-- Heading -->
                    <?php if (get_sub_field('heading') != '')
                        ; ?>
                    <div class="w-100 section-heading">
                        <?php the_sub_field('heading'); ?>
                    </div>
                    <!-- Main Image 1 -->
                    <?php if (get_sub_field('main_image_1') != '') { ?>
                        <div class="w-100 define_web_image"><img class="img-project-dtl data-scroll"
                                src="<?php the_sub_field('main_image_1'); ?>" alt="Image">
                        </div>
                    <?php } ?>
                    <!-- Title 1 & content -->
                    <?php if (get_sub_field('title_1') != '') { ?>
                        <div class="row brief_row">
                            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                <div class="col-md-10 px-0 mx-auto">
                                    <div>
                                        <div class="project-step">
                                            <div class="brief-item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span
                                                        class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title_1'); ?></span>
                                                </div>
                                                <div style="margin-bottom: 112px"
                                                    class="col-12 col-md-8 project-step-disc gray-stroke position-relative px-0">
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
                    <?php } ?>
                    <!-- Main Image 2 -->
                    <?php if (get_sub_field('main_image_2') != '') { ?>
                        <div class="w-100 define_web_image"><img class="img-project-dtl data-scroll"
                                src="<?php the_sub_field('main_image_2'); ?>" alt="Image">
                        </div>
                    <?php } ?>
                    <!-- Title 2 & content -->
                    <?php if (get_sub_field('title_2') != '') { ?>
                        <div class="row brief_row">
                            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                                <div class="col-md-10 px-0 mx-auto">
                                    <div>
                                        <div class="project-step">
                                            <div class="brief-item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span
                                                        class="red-stroke clr-second fnt-24 text-start d-inline-block fnt-700 data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title_2'); ?></span>
                                                </div>
                                                <div style="margin-bottom: 112px"
                                                    class="col-12 col-md-8 project-step-disc gray-stroke position-relative px-0">
                                                    <div class="brief-content pb-5" style="position: relative;">
                                                        <?php the_sub_field('content_2'); ?>
                                                    </div>
                                                    <div class="w-100 define_web_image pb-5"><img
                                                            class="img-project-dtl data-scroll"
                                                            src="<?php the_sub_field('sub_image_1'); ?>" alt="Image">
                                                    </div>
                                                    <div class="brief-content pb-5" style="position: relative;">
                                                        <?php the_sub_field('note_1'); ?>
                                                    </div>
                                                    <div class="w-100 define_web_image pb-5"><img
                                                            class="img-project-dtl data-scroll"
                                                            src="<?php the_sub_field('sub_image_2'); ?>" alt="Image">
                                                    </div>
                                                    <div class="brief-content" style="position: relative;">
                                                        <?php the_sub_field('note_2'); ?>
                                                    </div>

                                                </div>
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
                    <?php $mainImg3 = get_sub_field('main_image_3');
                    if ($mainImg3 != '') ?>
                    <div class="w-100 define_web_image"><img class="img-project-dtl data-scroll"
                            src="<?php the_sub_field('main_image_3'); ?>" alt="Image">
                    </div>
                <?php endwhile;
            endif; ?>

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