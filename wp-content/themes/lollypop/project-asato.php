<?php

/**
 *
 *Template Name: project asato
 *Template post type: projects
 **/

get_header();
?>
<style>
    .main {
        overflow: hidden;
    }

    .keyObjectives {
        position: relative;
        height: 100%;
        border-radius: 8px;
        background: #2A76F4;
        color: #fff;
        padding: 32px;
        display: flex;
        flex-direction: column;
        gap: 32px;
        font-size: 20px;
        line-height: 27.32px;
    }

    .keyObjectives::after {
        content: '';
        position: absolute;
        width: 246px;
        height: 206px;
        left: -20px;
        bottom: -20px;
        background-image: url("<?php echo get_template_directory_uri(); ?>/img/icons/k-icon.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }

    .keyObjectives__title {
        font-weight: 700;
    }

    .keyObjectives__content {
        font-weight: 400;
    }

    .userPersona {
        height: 100%;
        border-radius: 8px;
        color: #fff;
        padding: 16px;
        background: #0D2349;
        display: flex;
        flex-direction: column;
    }

    .userPersona__statement {
        font-size: 14px;
        font-weight: 400;
        line-height: 21px;
        margin-bottom: 32px;
    }

    .userPersona__username {
        font-size: 16px;
        font-weight: 600;
        line-height: 27.2px;
        margin-bottom: 16px;
    }

    .userPersona__position {
        font-size: 14px;
        font-weight: 400;
        line-height: 23.8px;
        color: #B3B6BC;
    }

    .journey {
        display: flex;
    }

    .journey__block {
        position: relative;
        margin-right: 20px;
        height: 36px;
        padding: 8px 0;
        background: #2A76F4;
        border-radius: 8px;
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 7.07px;
        font-weight: 700;
        line-height: 9.66px;
        text-align: center;
        color: #FFFFFF;
    }

    .journey__block::after {
        content: "";
        position: absolute;
        top: 50%;
        right: -17.5px;
        transform: translateY(-50%);
        width: 15px;
        height: 15px;
        background-image: url("<?php echo get_template_directory_uri(); ?>/img/icons/caret-right-fill.svg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .journey__block:last-child {
        margin-right: unset;
    }

    .journey__block:last-child::after {
        content: none
    }

    .journey__block p {
        margin-bottom: 0;
        font-size: 10px;
        font-weight: 700;
        line-height: 14px;

    }

    .journey__block i {
        font-size: 14px;
    }

    .bg-dark {
        background-color: #040C18
    }

    .wireframe__title {
        color: #F7F5F3;
        font-size: 40px;
        font-weight: 700;
    }

    .coma_icon {
        width: 56px;
        height: 42px;
    }

    .text--red {
        color: #F6303B
    }

    .design__img {
        padding: 4rem 0;
    }

    .design__img:nth-child(2n) {
        background-color: #0A244F;
    }

    .conclusion li,
    ul {
        list-style: outside;
    }

    @media (max-width: 768px) {
        .journey {
            overflow-x: auto;
        }

        .journey::-webkit-scrollbar,
        .journey::-webkit-scrollbar-thumb {
            display: none;
        }

        .journey__block {
            padding: 8px 8px;
            height: auto;
        }

        .wireframe__title {
            font-size: 28px;
            font-weight: 700;
        }
    }
</style>
<main class="main" style="background:#F5F5F5;">
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

    <!-- second Project Detail -->
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
                                                    <div class="project-step-disc__item">
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

    <!-- Key Objectives -->
    <?php while (have_rows('key_objectives')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center mb-5 g-0">
                <div class="col-md-8 px-0 mx-auto mx-auto">
                    <p><strong><?php echo the_sub_field('title') ?></strong></p>
                    <div class="row gx-4 gy-2">
                        <?php while (have_rows('content')) : the_row(); ?>
                            <div class="col-md-4">
                                <div class="keyObjectives">
                                    <div class="keyObjectives__title"><?php echo the_sub_field('position') ?>
                                    </div>
                                    <div class="keyObjectives__content"><?php echo the_sub_field('mission') ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
    ?>
    <?php while (have_rows('user_persona')) : the_row(); ?>
        <section class=" container">
            <div class="row justify-content-center mb-5 g-0">
                <div class="col-md-8 px-0 mx-auto mx-auto">
                    <p><strong><?php echo the_sub_field('title') ?></strong></p>
                    <div class="row gx-4 gy-2">
                        <?php while (have_rows('content')) : the_row(); ?>
                            <div class="col-md-4">
                                <div class="userPersona">
                                    <img class="coma_icon mb-3" src="<?php echo get_template_directory_uri(); ?>/img/icons/coma.png" alt='coma_icon' />
                                    <div class=" userPersona__statement"><?php echo the_sub_field('statement') ?>
                                    </div>
                                    <div class="userPersona__username"><?php echo the_sub_field('user_name') ?></div>
                                    <div class="userPersona__position"><?php echo the_sub_field('position') ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
    ?>
    <section class="container">
        <div class="row justify-content-center mb-5 g-0">
            <div class="col-md-8 px-0 mx-auto mx-auto">
                <p><strong><?php echo the_field('user_journey_title') ?></strong></p>
                <div class="row gx-4 gy-2">
                    <?php while (have_rows('user_journey_content')) : the_row(); ?>
                        <div class="col-md-12">
                            <p><strong><?php echo the_sub_field('position') ?></strong></p>
                            <div class="journey">
                                <?php while (have_rows('content')) : the_row(); ?>
                                    <div class="journey__block">
                                        <?php echo the_sub_field('function') ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- wireframe section -->
    <?php while (have_rows('wireframes')) : the_row(); ?>
        <section class="p-r-80 pb-0 pare-define">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">
                                        <?php if (have_rows('detail')) : while (have_rows('detail')) : the_row(); ?>
                                                <div class="project-step__item row">
                                                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span></div>
                                                    <div class="col-12 col-md-8 project-step-disc">
                                                        <div class="project-step-disc__item">
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
        </section>
        <div class="bg-dark">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto">
                        <div class="wireframe__title"><?php the_sub_field('title'); ?>
                        </div>
                        <div class="row g-4 pt-4">

                            <?php
                            $images = get_sub_field('images');
                            if ($images) {
                                foreach ($images as $image) {
                            ?>
                                    <div class="col-md-6">
                                        <img class="w-100" src="<?php echo $image; ?>" alt="wireframe image">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <section class="p-r-80 pb-0 pare-define ">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div>
                        <div class="col-md-10 px-0 mx-auto">
                            <div class="mb-r-80">
                                <div class="project-step">
                                    <?php if (have_rows('design_detail')) : while (have_rows('design_detail')) : the_row(); ?>
                                            <div class="project-step__item row">
                                                <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span></div>
                                                <div class="col-12 col-md-8 project-step-disc">
                                                    <div class="project-step-disc__item">
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
    </section>
    <?php while (have_rows('color_&_typeface')) : the_row(); ?>
        <div class="container">
            <div class="row">

                <div class="wireframe__title text--red"><?php the_sub_field('title'); ?>
                </div>
            </div>
        </div>
        <div>
            <?php
            $images = get_sub_field('images');
            if ($images) {
                foreach ($images as $image) {
            ?>
                    <div class=" design__img">
                        <div class="container">
                            <img class=" w-100" src="<?php echo $image; ?>" alt="design image">
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        </div>
    <?php endwhile; ?>

    <?php while (have_rows('website_ui')) : the_row(); ?>
        <div class="container">
            <div class="wireframe__title text--red pt-5"><?php the_sub_field('title'); ?>
                <div class="row g-5 pt-5">
                    <div class="col-md-6">
                        <div class="row g-5">
                            <?php
                            $images = get_sub_field('left_images');
                            if ($images) {
                                foreach ($images as $image) {
                            ?>
                                    <div class="col-md-12">
                                        <img class=" w-100" src="<?php echo $image; ?>" alt="design image">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-5">
                            <?php
                            $images = get_sub_field('right_images');
                            if ($images) {
                                foreach ($images as $image) {
                            ?>
                                    <div class="col-md-12">
                                        <img class="w-100" src="<?php echo $image; ?>" alt="design image">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php while (have_rows('product_ui')) : the_row(); ?>
        <div class="container">
            <div class="wireframe__title text--red pt-5"><?php the_sub_field('title'); ?>
            </div>
            <div class="row g-5 pt-5">
                <div class="col-md-6">
                    <div class="row g-5">
                        <?php
                        $images = get_sub_field('left_images');
                        if ($images) {
                            foreach ($images as $image) {
                        ?>
                                <div class="col-md-12">
                                    <img class=" w-100" src="<?php echo $image; ?>" alt="design image">
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-5">
                        <?php
                        $images = get_sub_field('right_images');
                        if ($images) {
                            foreach ($images as $image) {
                        ?>
                                <div class="col-md-12">
                                    <img class="w-100" src="<?php echo $image; ?>" alt="design image">
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php while (have_rows('responsive_ui')) : the_row(); ?>
        <div class="container">
            <div class="wireframe__title text--red pt-5"><?php the_sub_field('title'); ?>
            </div>
            <div class="row g-5 pt-5">
                <?php
                $images = get_sub_field('images');
                if ($images) {
                    foreach ($images as $image) {
                ?>
                        <div class="col-md-4">
                            <img class=" w-100" src="<?php echo $image; ?>" alt="design image">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    <?php endwhile; ?>

    <section class="conclusion-pad sec-pt">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mt-5">
                    <div class="col-md-10 px-0 mx-auto">
                        <div>
                            <div class="col-md-10 px-0 mx-auto">
                                <div class="mb-r-80">
                                    <div class="project-step">
                                        <div class="project-step__item row">
                                            <div class="col-12">
                                                <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block data-scroll">Conclusion</h3>
                                            </div>
                                            <div class="col-12 col-md-10 project-step-disc">
                                                <div class="project-step-disc__item conclusion">
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
    <!-- <section class="sec-pd pt-2">
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
    </section> -->
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

<?php get_footer(); ?>