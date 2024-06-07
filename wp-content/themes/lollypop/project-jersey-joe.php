<?php

/**
 *
 *Template Name: project jersey joe
 *Template post type: projects
 **/

get_header();
?>
<style>
    .bestSeller1 {
        position: relative;
        overflow: hidden;
    }



    .bestSeller1-bg {
        position: absolute;
        width: 67%;
        top: 17%;
        left: 16%;
        z-index: 1;
        transform: rotate(-200deg);
        transition: all .65s ease-out;
    }

    .bestSeller1-bg.active {
        transform: rotate(-4deg);
    }

    .bestSeller1-banner {
        position: absolute;
        width: 80%;
        right: 10%;
        z-index: 3;
        opacity: 0;
        display: none;
        transition: all .65s ease-out;
        bottom: 5%;
    }

    .bestSeller1-banner.active {
        display: block;
        opacity: 1;
        transition: all .65s ease-out;
    }

    .bestSeller1-slide {
        position: absolute;
        width: 54%;
        top: 20%;
        z-index: 2;
        transition: all .65s ease-out;
    }


    .bestSeller1-slide.left {
        right: unset;
        left: -100%;
        transition: all .65s ease-out;
    }

    .bestSeller1-slide.right {
        right: unset;
        width: 68%;
        top: 23%;
        left: 100%;
        transition: left .65s ease-out;
    }

    .bestSeller1-slide.active {
        left: 17%;
        transition: all .65s ease-out;
    }


    .bestSeller1-menu {
        position: absolute;
        left: 0%;
        z-index: 900;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 16%;
        overflow-x: auto;
    }

    .bestSeller1-menu::-webkit-scrollbar {
        display: none;
    }

    .bestSeller1-dot {
        cursor: pointer;
        font-family: "Rubik";
        display: inline-block;
        font-size: 1.2vw;
        font-weight: 400;
        color: #73382A;
        padding-inline: 12px;
        border-right: 1px solid rgba(31, 7, 2, 0.12);
        transition: all .3s ease;
    }


    .bestSeller1-dot.active {
        font-weight: 600;
        font-size: 1.4vw;
        color: rgba(92, 38, 26, 1)
    }

    .bestSeller {
        position: relative;
        overflow: hidden;
    }

    .bestSeller-bg {
        position: absolute;
        width: 32%;
        top: 28%;
        left: 35%;
        z-index: 1;
        transform: rotate(-4deg);
        transition: all .65s ease-out;
    }

    .bestSeller-bg.active {
        transform: rotate(-184deg);
    }

    .bestSeller-banner {
        position: absolute;
        width: 24%;
        top: 35%;
        right: 13%;
        z-index: 3;
        opacity: 0;
        display: none;
        transition: all .65s ease-out;
    }

    .bestSeller-banner.active {
        display: block;
        opacity: 1;
        transition: all .65s ease-out;
    }

    .bestSeller-slide {
        position: absolute;
        width: 33%;
        top: 28%;
        z-index: 2;
        transition: all .65s ease-out;
    }


    .bestSeller-slide.left {
        right: unset;
        left: -100%;
        transition: all .65s ease-out;
    }

    .bestSeller-slide.right {
        right: unset;
        top: 41%;
        left: 100%;
        transition: left .65s ease-out;
    }

    .bestSeller-slide.active {
        left: 21%;
        transition: all .65s ease-out;
    }


    .bestSeller-menu {
        position: absolute;
        left: 0%;
        z-index: 900;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 23%;
    }

    .bestSeller-dot {
        cursor: pointer;
        font-family: "Rubik";
        display: inline-block;
        font-size: 1.2vw;
        font-weight: 400;
        color: #73382A;
        padding-inline: 12px;
        border-right: 1px solid rgba(31, 7, 2, 0.12);
        transition: all .3s ease;
    }

    .bestSeller-menu::after {
        content: '';
        position: absolute;
        width: 20%;
        height: 100%;
        left: 0%;
        top: 0;
        background: linear-gradient(90deg, #FCF1E3 34.38%, rgba(252, 241, 227, 0.2) 100%);
    }

    .bestSeller-menu::before {
        position: absolute;
        content: '';
        width: 20%;
        height: 100%;
        right: 0%;
        top: 0;
        background: linear-gradient(270deg, #FCF1E3 34.38%, rgba(252, 241, 227, 0.2) 100%);

    }

    .bestSeller-dot.active {
        font-weight: 600;
        font-size: 1.4vw;
        color: rgba(92, 38, 26, 1)
    }

    .slideshow-container {
        width: 100%;
        position: relative;
        margin: auto;
        height: 50vh;
    }

    .slideshow2 {
        position: relative;
        overflow: hidden;

    }

    .customSlider2 {
        position: absolute;
        top: 25%;
        left: 100%;
        width: 70%;
        transition: left 0s .75s;
        /* display: none; */
    }

    .customSlider2.left {
        transition: left .65s ease-out;
        left: -100%;
    }

    .customSlider2.right {
        transition: left .65s ease-out;
        left: 100%;
    }

    .customSlider2.active {
        left: 15%;
        transition: left .65s ease-out;
    }

    .slick-menu {
        position: absolute;
        left: 0;
        z-index: 900;
        width: 100%;
        bottom: 5%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .slick-menu div {
        cursor: pointer;
        display: inline-block;
        width: 5px;
        height: 5px;
        background: #fff;
        border-radius: 50px;
        transition: all .3s ease;

    }

    .slick-menu div.active {
        width: 10px;
        transition: all .3s ease;
    }

    .btn-viewMenu {
        background-color: #FFFFFF;
        box-shadow: 0px 6px 10px 0px rgba(251, 168, 59, 0.24);
        color: #44140A;
        font-family: "Rubik";
        font-weight: 700;
        font-size: 0.9vw;
        display: flex;
        align-items: center;
        justify-content: center;
        width: fit-content;
        border-radius: 32px;
        transition: transform 0.7s ease, background-color 0.5s ease;

    }

    .btn-viewMenu:hover {
        transform: translateY(-3px);
        box-shadow: 0px 6px 8px 0px rgba(251, 168, 59, 0.24);
    }


    .btn-move {
        position: absolute;
        width: 3vw;
        height: 3vw;
        top: 49%;
        left: unset;
        right: 5%;
        z-index: 3;
        cursor: pointer;
    }

    .btn-move.btn-left {
        left: 5%;
        right: unset;
        transform: rotate(180deg);
    }

    .customSlider {
        position: absolute;
        width: 40%;
        top: 25%;
        height: auto;
        opacity: 0.8;
        z-index: 0;
        transition: all 0.5s ease-in-out;
    }

    .customSlider.active {
        opacity: 1;
        z-index: 1;
        width: 60%;
        top: 10%;
        left: 20%;

    }

    .customSlider img {
        width: 100%;
        height: auto;
    }

    .slider-right {
        left: unset;
        right: 15%;
        transition: all 0.5s ease-in-out;
    }


    .slider-left {
        right: unset;
        left: 15%;
        transition: all 0.5s ease-in-out;
    }

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
                                                    <div class="project-step-disc__item overview2 data-scroll">
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
                                <div class="col-md-8 col-12 fullSize" style="position: relative;">
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/5.png" />
                                    <div class='btn-jersey btn-submit'>SUBMIT</div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-12 fullSize">
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/7.png" />
                                </div>
                            </div>
                            <div class='row gx-3'>
                                <div class="col-4">
                                    <div class='row g-3'>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/2.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/3.png" />
                                        </div>
                                        <div class="col-12 hover" style="position: relative;">
                                            <div class="has-hover fullSize p-3">
                                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/1.png" />
                                            </div>
                                            <div class="has-hover hidden">
                                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/15.png" />
                                            </div>
                                        </div>

                                        <div class="col-12 fullSize" style="position: relative;">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/4.png" />
                                            <div class="btn-jersey" style="position: absolute;width: 50%;height: 12%;z-index: 0;bottom: 12%;left: 23%;">
                                                VIEW FULL MENU</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class='row'>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/11.png" />
                                        </div>
                                        <div class="col-12 p-4 fullSize" style="position: relative;">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/13.png" />
                                            <div class="btn-jersey" style="position: absolute;width: 31%;height: 15%;z-index: 0;bottom: 12%;left: 57%;">
                                                ORDER NOW</div>
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/6.png" />
                                        </div>

                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/12.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class='row g-3'>
                                        <div class="col-12 mb-3 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/8.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/10.png" />
                                        </div>
                                        <div class="col-12 fullSize">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/14.png" />
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
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/23.png" />
                            </div>
                            <div class="mobileScroll1">
                                <img class="w-100 h-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/24.png" />
                            </div>
                            <div class="mobileScroll2">
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/25.png" />
                            </div>
                            <div class="mobileScroll">
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/22.png" />
                            </div>
                        </div>
                        <div class="col-12 fullSize ui_design" style="position: relative;">
                            <div>
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/18.png" />
                            </div>
                            <div style="position: absolute;width: 25%;height: 15%;z-index: 0;bottom: 12%;left: 4%;">
                                <div style="position: relative;">
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/13.png" />
                                    <div class="btn-jersey" style="position: absolute;width: 39%;height: 20%;z-index: 0;bottom: 4%;left: 57%;">
                                        ORDER NOW</div>
                                </div>
                            </div>
                            <div class="mobileScroll4">
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/19.png" />
                            </div>
                            <div class="mobileScroll5">
                                <div style="position: relative;">
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/20.png" />
                                    <div class="btn-jersey" style="position: absolute;width: 54%;height: 15%;z-index: 0;bottom: 15%;left: 24%;">
                                        VIEW FULL MENU</div>
                                </div>
                            </div>
                            <div class="mobileScroll6">
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/21.png" />
                            </div>
                            <div class="mobileScroll7">
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/42.png" />
                                <div class="bestSeller1">
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/43.png" />
                                    <div class="bestSeller1-bg active">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/28.png" />
                                    </div>
                                    <div class="bestSeller1-slide left active">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/27.png" />
                                    </div>
                                    <div class="bestSeller1-slide right">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/26.png" />

                                    </div>
                                    <div class="bestSeller1-banner left active" style="pointer-events: none;">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/29.png" />
                                        <div class="btn-jersey" style="position: absolute;width: 56%;height: 15%;z-index: 4;bottom: 13%;left: 24%; pointer-events: auto;">
                                            VIEW FULL MENU</div>
                                    </div>
                                    <div class="bestSeller1-banner right" style="pointer-events: none;">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/30.png" />
                                        <div class="btn-jersey" style="position: absolute;width: 56%;height: 15%;z-index: 4;bottom: 13%;left: 24%;pointer-events: auto;">
                                            VIEW FULL MENU</div>
                                    </div>
                                    <div class="btn-move btn-left" style="top:70%" onclick="plusDivs3(-1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                    <div class="btn-move" style="top:70%" onclick="plusDivs3(1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                    <div class="bestSeller1-menu">
                                        <div class="bestSeller1-dot">SANDWICHES</div>
                                        <div class="bestSeller1-dot">SANDWICHES</div>
                                        <div class="bestSeller1-dot">FRIES</div>
                                        <div class="bestSeller1-dot left active">BURGERS</div>
                                        <div class="bestSeller1-dot right">CHEESESTEAKS</div>
                                        <div class="bestSeller1-dot">SIDES</div>
                                        <div class="bestSeller-dot">SALAD</div>
                                        <div class="bestSeller-dot">BEVERAGES</div>

                                    </div>
                                </div>
                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/44.png" />
                            </div>
                        </div>
                        <div class="col-12 fullSize ui_design" style="position: relative;">
                            <div class='p-5' style="background: rgba(253, 203, 137, 0.4);">
                                <div style="background-color: #44140A;">
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/33.png" />
                                    <?php
                                    $svg_file34  = get_template_directory() . '/img/jersey-joe/34.svg';
                                    include $svg_file34
                                    ?>
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/35.png" />
                                    <div class="bestSeller">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/36.png" />
                                        <div class="bestSeller-bg active">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/28.png" />
                                        </div>
                                        <div class="bestSeller-slide left active">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/27.png" />
                                        </div>
                                        <div class="bestSeller-slide right">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/26.png" />

                                        </div>
                                        <div class="bestSeller-banner left active" style="pointer-events: none;">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/29.png" />
                                            <div class="btn-jersey" style="position: absolute;width: 56%;height: 15%;z-index: 4;bottom: 13%;left: 24%; pointer-events: auto;">
                                                VIEW FULL MENU</div>
                                        </div>
                                        <div class="bestSeller-banner right" style="pointer-events: none;">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/30.png" />
                                            <div class="btn-jersey" style="position: absolute;width: 56%;height: 15%;z-index: 4;bottom: 13%;left: 24%;pointer-events: auto;">
                                                VIEW FULL MENU</div>
                                        </div>
                                        <div class="btn-move btn-left" onclick="plusDivs1(-1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                        <div class="btn-move" onclick="plusDivs1(1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                        <div class="bestSeller-menu">
                                            <div class="bestSeller-dot">DESSERT</div>
                                            <div class="bestSeller-dot">SANDWICHES</div>
                                            <div class="bestSeller-dot">FRIES</div>
                                            <div class="bestSeller-dot left active">BURGERS</div>
                                            <div class="bestSeller-dot right">CHEESESTEAKS</div>
                                            <div class="bestSeller-dot">SIDES</div>
                                            <div class="bestSeller-dot">SALAD</div>
                                            <div class="bestSeller-dot">BEVERAGES</div>
                                            <div class="bestSeller-dot">DESSERT</div>
                                        </div>
                                    </div>
                                    <div class="slideshow-container">
                                        <div class="customSlider slider-left">
                                            <div style="position: relative;"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/slide1.png" />
                                                <div class="btn-viewMenu" style="position: absolute; bottom: 10%; left:10%; width:20%;height:14%;">VIEW MENU</div>
                                            </div>
                                        </div>
                                        <div class="customSlider active">
                                            <div style="position: relative;">
                                                <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/slide2.png" />
                                                <div class="btn-viewMenu" style="position: absolute; bottom: 10%; left:10%; width:20%;height:14%;">VIEW MENU</div>
                                            </div>
                                        </div>
                                        <div class="customSlider slider-right">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/slide3.png" />
                                        </div>
                                        <div class="btn-move btn-left" onclick="plusDivs(-1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                        <div class="btn-move" onclick="plusDivs(1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                    </div>


                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/38.png" />
                                    <div class="slideshow2">
                                        <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/39.png" />
                                        <div class="customSlider2 left active">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/slider4.png" />
                                        </div>
                                        <div class="customSlider2 right">
                                            <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/slider5.png" />
                                        </div>
                                        <div class="btn-move btn-left btn-left2" onclick="plusDivs2(-1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                        <div class="btn-move btn-right2" onclick="plusDivs2(1)"><img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/btn-move.png" /></div>
                                        <div class="slick-menu">
                                            <div class="slick-dot active"></div>
                                            <div class="slick-dot"></div>
                                            <div class="slick-dot"></div>
                                            <div class="slick-dot"></div>
                                        </div>
                                    </div>
                                    <?php
                                    $svg_file40  = get_template_directory() . '/img/jersey-joe/40.svg';
                                    include $svg_file40
                                    ?>
                                    <img class="w-100" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jersey-joe/41.png" />
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
    $(".project-step-disc__item overview2 ul li").addClass('fnt-16 clr-black-354 mt-4 data-scroll')
    $(".project-step-disc__item conclusions ul li").addClass('fnt-16 clr-black-354 data-scroll')
</script>
<script>
    function plusDivs3(n) {
        showDivs3(n);
    }

    function showDivs3(n) {
        let slides_left = document.querySelector(".bestSeller1-slide.left");
        let slides_right = document.querySelector(".bestSeller1-slide.right");
        let slider_bg = document.querySelector(".bestSeller1-bg")
        let slider_bannerLeft = document.querySelector(".bestSeller1-banner.left")
        let slider_bannerRight = document.querySelector(".bestSeller1-banner.right")
        let dotLeft = document.querySelector(".bestSeller1-dot.left")
        let dotRight = document.querySelector(".bestSeller1-dot.right")
        slides_left.classList.remove('active')
        slides_right.classList.remove('active')
        slider_bannerLeft.classList.remove('active')
        slider_bannerRight.classList.remove('active')
        dotLeft.classList.remove('active')
        dotRight.classList.remove('active')
        if (n > 0) {
            slides_right.classList.add('active')
            slider_bg.classList.remove('active')
            slider_bannerRight.classList.add('active')
            dotRight.classList.add('active')
        } else {
            slides_left.classList.add('active')
            slider_bg.classList.add('active')
            slider_bannerLeft.classList.add('active')
            dotLeft.classList.add('active')
        }

        const menuList = document.querySelector('.bestSeller1-menu');
        const activeMenuItem = document.querySelector('.bestSeller1-menu .active');

        if (activeMenuItem) {
            const menuListRect = menuList.getBoundingClientRect();
            const activeMenuItemRect = activeMenuItem.getBoundingClientRect();

            const scrollX = activeMenuItemRect.left - menuListRect.left + (activeMenuItemRect.width - menuListRect.width) / 2;

            menuList.scrollTo({
                left: scrollX,
                behavior: 'smooth'
            });
        }
    }

    function plusDivs1(n) {
        showDivs1(n);
    }

    function showDivs1(n) {
        let slides_left = document.querySelector(".bestSeller-slide.left");
        let slides_right = document.querySelector(".bestSeller-slide.right");
        let slider_bg = document.querySelector(".bestSeller-bg")
        let slider_bannerLeft = document.querySelector(".bestSeller-banner.left")
        let slider_bannerRight = document.querySelector(".bestSeller-banner.right")
        let dotLeft = document.querySelector(".bestSeller-dot.left")
        let dotRight = document.querySelector(".bestSeller-dot.right")
        slides_left.classList.remove('active')
        slides_right.classList.remove('active')
        slider_bannerLeft.classList.remove('active')
        slider_bannerRight.classList.remove('active')
        dotLeft.classList.remove('active')
        dotRight.classList.remove('active')
        if (n > 0) {
            slides_right.classList.add('active')
            slider_bg.classList.remove('active')
            slider_bannerRight.classList.add('active')
            dotRight.classList.add('active')
        } else {
            slides_left.classList.add('active')
            slider_bg.classList.add('active')
            slider_bannerLeft.classList.add('active')
            dotLeft.classList.add('active')
        }

    }

    function plusDivs(n) {
        showDivs(n);
    }

    function showDivs(n) {
        let slides_active = document.querySelector(".customSlider.active");
        let slides_left = document.querySelector(".customSlider.slider-left");
        let slides_right = document.querySelector(".customSlider.slider-right");

        if (n > 0) {
            slides_active.classList.remove('active')
            slides_active.classList.add('slider-left')
            slides_right.classList.remove('slider-right')
            slides_right.classList.add('active')
            slides_left.classList.remove('slider-left')
            slides_left.classList.add('slider-right')
        } else {
            slides_left.classList.remove('slider-left')
            slides_right.classList.remove('slider-right')
            slides_active.classList.remove('active')
            slides_left.classList.add('active')
            slides_right.classList.add('slider-left')
            slides_active.classList.add('slider-right')
        }

    }


    var slideIndex2 = 1;
    showDivs2(slideIndex2);

    function plusDivs2(n) {
        showDivs2(slideIndex2 += n);
    }

    function currentDiv2(n) {
        showDivs2(slideIndex2 = n);
    }

    function showDivs2(n) {
        if (n > 2) {
            slideIndex2 = 2
            return;
        }
        var i;
        var x = document.getElementsByClassName("customSlider2");
        var dots = document.getElementsByClassName("slick-dot");
        var arrowLeft = document.querySelector(".btn-left2")
        if (n > x.length) {
            slideIndex2 = 1
        }
        if (n < 1) {
            slideIndex2 = x.length
        }
        if (n == 1) {
            arrowLeft.style.display = "none";
        } else {
            arrowLeft.style.display = "block";

        }
        for (i = 0; i < x.length; i++) {
            x[i].classList.remove('active')
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove('active')
        }
        // x[slideIndex2 - 1].style.display = "block";
        x[slideIndex2 - 1].classList.add('active');
        dots[slideIndex2 - 1].classList.add('active');
    }
</script>
<?php get_footer(); ?>