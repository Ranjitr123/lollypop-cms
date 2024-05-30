<?php

/**
 *
 *Template Name: project royal-sundaram
 *Template post type: projects
 **/

get_header();
?>
<style>
    .procedure {
        height: 100%;
        border-radius: 8px;
        background: #F3F7FD;
        padding: 2rem;
    }

    .procedure__title {
        position: relative;
        font-size: 20px;
        font-weight: 800;
        line-height: 33.6px;
        letter-spacing: -0.03em;
        text-align: left;
        color: #221429;
        margin-bottom: 2em;
    }

    .procedure__title::after {
        content: "";
        width: 40px;
        height: 3px;
        background-color: #1363DF;
        position: absolute;
        left: 0;
        bottom: -1em;

    }

    .procedure__content {
        font-size: 14px;
        font-weight: 400;
        line-height: 22.4px;
        text-align: left;
    }

    .titleSection {
        font-size: 48px;
        font-weight: 800;
        line-height: 65.57px;
        letter-spacing: -0.04em;
        color: #1363DF;
        text-align: center;
        margin-bottom: 2rem;
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
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: rgba(255, 133, 31, 0.3);
        position: absolute;
        left: -12px;
        top: 0;
    }

    /* .conclusions li,
    ul {
        list-style: outside;
    } */

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
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div>
                        <div class="col-md-10 px-0 mx-auto">
                            <div class="mb-r-80">
                                <div class="project-step">
                                    <?php if (have_rows('project_overview')) : while (have_rows('project_overview')) : the_row(); ?>
                                            <div class="project-step__item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span></div>
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
                                <div class="procedure data-scroll">
                                    <div class="procedure__title"><?php echo the_sub_field('title') ?>
                                    </div>
                                    <div class="procedure__content"><?php echo the_sub_field('content') ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php }; ?>
    <!-- products -->
    <?php while (have_rows('products')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="row gx-4 gy-5">
                        <?php
                        $images = get_sub_field('images');
                        if ($images) {
                            foreach ($images as $image) {
                        ?>
                                <div class="col-md-12">
                                    <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="product image">
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- information -->
    <?php while (have_rows('information')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <!-- wireframes -->
    <?php while (have_rows('wireframes')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="col-md-19 mx-auto text-center mb-5 data-scroll"><span class="titleSection__subtitle"><?php echo the_sub_field('subtitle') ?></span></div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <!-- Design  -->
    <?php while (have_rows('design')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row mb-5 ">
                        <div class="col-md-3 titleSection text-md-left data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                        <div class="col-md-9 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    </div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <!-- Colours  -->
    <?php while (have_rows('colours')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row mb-5">
                        <div class="col-md-3 titleSection text-md-left data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                        <div class="col-md-9 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    </div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <!-- iconography  -->
    <?php while (have_rows('iconography')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center my-5 g-0">
                <div class="col-md-6 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="titleSection__subtitle text-center data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <!-- illustration  -->
    <?php while (have_rows('illustration')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center my-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="col-md-9  mx-auto text-center mb-5 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <!-- UI Design  -->
    <?php while (have_rows('ui_design')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row mb-5">
                        <div class="col-md-3 titleSection text-md-left data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                        <div class="col-md-9 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    </div>
                    <div class="row gx-4 gy-5">
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
            </div>
        </section>
    <?php endwhile; ?>
    <?php if (get_field('conclusions') != '') { ?>
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
            <div class="row">
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
            <div class="row">
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
</script>
<?php get_footer(); ?>