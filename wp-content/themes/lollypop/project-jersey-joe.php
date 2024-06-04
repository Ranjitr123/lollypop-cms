<?php

/**
 *
 *Template Name: project jersey joe
 *Template post type: projects
 **/

get_header();
?>
<style>
    .branding {
        background-color: #FCF1E3;
        padding: 2rem;
    }

    .branding__image {
        background-color: #FFF6EF;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

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

    .btn-jersey {
        position: relative;
        z-index: 2;
        transition: transform 0.5s ease, background-color 0.5s ease;
    }

    .btn-jersey:hover {
        transform: translateY(-3px);
        box-shadow: 0px 6px 8px 0px rgba(251, 168, 59, 0.24);

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
        transition: opacity 1s ease;
    }

    .has-hover.hidden {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
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
    }

    .ui_component::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 325px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.64) 72.63%);
        pointer-events: none
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
        left: 75.9%;
        width: 18.5%;
        height: 73%;
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


    <!-- wireframes -->
    <?php while (have_rows('wireframes')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center pt-5 pb-4 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="col-md-8 mx-auto text-center mb-4 data-scroll"><span class="titleSection__subtitle"><?php echo the_sub_field('subtitle') ?></span></div>
                    <div class="wireframe_images">
                        <div>
                            <?php
                            $images = get_sub_field('images_left');
                            if ($images) {
                                foreach ($images as $image) {
                            ?><div class="mt-3">
                                        <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="information image">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div>
                            <?php
                            $images = get_sub_field('images_right');
                            if ($images) {
                                foreach ($images as $image) {
                            ?><div class="mt-3">
                                        <img class="w-100 data-scroll" src="<?php echo $image; ?>" alt="information image">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- Branding -->
    <?php while (have_rows('branding')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center py-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="col-md-8 mx-auto text-center mb-4 data-scroll"><span class="titleSection__subtitle"><?php echo the_sub_field('subtitle') ?></span></div>
                </div>
            </div>
            <div class="branding">
                <div class="branding__image">
                    <?php
                    $images = get_sub_field('images');
                    if ($images) {
                        foreach ($images as $image) {
                    ?><div>
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
    <!-- Brand pattern -->
    <?php while (have_rows('brand_pattern')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center pt-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto pt-4">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="col-md-8 mx-auto text-center pb-5 data-scroll "><span class="titleSection__subtitle"><?php echo the_sub_field('subtitle') ?></span></div>
                    <div>
                        <?php
                        $images = get_sub_field('images');
                        if ($images) {
                            foreach ($images as $image) {
                        ?><div class="mb-5">
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
                    <div class="row mb-3 d-flex align-items-center">
                        <div class="col-md-4 titleSection text-md-left data-scroll ali"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                        <div class="col-md-8 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row g-3">
                        <?php while (have_rows('details')) : the_row(); ?>
                            <div class="col d-flex flex-column align-items-center" style="gap:1rem;">
                                <div class="colour_title"><?php echo the_sub_field('title') ?></div>
                                <image src='<?php echo the_sub_field('image') ?>' class="w-100" alt='' />
                                <div>
                                    <div class="colour_text"><?php echo the_sub_field('text') ?></div>
                                    <div class="colour_color"><?php echo the_sub_field('color') ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- iconography  -->
    <?php while (have_rows('iconography')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center my-5 g-0">
                <div class="col-md-6 mx-auto pt-5">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="titleSection__subtitle text-center data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    <div class="row p-4">
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
    <!-- UI Component  -->
    <?php while (have_rows('ui_components')) : the_row(); ?>
        <section class="container">
            <div class="row justify-content-center my-5 g-0">
                <div class="col-12 col-md-11 col-lg-10 mx-auto" style="position: relative;">
                    <div class="titleSection data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                    <div class="col-md-9  mx-auto text-center mb-5 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    <div class="row gx-4 gy-5 ui_component">
                        <div class="col-12">
                            <div class='row justify-content-start'>
                                <div class="col-md-8 col-12 fullSize">
                                    <?php
                                    $svg_file1  = get_template_directory() . '/img/jersey-joe/5.svg';
                                    include $svg_file1
                                    ?>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-12 fullSize">
                                    <?php
                                    $svg_file2  = get_template_directory() . '/img/jersey-joe/7.svg';
                                    include $svg_file2
                                    ?>
                                </div>
                            </div>
                            <div class='row gx-3'>
                                <div class="col-4">
                                    <div class='row g-3'>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/2.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/3.png" />
                                        </div>
                                        <div class="col-12 hover" style="position: relative;">
                                            <div class="has-hover fullSize p-3">
                                                <?php
                                                $svg_file5  = get_template_directory() . '/img/jersey-joe/1.svg';
                                                include $svg_file5
                                                ?></div>
                                            <div class="has-hover hidden">
                                                <?php
                                                $svg_file15  = get_template_directory() . '/img/jersey-joe/15.svg';
                                                include $svg_file15
                                                ?></div>
                                        </div>

                                        <div class="col-12 fullSize">
                                            <?php
                                            $svg_file6  = get_template_directory() . '/img/jersey-joe/4.svg';
                                            include $svg_file6
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class='row'>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/11.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <?php
                                            $svg_file9  = get_template_directory() . '/img/jersey-joe/13.svg';
                                            include $svg_file9
                                            ?></div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/6.png" />
                                        </div>

                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/12.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class='row g-3'>
                                        <div class="col-12 mb-3 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/8.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/10.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/14.png" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-md-4 titleSection text-md-left data-scroll"><span class="titleBlue"><?php echo the_sub_field('title') ?></span></div>
                        <div class="col-md-8 titleSection__subtitle  data-scroll"><?php echo the_sub_field('subtitle') ?></div>
                    </div>
                    <div class="row gx-4 gy-5">
                        <div class="col-12 fullSize ui_design" style="position: relative;">
                            <div>
                                <?php
                                $svg_file15  = get_template_directory() . '/img/jersey-joe/23.svg';
                                include $svg_file15
                                ?>
                            </div>
                            <div class="mobileScroll1">
                                <?php
                                $svg_file16  = get_template_directory() . '/img/jersey-joe/24.svg';
                                include $svg_file16
                                ?>
                            </div>
                            <div class="mobileScroll2">
                                <?php
                                $svg_file17  = get_template_directory() . '/img/jersey-joe/25.svg';
                                include $svg_file17
                                ?>
                            </div>
                            <div class="mobileScroll">
                                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/22.png" />
                            </div>
                        </div>
                        <div class="col-12 fullSize ui_design" style="position: relative;">
                            <div>
                                <?php
                                $svg_file25  = get_template_directory() . '/img/jersey-joe/18.svg';
                                include $svg_file25
                                ?>
                            </div>
                            <div class="mobileScroll4">
                                <?php
                                $svg_file26  = get_template_directory() . '/img/jersey-joe/19.svg';
                                include $svg_file26
                                ?>
                            </div>
                            <div class="mobileScroll5">
                                <?php
                                $svg_file27  = get_template_directory() . '/img/jersey-joe/20.svg';
                                include $svg_file27
                                ?>
                            </div>
                            <div class="mobileScroll6">
                                <?php
                                $svg_file28  = get_template_directory() . '/img/jersey-joe/21.svg';
                                include $svg_file28
                                ?>
                            </div>
                            <div class="mobileScroll7">
                                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/22.png" />
                            </div>
                        </div>
                        <div class="col-12 fullSize ui_design" style="position: relative;">
                            <div class='p-5' style="background: rgba(253, 203, 137, 0.4);">
                                <div style="background-color: #44140A;">
                                    <?php
                                    $svg_file33  = get_template_directory() . '/img/jersey-joe/33.svg';
                                    include $svg_file33
                                    ?>
                                    <?php
                                    $svg_file34  = get_template_directory() . '/img/jersey-joe/34.svg';
                                    include $svg_file34
                                    ?>
                                    <?php
                                    $svg_file35  = get_template_directory() . '/img/jersey-joe/35.svg';
                                    include $svg_file35
                                    ?>
                                    <?php
                                    $svg_file36  = get_template_directory() . '/img/jersey-joe/36.svg';
                                    include $svg_file36
                                    ?>

                                    <?php
                                    $svg_file38 = get_template_directory() . '/img/jersey-joe/38.svg';
                                    include $svg_file38
                                    ?>
                                    <?php
                                    $svg_file39  = get_template_directory() . '/img/jersey-joe/39.svg';
                                    include $svg_file39
                                    ?>
                                    <?php
                                    $svg_file40  = get_template_directory() . '/img/jersey-joe/40.svg';
                                    include $svg_file40
                                    ?>
                                    <?php
                                    $svg_file41  = get_template_directory() . '/img/jersey-joe/41.svg';
                                    include $svg_file41
                                    ?>
                                </div>
                            </div>
                        </div>
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
    $(".project-step-disc ul").addClass('li-disc')
    $(".project-step-disc__item ul li").addClass('fnt-16 clr-black-354 mt-4 data-scroll')
</script>
<?php get_footer(); ?>