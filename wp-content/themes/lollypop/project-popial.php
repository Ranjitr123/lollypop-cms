<?php

/**
 *
 *Template Name: project popial
 *Template post type: projects
 **/

get_header();
?>
<style>
    .mx--5 {
        margin-inline: -2rem;
    }

    .procedure {
        height: 100%;
        border-radius: 16px;
        background: #F3F7FD;
        padding: 10.5rem 1rem 3rem 1rem;
        position: relative;
        font-family: "Lexend";
        overflow: hidden;
        color: #FFFFFF;
    }

    .procedure__title {
        position: relative;
        font-size: 44px;
        font-weight: 700;
        line-height: 57px;
        text-align: left;
        padding-left: 1rem;
        margin-bottom: 1rem;
        z-index: 1;
    }


    .procedure__content {
        padding-left: 25px;
        font-size: 16px;
        font-weight: 400;
        line-height: 20.8px;
        text-align: left;
    }

    .procedure__comma {
        width: 23px;
        height: 18px;
        position: absolute;
        top: -12px;
    }

    .procedure__image {
        width: 174px;
        height: 174px;
        border-radius: 8px;
        position: absolute;
        top: 30px;
        right: -25px;
    }

    .branding {
        background-color: rgba(213, 222, 246, 0.1);
        padding-bottom: 6rem;
        padding-top: 3rem;
    }


    .branding__title {
        font-family: "Manrope";
        font-size: 22px;
        font-weight: 700;
        line-height: 26.4px;
        text-align: left;
    }

    .typography {
        background-color: #F6F6F6;
        margin-inline: 2rem;
    }

    .typography__title {
        font-family: "Lexend";
        font-size: 64px;
        font-weight: 400;
        line-height: 80px;
        text-align: left;
        color: #5484FA;
    }

    .typography__subtitle {
        font-family: "Lexend";
        font-size: 20px;
        font-weight: 400;
        line-height: 30px;
        text-align: left;
        color: #6F757E;
    }

    .color__title {
        font-family: "Manrope";
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;

    }

    .responsive__image:nth-child(3n+2) {
        padding-top: 8rem;
    }

    .design_images {
        display: flex;
        gap: 2rem;
    }

    .conclusions li,
    ul {
        list-style: outside;
    }

    @media (max-width: 768px) {
        .mx--5 {
            margin-inline: -1rem;
        }

        .typography {
            margin-inline: 1rem;
        }

        .responsive__image:nth-child(3n+2) {
            padding-top: unset;
        }

        .design_images {
            flex-direction: column;
        }

    }
</style>
<main class="main" style="background:#FFFFFF;">
    <!-- Section Project Info -->
    <section class="sec-pd sec-bnr p-r-80">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row m-0">
                        <div class="col-12 col-md-11 offset-md-1">
                            <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('project_name'); ?></span>
                                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_title(); ?></h1>
                                <p class="fnt-24"><?php echo the_field('project_description'); ?></p>
                                <div class="project-type">
                                    <?php if (have_rows('project_tags')) : while (have_rows('project_tags')) : the_row(); ?>
                                            <span class="fnt-14 clr-black354"><?php echo the_sub_field('tag'); ?></span>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="wpdm-img" src="<?php the_field('project_banner') ?>" alt="Image">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- project overview -->
    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div>
                        <div class="col-md-10 px-0 mx-auto">
                            <div class="mb-r-80">
                                <div class="project-step">
                                    <?php if (have_rows('project_overview')) : while (have_rows('project_overview')) : the_row(); ?>
                                            <div class="project-step__item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                    <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                                </div>
                                                <div class="col-12 col-md-8 project-step-disc">
                                                    <div class="project-step-disc__item data-scroll">
                                                        <?php the_sub_field('content'); ?>
                                                    </div>
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
        </div>
    </section>

    <!-- procedure -->
    <?php if (have_rows('procedure')) { ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row g-5">
                        <?php while (have_rows('procedure')) : the_row(); ?>
                            <div class="col-md-4">
                                <div class="procedure data-scroll" style="background-color: <?php echo the_sub_field('background_color') ?>;">
                                    <div class="procedure__title"><?php echo the_sub_field('title') ?>
                                    </div>
                                    <div class="d-flex" style="position: relative;"><img class="procedure__comma" src="<?php the_sub_field('comma') ?>" alt="comma" />
                                        <div class="procedure__content"><?php echo the_sub_field('content') ?></div>
                                    </div>
                                    <img class="procedure__image" src="<?php the_sub_field('image') ?>" alt="Image" />
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php }; ?>
    <!-- wireframes -->
    <?php while (have_rows('wireframes')) : the_row(); ?>
        <section class="p-r-80 pb-0 pare-define">
            <div class="container">
                <div class="row my-5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">

                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item data-scroll">
                                                    <?php the_sub_field('subtitle'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <?php
                    $images = get_sub_field('images');
                    if ($images) {
                        foreach ($images as $image) {
                    ?>
                            <div class="col-md-12">
                                <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="information image">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- Branding -->
    <?php while (have_rows('branding')) : the_row(); ?>
        <section class="p-r-80 pb-0 pare-define">
            <div class="container">
                <div class="row my-5 pb-5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div class="row m-0">
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">

                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item data-scroll">
                                                    <?php the_sub_field('subtitle'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="branding">
                            <?php while (have_rows('details')) : the_row(); ?>
                                <div class="row m-0">
                                    <div class="col-md-10 px-0 mx-auto py-4">
                                        <div class="branding__title py-4"><?php the_sub_field('title'); ?></div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <?php
                                    $images = get_sub_field('images');
                                    if ($images) {
                                        foreach ($images as $image) {
                                    ?>
                                            <div class="branding__image col-md-10 mx-auto">
                                                <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="branding image">
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- typography and color  -->
    <section class="p-r-80 pare-define typography">
        <?php while (have_rows('typography')) : the_row(); ?>
            <div class="container">
                <div class="row py-5 mx--5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">

                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item data-scroll">
                                                    <?php the_sub_field('subtitle'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php while (have_rows('details')) : the_row(); ?>
                                    <div class="">
                                        <div class="typography__title"><?php the_sub_field('title'); ?></div>
                                        <div class="typography__subtitle py-4"><?php the_sub_field('description'); ?></div>
                                        <div>
                                            <?php
                                            $images = get_sub_field('images');
                                            if ($images) {
                                                foreach ($images as $image) {
                                            ?>
                                                    <div class="typography__image">
                                                        <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="branding image">
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php while (have_rows('color')) : the_row(); ?>
            <div class="container">
                <div class="row py-5 mb-5 mx--5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">
                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item data-scroll">
                                                    <?php the_sub_field('subtitle'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php while (have_rows('details')) : the_row(); ?>
                                    <div class="">
                                        <div class="color__title pt-5 pb-4"><?php the_sub_field('title'); ?></div>
                                        <div>
                                            <?php
                                            $images = get_sub_field('images');
                                            if ($images) {
                                                foreach ($images as $image) {
                                            ?>
                                                    <div class="color__image">
                                                        <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="branding image">
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        <?php endwhile; ?>
    </section>

    <!-- Design  -->
    <?php while (have_rows('design')) : the_row(); ?>
        <section class="p-r-80 pb-0 pare-define pb-5">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">

                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item data-scroll">
                                                    <?php the_sub_field('subtitle'); ?>
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
            <div class="design_images px-4">
                <?php
                $images = get_sub_field('images');
                if ($images) {
                    foreach ($images as $image) {
                ?>
                        <div>
                            <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="information image">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- Responsive UI  -->
    <?php while (have_rows('responsive_ui')) : the_row(); ?>
        <section class="p-r-80 pb-0 pare-define">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">
                                        <div class="project-step__item row">
                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                            </div>
                                            <div class="col-12 col-md-8 project-step-disc">
                                                <div class="project-step-disc__item data-scroll">
                                                    <?php the_sub_field('subtitle'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 m-0">
                    <?php
                    $images = get_sub_field('images');
                    if ($images) {
                        foreach ($images as $image) {
                    ?>
                            <div class="col-md-4 responsive__image">
                                <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="information image">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- conclusions -->
    <?php if (get_field('conclusions') != '') { ?>
        <section class="conclusion-pad sec-pt">
            <div class="container">
                <div class="row m-0">
                    <div class="col-md-12 mt-5">
                        <div class="col-md-10 px-0 mx-auto">
                            <div>
                                <div class="col-md-10 px-0 mx-auto">
                                    <div class="mb-r-80">
                                        <div class="project-step">
                                            <div class="project-step__item row">
                                                <div class="col-12">
                                                    <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block data-scroll">Conclusion</h3>
                                                </div>
                                                <div class="col-md-12 project-step-disc mt-4">
                                                    <div class="project-step-disc__item conclusions data-scroll">
                                                        <?php echo the_field('conclusions'); ?>
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
    <section class="sec-pd pt-2">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="col-md-10 px-0 mx-auto">
                        <div class="projects-nav d-flex flex-column flex-md-row justify-content-between">
                            <div class="projects-nav__prev">
                                <div class="d-flex">
                                    <?php $nextPost = get_next_post();
                                    if ($nextPost) { ?>
                                        <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-leftAr.svg" alt="Image"></div>
                                        <div class="ps-4">
                                            <?php
                                            $destination = get_field('company_name', $nextPost->ID);
                                            next_post_link('%link', '                       
                            <h4 class="fnt-28 fnt-800">' . $destination . '</h4> '); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>


                            <div class="projects-nav__next">
                                <div class="d-flex ms-auto">
                                    <?php
                                    $prevPost = get_previous_post();
                                    if ($prevPost) { ?>
                                        <div class="pe-4">
                                            <?php
                                            $destination = get_field('company_name', $prevPost->ID);
                                            previous_post_link('%link',  ' <h4 class="fnt-28 fnt-800">' . $destination . '</h4>');  ?>
                                        </div>
                                        <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-rightAr.svg" alt="Image"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-footer-trans">
        <div class="container z-1">
            <div class="row m-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="py-70 px-3 data-scroll" style="background: #221429;">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
                                <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Got An Idea?</span>
                                    <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
                                </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
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
    $(".project-step-disc ul").addClass('li-disc m-4')
    $(".project-step-disc__item ul li").addClass('fnt-16 clr-black-354 data-scroll my-4')
    $(".branding__image:last-child:not(:first-child)").addClass('col-md-12 px-auto')
</script>
<?php get_footer(); ?>